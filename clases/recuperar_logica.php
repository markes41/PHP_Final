<?php
require_once(__DIR__.'./../inc/conexion.php');
$numeroSql = '';
$numeroRandomRecuperar = rand(100000, 999999);
$jsondata = array();

if(isset($_POST['enviarMail_recuperar'])){
$destino = $_POST["email"];
$nombre = $_POST["usuario"];
$contenido = "Tu codigo de confirmacion es: " .$numeroRandomRecuperar;
$sql = "SELECT Email FROM usuarios WHERE Email='$destino' and UserName='$nombre'";
	$stmt=$conectar->prepare($sql);
	$stmt->execute();
	$row = $stmt->get_result();	
	$row = $row->num_rows;	
	$stmt->close();
	if($row == 0){	
		$jsondata['error'] = "El usuario o el mail ingresado no existen.";
		$jsondata['cuenta'] = $row;
		header('Content-type: application/json; charset=utf-8');
  		echo json_encode($jsondata);
		return;
	} else {
		$sSQL="UPDATE usuarios SET Codigo_Recuperacion = ? Where Email= ?";
		$stmt=$conectar->prepare($sSQL);
		$stmt->bind_param('is', $numeroRandomRecuperar, $destino);
		$ejecuto = $stmt->execute();
		$stmt->close();
			$envio_mail = mail($destino, "Central Lomas", $contenido);
		}

	}
	if(isset($_POST['validarCodigoRecuperacion'])){
	$destino = $_POST["email"];
	$numeroSql = "SELECT Codigo_Recuperacion FROM usuarios WHERE Email='$destino'";
	$stmt=$conectar->prepare($numeroSql);
		$stmt->execute();
		$result = $stmt->get_result();
		$row = $result->fetch_assoc();
		$stmt->close();
		$jsondata['numero'] = $row;
		header('Content-type: application/json; charset=utf-8');
  		echo json_encode($jsondata);
	
		
	}

	if(isset($_POST['cambiar_contra'])){
		$pass_nueva = md5($_POST["password"]);
		$user = $_POST["usuario"];

		$sSQL="UPDATE usuarios SET Password = ? Where UserName= ?";
		$stmt=$conectar->prepare($sSQL);
		$stmt->bind_param('ss', $pass_nueva, $user);
		$ejecuto = $stmt->execute();
		$stmt->close();
		if($ejecuto){
		$jsondata['cambio'] = "La contraseña ha sido cambiada con exito.";
		$jsondata['retorno'] = true;
		} else {
		$jsondata['cambio'] = "Ha ocurrido un error al cambiar la contraseña, avisar a sistemas.";
		$jsondata['retorno'] = false;
		}
		echo json_encode($jsondata);
	}

?>

