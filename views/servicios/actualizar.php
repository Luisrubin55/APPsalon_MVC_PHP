<h1 class="nombre-pagina">Actulizar Servicio</h1>
<p class="descripcion-pagina">Modifica los valores del formnulario</p>

<?php
    require_once __DIR__ . '/../templates/barra.php';
    require_once __DIR__ . '/../templates/alertas.php';
?>

<form method="POST" class="formulario">
    <?php include_once __DIR__ . '/formulario.php' ?>
    <input type="submit" class="boton" value="Actualizar Servicio">
</form>