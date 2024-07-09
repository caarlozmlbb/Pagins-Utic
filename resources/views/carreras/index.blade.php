<div class="container">
    <h1 class="text-2xl font-bold mb-4">Tabla Carreras</h1>
    <a href="{{ route('carreras.create') }}" class="btn">Agregar carrera</a><br><br>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>Id carreras</th>
                    <th>Nombre Carrera</th>
                    <th>Descripción</th>
                    <th>Logos</th>
                    <th>URL Descripción</th>
                    <th>URL Plataforma</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carreras as $carrera)
                    <tr>
                        <td>{{ $carrera->id_carreras }}</td>
                        <td>{{ $carrera->nombre_carrera }}</td>
                        <td>{{ $carrera->descripcion }}</td>
                        <td>
                            @if ($carrera->logo)
                                <img src="{{ asset('assets/imgs/carreras/' . $carrera->logo) }}" alt="{{ $carrera->logo }}">
                            @else
                                No Image
                            @endif
                        </td>
                        <td><a href="{{ $carrera->url_inscripcion }}">{{ $carrera->url_inscripcion }}</a></td>
                        <td><a href="{{ $carrera->url_plataforma }}">{{ $carrera->url_plataforma }}</a></td>
                        <td>
                            <a href="{{ route('carreras.edit', $carrera->id_carreras) }}" class="btn">Actualizar</a>
                        </td>
                        <td>
                            <form action="{{ route('carreras.destroy', $carrera->id_carreras) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta carrera?');">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
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
