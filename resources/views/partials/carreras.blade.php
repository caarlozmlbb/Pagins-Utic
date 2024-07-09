<!-- Doctor start -->
<section class="doctor doctor__background" id="carreras">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section__title-wrapper doctor__content text-center mb-60 mb-xs-30">
                    <h5 class="section__subtitle color-theme-primary mb-15 mb-xs-10 title-animation">
                        <img src="assets/imgs/ask-quesiton/heart.png" alt="icon not found" class="img-fluid">Carreras
                    </h5>
                    <h2 class="section__title mb-0 title-animation">
                        <i class="fas fa-laptop-code" style="background: linear-gradient(to right, red, blue); -webkit-background-clip: text; color: transparent;"></i> PLATAFORMAS POR CARRERAS
                    </h2>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="swiper doctor__slider">
                    <div class="swiper-wrapper">
                        @foreach ($carreras as $carrera)
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="{{ asset('assets/imgs/carreras/' .$carrera->logo) }}">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="{{ $carrera->url_inscripcion }}">Sistema de Inscripcion</a>
                                        <a href="{{ $carrera->url_plataforma }}">Plataforma Virtual</a>
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


