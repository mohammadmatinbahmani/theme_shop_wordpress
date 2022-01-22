<div class="row">
	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			?>
            <div class="col-12 col-lg-6">
                <div class="card border-0 articles mb-3">
                    <div class="card-body px-2 pt-2 pb-0">
                        <div class="d-flex align-items-center">
                            <div class="card-img-top w-50 ml-lg-2">
								<?php
								if ( has_post_thumbnail( get_the_ID() ) ) {
									echo get_the_post_thumbnail( get_the_ID(), 'thumbnail', array( 'class' => 'img-fluid' ) );
								} else {
									?>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/Mask Group 7.png"
                                         alt="product" class="img-fluid">
								<?php } ?>
                            </div>
                            <div>
                                <a href="<?php the_permalink( get_the_ID() ); ?>" class="d-block "
                                   style="font-weight: 700;word-spacing: -2px;font-size:15px ;">
									<?php the_title() ?>
                                </a>
                                <small class="d-block mt-2">
									<?php the_excerpt(); ?>
                                </small>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center articles-bottom mt-2">
                            <div class="mr-1">
                                <small> <i class="fas fa-calendar-alt"></i> <?php the_date() ?> </small>
                                <small class="mr-2"> <i class="fas fa-pen-alt"></i> <?php the_author() ?> </small>
                            </div>
                            <a href="<?php the_permalink( get_the_ID() ); ?>" class="px-3 py-1 ml-1"> بیشتر بدانید </a>
                        </div>
                    </div>
                </div>
            </div>
			<?php
		}

		pageinaitonsd();
	}
	?>
	<?php
	function pageinaitonsd() {

		$alowed_tags = [
			'span' => [
				'class' => ['mt-2']
			],
			'a'    => [
				'class' => ['mt-2'],
				'href'  => []
			]

		];
		$args        = [
			'before_page_number' => '<span class="btn border border-secondary mr-2 mb-2">',
			'after_page_number'  => '</span>',
		];
		printf( '<nav>%s</nav>', wp_kses( paginate_links( $args ), $alowed_tags ) );
	}

	?>

</div>