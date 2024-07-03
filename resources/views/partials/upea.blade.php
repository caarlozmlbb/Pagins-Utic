
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
        background-image: url('https://www.eabolivia.com/images/stories/photos/upea-elalto.jpg');

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
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
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
