<?php
include("./inc/conexion.php");
session_start();
$credencialesLogin = "";
if(isset($_POST['IniciarSesion'])) {
	$mail = $_POST['email'];
    $pass = md5($_POST['passwordLogin']);
	$sql = "SELECT Id FROM usuarios WHERE Email='$mail' and Password = '$pass' and Activo = true";
	$stmt=$conectar->prepare($sql);
	$stmt->execute();
	$row = $stmt->get_result();	
	$row = $row->num_rows;	
	if($row == 1){	
        $_SESSION['login_user'] = $mail;
        header("location: index.php");
	} else {				
            $credencialesLogin = "Las credenciales son invalidas";	 
			}
			
	}
?>

