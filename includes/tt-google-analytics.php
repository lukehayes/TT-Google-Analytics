<?php
/**
 * Themetacular Google Analytics
 */

// Load the google analytics code into the footer of the theme
function tt_load_google_analytics_footer() {
	// TODO
}
add_action('wp_footer', 'tt_load_google_analytics_footer');

// Crate a settings page for the plugin
function tt_create_settings_page() {
	// TODO
}
add_action('admin_menu', 'tt_create_settings_page');
