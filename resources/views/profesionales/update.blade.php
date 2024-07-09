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

        .preview-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
            position: relative;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
            background-color: #f8f8f8;
        }

        .preview-box {
            max-width: 100%;
            max-height: 300px;
            border: 2px solid #ccc;
            position: relative;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .preview-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .preview-container span {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 1.2em;
            color: #aaa;
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

<h2>Actualizar Profesional</h2>
<div class="link-container">
    <a href="{{ route('profesionales.index') }}">Regresar</a>
</div>

<div class="form-container">
    <div class="preview-container">
        <div class="preview-box" id="preview-box">
            @if ($profesionale->foto)
                <img id="preview" src="{{ asset('assets/imgs/profesionales/' . $profesionale->foto) }}" alt="{{ $profesionale->foto }}">
            @else
                <img id="preview" src="" alt="Previsualización de la imagen" style="display: none;">
                <span>Imagen</span>
            @endif
        </div>
        <label for="imagen" class="form-label">Seleccionar Imagen</label>
        <input type="file" id="imagen" name="foto" class="form-control" onchange="previewImage(event)">
    </div>

    <form id="eventoForm" action="{{ route('profesionales.update', $profesionale->id_profesional) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $profesionale->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="ap" class="form-label">Apellido</label>
            <input type="text" id="ap" name="apellido" class="form-control" value="{{ $profesionale->apellido }}" required>
        </div>
        <div class="form-group">
            <label for="cargo" class="form-label">Cargo</label>
            <select name="id_cargo" class="form-control" required>
                <option value="">Seleccione</option>
                @foreach ($cargos as $cargo)
                    <option value="{{ $cargo->id_cargo }}" {{ $profesionale->id_cargo == $cargo->id_cargo ? 'selected' : '' }}>{{ $cargo->nombre_cargo }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" id="telefono" name="telefono" class="form-control" value="{{ $profesionale->telefono }}" required>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn-submit">Actualizar</button>
        </div>
    </form>
</div>

<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var preview = document.getElementById('preview');
            preview.src = reader.result;
            preview.style.display = 'block';
            document.querySelector('.preview-box span').style.display = 'none';
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection
