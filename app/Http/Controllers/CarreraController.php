<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{

    public function index()
    {
        $carreras = Carrera::all();
        return view('carreras.principal.base', ['carreras' => $carreras]);
    }

    public function create()
    {
        return view('carreras.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_carrera' => 'required|string',
            'descripcion' => 'required|string',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif',
            'url_inscripcion' => 'required|string',
            'url_plataforma' => 'required|string',
        ]);

        // Manejar la carga de la imagen
        $imageName = null; // Inicializar la variable $imageName como null
        if ($request->hasFile('logo')) { // Verificar si se ha cargado un archivo de imagen
            $image = $request->file('logo'); // Obtener el archivo de imagen cargado
            $imageName = time() . '.' . $image->getClientOriginalExtension(); // Generar un nombre único para la imagen usando el tiempo actual y la extensión del archivo
            $image->move(public_path('assets/imgs/carreras'), $imageName); // Mover la imagen a la carpeta 'public/images' con el nombre generado
        }

        // Crear nueva carrera
        Carrera::create([
            'nombre_carrera' => $request->nombre_carrera, // Asignar el nombre de la solicitud al campo 'nombre' del modelo
            'descripcion' => $request->descripcion, // Asignar la descripción de la solicitud al campo 'descripcion' del modelo
            'logo' => $imageName, // Asignar el nombre de la imagen al campo 'logo' del modelo
            'url_inscripcion' => $request->url_inscripcion, // Asignar la URL de inscripción de la solicitud al campo 'url_inscripcion' del modelo
            'url_plataforma' => $request->url_plataforma, // Asignar la URL de plataforma de la solicitud al campo 'url_plataforma' del modelo
        ]);

        // Redirigir a la lista de carreras
        return redirect()->route('carreras.index')->with('success', 'Carrera agregada con éxito.');
    }


    public function show(Carrera $carrera)
    {
        //
    }

    public function edit(Carrera $carrera)
    {
        return view('carreras.update', ['carrera' => $carrera]);
    }

    public function update(Request $request, Carrera $carrera)
    {
        $request->validate([
            'nombre_carrera' => 'required|string',
            'descripcion' => 'required|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'url_inscripcion' => 'required|string',
            'url_plataforma' => 'required|string',
        ]);

        // Manejar la carga de la nueva imagen
        if ($request->hasFile('logo')) {
            // Eliminar la imagen antigua si existe
            if ($carrera->logo) {
                $oldImagePath = public_path('assets/imgs/carreras/' . $carrera->logo);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Subir la nueva imagen
            $image = $request->file('logo');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('assets/imgs/carreras'), $imageName);

            // Actualizar el campo de la imagen en el modelo
            $carrera->logo = $imageName;
        }

        // Actualizar los demás campos
        $carrera->update($request->except('logo') + ['logo' => $carrera->logo]);

        return redirect()->route('carreras.index')->with('success', 'Carrera actualizada con éxito.');
    }

    public function destroy(Carrera $carrera)
    {
        $carrera->delete();
        return redirect()->route('carreras.index');
    }
}
