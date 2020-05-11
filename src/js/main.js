$(document).ready(function() { 


    /* Cкрипт для меню бургер  */
    $('.header-major__burger').click(function(event) {
        $('.header-major__burger, .header-major__burger__span').toggleClass('active');
        $('.header-major__menu__nav, #main-advantage').toggleClass('open-nav');
    });

    /* Cкрипт для меню form  */
    $('#request').click(function(event) {
        $('.main-major__form').addClass('open-form');
    });

    $('#close').click(function(event) {
        $('.main-major__form').removeClass('open-form');
    });

    /* Cкрипт для меню popup #main-services  */  
        /* подбор автомобиля */
    $('#detailed-1').click(function(event) {
        $('.main-services__content__list__item__popup-1').addClass('open-popup');
    });

    $('#close-service-popup-1').click(function(event) {
        $('.main-services__content__list__item__popup-1').removeClass('open-popup');
    });

        /* выездная диагностика */
    $('#detailed-2').click(function(event) {
        $('.main-services__content__list__item__popup-2').addClass('open-popup');
    });

    $('#close-service-popup-2').click(function(event) {
        $('.main-services__content__list__item__popup-2').removeClass('open-popup');
    });

     /* Специалист на день */
     $('#detailed-3').click(function(event) {
        $('.main-services__content__list__item__popup-3').addClass('open-popup');
    });

    $('#close-service-popup-3').click(function(event) {
        $('.main-services__content__list__item__popup-3').removeClass('open-popup');
    });

    /* автострахование */
    $('#detailed-4').click(function(event) {
        $('.main-services__content__list__item__popup-4').addClass('open-popup');
    });

    $('#close-service-popup-4').click(function(event) {
        $('.main-services__content__list__item__popup-4').removeClass('open-popup');
    });

    /* Cкрипт для меню popup #main-contacts  */ 

        /* приближение и отдаление маштба карты  */
    $('.main-contacts__content__map__icon__p-1').click(function(event) {
        $('.main-contacts__content__map__icon__p-1').addClass('active-map-icon');
        $('.main-contacts__content__map__icon__p-2').removeClass('active-map-icon');
        $('.main-contacts__content__map__icon__p-3').removeClass('active-map-icon');
        $('.main-contacts__content__map__icon__p-3').removeClass('active-map-icon');
        $('.main-contacts__content__map__item-1').addClass('active-map');
        $('.main-contacts__content__map__item-2').removeClass('active-map');
        $('.main-contacts__content__map__item-3').removeClass('active-map');
    });

    $('.main-contacts__content__map__icon__p-2').click(function(event) {
        $('.main-contacts__content__map__icon__p-2').addClass('active-map-icon');
        $('.main-contacts__content__map__icon__p-1').removeClass('active-map-icon');
        $('.main-contacts__content__map__icon__p-3').removeClass('active-map-icon');
        $('.main-contacts__content__map__item-2').addClass('active-map');
        $('.main-contacts__content__map__item-1').removeClass('active-map');
        $('.main-contacts__content__map__item-3').removeClass('active-map');
    });

    $('.main-contacts__content__map__icon__p-3').click(function(event) {
        $('.main-contacts__content__map__icon__p-3').addClass('active-map-icon');
        $('.main-contacts__content__map__icon__p-1').removeClass('active-map-icon');
        $('.main-contacts__content__map__icon__p-2').removeClass('active-map-icon');
        $('.main-contacts__content__map__item-3').addClass('active-map');
        $('.main-contacts__content__map__item-2').removeClass('active-map');
        $('.main-contacts__content__map__item-1').removeClass('active-map');
    });
});