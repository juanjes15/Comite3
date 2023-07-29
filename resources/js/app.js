import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import 'owl.carousel';

window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

// En tu archivo resources/js/app.js o en otro archivo JavaScript que se cargue en la página.
document.addEventListener('DOMContentLoaded', function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
});
