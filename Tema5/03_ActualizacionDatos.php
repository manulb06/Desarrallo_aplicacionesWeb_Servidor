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
echo "Connected successfully.<br><br>";

$query = "UPDATE `usuario` SET `contrasenia`='5678' WHERE `usuario`='userPHP'";
mysqli_query($conn, $query);
echo "Datos actualizados correctamente";

?>