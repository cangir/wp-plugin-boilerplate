<?php
/**
 * WP Plugin Boilerplate.
 *
 * @todo  Fill up plugin's meta information in this file header.
 *
 * @package   Plugin_Name
 * @author    Your Name <email@example.com>
 * @license   GPL-3.0+
 * @link      http://example.com
 * @copyright 2017 Your Name or Company Name
 *
 * @wordpress-plugin
 * Plugin Name: WP Plugin Boilerplate
 * Plugin URI:  http://github.com/jedrzejchalubek/wp-plugin-boilerplate
 * Description: Plugin Boilerplate for WordPress.
 * Version:     1.0.0
 * Author:      Your Name <email@example.com>
 * Author URI:  http://example.com
 * Text Domain: plugin_name
 * License:     GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 */

if ( ! defined( 'WPINC' ) ) {
	die();
}

/**
 * This section setups plugin specific constans.
 * Fell free to define here your own variables as needed.
 *
 * @todo Change prefix of the constans to your unique plugin name.
 */
define( 'PLUGIN_NAME_URL', plugin_dir_url( __FILE__ ) );
define( 'PLUGIN_NAME_PATH', plugin_dir_path( __FILE__ ) );
define( 'PLUGIN_NAME_DIR', basename( dirname( __FILE__ ) ) );

/**
 * Checks environment compatibilities.
 *
 * @todo Change variable prefix to your unique plugin name.
 */
$plugin_name_compatible = require_once 'bootstrap/compatibility.php';

/**
 * Initialize plugin.
 *
 * @todo Change function name to your unique plugin name.
 * @todo Change variable prefix to your unique plugin name.
 */
if ( $plugin_name_compatible ) {
	/**
	 * Bootstrap and autoload plugin's files and functions.
	 */
	require_once 'bootstrap/autoload.php';
	require_once 'bootstrap/functions.php';

	add_action( 'plugins_loaded', 'plugin_name' );
}
