var form_validation_register = function() {
    var e = function() {
            jQuery(".form-valide-register").validate({
                ignore: [],
                errorClass: "invalid-feedback animated fadeInDown",
                errorElement: "div",
                errorPlacement: function(e, a) {
                    jQuery(a).parents(".form-group > div").append(e)
                },
                highlight: function(e) {
                    jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
                },
                success: function(e) {
                    jQuery(e).closest(".form-group").removeClass("is-invalid"), jQuery(e).remove()
                },
                rules: {
                    "val-username": {
                        required: !0,
                        minlength: 3
                    },
                    "val-email": {
                        required: !0,
                        email: !0
                    },
                    "val-password-register": {
                        required: !0,
                        minlength: 5
                    },
                    "val-confirm-password-register": {
                        required: !0,
                        equalTo: "#val-password-register"
                    },
                    "val-select2": {
                        required: !0
                    },
                    "val-select2-multiple": {
                        required: !0,
                        minlength: 2
                    },
                    "val-suggestions": {
                        required: !0,
                        minlength: 5
                    },
                    "val-skill": {
                        required: !0
                    },
                    "val-currency": {
                        required: !0,
                        currency: ["$", !0]
                    },
                    "val-website": {
                        required: !0,
                        url: !0
                    },
                    "val-phoneus": {
                        required: !0,
                        phoneUS: !0
                    },
                    "val-digits": {
                        required: !0,
                        digits: !0
                    },
                    "val-number": {
                        required: !0,
                        number: !0
                    },
                    "val-range": {
                        required: !0,
                        range: [1, 5]
                    },
                    "val-terms": {
                        required: !0
                    }
                },
                messages: {
                    "val-username": {
                        required: "Por favor, ingrese un nombre de usuario",
                        minlength: "Su nombre de usuario debe tener al menos 3 caracteres"
                    },
                    "val-email": "Por favor, introduce un correo electrónico válido",
                    "val-password-register": {
                        required: "Por favor ingrese una contraseña",
                        minlength: "Tu contraseña debe tener al menos 5 caracteres"
                    },
                    "val-confirm-password-register": {
                        required: "Por favor ingrese una contraseña",
                        minlength: "Tu contraseña debe tener al menos 5 caracteres",
                        equalTo: "Ingrese la misma contraseña que la anterior"
                    },
                    "val-select2": "Please select a value!",
                    "val-select2-multiple": "Please select at least 2 values!",
                    "val-suggestions": "What can we do to become better?",
                    "val-skill": "Please select a skill!",
                    "val-currency": "Please enter a price!",
                    "val-website": "Please enter your website!",
                    "val-phoneus": "Please enter a US phone!",
                    "val-digits": "Please enter only digits!",
                    "val-number": "Please enter a number!",
                    "val-range": "Please enter a number between 1 and 5!",
                    "val-terms": "You must agree to the service terms!"
                }
            })
        }
    return {
        init: function() {
            e(), a(), jQuery(".js-select2").on("change", function() {
                jQuery(this).valid()
            })
        }
    }
}();
jQuery(function() {
    form_validation_register.init()
});


var form_validation_assets = function() {
    var e = function() {
            jQuery(".form-valide-assets").validate({
                ignore: [],
                errorClass: "invalid-feedback animated fadeInDown",
                errorElement: "div",
                errorPlacement: function(e, a) {
                    jQuery(a).parents(".form-group > div").append(e)
                },
                highlight: function(e) {
                    jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
                },
                success: function(e) {
                    jQuery(e).closest(".form-group").removeClass("is-invalid"), jQuery(e).remove()
                },
                rules: {
                    "val-articulo": {
                        required: !0,
                        minlength: 5
                    },
                    "val-select-articulo": {
                        required: !0
                    },
                    "val-select-responsable": {
                        required: !0
                    },
                    "val-bienes": {
                        required: !0,
                        minlength: 5
                    },
                    "val-codigo": {
                        required: !0
                    },
                    "val-valor-comercial": {
                        required: !0,
                        currency: ["$", !0]
                    },
                    "val-valor-raiz": {
                        required: !0,
                        currency: ["$", !0]
                    },
                    "val-valor-contable": {
                        required: !0,
                        currency: ["$", !0]
                    },
                    "val-uso": {
                        required: !0,
                        number: !0,
                        maxlength: 3
                    },
                    "val-cantidad": {
                        required: !0,
                        number: !0
                    },
                    "val-cobertura": {
                        required: !0
                    },
                    "val-ubicacion": {
                        required: !0,
                        minlength: 5
                    }
                },
                messages: {
                    "val-articulo": {
                        required: "Por favor, ingrese el nombre del articulo",
                        minlength: "El nombre del articulo debe tener al menos 5 caracteres"
                    },
                    "val-ubicacion": {
                        required: "Por favor, ingrese la ubicacion",
                        minlength: "La ubicacion del articulo debe tener al menos 5 caracteres"
                    },
                    "val-uso": {
                        required: "Por favor, ingrese el porcentaje de uso",
                        maxlength: "El porcentaje de uso no puede superar los 3 caracteres"
                    },
                    "val-select-articulo": "Por favor, seleccione el tipo de articulo",
                    "val-select-responsable": "Por favor, seleccione el responsable del articulo",
                    "val-bienes": "Por favor ingrese los bienes del articulo",
                    "val-valor-comercial": "Por favor, ingrese el valor comercial",
                    "val-valor-raiz": "Por favor, ingrese la raiz contable",
                    "val-valor-contable": "Por favor, ingrese el valor contable",
                    "val-codigo": "Por favor, ingrese el codigo contable",
                    "val-cobertura": "Por favor, ingrese la cobertura",
                    "val-cantidad": "Por favor, ingrese la cantidad"
                }
            })
        }
    return {
        init: function() {
            e(), a(), jQuery(".js-select2").on("change", function() {
                jQuery(this).valid()
            })
        }
    }
}();
jQuery(function() {
    form_validation_assets.init()
});
