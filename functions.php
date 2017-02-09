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

// disable comment feed 
add_filter( 'feed_links_show_comments_feed', '__return_false' );

// disable comment feeds for individual posts
// function disablePostCommentsFeedLink($for_comments) {
// 	return;
// }
// add_filter('post_comments_feed_link','disablePostCommentsFeedLink');


// function child_remove_parent_function_twentytwelve_setup() {
//     remove_action( 'after_setup_theme', 'twentytwelve_setup' );
// }
// add_action( 'after_setup_theme', 'child_remove_parent_function_twentytwelve_setup', 0 );
// 
// function twentytwelve_child_setup() {
// 	/*
// 	 * Makes Twenty Twelve available for translation.
// 	 *
// 	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentytwelve
// 	 * If you're building a theme based on Twenty Twelve, use a find and replace
// 	 * to change 'twentytwelve' to the name of your theme in all the template files.
// 	 */
// 	load_theme_textdomain( 'twentytwelve' );
// 
// 	// This theme styles the visual editor with editor-style.css to match the theme style.
// 	add_editor_style();
// 
// 	// Adds RSS feed links to <head> for posts and comments.
// 	// add_theme_support( 'automatic-feed-links' );
// 
// 	// This theme supports a variety of post formats.
// 	add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );
// 
// 	// This theme uses wp_nav_menu() in one location.
// 	register_nav_menu( 'primary', __( 'Primary Menu', 'twentytwelve' ) );
// 
// 	/*
// 	 * This theme supports custom background color and image,
// 	 * and here we also set up the default background color.
// 	 */
// 	add_theme_support( 'custom-background', array(
// 		'default-color' => 'e6e6e6',
// 	) );
// 
// 	// This theme uses a custom image size for featured images, displayed on "standard" posts.
// 	add_theme_support( 'post-thumbnails' );
// 	set_post_thumbnail_size( 624, 9999 ); // Unlimited height, soft crop
// 
// 	// Indicate widget sidebars can use selective refresh in the Customizer.
// 	add_theme_support( 'customize-selective-refresh-widgets' );
// }
// add_action( 'after_setup_theme', 'twentytwelve_child_setup' );

?>
