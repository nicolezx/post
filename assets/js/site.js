$(document).ready(function () {

	// Splash fadeout – auto

	setTimeout(function () {
		// console.log('1000 secs elapsed!');
		// $('.home-splash').fadeOut(1500);
	}, 1000);



	// Splash fadeout – onclick

	$('.home-splash').on('click', function (event) {
		$(this).fadeOut(1500);
	});


	// Menu overlay

	$('.menu-toggle').on('click', function (event) {
		// console.log('Menu button clicked!');
		$('.menu-wrapper').fadeIn(150);
		$('.menu-wrapper').css("display", "flex");
		return false;
	});
	
	$('.menu-close').on('click', function (event) {
		$('.menu-wrapper').fadeOut(150);
		return false;
	});
	


	// Body min height

	// $('.main').css("min-height", )

	// Cart button conditional

// 	if ($('.snipcart-items-count').innerHTML > 0) {
// 		console.log("Cart contains items!"),
// 		// $('.cart-wrapping-details').css("display", "inline")
// } else {
// 		console.log("Cart empty")
// 		// $('.cart-wrapping-details').css("display", "none")
// }


});