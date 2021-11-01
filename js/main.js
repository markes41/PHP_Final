//#region Variables
var currentStep = 1;
var primerStep = 1;
var validar;
var numeroRandom;
var numeroRandomRecuperar;
var prueba = true;
//#endregion

//#region Steps
jQuery(document).ready(function($) {
    $.extend($.fn, {
        nextStep: function(param) {
            debugger
            if (validar != undefined) {
                if (!validar.form()) {
                    return;
                }
            }
            if (validarLogica != undefined) {
                if (!validarLogica.form()) {
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
            },
            usuario: {
                required: true,
            },
            combobox: {
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
            },
            usuario: {
                required: "Por favor ingrese un usuario",
            },
            combobox: {
                required: "Por favor ingrese un rol",
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
            password: {
                required: true,
                minlength: 6,
                maxlength: 16
            },
            confirmpassword: {
                required: true,
                equalTo: '#password'
            },
        },
        messages: {

            email: "Por favor ingrese un mail valido",
            password: {
                required: "Por favor ingrese la contraseña",
                minlength: "La contraseña no puede tener menos de 6 caracteres"
            },
            confirmpassword: {
                required: "Por favor vuelva a reingresar su contraseña",
                equalTo: "Las constraseñas no coinciden!"
            },
        },

        errorElement: 'div',
        errorPlacement: function(error, element) {
            error.insertAfter(element)
        },

        submitHandler: logicaForm
    });
});
//#endregion

//#region  Funciones


function eliminarDatos(Id) {
    Swal.fire({
        title: 'Cuidado!',
        text: "Esta seguro que deseas eliminar el usuario?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#cd2905',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Eliminar'

    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "POST",
                data: "Id=" + Id,
                url: "./clases/usuario_editar.php",
                dataType: "json",
                success: function(response) {
                    debugger
                    if (response.success == true) {
                        location.reload();
                    } else {

                    }
                }
            });
        }
    })


}

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


function logicaForm() {
    debugger
    $data = $("#logicarecuperar").serialize();
    $.ajax({
        type: 'POST',
        url: 'clases/recuperar_logica.php',
        data: $data,
        dataType: "json",
        async: false,
        success: function(response) {
            debugger
            if (response.cuenta == 0) {
                $('#step-' + currentStep).addClass('display-important');
                currentStep--;
                $('#step-' + currentStep).removeClass('display-important');
                $('#credencialesRecuperar').html('');
                $('#credencialesRecuperar').append('<p style="color:red">' + response.error + '</p>');

            }
            if (response.numero != undefined) {
                if (response.numero.Codigo_Recuperacion == $('#codigo_recuperacion').val()) {
                    $('#siguiente').removeAttr('disabled');
                    $('#siguiente').removeAttr('hidden');
                    $('#validarCodigoRecuperacion').attr('hidden', 'hidden');
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
            }

            if (response.cambio != undefined) {
                if (response.retorno) {
                    Swal.fire({
                        title: 'Cambio de contraseña',
                        text: response.cambio,
                        icon: 'success',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Continuar!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $(location).attr('href', 'https://localhost/PHP_Final/login.php');
                        }
                    });
                } else {
                    Swal.fire(
                        'Validacion Incorrecta',
                        response.cambio,
                        'warning'
                    )
                    return;
                }
            }
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
        async: false,
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