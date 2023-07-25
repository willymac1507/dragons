import './bootstrap';

import Alpine from 'alpinejs';
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";

window.Alpine = Alpine;

Alpine.start();

$(function() {
    $(".carousel").slick({
        autoplay: true,
        autoplaySpeed: 5000,
        fade: true,
        arrows: true,
        infinite: true,
        loop: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        speed: 600
    });

    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );

})
