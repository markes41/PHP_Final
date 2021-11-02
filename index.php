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
    <div class="container mt-5">
        <h3 style="margin-top: 3rem;">Todos los productos</h3>
        <div class="row">
            <?php 
            foreach ($results as $prod){
                $_SESSION['img_convertida'] = $prod['Imagen'];
                ?>
            <div class="card-productos col-md-4">
                <div class="producto-img-container d-flex align-items-center">
                    <img id="productos_imagenes" src="<?php echo $prod["Imagen"]?>"  />
                </div>
                <hr class="" />
                <div class="card-body">
                    <p class="titulo-producto m-1" title="iPhone 12 Pro Max 256gb Vs. Colores Caja Sellada Gtía Apple"><?php echo $prod["Titulo"] ?></p>
                    <div class="d-flex align-items-center ">
                        <p class="precio m-1">$<?php echo $prod["Precio_Unitario"] ?></p>
                        <a role="button" style="margin: 0 10px;color: #ffae19;" href="editarProducto.php?edit=<?php echo $prod['Id']; ?>" class="text-decoration-none btn_roles"> <i class="far fa-edit" style="margin-right: 5px;"></i>Editar</a>
                        <a role="button" style="color: #ff1d1d;" href="eliminarProducto.php?eliminar=<?php echo $prod['Id']; ?>" class="text-decoration-none btn_roles"> <i class="far fa-trash-alt" style="margin-right: 5px;"></i>Eliminar</a>
                    </div>
                </div>
            </div>
            
            <?php } ?>
            
        </div>
    </div>

<?php  
    include('inc/footer.php');
?>
<script>
    AOS.init();
    debugger
    var tipo_rol = "<?php echo $rol?>";

    if(tipo_rol != "Admin"){
        $(".btn_roles").attr("hidden",true);
        
    }
    
</script>