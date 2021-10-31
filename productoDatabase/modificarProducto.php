<?php 
    $id = $_GET['edit'];

    #Salir si alguno de los datos no está presente
    if(!isset($_POST["titulo"]) || !isset($_POST["descripcion"]) || !isset($_POST["categoria"]) || !isset($_POST["precioUnitario"]) || !isset($_FILES["imagen"]) || !isset($_POST["cantidad"])) exit();

    #Si todo va bien, se ejecuta esta parte del código...
    include('./../inc/conexion.php');

    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    $categoria = $_POST["categoria"];
    $precioUnitario = $_POST["precioUnitario"];

    $imagen = $_FILES["imagen"];

    $type = $imagen["type"];

    $foto_name= $_FILES["imagen"]["name"];
        $foto_size= $_FILES["imagen"]["size"];
        $foto_temporal= $_FILES["imagen"]["tmp_name"];

    /*Reconversion de la imagen para meter en la tabla abrimos el fichero temporal en modo lectura "r" y binaria "b"*/
        $f1= fopen($foto_temporal,"rb");
 
    # Leemos el fichero completo limitando la lectura al tamaño del fichero
        $foto_reconvertida = fread($f1, $foto_size);
 
    /* Anteponemos "\" a las comillas que pudiera contener el fichero para evitar que sean interpretadas como final de cadena.*/
    $foto_reconvertida = base64_encode($foto_reconvertida);
 
    //cerrar el fichero temporal
    fclose($f1);

    // // Cargando la imagen
    $data = file_get_contents($_FILES["imagen"]["tmp_name"]);

    // Extensión de la imagen
    // $type = pathinfo($_FILES["imagen"] , PATHINFO_EXTENSION);
 
    // Decodificando la imagen en base64
    // $base64 = 'data:' . $type . ';base64,' . base64_encode($data);
    $base64 = 'data:' . $type . ';base64' . base64_encode($data);

    $cantidad = $_POST["cantidad"];
    $cant_ventas = 0;

    $sentencia = $conectar->prepare("UPDATE productos SET Precio_Unitario = ?, Descripcion = ?, Titulo = ?, Cantidad = ?, Imagen = ?, Cantidad_Ventas = ?, Categoria = ? WHERE Id = ?");
    $sentencia->bind_param('dssibisi', $precioUnitario, $descripcion, $titulo, $cantidad, $foto_reconvertida, $cant_ventas, $categoria, $id);
    $resultado = $sentencia->execute();

    if($resultado === TRUE){
	    header("Location: ./../index.php");
	    exit;
    }
    else echo "Algo salió mal. Por favor verifica que la tabla exista";
?>