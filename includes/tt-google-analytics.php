<?php
/**
 * Themetacular Google Analytics
 */

// Register form settings for the input fields
function tt_register_form_settings() {
    register_setting( "tt_ga_form_setting", "tt_ga_code");
}
add_action("admin_init", "tt_register_form_settings");

// Register a new menu page
function tt_register_menu_page() {
    // TODO
    add_menu_page( "TT Google Analytics", "TT Google Analytics", "manage_options", "tt-google-analytics", "tt_create_settings_page", $icon_url = '', $position = null );
}
add_action('admin_menu', 'tt_register_menu_page');

// Crate a settings page for the plugin
function tt_create_settings_page() {
    ?>
    <div class="wrap">
        <h1>Themetacular Google Analytics</h1>
        <form method="post" action="options.php">
            <h4>Enter your Google Analytics code into the input box below and then hit save!</h4>
            <label>Google Analytics Code: </label>
            <input type="text" name="tt-google-analytics-code">
            <?php submit_button(); ?>
        </form>
    </div>
<?php
}

// Load the google analytics code into the footer of the theme
function tt_load_google_analytics_footer() {
	// TODO
}
add_action('wp_footer', 'tt_load_google_analytics_footer');

