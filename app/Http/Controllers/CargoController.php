<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{

    public function index()
    {
        $cargos = Cargo::all();
        return view('cargos.principal.base', ['cargos'=>$cargos]);
    }

    public function create()
    {
        return view('cargos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_cargo' => 'required',
        ]);
        Cargo::create($request->all());
        return redirect()->route('cargos.index');
    }

    public function show(Cargo $cargo)
    {
        //
    }

    public function edit(Cargo $cargo)
    {
        return view('cargos.update', ['cargo'=>$cargo]);
    }

    public function update(Request $request, Cargo $cargo)
    {
        $request->validate([
            'nombre_cargo' => 'required',
        ]);

        // Actualizar los datos del cargo
        $cargo->nombre_cargo = $request->nombre_cargo;
        $cargo->save();

        return redirect()->route('cargos.index')->with('success', 'Cargo actualizado exitosamente');
    }

    public function destroy(Cargo $cargo)
    {
        $cargo->delete();
        return redirect()->route('cargos.index')->with('success', 'Cargo Eliminado exitosamente');
    }
}
