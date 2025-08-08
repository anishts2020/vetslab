<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<?php $this->load->view('includes/head'); ?>
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
								<a class="header-brand" href="index.html">
									<img src="<?php echo base_url(); ?>assets/images/brand/logo.png" class="header-brand-img desktop-logo " alt="Dashlot logo">
									<img src="<?php echo base_url(); ?>assets/images/brand/logo1.png" class="header-brand-img desktop-logo-1 " alt="Dashlot logo">
									<img src="<?php echo base_url(); ?>assets/images/brand/favicon.png" class="mobile-logo" alt="Dashlot logo">
									<img src="<?php echo base_url(); ?>assets/images/brand/favicon1.png" class="mobile-logo-1" alt="Dashlot logo">
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
												<small class="text-muted mr-3"><?php echo $this->session->userdata('role_name'); ?></small>
											</div>
											<img class="avatar avatar-md brround" src="<?php echo base_url(); ?>assets/images/users/2.jpg" alt="image">
										 </a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated bounceInDown w-250">
											<div class="user-profile bg-header-image border-bottom p-3">
												<div class="user-image text-center">
													<img class="user-images" src="<?php echo base_url(); ?>assets/images/users/2.jpg" alt="image">
												</div>
												<div class="user-details text-center">
													<h4 class="mb-0"><?php echo $this->session->userdata('name'); ?></h4>
													<p class="mb-1 fs-13 text-white-50"><?php echo $this->session->userdata('role_name'); ?></p>
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
				<div class="horizontal-main hor-menu clearfix">
					<div class="horizontal-mainwrapper container clearfix">
						<nav class="horizontalMenu clearfix">
							<ul class="horizontalMenu-list">
								<li aria-haspopup="true"><a href="#" class="sub-icon  active"><svg xmlns="http://www.w3.org/2000/svg"  class="icon_img" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 365.001 365.001" xml:space="preserve"><g><g>
										<g>
											<path d="M360.74,155.711l-170-149c-4.717-4.133-11.764-4.133-16.48,0l-170,149c-5.191,4.55-5.711,12.448-1.161,17.641    c4.55,5.19,12.449,5.711,17.64,1.16l13.163-11.536V348.89c0,6.903,5.596,12.5,12.5,12.5h94.733h82.73h94.732   c6.904,0,12.5-5.597,12.5-12.5V162.977l13.163,11.537c2.373,2.078,5.311,3.1,8.234,3.1c3.476,0,6.934-1.441,9.405-4.261    C366.452,168.159,365.932,160.262,360.74,155.711z M153.635,336.39V233.418h57.729v102.973L153.635,336.39L153.635,336.39z     M306.099,141.161V336.39h-69.732V220.918c0-6.903-5.598-12.5-12.5-12.5h-82.73c-6.903,0-12.5,5.597-12.5,12.5v115.473H58.903    V141.161c0-0.032-0.004-0.062-0.004-0.093L182.5,32.733l123.603,108.334C306.104,141.1,306.099,141.129,306.099,141.161z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
											<path d="M154.5,120.738c0,6.904,5.596,12.5,12.5,12.5h31c6.903,0,12.5-5.596,12.5-12.5s-5.597-12.5-12.5-12.5h-31    C160.097,108.238,154.5,113.834,154.5,120.738z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
										</g>
									</g></g> </svg> Dashboard <i class="fa fa-angle-down horizontal-icon"></i></a>
									<ul class="sub-menu">
										<li aria-haspopup="true"><a href="index.html" class="slide-item">Dashboard</a></li>
										<li aria-haspopup="true"><a href="crm-projects.html" class="slide-item">Projects</a></li>
										<li aria-haspopup="true"><a href="crm-project-description.html" class="slide-item">Projects description</a></li>
										<li aria-haspopup="true"><a href="crm-clients.html" class="slide-item">Clients</a></li>
										<li aria-haspopup="true"><a href="crm-reports.html" class="slide-item">Reports</a></li>
									</ul>
								</li>
								<li aria-haspopup="true"><a href="#" class="sub-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon_img" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"  viewBox="0 0 475.074 475.074" xml:space="preserve" class=""><g><g>
									<path d="M395.655,249.236c-11.037-14.272-27.692-24.075-49.964-29.403c28.362-14.467,40.826-39.021,37.404-73.666   c-1.144-12.563-4.616-23.451-10.424-32.68c-5.812-9.231-13.655-16.652-23.559-22.266c-9.896-5.621-20.659-9.9-32.264-12.85   c-11.608-2.95-24.935-5.092-39.972-6.423V0h-43.964v69.949c-7.613,0-19.223,0.19-34.829,0.571V0h-43.97v71.948   c-6.283,0.191-15.513,0.288-27.694,0.288l-60.526-0.288v46.824h31.689c14.466,0,22.936,6.473,25.41,19.414v81.942   c1.906,0,3.427,0.098,4.57,0.288h-4.57v114.769c-1.521,9.705-7.04,14.562-16.558,14.562H74.747l-8.852,52.249h57.102   c3.617,0,8.848,0.048,15.703,0.134c6.851,0.096,11.988,0.144,15.415,0.144v72.803h43.977v-71.947   c7.992,0.195,19.602,0.288,34.829,0.288v71.659h43.965v-72.803c15.611-0.76,29.457-2.18,41.538-4.281   c12.087-2.101,23.653-5.379,34.69-9.855c11.036-4.47,20.266-10.041,27.688-16.703c7.426-6.656,13.559-15.13,18.421-25.41   c4.846-10.28,7.943-22.176,9.271-35.693C410.979,283.882,406.694,263.514,395.655,249.236z M198.938,121.904   c1.333,0,5.092-0.048,11.278-0.144c6.189-0.098,11.326-0.192,15.418-0.288c4.093-0.094,9.613,0.144,16.563,0.715   c6.947,0.571,12.799,1.334,17.556,2.284s9.996,2.521,15.701,4.71c5.715,2.187,10.28,4.853,13.702,7.993   c3.429,3.14,6.331,7.139,8.706,11.993c2.382,4.853,3.572,10.42,3.572,16.7c0,5.33-0.855,10.185-2.566,14.565   c-1.708,4.377-4.284,8.042-7.706,10.992c-3.423,2.951-6.951,5.523-10.568,7.71c-3.613,2.187-8.233,3.949-13.846,5.28   c-5.612,1.333-10.513,2.38-14.698,3.14c-4.188,0.762-9.421,1.287-15.703,1.571c-6.283,0.284-11.043,0.478-14.277,0.572   c-3.237,0.094-7.661,0.094-13.278,0c-5.618-0.094-8.897-0.144-9.851-0.144v-87.65H198.938z M318.998,316.331   c-1.813,4.38-4.141,8.189-6.994,11.427c-2.858,3.23-6.619,6.088-11.28,8.559c-4.66,2.478-9.185,4.473-13.559,5.996   c-4.38,1.529-9.664,2.854-15.844,4c-6.194,1.143-11.615,1.947-16.283,2.426c-4.661,0.477-10.226,0.856-16.7,1.144   c-6.469,0.28-11.516,0.425-15.131,0.425c-3.617,0-8.186-0.052-13.706-0.145c-5.523-0.089-9.041-0.137-10.565-0.137v-96.505   c1.521,0,6.042-0.093,13.562-0.287c7.521-0.192,13.656-0.281,18.415-0.281c4.758,0,11.327,0.281,19.705,0.856   c8.37,0.567,15.413,1.42,21.128,2.562c5.708,1.144,11.937,2.902,18.699,5.284c6.755,2.378,12.23,5.28,16.419,8.706   c4.188,3.432,7.707,7.803,10.561,13.134c2.861,5.328,4.288,11.42,4.288,18.274C321.712,307.104,320.809,311.95,318.998,316.331z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
									</g></g> </svg>Crypto Currency <i class="fa fa-angle-down horizontal-icon"></i></a>
									<ul class="sub-menu">
										<li aria-haspopup="true"><a href="index2.html" >Dashboard</a></li>
										<li aria-haspopup="true"><a href="crypto-market.html" class="slide-item">Marketcap</a></li>
										<li aria-haspopup="true"><a href="crypto-currency-exchange.html"class="slide-item">Currency Exchange</a></li>
										<li aria-haspopup="true"><a href="crypto-buysell.html" class="slide-item">Buy/Sell</a></li>
										<li aria-haspopup="true"><a href="crypto-wallet.html" class="slide-item">Wallet</a></li>
										<li aria-haspopup="true"><a href="crypto-transcation.html" class="slide-item">Transcation</a></li>
										<li aria-haspopup="true"><a href="crypto-news.html" class="slide-item">News</a></li>
									</ul>
								</li>
								<li aria-haspopup="true"><a href="#" class="sub-icon"><svg xmlns="http://www.w3.org/2000/svg" id="Capa_1"  class="icon_img" enable-background="new 0 0 512 512"  viewBox="0 0 512 512"><g><path d="m472 216.061v-100c0-22.056-17.944-40-40-40h-352c-22.056 0-40 17.944-40 40v200c0 22.056 17.944 40 40 40h352c22.056 0 40-17.944 40-40 0-11.046 8.954-20 20-20s20 8.954 20 20c0 44.112-35.888 80-80 80h-156v39.878h70c11.046 0 20 8.954 20 20s-8.954 20-20 20h-180c-11.046 0-20-8.954-20-20s8.954-20 20-20h70v-39.878h-156c-44.112 0-80-35.888-80-80v-200c0-44.112 35.888-80 80-80h352c44.112 0 80 35.888 80 80v100c0 11.046-8.954 20-20 20s-20-8.954-20-20zm-82-71h-119c-11.046 0-20 8.954-20 20s8.954 20 20 20h119c11.046 0 20-8.954 20-20s-8.954-20-20-20zm-163.261-39.419c-8.515-7.035-21.121-5.835-28.157 2.68l-43.205 52.293-17.048-17.507c-7.708-7.915-20.369-8.083-28.282-.376-7.914 7.706-8.083 20.368-.376 28.282l21.454 22.033c.177.182.357.36.541.534 6.483 6.17 15.136 9.604 24.038 9.604.765 0 1.532-.025 2.3-.077 9.644-.643 18.65-5.31 24.737-12.811l46.678-56.497c7.035-8.516 5.835-21.122-2.68-28.158zm163.261 162.419h-119c-11.046 0-20 8.954-20 20s8.954 20 20 20h119c11.046 0 20-8.954 20-20s-8.954-20-20-20zm-163.261-39.543c-8.515-7.035-21.121-5.835-28.157 2.68l-43.216 52.307-17.076-17.438c-7.729-7.893-20.391-8.026-28.283-.296-7.892 7.728-8.024 20.391-.296 28.283l21.454 21.909c.164.167.331.332.5.493 6.483 6.171 15.136 9.604 24.039 9.604.765 0 1.533-.026 2.3-.077 9.644-.643 18.65-5.31 24.737-12.811l46.678-56.497c7.035-8.515 5.835-21.121-2.68-28.157z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/></g> </svg>
									Analytics <i class="fa fa-angle-down horizontal-icon"></i></a>
									<ul class="sub-menu">
										<li aria-haspopup="true"><a href="analytics.html" class="slide-item">Dashboard</a></li>
										<li aria-haspopup="true"><a href="analytics-customers.html" class="slide-item">Customer</a></li>
										<li aria-haspopup="true"><a href="analytics-reports.html" class="slide-item">Reports</a></li>
									</ul>
								</li>
								<li aria-haspopup="true"><a href="#" class="sub-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="icon_img" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512.001 512.001"  xml:space="preserve"><g><g>
										<g>
											<path d="M507.519,116.384C503.721,111.712,498.021,109,492,109h-7.208L381.65,5.858c-7.811-7.811-20.475-7.811-28.285,0    l-43.359,43.359l-43.36-43.359c-7.811-7.811-20.475-7.811-28.285,0L135.219,109h-5.483l-1.484-13.632l-0.053-0.438    C121.099,40.811,74.583,0,20,0C8.954,0,0,8.954,0,20s8.954,20,20,20c34.506,0,63.923,25.749,68.512,59.928l23.775,218.42    C91.5,327.785,77,348.724,77,373c0,0.169,0.021,0.332,0.025,0.5C77.021,373.668,77,373.831,77,374c0,33.084,26.916,60,60,60h8.157    c-2.036,5.967-3.157,12.353-3.157,19c0,32.533,26.468,59,59,59s59-26.467,59-59c0-6.647-1.121-13.033-3.157-19h86.314    c-2.036,5.967-3.157,12.353-3.157,19c0,32.533,26.468,59,59,59c32.532,0,59-26.467,59-59c0-32.533-26.468-59-59-59H137    c-11.028,0-20-8.972-20-20c0-0.169-0.021-0.332-0.025-0.5c0.004-0.168,0.025-0.331,0.025-0.5c0-11.028,8.972-20,20-20h255.331    c35.503,0,68.085-21.966,83.006-55.962c4.439-10.114-0.161-21.913-10.275-26.352c-10.113-4.44-21.913,0.161-26.352,10.275    C430.299,300.125,411.661,313,392.331,313h-240.39L134.09,149h333.309l-9.786,46.917c-2.255,10.813,4.683,21.407,15.495,23.662    c1.378,0.288,2.751,0.425,4.104,0.425c9.271,0,17.59-6.485,19.559-15.92l14.809-71    C512.808,127.19,511.316,121.056,507.519,116.384z M399,434c10.477,0,19,8.523,19,19s-8.523,19-19,19s-19-8.523-19-19    S388.523,434,399,434z M201,434c10.477,0,19,8.524,19,19c0,10.477-8.523,19-19,19s-19-8.523-19-19S190.523,434,201,434z     M250.223,109h-58.435l60.716-60.716l29.217,29.218L250.223,109z M306.792,109l60.716-60.716L428.223,109H306.792z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
										</g>
									</g></g> </svg> Ecommerce <i class="fa fa-angle-down horizontal-icon"></i></a>
									<ul class="sub-menu">
										<li aria-haspopup="true"><a href="ecommerce.html" class="slide-item">Dashboard</a></li>
										<li aria-haspopup="true"><a href="ecommerce-products.html" class="slide-item">Products</a></li>
										<li aria-haspopup="true"><a href="ecommerce-products1.html" class="slide-item">Products-style2</a></li>
										<li aria-haspopup="true"><a href="ecommerce-list.html" class="slide-item">Products list</a></li>
										<li aria-haspopup="true"><a href="ecommerce-details.html" class="slide-item">Product details</a></li>
										<li aria-haspopup="true"><a href="ecommerce-cart.html" class="slide-item">Cart</a></li>
										<li aria-haspopup="true"><a href="ecommerce-checkout.html" class="slide-item">Checkout</a></li>
										<li aria-haspopup="true"><a href="ecommerce-invoice.html" class="slide-item">Invoice</a></li>
										<li aria-haspopup="true"><a href="ecommerce-cards.html" class="slide-item">Ecommerce-cards</a></li>
										<li aria-haspopup="true"><a href="product-cards.html" class="slide-item">Product-cards</a></li>
										<li aria-haspopup="true"><a href="product-info.html" class="slide-item">Product-info</a></li>
									</ul>
								</li>
								<li aria-haspopup="true"><a href="#" class="sub-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon_img" viewBox="0 0 512 512"><g><path d="m199.945312 359.898438h67.980469v39.988281h-67.980469zm-74.980468-4.996094c-13.804688 0-24.992188 11.1875-24.992188 24.992187 0 13.800781 11.1875 24.992188 24.992188 24.992188 13.804687 0 24.992187-11.191407 24.992187-24.992188 0-13.804687-11.1875-24.992187-24.992187-24.992187zm276.921875-121.96875h-201.941407v39.988281h201.941407zm-276.921875-4.996094c-13.804688 0-24.992188 11.1875-24.992188 24.992188 0 13.804687 11.1875 24.992187 24.992188 24.992187 13.804687 0 24.992187-11.1875 24.992187-24.992187 0-13.804688-11.1875-24.992188-24.992187-24.992188zm276.921875-114.96875h-201.941407v39.988281h201.941407zm-276.921875-5c-13.804688 0-24.992188 11.191406-24.992188 24.992188 0 13.804687 11.1875 24.996093 24.992188 24.996093 13.804687 0 24.992187-11.191406 24.992187-24.996093 0-13.800782-11.1875-24.992188-24.992187-24.992188zm-84.976563 343.90625v-391.890625c0-11.027344 8.96875-19.996094 19.996094-19.996094h391.890625c11.023438 0 19.992188 8.96875 19.992188 19.996094v225.9375h39.988281v-225.9375c0-33.074219-26.90625-59.984375-59.980469-59.984375h-391.890625c-33.074219 0-59.984375 26.910156-59.984375 59.984375v391.890625c0 33.074219 26.910156 59.980469 59.984375 59.980469h230.933594v-39.988281h-230.933594c-11.027344 0-19.996094-8.96875-19.996094-19.992188zm443.734375 60.125-39.820312-39.820312c-13.472656 8.050781-29.210938 12.683593-46.011719 12.683593-49.613281 0-89.976563-40.363281-89.976563-89.972656 0-49.613281 40.363282-89.976563 89.976563-89.976563 49.609375 0 89.972656 40.363282 89.972656 89.976563 0 18.355469-5.53125 35.441406-15.003906 49.691406l39.140625 39.140625zm-85.832031-67.125c27.5625 0 49.984375-22.421875 49.984375-49.984375s-22.421875-49.988281-49.984375-49.988281-49.988281 22.425781-49.988281 49.988281 22.425781 49.984375 49.988281 49.984375zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/></g> </svg>
									UI Elements <i class="fa fa-angle-down horizontal-icon"></i> </a>
									<div class="horizontal-megamenu clearfix">
										<div class="container">
											<div class="mega-menubg megamenu1">
												<div class="row">
													<div class="col link-list">
														<ul>
															<li><a href="alert.html" class="slide-item"> Alerts</a></li>
															<li><a href="buttons.html" class="slide-item">Buttons</a></li>
															<li><a href="colors.html" class="slide-item">Colors</a></li>
															<li><a href="cards.html" class="slide-item">Cards</a></li>
															<li><a href="cards-draggable.html" class="slide-item">Dragabble cards</a></li>
															<li><a href="carousel.html" class="slide-item">Carousel</a></li>
															<li><a href="sweetalert.html" class="slide-item">Sweet alerts</a></li>
														</ul>
													</div>
													<div class="col link-list">
														<ul>
															<li><a href="avatars.html" class="slide-item">Avatars</a></li>
															<li><a href="dropdown.html" class="slide-item">Drop downs</a></li>
															<li><a href="pagination.html"  class="slide-item">Pagination</a></li>
															<li><a href="chat.html" class="slide-item">Default Chat</a></li>
															<li><a href="designblocks.html" class="slide-item">Design blocks</a></li>
															<li><a href="list.html" class="slide-item">List</a></li>
															<li><a href="tags.html" class="slide-item">Tags</a></li>
														</ul>
													</div>
													<div class="col link-list">
														<ul>
															<li><a href="navigation.html" class="slide-item">Navigation</a></li>
															<li><a href="typography.html" class="slide-item">Typography</a></li>
															<li><a href="breadcrumbs.html" class="slide-item">Breadcrumbs</a></li>
															<li><a href="badges.html" class="slide-item">Badges</a></li>
															<li><a href="notify.html" class="slide-item">Notifications</a></li>
															<li><a href="jumbotron.html" class="slide-item">Jumbotron</a></li>
															<li><a href="panels.html" class="slide-item">Panels</a></li>
														</ul>
													</div>
													<div class="col link-list">
														<ul>
															<li><a href="mediaobject.html" class="slide-item">Media Object</a></li>
															<li><a href="accordion.html" class="slide-item">Accordions</a></li>
															<li><a href="tabs.html" class="slide-item">Tabs</a></li>
															<li><a href="rangeslider.html" class="slide-item">Range slider</a></li>
															<li><a href="scroll.html" class="slide-item">Content Scroll bar</a></li>
															<li><a href="modals.html" class="slide-item">Modal</a></li>
															<li><a href="tooltipandpopover.html" class="slide-item">Tooltip and popover</a></li>
														</ul>
													</div>
													<div class="col link-list">
														<ul>
															<li><a href="headers.html" class="slide-item">Headers</a></li>
															<li><a href="footers.html" class="slide-item">Footers</a></li>
															<li><a href="loaders.html" class="slide-item">Loaders</a></li>
															<li><a href="contact-styles.html" class="slide-item">Contact-styles</a></li>
															<li><a href="caltoaction.html" class="slide-item">Cal-to-actions</a></li>
															<li><a href="ribbons.html" class="slide-item">Ribbons</a></li>
															<li><a href="user-cards.html" class="slide-item">User-cards</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li aria-haspopup="true"><a href="#" class="sub-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon_img" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 30.822 30.823" xml:space="preserve"><g><g>
									<path d="M29.963,8.441c0-0.038-0.012-0.073-0.016-0.11c-0.008-0.049-0.01-0.1-0.021-0.147c-0.01-0.035-0.028-0.065-0.041-0.099   c-0.02-0.048-0.035-0.097-0.062-0.141c-0.017-0.029-0.041-0.053-0.061-0.08c-0.032-0.043-0.062-0.087-0.1-0.125   c-0.025-0.025-0.058-0.043-0.086-0.065c-0.037-0.03-0.072-0.064-0.115-0.088c-0.002-0.002-0.006-0.002-0.01-0.004   c-0.004-0.001-0.006-0.004-0.009-0.006l-13.55-7.452c-0.299-0.165-0.664-0.165-0.963,0L1.379,7.576   C1.376,7.577,1.375,7.58,1.372,7.582C1.368,7.584,1.364,7.584,1.361,7.586C1.317,7.611,1.283,7.645,1.245,7.675   c-0.027,0.022-0.059,0.04-0.084,0.064c-0.039,0.038-0.068,0.083-0.1,0.126C1.041,7.892,1.017,7.915,1,7.944   C0.974,7.989,0.957,8.039,0.937,8.087C0.924,8.12,0.907,8.15,0.896,8.184C0.884,8.232,0.88,8.283,0.875,8.333   C0.872,8.37,0.859,8.404,0.859,8.441c0,0.002,0.001,0.003,0.001,0.005c0,0.001-0.001,0.003-0.001,0.005V22   c0,0.356,0.19,0.688,0.5,0.865l13.55,7.823c0.154,0.089,0.327,0.134,0.5,0.134s0.346-0.043,0.5-0.134l13.549-7.823   c0.311-0.179,0.5-0.509,0.5-0.865V8.451c0-0.002,0-0.003,0-0.005C29.961,8.444,29.963,8.443,29.963,8.441z M20.726,12.051   l-4.313-2.372V2.69l10.514,5.782L20.726,12.051z M14.413,2.69v6.989L10.1,12.052L3.9,8.473L14.413,2.69z M2.863,10.183l11.55,6.668   v11.24l-11.55-6.668V10.183z M16.412,28.091v-11.24l11.551-6.668v11.24L16.412,28.091z" data-original="#000000" class="active-path cube" data-old_color="#000000" fill="#FFFFFF"/>
								</g></g> </svg> Components  <i class="fa fa-angle-down horizontal-icon"></i></a>
									<div class="horizontal-megamenu clearfix">
										<div class="container">
											<div class="mega-menubg">
												<div class="row">
													<div class="col link-list">
														<ul>
															<li><span class="list-heading">Components</span></li>
															<li><a href="search.html" class="slide-item">Search</a></li>
															<li><a href="counters.html" class="slide-item">Counters</a></li>
															<li><a href="rating.html" class="slide-item">Rating</a></li>
															<li><a href="maps.html" class="slide-item">Map</a></li>
															<li><a href="calendar-styles.html" class="slide-item">Calendar</a></li>
															<li><a href="users-list.html" class="slide-item">UserList</a></li>
															<li><a href="timeline.html" class="slide-item">Timeline</a></li>
															<li><a href="videos.html" class="slide-item">Videos</a></li>
															<li><a href="progress.html" class="slide-item">Progress</a></li>
															<li><a href="thumbnails.html" class="slide-item">Thumbnails</a></li>
														</ul>
													</div>
													<div class="col link-list sub-nav">
														<ul>
															<li><a href="tables.html" class="slide-item">Tables</a></li>
															<li><a href="images-comparison.html" class="slide-item">Images-comparison</a></li>
															<li><a href="newsticker.html" class="slide-item">Newsticker</a></li>
															<li><a href="newsletter.html" class="slide-item">Newsletter</a></li>
															<li><a href="parallax.html" class="slide-item">Parallax</a></li>
															<li><a href="portfolio.html" class="slide-item">Portfolio</a></li>
															<li><a href="testimonials.html" class="slide-item">Testimonials</a></li>
															<li><a href="cookies.html" class="slide-item">Cookies</a></li>
															<li><a href="blog.html" class="slide-item">Blog</a></li>
														</ul>
													</div>
													<div class="col link-list">
														<ul>
															<li><span class="list-heading">Icons</span></li>
															<li><a href="icons.html" class="slide-item">Font Awesome</a></li>
															<li><a href="icons2.html" class="slide-item">MaterialDesign</a></li>
															<li><a href="icons3.html" class="slide-item">Simpleline</a></li>
															<li><a href="icons4.html" class="slide-item">Feather</a></li>
															<li><a href="icons5.html" class="slide-item">Ionic</a></li>
															<li><a href="icons6.html" class="slide-item">Flag</a></li>
															<li><a href="icons7.html" class="slide-item">Pe7</a></li>
															<li><a href="icons8.html" class="slide-item">Themify</a></li>
															<li><a href="icons9.html" class="slide-item">Typicons</a></li>
															<li><a href="icons10.html" class="slide-item">Weather</a></li>
														</ul>
													</div>
													<div class="col link-list">
														<ul>
															<li><span class="list-heading">Charts</span></li>
															<li><a href="chart-chartist.html" class="slide-item">Chart Js</a></li>
															<li><a href="chart-flot.html" class="slide-item">Flot Charts</a></li>
															<li><a href="chart-echart.html" class="slide-item">ECharts</a></li>
															<li><a href="chart-morris.html" class="slide-item">Morris Charts</a></li>
															<li><a href="chart-nvd3.html" class="slide-item">Nvd3 Charts</a></li>
															<li><a href="charts.html" class="slide-item">C3 Bar Charts</a></li>
															<li><a href="chart-line.html" class="slide-item">C3 Line Charts</a></li>
															<li><a href="chart-donut.html" class="slide-item">C3 Donut Charts</a></li>
															<li><a href="chart-pie.html" class="slide-item">C3 Pie charts</a></li>
															<li><a href="503.html" class="slide-item">503</a></li>
														</ul>
													</div>
													<div class="col link-list">
														<ul>
															<li><span class="list-heading">Custom pages</span></li>
															<li><a href="login.html" class="slide-item">Login</a></li>
															<li><a href="register.html" class="slide-item">Register</a></li>
															<li><a href="forgot-password.html" class="slide-item">Forgot Password</a></li>
															<li><a href="lockscreen.html" class="slide-item">Lock screen</a></li>
															<li><a href="construction.html" class="slide-item">Under Construction</a></li>
															<li><a href="400.html" class="slide-item">400</a></li>
															<li><a href="401.html" class="slide-item">401</a></li>
															<li><a href="403.html" class="slide-item">403</a></li>
															<li><a href="404.html" class="slide-item">404</a></li>
															<li><a href="500.html" class="slide-item">500</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li aria-haspopup="true"><a href="#" class="sub-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve" class="icon_img"><g><g>
										<g>
											<g>
												<path d="M352.459,220c0-11.046-8.954-20-20-20h-206c-11.046,0-20,8.954-20,20s8.954,20,20,20h206     C343.505,240,352.459,231.046,352.459,220z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
												<path d="M126.459,280c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20H251.57c11.046,0,20-8.954,20-20c0-11.046-8.954-20-20-20     H126.459z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
												<path d="M173.459,472H106.57c-22.056,0-40-17.944-40-40V80c0-22.056,17.944-40,40-40h245.889c22.056,0,40,17.944,40,40v123     c0,11.046,8.954,20,20,20c11.046,0,20-8.954,20-20V80c0-44.112-35.888-80-80-80H106.57c-44.112,0-80,35.888-80,80v352     c0,44.112,35.888,80,80,80h66.889c11.046,0,20-8.954,20-20C193.459,480.954,184.505,472,173.459,472z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
												<path d="M467.884,289.572c-23.394-23.394-61.458-23.395-84.837-0.016l-109.803,109.56c-2.332,2.327-4.052,5.193-5.01,8.345     l-23.913,78.725c-2.12,6.98-0.273,14.559,4.821,19.78c3.816,3.911,9,6.034,14.317,6.034c1.779,0,3.575-0.238,5.338-0.727     l80.725-22.361c3.322-0.92,6.35-2.683,8.79-5.119l109.573-109.367C491.279,351.032,491.279,312.968,467.884,289.572z      M333.776,451.768l-40.612,11.25l11.885-39.129l74.089-73.925l28.29,28.29L333.776,451.768z M439.615,346.13l-3.875,3.867     l-28.285-28.285l3.862-3.854c7.798-7.798,20.486-7.798,28.284,0C447.399,325.656,447.399,338.344,439.615,346.13z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
												<path d="M332.459,120h-206c-11.046,0-20,8.954-20,20s8.954,20,20,20h206c11.046,0,20-8.954,20-20S343.505,120,332.459,120z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
											</g>
										</g>
									</g></g> </svg>
									Pages<i class="fa fa-angle-down horizontal-icon"></i></a>
									<ul class="sub-menu">
										<li><a href="profile.html" class="slide-item">Profile</a></li>
										<li><a href="editprofile.html" class="slide-item">Edit Profile</a></li>
										<li aria-haspopup="true" class="sub-menu-sub "><a href="#">Email</a>
											<ul class="sub-menu">
												<li aria-haspopup="true"><a href="email.html" class="slide-item">Email</a></li>
												<li aria-haspopup="true"><a href="emailservices.html" class="slide-item">Emailservices</a></li>
												<li aria-haspopup="true"><a href="read.html" class="slide-item">Read</a></li>
										    </ul>
										</li>
										<li aria-haspopup="true" class="sub-menu-sub"><a href="#">Forms</a>
											<ul class="sub-menu">
												<li aria-haspopup="true"><a href="form-elements.html" class="slide-item">Form Elements</a></li>
												<li aria-haspopup="true"><a href="forms.html" class="slide-item">Forms</a></li>
												<li aria-haspopup="true"><a href="advancedforms.html" class="slide-item">Advancedforms</a></li>
												<li aria-haspopup="true"><a href="wysiwyag.html" class="slide-item">Form Editor</a></li>
												<li aria-haspopup="true"><a href="form-wizard.html" class="slide-item">Form Wizard</a></li>
											</ul>
										</li>
										<li><a href="empty.html" class="slide-item">Empty Page</a></li>
										<li><a href="gallery.html" class="slide-item">Gallery</a></li>
										<li><a href="about.html" class="slide-item">About us</a></li>
										<li><a href="services.html" class="slide-item">Services</a></li>
										<li><a href="faq.html" class="slide-item">FAQS</a></li>
										<li><a href="terms.html" class="slide-item">Terms</a></li>
										<li><a href="invoice.html" class="slide-item">Invoice</a></li>
										<li><a href="pricing.html" class="slide-item">Pricing Tables</a></li>
									</ul>
								</li>
								<li aria-haspopup="true"><a href="widgets.html" class=""><svg class="icon_img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511 511.99775" class="icon_img" ><g><path d="m501.425781 238.109375-82.222656-41.109375 82.222656-41.113281c14.707031-7.351563 14.722657-28.414063 0-35.777344l-236-118c-5.632812-2.8125-12.257812-2.8125-17.890625 0l-236 118c-14.707031 7.355469-14.722656 28.417969 0 35.777344l82.222656 41.113281-82.222656 41.109375c-14.707031 7.355469-14.722656 28.414063 0 35.777344l82.222656 41.113281-82.222656 41.109375c-14.707031 7.355469-14.722656 28.414063 0 35.777344l236 118c5.621094 2.808593 12.246094 2.820312 17.890625 0l236-118c14.707031-7.355469 14.722657-28.414063 0-35.777344l-82.222656-41.109375 82.222656-41.113281c14.707031-7.351563 14.722657-28.414063 0-35.777344zm-244.945312-195.75 191.277343 95.640625-191.277343 95.636719-191.277344-95.636719zm191.277343 331.640625-191.277343 95.636719-191.277344-95.636719 73.277344-36.640625 109.054687 54.527344c5.625 2.808593 12.246094 2.820312 17.890625 0l109.054688-54.527344zm-191.277343-22.363281-191.277344-95.636719 73.277344-36.640625 109.054687 54.527344c5.625 2.808593 12.246094 2.820312 17.890625 0l109.054688-54.527344 73.277343 36.640625zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/></g> </svg>Widgets</a></li>
							</ul>
						</nav>
						<!--Nav end -->
					</div>
				</div>
				<!-- Horizontal-menu end -->

				<!-- App-content opened -->
				<div class="app-content">
					<div class="container">

						<!-- Page-header opened -->
						<div class="page-header hor-pageheader">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">CRM, Admin Dashboard</h4>
								<small class="text-muted mt-0 fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
							</div>
							<div class="page-rightheader">
								<div class="ml-3 ml-auto d-flex">
									<div class="mt-3 mt-md-0">
										<div class="border-right pr-4 mt-1 d-xl-block">
											<p class="text-muted mb-2">Category</p>
											<h6 class="font-weight-semibold mb-0">All Categories</h6>
										</div>
									</div>
									<div class="mt-3 mt-md-0">
										<div class="border-right pl-0 pl-md-4 pr-4 mt-1 d-xl-block">
											<p class="text-muted mb-1">Customer Rating</p>
											<div class="wideget-user-rating">
												<a href="#">
													<i class="fa fa-star text-warning"></i>
												</a>
												<a href="#">
													<i class="fa fa-star text-warning"></i>
												</a>
												<a href="#">
													<i class="fa fa-star text-warning"></i>
												</a>
												<a href="#">
													<i class="fa fa-star text-warning"></i>
												</a>
												<a href="#">
													<i class="fa fa-star-o text-warning mr-1"></i>
												</a>
												<span class="">(4.5/5)</span>
											</div>
										</div>
									</div>
									<span class="mt-3 mt-md-0 pg-header">
										<a href="#" class="btn btn-info ml-0 ml-md-4 mt-1 "><i class="typcn typcn-shopping-cart mr-1"></i>Buy Now</a>
									</span>
								</div>
							</div>
						</div>
						<!-- Page-header closed -->

						<!-- Banner opened -->
						<div class="row">
							<div class="col-xl-12">
								<div class="banner banner-color mt-0">
									<div class="col-xl-2 col-lg-3 col-md-12">
										<img src="<?php echo base_url(); ?>assets/images/svg/new_message1.svg" alt="image" class="image">
									</div>
									<div class="page-content col-xl-7 col-lg-6 col-md-12">
										<h3 class="mb-1">Welcome back! Dashlot</h3>
										<p class="mb-0 fs-16">Want to be the first to know about Dashlot updates? Subscribe Now</p>
									</div>
									<div class="col-xl-3 col-lg-3 col-md-3 text-right d-flex d-block">
										<a href="#" class="btn btn-success mr-3" id="skip">Skip</a>
										<a href="#" class="btn btn-pink">Subscribe Now</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Banner opened -->

						<!-- row opened -->
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card overflow-hidden">
									<div class="card-body">
										<div class="d-flex">
											<div class="">
												<p class="mb-2 h6">Active Client</p>
												<h2 class="mb-1 ">253</h2>
												<p class="mb-0 text-muted"><span class="text-success">(+0.35%)<i class="fe fe-arrow-up text-success"></i></span>Increase</p>
											</div>
											<div class=" my-auto ml-auto">
												<div class="chart-wrapper text-center">
													<canvas id="areaChart1" class="areaChart2 chartjs-render-monitor chart-dropshadow-primary overflow-hidden mx-auto"></canvas>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card overflow-hidden">
									<div class="card-body">
										<div class="d-flex">
											<div class="">
												<p class="mb-2 h6">Total Revenue</p>
												<h2 class="mb-1 ">$365</h2>
												<p class="mb-0 text-muted"><span class="text-danger">(+0.54%)</span><i class="fe fe-arrow-down text-danger"></i>Decrease</p>
											</div>
											<div class=" my-auto ml-auto">
												<div class="chart-wrapper">
													<canvas id="areaChart2" class="areaChart2 chartjs-render-monitor chart-dropshadow-secondary overflow-hidden"></canvas>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card overflow-hidden">
									<div class="card-body">
										<div class="d-flex">
											<div class="">
												<p class="mb-2 h6">Sales</p>
												<h2 class="mb-1 ">15,89</h2>
												<p class="mb-0 text-muted"><span class="text-success">(+0.96%)<i class="fe fe-arrow-up text-success"></i></span>Increase</p>
											</div>
											<div class="my-auto ml-auto">
												<div class="chart-wrapper">
													<canvas id="areaChart3" class="areaChart3 chartjs-render-monitor chart-dropshadow-info overflow-hidden"></canvas>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card overflow-hidden">
									<div class="card-body">
										<div class="d-flex">
											<div class="">
												<p class="mb-2 h6">Running Projects</p>
												<h2 class="mb-1 ">25</h2>
												<p class="mb-0 text-muted"><span class="text-danger">(+0.42%)</span><i class="fe fe-arrow-down text-danger"></i>Decrease</p>
											</div>
											<div class="my-auto ml-auto">
												<div class="chart-wrapper">
													<canvas id="areaChart4" class="areaChart4 chartjs-render-monitor chart-dropshadow-success overflow-hidden"></canvas>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- row closed -->

						<!-- row opened -->
						<div class="row">
							<div class="col-xl-12 product">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Revenue</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
													<a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-lg-12 col-xl-8">
												<div class="chart-wrapper">
													<canvas id="line-chart" class=" chartjs-render-monitor chart-dropshadow2 overflow-hidden"></canvas>
												</div>
											</div>
											<div class="col-lg-12 col-xl-4 lg-mt-5">
												<div class="row">
													<div class="col-6">
														<div class="card box-shadow-0 overflow-hidden">
															<div class="card-body p-4">
																<div class="text-center">
																   <i class="fa fa-tasks fa-2x text-primary text-primary-shadow"></i>
																   <h3 class="mt-3 mb-0 ">07</h3>
																   <small class="text-muted">Progress Tasks</small>
																</div>
															</div>
														</div>
													</div>
													 <div class="col-6">
														<div class="card box-shadow-0 overflow-hidden">
															<div class="card-body p-4">
																<div class="text-center">
																   <i class="fa fa-ticket fa-2x text-secondary text-secondary-shadow"></i>
																	<h3 class="mt-3 mb-0 ">03</h3>
																   <small class="text-muted">Open Ticket</small>
																</div>
															</div>
														</div>
													</div>
													<div class="col-6">
														<div class="card box-shadow-0 mb-0 overflow-hidden">
															<div class="card-body p-4">
																<div class="text-center">
																   <i class="fa fa-bug fa-2x text-success text-success-shadow"></i>
																   <h3 class="mt-3 mb-0 ">02</h3>
																   <small class="text-muted">In Progress Bugs</small>
																</div>
															</div>
														</div>
													</div>
													<div class="col-6 ">
														<div class="card box-shadow-0 mb-0 overflow-hidden">
															<div class="card-body p-4">
																<div class="text-center">
																   <i class="fa fa-folder-open-o fa-2x text-info text-info-shadow"></i>
																   <h3 class="mt-3 mb-0 ">04</h3>
																   <small class="text-muted">Progress Projects</small>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- row closed -->

						<!-- row opened -->
						<div class="row">
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-header">
										<h3 class="card-title">Activity</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
													<a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="latest-timeline-1 activity-scroll mh-300">
											<ul class="timeline-1 mb-0">
												<li class="mt-0">
													<i class="fe fe-check bg-primary text-white product-icon primary-dropshadow"></i>
													<a target="_blank" href="#" class="font-weight-semibold mb-4 fs-15">Task finished</a>
													<a href="#" class="float-right fs-12 text-muted">01 Jun, 2019</a>
													<p class="mb-0 mt-2 text-muted"><span class="text-primary font-weight-semibold">Adam	Berry</span>  finished task on<a href="#" class="text-info font-weight-semibold"> Project Management</a></p>
													<div class="mt-2">
														<span class="badge badge-success-light">Bootstrap</span>
														<span class="badge badge-danger-light">HTML</span>
														<span class="badge badge-warning-light">Css</span>
													</div>
												</li>
												<li class="mt-0">
													<i class="fe fe-message-square bg-secondary text-white product-icon secondary-dropshadow"></i>
													<a target="_blank" href="#" class="font-weight-semibold mb-4 fs-15">New Comment</a>
													<a href="#" class="float-right fs-12 text-muted">05 Jun, 2019</a>
													<p class="mb-0 mt-2 text-muted"><span class="text-primary font-weight-semibold">Victoria</span> commented on Project <a href="#" class="text-info font-weight-semibold"> AngularJS Template</a></p>
												</li>
												<li class="mt-0">
													<i class="fe fe-alert-triangle bg-danger text-white product-icon danger-dropshadow"></i>
													<a target="_blank" href="#" class="font-weight-semibold mb-4 fs-15">Task Overdue</a>
													<a href="#" class="float-right fs-12 text-muted">01 Jun, 2019</a>
													<p class="mb-0 mt-2"> Task the <span class="text-info font-weight-semibold">Wordpress Project</span> is on hold its takes longer than usual.</p>
													<div class="mt-2">
														<span class="badge badge-success-light">Bootstrap</span>
														<span class="badge badge-danger-light">HTML</span>
														<span class="badge badge-warning-light">Css</span>
													</div>
												</li>
												<li class="mt-0">
													<i class="fe fe-check bg-success text-white product-icon success-dropshadow"></i>
													<a target="_blank" href="#" class="font-weight-semibold mb-4 fs-15">Task finished</a>
													<a href="#" class="float-right fs-12 text-muted">01 Jun, 2019</a>
													<p class="mb-0 mt-2"><span class="text-primary font-weight-semibold">Petey Cruiser</span> finished task <a href="#" class="text-info font-weight-semibold"> Integrated management</a></p>
													<div class="mt-2">
														<span class="badge badge-success-light">Bootstrap</span>
														<span class="badge badge-danger-light">HTML</span>
														<span class="badge badge-warning-light">Css</span>
													</div>
												</li>
												<li class="mt-0">
													<i class="fe fe-check bg-success text-white product-icon success-dropshadow"></i>
													<a target="_blank" href="#" class="font-weight-semibold mb-4 fs-15">Task finished</a>
													<a href="#" class="float-right fs-12 text-muted">01 Jun, 2019</a>
													<p class="mb-0 mt-2"><span class="text-primary font-weight-semibold">Manuel Labor</span> finished task <a href="#" class="text-info font-weight-semibold"> Program Management</a></p>
													<div class="mt-2">
														<span class="badge badge-success-light">Bootstrap</span>
														<span class="badge badge-danger-light">HTML</span>
														<span class="badge badge-warning-light">Css</span>
													</div>
												</li>
												<li class="mt-0 mb-0">
													<i class="fe fe-message-square bg-info text-white product-icon info-dropshadow"></i>
													<a target="_blank" href="#" class="font-weight-semibold mb-4 fs-15">Warren Peace</a>
													<a href="#" class="float-right fs-12 text-muted">01 Jun, 2019</a>
													<p class="mb-0 mt-2"><span class="text-primary font-weight-semibold">Adam	Berry</span> commented on task <a href="#" class="text-info font-weight-semibold"> AngularJS Template</a></p>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6">
								<div class="card">
									<div id="carousel-indicator" class="carousel slide dashboard-carousel" data-ride="carousel">
										<div class="carousel-inner">
											<div class="carousel-item active">
												<div class="card-body">
													<h4 class="card-title mb-4">Open Payements</h4>
													<small class=""> Since last month</small>
													<div class="d-flex  align-items-center">
														<h2 class=" mb-0">$3500.00<span class="font-weight-normal text-muted fs-13">/ per month</span></h2>
														<div class="text-success mt-0 mb-2  ml-auto">
															<i class="mdi mdi-chevron-down mdi-24px"></i> <span class=" ">23.8%</span>
														</div>
													</div>
												</div>
											</div>
											<div class="carousel-item carousel slide dashboard-carousel" data-ride="carousel">
												<div class="card-body">
													<h4 class="card-title mb-4">Open Tasks</h4>
													<small class=""> Since last month</small>
													<div class="d-flex  align-items-center">
														<h2 class=" mb-0">23<span class="font-weight-normal text-muted fs-13">/ per month</span></h2>
														<div class="text-danger mt-0 mb-2  ml-auto">
															<i class="mdi mdi-chevron-down mdi-24px"></i> <span class=" ">12.8%</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<a class="carousel-control-prev" href="#carousel-indicator" role="button" data-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="carousel-control-next" href="#carousel-indicator" role="button" data-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										</a>
									</div>
								</div>
								<div class="card overflow-hidden">
									<div class="card-header border-bottom-0">
										<div class="card-title d-block">Earnings</div>
										<div class="card-options">

										</div>
									</div>
									<div class="card-body pt-0 pb-0">
										<small class="">Weekly Earning Report</small>
										<div class="d-flex mb-4">
											<div class="d-flex  align-items-center">
												<h2 class="">$7450.40<span class="font-weight-normal text-muted fs-13">/ per month</span></h2>
											</div>
											<span class="text-success ml-auto"><i class="fe fe-arrow-up mr-2"></i>24.05%</span>
										</div>

									</div>
									<div class="chart-wrapper ">
										<canvas id="earning" class="earning chart-dropshadow-primary mb-3 mt-2 h-50"></canvas>
									</div>
									<div class="row mb-5">
										<div class="col-6 text-center border-right">
											<div class="text-muted fs-14">Daily Profit</div>
											<div class="h3 mt-1 mb-0">$540</div>
											<span class="text-muted mb-0 fs-14"><span class="text-success mr-1"><i class="fe fe-arrow-up ml-1"></i>34.5%</span>increase</span>
										</div>
										<div class="col-6 text-center">
											<div class="text-muted fs-14">Last Month Profit</div>
											<div class="h3 mt-1 mb-0">36</div>
											<span class="text-muted mb-0 fs-14"><span class="text-danger mr-1"><i class="fe fe-arrow-down ml-1"></i>34.5%</span>Decrease</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-12 col-md-12">
								<div class="card">
									<div id="carousel-indicator1" class="carousel slide dashboard-carousel" data-ride="carousel">
										<div class="carousel-inner">
											<div class="carousel-item active">
												<div class="card-body">
													<h4 class="card-title mb-4">Open Invoice</h4>
													<small class=""> Since last month</small>
													<div class="d-flex  align-items-center">
														<h2 class=" mb-0">45,981<span class="font-weight-normal text-muted fs-13">/ per month</span></h2>
														<div class="text-success mt-0 mb-2  ml-auto">
															<i class="mdi mdi-chevron-down mdi-24px"></i> <span class=" ">38.5%</span>
														</div>
													</div>
												</div>
											</div>
											<div class="carousel-item carousel slide dashboard-carousel" data-ride="carousel">
												<div class="card-body">
													<h4 class="card-title mb-4">Paid Invoices</h4>
													<small class=""> Since last month</small>
													<div class="d-flex  align-items-center">
														<h2 class=" mb-0">32,579<span class="font-weight-normal text-muted fs-13">/ per month</span></h2>
														<div class="text-danger mt-0 mb-2  ml-auto">
															<i class="mdi mdi-chevron-down mdi-24px"></i> <span class=" ">22.8%</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<a class="carousel-control-prev" href="#carousel-indicator1" role="button" data-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="carousel-control-next" href="#carousel-indicator1" role="button" data-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										</a>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Project Status</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="mb-4">
											<div class="clearfix mb-4">
												<div class="float-left">
													<strong class="fs-15 font-weight-semibold">Project1</strong>
												</div>
												<div class="float-right">
													<small class="badge badge-success-light">Completed</small>
												</div>
											</div>
											<div class="progress progress-xs mt-2">
												<div class="progress-bar   bg-primary w-95"></div>
											</div>
										</div>
										<div class="mb-4">
											<div class="clearfix mb-4">
												<div class="float-left">
													<strong class="fs-15 font-weight-semibold">Project2</strong>
												</div>
												<div class="float-right">
													<small class="badge badge-warning-light">On-going</small>
												</div>
											</div>
											<div class="progress progress-xs mt-2">
												<div class="progress-bar  bg-warning w-65"></div>
											</div>
										</div>
										<div class="mb-4">
											<div class="clearfix mb-4">
												<div class="float-left">
													<strong class="fs-15 font-weight-semibold">Project3</strong>
												</div>
												<div class="float-right">
													<small class="badge badge-danger-light">Pending</small>
												</div>
											</div>
											<div class="progress progress-xs mt-2">
												<div class="progress-bar   bg-danger w-45"></div>
											</div>
										</div>
										<div class="mb-4">
											<div class="clearfix mb-4">
												<div class="float-left">
													<strong class="fs-15 font-weight-semibold">Project4</strong>
												</div>
												<div class="float-right">
													<small class="badge badge-success-light">Completed</small>
												</div>
											</div>
											<div class="progress progress-xs mt-2">
												<div class="progress-bar   bg-success w-95"></div>
											</div>
										</div>
										<div class="mb-2">
											<div class="clearfix mb-3">
												<div class="float-left">
													<strong class="fs-15 font-weight-semibold">Project5</strong>
												</div>
												<div class="float-right">
													<small class="badge badge-warning-light">Ongoing</small>
												</div>
											</div>
											<div class="progress progress-xs mt-2">
												<div class="progress-bar   bg-info w-65"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- row closed -->

						<!-- row opened -->
						<div class="row">
							<div class="col-lg-12 col-xl-8 col-md-12 col-sm-12">
								<div class="card overflow-hidden">
									<div class="card-header">
										<div class="card-title">Lead Stats</div>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body pt-0 overflow-hidden">
										<div class="chart-wrapper">
											<canvas id="leads" class="h-300"></canvas>
										</div>
										<div class="mt-4">
											<div class="row">
												<div class="col-xl-4 col-sm-12">
													<small class="">Total Leads</small>
													<div class="clearfix mt-2">
														<div class="float-left">
															<div class="align-items-center">
																<h3 class=" mb-0">2154<span class="font-weight-normal text-muted fs-13"> / per month</span></h3>
															</div>
														</div>
														<div class="float-right">
															<small class="badge badge-info-light">75%</small>
														</div>
													</div>
													<div class="progress progress-xs mt-2">
														<div class="progress-bar  bg-info w-75"></div>
													</div>
												</div>
												<div class="col-xl-4 col-sm-12 mt-3 mt-md-0">
													<small class="">Open Leads</small>
													<div class="clearfix mt-2">
														<div class="float-left">
															<div class="align-items-center">
																<h3 class=" mb-0">950<span class="font-weight-normal text-muted fs-13"> / active</span></h3>
															</div>
														</div>
														<div class="float-right">
															<small class="badge badge-primary-light">65%</small>
														</div>
													</div>
													<div class="progress progress-xs mt-2">
														<div class="progress-bar  bg-primary w-65"></div>
													</div>
												</div>
												<div class="col-xl-4 col-sm-12 mt-3 mt-md-0">
													<small class="">Closed Leads</small>
													<div class="clearfix mt-2">
														<div class="float-left">
															<div class="align-items-center">
																<h3 class=" mb-0">480<span class="font-weight-normal text-muted fs-13"> / active</span></h3>
															</div>
														</div>
														<div class="float-right">
															<small class="badge badge-secondary-light">40%</small>
														</div>
													</div>
													<div class="progress progress-xs mt-2">
														<div class="progress-bar  bg-secondary w-40"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-xl-4 col-md-12 col-sm-12">
								<div class="card ">
									<div class="card-header">
										<div class="card-title">Upcoming Events</div>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
														<a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body coming-events p-0">
										<div class="list-group list-group-flush ">
											<div class="list-group-item d-flex pt-3 pb-3 align-items-center">
												<div class="mr-3 mr-xs-0">
													<div class="calendar-icon icons">
														<div class="icon">
															<span class="month">Thu</span>
															<span class="date">25</span>
														</div>
													</div>
												</div>
												<div class="">
													<div class="h5 fs-15 mb-1">Strategy Planning</div>
													<small class="text-muted">25th sept,Delhi
													</small>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-primary">Email</a>
												</div>
											</div>
											<div class="list-group-item d-flex pt-3 pb-3 align-items-center">
												<div class="mr-3 mr-xs-0">
													<div class="calendar-icon icons">
														<div class="icon">
															<span class="month bg-info">Wed</span>
															<span class="date">31</span>
														</div>
													</div>
												</div>
												<div class="">
													<div class="h5 fs-15 mb-1">Hiring Employees</div>
													<small class="text-muted">31st jan,Mumbai
													</small>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-info">Skype</a>
												</div>
											</div>
											<div class="list-group-item d-flex pt-3 pb-3 align-items-center">
												<div class="mr-3 mr-xs-0">
													<div class="calendar-icon icons">
														<div class="icon">
															<span class="month bg-success">Mon</span>
															<span class="date">05</span>
														</div>
													</div>
												</div>
												<div class="">
													<div class="h5 fs-15 mb-1">Traning</div>
													<small class="text-muted">5th feb,Pune
													</small>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-success">Mobile</a>
												</div>
											</div>
											<div class="list-group-item d-flex pt-3 pb-3 align-items-center">
												<div class="mr-3 mr-xs-0">
													<div class="calendar-icon icons">
														<div class="icon">
															<span class="month bg-warning">Sat</span>
															<span class="date">12</span>
														</div>
													</div>
												</div>
												<div class="">
													<div class="h5 fs-15 mb-1">Finance policy </div>
													<small class="text-muted">12th mar,Banglore
													</small>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-warning">Phone</a>
												</div>
											</div>
											<div class="list-group-item pt-3 pb-3 d-flex align-items-center">
												<div class="mr-3 mr-xs-0">
													<div class="calendar-icon icons">
														<div class="icon">
															<span class="month bg-danger">Tue</span>
															<span class="date">17</span>
														</div>
													</div>
												</div>
												<div class="">
													<div class="h5 fs-15 mb-1">Marketing Policy</div>
													<small class="text-muted">17th Mar,Spain
													</small>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-primary">Skype</a>
												</div>
											</div>
											<div class="list-group-item pt-3 pb-3 d-flex align-items-center">
												<div class="mr-3 mr-xs-0">
													<div class="calendar-icon icons">
														<div class="icon">
															<span class="month bg-dark">Fri</span>
															<span class="date">19</span>
														</div>
													</div>
												</div>
												<div class="">
													<div class="h5 fs-15 mb-1">Accounting Policy</div>
													<small class="text-muted">19th may,Australia
													</small>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-pink">Email</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- row opened -->

						<!-- row open -->
						<div class="row">
							<div class="col-xl-4 col-lg-6 col-md-6">
								<div class="card recent-leads">
									<div class="card-header">
										<h4 class="card-title">Recent Leads</h4>
									</div>
									<div class="card-body">
										<div class="media mt-0 pt-0 mb-5">
											<img class="mr-3 avatar avatar-lg brround default-shadow" src="<?php echo base_url(); ?>assets/images/users/2.jpg" alt="image">
											<div class="media-body">
												<h5 class="mt-0 mb-0">Petey Cruiser</h5>
												<span class="fs-14 text-muted">PeteyCruiser@gmail.com</span>
											</div>
											<span class="badge badge-warning-light fs-12">Cold lead</span>
										</div>
										<div class="media mb-5">
											<img class="mr-3 avatar avatar-lg brround default-shadow" src="<?php echo base_url(); ?>assets/images/users/11.jpg" alt="image">
											<div class="media-body">
												<h5 class="mt-0 mb-0">Paul Molive</h5>
												<span class="fs-14 text-muted">PaulMolive65@gmail.com</span>
											</div>
											<span class="badge badge-success-light fs-12">Won lead</span>
										</div>
										<div class="media mb-5">
											<img class="mr-3 avatar avatar-lg brround default-shadow" src="<?php echo base_url(); ?>assets/images/users/5.jpg" alt="image">
											<div class="media-body">
												<h5 class="mt-0 mb-0">Barney Cull</h5>
												<span class="fs-14 text-muted">BarneyCull@gmail.com</span>
											</div>
											<span class="badge badge-danger-light fs-12">Lost lead</span>
										</div>
										<div class="media mb-5">
											<img class="mr-3 avatar avatar-lg brround default-shadow" src="<?php echo base_url(); ?>assets/images/users/12.jpg" alt="image">
											<div class="media-body">
												<h5 class="mt-0 mb-0">Manuel Labor</h5>
												<span class="fs-14 text-muted">ManuelLabor@gmail.com</span>
											</div>
											<span class="badge badge-warning-light fs-12">Cold lead</span>
										</div>
										<div class="media">
											<img class="mr-3 avatar avatar-lg brround default-shadow" src="<?php echo base_url(); ?>assets/images/users/6.jpg" alt="image">
											<div class="media-body">
												<h5 class="mt-0 mb-0">Risa Pearson</h5>
												<span class="fs-14 text-muted">richardjohn@mail.com</span>
											</div>
											<span class="badge badge-success-light fs-12">Won lead</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 col-md-6 col-sm-12">
								<div class="card overflow-hidden">
									<div class="">
										<div class="text-center">
											<img src="<?php echo base_url(); ?>assets/images/media/project-1.jpg" alt="img" class="h-200 w-100">
										</div>
										<div class="mt-3">
											<div class="row pt-2 pb-2 pl-5 pr-5 mt-0 ">
												<div class="col">
													<span class="mb-0 mt-1 fs-15">Project name:</span>
												</div>
												<div class="col col-auto text-muted fs-15">Project Management</div>
											</div>

											<div class="row pt-2 pb-2 pl-5 pr-5">
												<div class="col">
													<span class="mb-0 mt-1 fs-15">Duration:</span>
												</div>
												<div class="col col-auto text-muted fs-15">5months</div>
											</div>
											<div class="row pt-2 pb-2 pl-5 pr-5">
												<div class="col">
													<span class="mb-0 mt-1 fs-15">Budget:</span>
												</div>
												<div class="col col-auto text-muted fs-15">$35,7364</div>
											</div>
											<div class="mb-2 mt-3 pl-5 pb-5 pr-5">
												<div class="clearfix mb-3">
													<div class="float-left">
														<strong class="fs-15 font-weight-semibold">Project5</strong>
													</div>
													<div class="float-right">
														<small class="badge badge-success-light">ongoing</small>
													</div>
												</div>
												<div class="progress progress-xs mt-2">
													<div class="progress-bar   bg-primary w-65"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-xl-4 col-sm-12">
								<div class="card">
									<div class="card-header custom-header">
										<div>
											<h3 class="card-title">Top Ongoing Projects</h3>
										</div>
									</div>
									<div class="card-body p-0 m-scroll mh-350">
										<div class="list-group projects-list">
											<a href="#" class="list-group-item list-group-item-action flex-column align-items-start border-top-0">
												<div class="d-flex w-100 justify-content-between">
													<h5 class="mb-1 font-weight-semibold">PSD Projects</h5>
													<small class="text-danger"><i class="fa fa-caret-down mr-1"></i>5 days ago</small>
												</div>
												<p class="mb-0 text-muted mb-1">Started:17-02-2019</p>
												<small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit...</small>
											</a>
											<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
												<div class="d-flex w-100 justify-content-between">
													<h5 class="mb-1 font-weight-semibold">Wordpress Projects</h5>
													<small class="text-success"><i class="fa fa-caret-up mr-1"></i>2 days ago</small>
												</div>
												<p class="mb-0 text-muted mb-1">Started:15-02-2019</p>
												<small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit..</small>
											</a>
											<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
												<div class="d-flex w-100 justify-content-between">
													<h5 class="mb-1 font-weight-semibold">HTML &amp; CSS3 Projects</h5>
													<small class="text-danger"><i class="fa fa-caret-down mr-1"></i>1 days ago</small>
												</div>
												<p class="mb-0 text-muted mb-1">Started:26-02-2019</p>
												<small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit..</small>
											</a>
											<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
												<div class="d-flex w-100 justify-content-between">
													<h5 class="mb-1 font-weight-semibold">HTML &amp; CSS3 Projects</h5>
													<small class="text-danger"><i class="fa fa-caret-down mr-1"></i>1 days ago</small>
												</div>
												<p class="mb-0 text-muted mb-1">Started:26-02-2019</p>
												<small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit..</small>
											</a>
											<a href="#" class="list-group-item list-group-item-action flex-column align-items-start br-br-7 br-bl-7">
												<div class="d-flex w-100 justify-content-between">
													<h5 class="mb-1 font-weight-semibold">Java Projects</h5>
													<small class="text-success"><i class="fa fa-caret-up mr-1"></i>10 days ago</small>
												</div>
												<p class="mb-1">Started:06-02-2019</p>
												<small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit..</small>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- row closed -->
					</div>
				</div>
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
						Copyright © 2019 <a href="#" class="fs-14 text-primary">Dashlot</a>. Designed by <a href="https://spruko.com/" class="fs-14 text-primary">Spruko Technologies Private Limited</a> All rights reserved.
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