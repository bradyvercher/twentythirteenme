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
		'header-bg'                 => array( 'default' => '#ffffff', 'label' => __( 'Header Background', 'twentythirteenme' ),                   'priority' => 20  ),
		'page-header-bg'            => array( 'default' => '#e8e5ce', 'label' => __( 'Page/Archive Heading Background', 'twentythirteenme' ),     'priority' => 25  ),
		'page-header-text'          => array( 'default' => '#141412', 'label' => __( 'Page/Archive Heading Text', 'twentythirteenme' ),           'priority' => 26  ),
		'content-bg'                => array( 'default' => '#ffffff', 'label' => __( 'Content Background', 'twentythirteenme' ),                  'priority' => 35  ),
		'text'                      => array( 'default' => '#141412', 'label' => __( 'Text', 'twentythirteenme' ),                                'priority' => 40  ),
		'links'                     => array( 'default' => '#ca3c08', 'label' => __( 'Links', 'twentythirteenme' ),                               'priority' => 45  ),
		'links-hover'               => array( 'default' => '#ea9629', 'label' => __( 'Links Hover', 'twentythirteenme' ),                         'priority' => 46  ),
		'links-visited'             => array( 'default' => '#ac0404', 'label' => __( 'Links Visited', 'twentythirteenme' ),                       'priority' => 47  ),
		'titles'                    => array( 'default' => '#141412', 'label' => __( 'Titles', 'twentythirteenme' ),                              'priority' => 50  ),

		'main-nav-bg'               => array( 'default' => '#f7f5e7', 'label' => __( 'Navigation Background', 'twentythirteenme' ),               'priority' => 60  ),
		'main-nav-links'            => array( 'default' => '#141412', 'label' => __( 'Navigation Links', 'twentythirteenme' ),                    'priority' => 61  ),
		'main-nav-links-hover'      => array( 'default' => '#ffffff', 'label' => __( 'Navigation Links Hover', 'twentythirteenme' ),              'priority' => 62  ),
		'main-nav-links-hover-bg'   => array( 'default' => '#220e10', 'label' => __( 'Navigation Links Hover Background', 'twentythirteenme' ),   'priority' => 63  ),
		'main-nav-submenu-hover-bg' => array( 'default' => '#db572f', 'label' => __( 'Navigation Submenu Hover Background', 'twentythirteenme' ), 'priority' => 64  ),

		'paging-nav-bg'             => array( 'default' => '#e8e5ce', 'label' => __( 'Paging Navigation Background', 'twentythirteenme' ),        'priority' => 110 ),
		'paging-nav-links'          => array( 'default' => '#bc360a', 'label' => __( 'Paging Navigation Links', 'twentythirteenme' ),             'priority' => 111 ),
		'paging-nav-links-hover'    => array( 'default' => '#ea9629', 'label' => __( 'Paging Navigation Links Hover', 'twentythirteenme' ),       'priority' => 112 ),
		'paging-arrows-bg'          => array( 'default' => '#e63f2a', 'label' => __( 'Paging Arrows Background', 'twentythirteenme' ),            'priority' => 113 ),
		'paging-arrows-bg-hover'    => array( 'default' => '#ea9629', 'label' => __( 'Paging Arrows Background Hover', 'twentythirteenme' ),      'priority' => 114 ),
		'paging-arrows-text'        => array( 'default' => '#ffffff', 'label' => __( 'Paging Arrows Text', 'twentythirteenme' ),                  'priority' => 115 ),

		'comment-form-bg'           => array( 'default' => '#f7f5e7', 'label' => __( 'Comment Form Background', 'twentythirteenme' ),             'priority' => 150 ),
		'comment-form-text'         => array( 'default' => '#141412', 'label' => __( 'Comment Form Text', 'twentythirteenme' ),                   'priority' => 151 ),
		'comment-form-links'        => array( 'default' => '#141412', 'label' => __( 'Comment Form Links', 'twentythirteenme' ),                  'priority' => 152 ),
		'form-allowed-tags'         => array( 'default' => '#686758', 'label' => __( 'Allowed Tags Text', 'twentythirteenme' ),                   'priority' => 153 ),

		'footer-bg'                 => array( 'default' => '#e8e5ce', 'label' => __( 'Footer Background', 'twentythirteenme' ),                   'priority' => 200 ),
		'footer-text'               => array( 'default' => '#686758', 'label' => __( 'Footer Text', 'twentythirteenme' ),                         'priority' => 201 ),
		'footer-links'              => array( 'default' => '#686758', 'label' => __( 'Footer Links', 'twentythirteenme' ),                        'priority' => 202 ),

		'footer-widgets-bg'         => array( 'default' => '#220e10', 'label' => __( 'Footer Widgets Background', 'twentythirteenme' ),           'priority' => 210 ),
		'footer-widgets-text'       => array( 'default' => '#ffffff', 'label' => __( 'Footer Widgets Text', 'twentythirteenme' ),                 'priority' => 211 ),
		'footer-widgets-links'      => array( 'default' => '#e6402a', 'label' => __( 'Footer Widgets Links', 'twentythirteenme' ),                'priority' => 212 ),

		// Post formats.
		
		'format-aside-bg'           => array( 'default' => '#f7f5e7', 'label' => __( 'Background', 'twentythirteenme' ), 'priority' => 20, 'section' => 'format_aside' ),
		'format-aside-text'         => array( 'default' => '#141412', 'label' => __( 'Text', 'twentythirteenme' ),       'priority' => 25, 'section' => 'format_aside' ),
		'format-aside-links'        => array( 'default' => '#ca3c08', 'label' => __( 'Links', 'twentythirteenme' ),      'priority' => 30, 'section' => 'format_aside' ),

		'format-audio-bg'           => array( 'default' => '#db572f', 'label' => __( 'Background', 'twentythirteenme' ), 'priority' => 20, 'section' => 'format_audio' ),
		'format-audio-title'        => array( 'default' => '#141412', 'label' => __( 'Title', 'twentythirteenme' ),      'priority' => 25, 'section' => 'format_audio' ),
		'format-audio-text'         => array( 'default' => '#141412', 'label' => __( 'Text', 'twentythirteenme' ),       'priority' => 30, 'section' => 'format_audio' ),
		'format-audio-links'        => array( 'default' => '#fbfaf3', 'label' => __( 'Links', 'twentythirteenme' ),      'priority' => 35, 'section' => 'format_audio' ),

		'format-chat-bg'            => array( 'default' => '#eadaa6', 'label' => __( 'Background', 'twentythirteenme' ), 'priority' => 20, 'section' => 'format_chat' ),
		'format-chat-title'         => array( 'default' => '#141412', 'label' => __( 'Title', 'twentythirteenme' ),      'priority' => 25, 'section' => 'format_chat' ),
		'format-chat-text'          => array( 'default' => '#141412', 'label' => __( 'Text', 'twentythirteenme' ),       'priority' => 30, 'section' => 'format_chat' ),
		'format-chat-links'         => array( 'default' => '#722d19', 'label' => __( 'Links', 'twentythirteenme' ),      'priority' => 35, 'section' => 'format_chat' ),

		'format-gallery-bg'         => array( 'default' => '#fbca3c', 'label' => __( 'Background', 'twentythirteenme' ), 'priority' => 20, 'section' => 'format_gallery' ),
		'format-gallery-title'      => array( 'default' => '#141412', 'label' => __( 'Title', 'twentythirteenme' ),      'priority' => 25, 'section' => 'format_gallery' ),
		'format-gallery-text'       => array( 'default' => '#141412', 'label' => __( 'Text', 'twentythirteenme' ),       'priority' => 30, 'section' => 'format_gallery' ),
		'format-gallery-links'      => array( 'default' => '#722d19', 'label' => __( 'Links', 'twentythirteenme' ),      'priority' => 35, 'section' => 'format_gallery' ),

		'format-image-bg'           => array( 'default' => '#ffffff', 'label' => __( 'Background', 'twentythirteenme' ), 'priority' => 20, 'section' => 'format_image' ),
		'format-image-title'        => array( 'default' => '#141412', 'label' => __( 'Title', 'twentythirteenme' ),      'priority' => 25, 'section' => 'format_image' ),
		'format-image-text'         => array( 'default' => '#141412', 'label' => __( 'Text', 'twentythirteenme' ),       'priority' => 30, 'section' => 'format_image' ),
		'format-image-links'        => array( 'default' => '#ca3c08', 'label' => __( 'Links', 'twentythirteenme' ),      'priority' => 35, 'section' => 'format_image' ),

		'format-link-bg'            => array( 'default' => '#f7f5e7', 'label' => __( 'Background', 'twentythirteenme' ), 'priority' => 20, 'section' => 'format_link' ),
		'format-link-title'         => array( 'default' => '#bc360a', 'label' => __( 'Title', 'twentythirteenme' ),      'priority' => 25, 'section' => 'format_link' ),
		'format-link-text'          => array( 'default' => '#141412', 'label' => __( 'Text', 'twentythirteenme' ),       'priority' => 30, 'section' => 'format_link' ),
		'format-link-links'         => array( 'default' => '#ca3c08', 'label' => __( 'Links', 'twentythirteenme' ),      'priority' => 35, 'section' => 'format_link' ),

		'format-quote-bg'           => array( 'default' => '#210d10', 'label' => __( 'Background', 'twentythirteenme' ), 'priority' => 20, 'section' => 'format_quote' ),
		'format-quote-text'         => array( 'default' => '#f7f5e7', 'label' => __( 'Text', 'twentythirteenme' ),       'priority' => 25, 'section' => 'format_quote' ),
		'format-quote-links'        => array( 'default' => '#e63f2a', 'label' => __( 'Links', 'twentythirteenme' ),      'priority' => 30, 'section' => 'format_quote' ),

		'format-status-bg'          => array( 'default' => '#722d19', 'label' => __( 'Background', 'twentythirteenme' ), 'priority' => 20, 'section' => 'format_status' ),
		'format-status-text'        => array( 'default' => '#f7f5e7', 'label' => __( 'Text', 'twentythirteenme' ),       'priority' => 25, 'section' => 'format_status' ),
		'format-status-links'       => array( 'default' => '#eadaa6', 'label' => __( 'Links', 'twentythirteenme' ),      'priority' => 30, 'section' => 'format_status' ),
		'format-status-meta-links'  => array( 'default' => '#f7f5e7', 'label' => __( 'Meta Links', 'twentythirteenme' ), 'priority' => 35, 'section' => 'format_status' ),

		'format-video-bg'           => array( 'default' => '#db572f', 'label' => __( 'Background', 'twentythirteenme' ), 'priority' => 20, 'section' => 'format_video' ),
		'format-video-title'        => array( 'default' => '#141412', 'label' => __( 'Title', 'twentythirteenme' ),      'priority' => 25, 'section' => 'format_video' ),
		'format-video-text'         => array( 'default' => '#220e10', 'label' => __( 'Text', 'twentythirteenme' ),       'priority' => 30, 'section' => 'format_video' ),
		'format-video-links'        => array( 'default' => '#fbfaf3', 'label' => __( 'Links', 'twentythirteenme' ),      'priority' => 35, 'section' => 'format_video' ),
	);

	return apply_filters( 'twentythirteenme_colors', $colors );
}

