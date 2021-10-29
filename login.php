<?php
    include("clases/login_logica.php");
?>

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
                </div>
            </div>
        </div>
       <!----------------------------------------------------FIN N° 1---------------------------------------------------->
        </form>
    </div>



