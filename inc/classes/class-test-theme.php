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
        $this->set_hooks();
    }

    protected function set_hooks() {
        // actions and filters
    }
}