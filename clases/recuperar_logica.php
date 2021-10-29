<?php
include("./inc/conexion.php");
$numeroSql = '';
$numeroRandomRecuperar = rand(100000, 999999);

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
	echo "";
	if($row == 0){	
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
	if(isset($_POST['validarCodigo_Recuperacion'])){
	$destino = $_POST["email"];
	$numeroSql = "SELECT Codigo_Recuperacion FROM usuarios WHERE Email='$destino'";
	$stmt=$conectar->prepare($numeroSql);
		$stmt->execute();
		$result = $stmt->get_result();
		$row = $result->fetch_assoc();
		$to_return[] = $row;
		$ret_val = json_encode(array("data" => $to_return));
		echo "";
		$stmt->close();
		
	}


?>

