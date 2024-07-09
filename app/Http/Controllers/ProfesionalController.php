<?php

namespace App\Http\Controllers;

use App\Models\Profesionale;
use App\Models\Cargo;
use Illuminate\Http\Request;

class ProfesionalController extends Controller
{
    public function index()
    {

        $profesionales = Profesionale::all();
        return view('profesionales.principal.base', ['profesionales' => $profesionales]);
    }

    public function create()
    {
        $cargos = Cargo::all();
        return view('profesionales.create', ['cargos'=> $cargos]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'id_cargo' => 'required',
            'telefono' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Manejar la carga de la imagen
        $imageName = null;
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/imgs/profesionales'), $imageName);
        }

        Profesionale::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'id_cargo' => $request->id_cargo,
            'telefono' => $request->telefono,
            'foto' => $imageName,
        ]);

        return redirect()->route('profesionales.index')->with('success', 'Profesional agregado con éxito.');
    }

    public function edit(Profesionale $profesionale)
    {
        $cargos = Cargo::all();
        return view('profesionales.update', compact('profesionale','cargos'));
    }

    public function update(Request $request, Profesionale $profesionale)
    {
        $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'id_cargo' => 'required',
            'telefono' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Manejar la carga de la imagen
        if ($request->hasFile('foto')) {
            // Eliminar la imagen antigua si existe
            if ($profesionale->foto) {
                $oldImagePath = public_path('assets/imgs/profesionales/' . $profesionale->foto);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Subir la nueva imagen
            $image = $request->file('foto');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/imgs/profesionales'), $imageName);

            // Actualizar el campo de la imagen en el modelo
            $profesionale->foto = $imageName;
        }

        // Actualizar los demás campos
        $profesionale->update($request->except('foto') + ['foto' => $profesionale->foto]);

        return redirect()->route('profesionales.index')->with('success', 'Profesional actualizado con éxito.');
    }

    public function destroy(Profesionale $profesionale)
    {
        // Eliminar la imagen asociada si existe
        if ($profesionale->foto) {
            $imagePath = public_path('assets/imgs/profesionales/' . $profesionale->foto);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Eliminar el profesional
        $profesionale->delete();

        return redirect()->route('profesionales.index')->with('success', 'Profesional eliminado con éxito.');
    }
}
