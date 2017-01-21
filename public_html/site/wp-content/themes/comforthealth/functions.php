<?php 
/*
* Functions.php
* Lots of useful wordpress functionality to help with the theme
*/
// Hide horrendous admin bar
show_admin_bar( false ); 

// Register a Header menu
function register_my_menu() {
	register_nav_menu('navigation-menu',__( 'Navigation Menu' ));

	register_nav_menu('footer-menu',__( 'Footer Menu' ));
	register_nav_menu('footer-menu-2',__( 'Footer Menu 2' ));
	register_nav_menu('footer-menu-3',__( 'Footer Menu 3' ));
	register_nav_menu('footer-menu-4',__( 'Footer Menu 4' ));
}
add_action( 'init', 'register_my_menu' );



/**
 * Load in our core stylesheet & our custom js
 */
function register_style_scripts() {
 	// wp_deregister_script('jquery');
    // wp_enqueue_style( 'template', get_stylesheet_uri() );
    wp_enqueue_style( 'core',  get_template_directory_uri() . '/styles/core.css' );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array() );
}
add_action( 'wp_enqueue_scripts', 'register_style_scripts' );


// Function to add subscribe text to posts and pages
// Add Shortcode
function booking_shortcode() {

	return '<iframe src="https://comfort-health.cliniko.com/bookings?embedded=true" width="100%" height="1400" frameborder="0" scrolling="auto"></iframe>';

}
add_shortcode( 'booking_form', 'booking_shortcode' );


// Enable thumbnails
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 250, 250, true );


remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
?>