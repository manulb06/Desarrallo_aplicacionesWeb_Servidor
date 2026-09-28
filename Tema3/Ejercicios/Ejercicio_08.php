<?php
$ascii=0;
for($i=0; $i<8;$i++){
    for($f=0; $f<16;$f++){
        echo chr($ascii);
        $ascii++;
    }
    echo "<br>";    
}
?>