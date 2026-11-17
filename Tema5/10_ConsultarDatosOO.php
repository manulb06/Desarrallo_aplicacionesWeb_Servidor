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
$query = "SELECT * FROM `usuarios`";
$result = $mysqli->query($query);

// Recorremos los registros
while ($tupla = $result->fetch_assoc()) {
    echo $tupla["usuario"] . "<br>";
}

$mysqli->close();


?>