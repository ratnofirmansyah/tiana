<?php
/**
 * Theme Social Share Widget
 * @package Digtek
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit(); //exit if access directly
}
// Control core classes for avoid errors
if (class_exists('CSF')) {


    // Create a About Widget
    CSF::createWidget('digtek_social_share_widget', array(
        'title' => esc_html__('Digtek: Social Share', 'digtek-core'),
        'classname' => 'digtek-social-share-about',
        'description' => esc_html__('Display Social Share widget', 'digtek-core'),
        'fields' => array(
            array(
                'id' => 'heading',
                'type' => 'text',
                'title' => esc_html__('Enter Your Header Title', 'digtek-core'),
                'default' => esc_html__('Never Miss News', 'digtek-core')
            ),
            array(
                'id' => 'digtek-social-icon-repeater',
                'type' => 'repeater',
                'title' => esc_html__('Social Icon', 'digtek-core'),
                'fields' => array(
                    array(
                        'id' => 'digtek-social-icon',
                        'type' => 'icon',
                        'title' => esc_html__('Icon', 'digtek-core'),
                        'default' => 'fab fa-facebook'
                    ),
                    array(
                        'id' => 'digtek-social-text',
                        'type' => 'text',
                        'title' => esc_html__('Enter Your Ulr', 'digtek-core'),
                        'default' => '#'
                    ),
                ),
            ),
        )
    ));


    if (!function_exists('digtek_social_share_widget')) {
        function digtek_social_share_widget($args, $instance)
        {

            echo $args['before_widget'];
            

            $heading_title = $instance['heading'] ?? '';
            $socialIcon = is_array($instance['digtek-social-icon-repeater']) && !empty($instance['digtek-social-icon-repeater']) ? $instance['digtek-social-icon-repeater'] : [];


            ?>
            <div class="social-share-widget">
                <h4 class="widget-headline"><?php echo esc_html($heading_title); ?></h4>
                <ul class="social-icon style-03">
                    <?php
                    foreach ($socialIcon as $icon) {
                        printf('<li><a href="%2$s"><i class="%1$s"></i></a></li>', esc_html($icon['digtek-social-icon']), esc_url($icon['digtek-social-text']));
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