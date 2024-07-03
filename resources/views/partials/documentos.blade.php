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
