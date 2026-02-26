<?php
/**
 * Theme Custom Post Type(CPTs)
 * @package Digtek
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit(); //exit if access directly
}

if (!class_exists('Digtek_Custom_Post_Type')) {
    class Digtek_Custom_Post_Type
    {

        //$instance variable
        private static $instance;

        public function __construct()
        {
            //register post type
            add_action('init', array($this, 'register_custom_post_type'));
        }

        /**
         * get Instance
         * @since  2.0.0
         */
        public static function getInstance()
        {
            if (null == self::$instance) {
                self::$instance = new self();
            }

            return self::$instance;
        }

        /**
         * Register Custom Post Type
         * @since  2.0.0
         */
        public function register_custom_post_type()
        {
            if (!defined('ELEMENTOR_VERSION')) {
                return;
            }
            $all_post_type = array(
                [
                    'post_type' => 'service',
                    'args' => array(
                        'label' => esc_html__('Service', 'digtek-core'),
                        'description' => esc_html__('Service', 'digtek-core'),
                        'labels' => array(
                            'name' => esc_html_x('Service', 'Post Type General Name', 'digtek-core'),
                            'singular_name' => esc_html_x('Service', 'Post Type Singular Name', 'digtek-core'),
                            'menu_name' => esc_html__('Service', 'digtek-core'),
                            'all_items' => esc_html__('Services', 'digtek-core'),
                            'view_item' => esc_html__('View Service', 'digtek-core'),
                            'add_new_item' => esc_html__('Add New Service', 'digtek-core'),
                            'add_new' => esc_html__('Add New Service', 'digtek-core'),
                            'edit_item' => esc_html__('Edit Service', 'digtek-core'),
                            'update_item' => esc_html__('Update Service', 'digtek-core'),
                            'search_items' => esc_html__('Search Service', 'digtek-core'),
                            'not_found' => esc_html__('Not Found', 'digtek-core'),
                            'not_found_in_trash' => esc_html__('Not found in Trash', 'digtek-core'),
                            'featured_image' => esc_html__('Service Image', 'digtek-core'),
                            'remove_featured_image' => esc_html__('Remove Service Image', 'digtek-core'),
                            'set_featured_image' => esc_html__('Set Service Image', 'digtek-core'),
                        ),
                        'supports' => array('title', 'thumbnail', 'excerpt', 'editor', 'comments'),
                        'hierarchical' => false,
                        'public' => true,
                        "publicly_queryable" => true,
                        'show_ui' => true,
                        'show_in_menu' => 'digtek_theme_options',
                        "rewrite" => array('slug' => 'all-service', 'with_front' => true),
                        'can_export' => true,
                        'capability_type' => 'post',
                        "show_in_rest" => true,
                        'query_var' => true
                    )
                ],
                [
                    'post_type' => 'project',
                    'args' => array(
                        'label' => esc_html__('Project', 'digtek-core'),
                        'description' => esc_html__('Project', 'digtek-core'),
                        'labels' => array(
                            'name' => esc_html_x('Project', 'Post Type General Name', 'digtek-core'),
                            'singular_name' => esc_html_x('Project', 'Post Type Singular Name', 'digtek-core'),
                            'menu_name' => esc_html__('Project', 'digtek-core'),
                            'all_items' => esc_html__('Projects', 'digtek-core'),
                            'view_item' => esc_html__('View Project', 'digtek-core'),
                            'add_new_item' => esc_html__('Add New Project', 'digtek-core'),
                            'add_new' => esc_html__('Add New Project', 'digtek-core'),
                            'edit_item' => esc_html__('Edit Project', 'digtek-core'),
                            'update_item' => esc_html__('Update Project', 'digtek-core'),
                            'search_items' => esc_html__('Search Project', 'digtek-core'),
                            'not_found' => esc_html__('Not Found', 'digtek-core'),
                            'not_found_in_trash' => esc_html__('Not found in Trash', 'digtek-core'),
                            'featured_image' => esc_html__('Project Image', 'digtek-core'),
                            'remove_featured_image' => esc_html__('Remove Project Image', 'digtek-core'),
                            'set_featured_image' => esc_html__('Set Project Image', 'digtek-core'),
                        ),
                        'supports' => array('title', 'thumbnail', 'excerpt', 'editor', 'comments'),
                        'hierarchical' => false,
                        'public' => true,
                        "publicly_queryable" => true,
                        'show_ui' => true,
                        'show_in_menu' => 'digtek_theme_options',
                        "rewrite" => array('slug' => 'all-project', 'with_front' => true),
                        'can_export' => true,
                        'capability_type' => 'post',
                        "show_in_rest" => true,
                        'query_var' => true
                    )
                ],
                [
                    'post_type' => 'team',
                    'args' => array(
                        'label' => esc_html__('team', 'digtek-core'),
                        'description' => esc_html__('team', 'digtek-core'),
                        'labels' => array(
                            'name' => esc_html_x('Team', 'Post Type General Name', 'digtek-core'),
                            'singular_name' => esc_html_x('Team', 'Post Type Singular Name', 'digtek-core'),
                            'menu_name' => esc_html__('Teams', 'digtek-core'),
                            'all_items' => esc_html__('Teams', 'digtek-core'),
                            'view_item' => esc_html__('View Teams', 'digtek-core'),
                            'add_new_item' => esc_html__('Add New Team Member', 'digtek-core'),
                            'add_new' => esc_html__('Add New Team Member', 'digtek-core'),
                            'edit_item' => esc_html__('Edit Team', 'digtek-core'),
                            'update_item' => esc_html__('Update Team', 'digtek-core'),
                            'search_items' => esc_html__('Search Team', 'digtek-core'),
                            'not_found' => esc_html__('Not Found', 'digtek-core'),
                            'not_found_in_trash' => esc_html__('Not found in Trash', 'digtek-core'),
                            'featured_image' => esc_html__('Team Image', 'digtek-core'),
                            'remove_featured_image' => esc_html__('Remove Team Image', 'digtek-core'),
                            'set_featured_image' => esc_html__('Set Team Image', 'digtek-core'),
                        ),
                        'supports' => array('title', 'thumbnail', 'excerpt', 'editor', 'comments'),
                        'hierarchical' => false,
                        'public' => true,
                        "publicly_queryable" => true,
                        'show_ui' => true,
                        'show_in_menu' => 'digtek_theme_options',
                        "rewrite" => array('slug' => 'all-team', 'with_front' => true),
                        'can_export' => true,
                        'capability_type' => 'post',
                        "show_in_rest" => true,
                        'query_var' => true
                    )
                ]
            );

            if (!empty($all_post_type) && is_array($all_post_type)) {

                foreach ($all_post_type as $post_type) {
                    call_user_func_array('register_post_type', $post_type);
                }
            }


            /**
             * Custom Taxonomy Register
             * @since 1.0.0
             */

            $all_custom_taxonmy = array(
                array(
                    'taxonomy' => 'service-cat',
                    'object_type' => 'service',
                    'args' => array(
                        "labels" => array(
                            "name" => esc_html__("Service Category", 'digtek-core'),
                            "singular_name" => esc_html__("Service Category", 'digtek-core'),
                            "menu_name" => esc_html__("Service Category", 'digtek-core'),
                            "all_items" => esc_html__("All Service Category", 'digtek-core'),
                            "add_new_item" => esc_html__("Add New Service Category", 'digtek-core')
                        ),
                        "public" => true,
                        "hierarchical" => true,
                        "show_ui" => true,
                        "show_in_menu" => true,
                        "show_in_nav_menus" => true,
                        "query_var" => true,
                        "rewrite" => array('slug' => 'service-cat', 'with_front' => true),
                        "show_admin_column" => true,
                        "show_in_rest" => true,
                        "show_in_quick_edit" => true,
                    )
                ),
                array(
                    'taxonomy' => 'project-cat',
                    'object_type' => 'project',
                    'args' => array(
                        "labels" => array(
                            "name" => esc_html__("Project Category", 'digtek-core'),
                            "singular_name" => esc_html__("Project Category", 'digtek-core'),
                            "menu_name" => esc_html__("Project Category", 'digtek-core'),
                            "all_items" => esc_html__("All Project Category", 'digtek-core'),
                            "add_new_item" => esc_html__("Add New Project Category", 'digtek-core')
                        ),
                        "public" => true,
                        "hierarchical" => true,
                        "show_ui" => true,
                        "show_in_menu" => true,
                        "show_in_nav_menus" => true,
                        "query_var" => true,
                        "rewrite" => array('slug' => 'project-cat', 'with_front' => true),
                        "show_admin_column" => true,
                        "show_in_rest" => true,
                        "show_in_quick_edit" => true,
                    )
                ),
                array(
                    'taxonomy' => 'team-cat',
                    'object_type' => 'team',
                    'args' => array(
                        "labels" => array(
                            "name" => esc_html__("Team Category", 'digtek-core'),
                            "singular_name" => esc_html__("Team Category", 'digtek-core'),
                            "menu_name" => esc_html__("Team Category", 'digtek-core'),
                            "all_items" => esc_html__("All Team Category", 'digtek-core'),
                            "add_new_item" => esc_html__("Add New Team Category", 'digtek-core')
                        ),
                        "public" => true,
                        "hierarchical" => true,
                        "show_ui" => true,
                        "show_in_menu" => true,
                        "show_in_nav_menus" => true,
                        "query_var" => true,
                        "rewrite" => array('slug' => 'team-cat', 'with_front' => true),
                        "show_admin_column" => true,
                        "show_in_rest" => true,
                        "show_in_quick_edit" => true,
                    )
                )
            );

            if (is_array($all_custom_taxonmy) && !empty($all_custom_taxonmy)) {
                foreach ($all_custom_taxonmy as $taxonomy) {
                    call_user_func_array('register_taxonomy', $taxonomy);
                }
            }


            /**
             * Custom Tags Register
             * @since 1.0.0
             */

            $all_custom_tags = array(
                array(
                    'taxonomy' => 'service-tag',
                    'object_type' => 'service',
                    'args' => array(
                        "labels" => array(
                            "name" => esc_html__("Service Tag", 'digtek-core'),
                            "singular_name" => esc_html__("Service Tag", 'digtek-core'),
                            "menu_name" => esc_html__("Service Tag", 'digtek-core'),
                            "all_items" => esc_html__("All Service Tag", 'digtek-core'),
                            "add_new_item" => esc_html__("Add New Service Tag", 'digtek-core')
                        ),
                        "public" => true,
                        "show_ui" => true,
                        "show_in_menu" => true,
                        "show_in_nav_menus" => true,
                        "query_var" => true,
                        "rewrite" => array('slug' => 'service-tag'),
                        "show_admin_column" => true,
                        "show_in_rest" => true,
                        "show_in_quick_edit" => true,
                        'hierarchical' => false,
                        'update_count_callback' => '_update_post_term_count',
                    )
                ),
                array(
                    'taxonomy' => 'project-tag',
                    'object_type' => 'project',
                    'args' => array(
                        "labels" => array(
                            "name" => esc_html__("Project Tag", 'digtek-core'),
                            "singular_name" => esc_html__("Project Tag", 'digtek-core'),
                            "menu_name" => esc_html__("Project Tag", 'digtek-core'),
                            "all_items" => esc_html__("All Project Tag", 'digtek-core'),
                            "add_new_item" => esc_html__("Add New Project Tag", 'digtek-core')
                        ),
                        "public" => true,
                        "show_ui" => true,
                        "show_in_menu" => true,
                        "show_in_nav_menus" => true,
                        "query_var" => true,
                        "rewrite" => array('slug' => 'project-tag'),
                        "show_admin_column" => true,
                        "show_in_rest" => true,
                        "show_in_quick_edit" => true,
                        'hierarchical' => false,
                        'update_count_callback' => '_update_post_term_count',
                    )
                ),
                array(
                    'taxonomy' => 'team-tag',
                    'object_type' => 'team',
                    'args' => array(
                        "labels" => array(
                            "name" => esc_html__("Team Tag", 'digtek-core'),
                            "singular_name" => esc_html__("Team Tag", 'digtek-core'),
                            "menu_name" => esc_html__("Team Tag", 'digtek-core'),
                            "all_items" => esc_html__("All Team Tag", 'digtek-core'),
                            "add_new_item" => esc_html__("Add New Team Tag", 'digtek-core')
                        ),
                        "public" => true,
                        "show_ui" => true,
                        "show_in_menu" => true,
                        "show_in_nav_menus" => true,
                        "query_var" => true,
                        "rewrite" => array('slug' => 'team-tag'),
                        "show_admin_column" => true,
                        "show_in_rest" => true,
                        "show_in_quick_edit" => true,
                        'hierarchical' => false,
                        'update_count_callback' => '_update_post_term_count',
                    )
                ),
            );

            if (is_array($all_custom_tags) && !empty($all_custom_tags)) {
                foreach ($all_custom_tags as $tags) {
                    call_user_func_array('register_taxonomy', $tags);
                }
            }


            flush_rewrite_rules();
        }

    }//end class

    if (class_exists('Digtek_Custom_Post_Type')) {
        Digtek_Custom_Post_Type::getInstance();
    }
}