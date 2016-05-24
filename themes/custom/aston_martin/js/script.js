jQuery(window).scroll(function() {
	if (jQuery(window).scrollTop() > 100) {
		jQuery('.header').addClass('sticky');
	} else {
		jQuery('.header').removeClass('sticky');
	}
});

jQuery(function() {
	jQuery(".i-search, .i-search-close").click(function() {
		jQuery("#search").fadeToggle(300);
		jQuery("body").toggleClass("no-scroll");
	});

	jQuery(".button-nav, .i-menu-close").click(function() {
		jQuery("#menu").fadeToggle(300);
		jQuery("body").toggleClass("no-scroll");
	});
});
