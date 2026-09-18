<?php
$var="Hola";
echo var_dump(isset($var));
echo"<br>";
unset($var);
echo var_dump(isset($var));

//echo $res= !empty($var)?"existe y tiene contenido":"Existe y esta vacia";
?>