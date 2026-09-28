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
         <label for="texto" id="lblTexto">Escribe un comentario:</label>
         <textarea id="texto" name="texto"></textarea>
         <input type="submit" id="enviar" name="enviar" value="Enviar">
      </form>
   </body>
</html>