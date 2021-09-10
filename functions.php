<?php
 
include(get_theme_file_path('/includes/front/enqueue.php'));
 
function wpdocs_theme_name_scripts() {
 wp_enqueue_style('custom', get_template_directory_uri() . '/css/bootstrap.css', array(), '0.1.0', 'all');
 wp_enqueue_style('fonts', get_template_directory_uri() . '/css/font-awesome.css', array(), '0.1.0', 'all');
 wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/style.css', array(), '0.1.0', 'all');
 wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', array(), '1.0.0', true );
 wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
}
 
function get_site_features() {
 add_theme_support('post-thumbnails');
}
 
add_action('after_setup_theme', 'get_site_features');
add_theme_support('post-thumbnails');



 
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
 
add_action('wp_enqueue_scripts', 'inl_enqueue');
 
// funktion för att få menyer dropdown på adminpanelen i WP
 
if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {
 
 function mytheme_register_nav_menu(){
 register_nav_menus( array(
 'main' => __( 'Primary Menu', 'text_domain' ),
 'secondary' => __( 'Footer Menu', 'text_domain' ),
 ) );
 }
 add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}
 
function register_my_menus(){
 register_nav_menus(
 array(
 'main-menu' => __('Main Menu', 'text_domain'),
 'mobile-menu' => __('Mobile Menu', 'text_domain'),
 'side-menu' => __('Side Menu', 'text_domain')
 )
);
}
add_action ('init', 'register_my_menus');

?>