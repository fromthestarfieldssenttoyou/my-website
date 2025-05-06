<?php
function my_theme_setup() {
    register_nav_menus(
        array(
            'primary_menu' => 'Primary Menu'
        )
    );
}
add_action( 'after_setup_theme', 'my_theme_setup' );

function my_theme_scripts() {
    wp_enqueue_style( 'my-theme-style', get_stylesheet_uri() );
    wp_enqueue_script( 'color-thief', 'https://cdn.jsdelivr.net/npm/color-thief@2.3.0/dist/color-thief.min.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );