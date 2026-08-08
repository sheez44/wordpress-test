<?php 
function get_the_post_custom_thumbnail($post_id, $size = 'featured-thumbnail', $additional_attributes = []) {
    $custom_thumbnail = '';

    if($post_id === null) {
        $post_id = get_the_ID();
    }

    $custom_thumbnail = wp_get_attachment_image(
        get_post_thumbnail_id($post_id),
        $size,
        false,
        $additional_attributes
    );

    return $custom_thumbnail;
}

function the_post_custom_thumbnail($post_id, $size = 'featured-thumbnail', $additional_attributes = [] ) {
    echo get_the_post_custom_thumbnail($post_id, $size, $additional_attributes);
}

function blog_posted_on() {
    $time_string = '<time class="published updated" datetime"%1$s">%2$s</time>';

    if(get_the_time('U') !== get_the_modified_time('U')) {
        $time_string = '<time class="published" datetime="%1$s">%2$s</time><time class="d-none updated" datetime="%3$s">%4$s</time>';
    }

    $time_string = sprintf( $time_string,
        esc_attr( get_the_date(DATE_W3C)),
        esc_attr( get_the_date()),
        esc_attr( get_the_modified_date(DATE_W3C)),
        esc_attr( get_the_modified_date()),
    );

    $posted_on = sprintf(
        esc_html_x('Posted on %s', 'post date', 'test'),
        '<strong>' . $time_string . '</strong>'
    );

    echo '<span class="posted-on text-secondary">' . $posted_on . '</span>';
}

function blog_posted_by() {
	$byline = sprintf(
		esc_html_x( ' by %s', 'post author', 'aquila' ),
		'<span class="author vcard"><a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="byline text-secondary">' . $byline . '</span>';
}

function blog_the_excerpt( $trim_character_count = 0 ) {

    $excerpt = wp_strip_all_tags( get_the_excerpt() );

    if ( $trim_character_count === 0 || strlen( $excerpt ) <= $trim_character_count ) {
        echo $excerpt;
        return;
    }

    $excerpt = substr( $excerpt, 0, $trim_character_count );
    $last_space = strrpos( $excerpt, ' ' );

    if ( $last_space !== false ) {
        $excerpt = substr( $excerpt, 0, $last_space );
    }

    echo $excerpt . ' [...]';
}

function blog_excerpt_more($more= '') {
    if(!is_single()) {
        $more = sprintf('<a class="text-white link-underline link-underline-opacity-0" href="%1$s"><button class="mt-4 d-block btn btn-primary">%2$s</button>',
            get_permalink(get_the_ID() ),
            __('Read more', 'test')
        );
    }

    return $more;
}

function blog_pagination() {
    $args = [
        'before_page_number' => '<span class="btn border border-secondary mr-2 mb-2">',
        'after_page_number' => '</span>',
    ];

    $allowed_tags = [
        'nav' => [],
        'span' => [
            'class' => [],
            'aria-current' => [],
        ],
        'a' => [
            'class' => [],
            'href' => [],
        ]
    ];

    printf('<nav class="blog-pagination">%s</nav>', wp_kses(paginate_links($args), $allowed_tags));
}
