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

// 3. Insert data
$stmt = $mysqli->prepare("INSERT INTO `usuario`(`usuario`, `contrasenia`, `rol`) VALUES (?, ?, ?)");
$usuario = "userPHPPS";
$contrasenia = "1234";
$rol = "ps";

$stmt->bind_param("sss", $usuario, $contrasenia, $rol);
$stmt->execute();

// 4. Destroy object
$stmt->close();
$mysqli->close();


?>