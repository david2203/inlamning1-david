<?php
 

 
function inl_enqueue(){
 
    $uri = get_theme_file_uri();
    
 wp_register_style('inl_bootstrap', $uri . '/css/bootstrap.css');
 wp_register_style('inl_jquery', $uri . '/js/jquery.js'); 
 wp_register_style('inl_style', $uri . '/css/style.css');
 //gör likadant med resterande
 wp_enqueue_style('inl_bootstrap');
 wp_enqueue_style('inl_jquery');
 wp_enqueue_style('inl_style');
 
}
 
?>