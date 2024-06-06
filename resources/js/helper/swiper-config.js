import {register} from 'swiper/element/bundle';

register();
import Swiper from "swiper";
// import Swiper from "swiper/bundle";

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
