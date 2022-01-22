<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<?php
    $author=sprintf( '<div class="input-group">
			<div class="input-group-prepend">
				<div class="input-group-text bg-white">
					<small>' . esc_html__( 'enter name', 'shop' ) . '</small>
				</div></div><input type="text" class="form-control" name="author" placeholder="%s" value="%s"></div>', esc_html__( 'enter name and last name', 'shop' ), esc_attr( $commenter['comment_author'] ) );
	$email= sprintf( '<div class="input-group my-3">
			<div class="input-group-prepend">
				<div class="input-group-text bg-white">
					<small>' . __( "email", "shop" ) . '</small>
				</div>
			</div>
			<input type="text" class="form-control" name="email" placeholder="%s" value="%s">
		</div>', esc_html__( 'enter email...', 'shop' ), esc_attr( $commenter['comment_author_email'] ) );
    $submit_field='<div class="form-group text-left"><input name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" /></div> </div>';
    $comment_field='<div class="form-group"><textarea style="resize: none" name="comment"  id="" cols="30" rows="10"  class="form-control" placeholder="' . __( 'enter massege', 'shop' ) . '"></textarea></div>';
    $args = array(
		'title_reply_before' => '<div class="form-comment mt-5"><p class="mb-0">',
		'title_reply_after'  => '</p>
          <div class="d-flex align-items-center">
                    <p class="m-0" style="font-weight: 300;"> امتیاز شما : </p>
                    <div class="mr-2">
                        <a href="#" style="color: #ccc;"> <i class="fas fa-star align-middle"></i> </a>
                        <a href="#" style="color: #ccc;"> <i class="fas fa-star align-middle"></i> </a>
                        <a href="#" style="color: #ccc;"> <i class="fas fa-star align-middle"></i> </a>
                        <a href="#" style="color: #ccc;"> <i class="fas fa-star align-middle"></i> </a>
                        <a href="#" style="color: #ccc;"> <i class="fas fa-star align-middle"></i> </a>
                    </div>
                </div>
                <small>
		نشانی ایمیل شما منتشر نخواهد شد ، لطفا تمام کادرها را با دقت پر کنید و در نهایت ارسال را بزنید.
	</small>',
		'class_form'         => 'link-dl shadow-none mt-3',
		'fields'             => apply_filters( 'comment_form_default_fields', array(
			/*'author' => sprintf('<div class="form-group"><input type="text" class="form-control mb-1"  name="author"  placeholder="%s" value="%s"></div>',
				esc_html__('your name', 'new-theme'), esc_attr($commenter['comment_author'])),
			'email' => sprintf('<div class="form-group"><input type="email"  name="email"  class="form-control mb-1" placeholder="%s" value="%s"></div>',
				esc_html__('your email', 'new-theme'), esc_attr($commenter['comment_author_email'])),*/
			'author'  =>$author ,
			'email'   =>$email,
			'url'     => '',
			'cookies' => '',
		) ),
		'comment_field'      => $comment_field,
		'submit_field'       => '%1$s %2$s',
		'submit_button'      => $submit_field,
		'class_submit'       => 'btn px-3 py-1',
		'comment_notes_before'=>'',
		'comment_notes_after'=>''
	);
	add_filter( 'comment_form_fields', function ( $comment_form ) {
		$comment      = array_shift( $comment_form );
		$comment_form = $comment_form + array( 'comment' => $comment );

		return $comment_form;
	} );
	?>
	<?php comment_form( $args ); ?>


	<?php if ( have_comments() ) : ?>
        <p class="comments-title">
			<?php echo get_comments_number( $post->ID ); ?> دیدگاه برای مطلب
			<?php the_title() ?>
            ارسال شده:
        </p>

        <ol class="comment-list p-0">
			<?php
			wp_list_comments( array(
				'style'       => 'ol',
				'short_ping'  => true,
				'avatar_size' => 74,
				'callback'    => 'show_comments',
			) );
			?>
        </ol><!-- .comment-list -->

<?php
/*	$argspagin=array(
            'class'=>'d-flex justify-content-between'
    );
        */?>
        <!-- <div class="">
            <div class="pagination">
				<?php /*echo get_the_comments_pagination($argspagin); */?>
            </div>
        </div>-->




		<?php
		if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
			echo '<nav class="pagination">';
			$pagination = paginate_comments_links(
				apply_filters(
					'woocommerce_comment_pagination_args',
					array(
						'prev_text' => '<i class="align-middle fa fa-arrow-right"></i>',
						'next_text' => '<i class="align-middle fa fa-arrow-left"></i>',
						'type'      => 'list',
						'echo'      => false,
					)
				)
			);
			$pagination = str_replace( 'page-numbers', 'page-number', $pagination );
			$pagination = str_replace( "<ul class='page-number'>", '<ul class="navbar-nav flex-row align-items-center  justify-content-center w-100">', $pagination );
			$pagination = str_replace( "<li>", '<li class="btn btn-light ml-1">', $pagination );
			echo $pagination;
			echo '</nav>';
		endif;
		?>






		<?php if ( ! comments_open() && get_comments_number() ) : ?>
            <p class="no-comments"><?php _e( 'Comments are closed.', 'twentythirteen' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>


</div><!-- #comments -->