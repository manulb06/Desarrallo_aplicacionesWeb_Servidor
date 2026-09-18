<?php
$a = 1;
$b = 2;

echo "valor de a es ".$a."<br>";
echo "Valor de b es ".$b."<br>";
$c = $a;
$a=$b;
$b=$c;

echo "el valor nuevo de a es ".$a."<br>";
echo "el valor nuevo de b es ".$b;

?>