import Swiper from 'swiper';

export default () => {
  new Swiper('#swipercontainerS5', {
    spaceBetween: 20,
    slidesPerView: 'auto',
    centeredSlides: true,
    pagination: {
      clickable: true,
    },
    breakpoints: {
      640: {
        spaceBetween: 28,
        centeredSlides: false,
      },
      1280: {
        slidesPerView: 3,
        centeredSlides: false,
      },
      1536: {
        slidesPerView: 5,
        centeredSlides: false,
      },
    },
  });
};
