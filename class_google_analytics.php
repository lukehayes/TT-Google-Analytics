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
		}
	}
}

add_action("admin_head", new TT_Google_Analytics() );