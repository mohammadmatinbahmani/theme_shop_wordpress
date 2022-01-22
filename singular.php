<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php get_header() ?>
</head>
<body class="bg-light">
<!-- Start Header -->


<!-- End Header -->
<?php if ( have_posts() ) {

	while ( have_posts() ) {
		the_post();

 ?>
<!-- Start Main -->
<main>
    <div class="container my-5">
        <div class="row">

			<?php get_template_part( "template_part/singular/breadcromb" ) ?>

            <div class="col-12 col-lg-8">
                <div class="card border-0 content-blog">
					<?php get_template_part( "template_part/singular/single_body" ) ?>

                </div>
            </div>
			<?php get_template_part( "template_part/singular/comments/last_comments" ) ?>



        </div>
    </div>
</main>

<?php } } else {

	_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
} ?>
<!-- End Main -->
<?php get_footer() ?>


<!-- End Footer -->


</body>

</html>