/**
 * Register Theme Customizer sections, settings and controls.
 */
function twentythirteenme_customize_register( $manager ) {
	$colors = twentythirteenme_colors();

	if ( ! empty( $colors ) && is_array( $colors ) ) {
		// Register sections.
		$manager->add_section( 'format_aside', array(
			'title'    => __( 'Aside Format', 'twentythirteenme' ),
			'priority' => 45,
		) );

		$manager->add_section( 'format_audio', array(
			'title'    => __( 'Audio Format', 'twentythirteenme' ),
			'priority' => 46,
		) );

		$manager->add_section( 'format_chat', array(
			'title'    => __( 'Chat Format', 'twentythirteenme' ),
			'priority' => 47,
		) );

		$manager->add_section( 'format_gallery', array(
			'title'    => __( 'Gallery Format', 'twentythirteenme' ),
			'priority' => 48,
		) );

		$manager->add_section( 'format_image', array(
			'title'    => __( 'Image Format', 'twentythirteenme' ),
			'priority' => 49,
		) );

		$manager->add_section( 'format_link', array(
			'title'    => __( 'Link Format', 'twentythirteenme' ),
			'priority' => 50,
		) );

		$manager->add_section( 'format_quote', array(
			'title'    => __( 'Quote Format', 'twentythirteenme' ),
			'priority' => 51,
		) );

		$manager->add_section( 'format_status', array(
			'title'    => __( 'Status Format', 'twentythirteenme' ),
			'priority' => 52,
		) );

		$manager->add_section( 'format_video', array(
			'title'    => __( 'Video Format', 'twentythirteenme' ),
			'priority' => 53,
		) );

		// Register settings.
		foreach ( $colors as $key => $color ) {
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
				'priority' => ( ! empty( $color['priority'] ) ) ? $color['priority'] : 10,
			) ) );
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
