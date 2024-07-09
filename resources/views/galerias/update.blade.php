@extends('layouts1.backend')
@section('content')
    <h2>Editar Galería</h2>
    <div class="link-container">
        <a href="{{ route('galerias.index') }}">Regresar</a>
    </div>
    <div class="form-container">
        <div class="preview-container">
            <div class="preview-box" id="preview-box">
                @if ($galeria->foto)
                    <img id="preview" src="{{ asset('assets/imgs/galerias/' . $galeria->foto) }}" alt="{{ $galeria->foto }}">
                @else
                    <img id="preview" src="" alt="Previsualización de la imagen" style="display: none;">
                    <span>Imagen</span>
                @endif
            </div>
        </div>
        <form action="{{ route('galerias.update', $galeria->id_galeria) }}" method="POST" enctype="multipart/form-data"
            class="form-content">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="descripcion" class="form-label">Descripción</label>
                <input type="text" id="descripcion" name="descripcion" class="form-control"
                    value="{{ $galeria->descripcion }}" required>
            </div>
            <div class="form-group">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" id="foto" name="foto" class="form-control" onchange="previewImage(event)">
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
        <style>
            h2 {
        color: #007BFF;
        font-size: 30px;
        font-weight: bold;
        text-align: center;
        margin-top: 3%;
        padding: 2px;
    }
        </style>
@endsection
