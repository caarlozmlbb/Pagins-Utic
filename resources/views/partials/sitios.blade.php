<!-- Filter area end -->

<section class="doctor doctor__background" id="paginas">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section__title-wrapper doctor__content text-center mb-60 mb-xs-30">
                    <h5 class="section__subtitle color-theme-primary mb-15 mb-xs-10 title-animation">
                        <img src="assets/imgs/ask-quesiton/heart.png" alt="icon not found" class="img-fluid">Sistemas webs
                    </h5>
                    <h2 class="section__title mb-0 title-animation">Sistemas y sitios web a nivel Universidad</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="swiper doctor__slider">
                    <div class="swiper-wrapper">
                        @foreach ($paginas as $pagina)
                        <div class="swiper-slide">
                                <div class="carde">
                                    <div class="covere">
                                        <img src="{{ asset('assets/imgs/paginas/'.$pagina->foto) }}">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <p>{{ $pagina->descripcion }} </p>
                                        <p><a href="{{ $pagina->url_pagina }}">Visitar</a></p>
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
    <style>
        .carde {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .carde .covere {
            position: relative;
            width: 200px;
            /* Ajusta el tamaño según tus necesidades */
            height: 200px;
            /* Ajusta el tamaño según tus necesidades */
            margin-bottom: 10px;
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

        .carde .description {
            padding: 10px;
            background-color: #f8f8f8;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .carde .description p {
            margin: 0;
            color: #333;
        }
        .carde .description a {
        display: inline-block;
        padding: 5px 10px;
        margin-top: 5px;
        background-color: #00244a;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .carde .description a:hover {
        background-color: #0056b3;
    }


        @media (max-width: 768px) {
            .carde {
                left: 0px;
            }
        }
    </style>
</section>
