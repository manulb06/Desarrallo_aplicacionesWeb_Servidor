<?php
// Database credentials
$host = "localhost";
$username = "teleasistencia1";
$password = "1234";
$dbname = "teleasistencia1";

// 1. Create database connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// 2. Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$query = "select * from usuario";
$query ="INSERT INTO `usuario`(`usuario`, `contrasenia`,`rol`) VALUES ('userPHP','1234','php')";
mysqli_query($conn, $query);

?>