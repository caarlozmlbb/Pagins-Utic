<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>U-TIC</title>
    <meta name="description" content="Medilix - Healthcare & Medical Bootstrap HTML5 Template">
    <meta name="author" content="ahmmedsabbirbd">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/favicon.svg">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/fontawesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/contacto.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/carreras.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/odometer-theme-default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/scss/layout/pages/_about-us.scss') }}">

</head>

<body class="body-2">

    <!-- Carga de Inicio -->
    <div id="preloader">
        <div class="preloader-close">x</div>
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!-- Fin -->

    <!-- search popup start -->
    <div class="search__popup">
        <div class="container">
            <div class="row gx-30">
                <div class="col-xxl-12">
                    <div class="search__wrapper">
                        <div class="search__top d-flex justify-content-between align-items-center">
                            <div class="search__logo">
                                <a href="index.html">
                                    <img src="assets/imgs/logo/UTICC.png" alt="img">
                                </a>
                            </div>
                            <div class="search__close">
                                <button type="button" class="search__close-btn search-close-btn">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
                                        <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="search__form">
                            <form action="#">
                                <div class="search__input">
                                    <input class="search-input-field" type="text"
                                        placeholder="Type here to search...">
                                    <span class="search-focus-border"></span>
                                    <button type="submit">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- search popup end -->

    <!-- preloader start -->
    <div class="loading-form">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- Backtotop start -->
    <div id="scroll-percentage">
        <span id="scroll-percentage-value"></span>
    </div>
    <!-- Backtotop end -->

    @yield('content')






    <main class="home-2__background">
        <section id="inicio" class="banner-2 banner-2__space theme-bg-color-900 overflow-hidden"
            {{-- <section class="banner-2 banner-2__space overflow-hidden" style="background-image: url('assets/imgs/banner-2/FondoPrincipal.png'); background-size: cover; background-repeat: no-repeat; background-position: center center;"> --}} data-background="assets/imgs/banner-2/banner-shape.png">
            <div class="container">
                <div class="banner-2__shape"></div>
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="banner-2__content">
                            <h2 class="mb-10 mb-xs-10 title-animation" style="color: #0CC6B0;">U-TIC</h2>
                            <h1 class="mb-40 mb-xs-40 color-white title-animation">UNIDAD DE TECNOLOGÍAS DE INFORMACIÓN
                                Y COMUNICACIONES</h1>
                            <p class="mb-50 mb-xs-40 color-white">"U-TIC, Unidad de Tecnologías de Información y
                                Comunicación de la UPEA, garantizando innovación y eficiencia en nuestros servicios
                                tecnológicos."
                            </p>
                            <div
                                class="rr-btn__wrapper d-flex align-items-sm-center align-items-start flex-column flex-sm-row">
                                <a href="" class="btn btn-4">INGRESAR
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="banner-2__media">
                            <div class="banner-2__media-shape upDown"></div>
                            <img class="img-fluid" src="assets/imgs/banner-2/profesionales.jpg" alt="icon not found">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner area end -->

        <!--about-us-2 start -->
        <section class="about-us-2 about-us-2__space">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6">
                        <div class="about-us-2__media">
                            <div class="about-us-2__media-image-1">
                                <a href="https://www.youtube.com/watch?v=dyNpojnbNT4" class="popup-video"
                                    data-effect="mfp-move-from-top vertical-middle">
                                    <i class="fa-solid fa-play zooming"></i>
                                </a>
                                <img src="assets/imgs/about-us-2/universidad.jpg" class="img-fluid" width="273"
                                    height="611" alt="image not found">
                            </div>
                            <div class="about-us-2__media-image-2">
                                <img src="assets/imgs/about-us-2/utic.jpg" class="img-fluid" alt="image not found"
                                    width="273" height="611">
                                </style>
                                <div class="circle upDown">
                                    <svg width="111" height="111" viewBox="0 0 111 111" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M110.785 60.6122L0.517544 60.6122C0.406443 59.4679 0.330326 58.31 0.302317 57.1451L111 57.1451C110.972 58.31 110.896 59.4679 110.785 60.6122ZM109.661 67.6711L1.6416 67.6711C1.38486 66.5272 1.16266 65.3689 0.975465 64.204L110.327 64.204C110.14 65.3689 109.918 66.5272 109.661 67.6711ZM107.545 74.7304L3.76465 74.7304C3.33425 73.5931 2.94589 72.4352 2.59905 71.2633L108.704 71.2633C108.364 72.4352 107.975 73.5931 107.545 74.7304ZM104.325 81.7892L6.98383 81.7892C6.36624 80.6589 5.79063 79.501 5.24913 78.3221L106.053 78.3221C105.519 79.501 104.936 80.6589 104.325 81.7892ZM99.7326 88.8551L11.5702 88.8551C10.7094 87.7317 9.89809 86.5809 9.13485 85.388L102.175 85.388C101.405 86.5809 100.593 87.7318 99.7326 88.8551ZM93.3218 95.9144L17.9809 95.9144C16.7873 94.8116 15.6427 93.6537 14.5536 92.4473L96.7492 92.4473C95.6601 93.6537 94.515 94.8116 93.3218 95.9144ZM83.8722 102.973L27.4236 102.973C25.6333 101.919 23.9131 100.761 22.2616 99.5061L89.0412 99.5062C87.3896 100.755 85.662 101.919 83.8722 102.973ZM64.2512 110.033C61.448 110.469 58.5757 110.698 55.6479 110.698C52.72 110.698 49.8478 110.469 47.0446 110.033C42.7224 109.36 38.5663 108.188 34.6321 106.565L76.6633 106.565C72.7294 108.188 68.5734 109.36 64.2512 110.033ZM0.517545 50.0858L110.785 50.0858C110.896 51.2302 110.972 52.3881 111 53.5529L0.302317 53.5529C0.330326 52.388 0.406444 51.2302 0.517545 50.0858ZM1.64862 43.02L109.654 43.02C109.918 44.1643 110.14 45.3222 110.327 46.4871L0.975467 46.4871C1.16266 45.3222 1.38487 44.1643 1.64862 43.02ZM3.76465 35.9611L107.538 35.9611C107.968 37.098 108.357 38.2564 108.704 39.4282L2.59905 39.4282C2.94589 38.2564 3.33425 37.098 3.76465 35.9611ZM6.99079 28.9018L104.318 28.9018C104.936 30.0322 105.512 31.19 106.046 32.3689L5.25614 32.3689C5.79064 31.19 6.37319 30.0322 6.99079 28.9018ZM11.5702 21.843L99.7326 21.843C100.593 22.9663 101.405 24.1172 102.175 25.3101L9.13486 25.3101C9.89809 24.1172 10.7094 22.9663 11.5702 21.843ZM17.981 14.7837L93.3218 14.7837C94.515 15.8795 95.6601 17.0443 96.7492 18.2508L14.5536 18.2508C15.6427 17.0443 16.7873 15.8794 17.981 14.7837ZM27.4236 7.71783L83.8722 7.71783C85.662 8.77907 87.3826 9.93693 89.0342 11.1849L22.2686 11.1849C23.9132 9.92992 25.6333 8.77906 27.4236 7.71783ZM47.0861 0.658978C49.8753 0.221974 52.7336 0.000198036 55.6479 0.00019829C58.5617 0.000198545 61.4205 0.221975 64.2097 0.65898C68.5459 1.3313 72.7154 2.50319 76.6563 4.12609L34.6391 4.12608C38.5799 2.50319 42.7499 1.33129 47.0861 0.658978Z"
                                            fill="#185EC8" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-us-2__main-content">
                            <div class="section__title-wrapper about-us-2__content mb-60 mb-xs-50">
                                <h5 class="section__subtitle color-theme-primary mb-15 mb-xs-10 title-animation"><img
                                        src="assets/imgs/ask-quesiton/heart.png" alt="icon not found"
                                        class="img-fluid"> Quienes somos?</h5>
                                <h2 class="section__title mb-20 title-animation">HISTORIA DE UTIC</h2>
                                <p class="mb-0">En mayo de 2009, la Asamblea de la carrera de Ingeniería de Sistemas
                                    de la UPEA
                                    acordó crear la Unidad de Sistemas de Información (SIE) para desarrollar áreas de
                                    sistemas,
                                    bases de datos y servicios telemáticos. El Honorable Consejo Universitario respaldó
                                    esta decisión
                                    en junio de 2009, estableciendo la SIE con el objetivo de implementar sistemas de
                                    información
                                    académicos y administrativos. Este proyecto fue promovido por estudiantes de la
                                    carrera durante
                                    la gestión 2009.</p>
                            </div>

                            <div class="about-us-2__main-content__list">
                                <img src="assets/imgs/banner-2/UTICC.png" alt="sie" width="400px">
                            </div>
                            {{-- <a href="about-us.html" class="rr-btn position-relative overflow-hidden">
                                <div class="panel wow"></div>
                                <span class="btn-wrap">
                                    <span class="text-one">Read More <i class="fa-solid fa-plus"></i></span>
                                    <span class="text-two">Read More <i class="fa-solid fa-plus"></i></span>
                                </span>
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--about-us-2 end -->

        <!-- Doctor start -->
        <section id="personal" class="doctor doctor__background">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section__title-wrapper doctor__content text-center mb-60 mb-xs-30">
                            <h5 class="section__subtitle color-theme-primary mb-15 mb-xs-10 title-animation"><img
                                    src="assets/imgs/ask-quesiton/heart.png" alt="icon not found"
                                    class="img-fluid">Nuestros Profesionales</h5>
                            <h2 class="section__title mb-0 title-animation">PERSONAL DE LA
                                U-TIC</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="swiper doctor__slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="doctor__item position-relative overflow-hidden">
                                        <div class="doctor__item-media">
                                            <img src="./assets/imgs/Profesionales/profesional-3.jpg" class="img-fluid"
                                                alt="image not found">
                                        </div>

                                        <div class="doctor__item-content">
                                            <div class="doctor__item-content-text text-center">
                                                <p>Área de Data Center</p>
                                                <h4><a href="about-us.html">Ing. Santos Aurelio Limachi Huanca</a></h4>
                                            </div>

                                            <div class="doctor__item-content-share">
                                                <a href="https://www.facebook.com/profile.php?id=61559761230176"><i
                                                        class="fa-brands fa-facebook-f"></i></a>
                                                <a href="https://x.com/">
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.52217 6.77686L15.4785 0.00195312H14.0671L8.89516 5.88451L4.76437 0.00195312H0L6.24656 8.89742L0 16.002H1.41155L6.87321 9.78977L11.2356 16.002H16L9.52183 6.77686H9.52217ZM7.58887 8.97579L6.95596 8.09L1.92015 1.04169H4.0882L8.15216 6.72991L8.78507 7.61569L14.0677 15.0095H11.8997L7.58887 8.97613V8.97579Z"
                                                            fill="#071C3C" />
                                                    </svg>
                                                </a>
                                                <a href="https://www.instagram.com/"><i
                                                        class="fa-brands fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="doctor__item position-relative overflow-hidden">
                                        <div class="doctor__item-media">
                                            <img src="./assets/imgs/Profesionales/profesional-1.jpg" class="img-fluid"
                                                alt="image not found">
                                        </div>

                                        <div class="doctor__item-content">
                                            <div class="doctor__item-content-text text-center">
                                                <p>Area de Desarrollo</p>
                                                <h4><a href="about-us.html">Ing. Wilson Rene Gonzales Sanchez</a></h4>
                                            </div>

                                            <div class="doctor__item-content-share">
                                                <a href="https://www.facebook.com/profile.php?id=61559761230176"><i
                                                        class="fa-brands fa-facebook-f"></i></a>
                                                <a href="https://x.com/">
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.52217 6.77686L15.4785 0.00195312H14.0671L8.89516 5.88451L4.76437 0.00195312H0L6.24656 8.89742L0 16.002H1.41155L6.87321 9.78977L11.2356 16.002H16L9.52183 6.77686H9.52217ZM7.58887 8.97579L6.95596 8.09L1.92015 1.04169H4.0882L8.15216 6.72991L8.78507 7.61569L14.0677 15.0095H11.8997L7.58887 8.97613V8.97579Z"
                                                            fill="#071C3C" />
                                                    </svg>
                                                </a>
                                                <a href="https://www.instagram.com/"><i
                                                        class="fa-brands fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="doctor__item position-relative overflow-hidden">
                                        <div class="doctor__item-media">
                                            <img src="./assets/imgs/Profesionales/profesional-2.jpg" class="img-fluid"
                                                alt="image not found">
                                        </div>

                                        <div class="doctor__item-content">
                                            <div class="doctor__item-content-text text-center">
                                                <p>Jefe de Unidad</p>
                                                <h4><a href="about-us.html">Ing. Juan Regis Muñes Sirpa</a></h4>
                                            </div>

                                            <div class="doctor__item-content-share">
                                                <a href="https://www.facebook.com/"><i
                                                        class="fa-brands fa-facebook-f"></i></a>
                                                <a href="https://x.com/">
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.52217 6.77686L15.4785 0.00195312H14.0671L8.89516 5.88451L4.76437 0.00195312H0L6.24656 8.89742L0 16.002H1.41155L6.87321 9.78977L11.2356 16.002H16L9.52183 6.77686H9.52217ZM7.58887 8.97579L6.95596 8.09L1.92015 1.04169H4.0882L8.15216 6.72991L8.78507 7.61569L14.0677 15.0095H11.8997L7.58887 8.97613V8.97579Z"
                                                            fill="#071C3C" />
                                                    </svg>
                                                </a>
                                                <a href="https://www.instagram.com/"><i
                                                        class="fa-brands fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="doctor__slider-dot mt-80 mt-lg-50 mt-md-40 mt-sm-35 mt-xs-30"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Doctor start -->
        <style>
            .scrolling-image {
                height: 400px;
                /* Altura deseada del contenedor */
                position: relative;
                /* Posición relativa para que los elementos absolutos se posicionen respecto a este */
                overflow: hidden;
                /* Oculta el desbordamiento para evitar que el texto salga del contenedor */
            }

            .scrolling-image::before {
                content: "";
                /* Elemento vacío para aplicar la imagen de fondo */
                position: absolute;
                /* Posición absoluta para que ocupe todo el contenedor */
                top: 0;
                left: 0;
                width: 100%;
                /* Ancho completo del contenedor */
                height: 100%;
                /* Altura completa del contenedor */
                background-image: url('https://serviciopagina.upea.bo/InstitucionUpea/Portada/38da5e35-85c8-411e-9052-ecc14ef6627a.jpg');
                background-size: cover;
                /* Ajusta el tamaño de la imagen */
                background-position: center;
                /* Centra la imagen */
                background-attachment: fixed;
                /* Fija la imagen para que se mueva con el scroll */
                z-index: -1;
                /* Coloca la imagen detrás del contenido */
                filter: blur(0px);
                /* Aplica un desenfoque a la imagen */
            }

            .scrolling-image::after {
                content: "";
                /* Elemento vacío para aplicar el degradado oscuro */
                position: absolute;
                /* Posición absoluta para que ocupe todo el contenedor */
                top: 0;
                left: 0;
                width: 100%;
                /* Ancho completo del contenedor */
                height: 100%;
                /* Altura completa del contenedor */
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
                /* Degradado oscuro */
                z-index: 0;
                /* Coloca el degradado sobre la imagen pero debajo del contenido */
            }

            .contenta {
                position: relative;
                /* Posición relativa para que los elementos absolutos se posicionen respecto a este */
                z-index: 1;
                /* Coloca el contenido sobre la imagen de fondo */
                color: white;
                /* Color del texto */
                text-align: center;
                /* Centra el texto horizontalmente */
                padding: 20px;
                /* Espaciado interno */
                display: flex;
                /* Usa flexbox para centrar el contenido */
                flex-direction: column;
                /* Coloca los elementos en una columna */
                justify-content: center;
                /* Centra el contenido verticalmente */
                align-items: center;
                /* Centra el contenido horizontalmente */
                height: 100%;
                /* Altura completa del contenedor */
            }

            .contenta h1 {
                font-size: 4.5rem;
                /* Tamaño de la fuente del título */
                margin-bottom: 20px;
                /* Espaciado inferior del título */
                color: white;
                /* Color blanco para el resto del texto */
            }

            .contenta h1 .highlight {
                color: #ff6347;
                /* Color destacado para la palabra "tecnologías" */
            }

            .contenta p {
                font-size: 1.2rem;
                /* Tamaño de la fuente del párrafo */
                line-height: 1.6;
                /* Altura de línea del párrafo */
                color: white;
                /* Color blanco para el resto del texto */
            }

            /* Estilos responsivos para móviles */
            @media (max-width: 468px) {
                .contenta h1 {
                    font-size: 2.5rem;
                    /* Tamaño de la fuente del título para pantallas pequeñas */
                }

                .contenta p {
                    font-size: 1rem;
                    /* Tamaño de la fuente del párrafo para pantallas pequeñas */
                }
            }

            @media (max-width: 180px) {
                .contenta h1 {
                    font-size: 2rem;
                    /* Tamaño de la fuente del título para pantallas muy pequeñas */
                }

                .contenta p {
                    font-size: 0.9rem;
                    /* Tamaño de la fuente del párrafo para pantallas muy pequeñas */
                }
            }
        </style>

        <div class="scrolling-image">
            <div class="contenta">
                <h1>UNIDAD DE <span class="highlight">TECNOLOGÍAS</span> DE INFORMACIÓN Y COMUNICACIONES</h1>
                <p>Innovando servicios tecnológicos para nuestra comunidad universitaria</p>
            </div>
        </div>


        <!-- Filter area end -->

        <section class="doctor doctor__background" id="carreras">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section__title-wrapper doctor__content text-center mb-60 mb-xs-30">
                            <h5 class="section__subtitle color-theme-primary mb-15 mb-xs-10 title-animation"><img
                                    src="assets/imgs/ask-quesiton/heart.png" alt="icon not found"
                                    class="img-fluid">Sistemas webs</h5>
                            <h2 class="section__title mb-0 title-animation">Sistemas y sitios web a nivel Universidad
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="swiper doctor__slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="carde">
                                        <div class="covere">
                                            <img src="{{ asset('assets/imgs/areas/11.png') }}">
                                            <div class="img__back"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="carde">
                                        <div class="covere">
                                            <img src="{{ asset('assets/imgs/areas/10.png') }}">
                                            <div class="img__back"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="carde">
                                        <div class="covere">
                                            <img src="{{ asset('assets/imgs/areas/7.png') }}">
                                            <div class="img__back"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="carde">
                                        <div class="covere">
                                            <img src="{{ asset('assets/imgs/areas/8.png') }}">
                                            <div class="img__back"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="carde">
                                        <div class="covere">
                                            <img src="{{ asset('assets/imgs/areas/9.png') }}">
                                            <div class="img__back"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="doctor__slider-dot mt-80 mt-lg-50 mt-md-40 mt-sm-35 mt-xs-30"></div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .carde {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }

                .carde .covere {
                    position: relative;
                    width: 200px;
                    /* Ajusta el tamaño según tus necesidades */
                    height: 200px;
                    /* Ajusta el tamaño según tus necesidades */
                }

                .carde .covere img {
                    display: block;
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
                    border-radius: 50%;
                    /* Opcional: Si quieres las imágenes en forma de círculo */
                }

                .carde .covere .img__back {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    border-radius: 50%;
                    /* Opcional: Si quieres la sombra en forma de círculo */
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
                    pointer-events: none;
                    /* Para que no interfiera con el hover de la imagen */
                }
            </style>
        </section>


        <!-- slider-text start -->
        {{-- <div class="slider-text">
            <div class="container">
                <div class="rr-scroller" data-speed="slow">
                    <ul class="text-anim rr-scroller__inner">
                        <li><img src="./assets/imgs/cursos/laravel-512.webp" width="40px" alt=""></li>
                        <li><strong>Curso de Larvel</strong></li>
                        <li><img src="./assets/imgs/slider-text/health-guard.png" alt=""></li>
                        <li>Seguridad de sistemas</li>
                        <li><img src="./assets/imgs/slider-text/health-guard.png" alt=""></li>
                        <li><strong>Configuracion de Routers</strong></li>
                        <li><img src="./assets/imgs/slider-text/health-guard.png" alt=""></li>
                        <li>Seguridad de sistemas</li>
                        <li><img src="./assets/imgs/cursos/laravel-512.webp" width="40px" alt=""></li>
                        <li><strong>Curso de Larvel</strong></li>
                        <li><img src="./assets/imgs/slider-text/health-guard.png" alt=""></li>
                        <li>Configuracion de Routers</li>
                        <li><img src="./assets/imgs/slider-text/health-guard.png" alt=""></li>
                        <li><strong>Health Guard</strong></li>
                        <li><img src="./assets/imgs/slider-text/health-guard.png" alt=""></li>
                        <li>Seguridad de sistemas</li>
                    </ul>
                </div>
            </div>
        </div> --}}
        <!-- slider-text end -->
        <section id="documentos" class="blog-2 blog-2__space-top section-space__bottom">
            <div class="container">
                <div class="row mb-60 mb-xs-50 align-items-lg-end align-items-center">
                    <div class="col-lg-6">
                        <div class="section__title-wrapper blog-2__content">
                            <h5 class="section__subtitle color-theme-primary mb-15 mb-xs-10 title-animation">
                                <img src="assets/imgs/ask-quesiton/heart.png" alt="icon not found" class="img-fluid">
                                Documentos
                            </h5>
                            <h2 class="section__title mb-0 title-animation">DOCUMENTOS U-TIC UPEA</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog-2__slider__arrow d-flex justify-content-lg-end justify-content-start">
                            <button
                                class="blog-2__slider__arrow-prev d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-arrow-left"></i>
                            </button>
                            <button
                                class="blog-2__slider__arrow-next d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="swiper blog-2__slider mb-minus-60">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="doctor__item position-relative overflow-hidden">
                                        <a href="{{ asset('assets/doc/estandares_abiertos.pdf') }}" target="_blank">
                                            <canvas id="pdf-render1" class="pdf-canvas"></canvas>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="doctor__item position-relative overflow-hidden">
                                        <div class="doctor__item-media">
                                            <a href="{{ asset('assets/doc/manual_procedimiento_ciclodevida.pdf') }}"
                                                target="_blank">
                                                <canvas id="pdf-render2" class="pdf-canvas"></canvas>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="doctor__item position-relative overflow-hidden">
                                        <div class="doctor__item-media">
                                            <a href="{{ asset('assets/doc/PISI-UPEA.pdf') }}" target="_blank">
                                                <canvas id="pdf-render3" class="pdf-canvas"></canvas>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.5.207/pdf.min.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            const pdfUrls = [
                "{{ asset('assets/doc/estandares_abiertos.pdf') }}",
                "{{ asset('assets/doc/manual_procedimiento_ciclodevida.pdf') }}",
                "{{ asset('assets/doc/PISI-UPEA.pdf') }}"
            ];

            const renderPage = (pdfDoc, pageNum, canvas) => {
                const ctx = canvas.getContext('2d');
                const containerWidth = 450; // Ancho del contenedor

                pdfDoc.getPage(pageNum).then(page => {
                    const viewport = page.getViewport({
                        scale: 1
                    });
                    const scale = containerWidth / viewport
                        .width; // Calcular la escala en función del ancho del contenedor
                    const scaledViewport = page.getViewport({
                        scale
                    });

                    canvas.height = scaledViewport.height;
                    canvas.width = scaledViewport.width;

                    const renderCtx = {
                        canvasContext: ctx,
                        viewport: scaledViewport
                    };

                    page.render(renderCtx);
                });
            };

            const loadPDF = (url, canvasId) => {
                const canvas = document.getElementById(canvasId);
                const ctx = canvas.getContext('2d');
                ctx.clearRect(0, 0, canvas.width, canvas.height); // Limpiar el canvas antes de renderizar el nuevo PDF

                pdfjsLib.getDocument(url).promise.then(pdfDoc => {
                    renderPage(pdfDoc, 1, canvas); // Render first page
                });
            };

            const swiper = new Swiper('.swiper', {
                navigation: {
                    nextEl: '.blog-2__slider__arrow-next',
                    prevEl: '.blog-2__slider__arrow-prev',
                },
                on: {
                    slideChange: function() {
                        const currentSlide = this.realIndex;
                        loadPDF(pdfUrls[currentSlide], `pdf-render${currentSlide + 1}`);
                    }
                }
            });

            // Inicializar todos los PDFs para asegurarse de que se muestren incluso si se repiten
            pdfUrls.forEach((url, index) => {
                loadPDF(url, `pdf-render${index + 1}`);
            });
        </script>
        <style>
            .pdf-container {
                border: 1px solid #ccc;
                width: 450px;
                height: 630px;
                margin-bottom: 20px;
                cursor: pointer;
                /* Cursor pointer to indicate clickability */
                border-radius: 20px;
                overflow: hidden;
            }

            .pdf-canvas {
                width: 100%;
                height: auto;
            }
        </style>

        <!-- blog 2 area end -->
    </main>

    <!-- Doctor start -->
    <section class="doctor doctor__background" id="carreras">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__title-wrapper doctor__content text-center mb-60 mb-xs-30">
                        <h5 class="section__subtitle color-theme-primary mb-15 mb-xs-10 title-animation"><img
                                src="assets/imgs/ask-quesiton/heart.png" alt="icon not found"
                                class="img-fluid">Carreras</h5>
                        <h2 class="section__title mb-0 title-animation">PLATAFORMAS POR
                            CARRERAS</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="swiper doctor__slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="{{ asset('assets/imgs/carreras/14.png') }}">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <h2>Sistema de Inscripcion</h>
                                            <p>Plataforma Virtual</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="{{ asset('assets/imgs/carreras/15.png') }}">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <h2>Sistema de Inscripcion</h>
                                            <p>Plataforma Virtual</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="{{ asset('assets/imgs/carreras/16.png') }}">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <h2>Sistema de Inscripcion</h>
                                            <p>Plataforma Virtual</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="{{ asset('assets/imgs/carreras/17.png') }}">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <h2>Sistema de Inscripcion</h>
                                            <p>Plataforma Virtual</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="{{ asset('assets/imgs/carreras/18.png') }}">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <h2>Sistema de Inscripcion</h>
                                            <p>Plataforma Virtual</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="doctor__slider-dot mt-80 mt-lg-50 mt-md-40 mt-sm-35 mt-xs-30"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>








    <section class="contact">
        <div class="content">
            <h2>DATOS DE CONTACTO</h2>
            <p>En U-TIC, nos dedicamos a proporcionar soluciones tecnológicas avanzadas y servicios de comunicación
                eficientes para satisfacer las necesidades de nuestra comunidad. Nos comprometemos a ofrecer un entorno
                seguro y accesible para el intercambio de información, promoviendo la innovación y la colaboración.</p>
        </div>
        <div class="containere">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon">
                        <img src="https://cdn.icon-icons.com/icons2/3783/PNG/512/direction_navigation_map_maps_pin_icon_232090.png"
                            alt="Ubicación">
                    </div>

                    <style>
                        .icon img {
                            width: 60px;
                            height: auto;
                            border-radius: 10%;
                        }
                    </style>
                    <div class="text">
                        <h3>Dirección</h3>
                        <p>Villa Esperanza Av. Sucre A - Edificio Torre A Segundo Piso</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <img src="https://cdn.icon-icons.com/icons2/56/PNG/512/metrophone_metr_11263.png"
                            alt="Ubicación">
                    </div>
                    <div class="text">
                        <h3>Teléfono</h3>
                        <p>67159697</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <img src="https://cdn-icons-png.flaticon.com/256/281/281769.png" alt="Ubicación">
                    </div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>U-TIC@unidad.com</p>
                    </div>
                </div>

                <div class="social">
                    <ul>
                        <li><a href="https://www.facebook.com/profile.php?id=61559761230176" target="_blank"><i
                                    class="fa-brands fa-facebook-f" style="color: #3838a8;"></i></a></li>
                        <li><a href="https://www.instagram.com/tuPagina" target="_blank"><i
                                    class="fa-brands fa-instagram" style="color: #3838a8;"></i></a></li>
                        <li><a href="https://www.tiktok.com/@utic?_t=8VCAKZiwk34&_r=1" target="_blank"><i
                                    class="fa-brands fa-tiktok" style="color: #3838a8;"></i></a></li>
                        <li><a href="https://wa.me/59177728645" target="_blank"><i class="fa-brands fa-whatsapp"
                                    style="color: #3838a8;"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d956.4127373120543!2d-68.19365072506798!3d-16.49320279071786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915edf53a9c8ea57%3A0x1a3fe3118e4703f8!2sEdificio%20Tecnol%C3%B3gico%20Torre%20A%20(Carrera%20de%20Ingenier%C3%ADa%20de%20Sistemas)!5e0!3m2!1ses!2sbo!4v1719496124572!5m2!1ses!2sbo"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    {{-- <embed src="{{ asset('assets/doc/estandares_abiertos.pdf') }}" type="application/pdf" width="400px" height="600px" /> --}}
    {{-- <a href="{{ asset('assets/doc/estandares_abiertos.pdf') }}" target="_blank">
        <canvas id="pdf-render1" class="pdf-container"></canvas>
    </a>
    <a href="{{ asset('assets/doc/manual_procedimiento_ciclodevida.pdf') }}" target="_blank">
        <canvas id="pdf-render2" class="pdf-container"></canvas>
    </a>
    <a href="{{ asset('assets/doc/PISI-UPEA.pdf') }}" target="_blank">
        <canvas id="pdf-render3" class="pdf-container"></canvas>
    </a>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.5.207/pdf.min.js"></script>
    <script>
        const pdfUrls = [
            "{{ asset('assets/doc/estandares_abiertos.pdf') }}",
            "{{ asset('assets/doc/manual_procedimiento_ciclodevida.pdf') }}",
            "{{ asset('assets/doc/PISI-UPEA.pdf') }}"
        ];

        pdfUrls.forEach((url, index) => {
            const canvas = document.getElementById(`pdf-render${index + 1}`);
            const ctx = canvas.getContext('2d');
            let scale = 1;

            // Render the page
            const renderPage = (pdfDoc, pageNum) => {
                pdfDoc.getPage(pageNum).then(page => {
                    const viewport = page.getViewport({ scale });
                    canvas.height = viewport.height;
                    canvas.width = viewport.width;

                    const renderCtx = {
                        canvasContext: ctx,
                        viewport
                    };

                    page.render(renderCtx);
                });
            };

            // Get Document
            pdfjsLib.getDocument(url).promise.then(pdfDoc => {
                renderPage(pdfDoc, 1); // Render first page
            });
        });
    </script>
    <style>
        .pdf-container {
            border: 1px solid #ccc;
            width: 400px;
            height: 600px;
            margin-bottom: 20px;
            cursor: pointer; /* Cursor pointer to indicate clickability */
        }
    </style> --}}
    <!-- Body main wrapper end -->
    <style>
        .circles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .circles li {
            position: absolute;
            display: block;
            list-style: none;
            width: 20px;
            height: 20px;
            background: rgba(255, 255, 255, 0.2);
            animation: animate 25s linear infinite;
            bottom: -150px;
        }

        /* Estilos para cada círculo individual */
        .circles li:nth-child(1) {
            left: 25%;
            width: 80px;
            height: 80px;
            animation-delay: 0s;
        }

        .circles li:nth-child(2) {
            left: 10%;
            width: 20px;
            height: 20px;
            animation-delay: 2s;
            animation-duration: 12s;
        }

        .circles li:nth-child(3) {
            left: 70%;
            width: 20px;
            height: 20px;
            animation-delay: 4s;
        }

        .circles li:nth-child(4) {
            left: 40%;
            width: 60px;
            height: 60px;
            animation-delay: 0s;
            animation-duration: 18s;
        }

        .circles li:nth-child(5) {
            left: 65%;
            width: 20px;
            height: 20px;
            animation-delay: 0s;
        }

        .circles li:nth-child(6) {
            left: 75%;
            width: 110px;
            height: 110px;
            animation-delay: 3s;
        }

        .circles li:nth-child(7) {
            left: 35%;
            width: 150px;
            height: 150px;
            animation-delay: 7s;
        }

        .circles li:nth-child(8) {
            left: 50%;
            width: 25px;
            height: 25px;
            animation-delay: 15s;
            animation-duration: 45s;
        }

        .circles li:nth-child(9) {
            left: 20%;
            width: 15px;
            height: 15px;
            animation-delay: 2s;
            animation-duration: 35s;
        }

        .circles li:nth-child(10) {
            left: 85%;
            width: 150px;
            height: 150px;
            animation-delay: 0s;
            animation-duration: 11s;
        }

        @keyframes animate {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
                border-radius: 0;
            }

            100% {
                transform: translateY(-1000px) rotate(720deg);
                opacity: 0;
                border-radius: 50%;
            }
        }
    </style>
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <!-- Footer area start -->
    <footer>
        <section class="footer-2__area-common theme-bg-color-900 overflow-hidden"
            data-background="assets/imgs/footer-2/background.png">
            <div class="container">
                <div class="row mb-minus-50">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-2__widget footer-2__widget-item-1">
                            <div class="footer-2__logo mb-30 mb-xs-25">
                                <a href="index.html">
                                    <img class="img-fluid" src="assets/imgs/logo/logo-upea.png" alt="logo not found">
                                </a>
                                <a href="index.html">
                                    <img class="img-fluid" src="assets/imgs/logo/UTICC.png" alt="logo not found">
                                </a>
                            </div>


                            <div class="footer-2__content">
                                <p class="mb-0">"U-TIC, la Unidad de Tecnologías de Información y Comunicación de la
                                    UPEA, garantizando innovación y eficiencia en nuestros servicios tecnológicos."</p>
                            </div>

                            <div class="footer-2__social mt-30 mt-xs-30">
                                <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.facebook.com/profile.php?id=61559761230176"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/">
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.0596 6.77295L15.8879 -0.00195312H14.5068L9.44607 5.8806L5.40411 -0.00195312H0.742188L6.85442 8.89352L0.742188 15.998H2.12338L7.4676 9.78587L11.7362 15.998H16.3981L10.0593 6.77295H10.0596ZM8.16787 8.97189L7.54857 8.0861L2.62104 1.03779H4.74248L8.71905 6.726L9.33834 7.61179L14.5074 15.0056H12.386L8.16787 8.97223V8.97189Z"
                                            fill="white" />
                                    </svg>
                                </a>
                                <a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6">
                        <div class="footer-2__widget footer-2__widget-item-2">
                            <div class="footer-2__widget-title">
                                <h4>Servicios</h4>
                            </div>
                            <div class="footer-2__link">
                                <ul>
                                    <li><a href="#paginas">Paginas</a></li>
                                    <li><a href="#personal">Personal</a></li>
                                    <li><a href="#documentos">Documentos</a></li>
                                    <li><a href="#carreras">Carreras</a></li>
                                    <li><a href="#galerias">Galerias</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="footer-2__widget footer-2__widget-item-3">
                            <div class="footer-2__widget-title">
                                <h4>Mas</h4>
                            </div>

                            <div class="footer-2__link footer-2__link-location">
                                <ul>
                                    <li><a href="utic.com"><i class="fa-solid fa-envelope"></i>
                                            U-TIC.com</a></li>
                                    <li><a href="#"><i class="fa-solid fa-location-dot"></i> Villa Esperanza Av.
                                            Sucre A - Edificio Torre A Segundo Piso</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-2__widget footer-2__widget-item-4">
                            <div class="footer-2__widget-title">
                                <h4>Comunícate con Nosotros</h4>
                            </div>

                            <div class="footer-2__subscribe-content">
                                <p class="mb-30 mb-xs-25 color-white">Obtén mas información sobre nosotros con
                                    en nuestras redes sociales para mas información acerca de la U-TIC</p>

                                <button type="submit" class="rr-btn rr-btn__theme">
                                    <span class="btn-wrap">
                                        <a href="https://www.facebook.com/profile.php?id=61559761230176"><span
                                                class="text-one">FACEBOOK</span></a>
                                        <a href="https://www.facebook.com/profile.php?id=61559761230176"><span
                                                class="text-two">FACEBOOK</span></a>
                                    </span>
                                </button>
                                {{-- <div class="footer-2__subscribe d-flex mt-30 mt-xs-25">
                                    <input type="text" placeholder="Enter Email">
                                    <button type="submit" class="rr-btn rr-btn__theme">
                                        <span class="btn-wrap">
                                            <a href=""><span class="text-one">FACEBOOK</span></a>
                                            <a href=""><span class="text-two">FACEBOOK</span></a>
                                        </span>
                                    </button>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-2__bottom-wrapper">
                <div class="container">
                    <div class="footer-2__bottom">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="footer-2__copyright text-lg-start text-center">
                                    <p class="mb-0">© <a href="index.html">Universidad Pública de El Alto 2024 </a>
                                        2024 | U-TIC - Web Developer CarlosMC
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="footer-2__copyright-menu">
                                    <ul>
                                        <li><a href="about-us.html">Trams & Condition</a></li>
                                        <li><a href="about-us.html">Privacy Policy</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <!-- Footer area end -->

    <!-- JS here -->
    <script src="{{ asset('assets/js/vendor/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/type.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/parallax-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/SplitText.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/tween-max.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/draggable.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smoothscroll.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
