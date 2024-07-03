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

