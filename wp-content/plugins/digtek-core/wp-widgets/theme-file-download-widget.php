<?php
/**
 * Theme File Download Widget
 * @package Digtek
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit(); //exit if access directly
}
// Control core classes for avoid errors
if (class_exists('CSF')) {


    // Create a About Widget
    CSF::createWidget('digtek_file_download_widget', array(
        'title' => esc_html__('Digtek: File Download', 'digtek-core'),
        'classname' => 'digtek-widget-file-download',
        'description' => esc_html__('Display File Download widget', 'digtek-core'),
        'fields' => array(
            array(
                'id' => 'title',
                'type' => 'text',
                'title' => esc_html__('Title', 'Digtek-core'),
                'default' => esc_html__('Download', 'digtek-core')
            ),

            array(
                'id' => 'digtek-file-download-repeater',
                'type' => 'repeater',
                'title' => esc_html__('File Download', 'digtek-core'),
                'fields' => array(
                    array(
                        'id' => 'digtek-file-download',
                        'type' => 'media',
                        'title' => esc_html__('File', 'digtek-core'),
                    ),
                    array(
                        'id' => 'digtek-file-download-text',
                        'type' => 'text',
                        'title' => esc_html__('File Text', 'digtek-core'),
                        'default' => esc_html__('Company Profile', 'digtek-core')
                    ),

                ),
            ),
        )
    ));


    if (!function_exists('digtek_file_download_widget')) {
        function digtek_file_download_widget($args, $instance)
        {

            echo $args['before_widget'];

            $title = $instance['title'] ?? '';
            $file_download = is_array($instance['digtek-file-download-repeater']) && !empty($instance['digtek-file-download-repeater']) ? $instance['digtek-file-download-repeater'] : [];


            ?>
            <div class="widget_download">
                <h5 class="widget-headline style-01"><?php echo esc_html($title); ?></h5>               
                <ul>
                    <?php
                        foreach ($file_download as $file) {
                            echo '<li class="mb-0 mt-0">
                                <a download href="'.$file['digtek-file-download']['url'].'">
                                    ' . $file['digtek-file-download-text'] . '
                                    <i class="fa fa-angle-double-right"></i>
                                </a>
                            </li>';
                        };
                    ?>
                </ul>
            </div>
            <?php

            echo $args['after_widget'];

        }
    }

}

?>