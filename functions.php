<?php
/**
 * Theme Functions.
 * 
 * @package Test
 */


function test_enqueue_scripts() {
    // styles
    wp_enqueue_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css') );
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.css');

    // scripts
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true );
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.js', ['jquery'], false, true);

}

add_action('wp_enqueue_scripts', 'test_enqueue_scripts');

?>