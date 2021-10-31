<?php 
    $id = $_GET['eliminar'];

    include('./../inc/conexion.php');

    $sentencia = $conectar->prepare("DELETE FROM productos WHERE Id = ?");
    $sentencia->bind_param('i', $id);
    $resultado = $sentencia->execute();

    if($resultado === TRUE){
	    header("Location: ./../index.php");
	    exit;
    }
        else echo "Algo salió mal. Por favor verifica que la tabla exista";
?>