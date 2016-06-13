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
			lazyLoad: 'ondemand',
			infinite: false,
			slidesToShow: 1,
			slidesToScroll: 1
	});

	var bLazy = new Blazy({ 
        container: '.hero-slick' // Default is window
    });


	jQuery('.hero-slick').on('afterChange', function(event, slick, direction){
	  bLazy.revalidate();
	  // left
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

	jQuery(".listing:nth-child(3n+4)").after( '<div class="h-clearfix"></div>' );
	
	jQuery( document ).ajaxComplete(function( event,request, settings ) {
		jQuery( ".search-panel:nth-child(3n+4)" ).after( "<div class='h-clearfix'></div>" );
	});

});

WebFont.load({
   google: {
     families: ['Lato:400,300,700']
   }
 });
