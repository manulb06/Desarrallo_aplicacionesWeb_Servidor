<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio propuesto en clase</title>
</head>
<body>
    <form action="ComprobacionEjClase.php" method="post">
        <fieldset>
            <legend> Formulario login</legend>
            <label for="Usuario" id="Usuario">Usuario </label>
            <input type="text" id="Usuario" name="Usuario" ><br/>
            <label for="Contraseña" id="Contraseña">Contraseña</label>
            <input type="password" id="Contraseña" name="Contraseña" ><br/>
            <label for ="CobGuardada" id="CobGuardada">Guardar contraseña</label>
            <input type="checkbox" id="CobGuardada" name="CobGuardada" value="Contraseña Guardada">
            <input type="submit" name="enviar" value="enviar">
        </fieldset>
    </form>
</body>
</html>