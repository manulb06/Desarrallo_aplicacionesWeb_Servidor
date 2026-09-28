<?php
if($_SERVER["REQUEST_METHOD"] == "GET")
{
    if(isset($_GET["enviar"])){
        if(isset($_GET["num"]) && !empty($_GET["num"])){
                $sum=0;
                for($i=0;$i<$_GET["num"];$i++){
                    if($i%2==0)$sum=$sum+$i;
                }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    
    <title>Ejercicio_07</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="GET" >
        <label for="num">Número</label>
        <input type="number"id="num" name="num">
        <input type="submit" name="enviar" value="enviar">
    </form>    
    <?php
        if(isset($sum)){
            echo ' <p> La suma de los numero pares que hay hasta '.$_GET["num"].' es '.$sum.'</p>';
        }
    ?>
</body>
</html>