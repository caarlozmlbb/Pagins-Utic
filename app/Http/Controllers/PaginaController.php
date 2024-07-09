<?php

namespace App\Http\Controllers;

use App\Models\Pagina;
use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function index()
    {
        $paginas = Pagina::all();
        return view('paginas.principal.base', ['paginas' => $paginas]);
    }

    public function create()
    {
        return view('paginas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required|string',
            'url_pagina' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $imageName = null;
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/imgs/paginas'), $imageName);
        }

        Pagina::create([
            'descripcion' => $request->descripcion,
            'url_pagina' => $request->url_pagina,
            'foto' => $imageName,
        ]);

        return redirect()->route('paginas.index')->with('success', 'Página agregada con éxito.');
    }

    public function edit(Pagina $pagina)
    {
        return view('paginas.update', ['pagina' => $pagina]);
    }

    public function update(Request $request, Pagina $pagina)
    {
        $request->validate([
            'descripcion' => 'required|string',
            // 'url_pagina' => 'required|url',
            'url_pagina' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($request->hasFile('foto')) {
            if ($pagina->foto) {
                $oldImagePath = public_path('assets/imgs/paginas/' . $pagina->foto);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $image = $request->file('foto');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/imgs/paginas'), $imageName);
            $pagina->foto = $imageName;
        }

        $pagina->update([
            'descripcion' => $request->descripcion,
            'url_pagina' => $request->url_pagina,
            'foto' => $pagina->foto,
        ]);

        return redirect()->route('paginas.index')->with('success', 'Página actualizada con éxito.');
    }

    public function destroy(Pagina $pagina)
    {
        if ($pagina->foto) {
            $imagePath = public_path('assets/imgs/paginas/' . $pagina->foto);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $pagina->delete();
        return redirect()->route('paginas.index')->with('success', 'Página eliminada con éxito.');
    }
}
