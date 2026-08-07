<?php
/**
 * Theme Functions.
 * 
 * @package Test
 */
if( !defined('BLOG_DIR_PATH')) {
    define('BLOG_DIR_PATH', untrailingslashit(get_template_directory()));
}

if( !defined('BLOG_DIR_URI')) {
    define('BLOG_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

if(!defined('BLOG_BUILD_URI')) {
    define('BLOG_BUILD_URI', untrailingslashit(get_template_directory_uri()).'/assets/build');
}

if(!defined('BLOG_BUILD_PATH')) {
    define('BLOG_BUILD_PATH', untrailingslashit(get_template_directory()).'/assets/build');
}

if(!defined('BLOG_BUILD_JS_URI')) {
    define('BLOG_BUILD_JS_URI', untrailingslashit(get_template_directory_uri()).'/assets/build/js');
}

if(!defined('BLOG_BUILD_JS_DIR_PATH')) {
    define('BLOG_BUILD_JS_DIR_PATH', untrailingslashit(get_template_directory()).'/assets/build/js');
}

if(!defined('BLOG_BUILD_IMG_URI')) {
    define('BLOG_BUILD_IMG_URI', untrailingslashit(get_template_directory_uri()).'/assets/build/src/img');
}

if(!defined('BLOG_BUILD_CSS_URI')) {
    define('BLOG_BUILD_CSS_URI', untrailingslashit(get_template_directory_uri()).'/assets/build/css');
}

if(!defined('BLOG_BUILD_CSS_DIR_PATH')) {
    define('BLOG_BUILD_CSS_DIR_PATH', untrailingslashit(get_template_directory()).'/assets/build/css');
}

if(!defined('BLOG_BUILD_LIB_URI')) {
    define('BLOG_BUILD_LIB_URI', untrailingslashit(get_template_directory_uri()).'/assets/build/library');
}


require_once BLOG_DIR_PATH . '/inc/helpers/autoloader.php';
require_once BLOG_DIR_PATH . '/inc/helpers/template-tags.php';

function test_get_theme_instance() {
    \TEST_THEME\inc\TEST_THEME::get_instance();
}

test_get_theme_instance();
?>