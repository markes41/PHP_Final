<?php 
    $id = $_POST['id'];
    $jsondata = array();
    #Salir si alguno de los datos no está presente
    if(!isset($_POST["nombre"]) || !isset($_POST["apellido"]) || !isset($_POST["mail"]) || !isset($_POST["dni"]) || !isset($_POST["rol"])) exit();

    #Si todo va bien, se ejecuta esta parte del código...
    require_once(__DIR__.'./../inc/conexion.php');

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $mail = $_POST["mail"];
    $dni = $_POST["dni"];
    $rol = $_POST["rol"];

    $sentencia = $conectar->prepare("UPDATE usuarios SET Nombre = ?, Apellido = ?, Email = ?, Dni = ?, Rol = ? WHERE Id = ?");
    $sentencia->bind_param('sssisi', $nombre, $apellido, $mail, $dni, $rol, $id);
    $resultado = $sentencia->execute();

    if($resultado === TRUE){
	    $jsondata['success'] = true;
    }else{
        $jsondata['success'] = false;
    }
    header('Content-type: application/json; charset=utf-8');
    echo json_encode($jsondata);   
?>