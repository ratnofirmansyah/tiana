<?php
/**
 * Template part for displaying single post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package digtek
 */

$digtek = digtek();
$post_meta = get_post_meta(get_the_ID(), 'digtek_post_gallery_options', true);
$post_meta_gallery = isset($post_meta['gallery_images']) && !empty($post_meta['gallery_images']) ? $post_meta['gallery_images'] : '';
$post_single_meta = Digtek_Group_Fields_Value::post_meta('blog_single_post');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-single-content-wrap'); ?>>
    <?php
    if (has_post_thumbnail() || !empty($post_meta_gallery)):
        $get_post_format = get_post_format();
        if ('video' == $get_post_format || 'gallery' == $get_post_format) {
            get_template_part('template-parts/content/thumbnail', $get_post_format);
        } else {
            get_template_part('template-parts/content/thumbnail');
        }
    endif;
    ?>
    <div class="entry-content">
        <?php if ('post' == get_post_type()): ?>
            <ul class="post-meta">
                <?php if ($post_single_meta['posted_by']): ?>
                    <li>
                    <i class="fa-regular fa-user"></i>
                        <span><?php echo esc_html('Written by:', 'digtek'); ?></span>
                        <?php $digtek->posted_by(); ?>
                    </li>
                <?php endif; ?>
                <li>
                    <i class="fa-solid fa-calendar-days"></i>
                    <span class="date-left-dot"></span>
                    <?php echo get_the_date(); ?>
                </li>
                <?php if ($post_single_meta['posted_category']): ?>
                <li>
                    <i class="fa-solid fa-folder-open"></i>
                    <span><?php echo esc_html('Categories:', 'digtek'); ?></span>
                    <?php the_category(', '); ?>
                </li>
                <?php endif; ?>
                <?php if ($post_single_meta['posted_tag']): ?>
                <li>
                    <i class="fa-solid fa-tags"></i>
                    <span><?php echo esc_html('Tags:', 'digtek'); ?></span>
                    <?php the_tags(', '); ?>
                </li>
                <?php endif; ?>
            </ul>
        <?php endif;
        the_content();
        $digtek->link_pages();
        ?>
    </div>
    <?php if ('post' == get_post_type() && ((has_tag() && $post_single_meta['posted_tag']) || (shortcode_exists('digtek_post_share') && $post_single_meta['posted_share']))): ?>
        <div class="blog-details-footer">
            <?php if (has_tag() && $post_single_meta['posted_tag']): ?>
                <div class="left">
                    <h5 class="title"><?php echo esc_html__('Tags:', 'digtek') ?></h5>
                    <?php $digtek->posted_tag(); ?>
                </div>
            <?php endif; ?>
            <?php if (shortcode_exists('digtek_post_share') && $post_single_meta['posted_share']) : ?>
                <div class="right">
                    <h5 class="title"><?php echo esc_html__('Share:', 'digtek') ?></h5>
                    <?php
                    if (shortcode_exists('digtek_post_share') && $post_single_meta['posted_share']) {
                        echo do_shortcode('[digtek_post_share]');
                    }
                    ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endif;
    if ($post_single_meta['next_post_nav_btn'] && $digtek->is_digtek_core_active()) {
        echo wp_kses($digtek->post_navigation(), $digtek->kses_allowed_html('all'));
    }
    if ($digtek->is_digtek_core_active()) {
        if ($post_single_meta['get_related_post']) {
            $digtek->get_related_post([
                'post_type' => 'post',
                'taxonomy' => 'category',
                'exclude_id' => get_the_ID(),
                'posts_per_page' => 2
            ]);
        }
    }
    ?>

</article><!-- #post-<?php the_ID(); ?> -->
