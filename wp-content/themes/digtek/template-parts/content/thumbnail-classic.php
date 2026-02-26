<?php
/**
 * Post Thumbnail Functions
 * @package digtek
 * @since 1.0.0
 */

$digtek = digtek();
if (has_post_thumbnail()): ?>
    <div class="thumbnail">
        <?php $digtek->post_thumbnail('post-thumbnail'); ?>
    </div>
<?php endif; ?>