@extends('layouts1.backend')
@section('content')
<h2>Actualizar Carrera</h2>
<div class="link-container">
    <a href="{{ route('carreras.index') }}">Regresar</a>
</div>
<div class="form-container">
    <div class="preview-container">
        <div class="preview-box" id="preview-box">
            @if ($carrera->logo)
                <img id="preview" src="{{ asset('assets/imgs/carreras/' . $carrera->logo) }}" alt="{{ $carrera->nombre_carrera }}">
            @else
                <span>Imagen</span>
            @endif
        </div>
    </div>
    <form id="eventoForm" action="{{ route('carreras.update', $carrera->id_carreras) }}" method="POST" enctype="multipart/form-data" class="form-content">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" id="nombre" name="nombre_carrera" class="form-control" value="{{ $carrera->nombre_carrera }}">
        </div>
        <div class="form-group">
            <label for="des" class="form-label">Descripción</label>
            <input type="text" id="des" name="descripcion" class="form-control" value="{{ $carrera->descripcion }}">
        </div>
        <div class="form-group">
            <label for="url_inscripcion" class="form-label">URL Inscripción</label>
            <input type="text" id="url_inscripcion" name="url_inscripcion" class="form-control" value="{{ $carrera->url_inscripcion }}">
        </div>
        <div class="form-group">
            <label for="url_plataforma" class="form-label">URL Plataforma</label>
            <input type="text" id="url_plataforma" name="url_plataforma" class="form-control" value="{{ $carrera->url_plataforma }}">
        </div>
        <div class="form-group">
            <label for="imagen" class="form-label">Imagen</label>
            <input type="file" id="imagen" name="logo" class="form-control" onchange="previewImage(event)">
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

.form-container {
background-color: #fff;
padding: 20px;
border-radius: 8px;
box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
max-width: 80%px;
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
}

.preview-container span {
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
font-size: 1.2em;
color: #aaa;
}

.form-content .form-group {
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

    </style>
@endsection
