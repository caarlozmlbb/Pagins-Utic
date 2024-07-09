<!-- Offcanvas area start -->
<div class="fix">
    <div class="offcanvas__area">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="index.html">
                            <img src="assets/imgs/logo/UTICC.png" alt="logo not found">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button class="offcanvas-close-icon animation--flip">
                            <span class="offcanvas-m-lines">
                                <span class="offcanvas-m-line line--1"></span><span
                                    class="offcanvas-m-line line--2"></span><span
                                    class="offcanvas-m-line line--3"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="mobile-menu fix"></div>
                <div class="offcanvas__social">
                    <h4 class="offcanvas__title mb-20">Suscribe y Siguenos</h4>
                    <p class="mb-30">"U-TIC, la Unidad de Tecnologías de Información y Comunicación de la UPEA,
                        garantizando innovación y eficiencia en nuestros servicios tecnológicos."</p>
                    <ul class="header-top-socail-menu d-flex">
                        <li><a href="https://www.facebook.com/profile.php?id=61559761230176"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/upeautic/"><i
                                    class="fa-brands fa-instagram"></i></a></li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCLCYwzbR3eYujDyBnLhTjFQ">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>
<div class="offcanvas__overlay-white"></div>
<!-- Offcanvas area start -->

<!-- Header area start -->
<header>
    <div id="header-sticky" class="header__area header-2">
        <div class="container">
            <div class="mega__menu-wrapper p-relative">
                <div class="header__main">
                    <div class="header__left d-flex align-items-center">
                        <div class="header__logo">
                            <a href="index.html">
                                <div class="logo">
                                    <div class="logo-container">
                                        <img src="assets/imgs/logo/UTICC.PNG" alt="Logo UTICC">
                                    </div>

                                </div>
                                <style>
                                    .logo-container {
                                        position: relative;
                                        display: inline-block;
                                    }

                                    .logo-container img {
                                        width: 140px;
                                        height: 80px;
                                        filter: drop-shadow(3px 3px 0px rgb(255, 255, 255));
                                        transition: filter 0.3s ease-in-out;
                                    }

                                    .logo-container:hover img {
                                        filter: drop-shadow(0 5px 10px rgba(255, 0, 0, 0.7)) drop-shadow(0 5px 10px rgba(0, 255, 0, 0.7)) drop-shadow(0 5px 10px rgba(0, 0, 255, 0.7));
                                    }
                                </style>
                            </a>
                        </div>
                    </div>

                    <div class="header__action d-flex align-items-center">

                        <div class="mean__menu-wrapper d-none d-xl-block">
                            <div class="main-menu main-menu-2">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li><a href="#inicio">U-TIC</a></li>
                                        {{-- <li class="has-dropdown ">
                                            <a href="javascript:void(0)">UTIC</a>
                                            <ul class="submenu">
                                        <li><a href="faq.html">PAGINAS</a></li>
                                        <li><a href="about-us.html">DOCUMENTOS</a></li>
                                        <li><a href="pricing.html">CARRERAS</a></li>
                                        <li><a href="404.html">GALERIAS</a></li>
                                        <li><a href="appoinment.html">LOGIN</a></li>
                                             </ul>
                                        </li> --}}
                                        <li><a href="#personal">PERSONAL</a></li>
                                        <li><a href="#anuncios">CURSOS</a></li>
                                        <li><a href="#paginas">PAGINAS</a></li>
                                        <li><a href="#documentos">DOCUMENTOS</a></li>
                                        <li><a href="#carreras">CARRERAS</a></li>
                                        <li><a href="/galeria">GALERIAS</a></li>
                                        @if (Route::has('login'))
                                                @auth
                                                    <li><a href="{{ url('/dashboard') }}" class="login-button">DASHBOARD</a></li>
                                                @else
                                                    <li><a href="{{ route('login') }}" class="login-button">LOGIN</a></li>
                                                    {{-- @if (Route::has('register'))
                                                        <li><a href="{{ route('register') }}">REGISTER</a></li>
                                                    @endif --}}
                                                @endauth
                                        @endif
                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                const menuItems = document.querySelectorAll('.main-menu ul li a');
                                                const sections = Array.from(document.querySelectorAll('section')).filter(section =>
                                                    Array.from(menuItems).some(item => item.getAttribute('href') === '#' + section.id)
                                                );

                                                function setActiveMenuItem() {
                                                    let currentSectionIndex = sections.length;

                                                    while (--currentSectionIndex && window.scrollY + 50 < sections[currentSectionIndex].offsetTop) {}

                                                    menuItems.forEach((item) => item.parentElement.classList.remove('active'));

                                                    const currentSection = sections[currentSectionIndex];
                                                    const correspondingMenuItem = document.querySelector(
                                                        `.main-menu ul li a[href="#${currentSection.id}"]`);

                                                    if (correspondingMenuItem) {
                                                        correspondingMenuItem.parentElement.classList.add('active');
                                                    }
                                                }

                                                setActiveMenuItem();
                                                window.addEventListener('scroll', setActiveMenuItem);

                                                menuItems.forEach(item => {
                                                    item.addEventListener('click', function(e) {
                                                        const href = this.getAttribute('href');

                                                        // Si el href no comienza con '#', es un enlace externo (como login)
                                                        if (!href.startsWith('#')) {
                                                            return; // Permite que el enlace funcione normalmente
                                                        }

                                                        e.preventDefault();
                                                        menuItems.forEach(i => i.parentElement.classList.remove('active'));
                                                        this.parentElement.classList.add('active');

                                                        const targetSection = document.querySelector(href);
                                                        if (targetSection) {
                                                            window.scrollTo({
                                                                top: targetSection.offsetTop,
                                                                behavior: 'smooth'
                                                            });
                                                        }
                                                    });
                                                });
                                            });
                                        </script>
                                    </ul>
                                </nav>
                            </div>

                        </div>
                        <div class="header__hamburger ml-30 d-xl-none">
                            <div class="sidebar__toggle">
                                <a class="bar-icon" href="javascript:void(0)">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
