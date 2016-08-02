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
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			pauseOnHover: false,
			autoplay: true,
  			autoplaySpeed: 4000
	});

	var bLazy = new Blazy({ 
        container: ".hero-slick" // Default is window
    });


	jQuery(".hero-slick").on('afterChange', function(event, slick, direction){
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
		jQuery('.search-results form input.form-text').focus();
	});

	jQuery(".button-nav, .i-menu-close").click(function() {
		jQuery("#menu").fadeToggle(300);
		jQuery("body").toggleClass("no-scroll");
	});

	jQuery(".listing:nth-child(3n+4)").after( '<div class="h-clearfix"></div>' );
	
	jQuery( document ).ajaxComplete(function( event,request, settings ) {
		jQuery( ".search-panel:nth-child(3n+4)" ).after( "<div class='h-clearfix'></div>" );
	});

	jQuery("form#newsletterForm").validationEngine('attach',{
	    addFailureCssClassToField: "invalid",
	    onValidationComplete: function(form, status){ // when validate is on and the form scan is completed
	        if (status == true) { // equiv to success everythings is OK
	            jQuery("form#newsletterForm").bind('submit', function(e) {
	                e.preventDefault();
	            });
	            var form = jQuery('#newsletterForm');
	            var data = jQuery('#newsletterForm').serializeArray();
	   
	            jQuery.ajax({
	                url: "https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8",
	                data: data,
	                type: 'post',                 
	                async: 'true',
	                dataType: 'json',
	                success: function(){    
	                   
	                }
	            });	
	            jQuery('form#newsletterForm').find('input:text').val('');
			    jQuery('#salutation').prop('selectedIndex',0);
			    jQuery('#country').prop('selectedIndex',0);
			    jQuery(".confirmationMsg").append("<h2>Thank You</h2><p>Thank you for registering your interest in receiving further information and communications from Aston Martin.</p>");             
	            return false;         
	        }
	        else
	        {
	            jQuery("form#newsletterForm").bind('submit', function(e) {
	                e.preventDefault();
					jQuery(".requiredFields").empty().append("<p>PLEASE ENTER ALL OF THE REQUIRED FIELDS</p>");
	            });
	            
	        }
	    }
	    ,validationEventTrigger:""
	});
});

WebFont.load({
   google: {
     families: ['Lato:400,300,700']
   }
 });

