@extends('layouts1.backend')
@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">{{ Auth::user()->name }}</h1>
                <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">App</li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <!-- Enlace a los archivos CSS y JS de Swiper -->

    <div class="content">
        <div class="row items-push">
            <div class="col-md-6 col-xl-4">
                <div class="block block-rounded h-100 mb-0">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            Welcome to your app
                        </h3>
                    </div>

                    <div class="block-content">
                        <p>
                            We’ve put everything together, so you can start working on your Laravel project as soon as
                            possible! Dashmix assets are integrated and work seamlessly with Laravel Vite, so you can
                            use
                            the npm scripts as you would in any other Laravel project.
                        </p>
                        <p>
                            Feel free to use any examples you like from the full HTML version to build your own pages.
                        </p>
                        <p class="fw-semibold">
                            Wish you all the best and happy coding!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="block block-rounded h-100 mb-0">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            Block Title
                        </h3>
                    </div>
                    <div class="block-content font-size-sm text-muted">
                        <p>
                            ...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="block block-rounded h-100 mb-0">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            Block Title
                        </h3>
                    </div>
                    <div class="block-content font-size-sm text-muted">
                        <p>
                            ...
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- <!-- Selector para enviar el número -->
        <div class="row mt-4">
            <div class="col-md-6">
                <select id="opcion" class="form-select">
                    <option value="1">Activar</option>
                    <option value="0">Desactivar</option>
                </select>
            </div>
            <div class="col-md-6">
                <button class="btn-enviar btn btn-primary" onclick="enviarNumero()">Enviar</button>
            </div>
        </div>
    </div>
    <!-- END Page Content -->

    <style>
        .btn-enviar {
            background-color: #6c757d; /* Color de botón por defecto */
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .form-select {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s ease;
        }

        .form-select:focus {
            border-color: #495057; /* Color de borde al estar enfocado */
            outline: none;
        }
    </style>

    <script>
        function enviarNumero() {
            const numero = document.getElementById('opcion').value;

            fetch('{{ route('update.number') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ number: numero })
            })
            .then(response => response.json())
            .then(data => {
                console.log('Número enviado:', data.number);
                actualizarEstadoBoton(numero);
            })
            .catch(error => {
                console.error('Error al enviar el número:', error);
            });
        }

        function actualizarEstadoBoton(numero) {
            const boton = document.querySelector('.btn-enviar');
            boton.classList.remove('enviado'); // Asegurarse de eliminar la clase anteriormente añadida
            if (numero === '1') {
                boton.classList.add('enviado'); // Añadir la clase si se envía el número 1
            }
        }
    </script> --}}
@endsection
