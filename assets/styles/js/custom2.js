
function fetchCena(element, cenaId) {
    var selectedOption = element.value;
    var specificPriceUrl = '{{ path(\'app_get_cena\') }}';
    $.ajax({
        url: specificPriceUrl,
        type: 'POST',
        success: function(data) {
            // Update the form value with the cena value
            $('#' + cenaFieldId).val(data.cena);
        }
    });
};


