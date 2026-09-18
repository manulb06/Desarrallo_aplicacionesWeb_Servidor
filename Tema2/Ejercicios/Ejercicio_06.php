<?php

$url = "http://localhost/DWES/Ejericios/Ejercicio_05.php";

$datos = parse_url($url);

echo "Protocolo: " . $datos['scheme'] . "<br>";
echo "Nombre del host: " . $datos['host'] . "<br>";
echo "Path: " . $datos['path'] . "<br>";

?>