<?php 
    require_once(__DIR__.'./../inc/conexion.php');
    $id = $_POST['Id'];
    $jsondata = array();
    $sentencia = $conectar->prepare("SELECT * FROM usuarios WHERE Id = ? ");
    $sentencia->bind_param('i', $id);
    $resultado = $sentencia->execute();
    $data = $sentencia->get_result();	
    // $row = $data->fetch_assoc();
    // $to_return[] = $row;
    $sentencia->close();

    while($row = $data->fetch_assoc()) {
        $jsondata[] = $row;
    }

    if($resultado === TRUE){
        $jsondata['success'] = true;
    }else{
        $jsondata['success'] = false;
    }
        header('Content-type: application/json; charset=utf-8');
        echo json_encode($jsondata);    
?>