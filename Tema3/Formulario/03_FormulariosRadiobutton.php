<?php
var_dump($_GET);
?>
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <title>Ejercicio 4</title>
   </head>
   <body>
      <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="get">
         <label for="opc" id="lblopc">Opción 1:</label>
         <input type="radio" id="opc" name="opc" value="opcion1" >
         <label for="opc" id="lblopc">Opción 2:</label>
         <input type="radio" id="opc" name="opc" value="opcion2" checked>
         <label for="opc" id="lblopc">Opción 3:</label>
         <input type="radio" id="opc" name="opc" value="opcion3">
         <input type="submit" id="enviar" name="enviar" value="Enviar">
      </form>
   </body>
</html>