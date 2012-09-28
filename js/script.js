// Global Variables
var flagOn = false;

// On Document Load
$(document).ready(function () {

    $('#slider').nivoSlider({
		controlNav: false,
		directionNav: false,
		pauseOnHover: false,
		effect: 'boxRandom',
		pauseTime: 4000,
		animSpeed: 1000
	});

	navSlide();
	
	Shadowbox.init({
		modal: false,
		displayNav: true,
		displayCounter: false
	});
	
	$('.flickr ul').jflickrfeed({
		limit: 20,
		qstrings: {
			id: '30982401@N02'
		},
		itemTemplate: '<li><a href="{{image}}" rel="shadowbox[Flickr]"><img class="grid_1 desat" src="{{image_s}}" height="60" width="60" /></a></li>'
	}, function() {
		$('.flickr').jCarouselLite({
			        btnNext: ".next",
			        btnPrev: ".prev",
					visible: 10
			    		});
					
	});
	
	$("#tweet").tweet({
        	username: "many_hopes",
			count: 1,
        	loading_text: "searching twitter..."
	        });
	
    // Project Map Tooltips
    $('area[alt]').qtip(
    {
        content: {
			title: {
				text: function(api) {
					// Retrieve content from ALT attribute of the $('.selector') element
					return $(this).attr('title');
				}
			},	
			attr: 'alt' // Use the ALT attribute of the area map for the content
		},	
        style: {
            classes: 'ui-tooltip-tipsy ui-tooltip-shadow'
        }
    });

});

// On Scroll
$(document).scroll(function() {
	var threshold = $('#main-bar').offset().top + $('#main-bar').height();
	if( $(document).scrollTop() > threshold && !flagOn) {
		toggleFlag('on');
	} else if( $(document).scrollTop() < threshold && flagOn) {
		toggleFlag('off');
	}
})

// Custom Functions

function sendMail(email) {
	window.location.replace("mailto:"+ email + "?subject=I want to help");
	
}

function toggleFlag(state) {	
	if(state == 'on') {
		$("#meta-logo").animate({top: '0px'});
		flagOn = true;
	} else if (state == 'off') {
		$("#meta-logo").animate({top: '-50px'})
		flagOn = false;
	};
}

function navSlide() {
	
	puck = $("#on img");
	start_x = 9;
	margin = 30;
	
	$('#main-nav li, #main-nav lh').each(function(index) {
			
		if($(this).hasClass('current')) {
			
			var offset =  $(this).width()/2;
			start_x = $(this).position().left + offset - margin;
			$(puck).css('left', start_x);
		
		} else { 
			
			var offset =  $(this).width()/2;
			var new_x = $(this).position().left + offset - margin;
			
			// If Home, leave it be.
			if($(this).hasClass('home')) { new_x = start_x};
				
			$(this).hover(
			  function () {
			    $(puck).stop().animate({left: new_x}, 500)
			  }, 
			  function () {
			    $(puck).stop().animate({left: start_x}, 500)
			  }		
			);
		 };
	});
}

function initCarousel() {
	$('.flickr').jCarouselLite({
        btnNext: ".next",
        btnPrev: ".prev",
		visible: 10
    });
}
