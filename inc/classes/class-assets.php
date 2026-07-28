<?php 
/**
 * Enqueue theme assets
 * 
 * @package Test
 */

namespace TEST_THEME\inc;

use TEST_THEME\Inc\Traits\Singleton;

class Assets {
    use Singleton;

       protected function __construct() {
        // load classes.

        $this->setup_hooks();
    }

    protected function setup_hooks() {
        // actions and filters
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles() {
         // styles
        wp_enqueue_style('style-css', get_stylesheet_uri(), [], filemtime(TEST_DIR_PATH . '/style.css') );
        wp_enqueue_style('bootstrap-css', TEST_DIR_URI . '/assets/vendor/bootstrap/css/bootstrap.css');
    }

    public function register_scripts() {
        // scripts
        wp_enqueue_script('main-js', TEST_DIR_URI . '/assets/main.js', [], filemtime(TEST_DIR_PATH . '/assets/main.js'), true );
        wp_enqueue_script('bootstrap-js', TEST_DIR_URI . '/assets/vendor/bootstrap/js/bootstrap.bundle.js', ['jquery'], false, true);
    }
}