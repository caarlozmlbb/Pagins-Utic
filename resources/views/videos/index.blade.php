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
    <h1 class="text-2xl font-bold mb-4">Lista de Administradores</h1>
    <a href="{{ route('videos.create') }}" class="btn">Añadir administrador</a><br><br>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>Id Video</th>
                    <th>ulr Video</th>
                    <th>Descripcion</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($videos as $video)
                    <tr>
                        <td>{{ $video->id_video }}</td>
                        <td><a href="{{ $video->url_video }}">{{ $video->url_video }}</a></td>
                        <td>{{ $video->descripcion }}</td>
                        <td>
                            <a href="{{ route('videos.edit', $video->id_video) }}" class="btn">Actualizar</a>
                        </td>
                        <td>
                            <form action="{{ route('videos.destroy', $video->id_video) }}" method="POST"
                                onsubmit="return confirm('Are you sure?');" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
