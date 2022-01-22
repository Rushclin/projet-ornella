$(document).ready(function () {

    /***************************************/
    /* Form validation */
    /***************************************/
    $('#forms-login').validate({

        /* @validation states + elements */
        errorClass: 'error-view',
        validClass: 'success-view',
        errorElement: 'span',
        onkeyup: false,
        onclick: false,

        /* @validation rules */
        rules: {
            login: {
                required: true
            },
            password: {
                required: true,
                minlength: 6
            }
        },
        messages: {
            login: {
                required: 'Reseignez votre login'
            },
            password: {
                required: 'Renseignez votre mot de passe',
                minlength: 'Au moins 6 caracters'
            }
        },
        // Add class 'error-view'
        highlight: function (element, errorClass, validClass) {
            $(element).closest('.input').removeClass(validClass).addClass(errorClass);
            if ($(element).is(':checkbox') || $(element).is(':radio')) {
                $(element).closest('.check').removeClass(validClass).addClass(errorClass);
            }
        },
        // Add class 'success-view'
        unhighlight: function (element, errorClass, validClass) {
            $(element).closest('.input').removeClass(errorClass).addClass(validClass);
            if ($(element).is(':checkbox') || $(element).is(':radio')) {
                $(element).closest('.check').removeClass(errorClass).addClass(validClass);
            }
        },
        // Error placement
        errorPlacement: function (error, element) {
            if ($(element).is(':checkbox') || $(element).is(':radio')) {
                $(element).closest('.check').append(error);
            } else {
                $(element).closest('.unit').append(error);
            }
        },
    });
    /***************************************/
    /* end form validation */
    /***************************************/
});