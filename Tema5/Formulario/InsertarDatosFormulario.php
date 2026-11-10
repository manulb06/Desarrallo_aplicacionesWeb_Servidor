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

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["InsertarDatos"]))
    {
        if(isset($_POST["usuario"]) && !empty($_POST["usuario"]))
        {
            $usuario = $_POST["usuario"];
        }
        if(isset($_POST["contrasenia"]) && !empty($_POST["contrasenia"]))
        {
            $contrasenia = $_POST["contrasenia"];
        }
        if(isset($_POST["rol"]) && !empty($_POST["rol"]))
        {
            $rol = $_POST["rol"];
        }
        $query ="INSERT INTO `usuario`(`usuario`, `contrasenia`,`rol`) VALUES ('$usuario','$contrasenia','$rol')";
        mysqli_query($conn, $query);
    }
    
}


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Insertar Datos</title>
    </head>
    <body>
        <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="post">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>
            <?php echo "<br>"; ?>
            <label for="contrasenia">Contraseña:</label>
            <input type="password" id="contrasenia" name="contrasenia" required>
            <?php echo "<br>"; ?>
            <label for="rol">Rol:</label>
            <input type="text" id="rol" name="rol" required>
            <?php echo "<br>"; ?>
            <input type="submit" name="InsertarDatos" id="InsertarDatos" value="Insertar Datos">
        </form>
    </body>
</html>