<?php
    include_once('inc/header.php');
    include_once('productoDatabase/obtenerProductos.php');
?>

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
                        <input type="button" value="Editar" class="btn btn-success" />
                        <input type="button" value="Eliminar" class="btn btn-danger" />
                    </div>
                </div>
            </div>

        <?php } ?>
        
        
            
    </div>
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

    <!---------------------------TECNOLOGÍA---------------------------------->
    <div class="container">
        <h3 style="margin-top: 3rem;">Tecnolog&iacute;a <a href="#" class="ver-mas">Ver m&aacute;s</a></h3>

        <div class="row">
            <div class="card-productos col-md-4">
                <div class="producto-img-container d-flex align-items-center">
                    <img src="img/iphone.jpg" />
                </div>
                <hr class="" />
                <div class="card-body">
                    <p class="titulo-producto m-1" title="iPhone 12 Pro Max 256gb Vs. Colores Caja Sellada Gtía Apple">iPhone 12 Pro Max 256gb Vs. Colores Caja Sellada Gtía Apple</p>
                    <div class="d-flex align-items-center">
                        <p class="precio m-1">$85.000</p>
                        <p class="envio m-1">Env&iacute;o gratis</p>
                    </div>
                </div>
            </div>

            <div class="card-productos col-md-4">
                <div class="producto-img-container d-flex align-items-center">
                    <img src="img/webcam.jpg" />
                </div>
                <hr class="" />
                <div class="card-body">
                    <p class="titulo-producto m-1">Camara Web Webcam Logitech C920 Pro Full Hd Streaming 1080p</p>
                    <div class="d-flex align-items-center">
                        <p class="precio m-1">$10.500</p>
                        <p class="envio m-1">Env&iacute;o gratis</p>
                    </div>
                </div>
            </div>

            <div class="card-productos col-md-4">
                <div class="producto-img-container d-flex align-items-center">
                    <img src="img/tv.jpg" />
                </div>
                <hr class="" />
                <div class="card-body">
                    <p class="titulo-producto m-1">Smart TV BGH B5021UH6A LED 4K 50" 220V</p>
                    <div class="d-flex align-items-center">
                        <p class="precio m-1">$59.999</p>
                        <p class="envio m-1">Env&iacute;o gratis</p>
                    </div>
                </div>
            </div>

            <div class="card-productos col-md-4">
                <div class="producto-img-container d-flex align-items-center">
                    <img src="img/parlantes.jpg" />
                </div>
                <hr class="" />
                <div class="card-body">
                    <p class="titulo-producto m-1">Parlante Thonet & Vander Vertrag BT con bluetooth white 100V/220V</p>
                    <div class="d-flex align-items-center">
                        <p class="precio m-1">$39.198</p>
                        <p class="envio m-1">Env&iacute;o gratis</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------------------------FIN TECNOLOGÍA---------------------------------->
    <!---------------------------HERRAMIENTAS---------------------------------->
    <div class="container">
        <h3 style="margin-top: 3rem;">Herramientas <a href="#" class="ver-mas">Ver m&aacute;s</a></h3>

        <div class="row">
            <div class="card-productos col-md-4">
                <div class="producto-img-container d-flex align-items-center">
                    <img src="img/herramienta1.webp" />
                </div>
                <hr class="" />
                <div class="card-body">
                    <p class="titulo-producto m-1">Set De Herramientas Manuales 189 Piezas</p>
                    <div class="d-flex align-items-center">
                        <p class="precio m-1">$4.499</p>
                        <p class="envio m-1">Env&iacute;o gratis</p>
                    </div>
                </div>
            </div>

            <div class="card-productos col-md-4">
                <div class="producto-img-container d-flex align-items-center">
                    <img src="img/herramienta2.webp" />
                </div>
                <hr class="" />
                <div class="card-body">
                    <p class="titulo-producto m-1">Juego De Bocallaves Hamilton 26 Piezas Garantía De Por Vida</p>
                    <div class="d-flex align-items-center">
                        <p class="precio m-1">$2.890</p>
                        <p class="envio m-1">Env&iacute;o gratis</p>
                    </div>
                </div>
            </div>

            <div class="card-productos col-md-4">
                <div class="producto-img-container d-flex align-items-center">
                    <img src="img/herramienta3.webp" />
                </div>
                <hr class="" />
                <div class="card-body">
                    <p class="titulo-producto m-1">Taladro Percutor 600w La-ser 13 Mm Vel Variable Oferta</p>
                    <div class="d-flex align-items-center">
                        <p class="precio m-1">$3.799</p>
                        <p class="envio m-1">Env&iacute;o gratis</p>
                    </div>
                </div>
            </div>

            <div class="card-productos col-md-4">
                <div class="producto-img-container d-flex align-items-center">
                    <img src="img/herramienta4.webp" />
                </div>
                <hr class="" />
                <div class="card-body">
                    <p class="titulo-producto m-1">Caja Set Juego De Tubos Bocallaves 108 Piezas 1/2-1/4 Boedo.</p>
                    <div class="d-flex align-items-center">
                        <p class="precio m-1">$9.999</p>
                        <p class="envio m-1">Env&iacute;o gratis</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------------------------FIN HERRAMIENTAS---------------------------------->
    <!---------------------------ELECTRODOMESTICOS---------------------------------->
    <div class="container">
        <h3 style="margin-top: 3rem;">Electrodom&eacute;sticos <a href="#" class="ver-mas">Ver m&aacute;s</a></h3>

        <div class="row">
            <div class="card-productos col-md-4">
                <div class="producto-img-container d-flex align-items-center">
                    <img src="img/lavarropas.webp" />
                </div>
                <hr class="" />
                <div class="card-body">
                    <p class="titulo-producto m-1" title="Lavarropas automático Samsung WW65M0NH plata 6.5kg 220 V">Lavarropas automático Samsung WW65M0NH plata 6.5kg 220 V</p>
                    <div class="d-flex align-items-center">
                        <p class="precio m-1">$59.893</p>
                        <p class="envio m-1">Env&iacute;o gratis</p>
                    </div>
                </div>
            </div>

            <div class="card-productos col-md-4">
                <div class="producto-img-container d-flex align-items-center">
                    <img src="img/aire.webp" />
                </div>
                <hr class="" />
                <div class="card-body">
                    <p class="titulo-producto m-1">Aire acondicionado BGH split frío/calor 3000 frigorías blanco 220V BS35WCCR</p>
                    <div class="d-flex align-items-center">
                        <p class="precio m-1">$60.283</p>
                        <p class="envio m-1">Env&iacute;o gratis</p>
                    </div>
                </div>
            </div>

            <div class="card-productos col-md-4">
                <div class="producto-img-container d-flex align-items-center">
                    <img src="img/heladera.webp" />
                </div>
                <hr class="" />
                <div class="card-body">
                    <p class="titulo-producto m-1">Heladera Bambi 2F1200 plata con freezer 239L 220V</p>
                    <div class="d-flex align-items-center">
                        <p class="precio m-1">$48.899</p>
                        <p class="envio m-1">Env&iacute;o gratis</p>
                    </div>
                </div>
            </div>

            <div class="card-productos col-md-4">
                <div class="producto-img-container d-flex align-items-center">
                    <img src="img/pava.webp" />
                </div>
                <hr class="" />
                <div class="card-body">
                    <p class="titulo-producto m-1">Pava Electrica Jarra Acero Inoxidable Mate Cafe 2 Litros</p>
                    <div class="d-flex align-items-center">
                        <p class="precio m-1">$1.715</p>
                        <p class="envio m-1">Env&iacute;o gratis</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------------------------FIN ELECTRODOMESTICOS---------------------------------->

<?php  
    include('inc/footer.php');
?>
<script>
    AOS.init();
</script>