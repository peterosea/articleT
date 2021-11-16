export default () => {
  function classAddandRemove(
    target,
    scroll = window.pageYOffset || document.documentElement.scrollTop,
    shrinkHeader = 40
  ) {
    if (scroll >= shrinkHeader) {
      $(target).addClass('shrink');
    } else {
      $(target).removeClass('shrink');
    }
  }
  $(window).scroll(function () {
    classAddandRemove('header#header__main');
  });
};
