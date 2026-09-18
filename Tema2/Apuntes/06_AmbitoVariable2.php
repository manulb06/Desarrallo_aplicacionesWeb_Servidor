<?php 
function miFun(){
static $cont=1;
echo "Llamada a la funcion numero $cont"."<br>";
$cont++;
}

miFun();
miFun();
miFun();
miFun();
?>