$(function () {
  $('body').on('click', '.modal__open' , function() {
    $('.modal__area').fadeIn();
    $('.modal__open').addClass('close');
    $('body').addClass('modal__enable');
  });
  // ボタンを押して閉じる
  $('body').on('click', '.modal__open.close' , function() {
    $('.modal__area').fadeOut();
    $('.modal__open').removeClass('close');
    $('body').removeClass('modal__enable');
  });
  // 領域外を押して閉じる
  $('body').on('click', '.modal__bg' , function() {
    $('.modal__area').fadeOut();
    $('.modal__open').removeClass('close');
    $('body').removeClass('modal__enable');
  });
});
