jQuery(window).scroll(function() {
	if (jQuery(window).scrollTop() > 100) {
		jQuery('.header').addClass('sticky');
	} else {
		jQuery('.header').removeClass('sticky');
	}
});

jQuery(function() {
	jQuery(".hero-slick").slick({
			dots: true,
			arrows: false,
			// autoplay: true,
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1
	});

	jQuery("#share").jsSocials({
		showLabel: false,
    	showCount: false,
        shares: ["facebook", "twitter", "linkedin", "googleplus"]
  });

	jQuery(".i-search, .i-search-close").click(function() {
		jQuery("#search").fadeToggle(300);
		jQuery("body").toggleClass("no-scroll");
	});

	jQuery(".button-nav, .i-menu-close").click(function() {
		jQuery("#menu").fadeToggle(300);
		jQuery("body").toggleClass("no-scroll");
	});
});

WebFont.load({
   google: {
     families: ['Lato:400,300,700']
   }
 });

 // Init BLazy for lazy loading
 ;(function() {
 	// Initialize
 	var bLazy = new Blazy({
 		loadInvisible: true
 	});
 })();
