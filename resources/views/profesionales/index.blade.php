<style>
        .btn {
        background-color: #3490dc;
        color: white;
        padding: 8px 12px;
        /* Ajusta el padding según tu preferencia */
        text-decoration: none;
        border-radius: 5px;
        display: inline-block;
        text-align: center;
        transition: background-color 0.3s;
    }

    .btn:hover {
        background-color: #2779bd;
    }

    .btn-danger {
        background-color: #e3342f;
        color: white;
        padding: 8px 12px;
        /* Ajusta el padding según tu preferencia */
        border-radius: 5px;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn-danger:hover {
        background-color: #cc1f1a;
    }
</style>

<div class="container">
    <h1 class="text-2xl font-bold mb-4">Tabla Profesionales</h1>
    <a href="{{ route('profesionales.create') }}" class="btn">Agregar Profesional</a><br><br>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cargo</th>
                    <th>Telefono</th>
                    <th>Foto</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profesionales as $profesional)
                    <tr>
                        <td>{{ $profesional->id_profesional }}</td>
                        <td>{{ $profesional->nombre }}</td>
                        <td>{{ $profesional->apellido }}</td>
                        <td>{{ $profesional->cargo->nombre_cargo }}</td>
                        <td>{{ $profesional->telefono }}</td>
                        <td>
                            @if ($profesional->foto)
                                <img src="{{ asset('assets/imgs/profesionales/' . $profesional->foto) }}"
                                    alt="{{ $profesional->foto }}">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('profesionales.edit', $profesional->id_profesional) }}"
                                class="btn">Actualizar</a>
                        </td>
                        <td>
                            <form action="{{ route('profesionales.destroy', $profesional->id_profesional) }}"
                                method="POST"
                                onsubmit="return confirm('¿Estás seguro de que deseas eliminar este profesional?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
