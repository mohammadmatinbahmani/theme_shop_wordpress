<?php
add_filter('comment_reply_link', 'replace_reply_link_class');


function replace_reply_link_class($class){
	$class = str_replace("class='comment-reply-link", "class='btn bg-light text-secondary  rounded", $class);
	return $class;
}
function show_comments($comment,$args,$depth){
	?>
	<div <?php comment_class('card border-0 bg-light mb-3 '. (empty($args['has_children']) ? '' : 'parent')) ?>id="comment-<?php comment_ID() ?>">
		<div class="card-body">
			<div class="d-flex justify-content-between align-items-center">
				<div class="d-flex align-items-center">
					<?php if ($args['avatar_size'] != 0) {
						echo get_avatar($comment, $args['avatar_size'], '', '', ['class' => 'avatar mb-3 img-fluid rounded-circle']);
					} ?>
					<div class="mr-3">
						<p class="mb-0"> <?php printf(__('<strong>%s</strong>'), get_comment_author()); ?></p>
						<small class="text-muted"><?php printf(__('در تاریخ %s یک دیدگاه ارسال شده:'),get_comment_date()) ?></small>
					</div>
				</div>
				<div class="reply mr-2"><?php
					comment_reply_link(
						array_merge(
							$args,
							array(
								'add_below' => 'comment',
								'depth' => $depth,
								'max_depth' => $args['max_depth']
							)
						)
					); ?></div>
			</div>
			<p class="mt-3" style="font-size: 14px;opacity: 0.7;margin-bottom: -15px;">
				<?php comment_text(); ?>
			</p>
		</div>
	</div>
	<?php
}