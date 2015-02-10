<?php

/*

Plugin Name: Magnifique
Version: 1.0.0

Author: Matt Cram
Author URI: http://mattcram.com/

Description: A simple lightbox based on https://github.com/dimsemenov/Magnific-Popup. The features are few but it works with the builtin WordPress gallery. That's enough for now. 

*/
	
	
/* Register javascript for galleries
-------------------------------------------------------------- */
if (!function_exists('magnifique_scripts')) : function magnifique_scripts() {

	global $post;
	
	if ( has_shortcode( $post->post_content, 'gallery' ) ) {
		

		// magnific lightbox
		wp_enqueue_script( 'magnific', plugins_url( '/js/magnific/magnific.js', __FILE__ ), array('jquery') );
		wp_enqueue_style( 'magnific', plugins_url( '/js/magnific/magnific.css', __FILE__ ) );
		

		// start up lightbox
		wp_enqueue_script( 'init', plugins_url( '/js/init.js', __FILE__ ), array('jquery') );
		
	}

} endif;

add_action('wp_enqueue_scripts', 'magnifique_scripts');