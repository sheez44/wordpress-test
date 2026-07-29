<?php 
/**
 * Bootstraps the theme.
 * 
 * @package Test
 */

namespace TEST_THEME\Inc;

use TEST_THEME\Inc\Traits\Singleton;

class TEST_THEME {
    use Singleton;

    protected function __construct() {
        // load classes.
        Assets::get_instance();

        $this->setup_hooks();
    }

    protected function setup_hooks() {
        add_action('after_setup_theme', [$this, 'setup_theme']);
    }

    public function setup_theme() {
        add_theme_support('title-tag');
        add_theme_support('custom-logo', [
            'height' => 40,
            'width:' => 100,
            'flex-height' => false,
            'flex-width' => true,
            'unlink-homepage-logo' => true, 
            'header-text'          => ['site-title', 'site-description'],
        ]);

        add_theme_support( 'custom-background', ['default-color' => 'e95d0f']);
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'customize-selective-refresh-widgets' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

        add_theme_support('align-wide');

        global $content_width;
        if( !isset( $global_width )) {
            $content_width = 1240;
        }
    }
}