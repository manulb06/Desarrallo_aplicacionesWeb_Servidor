<?php
$nombre=$_GET["nombre"];
$primerApellido=$_GET["Primer_apellido"];
$segundoApellido=$_GET["Segundo_apellido"];
$edad=$_GET["Edad"];
$salario=$_GET["Salario"];

if ($salario>2000) $salarioFinal=$salario;
elseif($salario<1000){
  if($edad<30)$salarioFinal=1100;
elseif($edad>45)$salarioFinal=$salario*1.15;
else$salarioFinal=$salario*1.1;
}
else if($edad>45)$salarioFinal=$salario*1.03;
else $salarioFinal=$salario*1.1;
echo"El salario de $nombre $primerApellido $segundoApellido es de $salarioFinal €";
?>