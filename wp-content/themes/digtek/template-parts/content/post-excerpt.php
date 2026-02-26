<?php
/**
 * Theme Post excerpt Template
 * @package digtek
 * @since 1.0.0
 */

$digtek = digtek();
$post_meta = Digtek_Group_Fields_Value::post_meta('blog_post');
$excerpt_length = !empty($post_meta['excerpt_length']) ? $post_meta['excerpt_length'] : 55;
$readmore_text = !empty($post_meta['readmore_btn_text']) ? $post_meta['readmore_btn_text'] : esc_html__('Read More','digtek');


Digtek_Excerpt($excerpt_length);
?>
<div class="blog-bottom mt-3">
<?php
    if ($post_meta['readmore_btn']) {
        printf(
            '            
            <div class="main-button">
                <a href="%1$s">
                    <span class="theme-btn"> %2$s <i class="ms-2 fa-regular fa-arrow-right"></i></span>
                </a>
            </div>           
            
            ',
            esc_url(get_the_permalink()),
            esc_html($readmore_text)
        );
    }
    ?>
</div>