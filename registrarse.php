<?php
include_once("conexion.php");
if(isset($_POST['finalizar'])) {
	$mail = $_POST['email'];
	$sql = "SELECT Email FROM usuarios WHERE Email='$mail'";
	$stmt=$conectar->prepare($sql);
	$stmt->execute();
	$row = $stmt->get_result();	
	$row = $row->num_rows;	
	if($row == 0){	
		$sql = "INSERT INTO usuarios (Email, Password) 
		VALUES (?, ?)";
		$stmt=$conectar->prepare($sql);
		if ($stmt){
			$stmt->bind_param('ss', $mail, $contrasenia);
			$mail = $_POST['email'];
			$contrasenia = $_POST['password'];
			$crearUsuario=$stmt->execute();
			if($crearUsuario){
				echo 'creado';
			}
			$stmt->close();
			} else {				
				echo "1";	 
			}
			
		}
}
?>