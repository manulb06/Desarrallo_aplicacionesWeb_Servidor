<?php

/*
 * Funciones en PHP
 * Una función es un bloque de código que realiza 
 * una tarea específica y puede ser reutilizado en 
 * diferentes partes de un programa.
 * Las funciones pueden recibir parámetros y devolver valores.
 */

// Definición de una función sin parámetros
function miFun1() {
    echo "¡Hola! Bienvenido a PHP.<br>";
}

// Llamada a la función
miFun1();

// Definición de una función con retorno de valor
function miFun2() {
    return "¡Hola! Esta es una función con retorno de valor.<br>";
}

// Llamada a la función y almacenamiento del valor devuelto
$mensaje = miFun2();
echo $mensaje;

function miFun3($nombre, $edad,$estudiante=true) {
    if ($estudiante==true)return "Hola, $nombre cuya edad es $edad <br>";
}

// Llamada a la función y almacenamiento del valor devuelto
$mensaje = miFun3("Javi", 19);
echo $mensaje;
$mensaje = miFun3("Manuel", 20, false);
echo $mensaje;

?>