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
<div class="modal fade" id="modal-sample_type" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true" data-backdrop="static" data-keyboard="false">
												<div class="modal-dialog" role="document">
													<div class="modal-content shadow border-0">
														<div class="modal-body p-0">
															<div class="mb-0">
																<div class="card-body px-lg-5 py-lg-5">
																	<div class="text-center mb-4 h4">
																		Add New Sampletype
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																			<span aria-hidden="true">&times;</span>
																		</button>
																	</div>
																	
																		<div class="form-group mb-3">
																			<div class="input-group input-group-alternative">
																				<input type="hidden" id="edit_id" value="0">
																				<input id="sample_type_name" name="sample_type_name" class="form-control" placeholder="Enter Sampletype" type="text">
																			</div>
																		</div>
																		<div class="form-group">
																			<!--<div class="input-group input-group-alternative">
																				<textarea id="description" name="description" class="form-control" placeholder="Description"></textarea>
																			</div>-->
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
							<!--<div class="page-rightheader">
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
							</div>-->
							
							
						</div>
						
						<!-- Page-header closed -->
						 <div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Sample Type List View</div>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
										</div>
									</div>
									
									<div class="card-body">
										
										<div class="table-responsive ">
										<div class="row mb-3">
    								<div class="col-md-3">
										<input type="date" id="filter_date" class="form-control">

										</div>
										
									</div>


										<table class="table" id="sampleTable" style="width: 100%;">
												<thead style="background-color: #003366; color:#fff;">
													<tr>
														<th class="wd-15p border-bottom-0">Sl No</th>
														<th class="wd-15p border-bottom-0">Sample Type name</th>
														<th class="wd-15p border-bottom-0">Updated Time</th>
													</tr>
												</thead>
												<tbody>
													<?php 
													foreach($all_sample_type as $rkey => $rvals){ ?>
														<tr>
															<td><?php echo $rkey+1; ?></td>
															<td><?php echo $rvals['sample_type_name']; ?></td>
															<td><?php echo $rvals['updated_date']; ?></td>
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

						<!-- YOU CAN WRITE CODE HERE - START-->
						<div class="row">
							<div class="col-4">
								
							</div>
							<div class="col-4">
								
							</div>
							<div class="col-4">
								
							</div>
						
						</div>
						<div class="row">
							<div class="col-4">
							
							</div>
							<div class="col-4">
								
							</div>
							<div class="col-4">
								
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


		<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
		<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
		<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
		

		<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
		<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>





	</body>
</html>
</html>
<script>
$(document).ready(function() {

    var table = $('#sampleTable').DataTable({
        searching: true,
        ordering: true,
        paging: true,
        info: true,
        dom: 'Bfrtip',
        buttons: [
            { extend: 'excelHtml5', title: 'Sample Type List' },
            { extend: 'pdfHtml5', title: 'Sample Type List' }
        ]
    });

    $('#filter_date').on('change', function () {
        let selectedDate = this.value; // YYYY-MM-DD
        table.column(2).search(selectedDate).draw(); // filter hidden column
    });

});
</script>
