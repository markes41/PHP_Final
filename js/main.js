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