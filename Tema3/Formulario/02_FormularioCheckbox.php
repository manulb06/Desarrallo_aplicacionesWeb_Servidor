<?php
if(isset($_GET["enviar"]))
{
   echo "Los CF seleccionados son: <br>";
   foreach($_GET["cf"] as $valores)
   {
      echo $valores . "<br>";
   }
}
?>
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <title>Ejercicio 4</title>
   </head>
   <body>
      <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="get">
         <label for="CF" id="lblCF">SMR:</label>
         <input type="checkbox" id="cf" name="cf[]" value="smr">
         <label for="CF" id="lblCF">ASIR:</label>
         <input type="checkbox" id="cf" name="cf[]" value="asir">
         <label for="CF" id="lblCF">DAM:</label>
         <input type="checkbox" id="cf" name="cf[]" value="dam">
         <label for="CF" id="lblCF">DAW:</label>
         <input type="checkbox" id="cf" name="cf[]" value="daw" checked>
         <input type="submit" id="enviar" name="enviar" value="Enviar">
      </form>
   </body>
</html>