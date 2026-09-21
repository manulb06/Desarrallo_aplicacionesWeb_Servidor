<?php 

$cadena = strtotime("2017-10-12");

$cadena1 = strtotime("2014-03-12");
 ;

if ($cadena>$cadena1)
$res = $cadena - $cadena1;
else $res = $cadena1 - $cadena;

echo $res/(3600*24);
?>