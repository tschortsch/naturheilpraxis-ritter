<?php

/**
 * Add / Remove Scripts and CSS only in Frontend
 *
 * @return void
 */
function nhpr_scripts() {
	if ( is_admin() ) {
		return;
	}
	wp_enqueue_style( 'app', get_template_directory_uri() . '/assets/css/app.css', false, null );

	// Remove WP jQuery version
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://code.jquery.com/jquery-1.11.1.min.js', false, null, false );
	wp_enqueue_script( 'jquery' );

	wp_register_script( 'app', get_template_directory_uri() . '/assets/js/app.min.js', false, null, true );
	wp_enqueue_script( 'app' );
}

add_action( 'wp_enqueue_scripts', 'nhpr_scripts' );

/**
 * Adds favicon to header
 */
function add_favicon() {
	echo '<link rel="icon" sizes="128x128" href="' . esc_attr( get_stylesheet_directory_uri() ) . '/assets/images/favicon-128.png">';
	echo '<link rel="icon" sizes="192x192" href="' . esc_attr( get_stylesheet_directory_uri() ) . '/assets/images/favicon-192.png">';
}

// Now, just make sure that function runs when you're on the login page and admin pages
add_action( 'login_head', 'add_favicon' );
if ( is_admin() ) {
	add_action( 'admin_head', 'add_favicon' );
}
