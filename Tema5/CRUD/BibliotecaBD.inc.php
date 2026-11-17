<?php
//Funciones crud con bases de datos 
require_once("DatosConexionBD.inc.php");

function conectarBD(){
    global $host, $username, $password, $dbname;
    $mysqli = new mysqli($host, $username, $password, $dbname);

    // 2. Check connection
    if ($mysqli == null) {
        die("Connection failed ");
    }

    return $mysqli;
}

function cerrarConexionBD(){
    $stmt->close();
    $mysqli->close();
}
function insertarUsuario($p_usuario, $p_contrasenia, $p_rol){
    $mysqli=conectarBD();
    
    $stmt = $mysqli->prepare("INSERT INTO `usuario`(`usuario`, `contrasenia`, `rol`) VALUES (?, ?, ?)");
    $usuario = $p_usuario;
    $contrasenia = $p_contrasenia;
    $rol = $p_rol;

    $stmt->bind_param("sss", $usuario, $contrasenia, $rol);
    $stmt->execute();
    
    cerrarConexionBD($stmt,$mysqli);
}

?>