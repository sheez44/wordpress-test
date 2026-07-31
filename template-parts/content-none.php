<?php
/**
 * The template part for displaying a message that post cannot be found
 * 
 * @package Test
 */
?>

<section>
    <header>
        <h2><?php  _e( 'Sorry, no posts matched your criteria.', 'test' ); ?></h2>
    </header>

    <div>
        <?php if(is_home() && current_user_can('publish_posts')): ?>
            <p>
                <?php printf(
                    wp_kses(
                        __('Ready to publish your first post? <a href="%s">Get started here</a>', 'test'),
                        [
                            'a' => [
                                'href' => []
                            ]
                        ]
                    ),
                    esc_url( admin_url('post-new.php'))
                )
                ?>
            </p>
        <?php elseif (is_search() ): ?>
            <p><?php esc_html_e('Sorry but nothing matched your search terms. Please try another key word', 'test'); ?></p>
            <?php get_search_form(); ?>
        <?php else: ?>
            <p><?php esc_html_e('It seems that we cannot find what you are looking for, please use the search', 'test'); ?></p>
             <?php get_search_form(); ?>
        <?php endif; ?>
    </div>
<section>