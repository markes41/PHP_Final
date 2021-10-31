//#region Variables
var currentStep = 1;
var primerStep = 1;
var validar;
var numeroRandom;
var numeroRandomRecuperar;
var prueba = false;
//#endregion

//#region Steps
jQuery(document).ready(function($) {
    $.extend($.fn, {
        nextStep: function(param) {
            if (validar != undefined) {
                if (!validar.form()) {
                    return;
                }
            }

            var div = $('#step-' + currentStep);
            var isFunction = div.attr('action-next');
            var response = true;
            if (!StringIsNullOrEmpty(isFunction)) {
                response = window[isFunction]();
            }

            if (response) {
                $('#step-' + currentStep).addClass('display-important');
                currentStep++;
                $('#step-' + currentStep).removeClass('display-important');
            }
        },
        prevStep: function(param) {
            debugger
            if (currentStep == primerStep)
                return;
            $('#step-' + currentStep).hide();
            currentStep--;
            $('#step-' + currentStep).show();

        },
        startSteps: function() {
            if (currentStep == primerStep)
                $('#volver').hide()
            else
                $('#volver').show();
        }
    });

    $('.siguiente').click(function() {
        $.fn.nextStep();
        $.fn.startSteps();
    });

    $('#volver').click(function() {
        $.fn.prevStep();
        $.fn.startSteps();

    });

});

//#endregion

//#region Validaciones
$(document).ready(function() {
    validar = $("#registrarse").validate({
        rules: {
            nombre: {
                required: true,
            },
            apellido: {
                required: true,
            },
            password: {
                required: true,
                minlength: 6,
                maxlength: 16
            },
            confirmpassword: {
                required: true,
                equalTo: '#password'
            },
            email: {
                required: true,
                email: true,
            },
            Dni: {
                required: true,
            },
            fechaNacimiento: {
                required: true,
            }
        },
        messages: {
            nombre: {
                required: "Por favor ingrese un nombre",
            },
            apellido: {
                required: "Por favor ingrese un apellido",
            },
            password: {
                required: "Por favor ingrese la contraseña",
                minlength: "La contraseña no puede tener menos de 6 caracteres"
            },
            email: "Por favor ingrese un mail valido",
            confirmpassword: {
                required: "Por favor vuelva a reingresar su contraseña",
                equalTo: "Las constraseñas no coinciden!"
            },
            Dni: {
                required: "Por favor ingresa un DNI"
            },
            fechaNacimiento: {
                required: "Por favor ingresa tu fecha de nacimiento"
            }
        },
        errorElement: 'div',
        errorPlacement: function(error, element) {
            error.insertAfter(element)
        },

        submitHandler: submitForm
    });

    validarLogica = $("#logicarecuperar").validate({
        rules: {
            email: {
                required: true,
                email: true,
            },
            codigo_recuperacion: {
                required: true
            }
        },
        messages: {

            email: "Por favor ingrese un mail valido",
        },
        errorElement: 'div',
        errorPlacement: function(error, element) {
            error.insertAfter(element)
        },

        submitHandler: function(form) {
            CodigoRecuperacion();
            //submit via ajax
            //This doesn't prevent the form from submitting.
        }
    });
});
//#endregion

//#region  Funciones

function StringIsNullOrEmpty(value) {
    return (!value || value == undefined || value == "" || value.length == 0);
}

function Codigo() {
    if (numeroRandom != undefined && currentStep == "2") {
        debugger
        var data = window.numeroRandom;
        swal.fire({
            title: 'Estamos validando el codigo ingresado'
        });
        swal.showLoading();
        $.ajax({
            type: 'POST',
            url: 'clases/registrarse_logica.php',
            data: data,
            success: function(response) {
                swal.close();
                var codigoIngresado = $('#codigo').val()
                if (data == codigoIngresado) {
                    $('#siguiente').removeAttr('disabled');
                    $('#siguiente').removeAttr('hidden');
                    $('#validarCodigo').attr('hidden', 'hidden');
                    Swal.fire(
                        'Validado Correctamente',
                        'Puede avanzar al siguiente paso!',
                        'success'
                    );

                } else {
                    if (prueba == true) {
                        Swal.fire(
                            'Modo de prueba',
                            'El codigo es</br>' + data,
                            'success'
                        );
                    } else {

                        Swal.fire(
                            'Validacion Incorrecta',
                            'Por favor ingrese el codigo enviado al mail correctamente',
                            'warning'
                        )
                        return;
                    }


                }
            }
        });
    }
}

function CodigoRecuperacion() {
    debugger
    if (currentStep == "2") {
        debugger
        swal.fire({
            title: 'Estamos validando el codigo ingresado'
        });
        swal.showLoading();
        $data = $("#logicarecuperar").serialize();
        $.ajax({
            type: 'POST',
            url: 'clases/recuperar_logica.php',
            data: $data,
            dataType: "json",
            success: function(response) {
                debugger
                console.log(response)
                swal.close();
                if (response == $('#codigo_recuperacion').val()) {
                    $('#siguiente').removeAttr('disabled');
                    $('#siguiente').removeAttr('hidden');
                    $('#validarCodigo_Recuperacion').attr('hidden', 'hidden');
                    Swal.fire(
                        'Validado Correctamente',
                        'Puede avanzar al siguiente paso!',
                        'success'
                    );

                } else {
                    Swal.fire(
                        'Validacion Incorrecta',
                        'Por favor ingrese el codigo enviado al mail correctamente',
                        'warning'
                    )
                    return;
                }

            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError);
            }
        });
    }
}


function logicaForm() {
    debugger
    $data = $("#logicarecuperar").serialize();
    $.ajax({
        type: 'POST',
        url: 'clases/recuperar_logica.php',
        data: $data,
        dataType: "json",
        success: function(response) {
            debugger
            alert(response);
            console.log(response);
        }
    });

}


function submitForm() {
    debugger
    $data = $("#registrarse").serialize();
    $.ajax({
        type: 'POST',
        url: 'clases/registrarse_logica.php',
        data: $data,
        dataType: "json",
        success: function(response) {
            debugger
            if (response.success == true) {
                Swal.fire({
                    title: 'Registro completado',
                    text: "A continuacion sera redirigido para que pueda ingresar con su nueva cuenta!",
                    icon: 'success',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Continuar!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $(location).attr('href', 'https://localhost/PHP_Final/login.php');
                    }
                })

            } else {
                return;
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {

        }

    });

}

//#endregion