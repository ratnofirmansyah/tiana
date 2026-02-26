<?php
/**
 * Theme Author Widget
 * @package Digtek
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit(); //exit if access directly
}
// Control core classes for avoid errors
if (class_exists('CSF')) {


    // Create a About Widget
    CSF::createWidget('digtek_author_widget', array(
        'title' => esc_html__('Digtek: Author', 'digtek-core'),
        'classname' => 'digtek-widget-author',
        'description' => esc_html__('Display Author widget', 'digtek-core'),
        'fields' => array(
            array(
                'id' => 'image',
                'type' => 'media',
                'title' => esc_html__('Image', 'Digtek-core')
            ),
            array(
                'id' => 'name',
                'type' => 'text',
                'title' => esc_html__('Name', 'Digtek-core'),
                'default' => esc_html__('Leslie Alexander', 'digtek-core')
            ),
            array(
                'id' => 'phone',
                'type' => 'text',
                'title' => esc_html__('Phone', 'Digtek-core'),
                'default' => esc_html__('(480) 555-0103', 'digtek-core')
            ),

            array(
                'id' => 'digtek-author-social-repeater',
                'type' => 'repeater',
                'title' => esc_html__('Author', 'digtek-core'),
                'fields' => array(
                    array(
                        'id' => 'digtek-author-social',
                        'type' => 'icon',
                        'title' => esc_html__('author social', 'digtek-core'),
                    ),
                    array(
                        'id' => 'digtek-author-social-url',
                        'type' => 'text',
                        'title' => esc_html__('author social', 'digtek-core'),
                        'default' => esc_html__('#', 'digtek-core')
                    ),

                ),
            ),
        )
    ));


    if (!function_exists('digtek_author_widget')) {
        function digtek_author_widget($args, $instance)
        {

            echo $args['before_widget'];
            $image = $instance['image'];
            $img_id = $image['id'] ?? '';
            $img_print = $img_id ? wp_get_attachment_image_src($img_id,'full')[0] : '';
            $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true);
            $name = $instance['name'] ?? '';
            $phone = $instance['phone'] ?? '';
            $author = is_array($instance['digtek-author-social-repeater']) && !empty($instance['digtek-author-social-repeater']) ? $instance['digtek-author-social-repeater'] : [];
            ?>

            <div class="widget_author text-center">  
                <?php
                    if (!empty($img_print)) {
                        printf('<div class="thumb"><img src="%1$s" alt="%2$s"/></div>', esc_url($img_print), esc_attr($alt_text));
                    }
                ?> 
                <div class="details">
                    <h5><?php echo esc_html($name); ?></h5>
                    <h6><?php echo esc_html($phone); ?></h6>
                    <ul class="social-media-list">
                        <?php
                            foreach ($author as $socials) {
                                echo '<li>
                                    <a href="'.$socials['digtek-author-social-url'].'">
                                        <i class="' . $socials['digtek-author-social'] . '"></i>
                                    </a>
                                </li>';
                            };
                        ?>
                    </ul>
                </div>
            </div>
            <?php

            echo $args['after_widget'];

        }
    }

}

?>