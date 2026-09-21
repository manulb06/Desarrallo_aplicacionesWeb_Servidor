<?php

/*
 * Vamos a estudiar los arrays asociativos en PHP. 
 * Un array asociativo es un tipo de array donde 
 * cada elemento tiene una clave personalizada en 
 * lugar de un índice numérico.
 */

// Declaración de un array asociativo
$persona = array(
    "nombre" => "Juan",
    "edad" => 30,
    "ciudad" => "Madrid"
);

// Acceso a elementos del array asociativo
echo "Nombre: " . $persona["nombre"] . "<br>";
echo "Edad: " . $persona["edad"] . "<br>";
echo "Ciudad: " . $persona["ciudad"] . "<br>";

// Modificación de elementos del array asociativo
$persona["edad"] = 31; // Modificar un elemento existente
$persona["profesion"] = "Ingeniero"; // Agregar un nuevo elemento   

// Recorrer un array asociativo con un bucle foreach y mostrar resultado
foreach($persona as $key => $val) {
    echo "$key: $val<br>";
}
$persona1 = array(
    "nombre" => "Manuel",
    "edad" => 20,
    "ciudad" => "Madrid"
);
$persona2 = array(
    "nombre" => "Luis",
    "edad" => 25,
    "ciudad" => "Getafe"
);
echo "<br>";
echo "<br>";
echo "<br>";
$listadoAlumnos=array($persona1,$persona2);
foreach ($listadoAlumnos as $alumno) {
    echo "Nombre: " . $alumno["nombre"] . "<br>";
    echo "Edad: " . $alumno["edad"] . "<br>";
    echo "Ciudad: " . $alumno["ciudad"] . "<br>";
    echo "<br>";
}
?>