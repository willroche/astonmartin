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
    	// autoplay: true,
    	infinite: false,
    	slidesToShow: 1,
    	slidesToScroll: 1
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

	$(".listing:nth-child(3n+3)").after( '<div class="h-clearfix"></div>' );


});