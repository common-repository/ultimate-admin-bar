jQuery(document).ready(function(){
	if ( !jQuery('body').hasClass('folded') ) {
  		jQuery('body').addClass('folded')
  	}

	var width = jQuery('#wp-admin-bar-site-name').width() + jQuery('#wp-admin-bar-updates').width() + 49;
	
	jQuery('#adminmenu').css("margin-left", width);

	var adminbarwidth = jQuery('#wpadminbar').width();

	var occupiedwidth = width + jQuery('#wp-admin-bar-my-account').width();

	var percentage = (100 - ((occupiedwidth / adminbarwidth) * 100))+'%'; 

	jQuery('.folded #adminmenu').css('width', percentage);

});