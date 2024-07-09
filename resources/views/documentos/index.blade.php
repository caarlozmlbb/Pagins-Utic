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
<h2>Documentos</h2><br>
<a href="{{ route('documentos.create') }}" class="btn btn-primary">Subir Nuevo Documento</a><br><br>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Ruta</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($documentos as $documento)
            <tr>
                <td>{{ $documento->id_documento }}</td>
                <td>{{ $documento->nombre_documento }}</td>
                <td>{{ $documento->descripcion }}</td>
                <td><a href="{{ url('/' . $documento->ruta) }}" target="_blank">Ver Documento</a></td>


                <td>
                    <a href="{{ route('documentos.edit', $documento->id_documento) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('documentos.destroy', $documento->id_documento) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
