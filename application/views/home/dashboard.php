<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="x-ua-compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta content="Vetslab-Dashboard" name="description">
		<meta content="Vetslab-Dashboard" name="author">
		<meta name="keywords" content="Vetslab Dashboard">

		<!-- Favicon-->
		<link rel="icon" href="<?php echo base_url(); ?>assets/images/brand/favicon.png" type="image/x-icon"/>

		<!-- Title -->
		<title>Vetslab Dashboard</title>

		<!-- Bootstrap css -->
		<link href="<?php echo base_url(); ?>assets/plugins/bootstrap-4.1.3/css/bootstrap.min.css" rel="stylesheet" />

		<!-- Style css -->
		<link  href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>assets/css/dark-boxed.css" rel="stylesheet" />

		<!-- Default css -->
		<link href="<?php echo base_url(); ?>assets/css/default.css" rel="stylesheet">

		<!-- Owl-carousel css-->
		<link href="<?php echo base_url(); ?>assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />

		<!-- Bootstrap-daterangepicker css -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css">

		<!-- Bootstrap-datepicker css -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.css">

		<!-- Custom scroll bar css -->
		<link href="<?php echo base_url(); ?>assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet"/>

		<!-- Horizontal css -->
        <link id="effect" href="<?php echo base_url(); ?>assets/plugins/horizontal-menu/dropdown-effects/fade-up.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/plugins/horizontal-menu/horizontal.css" rel="stylesheet" />

		<!-- P-scroll css -->
		<link href="<?php echo base_url(); ?>assets/plugins/p-scroll/p-scroll.css" rel="stylesheet" type="text/css">

		<!-- Font-icons css -->
		<link  href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet">

		<!-- Rightsidebar css -->
		<link href="<?php echo base_url(); ?>assets/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!-- Nice-select css  -->
		<link href="<?php echo base_url(); ?>assets/plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet"/>



		<!-- Color-palette css-->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/skins.css"/>

	</head>
	<body class="app dark-mode">

		<!-- Loader -->
		<div id="loading">
			<img src="<?php echo base_url(); ?>assets/images/other/loader-dark.svg" class="loader-img" alt="Loader">
		</div>

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">

				<!-- Top-header opened -->
				<div class="header-main header sticky">
					<div class="app-header header top-header navbar-collapse ">
						<div class="container">
							<a id="horizontal-navtoggle" class="animated-arrow hor-toggle"><span></span></a><!-- sidebar-toggle-->
							<div class="d-flex">
								<a class="header-brand" href="#">
									<h3>VetsLab</h3>
								</a>
								<div class="d-flex header-left left-header">
									<div class="d-none d-lg-block horizontal">
										<ul class="nav">
											<li class="">
												<div class="dropdown d-none d-md-flex">
													<a href="#" class="d-flex nav-link pr-0  pt-2 mt-3 country-flag1" data-toggle="dropdown">
														<span class="d-flex"><img src="<?php echo base_url(); ?>assets/images/us_flag.jpg" alt="img" class="avatar country-Flag mr-2 align-self-center"></span>
														<div>
															<span class="d-flex fs-14 mr-3 mt-0">English<span><i class="mdi mdi-chevron-down"></i></span></span>
														</div>
													</a>
													<div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow">
														<a href="#" class="dropdown-item d-flex align-items-center mt-2">
															<img src="<?php echo base_url(); ?>assets/images/french_flag.jpg" alt="flag-img" class="w-6 flag-sm mr-3 align-self-center">
															<div>
																<span>French</span>
															</div>
														</a>
														<a href="#" class="dropdown-item d-flex align-items-center">
															<img src="<?php echo base_url(); ?>assets/images/germany_flag.jpg" alt="flag-img" class="w-6 flag-sm mr-3 align-self-center">
															<div>
																<span>Germany</span>
															</div>
														</a>
														<a href="#" class="dropdown-item d-flex align-items-center">
															<img src="<?php echo base_url(); ?>assets/images/italy_flag.jpg" alt="flag-img" class="w-6 flag-sm  mr-3 align-self-center">
															<div>
																<span>Italy</span>
															</div>
														</a>
														<a href="#" class="dropdown-item d-flex align-items-center">
															<img src="<?php echo base_url(); ?>assets/images/russia_flag.jpg" alt="flag-img" class="w-6 flag-sm mr-3 align-self-center">
															<div>
																<span>Russia</span>
															</div>
														</a>
														<a href="#" class="dropdown-item d-flex align-items-center mb-2">
															<img src="<?php echo base_url(); ?>assets/images/spain_flag.jpg" alt="flag-img" class="w-6 flag-sm mr-3 align-self-center">
															<div>
																<span>Spain</span>
															</div>
														</a>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="d-flex header-right ml-auto">
									<div class="dropdown header-fullscreen">
										<a class="nav-link icon full-screen-link" id="fullscreen-button">
											<i class="mdi mdi-arrow-collapse fs-20"></i>
										</a>
									</div><!-- Fullscreen -->
									<div class="" id="bs-example-navbar-collapse-1">
										<form class="navbar-form" role="search">
											<div class="input-group ">
												<input type="text" class="form-control" placeholder="Search...">
												<span class="input-group-btn">
													<button type="reset" class="btn btn-default">
														<i class="fa fa-times"></i>
													</button>
													<button type="submit" class="btn btn-default">
														<i class="fa fa-search"></i>
													</button>
												</span>
											</div>
										</form>
									</div><!-- Search -->
									<div class="dropdown header-notify">
										<a class="nav-link icon text-center" data-toggle="dropdown">
											<i class="typcn typcn-bell bell-animations"></i>
											<span class="pulse bg-success"></span>
										</a>
										<div class="dropdown-menu dropdown-menu-right animated bounceInDown dropdown-menu-arrow w-250">
											<div class="dropdown-header p-4 mb-2 bg-header-image p-5 text-white">
												<h5 class="dropdown-title mb-1 font-weight-semibold text-drak">Notifications</h5>
												<p class="dropdown-title-text subtext mb-0 pb-0 fs-13">You have 4 new notifications</p>
											</div>
											<div class="drop-notify">
												<a href="#" class="dropdown-item d-flex pb-3 pl-4 pr-2 border-bottom">
													<div class="notifyimg bg-success-transparent text-success-shadow"><i class="fa fa-calendar fs-18 text-success"></i></div>
													<div><strong>Completed One task</strong>
														<div class="small fs-14 text-muted">3 min ago</div>
													</div>
												</a>
												<a href="#" class="dropdown-item d-flex pb-3 pl-4  pr-2 border-bottom">
													<div class="notifyimg bg-secondary-transparent text-secondary-shadow"><i class="fa fa-cogs fs-18 text-secondary"></i></div>
													<div><strong>Server Rebooted.</strong>
														<div class="small fs-14 text-muted">5 days ago</div>
													</div>
												</a>
												<a href="#" class="dropdown-item d-flex pb-3 pl-4 pr-2 border-bottom">
													<div class="notifyimg bg-info-transparent text-info-shadow"><i class="fa fa-envelope-o fs-18 text-info"></i></div>
													<div><strong> 3 new Comments</strong>
														<div class="small fs-14 text-muted">5 days ago</div>
													</div>
												</a>
												<a href="#" class="dropdown-item d-flex pb-3 pl-4 pr-2 border-bottom">
													<div class="notifyimg bg-primary-transparent text-primary-shadow"><i class="fa fa-thumbs-o-up fs-18 text-primary"></i></div>
													<div><strong>Anna likes our posts.</strong>
														<div class="small fs-14 text-muted">5 days ago</div>
													</div>
												</a>
												<a href="#" class="dropdown-item d-flex pb-3 pl-4 pr-2">
													<div class="notifyimg bg-secondary-transparent text-secondary-shadow"><i class="fa fa-exclamation-triangle fs-18 text-secondary"></i></div>
													<div><strong> Application Error</strong>
														<div class="small fs-14 text-muted">5 days ago</div>
													</div>
												</a>
											</div>
											<div class="dropdown-divider mb-0"></div>
											<a href="#" class="dropdown-item text-center br-br-6 br-bl-6">See all Messages</a>
										</div>
									</div><!-- Notification -->
									<div class="dropdown d-md-flex message">
										<a class="nav-link icon" data-toggle="dropdown">
											<i class="typcn typcn-messages"></i>
											<span class="badge badge-secondary pulse-secondary">5</span>
										</a>
										<div class="dropdown-menu dropdown-menu-right animated bounceInDown dropdown-menu-arrow">
											<div class="dropdown-header bg-header-image text-white w-300 p-5 mb-2">
												<h5 class="dropdown-title mb-1 font-weight-semibold text-drak">Messages</h5>
												<p class="dropdown-title-text subtext mb-0 pb-0 fs-13 ">You have 4 unread messages</p>
											</div>
											<div class="drop-scroll">
												<a href="#" class="p-3 d-flex border-bottom">
													<div class="avatar avatar-md  mr-3 d-block cover-image brround default-shadow" data-image-src="<?php echo base_url(); ?>assets/images/users/6.jpg">
														<span class="avatar-status bg-success"></span>
													</div>
													<div class="w-80">
														<div class="d-flex">
															<h5 class="mb-2">Madeleine</h5>
															<i class="fa fa-circle-thin text-right ml-auto fs-10 text-success float-right"></i>
														</div>
														<p class="mb-1">I'm sorry but i'm not sure how to help you with that...</p>
														<span class="font-weight-normal fs-13 text-muted">Mar15 3:55 PM</span>
													</div>
												</a>
												<a href="#" class="p-3 d-flex border-bottom">
													<div class="avatar avatar-md  mr-3 d-block cover-image brround default-shadow" data-image-src="<?php echo base_url(); ?>assets/images/users/7.jpg">
														<span class="avatar-status bg-danger"></span>
													</div>
													<div class="w-80">
														<div class="d-flex">
															<h5 class="mb-2">Nargis Hawa</h5>
															<i class="fa fa-circle-thin text-right ml-auto fs-10 text-danger float-right"></i>
														</div>
														<p class="mb-1">All set! Now, time to get to you now...</p>
														<span class="font-weight-normal fs-13 text-muted">Mar15 3:55 PM</span>
													</div>
												</a>
												<a href="#" class="p-3 d-flex border-bottom">
													<div class="avatar avatar-md  mr-3 d-block cover-image brround default-shadow" data-image-src="<?php echo base_url(); ?>assets/images/users/10.jpg">
														<span class="avatar-status bg-info"></span>
													</div>
													<div class="w-80">
														<div class="d-flex">
															<h5 class="mb-2">Sahar Darya</h5>
															<i class="fa fa-circle-thin text-right ml-auto fs-10 text-info float-right"></i>
														</div>
														<p class="mb-1">Here are some products i found for you form database...</p>
														<span class="font-weight-normal fs-13 text-muted">Mar15 3:55 PM</span>
													</div>
												</a>
												<a href="#" class="p-3 d-flex border-bottom">
													<div class="avatar avatar-md  mr-3 d-block cover-image brround default-shadow" data-image-src="<?php echo base_url(); ?>assets/images/users/11.jpg">
														<span class="avatar-status bg-warning"></span>
													</div>
													<div class="w-80">
														<div class="d-flex">
															<h5 class="mb-2">Khadija Mehr</h5>
															<i class="fa fa-circle-thin text-right ml-auto fs-10 text-warning float-right"></i>
														</div>
														<p class="mb-1">Are you ready to pickup your Delivery...</p>
														<span class="font-weight-normal fs-13 text-muted">Mar15 3:55 PM</span>
													</div>
												</a>
											</div>
											<div class="dropdown-divider mb-0 mt-0"></div>
											<a href="#" class="dropdown-item text-center p-3">See all Messages</a>
										</div>
									</div><!-- Message-box -->
									<div class="dropdown d-md-flex d-cart">
										<a class="nav-link icon" data-toggle="dropdown">
											<i class="fe fe-shopping-cart"></i>
											<span class="badge badge-danger pulse-danger">4</span>
										</a>
										<div class="dropdown-menu dropdown-menu-right animated bounceInDown dropdown-menu-arrow">
											<div class="dropdown-header bg-header-image text-white w-300 p-5 mb-2">
												<h5 class="dropdown-title mb-1 font-weight-semibold text-drak">Cart</h5>
												<p class="dropdown-title-text subtext mb-0 pb-0 fs-13 ">You have 4 Items Cart</p>
											</div>
											<div class="drop-cart">
												<div class="border-bottom">
													<div class="d-flex pl-3 pr-4 pt-2 pb-3 cart align-items-center">
														<div class="text-warning drop-cart-img">
															<img src="<?php echo base_url(); ?>assets/images/media/ecommerce/2.png" class="" alt="Smart Watch">
														</div>
														<div class="flex dropdown-cart">
															<div class="d-flex align-items-center">
																<div class="pl-3">
																	<span class="fs-16 font-weight-semibold d-block">Apple Watch OS</span>
																	<div class="para fs-14 text-muted">Mens Solid Bomber jacket, Brown jacket , Winter Wear.</div>
																</div>
																<div class="pl-8 ml-auto">
																	<a href="#" class="text-nowrap text-danger"><i class="fa fa-trash fs-16"></i></a>
																</div>
															</div>
															<div class="d-flex pl-3">
																<div>x2</div>
																<div class="ml-auto">$49</div>
															</div>
														</div>
													</div>
												</div>
												<div class="border-bottom">
													<div class="d-flex pl-3 pr-4 pt-2 pb-3 cart align-items-center">
														<div class="text-warning drop-cart-img">
															<img src="<?php echo base_url(); ?>assets/images/media/ecommerce/4.png" class="" alt="Smart Watch">
														</div>
														<div class="flex dropdown-cart">
															<div class="d-flex align-items-center">
																<div class="pl-3">
																	<span class="fs-16 font-weight-semibold d-block"> Handbag</span>
																	<div class="para fs-14 text-muted">Womens Red color Handbag.</div>
																</div>
																<div class="pl-8 ml-auto">
																	<a href="#" class="text-nowrap text-danger"><i class="fa fa-trash fs-16"></i></a>
																</div>
															</div>
															<div class="d-flex pl-3">
																<div>x1</div>
																<div class="ml-auto">$76</div>
															</div>
														</div>
													</div>
												</div>
												<div class="border-bottom">
													<div class="d-flex pl-3 pr-4 pt-2 pb-3 cart align-items-center">
														<div class="text-warning drop-cart-img">
															<img src="<?php echo base_url(); ?>assets/images/media/ecommerce/7.png" class="" alt="Smart Watch">
														</div>
														<div class="flex dropdown-cart">
															<div class="d-flex align-items-center">
																<div class="pl-3">
																	<span class="fs-16 font-weight-semibold d-block">HeadPhones</span>
																	<div class="para fs-14 text-muted">Wireless Headphones to make to business.</div>
																</div>
																<div class="pl-8 ml-auto">
																	<a href="#" class="text-nowrap text-danger"><i class="fa fa-trash fs-16"></i></a>
																</div>
															</div>
															<div class="d-flex pl-3">
																<div>x2</div>
																<div class="ml-auto">$45</div>
															</div>
														</div>
													</div>
												</div>
												<div class="border-bottom">
													<div class="d-flex pl-3 pr-4 pt-2 pb-3 cart align-items-center">
														<div class="text-warning drop-cart-img">
															<img src="<?php echo base_url(); ?>assets/images/media/ecommerce/15.png" class="" alt="Smart Watch">
														</div>
														<div class="flex dropdown-cart">
															<div class="d-flex align-items-center">
																<div class="pl-3">
																	<span class="fs-16 font-weight-semibold d-block">College bag</span>
																	<div class="para fs-14 text-muted">Yellow college bag for student.</div>
																</div>
																<div class="pl-8 ml-auto">
																	<a href="#" class="text-nowrap text-danger"><i class="fa fa-trash fs-16"></i></a>
																</div>
															</div>
															<div class="d-flex pl-3">
																<div>x1</div>
																<div class="ml-auto">$57</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="dropdown-divider mb-0 mt-0"></div>
											<a href="#" class="dropdown-item text-center p-3">See all Items</a>
										</div>
									</div><!-- Cart -->
									<div class="dropdown drop-profile">
										<a class="nav-link pr-0 leading-none" href="#" data-toggle="dropdown" aria-expanded="false">
											<div class="profile-details mt-1">
												<span class="mr-3 mb-0  fs-15 font-weight-semibold"><?php echo $this->session->userdata('name'); ?></span>
												<!--<small class="text-muted mr-3">appdeveloper</small>-->
											</div>
											<img class="avatar avatar-md brround" src="<?php echo base_url(); ?>assets/images/users/2.jpg" alt="image">
										 </a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated bounceInDown w-250">
											<div class="user-profile bg-header-image border-bottom p-3">
												<div class="user-image text-center">
													<img class="user-images" src="<?php echo base_url(); ?>assets/images/users/2.jpg" alt="image">
												</div>
												<div class="user-details text-center">
													<h4 class="mb-0">Jonathan Mills</h4>
													<p class="mb-1 fs-13 text-white-50">Jonathan@gmail.com</p>
												</div>
											</div>
											<a class="dropdown-item" href="#">
												<i class="dropdown-icon mdi mdi-account-outline "></i> Profile
											</a>
											<a class="dropdown-item" href="#">
												<i class="dropdown-icon  mdi mdi-settings"></i> Settings
											</a>
											<a class="dropdown-item" href="#">
												<span class="float-right"><span class="badge badge-success">6</span></span>
												<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
											</a>
											<a class="dropdown-item" href="#">
												<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
											</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#">
												<i class="dropdown-icon mdi mdi-compass"></i> Need help?
											</a>
											<a class="dropdown-item mb-1" href="<?php echo site_url('logout'); ?>">
												<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
											</a>
										</div>
									</div><!-- Profile -->
									<div class="sidebar-link">
										<a href="#" class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right">
											<i class="fe fe-align-right" ></i>
										</a>
									</div><!-- Right-side-toggle -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Top-header closed -->

				<!-- Horizontal-menu -->
				
				<!-- Horizontal-menu end -->

				<!-- App-content opened -->

				<!-- App-content closed -->
			</div>

			<!-- Right-sidebar-->
			<div class="sidebar sidebar-right sidebar-animate">
				<div class="p-3">
					<a href="#" class="text-right float-right" data-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x"></i></a>
				</div>
				<div class="tab-menu-heading  siderbar-tabs border-0">
					<div class="tabs-menu ">
						<!-- Tabs -->
						<ul class="nav panel-tabs">
							<li class=""><a href="#tab" class="active show" data-toggle="tab">Profile</a></li>
							<li class=""><a href="#tab1" data-toggle="tab" class="">Friends</a></li>
							<li><a href="#tab2" data-toggle="tab" class="">Activity</a></li>
							<li><a href="#tab3" data-toggle="tab" class="">Todo</a></li>
						</ul>
					</div>
				</div>
				<div class="panel-body tabs-menu-body side-tab-body p-0 border-0 ">
					<div class="tab-content border-top">
						<div class="tab-pane active" id="tab">
							<div class="card-body p-0">
								<div class="header-user text-center mt-4 pb-4">
									<span class="avatar avatar-xxl brround"><img src="<?php echo base_url(); ?>assets/images/users/2.jpg" alt="Profile-img" class="avatar avatar-xxl brround"></span>
									<div class="dropdown-item text-center font-weight-semibold user h3 mb-0">Jonathan Mills</div>
									<small>App Developer</small>
									<div class="card-body">
										<div class="form-group ">
											<label class="form-label  text-left">Offline/Online</label>
											<select class="form-control mb-4 nice-select " data-placeholder="Choose one">
												<option value="1">Online</option>
												<option value="2">Offline</option>
											</select>
										</div>
										<div class="form-group mt-5">
											<label class="form-label text-left">Website</label>
											<select class="form-control nice-select " data-placeholder="Choose one">
												<option value="1">Spruko.com</option>
												<option value="2">sprukosoft.com</option>
												<option value="3">sprukotechnologies.com</option>
												<option value="4">sprukoinfo.com</option>
												<option value="5">sprukotech.com</option>
											</select>
										</div>
									</div>
								</div>
								<a class="dropdown-item  border-top" href="#">
									<i class="dropdown-icon mdi mdi-account-edit"></i> Edit Profile
								</a>
								<a class="dropdown-item  border-top" href="#">
									<i class="dropdown-icon mdi mdi-account-outline"></i> Spruko technologies
								</a>
								<a class="dropdown-item border-top" href="#">
									<i class="dropdown-icon  mdi mdi-account-plus"></i> Add Another Account
								</a>
								<a class="dropdown-item  border-top" href="#">
									<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
								</a>
								<a class="dropdown-item  border-top" href="#">
									<i class="dropdown-icon zmdi zmdi-pin-help"></i> Need Help?
								</a>
								<div class="card-body border-top">
									<h4>Gallery</h4>
									<div class="row mt-4">
										<div class="col-12">
											<div class="avatar-list">
												<ul>
													<li><a href="#" class="avatar avatar-lg cover-image"  data-image-src="<?php echo base_url(); ?>assets/images/users/5.jpg"></a></li>
													<li><a href="#" class="avatar avatar-lg cover-image"  data-image-src="<?php echo base_url(); ?>assets/images/photos/2.jpg"></a></li>
													<li><a href="#" class="avatar avatar-lg cover-image"  data-image-src="<?php echo base_url(); ?>assets/images/photos/3.jpg"></a></li>
													<li><a href="#" class="avatar avatar-lg cover-image"  data-image-src="<?php echo base_url(); ?>assets/images/photos/5.jpg"></a></li>
													<li><a href="#" class="avatar avatar-lg cover-image"  data-image-src="<?php echo base_url(); ?>assets/images/users/3.jpg"></a></li>
													<li><a href="#" class="avatar avatar-lg cover-image"  data-image-src="<?php echo base_url(); ?>assets/images/photos/15.jpg"></a></li>
													<li><a href="#" class="avatar avatar-lg cover-image"  data-image-src="<?php echo base_url(); ?>assets/images/photos/16.jpg"></a></li>
													<li><a href="#" class="avatar avatar-lg cover-image"  >+48</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body border-top border-bottom">
									<div class="row">
										<div class="col-4 text-center">
											<a class="" href=""><i class="dropdown-icon mdi  mdi-message-outline fs-20 m-0 leading-tight"></i></a>
											<div>Inbox</div>
										</div>
										<div class="col-4 text-center">
											<a class="" href=""><i class="dropdown-icon mdi mdi-tune fs-20 m-0 leading-tight"></i></a>
											<div>Settings</div>
										</div>
										<div class="col-4 text-center">
											<a class="" href=""><i class="dropdown-icon mdi mdi-logout-variant fs-20 m-0 leading-tight"></i></a>
											<div>Sign out</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="tab1">
							<div class="chat">
								<div class="contacts_card">
									<div class="input-group mb-0 p-3">
										<input type="text" placeholder="Search..." class="form-control search">
										<div class="input-group-prepend mr-0">
											<span class="input-group-text  search_btn  btn-secondary"><i class="fa fa-search text-white"></i></span>
										</div>
									</div>
									<ul class="contacts mb-0">
										<li class="active">
											<div class="d-flex bd-highlight w-100">
												<div class="img_cont">
													<img src="<?php echo base_url(); ?>assets/images/users/12.jpg" class="rounded-circle user_img" alt="img">
													<span class="online_icon"></span>
												</div>
												<div class="user_info">
													<h5 class="mt-1 mb-1">Maryam Naz</h5>
													<small class="text-muted">is online</small>
												</div>
												<div class="float-right text-right ml-auto mt-auto mb-auto"><small>01-02-2019</small></div>
											</div>
										</li>
										<li>
											<div class="d-flex bd-highlight w-100">
												<div class="img_cont">
													<img src="<?php echo base_url(); ?>assets/images/users/2.jpg" class="rounded-circle user_img" alt="img">
													<span class=" online_icon"></span>
												</div>
												<div class="user_info">
													<h5 class="mt-1 mb-1">Sahar Darya</h5>
													<small class="text-muted">left 7 mins ago</small>
												</div>
												<div class="float-right text-right ml-auto mt-auto mb-auto"><small>01-02-2019</small></div>
											</div>
										</li>
										<li>
											<div class="d-flex bd-highlight w-100">
												<div class="img_cont">
													<img src="<?php echo base_url(); ?>assets/images/users/5.jpg" class="rounded-circle user_img" alt="img">
													<span class="online_icon"></span>
												</div>
												<div class="user_info">
													<h5 class="mt-1 mb-1">Maryam Naz</h5>
													<small class="text-muted">online</small>
												</div>
												<div class="float-right text-right ml-auto mt-auto mb-auto"><small>01-02-2019</small></div>
											</div>
										</li>
										<li>
											<div class="d-flex bd-highlight w-100">
												<div class="img_cont">
													<img src="<?php echo base_url(); ?>assets/images/users/7.jpg" class="rounded-circle user_img" alt="img">
													<span class="online_icon"></span>
												</div>
												<div class="user_info">
													<h5 class="mt-1 mb-1">Yolduz Rafi</h5>
													<small class="text-muted">online</small>
												</div>
												<div class="float-right text-right ml-auto mt-auto mb-auto"><small>02-02-2019</small></div>
											</div>
										</li>
										<li>
											<div class="d-flex bd-highlight w-100">
												<div class="img_cont">
													<img src="<?php echo base_url(); ?>assets/images/users/8.jpg" class="rounded-circle user_img" alt="img">
													<span class="online_icon"></span>
												</div>
												<div class="user_info">
													<h5 class="mt-1 mb-1">Nargis Hawa</h5>
													<small class="text-muted">30 mins ago</small>
												</div>
												<div class="float-right text-right ml-auto mt-auto mb-auto"><small>02-02-2019</small></div>
											</div>
										</li>
										<li>
											<div class="d-flex bd-highlight w-100">
												<div class="img_cont">
													<img src="<?php echo base_url(); ?>assets/images/users/3.jpg" class="rounded-circle user_img" alt="img">
													<span class="online_icon"></span>
												</div>
												<div class="user_info">
													<h5 class="mt-1 mb-1">Khadija Mehr</h5>
													<small class="text-muted">50 mins ago</small>
												</div>
												<div class="float-right text-right ml-auto mt-auto mb-auto"><small>03-02-2019</small></div>
											</div>
										</li>
										<li>
											<div class="d-flex bd-highlight w-100">
												<div class="img_cont">
													<img src="<?php echo base_url(); ?>assets/images/users/14.jpg" class="rounded-circle user_img" alt="img">
													<span class="online_icon"></span>
												</div>
												<div class="user_info">
													<h5 class="mt-1 mb-1">Petey Cruiser</h5>
													<small class="text-muted">1hr ago</small>
												</div>
												<div class="float-right text-right ml-auto mt-auto mb-auto"><small>03-02-2019</small></div>
											</div>
										</li>
										<li>
											<div class="d-flex bd-highlight w-100">
												<div class="img_cont">
													<img src="<?php echo base_url(); ?>assets/images/users/11.jpg" class="rounded-circle user_img" alt="img">
												</div>
												<div class="user_info">
													<h5 class="mt-1 mb-1">Khadija Mehr</h5>
													<small class="text-muted">2hr ago</small>
												</div>
												<div class="float-right text-right ml-auto mt-auto mb-auto"><small>03-02-2019</small></div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="tab2">
							<div class="list d-flex align-items-center border-bottom p-4">
								<div class="">
									<span class="avatar bg-primary brround avatar-md">CH</span>
								</div>
								<div class="wrapper w-100 ml-3">
									<p class="mb-0 d-flex">
										<b>New Websites is Created</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted mr-1"></i>
											<small class="text-muted ml-auto">30 mins ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</div>
							</div>
							<div class="list d-flex align-items-center border-bottom p-4">
								<div class="">
									<span class="avatar bg-danger brround avatar-md">N</span>
								</div>
								<div class="wrapper w-100 ml-3">
									<p class="mb-0 d-flex">
										<b>Prepare For the Next Project</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted mr-1"></i>
											<small class="text-muted ml-auto">2 hours ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</div>
							</div>
							<div class="list d-flex align-items-center border-bottom p-4">
								<div class="">
									<span class="avatar bg-info brround avatar-md">S</span>
								</div>
								<div class="wrapper w-100 ml-3">
									<p class="mb-0 d-flex">
										<b>Decide the live Discussion Time</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted mr-1"></i>
											<small class="text-muted ml-auto">3 hours ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</div>
							</div>
							<div class="list d-flex align-items-center border-bottom p-4">
								<div class="">
									<span class="avatar bg-warning brround avatar-md">K</span>
								</div>
								<div class="wrapper w-100 ml-3">
									<p class="mb-0 d-flex">
										<b>Team Review meeting</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted mr-1"></i>
											<small class="text-muted ml-auto">4 hours ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</div>
							</div>
							<div class="list d-flex align-items-center border-bottom p-4">
								<div class="">
									<span class="avatar bg-success brround avatar-md">R</span>
								</div>
								<div class="wrapper w-100 ml-3">
									<p class="mb-0 d-flex">
										<b>Prepare for Presentation</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted mr-1"></i>
											<small class="text-muted ml-auto">1 days ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</div>
							</div>
							<div class="list d-flex align-items-center  border-bottom p-4">
								<div class="">
									<span class="avatar bg-pink brround avatar-md">MS</span>
								</div>
								<div class="wrapper w-100 ml-3">
									<p class="mb-0 d-flex">
										<b>Prepare for Presentation</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted mr-1"></i>
											<small class="text-muted ml-auto">1 days ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</div>
							</div>
							<div class="list d-flex align-items-center border-bottom p-4">
								<div class="">
									<span class="avatar bg-purple brround avatar-md">L</span>
								</div>
								<div class="wrapper w-100 ml-3">
									<p class="mb-0 d-flex">
										<b>Prepare for Presentation</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted mr-1"></i>
											<small class="text-muted ml-auto">45 mintues ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</div>
							</div>
							<div class="list d-flex align-items-center border-bottom p-4">
								<div class="">
									<span class="avatar bg-primary brround avatar-md">CH</span>
								</div>
								<div class="wrapper w-100 ml-3">
									<p class="mb-0 d-flex">
										<b>New Websites is Created</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted mr-1"></i>
											<small class="text-muted ml-auto">30 mins ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</div>
							</div>
							<div class="list d-flex align-items-center p-4">
								<div class="">
									<span class="avatar bg-blue brround avatar-md">U</span>
								</div>
								<div class="wrapper w-100 ml-3">
									<p class="mb-0 d-flex">
										<b>Prepare for Presentation</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted mr-1"></i>
											<small class="text-muted ml-auto">2 days ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="tab3">
							<div class="">
								<div class="d-flex p-3">
									<label class="custom-control custom-checkbox mb-0">
										<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
										<span class="custom-control-label">Do Even More..</span>
									</label>
									<span class="ml-auto">
										<a href="#"><i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i></a>
										<a href="#"><i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i></a>
									</span>
								</div>
								<div class="d-flex p-3 border-top">
									<label class="custom-control custom-checkbox mb-0">
										<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2" checked="">
										<span class="custom-control-label">Find an idea.</span>
									</label>
									<span class="ml-auto">
										<a href="#"><i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i></a>
										<a href="#"><i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i></a>
									</span>
								</div>
								<div class="d-flex p-3 border-top">
									<label class="custom-control custom-checkbox mb-0">
										<input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3" checked="">
										<span class="custom-control-label">Hangout with friends</span>
									</label>
									<span class="ml-auto">
										<a href="#"><i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i></a>
										<a href="#"><i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i></a>
									</span>
								</div>
								<div class="d-flex p-3 border-top">
									<label class="custom-control custom-checkbox mb-0">
										<input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4">
										<span class="custom-control-label">Do Something else</span>
									</label>
									<span class="ml-auto">
										<a href="#"><i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i></a>
										<a href="#"><i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i></a>
									</span>
								</div>
								<div class="d-flex p-3 border-top">
									<label class="custom-control custom-checkbox mb-0">
										<input type="checkbox" class="custom-control-input" name="example-checkbox5" value="option5">
										<span class="custom-control-label">Eat healthy, Eat Fresh..</span>
									</label>
									<span class="ml-auto">
										<a href="#"><i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i></a>
										<a href="#"><i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i></a>
									</span>
								</div>
								<div class="d-flex p-3 border-top">
									<label class="custom-control custom-checkbox mb-0">
										<input type="checkbox" class="custom-control-input" name="example-checkbox6" value="option6" checked="">
										<span class="custom-control-label">Finsh something more..</span>
									</label>
									<span class="ml-auto">
										<a href="#"><i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i></a>
										<a href="#"><i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i></a>
									</span>
								</div>
								<div class="d-flex p-3 border-top">
									<label class="custom-control custom-checkbox mb-0">
										<input type="checkbox" class="custom-control-input" name="example-checkbox7" value="option7" checked="">
										<span class="custom-control-label">Do something more</span>
									</label>
									<span class="ml-auto">
										<a href="#"><i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i></a>
										<a href="#"><i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i></a>
									</span>
								</div>
								<div class="d-flex p-3 border-top">
									<label class="custom-control custom-checkbox mb-0">
										<input type="checkbox" class="custom-control-input" name="example-checkbox8" value="option8">
										<span class="custom-control-label">Updated more files</span>
									</label>
									<span class="ml-auto">
										<a href="#"><i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i></a>
										<a href="#"><i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i></a>
									</span>
								</div>
								<div class="d-flex p-3 border-top">
									<label class="custom-control custom-checkbox mb-0">
										<input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
										<span class="custom-control-label">System updated</span>
									</label>
									<span class="ml-auto">
										<a href="#"><i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i></a>
										<a href="#"><i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i></a>
									</span>
								</div>
								<div class="d-flex p-3 border-top border-bottom">
									<label class="custom-control custom-checkbox mb-0">
										<input type="checkbox" class="custom-control-input" name="example-checkbox10" value="option10">
										<span class="custom-control-label">Settings Changings...</span>
									</label>
									<span class="ml-auto">
										<a href="#"><i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i></a>
										<a href="#"><i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i></a>
									</span>
								</div>
								<div class="text-center pt-5">
									<a href="#" class="btn btn-primary">Add more</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Right-sidebar-closed -->

			<!-- Footer opened -->
			<footer class="footer-main">
				<div class="container">
					<div class="  mt-2 mb-2 text-center">
						Copyright © 2025 <a href="#" class="fs-14 text-primary">Vetslab</a>. Designed by <a href="https://sitasoftwares.com/" class="fs-14 text-primary">sita softwares</a> All rights reserved.
					</div>
				</div>
			</footer>
			<!-- Footer closed -->
		</div>

		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-double-up"></i></a>

		<!-- Jquery-scripts -->
		<script src="<?php echo base_url(); ?>assets/js/vendors/jquery-3.2.1.min.js"></script>

		<!-- Moment js-->
        <script src="<?php echo base_url(); ?>assets/plugins/moment/moment.min.js"></script>

		<!-- Bootstrap-scripts js -->
		<script src="<?php echo base_url(); ?>assets/js/vendors/bootstrap.bundle.min.js"></script>

		<!-- Sparkline JS-->
		<script src="<?php echo base_url(); ?>assets/js/vendors/jquery.sparkline.min.js"></script>

		<!-- Bootstrap-daterangepicker js -->
		<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

		<!-- Bootstrap-datepicker js -->
		<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>

		<!-- Chart-circle js -->
		<script src="<?php echo base_url(); ?>assets/js/vendors/circle-progress.min.js"></script>

		<!-- Rating-star js -->
		<script src="<?php echo base_url(); ?>assets/plugins/rating/jquery.rating-stars.js"></script>

		<!-- Clipboard js -->
		<script src="<?php echo base_url(); ?>assets/plugins/clipboard/clipboard.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/clipboard/clipboard.js"></script>

		<!-- Prism js -->
		<script src="<?php echo base_url(); ?>assets/plugins/prism/prism.js"></script>

		<!-- Custom scroll bar js-->
		<script src="<?php echo base_url(); ?>assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- Nice-select js-->
		<script src="<?php echo base_url(); ?>assets/plugins/jquery-nice-select/js/jquery.nice-select.js"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/jquery-nice-select/js/nice-select.js"></script>

        <!-- P-scroll js -->
		<script src="<?php echo base_url(); ?>assets/plugins/p-scroll/p-scroll.js"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/p-scroll/p-scroll-horizontal.js"></script>

		<!-- JQVMap -->
		<script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jquery.vmap.js"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jquery.vmap.sampledata.js"></script>

		<!-- Apexchart js-->
		<script src="<?php echo base_url(); ?>assets/js/apexcharts.js"></script>

		<!-- Chart js-->
		<script src="<?php echo base_url(); ?>assets/plugins/chart/chart.min.js"></script>

		<!-- Index js -->
		<script src="<?php echo base_url(); ?>assets/js/index-dark.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/index-map.js"></script>

		<!-- Horizontal js-->
		<script src="<?php echo base_url(); ?>assets/plugins/horizontal-menu/horizontal.js"></script>

		<!-- Rightsidebar js -->
		<script src="<?php echo base_url(); ?>assets/plugins/sidebar/sidebar.js"></script>



		<!-- Custom js -->
		<script src="<?php echo base_url(); ?>assets/js/custom-dark.js"></script>

	</body>
</html>