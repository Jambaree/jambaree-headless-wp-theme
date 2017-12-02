jQuery( document ).ready(function($) {

  //
	// Open/close menu
  //
	$('.hamburger').on('click', function() {

		$('.hamburger').toggleClass('is-active');
		$('.header-menu__menu').toggleClass('open');

	});

});//end document ready jquery $ wrapper
