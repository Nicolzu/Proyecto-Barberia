<?php include("header.php"); ?>

<?php

$mensaje = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nombre = trim($_POST["nombre"]);
    $correo = trim($_POST["correo"]);
    $texto = trim($_POST["mensaje"]);

    if($nombre != "" && $correo != "" && $texto != ""){

        $mensaje = "Formulario enviado correctamente.";

    }else{

        $mensaje = "Debe completar todos los campos.";

    }

}

?>

<main class="contenedor">

    <h1>Contacto</h1>

    <p>
        Ponte en contacto con nosotros para reservar tu cita.
    </p>

    <form method="POST">

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required>

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="5" required></textarea>

        <button type="submit" class="boton">
            Enviar
        </button>

    </form>

    <?php if($mensaje != ""){ ?>

        <p>
            <?php echo $mensaje; ?>
        </p>

    <?php } ?>

</main>

<?php include("footer.php"); ?>