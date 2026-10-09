<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST['enviar']))
    {
        if (isset($_POST['Usuario']) && !empty($_POST['Usuario']) && isset($_POST['Contraseña']) && !empty($_POST['Contraseña']))
        {
            $val=false;
            $user=$_POST['Usuario'];
            $cont = hash('sha512', $_POST['Contraseña']);
            $auten=[
                ["Usuario"=>"Manuel", "Contraseña"=>"1234"],
                ["Usuario"=>"Luis", "Contraseña"=>"abcd"],
                ["Usuario"=>"Antonio", "Contraseña"=>"1a2b"]
            ];
            foreach($auten as $fila){
                if ($user == $fila["Usuario"] && $cont == hash('sha512', $fila["Contraseña"])) {
                    $val = true;
                    break;            
                }
            }    
            if($val){
                
            }else{
                echo "Usuario no encontrado";
            }    
                
        } 
    }

}
?>