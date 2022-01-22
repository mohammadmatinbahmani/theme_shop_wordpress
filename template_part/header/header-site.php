<header>
	<div class="header-top bg-white py-4">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12 col-lg-3 text-center text-lg-right">
					<h3 class="mb-0">
						<a href="#"> <img src="<?php echo get_template_directory_uri() ?>/assets/img/Group 1.png"
						                  class="img-fluid" alt="logo"> </a>
					</h3>
				</div>
				<div class="col-12 col-lg-6">
					<form class="search-box my-2 my-lg-0">
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text bg-transparent">
									<small> جستجو </small>
								</div>
							</div>
							<input type="text" class="form-control"
							       placeholder="نام محصول مورد نظر خود را جستجو کنید . . . ">
						</div>
						<button class="btn position-absolute"><i class="fas fa-search"></i></button>
					</form>
				</div>
				<div class="col-12 col-lg-3 d-flex justify-content-center justify-content-lg-end register mt-md-2">
					<a href="#" class="ml-3 py-1 px-2"> <i class="fas fa-sign-in-alt align-middle ml-1"></i> ورود / ثبت
						نام </a>
					<a href="#" class="py-1 px-2"> <i class="fas fa-shopping-cart align-middle ml-1"></i> سبد خرید </a>
				</div>
			</div>
		</div>
	</div>
	<!-- End Header Top -->

	<!-- Start Menu -->
<?php get_template_part('template_part/header/header-menu') ?>
	<!-- End Menu -->

	<!-- End Header -->

	<!-- Start Main -->
</header>
