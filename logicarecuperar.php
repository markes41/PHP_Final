<?php
$numeroSql = '';
$destino = "";
include_once("conexion.php");
$numeroRandomRecuperar = rand(100000, 999999);

//$numeroSql= "SELECT Codigo_Recuperacion FROM usuarios WHERE Codigo_Recuperacion='$numeroRandomRecuperar'";

if(isset($_POST['enviarMail_recuperar'])){

$destino = $_POST["email"];
$nombre = $_POST["usuario"];
$contenido = "Tu codigo de confirmacion es: " .$numeroRandomRecuperar;

	$sql = "SELECT Email FROM usuarios WHERE Email='$destino'";
	$stmt=$conectar->prepare($sql);
	$stmt->execute();
	$row = $stmt->get_result();	
	$row = $row->num_rows;	
	$stmt->close();
	if($row == 0){	

		return;
	} else {

		//Prueba 1
		$sSQL="UPDATE usuarios SET Codigo_Recuperacion = ? Where Email= ?";

		//Prueba 
		$stmt=$conectar->prepare($sSQL);
		$stmt->bind_param('is', $numeroRandomRecuperar, $destino);
		$ejecuto = $stmt->execute();
		$stmt->close();
			$envio_mail = mail($destino, "Central Lomas", $contenido);
		}

	}
	if(isset($_POST['CodigoRecuperacion'])){
	$numeroSql = "SELECT Codigo_Recuperacion FROM usuarios WHERE Email='$destino'";
	$stmt=$conectar->prepare($numeroSql);
		$stmt->execute();
		$result = $stmt->get_result();
		$row = $result->fetch_assoc();
        echo $row['Codigo_Recuperacion'];
		
		$stmt->close();

	}


?>

