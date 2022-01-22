<?php
function add_enqueue_style() {

	wp_enqueue_style( "bootstrap", get_theme_file_uri( '/assets/css/bootstrap.css' ), [], '4.3.1' );
	if ( is_rtl() ) {
		wp_enqueue_style( "bootstrap_rtl", get_theme_file_uri( '/assets/css/bootstrap-rtl.css' ), [ 'bootstrap' ], '4.3.1' );
	}
	wp_enqueue_style( "hover", get_theme_file_uri( '/assets/css/hover-min.css' ), [], '2.3.1' );
	wp_enqueue_style( "font_icon", get_theme_file_uri( '/assets/css/hover-min.css' ), [], '5.2.0' );
	wp_enqueue_style( "slick", get_theme_file_uri( '/assets/css/slick.css' ), [], '6.2.4' );
	wp_enqueue_style( "slick_theme", get_theme_file_uri( '/assets/css/slick-theme.css' ), [ 'slick' ], '1.6.8' );
	wp_enqueue_style( "main_style", get_theme_file_uri( '/assets/css/style.css' ), [ 'bootstrap' ], '3.0' );
}

add_action( 'wp_enqueue_scripts', 'add_enqueue_style' );