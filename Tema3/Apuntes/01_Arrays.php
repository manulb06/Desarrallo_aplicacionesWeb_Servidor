<?php 

//Declaracion
//primera:
$frutas = array("Manzana", "Peras", "Cereza");
//segunda:
$frutas2 = ["Naranja" , "Uva"];
//tercera:
$frutas3[]="Piña";
$frutas3[]="Mango";
//cuarta:
$frutas4=array();
$frutas4="Fresa";
$frutas4="Kiwi"; 


//modificar en arrays
$frutas[1]="Melón";
$frutas2[8]="Sandia";//Funciona y se colocaria en el hueco 9



//recorrer array
for($i=0;$i<count($frutas);$i++){
    echo $frutas[$i]."<br>";
}
echo "<br>";

foreach($frutas2 as $fruta2){
    echo $fruta2."<br>";
}




?>