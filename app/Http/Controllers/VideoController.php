<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('videos.principal.base', compact('videos'));
    }

    public function create()
    {
        return view('videos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'url_video' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
        ]);

        Video::create([
            'url_video' => $request->url_video,
            'descripcion' => $request->descripcion,
        ]);

        return redirect()->route('videos.index')->with('success', 'Video creado con éxito.');
    }

    public function show(Video $video)
    {
        return view('videos.show', compact('video'));
    }

    public function edit(Video $video)
    {
        return view('videos.update', compact('video'));
    }

    public function update(Request $request, Video $video)
    {
        $request->validate([
            'url_video' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
        ]);

        $video->update([
            'url_video' => $request->url_video,
            'descripcion' => $request->descripcion,
        ]);

        return redirect()->route('videos.index')->with('success', 'Video actualizado con éxito.');
    }

    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('videos.index')->with('success', 'Video eliminado con éxito.');
    }
}
