<h2>Cargos</h2><br>
<a href="{{ route('cargos.create') }}" class="btn btn-primary">Agregar Nuevo Cargo</a><br><br>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Cargo</th>
            <th colspan="2">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cargos as $cargo)
            <tr>
                <td>{{ $cargo->id_cargo }}</td>
                <td>{{ $cargo->nombre_cargo }}</td>
                <td>
                    <a href="{{ route('cargos.edit', $cargo->id_cargo) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('cargos.destroy', $cargo->id_cargo) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
