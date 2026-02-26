<?php
/**
 * Default Footer Style
 * @package digtek
 * @since 1.0.0
 */

$copyright_text = !empty(cs_get_option('copyright_text')) ? cs_get_option('copyright_text'): esc_html__('Copyright © 2024 Digtek All Rights Reserved.','digtek');
$copyright_text = str_replace('{copy}','&copy;',$copyright_text);
$copyright_text = str_replace('{year}',date('Y'),$copyright_text);

$footer_default_logo = cs_get_option('footer_default_logo');
$footer_default_text = cs_get_option( 'footer_default_text' );
$footer_default_socials_repeater = cs_get_option( 'footer_default_socials_repeater' );
$footer_default_blog_title = cs_get_option( 'footer_default_blog_title' );
$footer_default_contact_title = cs_get_option( 'footer_default_contact_title' );
$footer_default_contacts_repeater = cs_get_option( 'footer_default_contacts_repeater' );
$footer_default_news_shortcode = cs_get_option( 'footer_default_news_shortcode' );
$footer_default_bottom_menu_repeater = cs_get_option( 'footer_default_bottom_menu_repeater' );

?>


<section class="footer-section footer-bg fix">
    <?php if ( in_array( 'digtek-core/digtek-core.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) : ?>
    <div class="container">
        <div class="footer-widgets-wrapper">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <?php if (!empty($footer_default_logo)) { ?>
                                <a href="<?php echo esc_url(home_url('/')) ?>"><img src="<?php echo esc_url($footer_default_logo['url']); ?>" alt="footer-logo"></a>
                            <?php } ?>
                        </div>
                        <div class="footer-content">
                            <p>
                            <?php
                                if (!empty($footer_default_text)) {
                                    echo wp_kses_post($footer_default_text);
                                }                                
                            ?>
                            </p>
                            <div class="social-icon d-flex align-items-center">
                                <?php   
                                if ( $footer_default_socials_repeater ) {
                                        foreach ( $footer_default_socials_repeater as $item ) {
                                            if ( isset( $item['footer_default_socials_icon'] ) && isset( $item['footer_default_socials_icon_url'] ) ) {
                                                echo '<a href="' . esc_url( $item['footer_default_socials_icon_url'] ) . '">';
                                                echo '<i class="' . esc_attr( $item['footer_default_socials_icon'] ) . '"></i>';
                                                echo '</a>';
                                            }
                                        }                            
                                    }                    
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".4s">
                     <!-- footer menu 1 -->
                     <?php get_template_part('template-parts/content/footer-widget'); ?>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3><?php echo esc_html($footer_default_blog_title); ?></h3>
                        </div>
                        <div class="recent-post-area">
                        <?php 
                        // Query for recent posts
                        $recent_posts = new WP_Query(array(
                            'post_type'      => 'post',
                            'posts_per_page' => 2, // Adjust the number as needed
                        ));

                        if ( $recent_posts->have_posts() ) :
                            while ( $recent_posts->have_posts() ) : $recent_posts->the_post();
                                ?>
                                <div class="recent-post-items">
                                    <div class="thumb">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail('thumbnail', array('alt' => get_the_title())); ?>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                    <div class="content">
                                        <ul class="post-date">
                                            <li>
                                                <i class="fa-solid fa-calendar-days me-2"></i>
                                                <?php echo get_the_date('j M, Y'); ?>
                                            </li>
                                        </ul>
                                        <h6>
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                                <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                            ?>
                            <p><?php esc_html_e('No recent posts found.', 'digtek'); ?></p>
                            <?php
                        endif;
                        ?>
                    </div>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 ps-xl-5 wow fadeInUp" data-wow-delay=".8s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3><?php echo esc_html($footer_default_contact_title); ?></h3>
                        </div>
                        <div class="footer-content">
                            <?php if ( ! empty( $footer_default_contacts_repeater ) ) : ?>
                                <ul class="contact-info">
                                    <?php foreach ( $footer_default_contacts_repeater as $contact ) : ?>
                                        <li>
                                            <i class="<?php echo esc_attr( $contact['footer_default_contacts_icon'] ); ?>"></i>
                                            <?php if ( ! empty( $contact['footer_default_contacts_url'] ) ) : ?>
                                                <a href="<?php echo esc_url( $contact['footer_default_contacts_url'] ); ?>">
                                                    <?php echo esc_html( $contact['footer_default_contacts_info'] ); ?>
                                                </a>
                                            <?php else : ?>
                                                <?php echo esc_html( $contact['footer_default_contacts_info'] ); ?>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>

                            <div class="footer-input">
                            <?php 
                                if ( ! empty( $footer_default_news_shortcode ) ) {
                                    echo do_shortcode( $footer_default_news_shortcode );
                                }
                            ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                                <label class="form-check-label" for="flexCheckChecked">
                                    I agree to the Privacy Policy.
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>


    <div class="footer-bottom">
        <div class="container">
            <div class="footer-wrapper d-flex align-items-center justify-content-between">
                <p class="wow fadeInLeft color-2" data-wow-delay=".3s">
                    <?php
                        echo wp_kses($copyright_text, digtek()->kses_allowed_html(array('a')));
                    ?>
                </p>
                <?php if ( ! empty( $footer_default_bottom_menu_repeater ) ) : ?>
                <ul class="footer-menu wow fadeInRight" data-wow-delay=".5s">
                    <?php foreach ( $footer_default_bottom_menu_repeater as $index => $menu_item ) : ?>
                        <li>
                            <a href="<?php echo esc_url( $menu_item['footer_default_bottom_menu_url'] ); ?>">
                                <?php echo esc_html( $menu_item['footer_default_bottom_menu'] ); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </div>
        </div>
        <a href="#" id="scrollUp" class="scroll-icon">
            <i class="far fa-arrow-up"></i>
        </a>
    </div>
</section>