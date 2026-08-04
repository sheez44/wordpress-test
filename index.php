<?php
/**
 * 
 * Main template file.
 * 
 * @package Test
 * 
 */

?>

<?php get_header(); ?>

<main class="container">
    <?php if(is_home()): ?>
    <div class="row">
        <header class="my-5">
            <h1 class="page-title"><?php single_post_title(); ?></h1>
        </header>
    </div>
    <?php endif; ?>
    <div class="row">
        <?php
        if (have_posts() ) :
            while ( have_posts() ) : the_post(); ?>
            <div class="col-lg-4 col-md-6">
                <?php get_template_part('template-parts/content'); ?>
            </div>
            <?php endwhile;
        else : ?>
            <?php get_template_part('template-parts/content-none'); ?>
        <?php endif; 

        ?>

    </div>
    <div class="row">
        <?php blog_pagination() ?>
    </div>
</main>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>