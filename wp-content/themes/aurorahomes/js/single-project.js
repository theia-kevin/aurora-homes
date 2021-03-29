import Swiper from 'swiper/bundle';

import SimpleLightbox from 'simple-lightbox';

let swiper_primary = new Swiper('.swiper-primary', {
  loop: true,
  allowSlidePrev: false,
  allowSlideNext: false,
  speed: 900,
});

let swiper_secondary = new Swiper('.swiper-secondary', {
  loop: true,
  slidesPerView: 2,
  spaceBetween: 15,
  autoplay: {
    delay: 2000,
  },
  speed: 900,
  navigation: {
    nextEl: '.swiper-secondary-next',
    prevEl: '.swiper-secondary-prev',
  },
  on: {
    slideNextTransitionStart: () => {
      swiper_primary.allowSlideNext = true;
      swiper_primary.slideNext(900, true);
      swiper_primary.allowSlideNext = false;
    },
    slidePrevTransitionStart: () => {
      swiper_primary.allowSlidePrev = true;
      swiper_primary.slidePrev(900, true);
      swiper_primary.allowSlidePrev = false;
    }
  }
});

let swiper_lightbox = new SimpleLightbox({
  elements: document.querySelectorAll('.swiper-lightbox a'),
});
