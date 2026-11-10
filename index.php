<?php include("header.php"); ?>

<main>

    <section class="portada">

        <h1>Golden Barber Shop</h1>

        <p>
            Cortes modernos, clásicos y cuidado profesional para caballeros.
        </p>

    <a href="contacto.php" class="boton">
            Reservar cita
        </a>

    </section>

    <section class="servicio contenedor">

        <h2>Servicios Destacados</h2>

        <div class="cards">

            <article class="tarjeta">

                <img src="./img/corte1.jpg" alt="Corte clásico">

                <h3>Corte Clásico</h3>

                <p>
                    Estilo tradicional con acabado profesional.
                </p>

            </article>

            <article class="tarjeta">

                <img src="./img/corte2.jpg" alt="Perfilado de barba">

                <h3>Perfilado de Barba</h3>

                <p>
                    Diseño y mantenimiento profesional de barba.
                </p>

            </article>

            <article class="tarjeta">

                <img src="./img/corte3.jpg" alt="Combo premium">

                <h3>Combo Premium</h3>

                <p>
                    Corte, barba y acabado completo.
                </p>

            </article>

        </div>

    </section>

    <section class="preguntas contenedor">

        <h2>Preguntas Frecuentes</h2>

        <div class="accordion">

            <div class="item">

                <button class="titulo">
                    ¿Atienden sin cita?
                </button>

                <div class="contenido">
                    <p>
                        Sí, atendemos por orden de llegada.
                    </p>
                </div>

            </div>

            <div class="item">

                <button class="titulo">
                    ¿Cuál es el horario?
                </button>

                <div class="contenido">
                    <p>
                        Lunes a sábado de 9:00 a.m. a 8:00 p.m.
                    </p>
                </div>

            </div>

            <div class="item ">

                <button class="titulo">
                    ¿Aceptan tarjeta?
                </button>

                <div class="contenido">
                    <p>
                        Sí aceptamos efectivo y tarjeta.
                    </p>
                </div>

            </div>

            <div class="item">

                <button class="titulo">
                    ¿Atienden niños?
                </button>

                <div class="contenido">
                    <p>
                        Sí, realizamos cortes para todas las edades.
                    </p>
                </div>

            </div>

        </div>

    </section>

    <section class="galeria contenedor">

        <h2>Galería</h2>

        <p>
            Algunos de nuestros trabajos.
        </p>

        <div class="cards">

            <article class="tarjeta">
                <img src="./img/corte1.jpg" alt="Corte clásico">
            </article>

            <article class="tarjeta">
                <img src="./img/corte2.jpg" alt="Perfilado de barba">
            </article>

            <article class="tarjeta">
                <img src="./img/corte3.jpg" alt="Fade profesional">
            </article>

            <article class="tarjeta">
                <img src="./img/corte4.jpg" alt="Cliente satisfecho">
            </article>

        </div>

    </section>

</main>

<?php include("footer.php"); ?>