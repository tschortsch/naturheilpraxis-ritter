<?php

// ===================================================
// DB config
// ===================================================

define( 'DB_NAME', '' );
define( 'DB_USER', '' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'localhost' );


// ===================================================
// Various Dev Settings
// ===================================================

define( 'WP_LOCAL_DEV', true );
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'SCRIPT_DEBUG', true );
define( 'SAVEQUERIES', true );
define( 'FS_METHOD', 'direct' );


// ===================================================
// Define Siteurl
// ===================================================

define( 'WP_HOME', 'http://naturheilpraxis-buchs.lo' );
define( 'WP_SITEURL', 'http://naturheilpraxis-buchs.lo/WordPress' );


// ===================================================
// Define path & url for Content
// ===================================================

define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', WP_HOME .'/content' );


// ===================================================
// Define path & url for Uploads and Plugins
// ===================================================

define( 'WP_PLUGIN_DIR', dirname( __FILE__ ) . '/content/plugins' );
define( 'WP_PLUGIN_URL', WP_HOME . '/content/plugins' );


// ===================================================
// Set path to MU Plugins
// ===================================================

define( 'WPMU_PLUGIN_DIR', dirname( __FILE__ ) . '/content/mu-plugins' );
define( 'WPMU_PLUGIN_URL', WP_HOME . '/content/mu-plugins' );
