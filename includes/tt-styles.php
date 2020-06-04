<?php 
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/* ---------------------------------------------------------------------------------------------
    Register all of the styles that this plugin will use.
   --------------------------------------------------------------------------------------------- */

if ( !function_exists('tt_ga_styles' ) ) {
    
    function tt_ga_load_styles() {

        $tt_admin_css = plugins_url('assets/styles/tt_google_analytics_admin.css', __FILE__);

        wp_register_style('tt_ga_admin_css', $tt_admin_css, '' , '' ,  '' );
        wp_enqueue_style('tt_ga_admin_css');
    }

    add_action('admin_head', 'tt_ga_load_styles');
}
