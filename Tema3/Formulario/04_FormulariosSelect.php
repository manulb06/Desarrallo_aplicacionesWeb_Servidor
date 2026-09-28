<?php
var_dump($_GET);
$arrCF = ["smr", "asir", "dam", "daw", "tseas", "tseas2", "tseas3"];
?>
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <title>Ejercicio 4</title>
   </head>
   <body>
      <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="get">
         <select name="cf" id="cf">
            <?php
            foreach($arrCF as $datos)
            {
               echo "<option value='$datos'>$datos</option>";
            }
            ?>
         </select>
         <input type="submit" id="enviar" name="enviar" value="Enviar">
      </form>
   </body>
</html>