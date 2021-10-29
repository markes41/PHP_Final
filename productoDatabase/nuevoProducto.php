
<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["titulo"]) || !isset($_POST["descripcion"]) || !isset($_POST["categoria"]) || !isset($_POST["precioUnitario"]) || !isset($_POST["imagen"]) || !isset($_POST["cantidad"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

// esto despues se importa con un include
$hostname = "localhost";
$db_user = "root";
$db_pass= "";
$db_name = "phpfinal";


$conectar = new mysqli($hostname, $db_user, $db_pass, $db_name);


if($conectar->connect_errno){
    printf("Fallo la conexion:", $conectar->connect_error);
    exit();
}


$titulo = $_POST["titulo"];
$descripcion = $_POST["descripcion"];
$categoria = $_POST["categoria"];
$precioUnitario = $_POST["precioUnitario"];
$imagen = $_POST["imagen"];
$cantidad = $_POST["cantidad"];
$cant_ventas = 0;

$sentencia = $conectar->prepare("INSERT INTO productos(Precio_Unitario, Descripcion, Titulo, Cantidad, Imagen, Cantidad_Ventas, Categoria) VALUES (?, ?, ?, ?, ?, ?, ?);");
$sentencia->bind_param('dssibis', $precioUnitario, $descripcion, $titulo, $cantidad, $imagen, $cant_ventas, $categoria);
$resultado = $sentencia->execute();

if($resultado === TRUE){
	header("Location: ./../index.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>