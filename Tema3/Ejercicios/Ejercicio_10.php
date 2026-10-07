<?php
// Array desordenado con los equipos y sus puntos de la temporada 2014/15
$equipos = [
    ["nombre" => "Elche", "puntos" => 41],
    ["nombre" => "Real Madrid", "puntos" => 92],
    ["nombre" => "Villarreal", "puntos" => 60],
    ["nombre" => "Barcelona", "puntos" => 94],
    ["nombre" => "Málaga", "puntos" => 50],
    ["nombre" => "Atlético Madrid", "puntos" => 78],
    ["nombre" => "Getafe", "puntos" => 37],
    ["nombre" => "Valencia", "puntos" => 77],
    ["nombre" => "Espanyol", "puntos" => 49],
    ["nombre" => "Sevilla", "puntos" => 76],
    ["nombre" => "Granada", "puntos" => 35],
    ["nombre" => "Athletic Club", "puntos" => 55],
    ["nombre" => "Deportivo A Coruña", "puntos" => 35],
    ["nombre" => "Celta Vigo", "puntos" => 51],
    ["nombre" => "Eibar", "puntos" => 35],
    ["nombre" => "Rayo Vallecano", "puntos" => 49],
    ["nombre" => "Almería", "puntos" => 32],
    ["nombre" => "Real Sociedad", "puntos" => 46],
    ["nombre" => "Córdoba", "puntos" => 20],
    ["nombre" => "Levante", "puntos" => 37]
];

// 1. Ordenar el array de mayor a menor según los puntos
usort($equipos, function($a, $b) {
    return $b['puntos'] - $a['puntos'];
});

// 2. Construir la clasificación oficial asignando la posición (índice + 1)
$clasificacionOficial = [];
foreach ($equipos as $index => $eq) {
    $clasificacionOficial[$eq['nombre']] = [
        'posicion' => $index + 1,
        'puntos' => $eq['puntos']
    ];
}

$equipoSeleccionado = $_GET['equipo'] ?? '';
$resultado = '';
$datosOK = false;

// 3. Procesar cuando se envíe el formulario por GET
if (isset($_GET['enviar'])) {
    if (!empty($equipoSeleccionado) && isset($clasificacionOficial[$equipoSeleccionado])) {
        $datosOK = true;
    } else {
        $datosOK = false;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio Clasificación La Liga</title>
</head>
<body>

    <?php if (isset($_GET['enviar']) && $datosOK): ?>
        <?php 
            $info = $clasificacionOficial[$equipoSeleccionado];
        ?>
        <p>El <strong><?= htmlspecialchars($equipoSeleccionado); ?></strong> terminó en la <strong><?= $info['posicion']; ?>ª</strong> posición con <strong><?= $info['puntos']; ?></strong> puntos.</p>
    <?php elseif (isset($_GET['enviar']) && !$datosOK): ?>
        <p>Por favor, selecciona un equipo válido.</p>
    <?php endif; ?>

    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        <label for="equipo">Elige un equipo:</label>
        <select name="equipo" id="equipo">
            <option value="">-- Selecciona un equipo --</option>
            <?php foreach ($clasificacionOficial as $nombre => $datos): ?>
                <option value="<?= htmlspecialchars($nombre); ?>" <?= ($equipoSeleccionado === $nombre) ? 'selected' : ''; ?>>
                    <?= htmlspecialchars($nombre); ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br><br>
        <input type="submit" name="enviar" value="Consultar">
    </form>

</body>
</html>