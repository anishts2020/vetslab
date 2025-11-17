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
		<div class="modal fade" id="modal-registration" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true" data-backdrop="static" data-keyboard="false">
<div class="modal-dialog modal-xl custom-modal" role="document">
													<div class="modal-content shadow border-0">
														<div class="modal-body p-0">
															<div class="mb-0">
																<div class="card-body px-lg-5 py-lg-5">
																	<div class="text-center mb-4 h4">
																		New Registration
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																			<span aria-hidden="true">&times;</span>
																		</button>
																	</div>
<form id="registrationForm">
				
<div class="form-group mb-3">
		<div class="input-group input-group-alternative">
<input type="hidden" name="reg_id" id="reg_id" value="">

</div>
<div class="row">
        <div class="col-md-4">
  			<label for="con_fee">Consultation Fee</label>
  			<input type="number" id="con_fee" name="con_fee" class="form-control" placeholder="Enter Consultation Fee">
		</div>


    	<div class="col-md-4">
  			<label for="patient_id">Patient ID</label>
<input type="text" id="patient_id" name="patient_id" class="form-control"
         value="<?php echo 'VL-' . date('YmdHis'); ?>" readonly>		
		</div>


		<div class="col-md-4">
  			<label for="patient_name">Patient Name</label>
  			<input type="text" id="patient_name" name="patient_name" class="form-control" placeholder="Enter Patient Name">
		</div>


</div>
<div class="row">
	    <div class="col-md-4">
    		<label for="age">Age</label>
            <input type="number" class="form-control" id="age" name="age" placeholder="Enter Age" min="0">
        </div>
        <div class="col-md-4">
			<label>Years/Months/Days</label>
            <select class="form-control" id="y_m_d" name="y_m_d">
                <option value="years">Years</option>
                <option value="months">Months</option>
                <option value="days">Days</option>
            </select>
        </div>

<div class="col-md-4">
  		<label for="sex">Sex</label>
  		<select id="sex" name="sex" class="form-control">
    		<option value="">Select</option>
    		<option value="Male">Male</option>
   	 		<option value="Female">Female</option>
  		</select>
</div>
</div>
<!-- SAMPLE TYPE from DB -->
 <div class="row">
			<div class="col-md-4">
						<label for="sample_type">Sample Type</label>
						<select id="select_sample_type" name="select_sample_type" class="form-control">
						<option value="">Select Sample Type</option>
						<?php foreach ($sample_types as $sample): ?>
						<option value="<?php echo $sample['sample_type_id']; ?>"><?php echo $sample['sample_type_name']; ?></option>
						</option>
						<?php endforeach; ?>
						</select>
			</div>

<!-- SPECIES from DB -->
			<div class="col-md-4">
	  					<label for="species">Species</label>
  						<select id="select_species" name="select_species" class="form-control">
    					<option value="">Select Species</option>
    					<?php foreach ($species as $sp): ?>
<option value="<?php echo $sp['species_id']; ?>"><?php echo $sp['species_name']; ?></option>
<?php endforeach; ?>
  						</select>
			</div>

<!-- BREEDS from DB -->
 			<div class="col-md-4">
  						<label for="breed">Breeds</label>
  						<select id="select_breed" name="select_breed" class="form-control">
						<option value="">Select Breed</option>
						<?php foreach ($breeds as $br): ?>
<option value="<?php echo $br['breeds_id']; ?>"><?php echo $br['breeds_name']; ?></option>						<?php endforeach; ?>
					</select>
			</div>
</div>

<div class="row">
			<div class="col-md-4">
					<label for="owners_name">Owner’s Name</label>
					<input type="text" id="owners_name" name="owners_name" class="form-control" placeholder="Enter Owner’s Name">
			</div>
			<div class="col-md-4">
  					<label for="ref_by">Referred By</label>
  					<input type="text" id="ref_by" name="ref_by" class="form-control" placeholder="Enter Referred By">
			</div>
			<div class="col-md-4">
  					<label for="mob_no">Mobile Number</label>
  					<input type="text" id="mob_no" name="mob_no" class="form-control" placeholder="Enter 10 digit mobile number" maxlength="10" 
        required
        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);">
      <small id="mobError" style="color:red; display:none;">Please enter a valid 10-digit mobile number.</small>
			</div>
</div>

<div class="row">
			<div class="col-md-4">
				<label for="place">Place</label>
				<input type="text" id="place" name="place" class="form-control" placeholder="Enter Place" >
				
			</div>
			<div class="col-md-4">
  				<label for="email">Email</label>
  				<input type="email" id="email" name="email" class="form-control" placeholder="Enter Email ID">
			</div>

<link href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/multipleselect/multiple-select.css">

<div class="col-md-4">
	<!-- Include Select2 CSS -->
<link href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="../assets/plugins/multipleselect/multiple-select.css">

			<label for="lab_test">Lab Tests</label>
<select id="lab_test" name="lab_test[]" class="form-control select2 w-100" multiple="multiple" >
    <option value="">-- Select Lab Test(s) --</option>
    <?php foreach ($lab_test as $test): ?>
        <option value="<?= $test['lab_test_id']; ?>">
            <?= $test['lab_test_name']; ?>
        </option>
    <?php endforeach; ?>
</select>

</div>
</div>
</div>																		
</div>
	</div>
																	
																	
			<div class="text-center">
					<button type="button" id="btn_save" class="btn btn-primary my-4">Save</button>
					</div>
					</form>	


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
							<span class="mt-3 mt-md-0 pg-header">
										<a href="#" class="btn btn-info ml-0 ml-md-4 mt-1" data-toggle="modal" data-target="#modal-registration"><i class="typcn typcn-plus"></i>New Registration</a>
									</span>


						</div>

						<!-- Page-header closed -->
						 <div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">New Registration List View</div>
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
														<th class="wd-15p border-bottom-0">Consultation Fee</th>
														<th class="wd-15p border-bottom-0">Patient ID</th>
														<th class="wd-15p border-bottom-0">Patient Name</th>
														<th class="wd-15p border-bottom-0">Age</th>
														<th class="wd-15p border-bottom-0">Years/Months/Days</th>
														<th class="wd-15p border-bottom-0">Sex</th>
														<th class="wd-15p border-bottom-0">Sample Type</th>
														<th class="wd-15p border-bottom-0">Species</th>
														<th class="wd-15p border-bottom-0">Breed</th>
														<th class="wd-15p border-bottom-0">OwnerS nAME</th>
														<th class="wd-15p border-bottom-0">Referred By</th>
														<th class="wd-15p border-bottom-0">Mob.No</th>
														<th class="wd-15p border-bottom-0">Place</th>
														<th class="wd-15p border-bottom-0">Email</th>
														<th class="wd-20p border-bottom-0">Lab Test</th>
														<th class="wd-20p border-bottom-0">Action</th>

													</tr>
												</thead>
												<tbody>
													<?php foreach($all_patients as $key => $row){ ?>
    <tr>
        <td><?php echo $row['reg_id']; ?></td>
        <td><?php echo $row['con_fee']; ?></td>
        <td><?php echo $row['patient_id']; ?></td>
        <td><?php echo $row['patient_name']; ?></td>
        <td><?php echo $row['age']; ?></td>
        <td><?php echo $row['y_m_d']; ?></td>
        <td><?php echo $row['sex']; ?></td>
        <td><?php echo $row['select_sample_type']; ?></td>
        <td><?php echo $row['select_species']; ?></td>
        <td><?php echo $row['select_breed']; ?></td>
        <td><?php echo $row['owners_name']; ?></td>
        <td><?php echo $row['ref_by']; ?></td>
        <td><?php echo $row['mob_no']; ?></td>
        <td><?php echo $row['place']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['lab_test_names']; ?></td>

        <!-- Action Buttons -->
        <td>
            <a href="#" class="btn_edit" data-id="<?php echo $row['reg_id']; ?>">
                <i class="fa fa-edit" title="Edit Record"></i>
            </a>
            
        </td>
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


		<style>
.custom-modal {
  max-width: 1200px !important; /* You can increase if needed */
  width: 90% !important; /* Make it responsive */
}

.modal-content {
  max-height: 90vh;
  overflow-y: auto; /* So you can scroll inside the modal */
}
</style>

<style>
#modal-registration .modal-dialog {
  margin-top: 80px !important;
}
</style>
	</body>
