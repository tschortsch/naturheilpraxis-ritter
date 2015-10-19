<?php
// =======================================================================//
// Frontend Includes
// =======================================================================//

$frontend_includes = array(
	'assets/php/init.php',
	'assets/php/scripts.php',
	'assets/php/theme_functions.php',
    'assets/php/customizer.php',
);

foreach ( $frontend_includes as $file ) {
	if ( ! $filepath = locate_template( $file ) ) {
		// @codingStandardsIgnoreStart
		trigger_error( sprintf( __( 'Error locating %s for inclusion', 'nhpr' ), $file ), E_USER_ERROR );
		// @codingStandardsIgnoreEnd
	}
	require_once $filepath;
}
unset( $file, $filepath );


// =======================================================================//
// Only Backend Includes
// =======================================================================//

if ( is_admin() ) {

	$backend_includes = array(
		'assets/php/backend/scripts.php',               // Admin Scripts / CSS
		'assets/php/backend/caps.php',                  // Caps & Roles
		'assets/php/backend/wysiwyg.php',               // TinyMCE Configuration
	);

	foreach ( $backend_includes as $file ) {
		if ( ! $filepath = locate_template( $file ) ) {
			// @codingStandardsIgnoreStart
			trigger_error( sprintf( __( 'Error locating %s for inclusion', 'nhpr' ), $file ), E_USER_ERROR );
			// @codingStandardsIgnoreEnd
		}
		require_once $filepath;
	}
	unset( $file, $filepath );
}
