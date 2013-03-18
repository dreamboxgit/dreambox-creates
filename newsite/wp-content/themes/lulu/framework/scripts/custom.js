jQuery(document).ready(function() {	

$("#fitvid").fitVids();

// Elastislide 
$('#carousel').elastislide({
				imageW 		: 123,
				minItems	: 7,
				easing		: 'easeInBack'
			});
			
			
// Isotope
var $container = $('#isotope2');
      var $isoID = $('#filters .active').attr('data-filter');

	  $container.isotope({
		itemSelector: '.four',
		animationEngine: 'jquery',
		animationOptions: {
		duration: 350,
		easing: 'linear',
		queue: true
		}
	  });
	  $container.isotope({ filter: $isoID });

	$('#filters li a').click(function() {
		$('#filters li a').removeClass('active');
		$(this).addClass('active');
		$isoID = $(this).attr('data-filter');
		$container.isotope({ filter: $isoID });
		return false;
	});


//Shortcodes
jQuery(".toggle_content").hide(); 

//Switch the "Open" and "Close" state per click
jQuery("h3.toggle").toggle(function(){
jQuery(this).addClass("active");
}, function () {
jQuery(this).removeClass("active");
});

//Slide up and down on click
jQuery("h3.toggle").click(function(){
jQuery(this).next(".toggle_content").slideToggle();
});


//Superfish
$("ul.sf-menu")

.supersubs({ 
minWidth:    12,   // minimum width of sub-menus in em units 
maxWidth:    20,   // maximum width of sub-menus in em units 
extraWidth:  1     // extra width can ensure lines don't sometimes turn over 
})

.superfish({ 
delay:       300,                            // one second delay on mouseout 
speed:       'fast',                          // faster animation speed 
autoArrows:  true,                           // disable generation of arrow mark-up 
dropShadows: false                            // disable drop shadows 
});


// FLEX
$('.flexslider').flexslider({
				  animation: "slide",
				  slideshow: true,
				  controlNav: true,
				  controlsContainer: ".flex-container"
			  });

		
			  

//TWIPSY BOTTOM             
$("a[rel=external]").twipsy({
                live: true,
                offset: 15
              });
              
$("[rel=external]").twipsy({
                live: true,
                offset: 0
              });
              
$("a[rel=alternate]")
                .popover({
                	html: true,
                  offset: 10
                })
                
                //.click(function(e) {
                 // e.preventDefault()
                //})


//FANCYBOX
$("a.zoom").fancybox({
				'overlayShow'	: true,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic'
			});

//End
});	