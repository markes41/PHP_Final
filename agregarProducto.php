<?php 
    include('inc/header.php');
	if($rol  == "Usuario"){
		header("location:index.php");
		die();
	}
?>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-4">
			<br>
			<h1>Nuevo producto</h1>
			<form method="POST" action="productoDatabase/nuevoProducto.php" enctype="multipart/form-data">
				<label for="titulo">Titulo:</label>
				<input class="form-control" name="titulo" required type="text" id="titulo" placeholder="Escribe el titulo">
		
				<label for="descripcion">Descripción:</label>
				<textarea required id="descripcion" name="descripcion" cols="30" rows="5" class="form-control"></textarea>
		
				<label for="categoria">Categoria:</label>
				<input class="form-control" name="categoria" required type="text" id="categoria" placeholder="Seleccione la categoria">
		
				<label for="precioUnitario">Precio de venta:</label>
				<input class="form-control" name="precioUnitario" required type="number" id="precioUnitario" placeholder="Precio de venta">
		
				<label for="imagen">Imagen:</label>
				<input class="form-control" name="imagen" required type="file" id="imagen" accept="image/*">
		
				<label for="cantidad">Cantidad:</label>
				<input class="form-control" name="cantidad" min=0 required type="number" id="cantidad" placeholder="Cantidad o existencia">
				
				<br>
				<a role="button" href="index.php" class="btn btn-primary">Volver</a>
				<input class="btn btn-success" type="submit" value="Guardar">
			</form>
		</div>
	</div>
</div>

<?php 
    include('inc/footer.php');
?>