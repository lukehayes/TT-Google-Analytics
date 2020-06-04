<?php

/* ---------------------------------------------------------------------------------------------
   Themetacular Google Analytics
   --------------------------------------------------------------------------------------------- */

// Register form settings for the input fields
function tt_register_form_settings() {
    register_setting( "tt_ga_form_setting", "tt_ga_code",[
        // 'type' => 'string',
        'description' => 'The Google Analytics Code',
        // 'sanitize_callback' => 'sanitize_text_field'
    ]);
}
add_action("admin_init", "tt_register_form_settings");

// Register a new menu page
function tt_register_menu_page() {
    add_menu_page( "TT Google Analytics", "TT Google Analytics", "manage_options", "tt-google-analytics", "tt_create_settings_page", $icon_url = '', 30 );
}
add_action('admin_menu', 'tt_register_menu_page');

// Crate a settings page for the plugin
function tt_create_settings_page() {
    ?>
    <div class="wrap">
        <h1>Themetacular Google Analytics</h1>

        <form method="post" action="options.php">

            <?php settings_fields( 'tt_ga_form_setting' ); ?>

            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Google Analytics Code:</th>
                    <td>

                        <textarea type="text"  class="widefat" style="height:120px !important;"  name="tt_ga_code" value=""><?php echo esc_attr( get_option('tt_ga_code') ); ?></textarea>

                        <span class="description">Add your Google Analytics code into the input box and then hit save! Alternatively, if you don't have one yet then you can get one <a href="https://analytics.google.com/analytics/web/">here.</a> </span>
                    </td>
                </tr>
            </table>

            <?php submit_button(); ?>
        </form>
    </div>
<?php
}

// Load the google analytics code into the footer of the theme
function tt_load_google_analytics_footer() {
    echo get_option("tt_ga_code");
}
add_action('wp_footer', 'tt_load_google_analytics_footer', 1000);
