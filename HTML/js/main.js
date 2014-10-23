$( document ).ready(function() {
	
	// Stick Header Top Top
	$('.navbar-wrapper').waypoint('sticky');

	// Shrink Header
	$('header').waypoint(function(direction) {
		$(this).toggleClass('shrink-header', direction === 'down');
	}, { offset: -55 });
		
	// Initialize Main Carousel
	$('.carousel').carousel({
		interval: 15000
	});
 	
 	// Parallax Background Effect
 	$.stellar({
		horizontalScrolling: false,
		verticalOffset: 40
	});
	
	// Toggle Animation
	$('.toggle label').on('click', function(){
	    var answer = $(this).next('.answer');
	    
	    if(!$(answer).is(":visible")) {
	      $(this).parent().addClass('active');
	    } else {
	      $(this).parent().removeClass('active');
	    }
	    $(answer).slideToggle(300);
	  });
						
	// Initialize PrettyPhoto for gallery
	$("a[rel^='prettyPhoto']").prettyPhoto({
		theme: 'facebook',
		slideshow:5000, 
		autoplay_slideshow:false,
		show_title: false,
		theme: 'light_square',
		social_tools: false,
		overlay_gallery: false 
	});
	
	// Expand Portfolio Button
	$('.toggle-portfolio').click(function(event) {
		event.preventDefault();
		$("a[rel^='prettyPhoto']:first").click();
	});
	
	// Animate Progress Bars
	$('.line-graph').waypoint(function() {
		$('.graph-item .animated-bar').each(function(){
			var setWidth = $(this).attr('aria-valuenow');
			$(this).width(setWidth + '%');
		});
	}, { offset: 400 });
	
	// Animation Page
	$(".animated.repeat").on('click', function() {
		$(this).addClass("clicked");
	});
	
	// Scroll To Top
	$('footer').waypoint(function() {
		$('.scroll-to-top').toggleClass('visible');
	}, { offset: 500 });
	
	$('.scroll-to-top').on('click', function () {
        $("html, body").animate({
            scrollTop: 0
        }, 500);
        return false;
    });
    
    // Intialize Mix It Up			
	$('#portfolio-container').mixItUp();
	$('.portfolio .controls a').on('click', function(e){
		e.preventDefault();
	});

	// Intialize GMaps
    var map = new GMaps({
        el: '#map',
        lat: 33.7863164,
        lng: -84.3837829,
        zoomControl : true,
        zoomControlOpt: {
            style : 'SMALL',
            position: 'TOP_LEFT'
        },
        panControl : false,
        streetViewControl : false,
        mapTypeControl: false,
        overviewMapControl: false,
        scrollwheel: false
    });
    
    map.addMarker({
	  lat: 33.7863164,
      lng: -84.3837829,
	  title: 'Our Office'
	});

});