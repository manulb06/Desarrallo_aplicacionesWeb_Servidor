<?php
/**
* Primer ejemplo de inserción de datos a una base de datos MySQL/Mariadb
* Este ejemplo corresponde a programación funcional mediante 
* funciones mysqli
*/

// Database credentials
$host = "localhost";
$username = "teleasistencia1";
$password = "1234";
$dbname = "teleasistencia1";


// 1. Create database connection
$mysqli = new mysqli($host, $username, $password, $dbname);

// 2. Check connection
if ($mysqli == null) {
    die("Connection failed ");
}
// Insertamos una tupla en BD
$stmt = $mysqli->prepare("SELECT * FROM `usuarios` WHERE `rol` = ?");

$rol = 'ps';
$stmt->bind_param("s", $rol); 

$stmt->execute();

$result = $stmt->get_result();

// Recorremos los registros
while ($tupla = $result->fetch_assoc()) {
    echo $tupla["usuario"] . "<br>";
}

$stmt->close();
$mysqli->close();


?>