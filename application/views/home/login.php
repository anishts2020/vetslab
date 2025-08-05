<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en" dir="ltr">
	<head>

		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta http-equiv="x-ua-compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta content="Vetslab" name="description">
		<meta content="Vetslab" name="author">
		<meta name="keywords" content="vetslab">

		<!-- Favicon-->
		<link rel="icon" href="<?php echo base_url(); ?>assets/images/brand/favicon.png" type="image/x-icon"/>

		<!-- Title -->
		<title>Vetslab-Login</title>

		<!-- Bootstrap css -->
		<link href="<?php echo base_url(); ?>/assets/plugins/bootstrap-4.1.3/css/bootstrap.min.css" rel="stylesheet" />

		<!-- Style css -->
		<link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>assets/css/dark-boxed.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>assets/css/default.css" rel="stylesheet" />

		<!-- Sidemenu css -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/sidemenu/sidemenu.css">

		<!-- owl-carousel css-->
		<link href="<?php echo base_url(); ?>assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />

		<!--Bootstrap-daterangepicker css-->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css">

		<!--Bootstrap-datepicker css-->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.css">

		<!-- Sidemenu-responsive  css -->
		<link href="<?php echo base_url(); ?>assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css" rel="stylesheet">

		<!-- P-scroll css -->
		<link href="<?php echo base_url(); ?>assets/plugins/p-scroll/p-scroll.css" rel="stylesheet" type="text/css">

		<!--Font icons css-->
		<link  href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet">

		<!-- Rightsidebar css -->
		<link href="<?php echo base_url(); ?>assets/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!-- Nice-select css  -->
		<link href="<?php echo base_url(); ?>assets/plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet"/>



		<!-- Color-palette css-->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/skins.css"/>

	</head>
	<body class="app h-100vh  dark-mode">

		<!-- Loader -->
		<div id="loading">
			<img src="<?php echo base_url(); ?>assets/images/other/loader-dark.svg" class="loader-img" alt="Loader">
		</div>

		<!-- Page opened -->
		<div class="page">
			<div class="">
				<div class="col col-login mx-auto">
					<div class="text-center">
						<!--<img src="<?php echo base_url(); ?>assets/images/brand/logo1.png" class="header-brand-img dark-theme mx-auto text-center h-100 mb-5  " alt="Dashlot logo">-->
					</div>
				</div>
				<!-- container opened -->
				<div class="container">
					<div class="row">
						<div class="col-xl-9 justify-content-center mx-auto text-center">
							<div class="card">
								<div class="row">
									<div class="col-md-12 col-lg-7 pr-0 d-none d-lg-block">
										<img src="<?php echo base_url(); ?>assets/images/photos/login_image.jpg" alt="img" class="br-tl-2 br-bl-2 ">
									</div>
									<div class="col-md-12 col-lg-5 pl-0 ">
										<div class="card-body p-6 about-con pabout">
											<div class="card-title text-center  mb-4">LOGIN HERE</div>
											<form action="<?=site_url('Login/login');?>" method="post" autocomplete="off">
												<div class="form-group">
													<input type="text" class="form-control" placeholder="Username" name="username" id="username" required>
												</div>
												<div class="form-group">
													<input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
												</div>
												<div class="form-group">
													<label class="custom-control custom-checkbox">
														<a href="#" class="float-right small text-info">Forgot password?</a>
													</label>
												</div>
												<div class="form-footer mt-1">
													<!--<a href="index.html" class="btn btn-success btn-block">SignIn</a>-->
													<input type="submit" class="btn btn-success btn-block" id="btn_login" value="Login">
												</div>

												<div class="text-center fs-15 mt-3">
													<?php echo $this->session->flashdata('message'); ?>
												</div>
											</form>
											<div class="text-center fs-15 mt-3">
												Don't have account yet? <a href="#" class="text-primary">Login</a>
											</div>
											<hr class="divider">
											<div class="mt-2">
												<a href="#" class="btn btn-facebook btn-block">SignIn via Facebook</a>
												<a href="#" class="btn btn-google btn-block">SignIn via Google</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- container closed -->
			</div>
		</div>
		<!-- Page closed -->

		<!-- Dashboard js -->
		<script src="<?php echo base_url(); ?>assets/js/vendors/jquery-3.2.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-4.1.3/popper.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-4.1.3/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/vendors/jquery.sparkline.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/vendors/circle-progress.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/rating/jquery.rating-stars.js"></script>

		<!--Moment js-->
        <script src="<?php echo base_url(); ?>assets/plugins/moment/moment.min.js"></script>

		<!-- Custom scroll bar js-->
		<script src="<?php echo base_url(); ?>assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!--owl-carousel js-->
		<script src="<?php echo base_url(); ?>assets/plugins/owl-carousel/owl.carousel.js"></script>

		<!-- Bootstrap-daterangepicker js -->
		<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

		<!-- Bootstrap-datepicker js -->
		<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>

		<!--Counters -->
		<script src="<?php echo base_url(); ?>assets/plugins/jquery-countdown/countdown.js"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/jquery-countdown/jquery.plugin.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/jquery-countdown/jquery.countdown.js"></script>

		<!-- Custom js-->
		<script src="<?php echo base_url(); ?>assets/js/custom-dark.js"></script>

	</body>
</html>
<script>
$(document).ready(function () {
    setTimeout(function () {
        $('input[name="username"]').val('');
        $('input[name="password"]').val('');
    }, 600); // Adjust the timeout as needed
});
</script>
