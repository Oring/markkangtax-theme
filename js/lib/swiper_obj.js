document.addEventListener("DOMContentLoaded", function(){
    var swiper = new Swiper('.swiper-container-banner', {
        speed: 1000,
        autoplay: {
            delay: 5500,
        },
        loop: true,
        navigation: {
            nextEl: '.top-swiper-button-next',
            prevEl: '.top-swiper-button-prev',
        },
        pagination: {
            el: '.top-swiper-pagination',
            clickable: true,
        }
    });
    var swiper2 = new Swiper('.swiper-container-review1', {
        autoHeight: true,
        loop: true,
        speed: 500,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    var swiper3 = new Swiper('.swiper-container-review2', {
        autoHeight: true,
        loop: true,
        speed: 500,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        }
    });
});
