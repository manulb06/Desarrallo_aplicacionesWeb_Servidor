<?php

$usuariosBD = array("user" => array("password" => password_hash("1234",PASSWORD_BCRYPT),"rol" => "registrado"),
                    "admin" => array("password" => password_hash("1234",PASSWORD_BCRYPT),"rol" => "admin")
);

?>