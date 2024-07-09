<section class="contact">
    <div class="content">

        <h2>DATOS DE CONTACTO</h2>
        <p style="font-family: 'Pattanakarn', sans-serif; font-weight: 100;">En U-TIC, nos dedicamos a proporcionar
            soluciones tecnológicas avanzadas y servicios de comunicación
            eficientes para satisfacer las necesidades de nuestra comunidad. Nos comprometemos a ofrecer un entorno
            seguro y accesible para el intercambio de información, promoviendo la innovación y la colaboración.</p>
    </div>
    <div class="containere">
        <div class="contactInfo">
            @foreach ($contactos as $contacto)
                <div class="box">
                    <div class="icon">
                        <img src="https://cdn.icon-icons.com/icons2/3783/PNG/512/direction_navigation_map_maps_pin_icon_232090.png"
                            alt="Ubicación">
                    </div>

                    <style>
                        .icon img {
                            width: 60px;
                            height: auto;
                            border-radius: 10%;
                        }
                    </style>
                    <div class="text">
                        <h3>Dirección</h3>
                        <p>{{ $contacto->direccion }}</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <img src="https://cdn.icon-icons.com/icons2/56/PNG/512/metrophone_metr_11263.png"
                            alt="Ubicación">
                    </div>
                    <div class="text">
                        <h3>Teléfono</h3>
                        <p>{{ $contacto->telefono }}</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <img src="https://cdn-icons-png.flaticon.com/256/281/281769.png" alt="Ubicación">
                    </div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>{{ $contacto->correo }}</p>
                    </div>
                </div>

                <div class="social">
                    <ul>
                        <li><a href="https://www.facebook.com/profile.php?id=61559761230176" target="_blank"><i
                                    class="fa-brands fa-facebook-f" style="color: #3838a8;"></i></a></li>
                        <li><a href="https://www.instagram.com/tuPagina" target="_blank"><i
                                    class="fa-brands fa-instagram" style="color: #3838a8;"></i></a></li>
                        <li><a href="https://www.tiktok.com/@utic?_t=8VCAKZiwk34&_r=1" target="_blank"><i
                                    class="fa-brands fa-tiktok" style="color: #3838a8;"></i></a></li>
                        <li><a href="https://wa.me/59177728645" target="_blank"><i class="fa-brands fa-whatsapp"
                                    style="color: #3838a8;"></i></a></li>
                    </ul>
                </div>
            @endforeach
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d956.4127373120543!2d-68.19365072506798!3d-16.49320279071786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915edf53a9c8ea57%3A0x1a3fe3118e4703f8!2sEdificio%20Tecnol%C3%B3gico%20Torre%20A%20(Carrera%20de%20Ingenier%C3%ADa%20de%20Sistemas)!5e0!3m2!1ses!2sbo!4v1719496124572!5m2!1ses!2sbo"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
