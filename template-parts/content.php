<?php
/**
 * The template part for displaying the post content
 * 
 * @package Test
 */
?>

<article id="post-<?php the_ID();?>" <?php post_class('mb-5'); ?>>
    <?php get_template_part('template-parts/blog/header'); ?>
    <?php get_template_part('template-parts/blog/meta'); ?>
    <?php get_template_part('template-parts/blog/content'); ?>
    <?php get_template_part('template-parts/blog/footer'); ?>
</article>