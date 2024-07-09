@extends('layouts1.backend')
@section('content')
<h2>Agregar Cargo</h2>
<div class="link-container">
    <a href="{{ route('cargos.index') }}">Regresar</a>
</div>
<div class="form-container">
    <form action="{{ route('cargos.store') }}" method="POST" class="form-content">
        @csrf
        <div class="form-group">
            <label for="name" class="form-label">Nombre del cargo</label>
            <input type="text" id="name" name="nombre_cargo" class="form-control" required>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn-submit">Agregar</button>
        </div>
    </form>
</div>

<style>
    .form-container {
        display: flex;
        align-items: flex-start;
        justify-content: center;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        background-color: #ffffff;
        width: 100%;
        max-width: 600px;
        margin: auto;
        box-sizing: border-box;
        border: 1px solid #ccc;
    }

    .form-content {
        width: 100%;
    }

    .form-group {
        margin-bottom: 15px;
        width: 100%;
    }

    .form-label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .form-actions {
        margin-top: 15px;
        text-align: center;
    }

    .btn-submit {
        background-color: #3490dc;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn-submit:hover {
        background-color: #2779bd;
    }
    h2 {
        color: #007BFF;
        font-size: 30px;
        font-weight: bold;
        text-align: center;
        margin-top: 3%;
        padding: 10px;
    }
</style>

@endsection
