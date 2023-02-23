$(window).scroll(function () {
  if($(window).scrollTop() > 110) {
    $('.scroll-header').addClass('scroll-header__fixed');
    $('body').addClass('scroll-header__enable');
  } else {
    $('.scroll-header').removeClass('scroll-header__fixed');
    $('body').removeClass('scroll-header__enable');
  }
});
