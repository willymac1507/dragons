import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

$(function() {
    $(".carousel").slick({
        autoplay: true,
        fade: true,
        arrows: true,
        infinite: true,
        loop: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        speed: 600
    });
})
