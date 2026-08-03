<?php
/**
 * The template part for displaying the content part of a post
 * 
 * @package Test
 */
?>

<div class="entry-content">
    <?php 
    if(is_single()) {
        the_content(
            sprintf(
                wp_kses(
                    __('Continue reading %s <span class="meta-nav">&rarr</span>', 'test'),
                    [
                        'span' => [
                            'class' => []
                        ]
                    ]
                ),
                the_title('<span class="screen-reader-text">"','"</span>', false)
            )
        );
    } else {
        blog_the_excerpt(200);
    }

?>
</div>
