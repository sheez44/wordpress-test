<?php 
/**
 * Register meta boxes
 * 
 * @package Test
 */

namespace TEST_THEME\inc;

use TEST_THEME\Inc\Traits\Singleton;

class META_BOXES {
    use Singleton;

       protected function __construct() {
        // load classes.

        $this->setup_hooks();
    }

    protected function setup_hooks() {
        // actions and filters
        add_action('add_meta_boxes', [$this, 'add_custom_meta_box']);
    }

    public function add_custom_meta_box($post) {
        $screens = ['post'];
        foreach ($screens as $screen) {
            add_meta_box(
                'hide-page-title',
                __('Hide page title', 'test'),
                [$this, 'custom_meta_box_html'],
                $screen,
                'side'
            );
        }
    }

    public function custom_meta_box_html($post) {
        $value = get_post_meta( $post->ID, '_hide_page_title', true ); ?>

        <label for="hide_title_field"><?php esc_html_e(' Hide the page title', 'test'); ?></label>
        <select name="hide_title_field" id="hide_title_field" class="postbox">
            <option value=""><?php esc_html_e(' Select option', 'test'); ?></option>
            <option value="yes" <?php selected( $value, 'yes' ); ?>><?php esc_html_e(' Yes', 'test'); ?></option>
            <option value="no" <?php selected( $value, 'no' ); ?>><?php esc_html_e(' No', 'test'); ?></option>
        </select>
        <?php
    }
}