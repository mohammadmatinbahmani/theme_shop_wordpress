<?php
function add_enqueue_script() {
	wp_enqueue_script( "popper_js", get_theme_file_uri( '/assets/js/popper.min.js' ), [ 'jquery' ], '3.2.1', true );
	wp_enqueue_script( "bootstrap_js", get_theme_file_uri( '/assets/js/bootstrap.js' ), [
		'jquery',
		'popper_js'
	], '2.5.6', true );
	wp_enqueue_script( "slick_js", get_theme_file_uri( '/assets/js/slick.min.js' ), [ 'jquery' ], '1.6.0', true );
	wp_enqueue_script( "font_icon_js", get_theme_file_uri( '/assets/js/all.min.js' ), [], '5.2.0', true );
	wp_enqueue_script( "main", get_theme_file_uri( '/assets/js/main.js' ), [ 'jquery' ], '1.8.6', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


}

add_action( 'wp_enqueue_scripts', 'add_enqueue_script' );