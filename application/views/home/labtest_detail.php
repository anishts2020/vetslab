<!doctype html>
<html lang="en" dir="ltr">

<head>
    <?php $this->load->view('includes/head'); ?>
    <link href="<?php echo base_url(); ?>assets/datatable/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/datatable/buttons.dataTables.min.css" rel="stylesheet">
    <style>
        /* Custom modal size */
        .custom-modal {
            max-width: 900px;
            /* adjust width */
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

    <div class="modal fade" id="modal-role" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true"
        data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content shadow border-0">
                <div class="modal-body p-0">
                    <div class="mb-0">
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center mb-4 h4">
                                Add New lab test
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="form-group mb-3">
                                <div class="input-group input-group-alternative">
                                    <input type="hidden" id="edit_id" value="0">
                                    <input id="role_name" name="role_name" class="form-control" placeholder="Enter Role"
                                        type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <textarea id="description" name="description" class="form-control"
                                        placeholder="Description"></textarea>
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

                            </div>
                        </div>
                    </div>
                    <!-- Page-header closed -->

                    <!-- YOU CAN WRITE CODE HERE - START-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card form-card">
                                <div class="card-body">
                                    <h4 class="text-center mb-4">Lab Test Detail</h4>
                                    <input type="hidden" id="edit_id" value="0">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Lab Test <span class="text-danger">*</span></label>
                                            <select id="lab_test_id" class="form-control select2">
                                                <option value="">Select Lab Test</option>
                                                <?php foreach ($all_lab_tests as $t): ?>
                                                    <option value="<?= $t['lab_test_id']; ?>"><?= $t['lab_test_name']; ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                            <small class="error" id="lab_test_id_error"></small>
                                        </div>

                                        <div class="col-md-6">
                                            <label>Label Name <span class="text-danger">*</span></label>
                                            <input id="label_name" class="form-control" type="text"
                                                placeholder="Enter Label Name">
                                            <small class="error" id="label_name_error"></small>
                                        </div>

                                        <div class="col-md-6 mt-3">
                                            <label>Data Type <span class="text-danger">*</span></label>
                                            <select id="data_type" class="form-control select2">
                                                <option value="">Select Type</option>
                                                <option value="textbox">Textbox</option>
                                                <option value="select">Select</option>
                                                <option value="radiobutton">Radio Button</option>
                                            </select>
                                            <small class="error" id="data_type_error"></small>
                                        </div>

                                        <div class="col-md-6 mt-3">
                                            <label>Default Value <span class="text-danger">*</span></label>
                                            <select id="data_value" class="form-control select2" multiple>
                                                <option value="Positive">Positive</option>
                                                <option value="Negative">Negative</option>
                                            </select>
                                            <small class="error" id="data_value_error"></small>
                                        </div>
                                    </div>

                                    <div class="text-center mt-3">
                                        <button id="btn_save" class="btn btn-primary">Save</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Saved Lab Test Details</div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-dark table-striped" id="lab_test_table"
                                            style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th>Lab Test Name</th>
                                                    <th>Label Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
                Copyright © 2025 <a href="#" class="fs-14 text-primary">Vetslab</a>. Designed by <a
                    href="https://sitasoftwares.com/" class="fs-14 text-primary" target="_blank">sita softwares</a> All
                rights reserved.
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
     <script>
        $(document).ready(function(){

            $('.select2').select2({ width:'100%', placeholder:"Select option(s)", allowClear:true });

            function validateForm(){
                let valid = true;
                $('.error').text('');
                if($('#lab_test_id').val()==''){ $('#lab_test_id_error').text('Select lab test'); valid=false; }
                if($('#label_name').val().trim()==''){ $('#label_name_error').text('Enter label'); valid=false; }
                if($('#data_type').val()== ''){ $('#data_type_error').text('Select data type'); valid=false; }
                if(!$('#data_value').val() || $('#data_value').val().length==0){ $('#data_value_error').text('Select at least one value'); valid=false; }
                return valid;
            }

            $('#btn_save').click(function(){
                if(!validateForm()) return;

                let data = {
                    edit_id: $('#edit_id').val(),
                    lab_test_id: $('#lab_test_id').val(),
                    label_name: $('#label_name').val(),
                    data_type: $('#data_type').val(),
                    data_value: JSON.stringify($('#data_value').val())
                };

                $.post('<?= site_url("Lab_test_details/saveLabTestDetail"); ?>', data, function(res){51230303
                    if(response.status==1 || response.status==3){

                        // ⭐ ADDED: SweetAlert success popup
                        Swal.fire({
                            icon: 'success',
                            title: 'Saved Successfully!',
                            text: 'Lab test details saved.',
                            timer: 1500,
                            showConfirmButton: false
                        });

                        let d = response.data;
                        let newRow = `<tr>
                            <td>${d.lab_test_name}</td>
                            <td>${d.label_name}</td>
                            <td>
                                <button class="btn btn-sm btn-info btn-toggle-details">Details</button>
                                <div class="detail-box mt-2 p-2 border rounded" style="display:none; background:#2a2a3b; color:#fff;">
                                    <p><strong>Data Type:</strong> ${d.data_type}</p>
                                    <p><strong>Default Value:</strong> ${d.data_value}</p>
                                    <p><strong>Active:</strong> ${d.is_active ? 'Yes':'No'}</p>
                                </div>
                            </td>
                        </tr>`;
                        $('#lab_test_table tbody').prepend(newRow);

                        // Reset
                        $('#edit_id').val(0);
                        $('#lab_test_id').val('').trigger('change');
                        $('#label_name').val('');
                        $('#data_type').val('').trigger('change');
                        $('#data_value').val(null).trigger('change');

                    } else if(response.status==2){
                        Swal.fire({
                            icon: 'warning',
                            title: 'Duplicate Entry!',
                            text: 'Label already exists for this test.'
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error Occurred!',
                            text: 'Something went wrong.'
                        });
                    }
                });
            });

            $(document).on('click', '.btn-toggle-details', function(){
                $(this).siblings('.detail-box').slideToggle();
            });

            $(window).on('load', function(){
                $('#loading').fadeOut('slow');
            });
        });
    </script>

</body>
</html>
