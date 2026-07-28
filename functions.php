<?php
/**
 * Theme Functions.
 * 
 * @package Test
 */
if( !defined('TEST_DIR_PATH')) {
    define('TEST_DIR_PATH', untrailingslashit(get_template_directory()));
}

if( !defined('TEST_DIR_URI')) {
    define('TEST_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

require_once TEST_DIR_PATH . '/inc/helpers/autoloader.php';

function test_get_theme_instance() {
    \TEST_THEME\inc\TEST_THEME::get_instance();
}

test_get_theme_instance();
?>