<?php
/**
 * Example file for registering theme colors and making them available to the
 * Theme Customizer and LESS.
 */

/**
 * Convenient method for defining colors used by the theme in a single location.
 *
 * @return array
 */
function twentythirteenme_colors() {
	$colors = array(
		'header-bg'                 => array( 'default' => '#ffffff', 'label' => __( 'Header Background', 'twentythirteenme' ),                   'subsection' => __( 'Global Colors', 'twentythirteenme' ) ),
		'page-header-bg'            => array( 'default' => '#e8e5ce', 'label' => __( 'Page Heading Background', 'twentythirteenme' ),             'subsection' => __( 'Global Colors', 'twentythirteenme' ) ),
		'page-header-text'          => array( 'default' => '#141412', 'label' => __( 'Page Heading Text', 'twentythirteenme' ),                   'subsection' => __( 'Global Colors', 'twentythirteenme' ) ),
		'content-bg'                => array( 'default' => '#ffffff', 'label' => __( 'Content Background', 'twentythirteenme' ),                  'subsection' => __( 'Global Colors', 'twentythirteenme' ) ),
		'text'                      => array( 'default' => '#141412', 'label' => __( 'Text', 'twentythirteenme' ),                                'subsection' => __( 'Global Colors', 'twentythirteenme' ) ),
		'links'                     => array( 'default' => '#ca3c08', 'label' => __( 'Links', 'twentythirteenme' ),                               'subsection' => __( 'Global Colors', 'twentythirteenme' ) ),
		'links-hover'               => array( 'default' => '#ea9629', 'label' => __( 'Links Hover', 'twentythirteenme' ),                         'subsection' => __( 'Global Colors', 'twentythirteenme' ) ),
		'links-visited'             => array( 'default' => '#ac0404', 'label' => __( 'Links Visited', 'twentythirteenme' ),                       'subsection' => __( 'Global Colors', 'twentythirteenme' ) ),
		'titles'                    => array( 'default' => '#141412', 'label' => __( 'Titles', 'twentythirteenme' ),                              'subsection' => __( 'Global Colors', 'twentythirteenme' ) ),

		'main-nav-bg'               => array( 'default' => '#f7f5e7', 'label' => __( 'Navigation Background', 'twentythirteenme' ),               'subsection' => __( 'Navigation Colors', 'twentythirteenme' ) ),
		'main-nav-links'            => array( 'default' => '#141412', 'label' => __( 'Navigation Links', 'twentythirteenme' ),                    'subsection' => __( 'Navigation Colors', 'twentythirteenme' ) ),
		'main-nav-links-hover'      => array( 'default' => '#ffffff', 'label' => __( 'Navigation Links Hover', 'twentythirteenme' ),              'subsection' => __( 'Navigation Colors', 'twentythirteenme' ) ),
		'main-nav-links-hover-bg'   => array( 'default' => '#220e10', 'label' => __( 'Navigation Links Hover Background', 'twentythirteenme' ),   'subsection' => __( 'Navigation Colors', 'twentythirteenme' ) ),
		'main-nav-submenu-hover-bg' => array( 'default' => '#db572f', 'label' => __( 'Navigation Submenu Hover Background', 'twentythirteenme' ), 'subsection' => __( 'Navigation Colors', 'twentythirteenme' ) ),

		'paging-nav-bg'             => array( 'default' => '#e8e5ce', 'label' => __( 'Paging Navigation Background', 'twentythirteenme' ),        'subsection' => __( 'Pagination Colors', 'twentythirteenme' ) ),
		'paging-nav-links'          => array( 'default' => '#bc360a', 'label' => __( 'Paging Navigation Links', 'twentythirteenme' ),             'subsection' => __( 'Pagination Colors', 'twentythirteenme' ) ),
		'paging-nav-links-hover'    => array( 'default' => '#ea9629', 'label' => __( 'Paging Navigation Links Hover', 'twentythirteenme' ),       'subsection' => __( 'Pagination Colors', 'twentythirteenme' ) ),
		'paging-arrows-bg'          => array( 'default' => '#e63f2a', 'label' => __( 'Paging Arrows Background', 'twentythirteenme' ),            'subsection' => __( 'Pagination Colors', 'twentythirteenme' ) ),
		'paging-arrows-bg-hover'    => array( 'default' => '#ea9629', 'label' => __( 'Paging Arrows Background Hover', 'twentythirteenme' ),      'subsection' => __( 'Pagination Colors', 'twentythirteenme' ) ),
		'paging-arrows-text'        => array( 'default' => '#ffffff', 'label' => __( 'Paging Arrows Text', 'twentythirteenme' ),                  'subsection' => __( 'Pagination Colors', 'twentythirteenme' ) ),

		'comment-form-bg'           => array( 'default' => '#f7f5e7', 'label' => __( 'Comment Form Background', 'twentythirteenme' ),             'subsection' => __( 'Comment Colors', 'twentythirteenme' ) ),
		'comment-form-text'         => array( 'default' => '#141412', 'label' => __( 'Comment Form Text', 'twentythirteenme' ),                   'subsection' => __( 'Comment Colors', 'twentythirteenme' ) ),
		'comment-form-links'        => array( 'default' => '#141412', 'label' => __( 'Comment Form Links', 'twentythirteenme' ),                  'subsection' => __( 'Comment Colors', 'twentythirteenme' ) ),
		'form-allowed-tags'         => array( 'default' => '#686758', 'label' => __( 'Allowed Tags Text', 'twentythirteenme' ),                   'subsection' => __( 'Comment Colors', 'twentythirteenme' ) ),

		'footer-bg'                 => array( 'default' => '#e8e5ce', 'label' => __( 'Footer Background', 'twentythirteenme' ),                   'subsection' => __( 'Footer Colors', 'twentythirteenme' ) ),
		'footer-text'               => array( 'default' => '#686758', 'label' => __( 'Footer Text', 'twentythirteenme' ),                         'subsection' => __( 'Footer Colors', 'twentythirteenme' ) ),
		'footer-links'              => array( 'default' => '#686758', 'label' => __( 'Footer Links', 'twentythirteenme' ),                        'subsection' => __( 'Footer Colors', 'twentythirteenme' ) ),

		'footer-widgets-bg'         => array( 'default' => '#220e10', 'label' => __( 'Footer Widgets Background', 'twentythirteenme' ),           'subsection' => __( 'Footer Colors', 'twentythirteenme' ) ),
		'footer-widgets-text'       => array( 'default' => '#ffffff', 'label' => __( 'Footer Widgets Text', 'twentythirteenme' ),                 'subsection' => __( 'Footer Colors', 'twentythirteenme' ) ),
		'footer-widgets-links'      => array( 'default' => '#e6402a', 'label' => __( 'Footer Widgets Links', 'twentythirteenme' ),                'subsection' => __( 'Footer Colors', 'twentythirteenme' ) ),

		// Post formats.

		'format-aside-bg'           => array( 'default' => '#f7f5e7', 'label' => __( 'Background', 'twentythirteenme' ), 'section' => 'format_colors', 'subsection' => __( 'Aside Colors', 'twentythirteenme' ) ),
		'format-aside-text'         => array( 'default' => '#141412', 'label' => __( 'Text', 'twentythirteenme' ),       'section' => 'format_colors', 'subsection' => __( 'Aside Colors', 'twentythirteenme' ) ),
		'format-aside-links'        => array( 'default' => '#ca3c08', 'label' => __( 'Links', 'twentythirteenme' ),      'section' => 'format_colors', 'subsection' => __( 'Aside Colors', 'twentythirteenme' ) ),

		'format-audio-bg'           => array( 'default' => '#db572f', 'label' => __( 'Background', 'twentythirteenme' ), 'section' => 'format_colors', 'subsection' => __( 'Audio Colors', 'twentythirteenme' ) ),
		'format-audio-title'        => array( 'default' => '#141412', 'label' => __( 'Title', 'twentythirteenme' ),      'section' => 'format_colors', 'subsection' => __( 'Audio Colors', 'twentythirteenme' ) ),
		'format-audio-text'         => array( 'default' => '#141412', 'label' => __( 'Text', 'twentythirteenme' ),       'section' => 'format_colors', 'subsection' => __( 'Audio Colors', 'twentythirteenme' ) ),
		'format-audio-links'        => array( 'default' => '#fbfaf3', 'label' => __( 'Links', 'twentythirteenme' ),      'section' => 'format_colors', 'subsection' => __( 'Audio Colors', 'twentythirteenme' ) ),

		'format-chat-bg'            => array( 'default' => '#eadaa6', 'label' => __( 'Background', 'twentythirteenme' ), 'section' => 'format_colors', 'subsection' => __( 'Chat Colors', 'twentythirteenme' ) ),
		'format-chat-title'         => array( 'default' => '#141412', 'label' => __( 'Title', 'twentythirteenme' ),      'section' => 'format_colors', 'subsection' => __( 'Chat Colors', 'twentythirteenme' ) ),
		'format-chat-text'          => array( 'default' => '#141412', 'label' => __( 'Text', 'twentythirteenme' ),       'section' => 'format_colors', 'subsection' => __( 'Chat Colors', 'twentythirteenme' ) ),
		'format-chat-links'         => array( 'default' => '#722d19', 'label' => __( 'Links', 'twentythirteenme' ),      'section' => 'format_colors', 'subsection' => __( 'Chat Colors', 'twentythirteenme' ) ),

		'format-gallery-bg'         => array( 'default' => '#fbca3c', 'label' => __( 'Background', 'twentythirteenme' ), 'section' => 'format_colors', 'subsection' => __( 'Gallery Colors', 'twentythirteenme' ) ),
		'format-gallery-title'      => array( 'default' => '#141412', 'label' => __( 'Title', 'twentythirteenme' ),      'section' => 'format_colors', 'subsection' => __( 'Gallery Colors', 'twentythirteenme' ) ),
		'format-gallery-text'       => array( 'default' => '#141412', 'label' => __( 'Text', 'twentythirteenme' ),       'section' => 'format_colors', 'subsection' => __( 'Gallery Colors', 'twentythirteenme' ) ),
		'format-gallery-links'      => array( 'default' => '#722d19', 'label' => __( 'Links', 'twentythirteenme' ),      'section' => 'format_colors', 'subsection' => __( 'Gallery Colors', 'twentythirteenme' ) ),

		'format-image-bg'           => array( 'default' => '#ffffff', 'label' => __( 'Background', 'twentythirteenme' ), 'section' => 'format_colors', 'subsection' => __( 'Image Colors', 'twentythirteenme' ) ),
		'format-image-title'        => array( 'default' => '#141412', 'label' => __( 'Title', 'twentythirteenme' ),      'section' => 'format_colors', 'subsection' => __( 'Image Colors', 'twentythirteenme' ) ),
		'format-image-text'         => array( 'default' => '#141412', 'label' => __( 'Text', 'twentythirteenme' ),       'section' => 'format_colors', 'subsection' => __( 'Image Colors', 'twentythirteenme' ) ),
		'format-image-links'        => array( 'default' => '#ca3c08', 'label' => __( 'Links', 'twentythirteenme' ),      'section' => 'format_colors', 'subsection' => __( 'Image Colors', 'twentythirteenme' ) ),

		'format-link-bg'            => array( 'default' => '#f7f5e7', 'label' => __( 'Background', 'twentythirteenme' ), 'section' => 'format_colors', 'subsection' => __( 'Link Colors', 'twentythirteenme' ) ),
		'format-link-title'         => array( 'default' => '#bc360a', 'label' => __( 'Title', 'twentythirteenme' ),      'section' => 'format_colors', 'subsection' => __( 'Link Colors', 'twentythirteenme' ) ),
		'format-link-text'          => array( 'default' => '#141412', 'label' => __( 'Text', 'twentythirteenme' ),       'section' => 'format_colors', 'subsection' => __( 'Link Colors', 'twentythirteenme' ) ),
		'format-link-links'         => array( 'default' => '#ca3c08', 'label' => __( 'Links', 'twentythirteenme' ),      'section' => 'format_colors', 'subsection' => __( 'Link Colors', 'twentythirteenme' ) ),

		'format-quote-bg'           => array( 'default' => '#210d10', 'label' => __( 'Background', 'twentythirteenme' ), 'section' => 'format_colors', 'subsection' => __( 'Quote Colors', 'twentythirteenme' ) ),
		'format-quote-text'         => array( 'default' => '#f7f5e7', 'label' => __( 'Text', 'twentythirteenme' ),       'section' => 'format_colors', 'subsection' => __( 'Quote Colors', 'twentythirteenme' ) ),
		'format-quote-links'        => array( 'default' => '#e63f2a', 'label' => __( 'Links', 'twentythirteenme' ),      'section' => 'format_colors', 'subsection' => __( 'Quote Colors', 'twentythirteenme' ) ),

		'format-status-bg'          => array( 'default' => '#722d19', 'label' => __( 'Background', 'twentythirteenme' ), 'section' => 'format_colors', 'subsection' => __( 'Status Colors', 'twentythirteenme' ) ),
		'format-status-text'        => array( 'default' => '#f7f5e7', 'label' => __( 'Text', 'twentythirteenme' ),       'section' => 'format_colors', 'subsection' => __( 'Status Colors', 'twentythirteenme' ) ),
		'format-status-links'       => array( 'default' => '#eadaa6', 'label' => __( 'Links', 'twentythirteenme' ),      'section' => 'format_colors', 'subsection' => __( 'Status Colors', 'twentythirteenme' ) ),
		'format-status-meta-links'  => array( 'default' => '#f7f5e7', 'label' => __( 'Meta Links', 'twentythirteenme' ), 'section' => 'format_colors', 'subsection' => __( 'Status Colors', 'twentythirteenme' ) ),

		'format-video-bg'           => array( 'default' => '#db572f', 'label' => __( 'Background', 'twentythirteenme' ), 'section' => 'format_colors', 'subsection' => __( 'Video Colors', 'twentythirteenme' ) ),
		'format-video-title'        => array( 'default' => '#141412', 'label' => __( 'Title', 'twentythirteenme' ),      'section' => 'format_colors', 'subsection' => __( 'Video Colors', 'twentythirteenme' ) ),
		'format-video-text'         => array( 'default' => '#220e10', 'label' => __( 'Text', 'twentythirteenme' ),       'section' => 'format_colors', 'subsection' => __( 'Video Colors', 'twentythirteenme' ) ),
		'format-video-links'        => array( 'default' => '#fbfaf3', 'label' => __( 'Links', 'twentythirteenme' ),      'section' => 'format_colors', 'subsection' => __( 'Video Colors', 'twentythirteenme' ) ),
	);

	return apply_filters( 'twentythirteenme_colors', $colors );
}

