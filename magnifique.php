<?php

/*

	Plugin Name: Magnifique
	Version: 1.0.0
	
	Author: Matt Cram
	Author URI: http://mattcram.com/

	GitHub Theme URI: https://github.com/cramdesign/Magnifique

	Description: A simple lightbox based on https://github.com/dimsemenov/Magnific-Popup. The features are few but it works with the builtin WordPress gallery. That's enough for now. 

*/
	
	
/* Register javascript for galleries
-------------------------------------------------------------- */
if ( !function_exists( 'magnifique_scripts' ) ) : function magnifique_scripts() {

	if ( have_posts() ) : while ( have_posts() ) : the_post();
	
		if ( has_shortcode( get_the_content(), 'gallery' ) ) :
			
	
			// magnific lightbox
			wp_enqueue_script( 'magnific', plugins_url( '/js/magnific/magnific.js', __FILE__ ), array('jquery') );
			wp_enqueue_style( 'magnific', plugins_url( '/js/magnific/magnific.css', __FILE__ ) );
			
	
			// start up lightbox
			wp_enqueue_script( 'init', plugins_url( '/js/init.js', __FILE__ ), array('jquery') );
			
			
		endif;
		
	endwhile; endif;
	rewind_posts();
	
} endif;

add_action( 'wp_enqueue_scripts', 'magnifique_scripts' );