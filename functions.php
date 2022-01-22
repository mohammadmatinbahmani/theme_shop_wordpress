<?php
define( 'IS_DEVELOPER', false );
if ( IS_DEVELOPER ) {
	define( 'HAMYAR_SHOP_VERSION', time() );

} else {
	define( 'HAMYAR_SHOP_VERSION', '1.2.0' );
}

require_once ( 'inc/fuctions/menu.php' );
require_once ( 'inc/fuctions/bredcrob.php' );
require_once 'jdf.php';
require_once 'inc/fuctions/add_enqueue_style.php';
require_once 'inc/fuctions/add_enqueue_script.php';
require_once 'inc/fuctions/comments_function.php';
require_once 'inc/fuctions/register_widget.php';
require_once 'inc/fuctions/theme_support.php';
require_once 'inc/fuctions/add_class_theme.php';
require_once 'inc/fuctions/add_func_theme.php';
/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
	return 16;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
?>