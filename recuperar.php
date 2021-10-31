<?php
include_once("clases/recuperar_logica.php");
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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" type="image/png" href="./img/favicon.png" sizes="32x32">

</head>
<body>
    <div class="contenedor-step">
    <form class="form-signin" method="post" id="logicarecuperar">
        <!----------------------------------------------------STEP N° 1---------------------------------------------------->
        <div id="step-1" class="d-flex" >
            <div class="step-left-background col-md-6 ">
                <div class="vh-100 d-xl-block justify-content-center container-fluid" data-aos="fade-down" data-aos-duration="1500" style="margin-left: 30px">
                    <div class="min-vh-100 d-flex align-items-center ">
                        <div class="row" >
                            <h1 class="col-md-12">Recuperar cuenta</h1>
                            <p class="col-md-12">Ten en cuenta que para recuperar tu cuenta vamos a necesitar algunos datos...</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="margin:auto;" data-aos="fade-down" data-aos-duration="1500">
                <div class="step-right-container text-center" >
                    <h3 class="titulo">Recuperar cuenta en <br>Crypto Lomas</h3>
                    <div id="credencialesRecuperar"></div>
                    <div class="correo-container mt-2">
                        <label class="col-md-12" for="">Nombre de usuario</label>
                        <input class="col-md-12" type="text" name="usuario">
                    </div>


                    <div class="correo-container mt-2">
                        <label class="col-md-12" for="">Correo electrónico</label>
                        <input class="col-md-12" type="email" name="email">
                    </div>

                   
                    <button class="siguiente" type="submit" name="enviarMail_recuperar">Siguiente</button>
                </div>
            </div>
        </div>
        <!----------------------------------------------------FIN N° 1---------------------------------------------------->
        <!----------------------------------------------------STEP N° 2---------------------------------------------------->
        <div id="step-2" class="d-flex display-important" data-aos="fade-up" data-aos-duration="1500">
            <div class="step-left-background col-md-6 ">
                <div class="vh-100 d-xl-block justify-content-center container-fluid" style="margin-left: 30px">
                    <div class="min-vh-100 d-flex align-items-center ">
                        <div class="row">
                            <h1 class="col-md-12">Paso 2: Código de verificación</h1>
                            <p class="col-md-12">Enviaremos un código al correo electrónico que nos indicaste, con un número aleatorio de 6 dígitos, para recuperar tu Contraseña.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="margin:auto;">
                <div class="step-right-container text-center">
                    <h3 class="titulo">Validación de correo<br /> electrónico</h3>
                    <div class="correo-container mt-2">
                        <label class="col-md-12" for="">Código de verificación</label>
                        <input class="col-md-12" type="text" name="codigo_recuperacion" id="codigo_recuperacion">
                    </div>

                    <button class="siguienteCodigo" type="submit"  name="validarCodigoRecuperacion" id="validarCodigoRecuperacion">Validar</button>
                    <button class="siguiente" type="submit" id="siguiente" hidden disabled >Siguiente</button>
                </div>
            </div>
        </div>

        <!----------------------------------------------------FIN N° 2---------------------------------------------------->
        <!----------------------------------------------------STEP N° 3---------------------------------------------------->
        <div id="step-3" class="d-flex display-important" data-aos="fade-up" data-aos-duration="1500">
            <div class="step-left-background col-md-6 ">
                <div class="vh-100 d-xl-block justify-content-center container-fluid" style="margin-left: 30px">
                    <div class="min-vh-100 d-flex align-items-center ">
                        <div class="row">
                            <h1 class="col-md-12">Paso 3: Nueva Contraseña</h1>
                            <p class="col-md-12">Escribe tu nueva Contraseña.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="margin:auto;">
                <div class="step-right-container text-center">
                    <h3 class="titulo">Nueva Contraseña</h3>
                    <div class="correo-container mt-2">
                        <label class="col-md-12" for="">Contraseña</label>
                        <input class="col-md-12" id="password" type="password" name="password">
                    </div>

                    <div class="correo-container mt-2">
                        <label class="col-md-12" for="">Repetir Contraseña</label>
                        <input class="col-md-12" type="password" name="confirmpassword">
                    </div>

                    <button class="siguiente" type="submit">Finalizar</button>
                
                </div>
            </div>
        </div>
        <!----------------------------------------------------FIN N° 3---------------------------------------------------->
        </form>
    </div>

    <?php 
    include('inc/footer.php');
?>

<script>
    AOS.init();
</script>