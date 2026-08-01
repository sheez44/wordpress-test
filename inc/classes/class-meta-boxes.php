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
        add_action( 'save_post', [$this, 'wptest_save_postdata'] );
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
        $value = get_post_meta( $post->ID, '_hide_page_title', true ); 

        wp_nonce_field( 'the_nonce_action', 'hide_title_meta_box_nonce_name'); ?>

        <label for="hide-title-field"><?php esc_html_e(' Hide the page title', 'test'); ?></label>
        <select name="hide_title_field" id="hide-title-field" class="postbox">
            <option value=""><?php esc_html_e(' Select option', 'test'); ?></option>
            <option value="yes" <?php selected( $value, 'yes' ); ?>><?php esc_html_e(' Yes', 'test'); ?></option>
            <option value="no" <?php selected( $value, 'no' ); ?>><?php esc_html_e(' No', 'test'); ?></option>
        </select>
        <?php
    }

    function wptest_save_postdata( $post_id ) {
        if( ! current_user_can('edit_post', $post_id)) {
            return;
        }

        if ( ! isset( $_POST['hide_title_meta_box_nonce_name'] ) ||
            ! wp_verify_nonce( $_POST['hide_title_meta_box_nonce_name'], 'the_nonce_action' )
        ) {
            return;
        }

        if ( array_key_exists( 'hide_title_field', $_POST ) ) {
            update_post_meta(
                $post_id,
                '_hide_page_title',
                $_POST['hide_title_field']
            );
        }
    }

}