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
    if(isset($_POST["BorrarDatos"]))
    {
        if(isset($_POST["usuario"]) && !empty($_POST["usuario"]))
        {
            $usuario = $_POST["usuario"];
        }
        
        
        $query = "DELETE FROM `usuario` WHERE `usuario`='$usuario'";
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
            <label for="usuario">Usuario al que quieres Borrar:</label>
            <input type="text" id="usuario" name="usuario" required>
            <?php echo "<br>"; ?>
            <input type="submit" name="BorrarDatos" id="borrarDatos" value="Borrar Datos">
        </form>
    </body>
</html>