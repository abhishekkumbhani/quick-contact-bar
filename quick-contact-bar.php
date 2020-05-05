<?php
/**
 * Plugin Name:       Quick Contact Bar
 * Description:       This plugin allow you to create one or more floating buttons that stick to the side of your site as the user scrolls.
 * Version:           1.0.0
 * Author:            Abhishek Kumbhani
 * Author URI:        https://abhishekkumbhani.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       quick-contact-bar
 * Domain Path:       /languages
 *
 * @since             1.0.0
 * @author 			  Abhishek Kumbhani
 * @package           Quick_Contact_Bar
 */

// Prevent direct file access
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * @since 1.0.0
 * Define plugin version
 */
define( 'QCB_VERSION', '1.0.0' );

/**
 * @since 1.0.0
 * Define plugin directory file URL
 */ 
define( 'QCB_PLUGIN_FILE_URL', __FILE__ );

/**
 * @since 1.0.0
 * Define plugin directory path
 */ 
define( 'QCB_PLUGIN_DIR', plugin_dir_url( __FILE__ ) );

/**
 * @since 1.0.0
 * Register enqueue scripts
 */ 
require_once plugin_dir_path( QCB_PLUGIN_FILE_URL ) . 'includes/load-scripts.php';

/**
 * @since 1.0.0
 * Register admin menu
 */ 
require_once plugin_dir_path( QCB_PLUGIN_FILE_URL ) . 'includes/admin-menu.php';

/**
 * @since 1.0.0
 * Include admin UI page
 */ 
require_once plugin_dir_path( QCB_PLUGIN_FILE_URL ) . 'includes/admin-page.php';

/**
 * @since 1.0.0
 * Plugin activation
 */ 
require_once plugin_dir_path( QCB_PLUGIN_FILE_URL ) . 'includes/set-options.php';