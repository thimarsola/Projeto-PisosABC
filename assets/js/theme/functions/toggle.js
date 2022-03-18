var body = $('.doubts__row__container__content__wrapper__card__body');
var header = $('.doubts__row__container__content__wrapper__card__header');
var open = "doubts__row__container__content__wrapper__card--open";

$(function (){
    body.hide();

   header.click(function(){
        $(this).next().slideToggle();
        $(this).toggleClass(open);
        $(this).parent().siblings().children().next().slideUp();
        $(this).parent().siblings().children().removeClass(open);

        return false;
    });
});