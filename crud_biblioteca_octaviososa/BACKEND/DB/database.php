<?php

header("Access-Control-Allow-Origin:*");      // BORRAR POLITICAS CORS DESPUES DE PROGRAMAR //

class conn{

    function connection(){

    $host = "localhost";
    $usuario = "root";
    $password = "";  
    $bd = "biblioteca";    
    $puerto = 3306;  
    $conn = new mysqli($host, $usuario, $password, $bd, $puerto);   

    return $conn;
    
}


}

?>