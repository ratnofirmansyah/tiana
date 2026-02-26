<?php
/**
 *Theme Group Fields
 * @package digtek
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit(); // exit if access directly
}


if (!class_exists('Digtek_Group_Fields')) {

    class Digtek_Group_Fields
    {
        
        /**
         * $instance
         * @since 1.0.0
         */
        private static $instance;


        /**
         * construct()
         * @since 1.0.0
         */
        public function __construct()
        {

        }

        /**
         * getInstance()
         * @since 1.0.0
         */
        public static function getInstance()
        {
            if (null == self::$instance) {
                self::$instance = new self();
            }
            return self::$instance;
        }

        /**
         * Page layout options
         * @since 1.0.0
         */
        public static function page_layout()
        {
            $fields = array(
                array(
                    'type' => 'subheading',
                    'content' => esc_html__('Page Layouts & Colors Options', 'digtek'),
                ),
                array(
                    'id' => 'page_layout',
                    'type' => 'image_select',
                    'title' => esc_html__('Select Page Layout', 'digtek'),
                    'options' => array(
                        'default' => DIGTEK_THEME_SETTINGS_IMAGES . '/page/default.png',
                        'left-sidebar' => DIGTEK_THEME_SETTINGS_IMAGES . '/page/left-sidebar.png',
                        'right-sidebar' => DIGTEK_THEME_SETTINGS_IMAGES . '/page/right-sidebar.png',
                        'blank' => DIGTEK_THEME_SETTINGS_IMAGES . '/page/blank.png',
                    ),
                    'default' => 'default'
                ),
                array(
                    'id' => 'page_bg_color',
                    'type' => 'color',
                    'title' => esc_html__('Page Background Color', 'digtek'),
                    'default' => ''
                ),
                array(
                    'id' => 'page_content_bg_color',
                    'type' => 'color',
                    'title' => esc_html__('Page Content Background Color', 'digtek'),
                    'default' => ''
                ),
                array(
                    'id' => 'page_content_text_color',
                    'type' => 'color',
                    'title' => esc_html__('Page Content Text Color', 'digtek'),
                    'default' => ''
                )

            );

            return $fields;
        }

        /**
         * Page container options
         * @since 1.0.0
         */
        public static function Page_Container_Options($type)
        {
            $fields = array();
            $allowed_html = digtek()->kses_allowed_html(array('mark'));
            if ('header_options' == $type) {
                $fields = array(
                    array(
                        'type' => 'subheading',
                        'content' => esc_html__('Page Header, Footer & Breadcrumb Options', 'digtek'),
                    ),
                    array(
                        'id' => 'page_title',
                        'type' => 'switcher',
                        'title' => esc_html__('Page Title', 'digtek'),
                        'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show/hide page title.', 'digtek'), $allowed_html),
                        'text_on' => esc_html__('Yes', 'digtek'),
                        'text_off' => esc_html__('No', 'digtek'),
                        'default' => true
                    ),
                    array(
                        'id' => 'page_breadcrumb',
                        'type' => 'switcher',
                        'title' => esc_html__('Page Breadcrumb', 'digtek'),
                        'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show/hide page breadcrumb.', 'digtek'), $allowed_html),
                        'text_on' => esc_html__('Yes', 'digtek'),
                        'text_off' => esc_html__('No', 'digtek'),
                        'default' => true
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
                        'desc' => wp_kses(__('you can set <mark>navbar type</mark> transparent type or solid background.', 'digtek'), $allowed_html),
                    ),
                    array(
                        'id' => 'footer_type',
                        'title' => esc_html__('Footer Type', 'digtek'),
                        'type' => 'image_select',
                        'options' => array(
                            '' => DIGTEK_THEME_SETTINGS_IMAGES . '/footer/00.png',
                        ),
                        'default' => '',
                        'desc' => wp_kses(__('you can set <mark>footer type</mark> transparent type or solid background.', 'digtek'), $allowed_html),
                    ),

                );
            } elseif ('container_options' == $type) {
                $fields = array(
                    array(
                        'type' => 'subheading',
                        'content' => esc_html__('Page Width & Padding Options', 'digtek'),
                    ),
                    array(
                        'id' => 'page_container',
                        'type' => 'switcher',
                        'title' => esc_html__('Page Full Width', 'digtek'),
                        'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to set page container full width.', 'digtek'), $allowed_html),
                        'text_on' => esc_html__('Yes', 'digtek'),
                        'text_off' => esc_html__('No', 'digtek'),
                        'default' => false
                    ),
                    array(
                        'type' => 'subheading',
                        'content' => esc_html__('Page Spacing Options', 'digtek'),
                    ),
                    array(
                        'id' => 'page_spacing_top',
                        'title' => esc_html__('Page Spacing Top', 'digtek'),
                        'type' => 'slider',
                        'desc' => wp_kses(__('you can set <mark>Padding Top</mark> for page container.', 'digtek'), $allowed_html),
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                        'unit' => 'px',
                        'default' => 120,
                    ),
                    array(
                        'id' => 'page_spacing_bottom',
                        'title' => esc_html__('Page Spacing Bottom', 'digtek'),
                        'type' => 'slider',
                        'desc' => wp_kses(__('you can set <mark>Padding Bottom</mark> for page container.', 'digtek'), $allowed_html),
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                        'unit' => 'px',
                        'default' => 120,
                    ),
                    array(
                        'type' => 'subheading',
                        'content' => esc_html__('Page Content Spacing Options', 'digtek'),
                    ),
                    array(
                        'id' => 'page_content_spacing',
                        'type' => 'switcher',
                        'title' => esc_html__('Page Content Spacing', 'digtek'),
                        'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to set page content spacing.', 'digtek'), $allowed_html),
                        'text_on' => esc_html__('Yes', 'digtek'),
                        'text_off' => esc_html__('No', 'digtek'),
                        'default' => false
                    ),
                    array(
                        'id' => 'page_content_spacing_top',
                        'title' => esc_html__('Page Spacing Bottom', 'digtek'),
                        'type' => 'slider',
                        'desc' => wp_kses(__('you can set <mark>Padding Top</mark> for page content area.', 'digtek'), $allowed_html),
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                        'unit' => 'px',
                        'default' => 0,
                        'dependency' => array('page_content_spacing', '==', 'true')
                    ),
                    array(
                        'id' => 'page_content_spacing_bottom',
                        'title' => esc_html__('Page Spacing Bottom', 'digtek'),
                        'type' => 'slider',
                        'desc' => wp_kses(__('you can set <mark>Padding Bottom</mark> for page content area.', 'digtek'), $allowed_html),
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                        'unit' => 'px',
                        'default' => 0,
                        'dependency' => array('page_content_spacing', '==', 'true')
                    ),
                    array(
                        'id' => 'page_content_spacing_left',
                        'title' => esc_html__('Page Spacing Left', 'digtek'),
                        'type' => 'slider',
                        'desc' => wp_kses(__('you can set <mark>Padding Left</mark> for page content area.', 'digtek'), $allowed_html),
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                        'unit' => 'px',
                        'default' => 0,
                        'dependency' => array('page_content_spacing', '==', 'true')
                    ),
                    array(
                        'id' => 'page_content_spacing_right',
                        'title' => esc_html__('Page Spacing Right', 'digtek'),
                        'type' => 'slider',
                        'desc' => wp_kses(__('you can set <mark>Padding Right</mark> for page content area.', 'digtek'), $allowed_html),
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                        'unit' => 'px',
                        'default' => 0,
                        'dependency' => array('page_content_spacing', '==', 'true')
                    ),
                );
            }

            return $fields;
        }


        /**
         * Page layout options
         * @since 1.0.0
         */
        public static function page_layout_options($title, $prefix)
        {
            $allowed_html = digtek()->kses_allowed_html(array('mark'));
            $fields = array(
                array(
                    'type' => 'subheading',
                    'content' => '<h3>' . $title . esc_html__(' Page Options', 'digtek') . '</h3>',
                ),
                array(
                    'id' => $prefix . '_layout',
                    'type' => 'image_select',
                    'title' => esc_html__('Select Page Layout', 'digtek'),
                    'options' => array(
                        'right-sidebar' => DIGTEK_THEME_SETTINGS_IMAGES . '/page/right-sidebar.png',
                        'left-sidebar' => DIGTEK_THEME_SETTINGS_IMAGES . '/page/left-sidebar.png',
                        'no-sidebar' => DIGTEK_THEME_SETTINGS_IMAGES . '/page/no-sidebar.png',
                    ),
                    'default' => 'right-sidebar'
                ),
                array(
                    'id' => $prefix . '_bg_color',
                    'type' => 'color',
                    'title' => esc_html__('Page Background Color', 'digtek'),
                    'default' => ''
                ),
                array(
                    'id' => $prefix . '_spacing_top',
                    'title' => esc_html__('Page Spacing Top', 'digtek'),
                    'type' => 'slider',
                    'desc' => wp_kses(__('you can set <mark>Padding Top</mark> for page content area.', 'digtek'), $allowed_html),
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                    'unit' => 'px',
                    'default' => 120,
                ),
                array(
                    'id' => $prefix . '_spacing_bottom',
                    'title' => esc_html__('Page Spacing Bottom', 'digtek'),
                    'type' => 'slider',
                    'desc' => wp_kses(__('you can set <mark>Padding Bottom</mark> for page content area.', 'digtek'), $allowed_html),
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                    'unit' => 'px',
                    'default' => 120,
                ),
            );

            return $fields;
        }

        /**
         * Post meta
         * @since 1.0.0
         */
        public static function post_meta($prefix, $title)
        {
            $allowed_html = digtek()->kses_allowed_html(array('mark'));
            $fields = array(
                array(
                    'type' => 'subheading',
                    'content' => '<h3>' . $title . esc_html__(' Post Options', 'digtek') . '</h3>',
                ),
                array(
                    'id' => $prefix . '_posted_by',
                    'type' => 'switcher',
                    'title' => esc_html__('Posted By', 'digtek'),
                    'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show / hide posted by.', 'digtek'), $allowed_html),
                    'text_on' => esc_html__('Yes', 'digtek'),
                    'text_off' => esc_html__('No', 'digtek'),
                    'default' => true
                )
            );

            if ('blog_post' == $prefix) {
                $fields[] = array(
                    'id' => $prefix . '_posted_cat',
                    'type' => 'switcher',
                    'title' => esc_html__('Posted Category', 'digtek'),
                    'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show / hide posted category.', 'digtek'), $allowed_html),
                    'text_on' => esc_html__('Yes', 'digtek'),
                    'text_off' => esc_html__('No', 'digtek'),
                    'default' => true
                );
                $fields[] = array(
                    'id' => $prefix . '_readmore_btn',
                    'type' => 'switcher',
                    'title' => esc_html__('Read More Button', 'digtek'),
                    'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show / hide read more button.', 'digtek'), $allowed_html),
                    'text_on' => esc_html__('Yes', 'digtek'),
                    'text_off' => esc_html__('No', 'digtek'),
                    'default' => true
                );
                $fields[] = array(
                    'id' => $prefix . '_readmore_btn_text',
                    'type' => 'text',
                    'title' => esc_html__('Read More Text', 'digtek'),
                    'desc' => wp_kses(__('you can set read more <mark>button text</mark> to button text.', 'digtek'), $allowed_html),
                    'default' => esc_html__('Read More', 'digtek'),
                    'dependency' => array($prefix . '_readmore_btn', '==', 'true')
                );
                $fields[] = array(
                    'id' => $prefix . '_excerpt_more',
                    'type' => 'text',
                    'title' => esc_html__('Excerpt More', 'digtek'),
                    'desc' => wp_kses(__('you can set read more <mark>button text</mark> to button text.', 'digtek'), $allowed_html),
                    'attributes' => array(
                        'placeholder' => esc_html__('....', 'digtek')
                    )
                );
                $fields[] = array(
                    'id' => $prefix . '_excerpt_length',
                    'type' => 'select',
                    'options' => array(
                        '25' => esc_html__('Short', 'digtek'),
                        '55' => esc_html__('Regular', 'digtek'),
                        '100' => esc_html__('Long', 'digtek'),
                    ),
                    'title' => esc_html__('Excerpt Length', 'digtek'),
                    'desc' => wp_kses(__('you can set <mark> excerpt length</mark> for post.', 'digtek'), $allowed_html),
                );
            } elseif ('blog_single_post' == $prefix) {

                $fields[] = array(
                    'id' => $prefix . '_posted_category',
                    'type' => 'switcher',
                    'title' => esc_html__('Posted Category', 'digtek'),
                    'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show / hide posted category.', 'digtek'), $allowed_html),
                    'text_on' => esc_html__('Yes', 'digtek'),
                    'text_off' => esc_html__('No', 'digtek'),
                    'default' => true
                );
                $fields[] = array(
                    'id' => $prefix . '_posted_tag',
                    'type' => 'switcher',
                    'title' => esc_html__('Posted Tags', 'digtek'),
                    'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show / hide post tags.', 'digtek'), $allowed_html),
                    'text_on' => esc_html__('Yes', 'digtek'),
                    'text_off' => esc_html__('No', 'digtek'),
                    'default' => true
                );
                $fields[] = array(
                    'id' => $prefix . '_posted_share',
                    'type' => 'switcher',
                    'title' => esc_html__('Post Share', 'digtek'),
                    'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show / hide post share.', 'digtek'), $allowed_html),
                    'text_on' => esc_html__('Yes', 'digtek'),
                    'text_off' => esc_html__('No', 'digtek'),
                    'default' => true
                );
                $fields[] = array(
                    'id' => $prefix . '_next_post_nav_btn',
                    'type' => 'switcher',
                    'title' => esc_html__('Post Navigation', 'digtek'),
                    'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show / hide post navigation button.', 'digtek'), $allowed_html),
                    'text_on' => esc_html__('Yes', 'digtek'),
                    'text_off' => esc_html__('No', 'digtek'),
                    'default' => true
                );
            }

            return $fields;
        }

    }//end class

}//end if

