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
    if(isset($_POST["ActualizarDatos"]))
    {
        if(isset($_POST["usuario"]) && !empty($_POST["usuario"]))
        {
            $usuario = $_POST["usuario"];
        }
        if(isset($_POST["datonuevo"]) && !empty($_POST["datonuevo"]))
        {
            $dato = $_POST["dato"];
        }
        if(isset($_POST["datonuevo"]) && !empty($_POST["datonuevo"]))
        {
            $datonuevo = $_POST["datonuevo"];
        }
        if($dato=="rol")
        {
            $query ="UPDATE `usuario` SET `rol`='$datonuevo' WHERE `usuario`='$usuario'";
        }else if($dato=="contrasenia")
        {
            $query ="UPDATE `usuario` SET `contrasenia`='$datonuevo' WHERE `usuario`='$usuario'";
        }
        
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
            <label for="usuario">Usuario al que quieres actualizar:</label>
            <input type="text" id="usuario" name="usuario" required>
            <?php echo "<br>"; ?>
            <label for="dato">Dato a actualizar:</label>
            <input type="text" id="dato" name="dato" required>
            <?php echo "<br>"; ?>
            <label for="datonuevo">Nuevo Valor:</label>
            <input type="text" id="datonuevo" name="datonuevo" required>

            <?php echo "<br>"; ?>
            <input type="submit" name="ActualizarDatos" id="ActualizarDatos" value="Actualizar Datos">
        </form>
    </body>
</html>