<?php 
    include('./inc/conexion.php');

    $sentencia = $conectar->prepare("SELECT * FROM productos ");
    // $sentencia->bind_param('dssibis', $precioUnitario, $descripcion, $titulo, $cantidad, $imagen, $cant_ventas, $categoria);
    $resultado = $sentencia->execute();
    $data = $sentencia->get_result();	


    if($resultado === TRUE){
        // header("Location: agregarProducto.php");
        exit;
    }

?>