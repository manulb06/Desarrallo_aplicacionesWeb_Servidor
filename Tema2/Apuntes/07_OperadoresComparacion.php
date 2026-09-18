<?php 

$a = 5;
$b = 5;

if($a==$b) echo "Son iguales"."<br>";
else echo "Son diferentes"."<br>";
if($a<=>$b) echo "$a es menor que $b"."<br>";
else echo "$b es mayor que $a"."<br>";

 if($a<=>$b) echo "$a es menor que $b"."<br>";
else if($a<=>$b) echo "$b es mayor que $a"."<br>";
else echo "son iguales"."<br>";
?>