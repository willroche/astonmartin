// Init BLazy for lazy loading
;(function() {
	// Initialize
	var bLazy = new Blazy({
		loadInvisible: true
	});
})();

// Sticky header
$(window).scroll(function() {
	if ($(window).scrollTop() > 100) {
		$('.header').addClass('sticky');
	} else {
		$('.header').removeClass('sticky');
	}
});


$(function() {

	$(".hero-slick").slick({
    	dots: true,
    	arrows: false,
    	infinite: false,
    	slidesToShow: 1,
    	slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000
	});

	// Toggle class on nav stripes
	// $(".button-nav").click(function(){
	// 	$(".button-nav").toggleClass("open");
	// });

	$(".i-search, .i-search-close").click(function() {
		$("#search").fadeToggle(300);
		$("body").toggleClass("no-scroll");
	});

	$(".button-nav, .i-menu-close").click(function() {
		$("#menu").fadeToggle(300);
		$("body").toggleClass("no-scroll");
	});

	$(".listing:nth-child(4n+3)").after( '<div class="h-clearfix"></div>' );

	$(".video-adapt").fitVids();

	$("#share").jsSocials({
		showLabel: false,
    	showCount: false,
        shares: ["facebook", "twitter", "linkedin", "googleplus"]
    });

});