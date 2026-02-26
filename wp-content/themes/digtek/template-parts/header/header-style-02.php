<?php
/**
 * Header Style 2
 * @package digtek
 * @since 1.0.0
 */
?>

<?php

 $header_2_logo = cs_get_option('header_2_logo');
 $header_2_right_btn_text = cs_get_option('header_2_right_btn_text');
 $header_2_right_btn_url = cs_get_option('header_2_right_btn_url'); 
 $header_2_right_btn_enabled = cs_get_option('header_2_right_btn_enabled'); 

?> 

<div id="header-sticky" class="header-1 style-2">
    <div class="container-fluid">
        <div class="mega-menu-wrapper">
            <div class="header-main">
                <div class="logo">
                    <?php                               
                        if (has_custom_logo() && empty($header_2_logo['id'])) {
                            the_custom_logo();
                        } elseif (!empty($header_2_logo['id'])) {
                            printf('<a class="header-logo-3" href="%1$s"><img src="%2$s" alt="%3$s"/></a>', esc_url(get_home_url()), $header_2_logo['url'], $header_2_logo['alt']);
                        } else {
                            printf('<a class="header-logo-3 d-inline-block site-title" href="%1$s">%2$s</a>', esc_url(get_home_url()), esc_html(get_bloginfo('title')));
                        }
                    ?>
                </div>
                <div class="mean__menu-wrapper">
                    <div class="main-menu">
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'main-menu',
                                'menu_class' => '',
                                'container' => 'div',
                                'container_class' => '',
                                'container_id' => 'mobile-menu',
                                'fallback_cb' => 'digtek_theme_fallback_menu',
                            ));
                        ?>
                    </div>
                </div>
                <div class="header-right d-flex justify-content-end align-items-center">
                    <?php 
                    if ( $header_2_right_btn_enabled ) : 
                    ?>
                    <div class="main-button">
                        <a href="<?php echo esc_url( $header_2_right_btn_url ); ?>">
                            <span class="theme-btn"> <?php echo esc_html( $header_2_right_btn_text ); ?></span>
                            <span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span>
                        </a>
                    </div>
                    <?php 
                        endif; 
                    ?>
                    <div class="header__hamburger d-xl-none my-auto">
                        <div class="sidebar__toggle">
                            <i class="fas fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>