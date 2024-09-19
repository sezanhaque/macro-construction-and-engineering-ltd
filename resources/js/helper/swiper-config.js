import {register} from 'swiper/element/bundle';

register();
import Swiper from "swiper";
// import Swiper from "swiper/bundle";

let about_us_client_round_image_swiper = new Swiper(".about-us-client-round-image", {
    loop: true,
    spaceBetween: -10,
    slidesPerView: 3,
    watchSlidesProgress: true,
});

let about_us_client_text_swiper = new Swiper(".about-us-client-text", {
    loop: true,
    spaceBetween: 32,
    thumbs: {
        swiper: about_us_client_round_image_swiper,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

let team_swiper = new Swiper(".team-swiper", {
    slidesPerView: 1,
    spaceBetween: 32,
    centeredSlides: false,
    slidesPerGroupSkip: 1,
    grabCursor: true,
    loop: true,
    keyboard: {
        enabled: true,
    },
    breakpoints: {
        769: {
            slidesPerView: 2,
            slidesPerGroup: 1,
        },
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    scrollbar: {
        el: ".swiper-scrollbar",
    },
    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
    },
});

const homeHeroSectionSwiper = new Swiper(".home-hero-section-swiper", {
    slidesPerView: 1,
    // spaceBetween: 30,
    centeredSlides: true,
    loop: true,
    // autoplay: {
    //     delay: 2500,
    //     disableOnInteraction: false,
    //     pauseOnMouseEnter: true,
    // },
    // pagination: {
    //     el: ".swiper-pagination",
    //     clickable: true,
    // },
    // navigation: {
    //     enabled: false,
    //     nextEl: ".swiper-button-next",
    //     prevEl: ".swiper-button-prev",
    // },
    injectStyles: [
        `
        .swiper-button-prev .swiper-button-next {
            height: 30px !important;
        }
        `
    ]
});
