<?php
/**
 * Theme Metabox Options
 * @package digtek
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit(); // exit if access directly
}

if (class_exists('CSF')) {

    $allowed_html = digtek()->kses_allowed_html(array('mark'));

    $prefix = 'digtek';

    /*-------------------------------------
        Post Format Options
    -------------------------------------*/
    CSF::createMetabox($prefix . '_post_video_options', array(
        'title' => esc_html__('Video Post Format Options', 'digtek'),
        'post_type' => 'post',
        'post_formats' => 'video'
    ));
    CSF::createSection($prefix . '_post_video_options', array(
        'fields' => array(
            array(
                'id' => 'video_url',
                'type' => 'text',
                'title' => esc_html__('Enter Video URL', 'digtek'),
                'desc' => wp_kses(__('enter <mark>video url</mark> to show in frontend', 'digtek'), $allowed_html)
            )
        )
    ));
    CSF::createMetabox($prefix . '_post_gallery_options', array(
        'title' => esc_html__('Gallery Post Format Options', 'digtek'),
        'post_type' => 'post',
        'post_formats' => 'gallery'
    ));
    CSF::createSection($prefix . '_post_gallery_options', array(
        'fields' => array(
            array(
                'id' => 'gallery_images',
                'type' => 'gallery',
                'title' => esc_html__('Select Gallery Photos', 'digtek'),
                'desc' => wp_kses(__('select <mark>gallery photos</mark> to show in frontend', 'digtek'), $allowed_html)
            )
        )
    ));

    /*-------------------------------------
      Page Container Options
    -------------------------------------*/
    CSF::createMetabox($prefix . '_page_container_options', array(
        'title' => esc_html__('Page Options', 'digtek'),
        'post_type' => array('page'),
    ));
    CSF::createSection($prefix . '_page_container_options', array(
        'title' => esc_html__('Layout & Colors', 'digtek'),
        'icon' => 'fa fa-columns',
        'fields' => Digtek_Group_Fields::page_layout()
    ));
    CSF::createSection($prefix . '_page_container_options', array(
        'title' => esc_html__('Header Footer & Breadcrumb', 'digtek'),
        'icon' => 'fa fa-header',
        'fields' => Digtek_Group_Fields::Page_Container_Options('header_options')
    ));
    CSF::createSection($prefix . '_page_container_options', array(
        'title' => esc_html__('Width & Padding', 'digtek'),
        'icon' => 'fa fa-file-o',
        'fields' => Digtek_Group_Fields::Page_Container_Options('container_options')
    ));
    //	Service Meta Box
    CSF::createMetabox($prefix . '_service_options', array(
        'title' => esc_html__('Service Options', 'digtek'),
        'post_type' => 'service',
    ));
    CSF::createSection($prefix . '_service_options', array(
        'fields' => array(
            array(
                'id' => 'service_icon',
                'type' => 'media',
                'title' => esc_html__('Icon', 'digtek'),
                'desc' => wp_kses(__('Select Your Icon', 'digtek'), $allowed_html)
            ),
            array(
                'id' => 'service_icon_shape',
                'type' => 'media',
                'title' => esc_html__('Icon Shape', 'digtek'),
                'desc' => wp_kses(__('Select Your Icon Shape', 'digtek'), $allowed_html)
            ),
            array(
                'id' => 'service_icon_shape_2',
                'type' => 'media',
                'title' => esc_html__('Icon Shape 2', 'digtek'),
                'desc' => wp_kses(__('Select Your Icon Shape 2', 'digtek'), $allowed_html)
            ),
            array(
                'id' => 'service_line_shape',
                'type' => 'media',
                'title' => esc_html__('Line Shape', 'digtek'),
                'desc' => wp_kses(__('Select Your Shape', 'digtek'), $allowed_html)
            ),
            array(
                'id' => 'service_content',
                'type' => 'textarea',
                'title' => esc_html__('service content', 'digtek'),
                'desc' => wp_kses(__('Select Your service content', 'digtek'), $allowed_html)
            )
        )
    ));

    /*-------------------------------------
     Team Options
    -------------------------------------*/
    
    CSF::createMetabox($prefix . '_team_options', array(
        'title' => esc_html__('Team Options', 'digtek'),
        'post_type' => array('team'),
        'priority' => 'high'
    ));
    CSF::createSection($prefix . '_team_options', array(
        'title' => esc_html__('Team Info', 'digtek'),
        'id' => 'digtek-info',
        'fields' => array(
            array(
                'id' => 'team_shape',
                'type' => 'media',
                'title' => esc_html__('Shape Image', 'digtek'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> shape image</mark> here', 'digtek'), $allowed_html),
            ),
            array(
                'id' => 'team_shape_2',
                'type' => 'media',
                'title' => esc_html__('Background Shape', 'digtek'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> shape image</mark> here', 'digtek'), $allowed_html),
            ),
            array(
                'id' => 'designation',
                'type' => 'text',
                'title' => esc_html__('Designation', 'digtek'),
            ),
            array(
                'id' => 'team_content',
                'type' => 'textarea',
                'title' => esc_html__('Team content', 'digtek'),
                'desc' => wp_kses(__('Write Your content', 'digtek'), $allowed_html)
            )
        )
    ));
    CSF::createSection($prefix . '_team_options', array(
        'title' => esc_html__('Social Info', 'digtek'),
        'id' => 'social-info',
        'fields' => array(
            array(
                'id' => 'social-icons',
                'type' => 'repeater',
                'title' => esc_html__('Social Info', 'digtek'),
                'fields' => array(
                    array(
                        'id' => 'icon',
                        'type' => 'icon',
                        'title' => esc_html__('Icon', 'digtek'),
                        'default' => 'fa fa-facebook-f'

                    ),
                    array(
                        'id' => 'url',
                        'type' => 'text',
                        'title' => esc_html__('URL', 'digtek')
                    ),

                ),
            ),
        )
    ));

    //	Project Meta Box
    CSF::createMetabox($prefix . '_project_options', array(
        'title' => esc_html__('Project Options', 'digtek'),
        'post_type' => 'project',
    ));

    CSF::createSection($prefix . '_project_options', array(
        'fields' => array(
            array(
                'id' => 'project_icon',
                'type' => 'text',
                'title' => esc_html__('Project Icon', 'digtek'),
                'desc' => wp_kses(__('Write your Project Icon Text', 'digtek'), $allowed_html)
            ),
            array(
                'id' => 'project_subtitle',
                'type' => 'text',
                'title' => esc_html__('Project Subtitle', 'digtek'),
                'desc' => wp_kses(__('Write your Project Subtitle', 'digtek'), $allowed_html)
            ),
            array(
                'id' => 'project_content',
                'type' => 'textarea',
                'title' => esc_html__('Project content', 'digtek'),
                'desc' => wp_kses(__('Write your Project content', 'digtek'), $allowed_html)
            ),
        )
    ));

    //	Product Meta Box
    CSF::createMetabox($prefix . '_product_options', array(
        'title' => esc_html__('Product Options', 'digtek'),
        'post_type' => 'product',
    ));
    CSF::createSection($prefix . '_product_options', array(
        'fields' => array(
            array(
                'id' => 'product_audio_img',
                'type' => 'media',
                'title' => esc_html__('Product audio image', 'digtek'),
            ),
            array(
                'id' => 'product_audio_list',
                'type' => 'text',
                'title' => esc_html__('Product audio url', 'digtek'),
                'default' => esc_html__('http://physical-authority.surge.sh/music/2.mp3', 'digtek'),
            ),
            array(
                'id' => 'product_subtitle',
                'type' => 'text',
                'title' => esc_html__('Product Subtitle', 'digtek'),
                'default' => esc_html__('Ray studio', 'digtek'),
            ),
            array(
                'id' => 'download_text',
                'type' => 'text',
                'title' => esc_html__('download text', 'digtek'),
                'default' => esc_html__('Download: 2.4K', 'digtek'),
            ),
        )
    ));

    //	Courses Meta Box
    CSF::createMetabox($prefix . '_courses_options', array(
        'title' => esc_html__('Courses Options', 'digtek'),
        'post_type' => 'courses',
    ));

    CSF::createSection($prefix . '_courses_options', array(
        'title' => esc_html__('Social Info', 'digtek'),
        'id' => 'social-info',
        'fields' => array(
            array(
                'id' => 'course_start_date_option',
                'type' => 'text',
                'title' => esc_html__('Start From', 'digtek'),
                'default' => esc_html__('Thursday, Nov 4, 2023', 'digtek'),
            ),
            array(
                'id' => 'study-option',
                'type' => 'repeater',
                'title' => esc_html__('Study Options', 'digtek'),
                'fields' => array(

                    array(
                        'id' => 'qualification',
                        'type' => 'text',
                        'title' => esc_html__('Qualification', 'digtek'),
                        'default' => esc_html__('Bachelor of Aviation (Hons)', 'digtek'),
                    ),
                    array(
                        'id' => 'length',
                        'type' => 'text',
                        'title' => esc_html__('Length', 'digtek'),
                        'default' => esc_html__('9 months full time', 'digtek'),
                    ),
                    array(
                        'id' => 'code',
                        'type' => 'text',
                        'title' => esc_html__('Code', 'digtek'),
                        'default' => esc_html__('ba1x', 'digtek'),
                    ),
                ),
            ),
            array(
                'id' => 'course_module_option',
                'type' => 'text',
                'title' => esc_html__('Course Module Title', 'digtek'),
                'default' => esc_html__('Download full course Module', 'digtek'),
            ),
            array(
                'id' => 'course_module_button_title',
                'type' => 'text',
                'title' => esc_html__('Course Module Button Title', 'digtek'),
                'default' => esc_html__('Download', 'digtek'),
            ),
            array(
                'id' => 'course_module_button_url',
                'type' => 'text',
                'title' => esc_html__('Course Module Button URL', 'digtek'),
                'default' => esc_html__('#', 'digtek'),
            ),
        )
    ));
}//endif