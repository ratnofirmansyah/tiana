<?php
/**
 * Theme functions & definitations
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package digtek
 */

/**
 * Define Theme Folder Path & URL Constant
 * @package digtek
 * @since 1.0.0
 */

define('DIGTEK_THEME_ROOT', get_template_directory());
define('DIGTEK_THEME_ROOT_URL', get_template_directory_uri());
define('DIGTEK_INC', DIGTEK_THEME_ROOT . '/inc');
define('DIGTEK_THEME_SETTINGS', DIGTEK_INC . '/theme-settings');
define('DIGTEK_THEME_SETTINGS_IMAGES', DIGTEK_THEME_ROOT_URL . '/inc/theme-settings/images');
define('DIGTEK_TGMA', DIGTEK_INC . '/plugins/tgma');
define('DIGTEK_DYNAMIC_STYLESHEETS', DIGTEK_INC . '/theme-stylesheets');
define('DIGTEK_CSS', DIGTEK_THEME_ROOT_URL . '/assets/css');
define('DIGTEK_JS', DIGTEK_THEME_ROOT_URL . '/assets/js');
define('DIGTEK_ASSETS', DIGTEK_THEME_ROOT_URL . '/assets');
define('DIGTEK_DEV', true);


/**
 * Theme Initial File
 * @package digtek
 * @since 1.0.0
 */
if (file_exists(DIGTEK_INC . '/theme-init.php')) {
    require_once DIGTEK_INC . '/theme-init.php';
}


/**
 * Codester Framework Functions
 * @package digtek
 * @since 1.0.0
 */
if (file_exists(DIGTEK_INC . '/theme-cs-function.php')) {
    require_once DIGTEK_INC . '/theme-cs-function.php';
}


/**
 * Theme Helpers Functions
 * @package digtek
 * @since 1.0.0
 */
if (file_exists(DIGTEK_INC . '/theme-helper-functions.php')) {

    require_once DIGTEK_INC . '/theme-helper-functions.php';
    if (!function_exists('digtek')) {
        function digtek()
        {
            return class_exists('Digtek_Helper_Functions') ? new Digtek_Helper_Functions() : false;
        }
    }
}
/**
 * Nav menu fallback function
 * @since 1.0.0
 */
if (is_user_logged_in()) {
    function digtek_theme_fallback_menu()
    {
        get_template_part('template-parts/default', 'menu');
    }
}

// theme-color

if (file_exists(DIGTEK_INC . '/theme-color.php')) {
    require_once DIGTEK_INC . '/theme-color.php';
}



// register_block_style

function digtek_register_block_styles() {
    register_block_style(
        'core/paragraph',
        array(
            'name'  => 'fancy-paragraph',
            'label' => __( 'Fancy Paragraph', 'digtek' ),
        )
    );
}
add_action( 'init', 'digtek_register_block_styles' );


// register_block_pattern

function digtek_register_block_patterns() {
    register_block_pattern(
        'digtek/hero-section',
        array(
            'title'       => __( 'Hero Section', 'digtek' ),
            'description' => _x( 'A custom hero section with image and text', 'Block pattern description', 'digtek' ),
            'content'     => '<!-- wp:paragraph --><p>Your content here...</p><!-- /wp:paragraph -->',
        )
    );
}
add_action( 'init', 'digtek_register_block_patterns' );


// custom-header

function digtek_custom_header_setup() {
    add_theme_support( 'custom-header', array(
        'default-image' => get_template_directory_uri() . '/inc/theme-settings/images/header/00.png',
        'width'         => 1000,
        'height'        => 250,
        'flex-width'    => true,
        'flex-height'   => true,
        'default-text-color' => '000000',  // Default header text color
        'wp-head-callback'   => 'digtek_header_style',  // Custom callback function for header styles
    ) );
}

// custom-background

function digtek_custom_background_setup() {
    add_theme_support( 'custom-background', array(
        'default-color' => 'ffffff',
    ) );
}
add_action( 'after_setup_theme', 'digtek_custom_background_setup' );

