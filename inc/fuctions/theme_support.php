<?php
if ( ! function_exists( 'myfirsttheme_setup' ) ) :
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'homepage-thumb', 220, 180, true ); // (cropped)
	function myfirsttheme_setup() {

		load_theme_textdomain( 'shop', get_template_directory() . '/languages' );

		/**
		 * Add default posts and comments RSS feed links to &lt;head>.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Enable support for post thumbnails and featured images.
		 */

		add_theme_support( 'title-tag' );


		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
	}
endif;
add_action( 'after_setup_theme', 'shop' );