<?php
session_start();

// Si se pulsa el botón de reiniciar, limpiamos el historial de elecciones
if (isset($_POST["reiniciar"])) {
    unset($_SESSION["elecciones"]);
}

// Inicializamos la sesión si no existe
if (!isset($_SESSION["elecciones"])) {
    $_SESSION["elecciones"] = [];
}

// Cuando se envía el formulario de opciones
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["enviar"]) && isset($_POST["op"]) && is_array($_POST["op"])) {
        // Guardamos las opciones elegidas en esta ronda
        $_SESSION["elecciones"][] = $_POST["op"];
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio con memoria</title>
</head>

<body>

<h2>Elecciones realizadas</h2>

<?php if (!empty($_SESSION["elecciones"])): ?>

    <ol>
        <?php foreach ($_SESSION["elecciones"] as $eleccion): ?>
            <li>
                <?php
                foreach ($eleccion as $opcion) {
                    echo htmlspecialchars($opcion) . " ";
                }
                ?>
            </li>
        <?php endforeach; ?>
    </ol>

    <!-- Botón para reiniciar/borrar las elecciones -->
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" style="margin-bottom: 20px;">
        <input type="submit" name="reiniciar" value="Reiniciar elecciones">
    </form>

<?php else: ?>

    <p>Todavía no has elegido ninguna opción.</p>

<?php endif; ?>


<?php if (count($_SESSION["elecciones"]) < 10): ?>

    <h2>Elige una opción</h2>

    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

        <input type="checkbox" id="op1" name="op[]" value="Opción 1">
        <label for="op1">Opción 1</label>
        <br>

        <input type="checkbox" id="op2" name="op[]" value="Opción 2">
        <label for="op2">Opción 2</label>
        <br>

        <input type="checkbox" id="op3" name="op[]" value="Opción 3">
        <label for="op3">Opción 3</label>
        <br>

        <input type="checkbox" id="op4" name="op[]" value="Opción 4">
        <label for="op4">Opción 4</label>
        <br>

        <input type="checkbox" id="op5" name="op[]" value="Opción 5">
        <label for="op5">Opción 5</label>
        <br><br>

        <input type="submit" name="enviar" value="Enviar">

    </form>

<?php else: ?>

    <h2>Has realizado las 10 elecciones.</h2>

<?php endif; ?>

</body>
</html>