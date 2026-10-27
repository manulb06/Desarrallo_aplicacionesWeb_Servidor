<?php
session_start();
require_once("BD/UsuariosBD.inc.php");
$acceso = false;

if(isset($_COOKIE["contrasenia"]) && $_COOKIE["contrasenia"] === "si")
{
    header("Location: Contenido.php");
    exit();
}
else if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["enviar"]))
    {
        if(isset($_POST["usuario"]) && !empty($_POST["usuario"]))
        {
            $usuario = $_POST["usuario"];
        }
        if(isset($_POST["contrasenia"]) && !empty($_POST["contrasenia"]))
        {
            $contrasenia = $_POST["contrasenia"];
        }
        
    }// enviar

    global $usuariosBD; // Falsa Base de datos
  
    if(isset($usuariosBD[$usuario]) && password_verify($contrasenia,$usuariosBD[$usuario]["password"]))
    {
        if(isset($_POST["recordar"]) && $_POST["recordar"] == "on")
        {
            setcookie("contrasenia","si",time()+3600);   
        }
        // Creamos la sesión
        $_SESSION["rol"] = $usuariosBD[$usuario]["rol"];
        header("Location: Contenido.php");
        exit();
    }
    else
        $msg =  "Usuario desconocido";
}// request_method
?>
<?php include_once("estructura/header.inc.php"); ?>
<?php include_once("estructura/navbar.inc.php"); ?>
        <!-- Contenido principal -->
        <main>
            <h2>Contenido principal</h2>

            <section>
                <?php if(isset($acceso) && !$acceso && isset($msg)): ?>
                <p style="color: red;"><?= $msg; ?></p>
                <?php endif; ?>        
                <form action="<?=  $_SERVER["PHP_SELF"]; ?>" method="post">
                    <fieldset>
                        <legend>Formulario de login</legend>
                        <label for="usuario">Usuario</label>
                        <input type="text" id="usuario" name="usuario"><br>
                        <label for="contrasenia">Contraseña</label>
                        <input type="password" id="contrasenia" name="contrasenia"><br>
                        <input type="checkbox" id="recordar" name="recordar">
                        <label for="recordar">Recordar contraseña</label><br>
                        <input type="submit" id="enviar" name="enviar" value="Enviar">
                    </fieldset>
                </form>
            </section>
        </main>
<?php include_once("estructura/footer.inc.php"); ?>        