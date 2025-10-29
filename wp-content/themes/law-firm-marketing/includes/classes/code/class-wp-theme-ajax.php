<?php
/**
 * Ajax related functions
 *
 * @link https://codex.wordpress.org/AJAX#Ajax_in_WordPress
 *
 * @package Law Firm Marketing
 * @since 1.0.0
 */

namespace LawFirmMarketing\Ajax;

/**
 * Template Class For Ajax
 *
 * Template Class
 *
 * @category Setting_Class
 * @package  Law Firm Marketing
 */
class WP_Theme_Ajax {
	/**
	 * Define class Constructor
	 **/
	public function __construct() {

		add_action( 'wp_ajax_nopriv_ajax_filter', array( $this, 'ajax_filter' ) );
		add_action( 'wp_ajax_ajax_filter', array( $this, 'ajax_filter' ) );
	}


	/**
	 * Define ajax filter
	 **/
	public function ajax_filter() {

	}

}
new WP_Theme_Ajax();
