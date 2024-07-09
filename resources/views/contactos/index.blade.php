<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Actualiza Nuestros Contactos <i class="far fa-address-card"></i>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Correo</th>
                                <th>Facebook</th>
                                <th>Instagram</th>
                                <th>TikTok</th>
                                <th>Foto</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contactos as $contacto)
                            <tr>
                                <td>{{ $contacto->id_contacto }}</td>
                                <td>{{ $contacto->direccion }}</td>
                                <td>{{ $contacto->telefono }}</td>
                                <td>{{ $contacto->correo }}</td>
                                <td>
                                    @if ($contacto->facebook)
                                    <a href="{{ $contacto->facebook }}" target="_blank">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                    @endif
                                </td>
                                <td>
                                    @if ($contacto->instagram)
                                    <a href="{{ $contacto->instagram }}" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    @endif
                                </td>
                                <td>
                                    @if ($contacto->tiktok)
                                    <a href="{{ $contacto->tiktok }}" target="_blank">
                                        <i class="fab fa-tiktok"></i>
                                    </a>
                                    @endif
                                </td>
                                <td>
                                    @if ($contacto->foto)
                                        <img src="{{ asset('assets/imgs/contactos/' . $contacto->foto) }}"
                                            alt="{{ $contacto->foto }}">
                                    @else
                                        No Image
                                    @endif
                                </td>
                                <td>
                                    <!-- Botón para abrir el modal de actualización -->
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target="#updateModal{{ $contacto->id_contacto }}">
                                        Editar
                                    </button>
                                    {{-- <form action="{{ route('contactos.destroy', $contacto->id_contacto) }}"
                                        method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form> --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<!-- Modales de Actualización -->
@foreach ($contactos as $contacto)
<div class="modal fade" id="updateModal{{ $contacto->id_contacto }}" tabindex="-1" role="dialog"
    aria-labelledby="updateModalLabel{{ $contacto->id_contacto }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel{{ $contacto->id_contacto }}">Actualizar Contacto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('contactos.update', $contacto->id_contacto) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="direccion">Dirección</label>
                        <input type="text" class="form-control" id="direccion" name="direccion"
                            value="{{ $contacto->direccion }}" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono"
                            value="{{ $contacto->telefono }}" required>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="email" class="form-control" id="correo" name="correo"
                            value="{{ $contacto->correo }}" required>
                    </div>
                    <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input type="text" class="form-control" id="facebook" name="facebook"
                            value="{{ $contacto->facebook }}">
                    </div>
                    <div class="form-group">
                        <label for="instagram">Instagram</label>
                        <input type="text" class="form-control" id="instagram" name="instagram"
                            value="{{ $contacto->instagram }}">
                    </div>
                    <div class="form-group">
                        <label for="tiktok">TikTok</label>
                        <input type="text" class="form-control" id="tiktok" name="tiktok"
                            value="{{ $contacto->tiktok }}">
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" class="form-control-file" id="foto" name="foto">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
