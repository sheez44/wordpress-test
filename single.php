<?php
/**
 * 
 * Singe post template file.
 * 
 * @package Test
 * 
 */
?>

<?php get_header(); ?>

<main class="container mt-4">
    <?php if(is_home()): ?>
    <div class="row">
        <header class="my-5">
            <h1 class="page-title"><?php single_post_title(); ?></h1>
        </header>
    </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-md-8">
            <?php if (have_posts() ) :
                while (have_posts() ) : the_post(); ?>
                    <?php get_template_part('template-parts/content'); ?>
                <?php endwhile;
                else : ?>
                    <?php get_template_part('template-parts/content-none'); ?>
                <?php endif; 
            ?>
        </div>     
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
    <nav class="row mb-4">
        <div class="d-flex justify-content-between">
            <?php previous_post_link($format = '<span>&laquo; %link</span>'); ?>
            <?php next_post_link($format = '<span> %link &raquo;</span>'); ?>
        </div> 
    </nav>
</main>

<?php get_footer(); ?>