( function( $ ) {
  $('.header-branding-search').click( () => {
    $('.overlay').show();
  });
  $('.popup-close').click(() => {
    $('.overlay').hide();
  })
	$('.reviews-wrapper').slick({
    prevArrow: '<button type="button" class="slider-arrow slider-arrow-prev"></button>',
    nextArrow: '<button type="button" class="slider-arrow slider-arrow-next"></button>',
  });
}( jQuery ) );