<?php
/**
 * Theme Contact Info Widget
 * @package Digtek
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit(); //exit if access directly
}
// Control core classes for avoid errors
if (class_exists('CSF')) {


    // Create a Contact Info Widget
    CSF::createWidget('digtek_contact_info_widget', array(
        'title' => esc_html__('Digtek: Contact Info', 'digtek-core'),
        'classname' => 'digtek-widget-contact-info',
        'description' => esc_html__('Display Contact Info widget', 'digtek-core'),
        'fields' => array(
            array(
                'id' => 'title',
                'type' => 'text',
                'title' => esc_html__('Title', 'digtek-core'),
            ),
            array(
                'id' => 'location',
                'type' => 'textarea',
                'title' => esc_html__('Location', 'Digtek-core'),
                'default' => esc_html__('4517 Washington Ave. Manchester, Kentucky 39495', 'digtek-core'),
            ),
            array(
                'id' => 'phone',
                'type' => 'text',
                'title' => esc_html__('Phone', 'Digtek-core'),
                'default' => esc_html__(' (+888) 123 456 765', 'digtek-core'),
            ),
            array(
                'id' => 'email',
                'type' => 'text',
                'title' => esc_html__('Email', 'Digtek-core'),
                'default' => esc_html__(' infoname@mail.com', 'digtek-core'),
            ),

            array(
                'id' => 'digtek-footer-social-icon-repeater',
                'type' => 'repeater',
                'title' => esc_html__('Social Icon', 'digtek-core'),
                'fields' => array(

                    array(
                        'id' => 'digtek-footer-social-icon',
                        'type' => 'icon',
                        'title' => esc_html__('Icon', 'digtek-core'),
                        'default' => 'flaticon-call'
                    ),
                    array(
                        'id' => 'digtek-footer-social-text',
                        'type' => 'text',
                        'title' => esc_html__('Enter Your Url', 'digtek-core'),
                        'default' => esc_html__('#', 'digtek-core')
                    ),

                ),
            ),
        )
    ));


    if (!function_exists('digtek_contact_info_widget')) {
        function digtek_contact_info_widget($args, $instance)
        {

            echo $args['before_widget'];
            $title = $instance['title'] ?? '';
            $location = $instance['location'] ?? '';
            $phone = $instance['phone'] ?? '';
            $email = $instance['email'] ?? '';
            $csocialIcon = is_array($instance['digtek-footer-social-icon-repeater']) && !empty($instance['digtek-footer-social-icon-repeater']) ? $instance['digtek-footer-social-icon-repeater'] : [];
            ?>

            <div class="footer-widget widget">
            	<h4 class="widget-headline"><?php echo esc_html($title); ?></h4>
            	<div class="widget_contact">
                    <ul class="details">
                        <li><i class="fa fa-map-marker-alt"></i><?php echo esc_html($location); ?></li>
                        <li class="mt-3"><i class="fa fa-phone-alt"></i> <?php echo esc_html($phone); ?></li>
                        <li class="mt-2"><i class="fas fa-envelope"></i> <?php echo esc_html($email); ?></li>
                    </ul>
                    <?php if (!empty($csocialIcon)) { ?>
                        <ul class="social-media mt-4">
                            <?php
                            foreach ($csocialIcon as $cicon) {
                                echo '<li>
	                                <a href="'.$cicon['digtek-footer-social-text'].'">
	                                    <i class="'. $cicon['digtek-footer-social-icon'] . '"></i></a>
	                            </li>';
                            };
                            ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>

            <?php

            echo $args['after_widget'];

        }
    }

}

?>