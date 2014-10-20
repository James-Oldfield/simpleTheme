<?php
add_filter( 'show_admin_bar', '__return_false' );

add_action( 'after_setup_theme', 'setup' );
function setup() {
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'post-thumb', 700, 700, true );
    set_post_thumbnail_size( 700, 700, true );
}