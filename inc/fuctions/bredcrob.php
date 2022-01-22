<?php
/**
 * Generate breadcrumbs
 * @author CodexWorld
 * @authorURL www.codexworld.com
 */
function get_breadcrumb() {
	if ( is_singular() ) {
		echo '<a class="breadcrumb-item" href="' . home_url() . '" rel="nofollow">' . get_bloginfo( 'name' ) . '</a>';
		if ( is_category() || is_single() ) {

			echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
			echo "<span>";
			echo shop_categoteis_singular( get_the_ID() );
			echo "</span>";
			if ( is_single() ) {

				echo " &nbsp;&nbsp;/&nbsp;&nbsp; ";
				echo "<span>";
				the_title();
				echo "</span>";
			}
		} elseif ( is_page() ) {
			echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
			echo "<span>";
			echo the_title();
			echo "</span>";
		} elseif ( is_search() ) {
			echo "&nbsp;&nbsp;/&nbsp;&nbsp;Search Results for... ";
			echo '"<em>';
			echo the_search_query();
			echo '</em>"';
		}
	}elseif (is_archive()){
		echo '<a class="breadcrumb-item" href="' . home_url() . '" rel="nofollow">' . get_bloginfo( 'name' ) . '</a>';
		if ( is_category() || is_single() ) {

			echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
			echo "<span>";
			echo shop_categoteis_singular( get_the_ID() );
			echo "</span>";
		}
	}
} ?>