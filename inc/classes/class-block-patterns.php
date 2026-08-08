<?php 
/**
 * Enqueue theme assets
 * 
 * @package Test
 */

namespace TEST_THEME\inc;

use TEST_THEME\Inc\Traits\Singleton;

class Block_Patterns {
    use Singleton;

       protected function __construct() {
        // load classes.

        $this->setup_hooks();
    }

    protected function setup_hooks() {
        // actions and filters
        add_action('init', [$this, 'register_block_patterns']);
        add_action('init', [$this, 'register_block_pattern_categories']);
    }

    public function register_block_patterns() {
        
        $cover_content = $this->get_pattern_content('template-parts/patterns/hero');

        register_block_pattern(
            'blog/hero',
            [
                'title' => __('Hero cover', 'test'),
                'description' => __('Hero cover image with text', 'test'),
                'categories' => ['hero'],
                'content' => $cover_content
            ]
        );
    }

    public function get_pattern_content($template_path) {
        ob_start();

        get_template_part($template_path);

        $pattern_content = ob_get_contents();
        
        ob_end_clean();

        return $pattern_content;
    }

    public function register_block_pattern_categories() {
        $pattern_categories = [
            'hero' => 'Hero',
            'home' => 'Homepage',
        ];

        foreach($pattern_categories as $category => $category_label) {
            register_block_pattern_category(
                $category,
                ['label' => $category_label]
            );
        }
    }
}