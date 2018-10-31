$ = jQuery;
$(document).ready(function() {
  jQuery('#menu-main-menu > li').addClass('nav-item');
  jQuery('#menu-main-menu > li > a').addClass('nav-link');
  	jQuery(document).scroll(function(){
    	if (jQuery(document).scrollTop()>300) {
    		jQuery('.nav-overlay').addClass("menu-scroll");
        jQuery('.top-header').css('display', 'none');
    	}
    	else{
    		jQuery('.nav-overlay').removeClass("menu-scroll");
        jQuery('.top-header').css('display', 'block');
    	}
	});

});
