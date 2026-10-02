<?php 
echo "<table border='1'>";
$cont=1;
for($i=1;$i<200;$i++){
    echo "<tr>";
    for($f=0;$f<5;$f++){
        echo"<td>". $cont." </td>";
        $cont++;
    }
    echo"<tr>";
}



echo "</table>";
?>