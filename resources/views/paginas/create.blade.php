@extends('layouts1.backend')
@section('content')
    <div class="container">
        <h2 class="text-2xl font-bold mb-4">Agregar Nueva Página</h2>
        <div class="link-container">
            <a href="{{ route('paginas.index') }}">Regresar</a>
        </div>
        <div class="form-container">
            <div class="preview-container">
                <div class="preview-box" id="preview-box">
                    <img id="preview" src="" alt="Previsualización de la imagen" style="display: none;">
                    <span>Imagen</span>
                </div>
                <label for="foto" class="form-label">Foto</label>
                <input type="file" id="foto" name="foto" class="form-control" required
                    onchange="previewImage(event)">
            </div>

            <form id="eventoForm" action="{{ route('paginas.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" id="descripcion" name="descripcion" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="url_pagina" class="form-label">URL Página</label>
                    <input type="url" id="url_pagina" name="url_pagina" class="form-control" required>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn">Agregar</button>
                </div>
            </form>
        </div>
    </div>
    <style>
        /* Estilos generales */

        h2 {
            text-align: center;
            color: #007BFF;
        }

        .btn-back {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 15px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
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
            /* Espacio entre cada grupo de formulario */
        }

        .form-label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #007BFF;
        }

        .form-control {
            width: calc(100% - 22px);
            /* Ajuste para el padding */
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
        }

        .form-actions {
            text-align: center;
            margin-top: 20px;
        }

        .btn-submit {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #0056b3;
        }
       
    </style>
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

            var input = document.getElementById('foto');
            var form = document.getElementById('eventoForm');
            form.appendChild(input);
        }
    </script>
@endsection
