<!doctype html>
<html lang="en" dir="ltr">
<head>
    <?php $this->load->view('includes/head'); ?>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/datatable/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/datatable/buttons.dataTables.min.css" rel="stylesheet">

    <!-- SWEETALERT ADDED -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .form-card { background-color: #1e1e2f; border-radius: 10px; padding: 25px; margin-top: 20px; color: #fff; }
        label { color: #ccc; }
        .select2-container--default .select2-selection--single,
        .select2-container--default .select2-selection--multiple {
            background-color: #2a2a3b; border: 1px solid #444; color: #fff; border-radius: 6px; min-height: 38px;
        }
        .error { color: #ff6b6b; font-size: 13px; }
        .detail-box p { margin: 0; }
        .modal .close span { color: #fff; }
    </style>
</head>
<body class="app dark-mode">

    <!-- Loader -->
    <div id="loading">
        <img src="<?php echo base_url(); ?>assets/images/other/loader-dark.svg" class="loader-img" alt="Loader">
    </div>

    <div class="page">
        <div class="page-main">

            <?php $this->load->view('includes/top_header'); ?>
            <?php $this->load->view('includes/horizontal_menu'); ?>

            <div class="app-content">
                <div class="container">

                    <div class="page-header hor-pageheader">
                        <div class="page-leftheader">
                            <h4 class="page-title mb-0">Vetslab, Admin Dashboard</h4>
                            <small class="text-muted mt-0 fs-14">Manage Lab Test Details</small>
                        </div>
                    </div>

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
                                                <?php foreach($all_lab_tests as $t): ?>
                                                    <option value="<?= $t['lab_test_id']; ?>"><?= $t['lab_test_name']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <small class="error" id="lab_test_id_error"></small>
                                        </div>

                                        <div class="col-md-6">
                                            <label>Label Name <span class="text-danger">*</span></label>
                                            <input id="label_name" class="form-control" type="text" placeholder="Enter Label Name">
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

                    <!-- Saved Lab Test Records -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Saved Lab Test Details</div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-dark table-striped" id="lab_test_table" style="width:100%;">
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

            <?php $this->load->view('includes/right_sidebar'); ?>

            <footer class="footer-main">
                <div class="container text-center mt-2 mb-2">
                    Copyright © 2025
                    <a href="#" class="fs-14 text-primary">Vetslab</a>.
                    <a href="https://sitasoftwares.com/" class="fs-14 text-primary" target="_blank">Sita Softwares</a>.
                </div>
            </footer>
        </div>
    </div>

    <script src="<?php echo base_url(); ?>assets/js/vendors/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

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

                $.post('<?= site_url("Lab_test_details/saveLabTestDetail"); ?>', data, function(res){
                    let response = JSON.parse(res);

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