</html>
<!-- SweetAlert2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

<script>
$(document).ready(function(){

  
// When Save button is clicked
  $('#btn_save').on('click', function(e) {
    e.preventDefault();

    // Get values
    let conFee = $('#con_fee').val().trim();
    let patientName = $('#patient_name').val().trim();
    let age = $('#age').val().trim();
    let ymd = $('#y_m_d').val();
    let sex = $('#sex').val();

    // Simple validation
    if (!conFee || !patientName || !age || !ymd || !sex) {
      alert('⚠️ Please fill all required fields:\nConsultation Fee, Patient Name, Age and Sex.');
      return; // stop AJAX here
    }

    // ✅ If all fields valid → proceed with AJAX
  $.ajax({
        type: "POST",
        url: "<?= site_url('Registration/saveRegistration'); ?>",
        data: $('#registrationForm').serialize(),
        dataType: "json",
        success: function (response) {
            if (response.status === 'success') {
                Swal.fire({

                text: "Registration saved succesfully!",
                icon: "success"
                });
                $('#registrationForm')[0].reset();
                $('#btn_save').text('Save');
                $('#reg_id').prop('readonly', false);
                $('#modal-registration').modal('hide');
                loadPatientsTable();
				setTimeout(() => location.reload(), 2000);
            } else {
                 Swal.fire({
                text: "Error!",
                icon: "Error"
                });
            }
        },
        error: function (xhr, status, error) {
               alert("AJAX Error: " + error);
            console.error(xhr.responseText);
        }
    });
});

    $(document).on('click', '.btn_edit', function(){
        let reg_id = $(this).data('id');

        $.ajax({
            url: "<?= site_url('Registration/getRegistrationById/'); ?>" + reg_id,
            type: "GET",
            dataType: "json",
            success: function(response){
                if(response.status === 'success'){
                    let data = response.data;

                    // Fill form fields
                    $('#reg_id').val(data.reg_id);
                    $('#con_fee').val(data.con_fee);
                    $('#patient_name').val(data.patient_name);
                    $('#age').val(data.age);
                    $('#y_m_d').val(data.y_m_d);
                    $('#sex').val(data.sex);
                    $('#select_sample_type').val(data.select_sample_type);
                    $('#select_species').val(data.select_species);
                    $('#select_breed').val(data.select_breed);
                    $('#owners_name').val(data.owners_name);
                    $('#ref_by').val(data.ref_by);
                    $('#mob_no').val(data.mob_no);
                    $('#place').val(data.place);
                    $('#email').val(data.email);

                    // Set multi-select (lab test)
                    if(data.lab_test && Array.isArray(data.lab_test)){
                        $('#lab_test').val(data.lab_test).trigger('change');
                    }

                    // Change button text to "Update"
                    $('#btn_save').text('Update');

                    // Scroll to form
                    $('#modal-registration').modal('show');
                } else {
                    alert('Record not found.');
                }
            },
            error: function(xhr, status, error){
                console.error(xhr.responseText);
                alert('Error fetching data: ' + error);
            }
        });
    });

    // ===========================
    // OPTIONAL: Reload patients table dynamically
    // ===========================
    function loadPatientsTable(){
        // If you have a table to show all patients dynamically
        $('#patientsTable').load(location.href + " #patientsTable>*", "");
    }

});
</script>



		<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/select2.js"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/multipleselect/multiple-select.js"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/multipleselect/multi-select.js"></script>

		
<script>
	$(document).on('shown.bs.modal', function (e) {
  $(e.target).find('.select2').each(function () {
    $(this).select2({
      dropdownParent: $(e.target)
    });
  });
});
</script>

<script>
  document.getElementById("registrationForm").addEventListener("submit", function(event) {
    const mobInput = document.getElementById("mob_no");
    const errorMsg = document.getElementById("mobError");

    if (mobInput.value.length !== 10) {
      event.preventDefault(); // stop form submission
      errorMsg.style.display = "block";
      mobInput.focus();
    } else {
      errorMsg.style.display = "none";
    }
  });
</script>