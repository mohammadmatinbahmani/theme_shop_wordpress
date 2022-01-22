<?php
add_action( 'widgets_init', 'themename_widgets_init' );
function themename_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'navigation_sidebar_1', 'shop' ),
		'id'            => 'navigation_sidebar_1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'navigation_sidebar_2', 'theme_name' ),
		'id'            => 'navigation_sidebar_2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'navigation_sidebar_3', 'theme_name' ),
		'id'            => 'navigation_sidebar_3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'navigation_sidebar_4', 'theme_name' ),
		'id'            => 'navigation_sidebar_4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'single-sidebar', 'shop' ),
		'id'            => 'single-last_comments',
		'before_widget' => '<div class="card border-0 mt-3 mt-lg-0 recent-comments"><div class="card-body pb-2">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<div class="d-flex justify-content-between align-items-center"><h6 class="mb-0">',
		'after_title'   => '</h6></div>',
	) );
}