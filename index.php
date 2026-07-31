<?php
/**
 * 
 * Main template file.
 * 
 * @package Test
 * 
 */

$args = array( 'posts_per_page' => 12 ); 

// Variable to call WP_Query.
$the_query = new WP_Query( $args ); 
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
        if (!$the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col-lg-4 col-md-6">
                <?php get_template_part('template-parts/content'); ?>
            </div>
            <?php endwhile;
        else : ?>
            <?php get_template_part('template-parts/content-none'); ?>
        <?php endif; 
        wp_reset_postdata();
        ?>

    </div>

</main>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>