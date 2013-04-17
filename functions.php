<?php
/**
 * Twenty Thirteen ME functions and definitions.
 *
 * @package WordPress
 * @subpackage TwentyThirteenME
 */

require( get_stylesheet_directory() . '/includes/wp-less/wp-less.php' );
require( get_stylesheet_directory() . '/includes/wp-less-customize.php' );
require( get_stylesheet_directory() . '/includes/theme-options.php' );

/**
 * Dequeue the default Twenty Thirteen style sheet and enqueue from the parent
 * theme.
 *
 * This could be reconfigured so all styles are compiled into a single file to
 * save a request.
 */
function twentythirteenme_enqueue_scripts() {
	wp_dequeue_style( 'twentythirteen-style' );
	wp_deregister_style( 'twentythirteen-style' );

	wp_enqueue_style( 'twentythirteen-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'twentythirteenme-colors', get_stylesheet_directory_uri() . '/styles/colors.less' );
}
add_action( 'wp_enqueue_scripts', 'twentythirteenme_enqueue_scripts', 20 );
