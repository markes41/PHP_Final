<?php 
    $id = $_POST['Id'];
    $jsondata = array();
    include('./../inc/conexion.php');

    $sentencia = $conectar->prepare("DELETE FROM usuarios WHERE Id = ?");
    $sentencia->bind_param('i', $id);
    $resultado = $sentencia->execute();

    if($resultado === TRUE){
	    $jsondata['success'] = true;
    }
    else $jsondata['success'] = false;{
    }
        
        header('Content-type: application/json; charset=utf-8');
        echo json_encode($jsondata);    
?>