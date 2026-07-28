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
    }
}