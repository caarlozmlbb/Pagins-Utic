<div class="container">
    <h1 class="text-2xl font-bold mb-4">Lista de Anuncios</h1>
    <a href="{{ route('anuncios.create') }}" class="btn btn-primary mb-3">Añadir Anuncio</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Foto</th>
                <th>Fecha de Inicio</th>
                <th>Fecha de Fin</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($anuncios as $anuncio)
                <tr>
                    <td>{{ $anuncio->id_anuncios }}</td>
                    <td>{{ $anuncio->descripcion }}</td>
                    <td><img src="{{ asset('assets/imgs/anuncios/' . $anuncio->foto) }}" alt="Foto" width="100"></td>
                    <td>{{ $anuncio->fecha_inicio }}</td>
                    <td>{{ $anuncio->fecha_fin }}</td>
                    <td>
                        <a href="{{ route('anuncios.edit', $anuncio->id_anuncios) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('anuncios.destroy', $anuncio->id_anuncios) }}" method="POST" style="display:inline;">
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
