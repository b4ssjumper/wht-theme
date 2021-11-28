jQuery(document).ready(function ($) {
  $('.slider__wrapper').slick({
    autoplay: true,
    autoplaySpeed: 5000,
    fade: true,
    prevArrow: '<button class="prev-arrow" ><i class="fa fa-angle-left"></i></button>',
    nextArrow: '<button class="next-arrow" ><i class="fa fa-angle-right"></i></button>',
  });

  var visible = false;
  $('#access-mobile').click(function(e){
    var $target = $('#access');
    if (visible) {
      $target.slideUp();
    } else {
      $target.slideDown();
    }
    visible = !visible;
  })
});
