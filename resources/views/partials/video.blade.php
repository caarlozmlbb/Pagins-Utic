<!-- Doctor start -->
<section class="doctor doctor__background" id="carreras">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section__title-wrapper doctor__content text-center mb-60 mb-xs-30">
                    <h5 class="section__subtitle color-theme-primary mb-15 mb-xs-10 title-animation">
                        <i class="fab fa-youtube"></i> videos U-TIC
                    </h5>
                    <h2 class="section__title mb-0 title-animation">
                        <i class="fas fa-video" style="background: linear-gradient(to right, red, blue); -webkit-background-clip: text; color: transparent;"></i>
                        NUESTROS VIDEOS
                    </h2>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="swiper doctor__slider">
                    <div class="swiper-wrapper">
                        @foreach ($videos as $video)
                        @php
                            // Reemplazar 'watch?v=' con 'embed/' si es necesario
                            $embedUrl = str_replace('watch?v=', 'embed/', $video->url_video);
                        @endphp
                        <div class="swiper-slide">
                            <div class="video-wrapper">
                                <div class="video-container">
                                    <iframe width="460" height="258" src="{{ $embedUrl }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="video-description">
                                    <p>{{ $video->descripcion }}</p>
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
    .video-wrapper {
        text-align: center;
        margin: 20px;
    }

    .video-container {
        position: relative;
        width: 460px;
        height: 258px;
        max-width: 100%;
        margin: 0 auto;
        overflow: hidden;
        border: 1px solid #ddd;
        border-radius: 8px;
        background-color: #fff;
    }

    .video-container iframe {
        width: 100%;
        height: 100%;
        border-radius: 8px;
    }

    .video-description {
        margin-top: 10px;
        padding: 10px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .video-description p {
        margin: 0;
        font-size: 1em;
        color: #333;
    }
</style>


