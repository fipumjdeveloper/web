/*
 * javascript mod
 *
 * Copyright 2014.
 * Designed and built by M.Syukri.
 * Web Design | Wirekom
 * 
 */
$(document).ready(function(){
	// delegate calls to data-toggle="lightbox"
	$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
		event.preventDefault();
		return $(this).ekkoLightbox({
			always_show_close: true
		});
	});
	$('.about a').click(function(){
	    $('.about a').removeClass("active");
	    $(this).addClass("active");
	});
	/* Scroll paralax */
	$('a[href*=#]:not([href=#])').click(function() 
	  {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
	        || location.hostname == this.hostname) 
	    {
	      
	      var target = $(this.hash),
	            
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	              
	      if (target.length) 
	      {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 500);
	        return false;
	      }
	    }
	  });

	/* Date*/
	$( "#datepicker" ).datepicker({
		inline: true,
		changeMonth: true,
		changeYear: true,
		showAnim: "slide",
	});
	
	/* Back to top scroll */
	$(window).scroll(function(){
		if ($(this).scrollTop() > 300) { $('.scrollup').slideDown(); } else { $('.scrollup').slideUp(); }
	}); 
	$('.scrollup').click(function(){
		$("html, body").stop().animate({ scrollTop: 0 }, 900);
		return false;
	});
	
	/* End Back to top scroll */
var width = $(window).width();
	if (width <= 979){ 
		
	};
});