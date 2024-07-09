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
                            @foreach ($contactos as $contacto)
                                <div class="footer-2__social mt-30 mt-xs-30">
                                    <a href="{{$contacto->instagram}}" target="_blank">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    <a href="{{$contacto->facebook}}" target="_blank">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.youtube.com/" target="_blank">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                    <a href="https://wa.me/{{$contacto->telefono}}" target="_blank">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </a>
                                    <a href="{{$contacto->tiktok}}" target="_blank">
                                        <i class="fa-brands fa-tiktok"></i>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-lg-2 col-6">
                        <div class="footer-2__widget footer-2__widget-item-2">
                            <div class="footer-2__widget-title">
                                <h4>Servicios</h4>
                            </div>
                            <div class="footer-2__link">
                                <ul>
                                    <li><a href="#personal">Personal</a></li>
                                    <li><a href="#anuncios">Cursos</a></li>
                                    <li><a href="#paginas">Paginas</a></li>
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
                            @foreach ($contactos as $contacto)
                            <div class="footer-2__link footer-2__link-location">
                                <ul>
                                    <li><a href="{{$contacto->correo}}"><i class="fa-solid fa-envelope"></i>
                                        {{$contacto->correo}}</a></li>
                                    <li><a href="{{$contacto->direccion}}"><i class="fa-solid fa-location-dot"></i> {{$contacto->direccion}}</a></li>
                                </ul>
                            </div>
                            @endforeach

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
                                    @foreach ($contactos as $contacto)
                                    <button type="submit" class="rr-btn rr-btn__theme">
                                        <span class="btn-wrap">
                                            <a href=""><span
                                                    class="text-one">FACEBOOK</span></a>
                                            <a href="{{ $contacto->facebook }}"><span
                                                    class="text-two">FACEBOOK</span></a>
                                        </span>
                                    </button>
                                    @endforeach

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
                                        | U-TIC - Web Developer CarlosMC
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
