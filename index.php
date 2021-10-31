<?php
    include_once('inc/header.php');
    include_once('productoDatabase/obtenerProductos.php');
?>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/promo1.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/promo2.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/promo4.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/promo5.webp" class="d-block w-100" alt="...">
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    
    <!---------------------------PRODUCTOS ---------------------------------->

    <div class="row">
        <?php 
            foreach ($results as $prod){
        ?>
            <div class="card-productos col-md-4">
                <div class="producto-img-container d-flex align-items-center">
                    <img src="img/iphone.jpg" />
                </div>
                <hr class="" />
                <div class="card-body">
                    <p class="titulo-producto m-1" title="iPhone 12 Pro Max 256gb Vs. Colores Caja Sellada Gtía Apple"><?php echo $prod["Titulo"] ?></p>
                    <div class="d-flex align-items-center ">
                        <p class="precio m-1">$<?php echo $prod["Precio_Unitario"] ?></p>
                        <a role="button" href="editarProducto.php?edit=<?php echo $prod['Id']; ?>" class="btn btn-warning">Editar</a>
                        <a role="button" href="eliminarProducto.php?eliminar=<?php echo $prod['Id']; ?>" class="btn btn-danger">Eliminar</a>
                    </div>
                </div>
            </div>

        <?php } ?>
        
    </div>

<?php  
    include('inc/footer.php');
?>
<script>
    AOS.init();
</script>