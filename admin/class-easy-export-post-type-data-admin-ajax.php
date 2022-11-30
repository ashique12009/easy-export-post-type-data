<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://https://ashique12009.blogspot.com/
 * @since      1.0.0
 *
 * @package    Easy_Export_Post_Type_Data
 * @subpackage Easy_Export_Post_Type_Data/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Easy_Export_Post_Type_Data
 * @subpackage Easy_Export_Post_Type_Data/admin
 * @author     khandoker ashique mahamud <ashique12009@gmail.com>
 */
class Easy_Export_Post_Type_Data_Admin_Ajax {

	use Helper_Trait;

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	public function eeptd_start_export() {

		if ( !wp_verify_nonce( $_REQUEST['nonce'], "easy_export_nonce" ) ) {
			wp_send_json_error( [ 'message' => 'Nonce is not verified!'] );
		}

		wp_send_json_success( [ 'message' => 'Well done!'] );

		die();
	}

}
