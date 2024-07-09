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
    <h1 class="text-2xl font-bold mb-4">Tabla Galerías</h1>
    <a href="{{ route('galerias.create') }}" class="btn">Agregar Galería</a><br><br>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>Id galería</th>
                    <th>Descripción</th>
                    <th>Foto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($galerias as $galeria)
                    <tr>
                        <td>{{ $galeria->id_galeria }}</td>
                        <td>{{ $galeria->descripcion }}</td>
                        <td>
                            @if ($galeria->foto)
                                <img src="{{ asset('assets/imgs/galerias/' . $galeria->foto) }}" alt="{{ $galeria->foto }}">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('galerias.edit', $galeria->id_galeria) }}" class="btn">Actualizar</a>
                            <form action="{{ route('galerias.destroy', $galeria->id_galeria) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta galería?');">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
