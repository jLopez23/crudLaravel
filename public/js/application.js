/*
 * Ocultar alert
 */

$(".alert").delay(6000).slideUp(200, function () {
    $(this).alert('close');
});


/*
 * modal crear usuario
 */


//display modal form for task editing
$('.open-modal').click(function () {
    alert('hola mundo');
});

Parsley.addMessages('es', {
    defaultMessage: "Este valor parece ser inválido.",
    type: {
        email: "Este valor debe ser un correo válido.",
        url: "Este valor debe ser una URL válida.",
        number: "Este valor debe ser numérico.",
        integer: "Este valor debe ser numérico.",
        digits: "Este valor debe ser un dígito válido.",
        alphanum: "Este valor debe ser alfanumérico."
    },
    notblank: "Este valor no debe estar en blanco.",
    required: "Este valor es requerido.",
    pattern: "Este valor es incorrecto.",
    min: "Este valor no debe ser menor que %s.",
    max: "Este valor no debe ser mayor que %s.",
    range: "Este valor debe estar entre %s y %s.",
    minlength: "Este valor es muy corto. La longitud mínima es de %s caracteres.",
    maxlength: "Este valor es muy largo. La longitud máxima es de %s caracteres.",
    length: "La longitud de este valor debe estar entre %s y %s caracteres.",
    mincheck: "Debe seleccionar al menos %s opciones.",
    maxcheck: "Debe seleccionar %s opciones o menos.",
    check: "Debe seleccionar entre %s y %s opciones.",
    equalto: "Este valor debe ser idéntico."
});

Parsley.setLocale('es');

Parsley.addMessages('es', {
    dateiso: "Fecha no válida YYYY-MM-DD.",
    minwords: "This value is too short. It should have %s words or more.",
    maxwords: "This value is too long. It should have %s words or fewer.",
    words: "This value length is invalid. It should be between %s and %s words long.",
    gt: "This value should be greater.",
    gte: "This value should be greater or equal.",
    lt: "This value should be less.",
    lte: "This value should be less or equal.",
    notequalto: "This value should be different."
});
// Load this after Parsley for additional comparison validators

window.Parsley.addValidator('dateiso', {
    validateString: function (value) {
        return /^(\d{4})\D?(0[1-9]|1[0-2])\D?([12]\d|0[1-9]|3[01])$/.test(value);
    },
    priority: 256
});
//# sourceMappingURL=application.js.map
