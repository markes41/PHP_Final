<?php
include_once("conexion.php");
$numeroRandom = rand(100000, 999999) ;
if(isset($_POST['enviarMail'])){
   $to      = $_POST['email'];
   $subject = "Correo de Confirmacion";
   $message = "Hola ingresa el codigo. $numeroRandom . para validar su mail";
   $headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
mail($to, $subject, $message, $headers);
}
if(isset($_POST['finalizar'])) {
	$mail = $_POST['email'];
	$sql = "SELECT Email FROM usuarios WHERE Email='$mail'";
	$stmt=$conectar->prepare($sql);
	$stmt->execute();
	$row = $stmt->get_result();	
	$row = $row->num_rows;	
	if($row == 0){	
		$sql = "INSERT INTO usuarios (Email, Password, Nombre, Apellido, Fecha_Nacimiento, Dni ) 
		VALUES (?, ?, ?, ?, ?, ?)";
		$stmt=$conectar->prepare($sql);
		if ($stmt){
			$stmt->bind_param('ssssss', $mail, $contrasenia, $nombre, $apellido, $fechaNacimiento, $Dni);
			$mail = $_POST['email'];
			$contrasenia = $_POST['password'];
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$fechaNacimiento = $_POST['fechaNacimiento'];
			$Dni = $_POST['Dni'];
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

