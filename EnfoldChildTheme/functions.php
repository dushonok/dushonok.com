<?php

/*
Enfold child Theme functions

these funcs will replace the parent theme funcs with the same name
*/

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}

// big images for blog and page entries
$avia_config['imgSize']['entry_with_sidebar'] 	= array('width'=>845, 'height'=>321);		            	


// Excerpt  for Masonry
add_filter('avf_masonry_excerpt_length','avf_increase_masonry_excerpt_length', 10, 1);

function avf_increase_masonry_excerpt_length($prepare_excerpt) {
	$prepare_excerpt = 200;
	return $prepare_excerpt;
}

// Excerpt  for Slider
add_filter('avf_postgrid_excerpt_length','avf_increase_postgrid_excerpt_length', 10, 1);

function avf_increase_postgrid_excerpt_length($prepare_excerpt) {
	$prepare_excerpt = 150;
	return $prepare_excerpt;
}
