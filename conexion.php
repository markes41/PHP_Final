<?php

$hostname = "localhost";
$db_user = "root";
$db_pass= "";
$db_name = "phpfinal";


$conectar = new mysqli($hostname, $db_user, $db_pass, $db_name);


if($conectar->connect_errno){
    printf("Fallo la coneccion:", $conectar->connect_error);
    exit();
}

?>