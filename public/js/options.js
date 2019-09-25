$(function() {

    $('#size').on('change', function () {
        var price = $(this).find(":selected").data('price');
        $('.price').text(price + ' Руб.');
        $('#price').val(price);
    })
    $('#size').change();
})
