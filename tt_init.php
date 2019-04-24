<?php
/**
 * Plugin Name: Themetacular Google Analytics
 * Plugin URI: http://themetacular.com/plugins/tt-google-analytics
 * Description: A simple plugin to easily add Google Analytics to your theme.
 * Version: 0.1
 * Author: Themetacular
 * Author URI: http://themetacular.com
 * License: GPL2
 */

//-- Constants
// Root directory for the plugin
define('TT_GA_PLUGIN_PATH', plugin_dir_path( __FILE__ )  );

// Plugin include path
define('TT_GA_INC_PATH', TT_GA_PLUGIN_PATH . '/includes' );

// Assets directory for the plugin
define('TT_GA_ASSETS_DIR', TT_GA_PLUGIN_PATH . '/assets');

// Styles directory for the plugin
define('TT_GA_STYLES_DIR', TT_GA_ASSETS_DIR . '/styles');


//-- File Includes
include_once TT_GA_INC_PATH . '/class-tt-google-analytics.php';

// Include plugin css styles
include_once TT_GA_INC_PATH . '/tt-styles.php';