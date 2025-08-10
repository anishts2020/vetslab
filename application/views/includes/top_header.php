<div class="header-main header sticky">
					<div class="app-header header top-header navbar-collapse ">
						<div class="container">
							<a id="horizontal-navtoggle" class="animated-arrow hor-toggle"><span></span></a><!-- sidebar-toggle-->
							<div class="d-flex">
								<a class="header-brand" href="<?php echo site_url('Dashboard'); ?>">
									<img src="<?php echo base_url(); ?>assets/images/brand/logo.png" class="header-brand-img desktop-logo " alt="Dashlot logo">
									<img src="<?php echo base_url(); ?>assets/images/brand/logo3.jpg" class="header-brand-img desktop-logo-1 " alt="Dashlot logo">
									<img src="<?php echo base_url(); ?>assets/images/brand/favicon.png" class="mobile-logo" alt="Dashlot logo">
									<img src="<?php echo base_url(); ?>assets/images/brand/favicon1.png" class="mobile-logo-1" alt="Dashlot logo">
								</a>
								
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