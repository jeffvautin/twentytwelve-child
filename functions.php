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

// disable comment feeds (this seems to disable main and post comment feeds)
add_filter( 'feed_links_show_comments_feed', '__return_false' );

// Add in microblog feed to header
function microblog_feed() {
    echo '<link rel="alternate" type="application/rss+xml" title="Jeff Vautin &raquo; Microblog Feed" href="/micro.xml" />';
}
add_action('wp_head', 'microblog_feed');

?>
