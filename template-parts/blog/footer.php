<?php
/**
 * The template part for displaying the footer part of a post
 * 
 * @package Test
 */

$the_post_id = get_the_ID();
$taxonomy_terms = wp_get_post_terms( $the_post_id, ['category', 'post_tag']);

if(empty($taxonomy_terms) || !is_array($taxonomy_terms)) {
    return;
}
?>

<div class="entry-footer mt-4">
    <?php foreach($taxonomy_terms as $term): ?>
        <?php if($term->name != 'Uncategorized' ): ?>
        <a class="btn border border-secondary" href="<?= esc_url(get_term_link($term)); ?>">
            <?= $term->name; ?>
        </a>
        <?php endif;?>
    <?php endforeach; ?>
</div>
