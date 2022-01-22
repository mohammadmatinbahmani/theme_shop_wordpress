<?php
/**
 * Add support for two custom navigation menus.
 */
function  add_menus_shop_theme(){
register_nav_menus( array(
	'header-menu'   => __( 'Primary Menu', 'shop' ),
) );
}
add_action('init','add_menus_shop_theme');
