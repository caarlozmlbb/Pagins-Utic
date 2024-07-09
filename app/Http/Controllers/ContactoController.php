<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    {
        $contactos = Contacto::all();
        return view('contactos.principal.base', ['contactos' => $contactos]);
    }

    public function create()
    {
        return view('contactos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'direccion' => 'required|string',
            'telefono' => 'required|string',
            'correo' => 'required|email',
            'facebook' => 'nullable|string',
            'instagram' => 'nullable|string',
            'tiktok' => 'nullable|string',
            'ubicacion' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Manejar la carga de la imagen
        $imageName = null;
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/imgs/contactos'), $imageName);
        }

        Contacto::create([
            'direccion' => $request->direccion,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'tiktok' => $request->tiktok,
            'ubicacion' => $request->ubicacion,
            'foto' => $imageName,
        ]);

        return redirect()->route('contactos.index')->with('success', 'Contacto agregado con éxito.');
    }

    public function edit(Contacto $contacto)
    {
        return view('contactos.edit', compact('contacto'));
    }

    public function update(Request $request, $id_contacto)
    {
        // Validación de campos
        $request->validate([
            'direccion' => 'required',
            'telefono' => 'required',
            'correo' => 'required|email',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'tiktok' => 'nullable|url',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // ejemplo de validación para imagen
        ]);

        // Buscar el contacto por ID
        $contacto = Contacto::findOrFail($id_contacto);

        // Actualizar los campos
        $contacto->direccion = $request->direccion;
        $contacto->telefono = $request->telefono;
        $contacto->correo = $request->correo;
        $contacto->facebook = $request->facebook;
        $contacto->instagram = $request->instagram;
        $contacto->tiktok = $request->tiktok;

        // Manejo de la imagen si se sube una nueva
        if ($request->hasFile('foto')) {
            // Guardar la nueva imagen
            $imagen = $request->file('foto');
            $nombre_imagen = time() . '_' . $imagen->getClientOriginalName();
            $ruta_imagen = 'ruta/donde/guardar/' . $nombre_imagen;
            $imagen->move(public_path('assets/imgs/contactos/'), $nombre_imagen);

            // Eliminar la imagen anterior si existe
            if ($contacto->foto && file_exists(public_path('assets/imgs/contactos/') . $contacto->foto)) {
                unlink(public_path('assets/imgs/contactos/') . $contacto->foto);
            }

            // Actualizar el nombre de la imagen en la base de datos
            $contacto->foto = $nombre_imagen;
        }

        // Guardar cambios
        $contacto->save();

        // Redireccionar con mensaje de éxito
        return redirect()->route('contactos.index')->with('success', 'Contacto actualizado correctamente');
    }



    public function destroy(Contacto $contacto)
    {
        // Eliminar la imagen asociada si existe
        if ($contacto->foto) {
            $imagePath = public_path('assets/imgs/contactos/' . $contacto->foto);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Eliminar el contacto
        $contacto->delete();

        return redirect()->route('contactos.index')->with('success', 'Contacto eliminado con éxito.');
    }
}
