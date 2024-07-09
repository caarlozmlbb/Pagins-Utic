
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
        /* background-image: url('https://serviciopagina.upea.bo/InstitucionUpea/Portada/38da5e35-85c8-411e-9052-ecc14ef6627a.jpg'); */
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
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5));
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
{{--
<h2>Previsualización de Documentos</h2>

<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="preview-container">
                <canvas id="pdf-preview-1" class="preview-box"></canvas>
                <span>Previsualización del documento 1</span>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="preview-container">
                <canvas id="pdf-preview-2" class="preview-box"></canvas>
                <span>Previsualización del documento 2</span>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="preview-container">
                <canvas id="pdf-preview-3" class="preview-box"></canvas>
                <span>Previsualización del documento 3</span>
            </div>
        </div>
    </div>
    <!-- Agrega los botones de navegación -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- Agrega la paginación -->
    <div class="swiper-pagination"></div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.8/swiper.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const pdfUrls = [
            '{{ asset('assets/doc/manual_procedimiento_ciclodevida.pdf') }}',
            '{{ asset('assets/doc/PISI-UPEA.pdf') }}',
            // Agrega aquí el tercer PDF
            '{{ asset('assets/doc/estandares_abiertos.pdf') }}'
        ];

        const swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });

        // Función para cargar y renderizar el PDF en el canvas
        function renderPdf(pdfUrl, canvasId) {
            const loadingTask = pdfjsLib.getDocument(pdfUrl);
            loadingTask.promise.then(function(pdf) {
                pdf.getPage(1).then(function(page) {
                    const containerWidth = document.querySelector(`#${canvasId}`).parentElement.clientWidth;
                    const viewport = page.getViewport({ scale: 1 });
                    const scale = containerWidth / viewport.width; // Ajustar escala basado en el ancho del contenedor
                    const scaledViewport = page.getViewport({ scale });

                    const canvas = document.getElementById(canvasId);
                    const context = canvas.getContext('2d');
                    canvas.height = scaledViewport.height;
                    canvas.width = scaledViewport.width;

                    const renderContext = {
                        canvasContext: context,
                        viewport: scaledViewport
                    };
                    page.render(renderContext);

                    document.querySelector(`#${canvasId}`).parentElement.querySelector('span').style.display = 'none';
                });
            });
        }

        // Cargar y renderizar los PDFs
        renderPdf(pdfUrls[0], 'pdf-preview-1');
        renderPdf(pdfUrls[1], 'pdf-preview-2');
        // Llama a renderPdf para el tercer PDF aquí

        // Ejemplo de cómo usar Swiper API
        swiper.on('slideChange', function() {
            const activeSlide = swiper.slides[swiper.activeIndex];
            const canvasId = activeSlide.querySelector('.preview-box').id;
            const pdfIndex = swiper.activeIndex % pdfUrls.length;
            renderPdf(pdfUrls[pdfIndex], canvasId);
        });
    });
</script>

<style>
    .swiper-container {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
    }

    .preview-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
        position: relative;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 10px;
        background-color: #f8f8f8;
        width: 350px;
        height: 450px;
        overflow: hidden;
    }

    .preview-box {
        max-width: 100%;
        height: auto;
        border: 1px solid #ccc; /* Añade un borde opcional para mayor claridad */
    }

    .preview-container span {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 1.2em;
        color: #aaa;
    }

    .swiper-button-next, .swiper-button-prev {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 30px;
        height: 30px;
        background-color: #007BFF;
        color: #fff;
        border-radius: 50%;
        text-align: center;
        line-height: 30px;
        z-index: 10;
        cursor: pointer;
    }

    .swiper-button-prev {
        left: 10px;
    }

    .swiper-button-next {
        right: 10px;
    }

    .swiper-pagination {
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
    }

    .swiper-pagination-bullet {
        width: 10px;
        height: 10px;
        background-color: #007BFF;
        opacity: 0.7;
    }

    .swiper-pagination-bullet-active {
        opacity: 1;
    }
</style> --}}
