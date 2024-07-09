
<div class="container">
    <h1 class="text-2xl font-bold mb-4">Tabla Páginas</h1>
    <a href="{{ route('paginas.create') }}" class="btn">Agregar nueva página</a><br><br>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Descripción</th>
                    <th>URL Página</th>
                    <th>Foto</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($paginas as $pagina)
                    <tr>
                        <td>{{ $pagina->id_pagina }}</td>
                        <td>{{ $pagina->descripcion }}</td>
                        <td>{{ $pagina->url_pagina }}</td>
                        <td>
                            @if ($pagina->foto)
                                <img src="{{ asset('assets/imgs/paginas/' . $pagina->foto) }}" alt="{{ $pagina->foto }}">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('paginas.edit', $pagina->id_pagina) }}" class="btn">Actualizar</a>
                        </td>
                        <td>
                            <form action="{{ route('paginas.destroy', $pagina->id_pagina) }}" method="POST"
                                  onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta Página?');">
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

