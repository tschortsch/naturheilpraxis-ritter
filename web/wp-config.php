<?php
// ===================================================
// Load database info and local development parameters
// ===================================================

if ( ! defined( 'WP_HOME' ) ) {
	define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
}


if ( file_exists( dirname( __FILE__ ) . '/wp-local-config.php' ) ) {
	// Local
	include( dirname( __FILE__ ) . '/wp-local-config.php' );
} elseif ( file_exists( dirname( __FILE__ ) . '/wp-test-config.php' ) ) {
	// Test
	include( dirname( __FILE__ ) . '/wp-test-config.php' );
} else {
	// Live
	include( dirname( __FILE__ ) . '/wp-live-config.php' );
}


// ===================================================
// Table prefix
// ===================================================

$table_prefix = 'nhpb_';


// ===================================================
// Give mama some more memory
// ===================================================

define( 'WP_MEMORY_LIMIT', '512M' );


// ===================================================
// Activate compression
// ===================================================

define( 'COMPRESS_CSS', true );
define( 'COMPRESS_SCRIPTS', true );
define( 'ENFORCE_GZIP', true );


// ===================================================
// Some admin tweeks
// ===================================================

define( 'WP_POST_REVISIONS', 0 );
define( 'AUTOSAVE_INTERVAL', 86400 );

define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

define( 'WP_ALLOW_REPAIR', true );
define( 'DISALLOW_FILE_EDIT', true );


// ===================================================
// Authentication Unique Keys and Salts.
// ===================================================

define('AUTH_KEY',         ',e$|C9vpHSd*UAl9@{Uyq!^i8R-P:[gS6;oB/9c3:k.>UK.K?KJE3/@$-e_v~:{z');
define('SECURE_AUTH_KEY',  'T,GpyCyUG-#?Dv4L}Pg.[)<J1yQO`jhOKrw(?c|V)WH:Px<Wcy6Oshpu3NQ#{o_I');
define('LOGGED_IN_KEY',    'f%6q,%fe[q<NX4.u(Ii0^tcuXB0( fnw^DQ{|x6p+7(*|?LHD#=Fh;@}!,^S<IT4');
define('NONCE_KEY',        'u;N0}*W8vp-`c|C<&EPQJu!^du$vI9>!fi 93S4:Re+%Z:$-J#EMB)r8N;-eX|=C');
define('AUTH_SALT',        'XE*Qa@ECH15HI4xD!R?;&[RqP4=Uo$~j`}eVVb%]P+Qx/6I3pO*#!Ad$a^$B0`6F');
define('SECURE_AUTH_SALT', 'H3!mKoTDwgQHD+MX+ddXmx$/5AzTMRBE2k8+TvrFMp^E?x0z)n]*SFM(54sXvSxn');
define('LOGGED_IN_SALT',   'wPb=B +NFU}_h87]=<b5e`!sNn0mB=>YZ0MkYr[n3&ARdSt?P5YUvi:S6f+X|s` ');
define('NONCE_SALT',       'U7|$#NIV{<sT>R-f?8j90np.lL_)>gjdu75T*+8?~A!_Q=Th]}|5hCPor{;nQAIX');

// ===================================================
// DO NOT EDIT FORM HERE ! ! !
// ===================================================

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
