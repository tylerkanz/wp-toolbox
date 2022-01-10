<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              tylerkanz.com
 * @since             1.0.0
 * @package           Wp_Toolbox
 *
 * @wordpress-plugin
 * Plugin Name:       WP Toolbox
 * Plugin URI:        tylerkanz.com
 * Description:       Useful Plugin functions and hooks.
 * Version:           1.0.0
 * Author:            Tyler Kanz
 * Author URI:        tylerkanz.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-toolbox
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
define( 'WP_TOOLBOX_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-toolbox-activator.php
 */
function activate_wp_toolbox() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-toolbox-activator.php';
	Wp_Toolbox_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-toolbox-deactivator.php
 */
function deactivate_wp_toolbox() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-toolbox-deactivator.php';
	Wp_Toolbox_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_toolbox' );
register_deactivation_hook( __FILE__, 'deactivate_wp_toolbox' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-toolbox.php';


/**
 * Wordpress REST API
 * example.com/wp-json/api/v1/
 */
require plugin_dir_path( __FILE__ ) . 'endpoints/rest-get-test.php';
require plugin_dir_path( __FILE__ ) . 'endpoints/rest-post-test.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_toolbox() {

	$plugin = new Wp_Toolbox();
	$plugin->run();

}
run_wp_toolbox();
