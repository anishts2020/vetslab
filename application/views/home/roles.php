<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<?php $this->load->view('includes/head'); ?>
		<link href="<?php echo base_url(); ?>assets/datatable/jquery.dataTables.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/datatable/buttons.dataTables.min.css" rel="stylesheet">
		<style>
			/* Custom modal size */
			.custom-modal {
				max-width: 900px; /* adjust width */
				width: 90%;
				height: 75%;
			}

			.custom-modal .modal-content {
				height: 100%;
				overflow-y: auto;
			}

			.dark-mode .modal .close span {
				color: #fff;
			}

			.custom-modal-width {
				max-width: 70%;
				width: 70%;
			}

		</style>
	</head>
	<body class="app dark-mode">

		<!-- Loader -->
		<div id="loading">
			<img src="<?php echo base_url(); ?>assets/images/other/loader-dark.svg" class="loader-img" alt="Loader">
		</div>

											<div class="modal fade" id="modal-role" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true" data-backdrop="static" data-keyboard="false">
												<div class="modal-dialog" role="document">
													<div class="modal-content shadow border-0">
														<div class="modal-body p-0">
															<div class="mb-0">
																<div class="card-body px-lg-5 py-lg-5">
																	<div class="text-center mb-4 h4">
																		Add New Role
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																			<span aria-hidden="true">&times;</span>
																		</button>
																	</div>
																	
																		<div class="form-group mb-3">
																			<div class="input-group input-group-alternative">
																				<input type="hidden" id="edit_id" value="0">
																				<input id="role_name" name="role_name" class="form-control" placeholder="Enter Role" type="text">
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="input-group input-group-alternative">
																				<textarea id="description" name="description" class="form-control" placeholder="Description"></textarea>
																			</div>
																		</div>
																	
																		<div class="text-center">
																			<button type="button" id="btn_save" class="btn btn-primary my-4">Save</button>
																		</div>
																	
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">

				<!-- Top-header opened -->
				<?php $this->load->view('includes/top_header'); ?>
				<!-- Top-header closed -->

				<!-- Horizontal-menu -->
				<?php $this->load->view('includes/horizontal_menu'); ?>
				<!-- Horizontal-menu end -->

				<!-- App-content opened -->
				<div class="app-content">
					<div class="container">

						<!-- Page-header opened -->
						<div class="page-header hor-pageheader">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Vetslab, Admin Dashboard</h4>
								<small class="text-muted mt-0 fs-14">Welcome to Vetslab admin dashboard</small>
							</div>
							<div class="page-rightheader">
								<div class="ml-3 ml-auto d-flex">
									<!--<div class="mt-3 mt-md-0">
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
									</div>-->
									<span class="mt-3 mt-md-0 pg-header">
										<a href="#" class="btn btn-info ml-0 ml-md-4 mt-1" data-toggle="modal" data-target="#modal-role"><i class="typcn typcn-plus"></i> Add New Role</a>
									</span>
								</div>
							</div>
						</div>
						<!-- Page-header closed -->

						<!-- YOU CAN WRITE CODE HERE - START-->
						
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Role List View</div>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="table-responsive ">
											<table class="table" id="table_roles" style="width: 100%;">
												<thead style="background-color: #003366; color:#fff;">
													<tr>
														<th class="wd-15p border-bottom-0">SI No</th>
														<th class="wd-15p border-bottom-0">Role name</th>
														<th class="wd-20p border-bottom-0">Description</th>
														<th class="wd-20p border-bottom-0">Action</th>
													</tr>
												</thead>
												<tbody>
													<?php 
													foreach($all_roles as $rkey => $rvals){ ?>
														<tr>
															<td><?php echo $rkey+1; ?></td>
															<td><?php echo $rvals['role_name']; ?></td>
															<td><?php echo $rvals['description']; ?></td>
															<td><a href="" class="btn_edit" data-id="<?php echo $rvals['id']; ?>"><i class="fa fa-edit" type="button" title="Edit Role"></i></a></td>
														</tr>
													<?php } ?>
												</tbody>
											</table>
										</div>
									</div>
									<!-- table-wrapper -->
								</div>
								<!-- section-wrapper -->
							</div>
						</div>
						
						
						<!-- YOU CAN WRITE CODE HERE - END -->
					</div>
				</div>
				<!-- App-content closed -->
			</div>

			<!-- Right-sidebar-->
				<?php $this->load->view('includes/right_sidebar'); ?>
			<!-- Right-sidebar-closed -->

			<!-- Footer opened -->
			<footer class="footer-main">
				<div class="container">
					<div class="  mt-2 mb-2 text-center">
						Copyright © 2025 <a href="#" class="fs-14 text-primary">Vetslab</a>. Designed by <a href="https://sitasoftwares.com/" class="fs-14 text-primary" target="_blank">sita softwares</a> All rights reserved.
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

		<script src="<?php echo base_url(); ?>assets/datatable/jquery-3.7.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/datatable/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/datatable/bootstrap.bundle.min.js"></script>

	</body>
</html>
<script>
$(document).ready(function() {
	table_roles_datatable();
	function table_roles_datatable(){
		if ($.fn.DataTable.isDataTable('#table_roles')) {
            $('#table_roles').DataTable().destroy();
        }
        var table = $('#table_roles').DataTable({
           
        });
	}
});
</script>
<script type="text/javascript">
	$(document).on('click', '#btn_save', function(e) {
		e.preventDefault();
		var edit_id = $('#edit_id').val();
		var role_name = $('#role_name').val();
		var description = $('#description').val();
		$.ajax({
			type: "POST",
			url: '<?= site_url('Roles/saveRole'); ?>',
			data: {
				edit_id:edit_id,
				role_name: role_name,
				description: description
			},
			dataType: 'json',
			success: function(response) {
				if(response == 1){
					alert("Role Saved");
					$('#role_name').val('');
					$('#description').val('');
					location.reload();
				}
				else if(response == 2){
					alert("This Role alreay exist");
				}
				else if(response == 3){
					alert("This Role Updated");
					$('#role_name').val('');
					$('#description').val('');
					location.reload();
				}
				else{
					alert("Please try again later");
				}
			}
		});
	});
</script>
<script type="text/javascript">
	$(document).on('click', '.btn_edit', function(e) {
		e.preventDefault();
		var id = $(this).attr('data-id');
		$.ajax({
			url: '<?= site_url('Roles/getRoleDatas'); ?>',
			method: 'POST',
			data: {
				id: id
			},
			dataType: 'json',
			success: function(response) {
				$('#edit_id').val(id);
				$('#role_name').val(response[0].role_name);
				$('#description').val(response[0].description);
				$('#btn_save').text("Update");
				$('#modal-role').modal('show');
			},
			error: function(xhr, status, error) {
				console.error('Error fetching role data:', error);
			}
		});
	});
</script>