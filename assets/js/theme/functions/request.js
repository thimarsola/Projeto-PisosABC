// var $j = jQuery.noConflict();

$(document).ready(function () {
    const path = $(location).attr("href").split("contato/", 1).reverse().join('');
    const file = 'wp-content/themes/pisosabc/source/Support/Sender.php';

    $('#form').submit(function () {
        $(".contact__row__form__wrapper__content__status").removeClass("d-none");

        $.ajax({
            url: path.concat(file),
            type: 'POST',
            cache: false,
            data: $('#form').serialize(),
            success: function (data) {
                $('.contact__row__form__wrapper__content__status').append(data);

                setTimeout(function (){
                    $(".contact__row__form__wrapper__content__status").addClass("d-none");
                }, 3000);
            },
            error: function(){
                $('.contact__row__form__wrapper__content__status').append('Erro');
            }
        });
        return false;
    });
});