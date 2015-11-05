/**
 * Slide Box : a jQuery Plug-in
 * Samuel Garneau <samgarneau@gmail.com>
 * http://samgarneau.com
 * 
 * Released under no license, just use it where you want and when you want.
 */

(function(jQuery){
	
	jQuery.fn.slideBox = function(params){
	
		var content = jQuery(this).html();
		var defaults = {
			width: "100%",
			height: "250px",
			position: "bottom"			// Possible values : "top", "bottom"
		}
		
		// extending the fuction
		if(params) jQuery.extend(defaults, params);
		
		var divPanel = jQuery("<div class='slide-panel'>");
		var divContent = jQuery("<div class='content'>");
	
		jQuery(divContent).html(content);
		jQuery(divPanel).addClass(defaults.position);
		jQuery(divPanel).css("width", defaults.width);
		
		// centering the slide panel
		jQuery(divPanel).css("left", (100 - parseInt(defaults.width))/2 + "%");
	
		// if position is top we're adding 
		if(defaults.position == "top")
			jQuery(divPanel).append(jQuery(divContent));
		
		// adding buttons
		jQuery(divPanel).append("<div class='slide-button'>Open</div>");
		jQuery(divPanel).append("<div style='display: none' id='close-button' class='slide-button'>Close</div>");
		
		if(defaults.position == "bottom")
			jQuery(divPanel).append(jQuery(divContent));
		
		jQuery(this).replaceWith(jQuery(divPanel));
		
		// Buttons action
		jQuery(".slide-button").click(function(){
			if(jQuery(this).attr("id") == "close-button")
				jQuery(divContent).animate({height: "0px"}, 1000);
			else
				jQuery(divContent).animate({height: defaults.height}, 1000);
			
			jQuery(".slide-button").toggle();
		});
	};
	
})(jQuery);