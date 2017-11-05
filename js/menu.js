jQuery( document ).ready(function($) {

  //
	// Open/close menu
  //
	$('.hamburger').on('click', function() {

		$('.hamburger').toggleClass('is-active');
		$('.main-navigation').toggleClass('open');

	});

});//end document ready jquery $ wrapper
