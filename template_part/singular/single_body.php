<div class="card-body">
    <?php  the_post_thumbnail(get_the_ID(),array('class'=>'img-fluid')) ?>
		<h5 class="d-block text-center mt-4 mb-2"><?php the_title() ?>  </h5>
	<div class="d-flex justify-content-around align-items-center mt-3 flex-warp blog-info">
		<small class="px-3 py-1"><?php the_date()?> </small>
        <small class="px-3 py-1">دسته بندی ها: <?php echo shop_categoteis_singular(get_the_ID()); ?> </small>
		<small class="px-3 py-1"> نویسنده : <?php the_author() ?> </small>
	</div>
	<p class="text-justify mt-5">
		<?php the_content('',''); ?>
	</p>
	<div class="card border-0 shadow-sm my-4 ads">
		<div class="card-body p-0 d-flex justify-content-between align-items-center">
			<div>
				<img src="<?php echo get_template_directory_uri()?>/assets/img/dotSHOP-Banner.png" style="width: 13em;" class="img-fluid" alt="ads-img">
				<a href="#"> چرا لورم اپیسوم ایجاد شد و چرا و چگونه !؟ </a>
			</div>
			<a href="#" class="pl-2"> <i class="fas fa-chevron-left align-middle"></i> </a>
		</div>
	</div>
	<?php get_template_part('template_part/singular/footer/footer_singular') ?>
</div>


