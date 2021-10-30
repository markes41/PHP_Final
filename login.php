<?php
    include("clases/login_logica.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Central Lomas</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">

</head>

<body>
    <div class="contenedor-step">
        <form class="form-signin" method="post" id="IniciarSesion">
        <!----------------------------------------------------STEP N° 1---------------------------------------------------->
        <div class="d-flex" >
            <div class="step-left-background col-md-6 ">
                <div class="vh-100 d-xl-block justify-content-center container-fluid" data-aos="fade-down" data-aos-duration="1500" style="margin-left: 30px">
                    <div class="min-vh-100 d-flex align-items-center ">
                        <div class="row">
                            <h1 class="col-md-12">Iniciar Sesion</h1>
                            <p class="col-md-12">ingresa tu usuario y contraseña para poder ingresar a tu cuenta.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="margin:auto;" data-aos="fade-down" data-aos-duration="1500">
                <div class="step-right-container text-center" >
                    <h3 class="titulo">Iniciar Sesion en <br>Crypto Lomas</h3>
                    <div class="correo-container mt-2">
                        <label class="col-md-12" for="">Correo electrónico</label>
                        <input class="col-md-12" type="email" name="email">
                    </div>

                    <div class="password-container mt-2">
                        <label class="col-md-12" for="">Contraseña</label>
                        <input class="col-md-12"  id="password" type="password" name="passwordLogin">
                        <div class="col-md-12"> <a href="#">Olvidate la contraseña?</a></div>
                       
                    </div>
                    <button class="siguienteCodigo" type="submit" name="IniciarSesion" >Iniciar Sesion</button>
                    <div class="col-md-12"> <a href="registrar.php">No tienes una cuenta?</a></div>
                </div>
            </div>
        </div>
       <!----------------------------------------------------FIN N° 1---------------------------------------------------->
        </form>
    </div>

    <?php 
    include('inc/footer.php');
?>

<script>
    AOS.init();
</script>




