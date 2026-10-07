<?php
    function dibujarArray($array) {
        if (!is_array($array) || empty($array)) {
            echo "<p>El array está vacío o no es válido.</p>";
            return;
        }

        echo '<table border="1" style="border-collapse: collapse; text-align: left; width: 100%; max-width: 500px;">';
        echo '<thead>';
        echo '<tr>';
        echo '<th style="background-color: #d3d3d3; padding: 8px;">Índice</th>';
        echo '<th style="padding: 8px;">Valor</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>'; // Corregido: faltaba el '<' antes de tbody

        foreach ($array as $indice => $valor) {
            echo '<tr>';
            // Columna de índices sombreada de gris (#e0e0e0)
            echo '<td style="background-color: #e0e0e0; padding: 8px; font-weight: bold;">' . htmlspecialchars($indice) . '</td>';
            // Columna de valores
            echo '<td style="padding: 8px;">' . htmlspecialchars(is_array($valor) ? print_r($valor, true) : $valor) . '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
    }

    $Alumno = [
        ["nombre" => "Manuel", "Edad" => 20, "instituto" => "IES Villaverde", "curso" => "2º DAW"],
        ["nombre" => "Daniel", "Edad" => 25, "instituto" => "IES Villaverde", "curso" => "2º DAW"],
        ["nombre" => "Ivan", "Edad" => 21, "instituto" => "IES Villaverde", "curso" => "1º DAW"],
        ["nombre" => "Luis", "Edad" => 40, "instituto" => "IES Villaverde", "curso" => "2º DAW"],
        ["nombre" => "Adrian", "Edad" => 18, "instituto" => "IES Villaverde", "curso" => "1º DAW"],
    ];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio - Función dibujarArray</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        h2 { color: #333; }
    </style>
</head>
<body>

    <h2>Contenido del Array de Alumnos</h2>
    <?php 
    // Creamos un array asociativo usando el nombre del alumno como índice y su curso/edad como valor
    $arrayPlanoParaMostrar = [];
    foreach ($Alumno as $a) {
        $arrayPlanoParaMostrar[$a['nombre']] = "Edad: " . $a['Edad'] . ", Curso: " . $a['curso'];
    }
    dibujarArray($arrayPlanoParaMostrar); 
    ?>

</body>
</html>