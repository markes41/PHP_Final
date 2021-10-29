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
                            <a class="nav-link active" aria-current="page" href="agregarProducto.php">Agregar Producto</a>
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