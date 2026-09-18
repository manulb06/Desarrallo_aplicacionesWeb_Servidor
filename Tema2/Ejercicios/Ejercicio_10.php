<?php

$fecha = "2008-06-23";

$primerDia = date("Y-m-01", strtotime($fecha));
$ultimoDia = date("Y-m-t", strtotime($fecha));

echo "Primer día: " . $primerDia . "<br>";
echo "Último día: " . $ultimoDia;

?>