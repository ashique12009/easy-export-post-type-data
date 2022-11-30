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
class Easy_Export_Post_Type_Data_Admin {

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

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Easy_Export_Post_Type_Data_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Easy_Export_Post_Type_Data_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, EASY_EXPORT_POST_TYPE_DATA_URL . 'admin/css/easy-export-post-type-data-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Easy_Export_Post_Type_Data_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Easy_Export_Post_Type_Data_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, EASY_EXPORT_POST_TYPE_DATA_URL . 'admin/js/easy-export-post-type-data-admin.js', array( 'jquery' ), $this->version, false );

		wp_localize_script( $this->plugin_name, 'myAjax', [ 'ajaxurl' => admin_url('admin-ajax.php') ] );
	}

	/**
	 * Register admin settings menu
	 */
	public function eeptd_admin_settings_option_menu() {
		add_submenu_page(
			'tools.php',       	// parent slug
			'Easy Export',    	// page title
			'Easy Export',     // menu title
			'manage_options',  // capability
			'easy-export',    // slug
			[$this, 'eeptd_easy_export_settings_page'], // callback
			1
		);
	}

	/**
	 * Menu page
	 */
	public function eeptd_easy_export_settings_page() {
		$view = sanitize_text_field( $_GET['view'] );
		$view = isset( $view ) ? $view : '';
		if ($view == '')
			include 'partials/easy-export-post-type-data-admin-display.php';
	}

}
