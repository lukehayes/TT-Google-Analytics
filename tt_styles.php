<?php 
/**
* --------------------------------------------------------------------------
* Themetacular Styles
* --------------------------------------------------------------------------
* Register all of the styles that this plugin will use.
*
*/

if ( !function_exists('tt_about_me_styles' ) ) {
    
    function tt_about_me_styles() {

        $tt_admin_css = plugins_url('assets/styles/tt_about_me_admin.css', __FILE__);

        wp_register_style('themetacular_about_me_admin_css', $tt_admin_css, '' , '' ,  '' );
        wp_enqueue_style('themetacular_about_me_admin_css');
    }

    // add_action('admin_head', 'tt_about_me_styles');
}
