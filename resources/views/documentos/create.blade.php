@extends('layouts1.backend')
@section('content')

    <h2>Subir Documento</h2>
    <div class="link-container">
        <a href="{{ route('documentos.index') }}">Regresar</a>
    </div>
    <div class="form-container">
        <div class="preview-container">
            <canvas id="pdf-preview" class="preview-box"></canvas>
            <span>Previsualización del documento</span>
        </div>
        <form action="{{ route('documentos.store') }}" method="POST" enctype="multipart/form-data" class="form-content">
            @csrf
            <div class="form-group">
                <label for="nombre_doc" class="form-label">Nombre del Documento</label>
                <input type="text" id="nombre_doc" name="nombre_documento" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea id="descripcion" name="descripcion" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="ruta" class="form-label">Archivo</label>
                <input type="file" id="ruta" name="ruta" class="form-control" accept="application/pdf" required onchange="previewPDF(event)">
            </div>
            <div class="form-actions">
                <button type="submit" class="btn-submit">Subir</button>
            </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
    <script>
        function previewPDF(event) {
            const file = event.target.files[0];
            if (file && file.type === 'application/pdf') {
                const fileReader = new FileReader();
                fileReader.onload = function() {
                    const pdfData = new Uint8Array(this.result);
                    const loadingTask = pdfjsLib.getDocument({ data: pdfData });
                    loadingTask.promise.then(function(pdf) {
                        pdf.getPage(1).then(function(page) {
                            const scale = 1.5;
                            const viewport = page.getViewport({ scale: scale });
                            const canvas = document.getElementById('pdf-preview');
                            const context = canvas.getContext('2d');
                            canvas.height = viewport.height;
                            canvas.width = viewport.width;
                            const renderContext = {
                                canvasContext: context,
                                viewport: viewport
                            };
                            page.render(renderContext);
                            document.querySelector('.preview-container span').style.display = 'none';
                        });
                    });
                };
                fileReader.readAsArrayBuffer(file);
            }
        }
    </script>
<style>
    /* Estilos generales */
/* body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    color: #333;
} */

h2 {
        color: #007BFF;
        font-size: 30px;
        font-weight: bold;
        text-align: center;
        margin-top: 3%;
        padding: 2px;
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
