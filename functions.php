<?php
function theme_setup() {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_setup' );

function theme_styles() {
	wp_enqueue_style( 'theme-reset', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/css/flex.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );
