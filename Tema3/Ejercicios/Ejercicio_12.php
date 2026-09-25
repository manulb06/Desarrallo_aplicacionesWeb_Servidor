<?php 
    require_once=("Validacion.inc.php");
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio_12</title>
</head>
<body>
    <form>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <?= "<br>"; ?>
        <label for="apellido1">Primer Apellido:</label>
        <input type="text" id="apellido1" name="apellido1" required>
        <?= "<br>"; ?>
        <label for="apellido2">Segundo Apellido:</label>
        <input type ="text" id="apellido2" name="apellido2"required>
        <?= "<br>"; ?>
        <label for="usuario">Nombre de usuario:</label>
        <input type ="text" id="usuario" name="usuario"required>
        <?= "<br>"; ?>
        <label for="documentacion"> Introduce tu documentación(DNI/NIE):</label>
        <input type=" text" id="documentacion" name="documentacion"required>
        <?= "<br>"; ?>
        <label for="telefono"> Número de telefono:</label>
        <input type="number" id="telefono" name="telefono"required>
        <?= "<br>"; ?>
        <input type="submit" name="enviar" value="Enviar Formulario">
    </form>
</body>
</html>