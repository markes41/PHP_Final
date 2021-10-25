var currentStep = 1;
var primerStep = 1;
var validar;
var numeroRandom;
var prueba = true;

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
            url: 'registrarse.php',
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


jQuery(document).ready(function($) {
    $.extend($.fn, {
        nextStep: function(param) {
            debugger
            if (!validar.form()) {
                return;
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

    //Validaciones
    debugger
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
            $("#nombre-error").css({ display: "none" });
        },

        submitHandler: submitForm
    });
    debugger
    $p = $('#Step1').attr('disabled');


    function submitForm() {
        var data = $("#registrarse").serialize();
        debugger
        $.ajax({
            type: 'POST',
            url: 'registrarse.php',
            data: data,
            success: function(response) {

            }
        });
        return false;
    }
});