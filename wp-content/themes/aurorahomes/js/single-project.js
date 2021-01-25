import Swiper from 'swiper/bundle';

import SimpleLightbox from 'simple-lightbox';

let swiper_primary = new Swiper('.swiper-primary', {
  loop: true,
  allowSlidePrev: false,
  allowSlideNext: false,
});

let swiper_secondary = new Swiper('.swiper-secondary', {
  loop: true,
  slidesPerView: 2,
  spaceBetween: 16,
  autoplay: {
    delay: 3000,
  },
  on: {
    slideNextTransitionStart: () => {
      swiper_primary.allowSlideNext = true;
      swiper_primary.slideNext(300, true);
      swiper_primary.allowSlideNext = false;
    },
    slidePrevTransitionStart: () => {
      swiper_primary.allowSlidePrev = true;
      swiper_primary.slidePrev(300, true);
      swiper_primary.allowSlidePrev = false;
    }
  }
});

let swiper_lightbox = new SimpleLightbox({
  elements: document.querySelectorAll('.swiper-lightbox a'),
});
