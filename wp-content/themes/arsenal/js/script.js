( function( $ ) {
  $('.button-call').click( () => {
    $('.overlay').show();
    $('#call-form').show();
  });
  $('.button-order').click( () => {
    $('.overlay').show();
    $('#order-form').show();
  });
  $('.popup-close').click(() => {
    $('.overlay').hide();
    $('#order-form').hide();
    $('#call-form').hide();
  })
	$('.reviews-wrapper').slick({
    prevArrow: '<button type="button" class="slider-arrow slider-arrow-prev"></button>',
    nextArrow: '<button type="button" class="slider-arrow slider-arrow-next"></button>',
  });
  $('.certificates-wrapper').slick({
    slidesToShow: 3,
    prevArrow: '<button type="button" class="slider-arrow slider-arrow-prev"></button>',
    nextArrow: '<button type="button" class="slider-arrow slider-arrow-next"></button>',
  });
}( jQuery ) );