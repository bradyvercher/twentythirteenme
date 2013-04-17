<?php
/**
 * Theme drop-in to integrate wp-less with the Theme Customizer.
 *
 * LESS should only recompile when it detects file changes, so changing the
 * variables won't have any affect on the front-end. However, that also means
 * changes can't be previewed. The workaround is to load a Theme Customizer
 * style sheet separately *after* the main style sheet has already been loaded
 * so that it won't be recompiled to prevent changes from being made live
 * prematurely.
 */

/**
 * Determine if the live LESS style sheet should be recompiled.
 */
function wpless_customize_manage_stylesheets() {
	global $wp_customize;

	// Force LESS files to recompile on the request after updates are saved via the Theme Customizer.
	if ( ! is_admin() && ( ! $wp_customize || ! $wp_customize->is_preview() ) && get_option( 'wpless_recompile_stylesheet' ) ) {
		add_filter( 'less_force_compile', '__return_true' );
		delete_option( 'wpless_recompile_stylesheet' );
	}

	add_action( 'wp_footer', 'wpless_customize_enqueue_stylesheet' );
}
add_action( 'wp_loaded', 'wpless_customize_manage_stylesheets', 50 );

/**
 * Enqueue the Theme Customizer style sheet.
 *
 * This should only be run after the main style sheet has been output in order
 * to prevent changes from being made live prematurely.
 */
function wpless_customize_enqueue_stylesheet() {
	global $wp_customize;

	// Recompile the Theme Customizer style sheet with a different handle when the Customizer is being used.
	if ( is_admin() || ( $wp_customize && $wp_customize->is_preview() ) ) {
		add_filter( 'less_force_compile', '__return_true' );

		wp_enqueue_style( 'wp-less-customize', get_stylesheet_directory_uri() . '/styles/colors.less' );
	}
}

/**
 * Set a flag to recompile the live style sheet when the Theme Customizer
 * changes are saved.
 */
function wpless_recompile_main_stylesheet() {
	update_option( 'wpless_recompile_stylesheet', 1 );
}
add_action( 'customize_save', 'wpless_recompile_main_stylesheet' );
