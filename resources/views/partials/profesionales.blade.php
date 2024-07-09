

        <!-- Doctor start -->
        <section id="personal" class="doctor doctor__background">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section__title-wrapper doctor__content text-center mb-60 mb-xs-30">
                            <h5 class="section__subtitle color-theme-primary mb-15 mb-xs-10 title-animation"><img
                                    src="assets/imgs/ask-quesiton/heart.png" alt="icon not found"
                                    class="img-fluid">Nuestros Profesionales</h5>
                                    <h2 class="section__title mb-0 title-animation">
                                        <i class="fas fa-briefcase"  style="background: linear-gradient(to right, red, blue); -webkit-background-clip: text; color: transparent;"></i> Profesionales U-TIC
                                    </h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="swiper doctor__slider">
                            <div class="swiper-wrapper">

                                @foreach ($profesionales as $profesional)
                                <div class="swiper-slide">
                                    <div class="doctor__item position-relative overflow-hidden">
                                        <div class="doctor__item-media">
                                            <img src="{{ asset('./assets/imgs/Profesionales/'.$profesional->foto) }}" class="img-fluid"
                                                alt="image not found">
                                        </div>
                                        <div class="doctor__item-content">
                                            <div class="doctor__item-content-text text-center">
                                                <p>{{$profesional->cargo->nombre_cargo }}</p>
                                                <h4><a href="about-us.html">{{ $profesional->nombre }} {{ $profesional->apellido }}</a></h4>
                                            </div>
                                            <div class="doctor__item-content-share">
                                                <a href="{{ 'https://wa.me/'.$profesional->telefono }}"><i class="fa-brands fa-whatsapp"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="doctor__slider-dot mt-80 mt-lg-50 mt-md-40 mt-sm-35 mt-xs-30"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Doctor start -->
