<?php
/**
 * Header Style 1
 * @package digtek
 * @since 1.0.0
 */
?>

<?php 

    $header_1_logo = cs_get_option('header_1_logo');
    $header_1_logo_2 = cs_get_option('header_1_logo_2');
    $header_1_search_enabled = cs_get_option('header_1_search_enabled'); 
    $header_1_right_btn_text = cs_get_option('header_1_right_btn_text');
    $header_1_right_btn_url = cs_get_option('header_1_right_btn_url'); 
    $header_1_right_btn_enabled = cs_get_option('header_1_right_btn_enabled');  
 
?> 

    <div id="header-sticky" class="header-1">
        <div class="container-fluid">
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="logo">

                        <?php
                            if (has_custom_logo() && empty($header_1_logo['id'])) {
                                the_custom_logo();
                            } elseif (!empty($header_1_logo['id'])) {
                                printf('<a class="header-logo" href="%1$s"><img src="%2$s" alt="%3$s"/></a>', esc_url(get_home_url()), $header_1_logo['url'], $header_1_logo['alt']);
                            } else {
                                printf('<a class="d-inline-block site-title" href="%1$s">%2$s</a>', esc_url(get_home_url()), esc_html(get_bloginfo('title')));
                            }
                        ?>

                        <?php
                            if (has_custom_logo() && empty($header_1_logo_2['id'])) {
                                the_custom_logo();
                            } elseif (!empty($header_1_logo_2['id'])) {
                                printf('<a class="header-logo-2" href="%1$s"><img src="%2$s" alt="%3$s"/></a>', esc_url(get_home_url()), $header_1_logo_2['url'], $header_1_logo_2['alt']);
                            } else {
                                printf('<a class="d-inline-block site-title" href="%1$s">%2$s</a>', esc_url(get_home_url()), esc_html(get_bloginfo('title')));
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
                        if( $header_1_search_enabled ): ?>
                        <a href="#0" class="search-trigger search-icon"><i class="fa-regular fa-magnifying-glass"></i></a>
                        <?php 
                        endif; ?> 

                        <?php 
                        if( $header_1_right_btn_enabled ): ?>
                        <div class="main-button">
                            <a href="<?php echo esc_url($header_1_right_btn_url); ?>"> <span class="theme-btn"> <?php echo esc_html($header_1_right_btn_text); ?> </span><span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span></a>
                        </div>
                        <?php 
                        endif; ?> 

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

