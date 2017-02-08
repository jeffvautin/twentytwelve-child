<?php
function my_theme_enqueue_styles() {

    $parent_style = 'twentytwelve-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

// disable comment feeds for individual posts
function disablePostCommentsFeedLink($for_comments) {
	return;
}
add_filter('post_comments_feed_link','disablePostCommentsFeedLink');
?>
