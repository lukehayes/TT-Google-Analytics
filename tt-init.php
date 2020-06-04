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

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/*----------  Constants  ----------*/

// Root directory for the plugin
define('TT_GA_PLUGIN_PATH', plugin_dir_path( __FILE__ )  );


/*----------  File Includes  ----------*/
include_once TT_GA_PLUGIN_PATH . '/includes/tt-google-analytics.php';

// Include plugin css styles
include_once TT_GA_PLUGIN_PATH . '/includes/tt-styles.php';
