<?php
/**
 * The template for displaying 404 Error page
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package digtek
 */

get_header();
    $get_404_options_value = Digtek_Group_Fields_Value::get_404_options_value();
    $error_bg_switch = cs_get_option('error_bg_switch');
    $error_bg = cs_get_option('error_bg');
?>

    <section class="Error-section section-padding fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="error-items">
                        <?php
                        if (!empty($error_bg_switch) && !empty($error_bg)) : ?>
                            <div class="error-image">
                                <img src="<?php echo esc_url($error_bg['url']); ?>" alt="<?php echo esc_attr($error_bg['alt']); ?>">
                            </div>
                        <?php endif; ?>
                        <div class="error-content">
                            <h2 class="wow fadeInUp" data-wow-delay=".5s">
                                <?php echo esc_html($get_404_options_value['title']); ?>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html($get_404_options_value['paragraph']); ?></p>
                            <div class="main-button justify-content-center wow fadeInUp" data-wow-delay=".5s">
                                <a href="<?php echo esc_url(home_url('/')); ?>"> <span class="theme-btn"> <?php echo esc_html($get_404_options_value['btn_text']); ?> </span><span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
get_footer();
