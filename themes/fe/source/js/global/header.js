'use strict';

var $ = require( 'jquery' );

module.exports = function() {

	$(window).scroll(function() {
			var scroll = $(window).scrollTop();

			if (scroll >=100) {
				// At 50px add class to hdr
				$(".hdr").addClass("active");
			} else {
				$(".hdr").removeClass("active");
			}
	});
};