<?php


require_once("BibliotecaBD.inc.php");

$errorUsuario=false;
$errorContrasenia=false;
$errorRol=false;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["InsertarDatos"]))
    {
        if(isset($_POST["usuario"]) && !empty($_POST["usuario"]))
        {
            $usuario = $_POST["usuario"];
        }else{
            $errorUsuario=true;
        }
        if(isset($_POST["contrasenia"]) && !empty($_POST["contrasenia"]))
        {
            $contrasenia = $_POST["contrasenia"];
        }else{
            $errorContrasenia=true;
        }
        if(isset($_POST["rol"]) && !empty($_POST["rol"]))
        {
            $rol = $_POST["rol"];
        }else{
            $errorRol=true;
        }
        if( !isset($errorContrasenia) && !isset($errorRol) && !isset($errorUsuario)){
        insertarUsuario($usuario,$contrasenia,$rol);
        }
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
            <?php
            if(isset($errorUsuario) && $errorUsuario):
            ?>
                <p style="color:red;">El campo usuario está vacío o no es válido</p>
            <?php
            endif;
            ?>
            <label for="usuario">Usuario: </label>
            <input type="text" id="usuario" name="usuario" value="<?php if(isset($usuario)) echo $usuario; else echo ""; ?>"><br>
            <?php
            if(isset($errorContrasenia) && $errorContrasenia):
            ?>
                <p style="color:red;">El campo contraseña está vacío o no es válido</p>
            <?php
            endif;
            ?>
            <label for="contrasenia">Contraseña: </label>
            <input type="text" id="contrasenia" name="contrasenia"><br>
            <?php
            if(isset($errorRol) && $errorRol):
            ?>
                <p style="color:red;">El campo rol está vacío o no es válido</p>
            <?php
            endif;
            ?>
            <label for="rol">Rol: </label>
            <input type="text" id="rol" name="rol"><br>
            <input type="submit" name="formInsertarUsuario" value="Insertar usuario">
        </form>
    </body>
</html>

