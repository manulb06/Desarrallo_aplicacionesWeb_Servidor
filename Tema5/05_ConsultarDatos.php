<?php
/**
* Primer ejemplo de conexión a una base de datos MySQL/Mariadb
* Este ejemplo corresponde a programación funcional mediante 
* funciones mysqli
*/

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

$query= "SELECT * FROM `usuario`";
$result = mysqli_query($conn, $query);

$num = mysqli_num_rows($result);
echo "tengo $num filas de datos<br>";
while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
 echo $row['usuario'];
}
?>