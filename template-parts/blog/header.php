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
            <a href="<?= esc_url( get_permalink() ); ?>"
                class="featured-thumbnail-link">
                    <?php the_post_custom_thumbnail($the_post_id, 'featured-thumbnail', []); ?>
            </a>
        </div>
    <?php endif; ?>
    <?php if(is_single() || is_page()): ?>
        <?php if(! empty($hide_title) && $hide_title != 'yes'): ?>
            <h1 class="mb-3"><?= wp_kses_post(get_the_title()) ?></h1>
        <?php endif; ?>
    <?php else: ?>
        <h2 class="mb-3">
            <a class="text-dark link-underline link-dark link-underline-opacity-0 link-underline-opacity-100-hover" 
                href="<?= esc_url( get_the_permalink()) ?>">
                <?= wp_kses_post(get_the_title()) ?>
            </a>
        </h2>
    <?php endif; ?>
</header>