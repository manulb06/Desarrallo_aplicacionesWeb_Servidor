<?php

/*
 * Inclusión de ficheros
 * include() y require() son funciones que permiten incluir el contenido de un archivo PHP en otro archivo PHP.
 * La diferencia entre ellas es que include() genera una advertencia (warning) si el archivo no se encuentra, mientras que require() genera un error fatal (fatal error) y detiene la ejecución del script.
 * include_once() y require_once() son variantes de include() y require() que aseguran que el archivo solo se incluya una vez, evitando problemas de redefinición de funciones o variables.
 */ 

include("09-Formularios.php");
require("09-Formularios.php");

include_once("09-Formularios.php");
require_once("09-Formularios.php");

?>