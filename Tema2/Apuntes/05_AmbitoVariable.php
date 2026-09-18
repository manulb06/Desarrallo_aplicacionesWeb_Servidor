<?php
$varG="Variable global";

function miFun()
{
    $varL="variable Local";
    $varG="Blablabla";  
    global $varG;

echo $varG."<br>";
echo $varL;
}
miFun();
?>