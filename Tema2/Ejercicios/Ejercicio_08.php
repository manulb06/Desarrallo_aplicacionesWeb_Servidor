<?php 

$cadena = strtotime("2017-10-12");

$cadena1 = strtotime("2016-10-12");
 ;

if ($cadena>$cadena1)
$res = $cadena - $cadena1;
else $res = $cadena1 - $cadena;

echo $res;
?>