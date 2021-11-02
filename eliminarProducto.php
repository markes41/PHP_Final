<?php 
    include('inc/header.php');
    if($rol  == "Usuario"){
        header("location:index.php");
        die();
    }
    $id = $_GET['eliminar'];
    include('productoDatabase/obtenerProductoPorId.php');
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <br>
            <h1>Eliminar Producto</h1>
            <form method="POST" action="productoDatabase/borrarProducto.php?eliminar=<?php echo $id ?>" enctype="multipart/form-data">
                <div class="card" style="width: 18rem;">
                    <img src="img/iphone.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['Titulo'] ?></h5>
                                <p class="card-text"><?php echo $row['Descripcion'] ?></p>
                        </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Categoria : <?php echo $row['Categoria'] ?></li>
                        <li class="list-group-item">Precio Unitario: <?php echo $row['Precio_Unitario'] ?></li>
                        <li class="list-group-item">Stock: <?php echo $row['Cantidad'] ?></li>
                    </ul>
                    <div class="card-body">
                        <a role="button" href="index.php" class="btn btn-primary">Volver</a>
                        <input class="btn btn-danger" type="submit" value="Eliminar">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
    include('inc/footer.php');
?>