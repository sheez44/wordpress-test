<?php 
/**
 * Enqueue theme assets
 * 
 * @package Test
 */

namespace TEST_THEME\inc;

use TEST_THEME\Inc\Traits\Singleton;

class Sidebars {
    use Singleton;

       protected function __construct() {
        // load classes.

        $this->setup_hooks();
    }

    protected function setup_hooks() {
        // actions and filters

        add_action('widgets_init', [$this, 'register_sidebars']);
        add_action('widgets_init', [$this, 'register_clock_widget']);
    }

    public function register_sidebars() {
        register_sidebar( array(
            'name'          => __( 'Main Sidebar', 'test' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'test' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Footer Sidebar', 'test' ),
            'id'            => 'footer-sidebar-1',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'test' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>',
        ) );
    }

    /**
     * Register the new widget.
     *
     * @see 'widgets_init'
     */

    function register_clock_widget() {
        register_widget( 'TEST_THEME\Inc\Clock_Widget');
    }
}