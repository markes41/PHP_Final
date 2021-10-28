<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/46e18bb4ff.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
        <div class="container-fluid col-md-4">
            <a class="navbar-brand" href="#"><img src="imagenes/logo.png" style="width: 150px" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php if($_SESSION['login_user'] == null): ?>
                 
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Productos</a>
                    </li>
                           
                    <?php endif; ?>

                   
                </ul>
            </div>
        </div>

        <div class="col-md-4">
            <form class="d-flex col-md-12">
                <input class="form-control me-2 col-md-10 w-100" type="search" placeholder="Buscar productos, marcas y m&aacute;s..." aria-label="Search">
                <button class="btn btnBuscar col-md-2" style="width: 50px" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>

        <div class="col-md-4 ">
            <div class="d-flex">
                <div class="" style="margin-left: auto; margin-right: 0;">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php if($_SESSION['login_user'] == null): ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="registrar.php">Registrarse</a>
                        </li>
                        <?php endif; ?>
                        <?php if($_SESSION['login_user'] == "marcioabriola@gmail.com"): ?>
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="registrar.php">Cerrar Sesion</a>
                        </li>
                     <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imagenes/promo1.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="imagenes/promo2.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="imagenes/promo4.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="imagenes/promo5.webp" class="d-block w-100" alt="...">
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
                    <img src="imagenes/iphone.jpg" />
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
                    <img src="imagenes/webcam.jpg" />
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
                    <img src="imagenes/tv.jpg" />
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
                    <img src="imagenes/parlantes.jpg" />
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
                    <img src="imagenes/herramienta1.webp" />
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
                    <img src="imagenes/herramienta2.webp" />
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
                    <img src="imagenes/herramienta3.webp" />
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
                    <img src="imagenes/herramienta4.webp" />
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
                    <img src="imagenes/lavarropas.webp" />
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
                    <img src="imagenes/aire.webp" />
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
                    <img src="imagenes/heladera.webp" />
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
                    <img src="imagenes/pava.webp" />
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

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="js/main.js"></script>

</body>
</html>