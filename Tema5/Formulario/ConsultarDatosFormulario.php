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
    if(isset($_POST["ConsultarDatos"]))
    {
        if(isset($_POST["usuario"]) && !empty($_POST["usuario"]))
        {
            $usuario = $_POST["usuario"];
        }
        
        
        $query= "SELECT * FROM `usuario` where `usuario`='$usuario'";
        echo $result = mysqli_query($conn, $query);
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
            <label for="usuario">Usuario al que quieres saber los datos:</label>
            <input type="text" id="usuario" name="usuario" required>
            <?php echo "<br>"; ?>
            <input type="submit" name="ConsultarDatos" id="consultarDatos" value="Consultar Datos">
        </form>
    </body>
</html>