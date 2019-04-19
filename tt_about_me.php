<?php
/**
* --------------------------------------------------------------------------
* Themetacular About Me
* --------------------------------------------------------------------------
* The main functionality of this plugin will be defined here.
*
*/

if ( ! class_exists('TT_About_Me')) {
    class TT_About_Me
    {

        public function __construct()
        {
            add_action( 'admin_menu', array($this, 'createAdminPage'));
        }

        /**
         * Create the admin page
         */
        public function createAdminPage()
        {
            add_menu_page( 'Themetacular About Me', 'TT About Me', 'manage_options', 'tt-about-me', array($this,'createSettingsPage'), 'dashicons-id-alt', 3 );
        }

        public function createSettingsPage()
        {
        }

    }
}

// Create an instance of the class here
new TT_About_Me();