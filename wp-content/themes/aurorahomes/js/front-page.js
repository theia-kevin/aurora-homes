import Swiper from 'swiper/bundle';

let ourWorkSwiper = new Swiper('.our-work-swiper-container', {
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 0,
    },
    640: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
  loop: true,
  // autoplay: {
  //   delay: 3000,
  // },
});
