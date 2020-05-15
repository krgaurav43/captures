<?php 
/*This file is part of eyepress child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/
function eyepress_lite_fonts_url() {
	$fonts_url = '';

		$font_families = array();

		$font_families[] = 'Rubik:400,600';
		$font_families[] = 'Roboto+Slab:400,600,700';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );


	return esc_url_raw( $fonts_url );
}


function eyepress_lite_enqueue_child_styles() {
	wp_enqueue_style( 'eyepress-lite-font', eyepress_lite_fonts_url(), array(), null );
	wp_enqueue_style( 'eyepress-lite-parent-style', get_template_directory_uri() . '/style.css',array('bootstrap','eyepress-google-font','slick.min', 'eyepress-default'), '', 'all');
   wp_enqueue_style( 'eyepress-lite-main',get_stylesheet_directory_uri() . '/assets/css/main.css', array(),'1.0.3','all');
  
}
add_action( 'wp_enqueue_scripts', 'eyepress_lite_enqueue_child_styles');


/**
 * Customizer additions.
 */
require get_stylesheet_directory() . '/inc/customizer.php';
