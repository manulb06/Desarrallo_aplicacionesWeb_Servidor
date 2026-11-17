<?php
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
$stmt = $mysqli->prepare("UPDATE `usuario` SET `contrasenia`=? WHERE `usuario`=?");
$usuario = "userPHPPS";
$contrasenia = "ABCD";

$stmt->bind_param("ss", $contrasenia, $usuario);
$stmt->execute();

$stmt->close();
$mysqli->close();
?>