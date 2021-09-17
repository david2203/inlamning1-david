<?php
//includes registered and enqueued styles from enqueue.phpß
include(get_theme_file_path('/includes/front/enqueue.php'));
 
//enqueing some styles
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
 //function for theme config
add_action('after_setup_theme', 'get_site_features');
add_theme_support('post-thumbnails');



 //actions for enqueing
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
 
//registering menues to be used
function register_my_menus(){
 register_nav_menus(
 array(
 'main-menu' => __('Main Menu', 'text_domain'),
 'mobile-menu' => __('Mobile Menu', 'text_domain'),
 'side-menu' => __('Side Menu', 'text_domain'),
 'sidebar' => __('Sidebar', 'text_domain'),
 'sidebar2' => __('Sidebar2', 'text_domain'),
 'sidebar3' => __('Sidebar3', 'text_domain'),
 'labb1' => __('Labb1', 'text_domain'),


 )
);
}
add_action ('init', 'register_my_menus');


// Our custom post type function
function create_posttype() {
 
    register_post_type( 'footer',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Footers' ),
                'singular_name' => __( 'Footer' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'Footers'),
            'show_in_rest' => true,
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );


/*
* Creating a function to create our CPT
*/
 
function custom_post_type() {
 
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Footers', 'Post Type General Name', 'labb1-david' ),
            'singular_name'       => _x( 'Footer', 'Post Type Singular Name', 'labb1-david' ),
            'menu_name'           => __( 'Footers', 'labb1-david' ),
            'parent_item_colon'   => __( 'Parent Footer', 'labb1-david' ),
            'all_items'           => __( 'All Footers', 'labb1-david' ),
            'view_item'           => __( 'View Footer', 'labb1-david' ),
            'add_new_item'        => __( 'Add New Footer', 'labb1-david' ),
            'add_new'             => __( 'Add New', 'labb1-david' ),
            'edit_item'           => __( 'Edit Footer', 'labb1-david' ),
            'update_item'         => __( 'Update Footer', 'labb1-david' ),
            'search_items'        => __( 'Search Footer', 'labb1-david' ),
            'not_found'           => __( 'Not Found', 'labb1-david' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'labb1-david' ),
        );
         
    // Set other options for Custom Post Type
         
        $args = array(
            'label'               => __( 'Footers', 'labb1-david' ),
            'description'         => __( 'Footer news and reviews', 'labb1-david' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'genres' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */ 
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
     
        );
         
        // Registering your Custom Post Type
        register_post_type( 'footer', $args );
     
    }
     
    /* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */
     
    add_action( 'init', 'custom_post_type', 0 );


?>