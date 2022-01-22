<?php

function shop_categoteis_singular( $post_id ) {
	$categories = get_the_category( $post_id );
	if ( count( $categories ) > 0 ) {
		$category = ( isset( $categories[0] ) ) ? $categories[0] : false;
		echo '<a class="text-dark" href="'.get_category_link(get_cat_ID($category->slug)).'">'.$category->name.'</a>';
	}

	return "";
}