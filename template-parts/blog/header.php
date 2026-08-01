<?php
/**
 * The template part for displaying the header part of a post
 * 
 * @package Test
 */
$the_post_id = get_the_ID();
$hide_title = get_post_meta($the_post_id, '_hide_page_title', true);
$has_post_thumbnail = get_the_post_thumbnail($the_post_id)
?>
<header>
    <?php if($has_post_thumbnail): ?>
        <div class="mb-3">
            <a href="<?= esc_url( get_permalink() ); ?>">
                <?php the_post_custom_thumbnail($the_post_id, 'featured-thumbnail', []); ?>
            </a>
        </div>
    <?php endif; ?>
</header>