/**
 * Register Theme Customizer sections, settings and controls.
 */
function twentythirteenme_customize_register( $manager ) {
	include( get_stylesheet_directory() . '/includes/customize-controls.php' );

	$colors = twentythirteenme_colors();

	if ( ! empty( $colors ) && is_array( $colors ) ) {
		// Register sections.
		$manager->add_section( 'format_colors', array(
			'title'    => __( 'Post Format Colors', 'twentythirteenme' ),
			'priority' => 45,
		) );

		$priority = 10;
		$subsection_key = '';

		foreach ( $colors as $key => $color ) {
			// Register subsections.
			if ( ! empty( $color['subsection'] ) && sanitize_key( $color['subsection'] ) != $subsection_key ) {
				$subsection_key = sanitize_key( $color['subsection'] );

				$manager->add_setting( 'twentythirteenme_dividers', array(
					'type'       => 'option',
					'capability' => 'edit_theme_options',
				) );

				$manager->add_control( new TwentyThirteenME_Customize_Subsection_Control( $manager, 'twentythirteenme_dividers_' . $subsection_key, array(
					'label'    => $color['subsection'],
					'section'  => ( empty( $color['section'] ) ) ? 'colors' : $color['section'],
					'settings' => 'twentythirteenme_dividers',
					'priority' => $priority - 1,
				) ) );
			}

			// Register settings.
			$id = sanitize_key( $key );

			$manager->add_setting( 'twentythirteenme_colors[' . $id . ']', array(
				'default'           => $color['default'],
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$manager->add_control( new WP_Customize_Color_Control( $manager, 'twentythirteenme_colors_' . $id, array(
				'label'    => wp_strip_all_tags( $color['label'] ),
				'section'  => ( empty( $color['section'] ) ) ? 'colors' : $color['section'],
				'settings' => 'twentythirteenme_colors[' . $id . ']',
				'type'     => 'color',
				'priority' => ( ! empty( $color['priority'] ) ) ? $color['priority'] : $priority,
			) ) );

			$priority += 10;
		}
	}
}
add_action( 'customize_register', 'twentythirteenme_customize_register' );

/**
 * Register variables for use in LESS style sheets.
 *
 * A hook is provided to register additional LESS variables.
 *
 * Runs on the same hook as 'customize_register', but at a lower priority.
 */
function twentythirteenme_register_less_vars() {
	// Always points to the parent theme.
	add_less_var( 'templateurl', '~"' . get_template_directory_uri() . '/"' );

	// Register color variables.
	// Check for a saved value, or fall back to the default.
	$colors = twentythirteenme_colors();
	$saved = get_option( 'twentythirteenme_colors' );

	if ( ! empty( $colors ) && is_array( $colors ) ) {
		foreach ( $colors as $key => $color ) {
			$id = sanitize_key( $key );
			$value = ( ! empty( $saved[ $id ] ) ) ? $saved[ $id ] : $color['default'];

			// Color variables are prefixed with 'color-'.
			add_less_var( 'color-' . $id, $value );
		}
	}

	// Action to register additional LESS variables.
	do_action( 'twentythirteenme_register_less_vars' );
}
add_action( 'wp_loaded', 'twentythirteenme_register_less_vars', 20 );
