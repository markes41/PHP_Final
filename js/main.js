var currentStep = 1;
var primerStep = 1;

function StringIsNullOrEmpty(value) {
    return (!value || value == undefined || value == "" || value.length == 0);
}

jQuery(document).ready(function ($) {
    $.extend($.fn, {
        nextStep: function (param) {
            debugger
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
        prevStep: function (param) {
            if (currentStep == primerStep)
                return;
            $('#step-' + currentStep).hide();
            currentStep--;
            $('#step-' + currentStep).show();

        },
        startSteps: function () {
            if (currentStep == primerStep)
                $('#volver').hide()
            else
                $('#volver').show();
        }
    });

    $('.siguiente').click(function () {
        $.fn.nextStep();
        $.fn.startSteps();
    });

    $('#volver').click(function () {
        $.fn.prevStep();
        $.fn.startSteps();
    });
});

    $('document').ready(function() {         
        $("#registrarse").validate({
            rules:
         {
         nombre: {
            required: true,
         minlength: 3
         },
         password: {
         required: true,
         minlength: 6,
         maxlength: 16
         },
         cpassword: {
         required: true,
         comparar: '#password'
         },
         email: {
                  required: true,
                  email: true,
                  prueba: function(){
                    $('.siguiente').attr('hidden');
                  }
                 
                  },
          },
             messages:
          {
                  password:{
                            required: "Por favor ingrese la contraseña",
                            minlength: "La contraseña no puede tener menos de 6 caracteres"
                           },
                    email: "Por favor ingrese un mail valido",
         cpassword:{
            requerido: "Por favor vuelva a reingresar su contraseña",
            comparar: "Las constraseñas no coinciden !"
             }
             },
          submitHandler: submitForm 
             });  
          function submitForm() {  
          var data = $("#registrarse").serialize();    
          debugger
          $.ajax({    
            type : 'POST',
            url  : 'registrarse.php',
            data : data,
            success :  function(response) {  
                
                }
            });
            return false;
          }
        });
