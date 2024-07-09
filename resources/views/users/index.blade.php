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
    <a href="{{ route('users.create') }}" class="btn">Añadir administrador</a><br><br>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn">Actualizar</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST"
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
