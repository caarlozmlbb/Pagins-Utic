<?php

namespace App\Http\Controllers;

use App\Models\Anuncio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnuncioController extends Controller
{
    public function index()
    {
        $anuncios = Anuncio::all();
        return view('anuncios.principal.base', compact('anuncios'));
    }

    public function create()
    {
        return view('anuncios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
        ]);

        // Manejar la carga de la imagen
        $imageName = null;
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/imgs/anuncios'), $imageName);
        }

        Anuncio::create([
            'descripcion' => $request->descripcion,
            'foto' => $imageName,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
        ]);

        return redirect()->route('anuncios.index')->with('success', 'Anuncio agregado con éxito.');
    }

    public function show(Anuncio $anuncio)
    {
        return view('anuncios.show', compact('anuncio'));
    }

    public function edit(Anuncio $anuncio)
    {
        return view('anuncios.edit', compact('anuncio'));
    }

    public function update(Request $request, Anuncio $anuncio)
    {
        $request->validate([
            'descripcion' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
        ]);

        // Manejar la carga de la imagen
        if ($request->hasFile('foto')) {
            // Eliminar la imagen anterior si existe
            if ($anuncio->foto) {
                unlink(public_path('assets/imgs/anuncios/') . $anuncio->foto);
            }

            $image = $request->file('foto');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/imgs/anuncios'), $imageName);
        } else {
            $imageName = $anuncio->foto;
        }

        $anuncio->update([
            'descripcion' => $request->descripcion,
            'foto' => $imageName,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
        ]);

        return redirect()->route('anuncios.index')->with('success', 'Anuncio actualizado con éxito.');
    }

    public function destroy(Anuncio $anuncio)
    {
        if ($anuncio->foto) {
            unlink(public_path('assets/imgs/anuncios/') . $anuncio->foto);
        }

        $anuncio->delete();
        return redirect()->route('anuncios.index')->with('success', 'Anuncio eliminado con éxito.');
    }
}
