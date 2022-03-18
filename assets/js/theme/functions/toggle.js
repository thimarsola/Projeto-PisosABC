// var header = $('.doubts__row__container__content__wrapper__card__header');
// var card = $('.doubts__row__container__content__wrapper__card');
// var open = "doubts__row__container__content__wrapper__card--open";
// var close = "doubts__row__container__content__wrapper__card--close";
//
// $(function (){
//     header.click(function(){
//         if($(this).parent().prev().hasClass(open)){
//             $(this).parent().prev().removeClass(open);
//             $(this).parent().prev().addClass(close);
//         }
//        
//         if($(this).parent().next().hasClass(open)){
//             $(this).parent().next().removeClass(open);
//             $(this).parent().next().addClass(close);
//         }
//        
//         $(this).parent().next().addClass(close);
//         $(this).parent().addClass(open);
//
//         return false;
//     });
// });

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