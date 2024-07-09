@extends('layouts1.backend')
@section('content')
    <h2>Actualizar Usuario</h2>
    <div class="link-container">
        <a href="{{ route('users.index') }}">Regresar</a>
    </div>
    <div class="form-container">
        <form action="{{ route('users.store') }}" method="POST" class="form-content">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Name:</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}"
                    required>
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password:</label>
                <input type="password" id="password" name="password" class="form-control" value="{{ $user->password }}"
                    required>
            </div>
            <div class="form-group">
                <label for="password_confirmation" class="form-label">Confirm Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"
                    value="{{ $user->password }}" required>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn-submit">Actualizar</button>
            </div>
        </form>
    </div>

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

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
@endsection
