<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Dashboard U-TIC &amp; Framework</title>

    <meta name="description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="index, follow">
    <!-- Icons -->
    <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
    <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style/create.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style/tabla.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style/update.css') }}">
    <!-- CSS de Bootstrap (ejemplo con CDN) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery (ejemplo con CDN) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- JavaScript de Bootstrap (ejemplo con CDN) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <!-- Modules -->
    @yield('css')

    @vite(['resources/sass/main.scss', 'resources/js/dashmix/app.js'])
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('js')
</head>

<body>
    <div id="page-container"
        class="sidebar-o enable-page-overlay sidebar-dark side-scroll page-header-fixed main-content-narrow">
        <!-- Side Overlay-->
        <aside id="side-overlay">
            <!-- Side Header -->
            <div class="bg-image"
                style="background-image: url('{{ asset('media/various/bg_side_overlay_header.jpg') }}');">
                <div class="bg-primary-op">
                    <div class="content-header">
                        <!-- User Avatar -->
                        <a class="img-link me-1" href="javascript:void(0)">
                            <img class="img-avatar img-avatar48" src="{{ asset('media/avatars/avatar10.jpg') }}"
                                alt="">
                        </a>
                        <!-- END User Avatar -->

                        <!-- User Info -->
                        <div class="ms-2">
                            <a class="text-white fw-semibold" href="javascript:void(0)">{{ Auth::user()->name }}</a>
                            <div class="text-white-75 fs-sm">Administrador</div>
                        </div>
                        <!-- END User Info -->

                        <!-- Close Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="ms-auto text-white" href="javascript:void(0)" data-toggle="layout"
                            data-action="side_overlay_close">
                            <i class="fa fa-times-circle"></i>
                        </a>
                        <!-- END Close Side Overlay -->
                    </div>
                </div>
            </div>
            <!-- END Side Header -->

            <!-- Side Content -->
            <div class="content-side">
                <div class="block pull-x mb-0">
                    <!-- Sidebar -->
                    <div class="block-content block-content-sm block-content-full bg-body">
                        <span class="text-uppercase fs-sm fw-bold">Barra lateral</span>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row g-sm text-center">
                            <div class="col-6 mb-1">
                                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                                    data-action="sidebar_style_dark" href="javascript:void(0)">Oscuro</a>
                            </div>
                            <div class="col-6 mb-1">
                                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                                    data-action="sidebar_style_light" href="javascript:void(0)">Claro</a>
                            </div>
                        </div>
                    </div>
                    <!-- END Sidebar -->

                    <!-- Header -->
                    <div class="block-content block-content-sm block-content-full bg-body">
                        <span class="text-uppercase fs-sm fw-bold">Header</span>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row g-sm text-center mb-2">
                            <div class="col-6 mb-1">
                                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                                    data-action="header_style_dark" href="javascript:void(0)">Oscuro</a>
                            </div>
                            <div class="col-6 mb-1">
                                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                                    data-action="header_style_light" href="javascript:void(0)">Claro</a>
                            </div>
                            <div class="col-6 mb-1">
                                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                                    data-action="header_mode_fixed" href="javascript:void(0)">Fijo</a>
                            </div>
                            <div class="col-6 mb-1">
                                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                                    data-action="header_mode_static" href="javascript:void(0)">Estatico</a>
                            </div>
                        </div>
                    </div>
                    <!-- END Header -->

                    <!-- Content -->
                    <div class="block-content block-content-sm block-content-full bg-body">
                        <span class="text-uppercase fs-sm fw-bold">Content</span>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row g-sm text-center">
                            <div class="col-6 mb-1">
                                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                                    data-action="content_layout_boxed" href="javascript:void(0)">En caja</a>
                            </div>
                            <div class="col-6 mb-1">
                                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                                    data-action="content_layout_narrow" href="javascript:void(0)">Estrecho</a>
                            </div>
                            <div class="col-12 mb-1">
                                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                                    data-action="content_layout_full_width" href="javascript:void(0)">Ancho
                                    Completo</a>
                            </div>
                        </div>
                    </div>
                    <!-- END Content -->
                </div>
            </div>
            <!-- END Side Content -->
        </aside>
        <!-- END Side Overlay -->

        <!-- Sidebar -->
        <nav id="sidebar" aria-label="Main Navigation">
            <!-- Side Header -->
            <div class="bg-header-dark">
                <div class="content-header bg-white-5">
                    <!-- Logo -->
                    <a class="fw-semibold text-white tracking-wide" href="/">
                        <span class="smini-visible">
                            D<span class="opacity-75">x</span>
                        </span>
                        <span class="smini-hidden">
                            U-<span class="opacity-75">TIC</span>
                        </span>
                    </a>
                    <!-- END Logo -->

                    <!-- Options -->
                    <div>

                        <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"
                            data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on"
                            onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');">
                            <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout"
                            data-action="sidebar_close">
                            <i class="fa fa-times-circle"></i>
                        </button>
                        <!-- END Close Sidebar -->
                    </div>
                    <!-- END Options -->
                </div>
            </div>
            <!-- END Side Header -->

            <!-- Sidebar Scrolling -->
            <div class="js-sidebar-scroll">
                <!-- Side Navigation -->
                <div class="content-side content-side-full">
                    <ul class="nav-main">
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}"
                                href="/dashboard">
                                <i class="nav-main-link-icon fa fa-location-arrow"></i>
                                <span class="nav-main-link-name">Panel</span>
                                {{-- <span class="nav-main-link-badge badge rounded-pill bg-primary">5</span> --}}
                            </a>
                        </li>

                        <li class="nav-main-heading">Tablas Administrativas</li>

                        <li class="nav-main-item">
                            <a class="nav-main-link" href="/users">
                                <i class="nav-main-link-icon fas fa-user-shield"></i>
                                <span class="nav-main-link-name">Administradores</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{ route('cargos.index') }}">
                                <i class="nav-main-link-icon fas fa-suitcase"></i>
                                <span class="nav-main-link-name">Cargos</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{ route('profesionales.index') }}">
                                <i class="nav-main-link-icon fas fa-user-tie"></i>
                                <span class="nav-main-link-name">Profesionales</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link" href="/paginas">
                                <i class="nav-main-link-icon fas fa-book"></i> <!-- Icono cambiado -->
                                <span class="nav-main-link-name">Paginas</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link" href="/documentos">
                                <i class="nav-main-link-icon fas fa-file-alt"></i>
                                <span class="nav-main-link-name">Documentos</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="/carreras">
                                <i class="nav-main-link-icon fas fa-graduation-cap"></i>
                                <span class="nav-main-link-name">Carreras</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="/galerias">
                                <i class="nav-main-link-icon fas fa-images"></i>
                                <span class="nav-main-link-name">Galerias</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="/videos">
                                <i class="nav-main-link-icon fas fa-video"></i>
                                <span class="nav-main-link-name">Videos</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link" href="/anuncios">
                                <i class="nav-main-link-icon fas fa-bullhorn"></i>
                                <span class="nav-main-link-name">Anuncios</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{ route('contactos.index') }}">
                                <i class="nav-main-link-icon fas fa-address-book"></i>
                                <span class="nav-main-link-name">Contactos</span>
                            </a>
                        </li>

                        <li class="nav-main-heading">Volver </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{ url('/') }}">
                                <i class="nav-main-link-icon fas fa-arrow-left"></i>
                                <span class="nav-main-link-name">Regresar</span>
                            </a>
                        </li>


                        {{-- <li class="nav-main-item">
                            <a class="nav-main-link" href="/">
                                <i class="nav-main-link-icon fas fa-map-marker-alt"></i>
                                <span class="nav-main-link-name">Sitios</span>
                            </a>
                        </li> --}}
                    </ul>
                </div>
                <!-- END Side Navigation -->
            </div>
            <!-- END Sidebar Scrolling -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="page-header">
            <div class="content-header">
                <div class="space-x-1">
                    <button type="button" class="btn btn-alt-secondary" data-toggle="layout"
                        data-action="sidebar_toggle">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                </div>

                <div class="space-x-1">
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-user d-sm-none"></i>
                            <span class="d-none d-sm-inline-block">{{ Auth::user()->name }}</span>
                            <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
                            <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                                Selecciona
                            </div>
                            <div class="p-2">
                                <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                    <i class="far fa-fw fa-user me-1"></i> Perfil
                                </a>
                                <div role="separator" class="dropdown-divider"></div>
                                <form id="logout-form" method="POST" action="{{ route('logout') }}"
                                    style="display: none;">
                                    @csrf
                                </form>

                                <a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="far fa-fw fa-arrow-alt-circle-left me-1"></i> Desconectar
                                </a>

                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-alt-secondary" data-toggle="layout"
                        data-action="side_overlay_toggle">
                        <i class="far fa-fw fa-list-alt"></i>
                    </button>
                </div>
            </div>


            <!-- Header Search -->
            <div id="page-header-search" class="overlay-header bg-header-dark">
                <div class="content-header">
                    <form class="w-100" action="/dashboard" method="POST">
                        @csrf
                        <div class="input-group">
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-alt-primary" data-toggle="layout"
                                data-action="header_search_off">
                                <i class="fa fa-fw fa-times-circle"></i>
                            </button>
                            <input type="text" class="form-control border-0" placeholder="Search or hit ESC.."
                                id="page-header-search-input" name="page-header-search-input">
                        </div>
                    </form>
                </div>
            </div>

            <div id="page-header-loader" class="overlay-header bg-header-dark">
                <div class="bg-white-10">
                    <div class="content-header">
                        <div class="w-100 text-center">
                            <i class="fa fa-fw fa-sun fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main id="main-container">
            @yield('content')
        </main>

        <footer id="page-footer" class="bg-body-light">
            <div class="content py-0">
                <div class="row fs-sm">
                    <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-end">
                        U-TIC <i class="fa fa-heart text-danger"></i> Panel <a class="fw-semibold"
                            href="https://pixelcave.com" target="_blank">{{ Auth::user()->name }}</a>
                    </div>
                    <div class="col-sm-6 order-sm-1 text-center text-sm-start">
                        <a class="fw-semibold" href="https://pixelcave.com/products/dashmix" target="_blank">CDMC</a>
                        &copy;
                        <span data-toggle="year-copy"></span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END Footer -->
    </div>
    <!-- END Page Container -->
</body>

</html>
