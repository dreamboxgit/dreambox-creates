<?php
function siiimple_enqueue_scripts() {
	
	if(!is_admin()){
		
		wp_deregister_script( 'jquery' );
		
		wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js');
		
		wp_enqueue_script( 'foundation', SIIIMPLE_JS .'/foundation.js', array('jquery'));
		
		wp_enqueue_script( 'app', SIIIMPLE_JS .'/app.js', array('jquery'));
		
		wp_enqueue_script( 'easing', SIIIMPLE_JS .'/jquery.easing.1.3.js', array('jquery'));
		
		wp_enqueue_script( 'custom', SIIIMPLE_JS .'/custom.js', array('jquery'));
		
		wp_enqueue_script( 'superfish', SIIIMPLE_JS .'/superfish.js', array('jquery'));
		
		wp_enqueue_script( 'supersubs', SIIIMPLE_JS .'/supersubs.js', array('jquery'));
		
		wp_enqueue_script( 'twipsy', SIIIMPLE_JS .'/bootstrap-twipsy.js', array('jquery'));
		
		wp_enqueue_script( 'popover', SIIIMPLE_JS .'/bootstrap-popover.js', array('jquery'));
		
		wp_enqueue_script( 'mousewheel', SIIIMPLE_JS .'/jquery.mousewheel.js', array('jquery'));
		
		wp_enqueue_script( 'flex', SIIIMPLE_JS .'/jquery.flexslider-min.js', array('jquery'));
		
		wp_enqueue_script( 'isotope', SIIIMPLE_JS .'/jquery.isotope.min.js', array('jquery'));
		
		wp_enqueue_script( 'fancybox', SIIIMPLE_JS .'/jquery.fancybox-1.3.4.pack.js', array('jquery'));
		
		wp_enqueue_script( 'eastislide', SIIIMPLE_JS .'/jquery.elastislide.js', array('jquery'));
		
		wp_enqueue_script( 'fitvids', SIIIMPLE_JS .'/jquery.fitvids.js', array('jquery'));
		
		}
}
add_action('wp_print_scripts', 'siiimple_enqueue_scripts');
add_action('wp_print_styles', 'siiimple_enqueue_scripts');
?>