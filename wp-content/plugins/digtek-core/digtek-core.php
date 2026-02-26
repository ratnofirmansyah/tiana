<?php
/*
Plugin Name: Digtek Core
Plugin URI: https://themeforest.net/user/gramentheme/portfolio
Description: Plugin to contain short codes and custom post types of the Digtek theme.
Author: Gramentheme
Author URI: https://gramentheme.com/
Version: 1.0.1
Text Domain: digtek-core
*/


/**
 * If this file is called directly, abort.
 * @package digtek
 * @since 1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


/**
 * Plugin directory path
 * @package digtek
 * @since 1.0.0
 */
define( 'DIGTEK_CORE_ROOT_PATH', plugin_dir_path( __FILE__ ) );
define( 'DIGTEK_CORE_ROOT_URL', plugin_dir_url( __FILE__ ) );
define( 'DIGTEK_CORE_SELF_PATH', 'digtek-core/digtek-core.php' );
define( 'DIGTEK_CORE_VERSION', '1.0.0' );
define( 'DIGTEK_CORE_INC', DIGTEK_CORE_ROOT_PATH .'/inc');
define( 'DIGTEK_CORE_LIB', DIGTEK_CORE_ROOT_PATH .'/lib');
define( 'DIGTEK_CORE_ELEMENTOR', DIGTEK_CORE_ROOT_PATH .'/elementor');
define( 'DIGTEK_CORE_DEMO_IMPORT', DIGTEK_CORE_ROOT_PATH .'/demo-import');
define( 'DIGTEK_CORE_ADMIN', DIGTEK_CORE_ROOT_PATH .'/admin');
define( 'DIGTEK_CORE_ADMIN_ASSETS', DIGTEK_CORE_ROOT_URL .'admin/assets');
define( 'DIGTEK_CORE_WP_WIDGETS', DIGTEK_CORE_ROOT_PATH .'/wp-widgets');
define( 'DIGTEK_CORE_ASSETS', DIGTEK_CORE_ROOT_URL .'assets/');
define( 'DIGTEK_CORE_CSS', DIGTEK_CORE_ASSETS .'css');
define( 'DIGTEK_CORE_JS', DIGTEK_CORE_ASSETS .'js');
define( 'DIGTEK_CORE_IMG', DIGTEK_CORE_ASSETS .'img');


/**
 * Load additional helpers functions
 * @package digtek
 * @since 1.0.0
 */
if (!function_exists('digtek_core')){
	require_once DIGTEK_CORE_INC .'/theme-core-helper-functions.php';
	if (!function_exists('digtek_core')){
		function digtek_core(){
			return class_exists('Digtek_Core_Helper_Functions') ? new Digtek_Core_Helper_Functions() : false;
		}
	}
}
//ob flash
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );


/**
 * Load Codestar Framework Functions
 * @package digtek
 * @since 1.0.0
 */
if ( !digtek_core()->is_digtek_active()) {
	if ( file_exists( DIGTEK_CORE_ROOT_PATH . '/inc/csf-functions.php' ) ) {
		require_once DIGTEK_CORE_ROOT_PATH . '/inc/csf-functions.php';
	}
}



/**
 * Core Plugin Init
 * @package digtek
 * @since 1.0.0
 */
if ( file_exists( DIGTEK_CORE_ROOT_PATH . '/inc/theme-core-init.php' ) ) {
	require_once DIGTEK_CORE_ROOT_PATH . '/inc/theme-core-init.php';
}