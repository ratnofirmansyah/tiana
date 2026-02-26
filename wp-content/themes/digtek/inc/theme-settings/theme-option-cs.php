<?php
/**
 * Theme Options
 * @package digtek
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit(); // exit if access directly
}
// Control core classes for avoid errors
if (class_exists('CSF')) {

    $allowed_html = digtek()->kses_allowed_html(array('mark'));
    $prefix = 'digtek';
    // Create options
    CSF::createOptions($prefix . '_theme_options', array(
        'menu_title' => esc_html__('Theme Options', 'digtek'),
        'menu_slug' => 'digtek_theme_options',
        'menu_parent' => 'digtek_theme_options',
        'menu_type' => 'submenu',
        'footer_credit' => ' ',
        'menu_icon' => 'fa fa-filter',
        'show_footer' => false,
        'enqueue_webfont' => false,
        'show_search' => true,
        'show_reset_all' => true,
        'show_reset_section' => true,
        'show_all_options' => false,
        'theme' => 'dark',
        'framework_title' => digtek()->get_theme_info('name')
    ));

    /*-------------------------------------------------------
        ** General  Options
    --------------------------------------------------------*/
    CSF::createSection($prefix . '_theme_options', array(
        'title' => esc_html__('General', 'digtek'),
        'id' => 'general_options',
        'icon' => 'fas fa-cogs',
    ));
    /* Preloader */
    CSF::createSection($prefix . '_theme_options', array(
        'title' => esc_html__('Preloader & SVG Enable', 'digtek'),
        'id' => 'theme_general_preloader_options',
        'icon' => 'fa fa-spinner',
        'parent' => 'general_options',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Preloader Options', 'digtek') . '</h3>'
            ),
            array(
                'id' => 'preloader_enable',
                'title' => esc_html__('Preloader', 'digtek'),
                'type' => 'switcher',
                'desc' => wp_kses(__('you can set <mark>Yes / No</mark> to enable/disable preloader', 'digtek'), $allowed_html),
                'default' => false,
            ),
            array(
                'id' => 'preloader_bg_color',
                'title' => esc_html__('Preloader Background Color', 'digtek'),
                'type' => 'color',
                'default' => '',
                'desc' => wp_kses(__('you can set <mark>overlay color</mark> for preloader background image', 'digtek'), $allowed_html),
                'dependency' => array('preloader_enable', '==', 'true')
            ),

            array(
                'id'      => 'preloader_title',
                'type'    => 'text',
                'title'   => esc_html__('Preloader Title', 'digtek'),
                'desc'    => esc_html__('Enter the title to display during preloading. If left empty, the site name will be used.', 'digtek'),
                'default' => get_bloginfo('name'),
                'dependency' => array('preloader_enable', '==', 'true')
            ),

            array(
                'id'      => 'loading_text',
                'type'    => 'text',
                'title'   => esc_html__('Preloader Loading Text', 'digtek'),
                'desc'    => esc_html__('Enter the text to display below the loading animation.', 'digtek'),
                'default' => '',
                'dependency' => array('preloader_enable', '==', 'true')
            ),
              
            array(
                'id' => 'enable_svg_upload',
                'type' => 'switcher',
                'title' => esc_html__('Enable Svg Upload ?', 'digtek'),
                'desc' => esc_html__('If you want to enable or disable svg upload you can set ( YES / NO )', 'digtek'),
                'default' => true,
            ),
        )
    ));

    /*-------------------------------------------------------
           ** Typography  Options
    --------------------------------------------------------*/
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'typography',
        'title' => esc_html__('Typography', 'digtek'),
        'icon' => 'fas fa-text-height',
        'parent' => 'general_options',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Body Font Options', 'digtek') . '</h3>',
            ),
            array(
                'type' => 'typography',
                'title' => esc_html__('Typography', 'digtek'),
                'id' => '_body_font',
                'default' => array(
                    'font-family' => 'Plus Jakarta Sans',
                    'font-size' => '16',
                    'line-height' => '26',
                    'unit' => 'px',
                    'type' => 'google',
                ),
                'color' => false,
                'subset' => false,
                'text_align' => false,
                'text_transform' => false,
                'letter_spacing' => false,
                'line_height' => false,
                'desc' => wp_kses(__('you can set <mark>font</mark> for all html tags (if not use different heading font)', 'digtek'), $allowed_html),
            ),
            array(
                'id' => 'body_font_variant',
                'type' => 'select',
                'title' => esc_html__('Load Font Variant', 'digtek'),
                'multiple' => true,
                'chosen' => true,
                'options' => array(
                    '300' => esc_html__('Light 300', 'digtek'),
                    '400' => esc_html__('Regular 400', 'digtek'),
                    '500' => esc_html__('Medium 500', 'digtek'),
                    '600' => esc_html__('Semi Bold 600', 'digtek'),
                    '700' => esc_html__('Bold 700', 'digtek'),
                    '800' => esc_html__('Extra Bold 800', 'digtek'),
                ),
                'default' => array('400', '500', '600', '700')
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Heading Font Options', 'digtek') . '</h3>',
            ),
            array(
                'type' => 'switcher',
                'id' => 'heading_font_enable',
                'title' => esc_html__('Heading Font', 'digtek'),
                'desc' => wp_kses(__('you can set <mark>yes</mark> to select different heading font', 'digtek'), $allowed_html),
                'default' => true
            ),
            array(
                'type' => 'typography',
                'title' => esc_html__('Typography', 'digtek'),
                'id' => 'heading_font',
                'default' => array(
                    'font-family' => 'Plus Jakarta Sans',
                    'type' => 'google',
                ),
                'color' => false,
                'subset' => false,
                'text_align' => false,
                'text_transform' => false,
                'letter_spacing' => false,
                'font_size' => false,
                'line_height' => false,
                'desc' => wp_kses(__('you can set <mark>font</mark> for  for heading tag .eg: h1,h2,h3,h4,h5,h6', 'digtek'), $allowed_html),
                'dependency' => array('heading_font_enable', '==', 'true')
            ),
            array(
                'id' => 'heading_font_variant',
                'type' => 'select',
                'title' => esc_html__('Load Font Variant', 'digtek'),
                'multiple' => true,
                'chosen' => true,
                'options' => array(
                    '300' => esc_html__('Light 300', 'digtek'),
                    '400' => esc_html__('Regular 400', 'digtek'),
                    '500' => esc_html__('Medium 500', 'digtek'),
                    '600' => esc_html__('Semi Bold 600', 'digtek'),
                    '700' => esc_html__('Bold 700', 'digtek'),
                    '800' => esc_html__('Extra Bold 800', 'digtek'),
                ),
                'default' => array('400', '500', '600', '700'),
                'dependency' => array('heading_font_enable', '==', 'true')
            ),
        )
    ));

    /*-------------------------------------------------------
           ** Back To Top  Options
    --------------------------------------------------------*/
    CSF::createSection($prefix . '_theme_options', array(
        'title' => esc_html__('Back To Top', 'digtek'),
        'id' => 'theme_general_back_top_options',
        'icon' => 'fa fa-arrow-up',
        'parent' => 'general_options',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Back Top Options', 'digtek') . '</h3>'
            ),
            array(
                'id' => 'back_top_enable',
                'title' => esc_html__('Back Top', 'digtek'),
                'type' => 'switcher',
                'desc' => wp_kses(__('you can set <mark>Yes / No</mark> to show/hide back to top', 'digtek'), $allowed_html),
                'default' => true,
            ),
            array(
                'id' => 'back_top_icon',
                'title' => esc_html__('Back Top Icon', 'digtek'),
                'type' => 'icon',
                'default' => 'fas fa-arrow-up-long',
                'desc' => wp_kses(__('you can set <mark>icon</mark> for back to top.', 'digtek'), $allowed_html),
                'dependency' => array('back_top_enable', '==', 'true')
            ),
        )
    ));

    /*-------------------------------------------------------
        ** Menu Sidebar  Options
    --------------------------------------------------------*/
    CSF::createSection($prefix . '_theme_options', array(
        'title' => esc_html__('Menu Sidebar', 'digtek'),
        'id' => 'theme_general_sidebar_options',
        'icon' => 'fas fa-bars',
        'parent' => 'general_options',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Menu Sidebar Option', 'digtek') . '</h3>'
            ),
            array(
                'id' => 'sidebar_logo',
                'type' => 'media',
                'title' => esc_html__('Sidebar Logo', 'digtek'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> logo</mark> here it will overwrite customizer uploaded logo', 'digtek'), $allowed_html),
            ),
            array(
                'id' => 'sidebar_text',
                'type' => 'textarea',
                'title' => esc_html__('Sidebar Text', 'digtek'),
                'default' => esc_html__('We understand better that enim ad minim veniam, consectetur adipis cing elit, sed do', 'digtek'),
            ),
            array(
                'id' => 'sidebar_title',
                'type' => 'text',
                'title' => esc_html__('Sidebar Title', 'digtek'),
                'default' => esc_html__('Contact Info', 'digtek'),
            ),
            array(
                'id'        => 'sidebar_contact_info',
                'type'      => 'repeater',
                'title'     => 'Contact Info Repeater',
                'fields'    => array(
              
                  array(
                    'id'    => 'sidebar_contact_icon',
                    'type'  => 'icon',
                    'default' => 'fa-solid fa-phone-volume',
                    'title' => 'Info Icon',
                  ),              
                  array(
                    'id'    => 'sidebar_contact_text',
                    'type'  => 'text',
                    'title' => 'Info Text',
                  ),
                  array(
                    'id'    => 'sidebar_contact_text_url',
                    'type'  => 'text',
                    'title' => 'Info Url',
                  ),
              
                )
            ),
            array(
                'id' => 'sidebar_btn_enabled',
                'type' => 'switcher',
                'title' => esc_html__('Show Button', 'digtek'),
                'default' => true,
                'desc' => wp_kses(__('you can <mark> show/hide</mark> navbar button of header one', 'digtek'), $allowed_html),
            ),
            array(
                'id' => 'sidebar_btn_text',
                'type' => 'text',
                'title' => esc_html__('Button Text', 'digtek'),
                'default' => 'Get A Quote',
                'dependency' => array('sidebar_btn_enabled', '==', 'true')
            ),
            array(
                'id' => 'sidebar_btn_text_url',
                'type' => 'text',
                'title' => esc_html__('Button Url', 'digtek'),
                'default' => esc_html__('#', 'digtek'),
                'dependency' => array('sidebar_btn_enabled', '==', 'true')
            ),
            array(
                'id'        => 'sidebar_socials',
                'type'      => 'repeater',
                'title'     => 'Socials Info Repeater',
                'fields'    => array(
              
                  array(
                    'id'    => 'sidebar_socials_icon',
                    'type'  => 'icon',
                    'default' => 'fa fa-facebook',
                    'title' => 'Socials Info Icon',
                  ),  
                  array(
                    'id'    => 'sidebar_socials_icon_url',
                    'type'  => 'text',
                    'title' => 'Socials Info Url',
                  ),
              
                )
            ),
        )
    ));

    /*-------------------------------------------------------
           ** Theme Color  Options
    --------------------------------------------------------*/
    CSF::createSection($prefix . '_theme_options', array(
        'title' => esc_html__('Theme Colors', 'digtek'),
        'id' => 'theme_color',
        'icon' => 'fa fa-palette',
        'parent' => 'general_options',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Theme Color Option', 'digtek') . '</h3>'
            ),
            array(
            'id'      => 'theme_body_color',
            'type'    => 'color',
            'title'   => 'Body Color',
            'default' => '#FFFFFF'
              ),
              array(
            'id'      => 'theme_black_color',
            'type'    => 'color',
            'title'   => 'Black Color',
            'default' => '#000000'
              ),
              array(
            'id'      => 'theme_white_color',
            'type'    => 'color',
            'title'   => 'White Color',
            'default' => '#FFFFFF'
              ), 
            array(
            'id'      => 'theme_color_1',
            'type'    => 'color',
            'title'   => 'Primary Color',
            'default' => '#6A47ED'
            ),
            array(
            'id'      => 'theme_color_2',
            'type'    => 'color',
            'title'   => 'Secondary Color',
            'default' => '#C6F806'
            ),       
            array(
            'id'      => 'theme_header_color',
            'type'    => 'color',
            'title'   => 'Header Color',
            'default' => '#17012C'
            ),
            array(
            'id'      => 'theme_text_color',
            'type'    => 'color',
            'title'   => 'Text Color',
            'default' => '#504E4E'
            ),
            array(
            'id'      => 'theme_border_color',
            'type'    => 'color',
            'title'   => 'Border Color',
            'default' => '#E5E5E5'
            ),
            array(
            'id'      => 'theme_bg_color',
            'type'    => 'color',
            'title'   => 'Border Color',
            'default' => '#F6F3FE'
            ),          
              
        )
    ));

    /*----------------------------------
        Header & Footer Style
    -----------------------------------*/
    CSF::createSection($prefix . '_theme_options', array(
        'title' => esc_html__('Set Header & Footer Type', 'digtek'),
        'id' => 'header_footer_style_options',
        'icon' => 'eicon-banner',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => esc_html__('Global Header Style', 'digtek'),
            ),
            array(
                'id' => 'navbar_type',
                'title' => esc_html__('Navbar Type', 'digtek'),
                'type' => 'image_select',
                'options' => array(
                    '' => DIGTEK_THEME_SETTINGS_IMAGES . '/header/00.png',
                    'style-01' => DIGTEK_THEME_SETTINGS_IMAGES . '/header/01.png',
                    'style-02' => DIGTEK_THEME_SETTINGS_IMAGES . '/header/02.png',
                ),
                'default' => '',
                'desc' => wp_kses(__('you can set <mark>navbar type</mark> it will show in every page except you select specific navbar type form page settings.', 'digtek'), $allowed_html),
            ),
            array(
                'type' => 'subheading',
                'content' => esc_html__('Global Footer Style', 'digtek'),
            ),
            array(
                'id' => 'footer_type',
                'title' => esc_html__('Footer Type', 'digtek'),
                'type' => 'image_select',
                'options' => array(
                    '' => DIGTEK_THEME_SETTINGS_IMAGES . '/footer/00.png',
                ),
                'default' => '',
                'desc' => wp_kses(__('you can set <mark>footer type</mark> it will show in every page except you select specific navbar type form page settings.', 'digtek'), $allowed_html),
            ),
        )
    ));

    /*-------------------------------------------------------
       ** Entire Site Header Options
   --------------------------------------------------------*/
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'headers_settings',
        'title' => esc_html__('Headers', 'digtek'),
        'icon' => 'fa fa-home'
    ));
    /* Default Header Style */
    CSF::createSection($prefix . '_theme_options', array(
        'title' => esc_html__('Default Header', 'digtek'),
        'id' => 'theme_header_default_options',
        'icon' => 'fa fa-image',
        'parent' => 'headers_settings',
       'fields' => array(
        array(
            'type' => 'subheading',
            'content' => '<h3>' . esc_html__('Default Header Settings', 'digtek') . '</h3>'
        ),
        array(
            'id' => 'header_default_logo',
            'type' => 'media',
            'title' => esc_html__('Logo', 'digtek'),
            'library' => 'image',
            'desc' => wp_kses(__('you can upload <mark> logo</mark> here it will overwrite customizer uploaded logo', 'digtek'), $allowed_html),
        ),
        array(
            'id' => 'header_default_right_btn_enabled',
            'type' => 'switcher',
            'title' => esc_html__('Show Right Button', 'digtek'),
            'default' => true,
            'desc' => wp_kses(__('you can <mark> show/hide</mark> navbar button of header one', 'digtek'), $allowed_html),
        ),
        array(
            'id' => 'header_default_right_btn_text',
            'type' => 'text',
            'title' => esc_html__('Right Button Text', 'digtek'),
            'default' => 'Contact Us',
            'dependency' => array('header_default_right_btn_enabled', '==', 'true'),
        ),
        array(
            'id' => 'header_default_right_btn_url',
            'type' => 'text',
            'title' => esc_html__('Right Button Url', 'digtek'),
            'default' => esc_html__('#', 'digtek'),
            'dependency' => array('header_default_right_btn_enabled', '==', 'true'),
        ),
          
        )
    ));

    /* Header Style 01 */
    CSF::createSection($prefix . '_theme_options', array(
    'title' => esc_html__('Header One', 'digtek'),
    'id' => 'theme_header_one_options',
    'icon' => 'fa fa-image',
    'parent' => 'headers_settings',
    'fields' => array(
        array(
            'type' => 'subheading',
            'content' => '<h3>' . esc_html__('Header One Settings', 'digtek') . '</h3>'
        ),
        array(
            'id' => 'header_1_logo',
            'type' => 'media',
            'title' => esc_html__('Logo One', 'digtek'),
            'library' => 'image',
            'desc' => wp_kses(__('you can upload <mark> logo</mark> here it will overwrite customizer uploaded logo', 'digtek'), $allowed_html),
        ),   
        array(
            'id' => 'header_1_logo_2',
            'type' => 'media',
            'title' => esc_html__('Logo Two', 'digtek'),
            'library' => 'image',
            'desc' => wp_kses(__('you can upload <mark> logo</mark> here it will overwrite customizer uploaded logo', 'digtek'), $allowed_html),
        ),   
        array(
            'id' => 'header_1_search_enabled',
            'type' => 'switcher',
            'title' => esc_html__('Show Search Button', 'digtek'),
            'default' => true,
            'desc' => wp_kses(__('you can <mark> show/hide</mark> navbar search button of header one', 'digtek'), $allowed_html),
        ),
        array(
            'id' => 'header_1_right_btn_enabled',
            'type' => 'switcher',
            'title' => esc_html__('Show Right Button', 'digtek'),
            'default' => true,
            'desc' => wp_kses(__('you can <mark> show/hide</mark> navbar button of header one', 'digtek'), $allowed_html),
        ),
        array(
            'id' => 'header_1_right_btn_text',
            'type' => 'text',
            'title' => esc_html__('Right Button Text', 'digtek'),
            'default' => 'Get Started',
            'dependency' => array('header_1_right_btn_enabled', '==', 'true'),
        ),
        array(
            'id' => 'header_1_right_btn_url',
            'type' => 'text',
            'title' => esc_html__('Right Button Url', 'digtek'),
            'default' => esc_html__('#', 'digtek'),
            'dependency' => array('header_1_right_btn_enabled', '==', 'true'),
        ),  
            
    )
));

   /* Header Style 2*/
   CSF::createSection($prefix . '_theme_options', array(
    'title' => esc_html__('Header Two', 'digtek'),
    'id' => 'theme_header_two_options',
    'icon' => 'fa fa-image',
    'parent' => 'headers_settings',
    'fields' => array(
        array(
            'type' => 'subheading',
            'content' => '<h3>' . esc_html__('Header Two Settings', 'digtek') . '</h3>'
        ),
        array(
            'id' => 'header_2_logo',
            'type' => 'media',
            'title' => esc_html__('Logo', 'digtek'),
            'library' => 'image',
            'desc' => wp_kses(__('you can upload <mark> logo</mark> here it will overwrite customizer uploaded logo', 'digtek'), $allowed_html),
        ),
        array(
            'id' => 'header_2_right_btn_enabled',
            'type' => 'switcher',
            'title' => esc_html__('Show Right Button', 'digtek'),
            'default' => true,
            'desc' => wp_kses(__('you can <mark> show/hide</mark> navbar button of header one', 'digtek'), $allowed_html),
        ),
        array(
            'id' => 'header_2_right_btn_text',
            'type' => 'text',
            'title' => esc_html__('Right Button Text', 'digtek'),
            'default' => 'Contact Us',
            'dependency' => array('header_2_right_btn_enabled', '==', 'true'),
        ),
        array(
            'id' => 'header_2_right_btn_url',
            'type' => 'text',
            'title' => esc_html__('Right Button Url', 'digtek'),
            'default' => esc_html__('#', 'digtek'),
            'dependency' => array('header_2_right_btn_enabled', '==', 'true'),
        ),
          
        )
    ));   
  

    /* Breadcrumb */
    CSF::createSection($prefix . '_theme_options', array(
        'title' => esc_html__('Breadcrumb', 'digtek'),
        'id' => 'breadcrumb_options',
        'icon' => ' eicon-product-breadcrumbs',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Breadcrumb Options', 'digtek') . '</h3>'
            ),
            array(
                'id' => 'breadcrumb_enabled',
                'title' => esc_html__('Breadcrumb', 'digtek'),
                'type' => 'switcher',
                'desc' => wp_kses(__('you can set <mark>Yes / No</mark> to show/hide breadcrumb', 'digtek'), $allowed_html),
                'default' => true,
            ),
            array(
                'id' => 'breadcrumb_main_image',
                'type' => 'media',
                'title' => esc_html__('Background Image', 'digtek'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark>background image</mark> here.', 'digtek'), $allowed_html),
                'dependency' => array('breadcrumb_enabled', '==', 'true')
            ),
            array(
                'id' => 'breadcrumb_shape_image',
                'type' => 'media',
                'title' => esc_html__('Left Shape Image', 'digtek'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark>shape image</mark> here.', 'digtek'), $allowed_html),
                'dependency' => array('breadcrumb_enabled', '==', 'true')
            ),
            array(
                'id' => 'breadcrumb_shape_image_2',
                'type' => 'media',
                'title' => esc_html__('Right Shape Image', 'digtek'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark>shape image</mark> here.', 'digtek'), $allowed_html),
                'dependency' => array('breadcrumb_enabled', '==', 'true')
            ),
        )
    ));

    /*-------------------------------------------------------
           ** Footer  Options
    --------------------------------------------------------*/
    CSF::createSection($prefix . '_theme_options', array(
        'title' => esc_html__('Footer', 'digtek'),
        'id' => 'footer_options',
        'icon' => ' eicon-footer',
    ));
    // Default Footer  Options
    CSF::createSection($prefix . '_theme_options', array(
        'parent' => 'footer_options',
        'id' => 'footer_general_options',
        'title' => esc_html__('Default Footer', 'digtek'),
        'icon' => 'fa fa-list-ul',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Default Footer Settings', 'digtek') . '</h3>'
            ),  
            array(
                'id' => 'footer_default_logo',
                'type' => 'media',
                'title' => esc_html__('Logo', 'digtek'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> logo</mark> here it will overwrite customizer uploaded logo', 'digtek'), $allowed_html),
            ),
            array(
                'id' => 'footer_default_text',
                'type' => 'textarea',
                'title' => esc_html__('Paragraph Text Here', 'digtek'),
                'default' => esc_html__('It is a long established fact that a reader will be distracted', 'digtek')
            ), 
            array(
                'id'        => 'footer_default_socials_repeater',
                'type'      => 'repeater',
                'title'     => 'Socials Info Repeater',
                'fields'    => array(
              
                  array(
                    'id'    => 'footer_default_socials_icon',
                    'type'  => 'icon',
                    'default' => 'fa fa-facebook-f',
                    'title' => 'Socials Info Icon',
                  ),  
                  array(
                    'id'    => 'footer_default_socials_icon_url',
                    'type'  => 'text',
                    'title' => 'Socials Info Url',
                  ),
              
                )
            ),
            array(
                'id' => 'footer_default_blog_title',
                'type' => 'text',
                'title' => esc_html__('Blog Title', 'digtek'),
                'default' => esc_html__('Recent Posts', 'digtek')
            ),
            array(
                'id' => 'footer_default_contact_title',
                'type' => 'text',
                'title' => esc_html__('Contact Title', 'digtek'),
                'default' => esc_html__('Contact Us', 'digtek')
            ), 
            array(
                'id' => 'footer_default_news_shortcode',
                'type' => 'text',
                'title' => esc_html__('Newsletter Shortcode', 'digtek'),
                'default' => esc_html__('#', 'digtek')
            ), 
            array(
                'id'        => 'footer_default_contacts_repeater',
                'type'      => 'repeater',
                'title'     => 'Contact Info Repeater',
                'fields'    => array(
              
                  array(
                    'id'    => 'footer_default_contacts_icon',
                    'type'  => 'icon',
                    'default' => 'fas fa-phone-volume',
                    'title' => 'Contact Icon',
                  ), 
                  array(
                    'id'    => 'footer_default_contacts_info',
                    'type'  => 'text',
                    'title' => 'Contact Text',
                  ),
                  array(
                    'id'    => 'footer_default_contacts_url',
                    'type'  => 'text',
                    'title' => 'Contact Url',
                  ),
              
                )
            ),  
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Footer Copyright Area Options', 'digtek') . '</h3>'
            ), 
            array(
                'id'        => 'footer_default_bottom_menu_repeater',
                'type'      => 'repeater',
                'title'     => 'Bottom Menu Repeater',
                'fields'    => array(
                  array(
                    'id'    => 'footer_default_bottom_menu',
                    'type'  => 'text',
                    'title' => 'Menu Text',
                  ),
                  array(
                    'id'    => 'footer_default_bottom_menu_url',
                    'type'  => 'text',
                    'title' => 'Menu Url',
                  ),
              
                )
            ),         
            array(
                'id' => 'copyright_text',
                'title' => esc_html__('Copyright Area Text', 'digtek'),
                'type' => 'textarea',
                'desc' => wp_kses(__('use  <mark>{copy}</mark> for copyright symbol, use <mark>{year}</mark> for current year, ', 'digtek'), $allowed_html)
            ),
          
        )
    ));


    /*-------------------------------------------------------
          ** Blog  Options
    --------------------------------------------------------*/
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'blog_settings',
        'title' => esc_html__('Blog Settings', 'digtek'),
        'icon' => 'fa fa-book'
    ));
    CSF::createSection($prefix . '_theme_options', array(
        'parent' => 'blog_settings',
        'id' => 'blog_post_options',
        'title' => esc_html__('Blog Post', 'digtek'),
        'icon' => 'fa fa-list-ul',
        'fields' => Digtek_Group_Fields::post_meta('blog_post', esc_html__('Blog Page', 'digtek'))
    ));
    CSF::createSection($prefix . '_theme_options', array(
        'parent' => 'blog_settings',
        'id' => 'blog_single_post_options',
        'title' => esc_html__('Single Post', 'digtek'),
        'icon' => 'fa fa-list-alt',
        'fields' => Digtek_Group_Fields::post_meta('blog_single_post', esc_html__('Blog Single Page', 'digtek'))
    )); 

    /*-------------------------------------------------------
          ** Pages & templates Options
   --------------------------------------------------------*/
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'pages_and_template',
        'title' => esc_html__('Pages Settings', 'digtek'),
        'icon' => 'fa fa-files-o'
    ));
    /*  404 page options */
    CSF::createSection($prefix . '_theme_options', array(
        'id' => '404_page',
        'title' => esc_html__('404 Page', 'digtek'),
        'parent' => 'pages_and_template',
        'icon' => 'fa fa-exclamation-triangle',
        'fields' => array(
            array(
                'id' => 'error_bg_switch',
                'title' => esc_html__('404 Image Enable', 'digtek'),
                'type' => 'switcher',
                'desc' => wp_kses(__('you can set <mark>Yes / No</mark> to show/hide breadcrumb', 'digtek'), $allowed_html),
                'default' => true,
            ),
            array(
                'id' => 'error_bg',
                'title' => esc_html__('404 Image', 'digtek'),
                'type' => 'media',
                'desc' => wp_kses(__('you can set <mark>background</mark> for breadcrumb', 'digtek'), $allowed_html),
                'dependency' => array('error_bg_switch', '==', 'true')
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('404 Page Options', 'digtek') . '</h3>',
            ),
            array(
                'id' => '404_title',
                'title' => esc_html__('Title', 'digtek'),
                'type' => 'text',
                'info' => wp_kses(__('you can change <mark>title</mark> of 404 page', 'digtek'), $allowed_html),
                'attributes' => array('placeholder' => esc_html__('Sorry! The Page Not Found', 'digtek'))
            ),
            array(
                'id' => '404_paragraph',
                'title' => esc_html__('Paragraph', 'digtek'),
                'type' => 'textarea',
                'info' => wp_kses(__('you can change <mark>paragraph</mark> of 404 page', 'digtek'), $allowed_html),
                'attributes' => array('placeholder' => esc_html__('Oops! The page you are looking for does not exit. it might been moved or deleted.', 'digtek'))
            ),
            array(
                'id' => '404_button_text',
                'title' => esc_html__('Button Text', 'digtek'),
                'type' => 'text',
                'info' => wp_kses(__('you can change <mark>button text</mark> of 404 page', 'digtek'), $allowed_html),
                'attributes' => array('placeholder' => esc_html__('back to home', 'digtek'))
            ),
        )
    ));

    /*  blog page options */
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'blog_page',
        'title' => esc_html__('Blog Page', 'digtek'),
        'parent' => 'pages_and_template',
        'icon' => 'fa fa-indent',
        'fields' => Digtek_Group_Fields::page_layout_options(esc_html__('Blog', 'digtek'), 'blog')
    ));
    /*  blog single page options */
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'blog_single_page',
        'title' => esc_html__('Blog Single Page', 'digtek'),
        'parent' => 'pages_and_template',
        'icon' => 'fa fa-indent',
        'fields' => Digtek_Group_Fields::page_layout_options(esc_html__('Blog Single', 'digtek'), 'blog_single')
    ));
    /*  archive page options */
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'archive_page',
        'title' => esc_html__('Archive Page', 'digtek'),
        'parent' => 'pages_and_template',
        'icon' => 'fa fa-archive',
        'fields' => Digtek_Group_Fields::page_layout_options(esc_html__('Archive', 'digtek'), 'archive')
    ));
    /*  search page options */
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'search_page',
        'title' => esc_html__('Search Page', 'digtek'),
        'parent' => 'pages_and_template',
        'icon' => 'fa fa-search',
        'fields' => Digtek_Group_Fields::page_layout_options(esc_html__('Search', 'digtek'), 'search')
    ));


    /*-------------------------------------------------------
    ** Custom Slug Options
    --------------------------------------------------------*/
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'custom_slug_options',
        'title' => esc_html__('Custom Slug Url', 'digtek'),
        'icon' => 'eicon-editor-external-link',
        'fields' => array(
            array(
                'id'    => 'service_slug',
                'type'  => 'text',
                'title' => esc_html__('Service Slug', 'digtek'),
                'desc'  => esc_html__('Set the slug for the Service custom post type. Example: "all-service"', 'digtek'),
                'default' => 'all-service',
            ),
            array(
                'id'    => 'project_slug',
                'type'  => 'text',
                'title' => esc_html__('Project Slug', 'digtek'),
                'desc'  => esc_html__('Set the slug for the Project custom post type. Example: "all-project"', 'digtek'),
                'default' => 'all-project',
            ),
            array(
                'id'    => 'team_slug',
                'type'  => 'text',
                'title' => esc_html__('Team Slug', 'digtek'),
                'desc'  => esc_html__('Set the slug for the Team custom post type. Example: "all-team"', 'digtek'),
                'default' => 'all-team',
            ),
        )
    ));

    /*-------------------------------------------------------
    ** Mouse Animation Options
    --------------------------------------------------------*/
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'mouse_animation_options',
        'title' => esc_html__('Mouse Animation Option', 'digtek'),
        'icon' => 'eicon-click',
        'fields' => array(
            array(
                'id' => 'mouse_animation',
                'title' => esc_html__('Mouse Animation Enable', 'digtek'),
                'type' => 'switcher',
                'desc' => wp_kses(__('you can set <mark>Yes / No</mark> to show/hide Mouse Animation', 'digtek'), $allowed_html),
                'default' => true,
            ),
        )
    ));

    /*-------------------------------------------------------
           ** Backup  Options
    --------------------------------------------------------*/
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'backup',
        'title' => esc_html__('Import / Export', 'digtek'),
        'icon' => 'eicon-export-kit',
        'fields' => array(
            array(
                'type' => 'notice',
                'style' => 'warning',
                'content' => esc_html__('You can save your current options. Download a Backup and Import.', 'digtek'),
            ),
            array(
                'type' => 'backup',
                'title' => esc_html__('Backup & Import', 'digtek')
            )
        )
    ));
}
