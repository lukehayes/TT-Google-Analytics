<?php
/**
 * Themetacular Google Analytics
 */

// Register a new menu page
function tt_register_menu_page() {
    // TODO
    add_menu_page( "TT Google Analytics", "TT Google Analytics", "edit_posts", "tt-google-analytics", "tt_create_settings_page", $icon_url = '', $position = null );
}
add_action('admin_menu', 'tt_register_menu_page');

// Crate a settings page for the plugin
function tt_create_settings_page() {
    ?>
    <div class="wrap">
        <p>Hello</p>
    </div>
    <?php
}

// Load the google analytics code into the footer of the theme
function tt_load_google_analytics_footer() {
	// TODO
}
add_action('wp_footer', 'tt_load_google_analytics_footer');

