<?php

/**
 * Setup Theme
 *
 * 1. Load Textdomain
 * 2. Register Menus
 * 3. Add Support for WP-Features
 * 4. Register Image sizes
 *
 * @return void
 */
function theme_setup() {
	// =======================================================================//
	// Translations
	// =======================================================================//

	load_theme_textdomain( 'nhpr', get_template_directory() . '/languages' );

	// =======================================================================//
	// Register Navigations
	// =======================================================================//

	register_nav_menus( array(
		'main_navigation'      => __( 'Main-Navigation', 'nhpr' ),
		'footer_navigation'     => __( 'Footer-Navigation', 'nhpr' ),
	) );
}

add_action( 'after_setup_theme', 'theme_setup' );
