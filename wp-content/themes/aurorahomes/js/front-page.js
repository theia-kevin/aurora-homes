import Swiper from 'swiper/bundle';

let ourWorkSwiper = new Swiper('.our-work-swiper-container', {
  init: false,
  navigation: {
    nextEl: '.swiper-next',
    prevEl: '.swiper-prev',
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 0,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    1280: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
  loop: true,
  autoplay: {
    delay: 2000,
  },
  speed: 900,
});

ourWorkSwiper.init();
