<?php 
/**
 * Plugin Name: Themetacular About Me
 * Plugin URI: http://themetacular.com
 * Description: A simple plugin that can output information about yourself with a shortcode
 * Version: 0.1
 * Author: Luke Hayes
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