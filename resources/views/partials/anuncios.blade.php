<section class="anuncios_back" id="anuncios">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section__title-wrapper doctor__content text-center mb-60 mb-xs-30">
                    <h5 class="section__subtitle color-theme-primary mb-15 mb-xs-10 title-animation">
                        <i class="fas fa-bullhorn"></i> Anuncios U-TIC
                    </h5>
                    <h2 class="section__title mb-0 title-animation">
                        <i class="fas fa-book-open"  style="background: linear-gradient(to right, red, blue); -webkit-background-clip: text; color: transparent;""></i> Nuestros Cursos
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="swiper doctor__slider">
                    <div class="swiper-wrapper">
                        @foreach ($anuncios as $anuncio)
                            <div class="swiper-slide">
                                <div class="video-wrapper">
                                    <div class="image-container">
                                        <div class="image-wrapper">
                                            <div class="anuncio-label">Anuncios</div>
                                            <img src="{{ asset('assets/imgs/anuncios/' . $anuncio->foto) }}"
                                                alt="Descripción de la imagen">
                                            <div class="number-circle">
                                                <div class="number-day">{{ date('d', strtotime($anuncio->fecha_fin)) }}</div>
                                                <div class="number-month">{{ date('M', strtotime($anuncio->fecha_fin)) }}</div>
                                            </div>
                                        </div>
                                        <div class="image-description">
                                            {{ $anuncio->descripcion }}
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

<style>
    .anuncios_back {
        background: #f6fbff; /* Degradado de naranja a azul */
        color: #333; /* Color del texto */
        padding: 80px 0; /* Ajustar según necesites */
    }

    .anuncios_back .image-description {
        background-color: rgba(255, 255, 255, 0.9); /* Fondo semi-transparente para la descripción */
        color: #333; /* Color del texto de la descripción */
    }

    .image-container {
        text-align: center;
        margin: 20px;
        position: relative;
    }

    .image-wrapper {
        position: relative;
        display: inline-block;
        width: 100%; /* Ajuste para que ocupe el ancho completo del contenedor */
        max-width: 370px; /* Ancho máximo para evitar que se vea demasiado grande en pantallas grandes */
        height: auto; /* Para mantener la relación de aspecto de la imagen */
        border: 1px solid #ddd;
        border-radius: 8px 8px 0 0;
        overflow: hidden;
        background-color: #f0f0f0;
        transition: transform 0.3s ease, opacity 0.3s ease;
    }

    .image-wrapper img {
        width: 100%;
        height: auto;
        object-fit: cover;
        border-radius: 8px 8px 0 0;
    }

    .anuncio-label {
        position: absolute;
        top: 10px;
        left: 10px;
        background-color: rgba(0, 0, 0, 0.6);
        color: white;
        padding: 5px 10px;
        border-radius: 3px;
        font-size: 14px;
        z-index: 2;
    }

    .number-circle {
        position: absolute;
        bottom: 10px;
        right: 10px;
        width: 60px;
        height: 60px;
        background-color: red;
        color: white;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 16px;
        font-weight: bold;
        z-index: 3;
        transition: transform 0.3s ease;
    }

    .number-day {
        font-size: 20px;
    }

    .number-month {
        font-size: 14px;
        margin-top: 5px; /* Ajuste para alinear el mes debajo del día */
    }

    .image-description {
        font-size: 16px;
        color: #333;
        background-color: #fff;
        padding: 10px;
        border-radius: 0 0 8px 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin: 0 auto;
        width: 100%;
        max-width: 370px; /* Ancho máximo para mantener la legibilidad en pantallas grandes */
        transition: transform 0.3s ease;
    }

    .image-container:hover .image-wrapper {
        opacity: 0.8;
        transform: translateY(-10px);
    }

    .image-container:hover .image-description {
        transform: translateY(-10px);
    }

    .image-container:hover .number-circle {
        transform: translateY(-10px);
    }

    /* Media queries para ajustar el tamaño en dispositivos más pequeños */
    @media (max-width: 768px) {
        .image-wrapper,
        .image-description {
            width: 100%;
            max-width: 100%;
        }
    }
</style>
