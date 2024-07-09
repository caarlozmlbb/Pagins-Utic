<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentoController extends Controller
{
    public function index()
    {
        $documentos = Documento::all();
        return view('documentos.principal.base', compact('documentos'));
    }

    public function create()
    {
        return view('documentos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_documento' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'ruta' => 'required|file|mimes:pdf,doc,docx'
        ]);

        $documento = new Documento();
        $documento->nombre_documento = $request->nombre_documento;
        $documento->descripcion = $request->descripcion;

        // Guardar el archivo en la carpeta pública
        if ($request->file('ruta')->isValid()) {
            // Obtener nombre original del archivo
            $nombreArchivo = $request->file('ruta')->getClientOriginalName();

            // Mover el archivo a la carpeta deseada
            $request->file('ruta')->move(public_path('assets/doc'), $nombreArchivo);

            // Guardar la ruta en la base de datos
            $documento->ruta = 'assets/doc/' . $nombreArchivo;
        }

        $documento->save();

        return redirect()->route('documentos.index')
            ->with('success', 'Documento agregado exitosamente.');
    }

    public function show(Documento $documento)
    {
        return view('documentos.show', compact('documento'));
    }

    public function edit(Documento $documento)
    {
        return view('documentos.update', compact('documento'));
    }

    public function update(Request $request, Documento $documento)
    {
        $request->validate([
            'nombre_documento' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'ruta' => 'nullable|file|mimes:pdf,doc,docx'
        ]);

        if ($request->hasFile('ruta')) {
            Storage::delete($documento->ruta); // Eliminar el archivo anterior
            $nombreArchivo = $request->file('ruta')->getClientOriginalName();
            $request->file('ruta')->move(public_path('assets/doc'), $nombreArchivo);
            $documento->ruta = 'assets/doc/' . $nombreArchivo;
        }

        $documento->nombre_documento = $request->nombre_documento;
        $documento->descripcion = $request->descripcion;
        $documento->save();

        return redirect()->route('documentos.index')->with('success', 'Documento actualizado exitosamente');
    }

    public function destroy(Documento $documento)
    {
        // Obtener la ruta completa del documento
        $rutaDocumento = public_path($documento->ruta);

        // Verificar si el archivo existe y luego eliminarlo
        if (file_exists($rutaDocumento)) {
            unlink($rutaDocumento); // Eliminar el archivo físico
        }

        // Eliminar el registro del documento de la base de datos
        $documento->delete();

        return redirect()->route('documentos.index')->with('success', 'Documento eliminado exitosamente');
    }
}
