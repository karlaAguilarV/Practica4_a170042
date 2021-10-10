<?php
    require_once "lib/nusoap.php";
    function getfrutas($frutas){
        if ($frutas == "frutas"){
            return join(",",array(
                        "Mango",
                        "Mandarina",
                        "Rambutan",
                        "Papaya",
                        "Naranja",
                        "Guineo"));
        }
        else{
               return "No hay frutas";
        }
    }
    $server = new soap_server();
    $server->register("getfrutas");
    if( !isset( $HTTP_RAW_POST_DATA ) ) $HTTP_RAW_POST_DATA =file_get_contents( 'php://input' );
        $server->service($HTTP_RAW_POST_DATA);
?>