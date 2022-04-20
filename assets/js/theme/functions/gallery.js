//gallery home page
$(function () {
    $('.showroom__row').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {
            enabled: true
        }
    });
});