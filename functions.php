<?php

if ( ! function_exists( 'SNIIC_setup' ) ) :

function SNIIC_setup() {
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );
	
	wp_enqueue_script( 'twentythirteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150330', true );
	
	register_nav_menu( 'primary', 'Navigation Menu' );
}
endif;

add_action( 'after_setup_theme', 'SNIIC_setup' );
