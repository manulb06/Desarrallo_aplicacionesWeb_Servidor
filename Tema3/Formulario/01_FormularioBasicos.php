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
         <label for="dato" id="lblDato">Escribe un dato</label>
         <input type="text" id="dato" name="dato">
         <input type="submit" id="enviar" name="enviar" value="Enviar">
      </form>
   </body>
</html>