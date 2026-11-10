<?php include("header.php"); ?>

<?php

$servicios = [

    [
        "nombre" => "Corte Clásico",
        "descripcion" => "Estilo tradicional."
    ],

    [
        "nombre" => "Corte Moderno",
        "descripcion" => "Cortes actuales adaptados a tu estilo."
    ],

    [
        "nombre" => "Fade Profesional",
        "descripcion" => "Degradados precisos y modernos."
    ],

    [
        "nombre" => "Perfilado de Barba",
        "descripcion" => "Diseño y cuidado profesional."
    ],

    [
        "nombre" => "Afeitado Premium",
        "descripcion" => "Afeitado tradicional."
    ],

    [
        "nombre" => "Combo Completo",
        "descripcion" => "Corte, cejas y barba."
    ],

    [
        "nombre" => "Perfilado de Cejas",
        "descripcion" => "Diseño y cuidado profesional."
    ]

];

?>

<main class="contenedor">

    <h1>Servicios</h1>

    <div class="cards">

        <?php foreach($servicios as $servicio){ ?>

            <article class="tarjeta">

                <h3>
                    <?php echo $servicio["nombre"]; ?>
                </h3>

                <p>
                    <?php echo $servicio["descripcion"]; ?>
                </p>

            </article>

        <?php } ?>

    </div>

</main>

<?php include("footer.php"); ?>