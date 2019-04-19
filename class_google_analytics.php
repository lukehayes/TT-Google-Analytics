<?php 
/**
 * Themetacular Google Analytics
 */

if ( ! class_exists("TT_Google_Analytics")) {

	/**
	 * Google Analytics
	 */
	class TT_Google_Analytics {
		
		public function __construct() {
			add_action('wp_footer', array( $this, 'addFooter') );
			add_action('admin_init', array( $this, 'addSettingsPage') );
		}

		/**
		 * Add the code to the footer of a theme
		 */
		public function addFooter() {
			// TODO
		}

		/**
		 * Create the plugin settings page
		 */
		public function addSettingsPage() {
			// TODO
		}
	}
}

add_action("admin_head", new TT_Google_Analytics() );