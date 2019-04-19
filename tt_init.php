<?php 
/**
 * Plugin Name: Themetacular Google Analytics 
 * Plugin URI: http://themetacular.com/plugins/tt-google-analytics
 * Description: A simple plugin to easily add Google analytics to your theme. 
 * Version: 0.1
 * Author: Themetacular
 * Author URI: http://themetacular.com
 * License: GPL2
 */

/**
 * Include the global settings file
 */
require_once plugin_dir_path( __FILE__ ). '/tt_settings.php';

/**
 * Include the plugin file
 */
include_once TT_AM_PLUGIN_PATH . '/tt_about_me.php';

/**
 * Include plugin css styles
 */
include_once TT_AM_PLUGIN_PATH . '/tt_styles.php';