<?php

if ( ! function_exists( 'SNIIC_setup' ) ) :

function SNIIC_setup() {
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );
}
endif;

add_action( 'after_setup_theme', 'SNIIC_setup' );
