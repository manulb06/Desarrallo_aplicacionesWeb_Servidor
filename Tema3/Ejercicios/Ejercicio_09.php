<?php
/*
Ejercicio 12. Crea una página PHP que permita elegir una serie de artículos de una tienda online mediante checkbox.
    • Cada checkbox permite seleccionar un artículo, en el que se indica su precio .
    • Tras pulsar el botón Enviar del formulario, se nos indicará el detalle de la compra, así como el total de lo que hemos comprado.
*/

if($_SERVER["REQUEST_METHOD"] == "POST")
{
   if(isset($_POST['enviar']))
   {
      if(isset($_POST['articulo']) && !empty($_POST['articulo']) && is_array($_POST['articulo']))
      {
         $arrArticulos=$_POST['articulo'];
         $datosOK = true;        
      } else $datosOK = false;  
      //fi articulo
   }//fi enviar
}//fi request_method      
         
?>
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <title>Ejercicio 12</title>
   </head>
   <body>
      <?php if(isset($datosOK) && $datosOK): ?>
      <ul>
         <?php
         $suma = 0;
         foreach($arrArticulos as $key=>$val){
            echo "<li>$key, precio: $val €</li>";
            $suma+=$val;
         }//foreach 
         ?>
      </ul>
      <h3>Total: <?= $suma; ?> €</h3>
      <?php elseif(isset($datosOK) && !$datosOK): ?>
      <h3>No has seleccionado ningún producto</h3>  
      <?php endif; ?>
      <h1>Seleccione los artículos que desea comprar</h1>
      <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="post">
         <input type="checkbox" name="articulo['Bolígrafo rojo']" value="0.35" id="boliRojo"/>
         <label for="boliRojo"> Bolígrafo Rojo (35 céntimos)</label><br>
         <input type="checkbox" name="articulo['Bolígrafo azul']" value="0.35" id="boliAzul"/>
         <label for="boliAzul"> Bolígrafo Azul (35 céntimos) </label><br>
         <input type="checkbox" name="articulo['Lapicero grueso']" value="0.27" id="lapizGrueso"/>
         <label for="lapizGrueso"> Lapicero grueso (27 céntimos)</label><br>
         <input type="checkbox" name="articulo['Lapicero fino']" value="0.30" id="lapizFino"/> 
         <label for="lapizFino"> Lapicero fino (30 céntimos) </label><br>
         <input type="checkbox" name="articulo['Goma de borrar']" value="0.35" id="goma"/>
         <label for="goma" > Goma de borrar (35 céntimos)</label><br>
         <input type="submit" name="enviar">
   </body>
</html>