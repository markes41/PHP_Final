<?php

$hostname = "localhost";
$db_user = "root";
$db_pass= "";
$db_name = "phpfinal";


$conectar = mysqli_connect($hostname, $db_user, $db_pass, $db_name) or die ("Fallo la coneccion: " . mysqli_connect_error());

mysqli_set_charset($conectar, "utf8");

if(mysqli_connect_errno()){
    printf("Fallo la coneccion:", mysqli_connect_error());
    exit();
}

?>