<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.naoca.com.au
 * @since             1.0.0
 * @package           Naoca
 *
 * @wordpress-plugin
 * Plugin Name:       Naoca
 * Plugin URI:        https://www.naoca.com.au
 * Description:       Plugin to communicate with Naoca API and display client information, including live streams etc
 * Version:           1.2.5
 * Author:            George Inggs
 * Author URI:        https://www.naoca.com.au
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       naoca
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
define( 'NAOCA_VERSION', '1.2.5' );

/**
 * Current build
 */
define( 'NAOCA_BUILD', '9' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-naoca-activator.php
 */
function activate_naoca() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-naoca-activator.php';
	Naoca_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-naoca-deactivator.php
 */
function deactivate_naoca() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-naoca-deactivator.php';
	Naoca_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_naoca' );
register_deactivation_hook( __FILE__, 'deactivate_naoca' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-naoca.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_naoca() {

	$plugin = new Naoca();
	$plugin->run();

}

run_naoca();