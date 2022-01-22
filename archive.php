<?php get_header(); ?>
<!-- Start Main -->
<main>
    <div class="container my-5">
        <div class="row">
			<?php get_template_part( "template_part/archive/filter" ) ?>
            <div class="col-12 col-lg-4 mb-4">
				<?php get_template_part( "template_part/archive/search" ) ?>
            </div>
            <div class="col-12 col-lg-8 mb-4">
				<?php get_template_part( "template_part/archive/card_archive" ) ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
