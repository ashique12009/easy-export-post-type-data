<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://https://ashique12009.blogspot.com/
 * @since             1.0.0
 * @package           Easy_Export_Post_Type_Data
 *
 * @wordpress-plugin
 * Plugin Name:       Easy Export Post Type Data
 * Plugin URI:        https://www.youtube.com/@ashique12009
 * Description:       Easily export post type data as CSV format
 * Version:           1.0.0
 * Author:            khandoker ashique mahamud
 * Author URI:        https://https://ashique12009.blogspot.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       easy-export-post-type-data
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'EASY_EXPORT_POST_TYPE_DATA_VERSION', '1.0.0' );
define( 'EASY_EXPORT_POST_TYPE_DATA_DIR', plugin_dir_path( __FILE__ ) );
define( 'EASY_EXPORT_POST_TYPE_DATA_URL', plugin_dir_url( __FILE__ ) );
define( 'EASY_EXPORT_POST_TYPE_DATA_TEXT_DOMAIN', 'easy-export-post-type-data' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-easy-export-post-type-data-activator.php
 */
function activate_easy_export_post_type_data() {
	require_once EASY_EXPORT_POST_TYPE_DATA_DIR . 'includes/class-easy-export-post-type-data-activator.php';
	Easy_Export_Post_Type_Data_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-easy-export-post-type-data-deactivator.php
 */
function deactivate_easy_export_post_type_data() {
	require_once EASY_EXPORT_POST_TYPE_DATA_DIR . 'includes/class-easy-export-post-type-data-deactivator.php';
	Easy_Export_Post_Type_Data_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_easy_export_post_type_data' );
register_deactivation_hook( __FILE__, 'deactivate_easy_export_post_type_data' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-easy-export-post-type-data.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_easy_export_post_type_data() {

	$plugin = new Easy_Export_Post_Type_Data();
	$plugin->run();

}
run_easy_export_post_type_data();
