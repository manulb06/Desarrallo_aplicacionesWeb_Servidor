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

// 3. Delete data
$stmt = $mysqli->prepare("DELETE FROM `usuario` WHERE `usuario`=?");
$usuario = "userPHPPS";
$stmt->bind_param("s", $usuario);
$stmt->execute();

$stmt->close();
$mysqli->close();
?>