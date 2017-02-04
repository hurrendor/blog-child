<?php
add_action( 'wp_enqueue_scripts', 'twentysixteen_child_enqueue_styles' );
function twentysixteen_child_enqueue_styles() {
    wp_enqueue_style( 'twentysixteen', get_template_directory_uri() . '/style.css' );

}
