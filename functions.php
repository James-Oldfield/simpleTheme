<?php
add_filter( 'show_admin_bar', '__return_false' );

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

add_action( 'after_setup_theme', 'setup' );
function setup() {
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'post-thumb', 700, 700, true );
    set_post_thumbnail_size( 700, 700, true );
}