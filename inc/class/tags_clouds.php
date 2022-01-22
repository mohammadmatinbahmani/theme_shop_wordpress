<?php class tag_cloud_widgetd extends WP_Widget
{


	/**
	 * Sets up a new Tag Cloud widget instance.
	 *
	 * @since 2.8.0
	 */
	public function __construct()
	{
		parent::__construct('tag_cloud_widget', 'widget_tag_cloud', array('description' => 'a tag  cloud'));
	}

	/**
	 * Outputs the content for the current Tag Cloud widget instance.
	 *
	 * @param array $args Display arguments including 'before_title', 'after_title',
	 *                        'before_widget', and 'after_widget'.
	 * @param array $instance Settings for the current Tag Cloud widget instance.
	 * @since 2.8.0
	 *
	 */
	public function widget($args, $instance)
	{

		$tag_cloud = wp_tag_cloud(
			$trgs = apply_filters(
				'widget_tag_cloud_args',
				array(
					'taxonomy' => 'post_tag',
					'echo' => false,
				)

			)
		);
		$args = wp_parse_args($args, $trgs);

		$tags = get_terms(
			array_merge(
				$args,
				array(
					'orderby' => 'count',
					'order' => 'DESC',
				)
			)
		);


		echo $args['before_widget'];

		echo '<div class="tags">';

		foreach ($tags as $tagf) {
			?>
			<a href="<?php echo esc_url(get_tag_link( $tagf->term_id, $args['post_type'] ));?>" class="btn btn-sm btn-light ml-1 mb-2">
				<?php echo '#'. esc_html($tagf->name) ?>
			</a>
			<?php

		}

		echo "</div>\n";

		echo $args['after_widget'];
	}

	public function update($new_instance, $old_instance)
	{
		$instance = array();
		$instance['count'] = !empty($new_instance['count']) ? 1 : 0;
		$instance['taxonomy'] = stripslashes($new_instance['taxonomy']);
		return $instance;
	}


	public function form($instance)
	{
	}
}


add_action('widgets_init', 'tag_cloud_form');
function tag_cloud_form()
{
	register_widget('tag_cloud_widgetd');
}







