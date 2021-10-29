<?php 
    
// esto despues se importa con un include
    $hostname = "localhost";
    $db_user = "root";
    $db_pass= "";
    $db_name = "phpfinal";


    $conectar = new mysqli($hostname, $db_user, $db_pass, $db_name);


    if($conectar->connect_errno){
        printf("Fallo la conexion:", $conectar->connect_error);
        exit();
    }

    $sentencia = $conectar->prepare("SELECT * FROM productos ");
    // $sentencia->bind_param('dssibis', $precioUnitario, $descripcion, $titulo, $cantidad, $imagen, $cant_ventas, $categoria);
    $resultado = $sentencia->execute();
    $data = $sentencia->get_result();	


    if($resultado === TRUE){
        // header("Location: agregarProducto.php");
        exit;
    }

?>