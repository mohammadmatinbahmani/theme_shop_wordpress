<div class="d-flex justify-content-between align-items-center my-5 arrows">
    <div class="dot_hidden">
		<?php next_post_link( ' <i class="fas fa-chevron-right align-middle ml-1"></i> %link' ); ?>
    </div>
    <div class="dot_hidden">
		<?php previous_post_link( '%link  <i class="fas fa-chevron-left align-middle mr-1"></i>' ); ?>
    </div>
</div>

        <?php  /*$tagsargs=wp_get_post_tags(get_the_ID());
        var_dump($tagsargs[0]->name);

        $post_tags = get_the_tags();
        if ( $post_tags ) {
	        echo $post_tags->name;
        }*/


        $tags = get_tags();
        $html = '<div class="d-felx justify-content-between align-items-center mb-4">';
        $html.='<strong class="d-block"> برچسب ها : </strong>';
        foreach ( $tags as $tag ) {
	        $tag_link = get_tag_link( $tag->term_id );

	        $html .= "<a href='{$tag_link}' title='{$tag->name}' class='px-3 py-1 text-secondary rounded-pill bg-light'>";
	        $html .= "{$tag->name}</a>";
        }
        $html .= '</div>';
        echo $html;
        ?>

<div class="viwe">

	<?php get_template_part( "template_part/singular/comments/send_comment" ) ?>
</div>
<?php get_template_part( "template_part/singular/comments/comment_write" ) ?>