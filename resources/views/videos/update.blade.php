@extends('layouts1.backend')

@section('content')
    <style>
        /* Estilos adicionales específicos para esta página */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #007BFF;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
        }

        .form-actions {
            text-align: center;
        }

        .btn-submit {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-submit:hover {
            background-color: #0056b3;
        }
        h2 {
            color: #007BFF;
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            margin-top: 3%;
            padding: 2px;
        }
    </style>

    <h2>Actualizar Video</h2>
    <div class="link-container">
        <a href="{{ route('videos.index') }}">Regresar</a>
    </div>

    <div class="form-container">
        <form action="{{ route('videos.update', $video->id_video) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="url_video" class="form-label">URL del Video</label>
                <input type="text" id="url_video" name="url_video" class="form-control" required value="{{ old('url_video', $video->url_video) }}">
                @error('url_video')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="descripcion" class="form-label">Descripción</label>
                <input type="text" id="descripcion" name="descripcion" class="form-control" required value="{{ old('descripcion', $video->descripcion) }}">
                @error('descripcion')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-actions">
                <button type="submit" class="btn-submit">Actualizar Video</button>
            </div>
        </form>
    </div>
@endsection
