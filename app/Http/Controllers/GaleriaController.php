<?php

namespace App\Http\Controllers;

use App\Models\Galeria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriaController extends Controller
{
    public function index()
    {
        $galerias = Galeria::all();
        return view('galerias.principal.base', ['galerias' => $galerias]);
    }

    public function create()
    {
        return view('galerias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/imgs/galerias'), $imageName);
        }

        Galeria::create([
            'descripcion' => $request->descripcion,
            'foto' => $imageName,
        ]);

        return redirect()->route('galerias.index')->with('success', 'Galería agregada con éxito.');
    }

    public function edit(Galeria $galeria)
    {
        return view('galerias.update', ['galeria' => $galeria]);
    }

    public function update(Request $request, Galeria $galeria)
    {
        $request->validate([
            'descripcion' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            // Eliminar la imagen anterior si existe
            if ($galeria->foto) {
                Storage::delete('public/assets/imgs/galerias/' . $galeria->foto);
            }

            $image = $request->file('foto');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/imgs/galerias'), $imageName);
            $galeria->foto = $imageName;
        }

        $galeria->descripcion = $request->descripcion;
        $galeria->save();

        return redirect()->route('galerias.index')->with('success', 'Galería actualizada con éxito.');
    }

    public function destroy(Galeria $galeria)
    {
        if ($galeria->foto) {
            $imagePath = public_path('assets/imgs/galerias/' . $galeria->foto);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $galeria->delete();

        return redirect()->route('galerias.index')->with('success', 'Galería eliminada con éxito.');
    }
}
