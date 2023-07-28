import './bootstrap';

import Alpine from 'alpinejs';
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
import {Dropzone} from "dropzone";

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

    console.log($(location).attr('href'));

    if ($(location).attr('href').includes('news/item/add')) {
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });

    }

    $('#headline').focusout( () => {
        let slugIn = $('#headline').val();
        let slugOut = slugIn.replace(/\s+/g, '-').toLowerCase();
        $('#slug').val(slugOut);
    });



})
