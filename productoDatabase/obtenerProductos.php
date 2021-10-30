<?php 
    include('./inc/conexion.php');

    $sentencia = $conectar->prepare("SELECT * FROM productos ");
    $resultado = $sentencia->execute();
    $data = $sentencia->get_result();	
    // $row = $data->fetch_assoc();
    // $to_return[] = $row;
    $sentencia->close();

    $results = array();
    while($row = $data->fetch_assoc()) {
        $results[] = $row;
    }

    if($resultado === TRUE){
        // header("Location: agregarProducto.php");
    }

?>