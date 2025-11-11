<!doctype html>
<html lang="en" dir="ltr">
<head>
    <?php $this->load->view('includes/head'); ?>
    <link href="<?php echo base_url(); ?>assets/datatable/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/datatable/buttons.dataTables.min.css" rel="stylesheet">
</head>
<body class="app dark-mode">

<!-- Loader -->
<div id="loading">
    <img src="<?php echo base_url(); ?>assets/images/other/loader-dark.svg" class="loader-img" alt="Loader">
</div>

<!-- Modal -->
<div class="modal fade" id="modal-role" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content shadow border-0">
            <div class="modal-body p-0">
                <div class="card-body px-lg-5 py-lg-5">
                    <div class="text-center mb-4 h4">
                        Add New Lab Test
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="form-group mb-3">
                        <input type="hidden" id="edit_id" value="0">
                        <input id="lab_test_name" name="lab_test_name" class="form-control" placeholder="Enter Lab Test Name" type="text">
                    </div>

                    <div class="text-center">
                        <button type="button" id="btn_save" class="btn btn-primary my-4">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Page -->
<div class="page">
    <div class="page-main">
        <?php $this->load->view('includes/top_header'); ?>
        <?php $this->load->view('includes/horizontal_menu'); ?>

        <div class="app-content">
            <div class="container">

                <div class="page-header hor-pageheader">
                    <div class="page-leftheader">
                        <h4 class="page-title mb-0">Vetslab, Admin Dashboard</h4>
                        <small class="text-muted mt-0 fs-14">Welcome to Vetslab admin dashboard</small>
                    </div>
                    <div class="page-rightheader">
                        <span class="mt-3 mt-md-0 pg-header">
                            <a href="#" class="btn btn-info ml-0 ml-md-4 mt-1" data-toggle="modal" data-target="#modal-role">
                                <i class="typcn typcn-plus"></i> Add New Lab Test
                            </a>
                        </span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Lab Test List</div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="table_rft_test" style="width: 100%;">
                                        <thead style="background-color: #003366; color:#fff;">
                                            <tr>
                                                <th class="wd-15p border-bottom-0">SI No</th>
                                                <th class="wd-50p border-bottom-0">Lab Test Name</th>
                                                <th class="wd-20p border-bottom-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($all_rft_test as $key => $val) { ?>
                                                <tr>
                                                    <td><?php echo $key + 1; ?></td>
                                                    <td><?php echo $val['lab_test_name']; ?></td>
                                                    <td>
                                                        <a href="#" class="btn_edit text-primary mr-2" data-id="<?php echo $val['lab_test_id']; ?>">
                                                            <i class="fa fa-edit" title="Edit"></i>
                                                        </a>
                                                        <a href="#" class="btn_delete text-danger" data-id="<?php echo $val['lab_test_id']; ?>">
                                                            <i class="fa fa-trash" title="Delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
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
                Copyright © 2025 <a href="#" class="fs-14 text-primary">Vetslab</a>. Designed by <a href="https://sitasoftwares.com/" target="_blank" class="fs-14 text-primary">sita softwares</a>
            </div>
        </footer>
    </div>
</div>

<!-- JS Scripts -->
<script src="<?php echo base_url(); ?>assets/js/vendors/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/vendors/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/datatable/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function() {
    $('#table_rft_test').DataTable();

    // Save/Update lab test
    $('#btn_save').click(function() {
        var edit_id = $('#edit_id').val();
        var lab_test_name = $('#lab_test_name').val().trim();

        if(lab_test_name === "") {
            Swal.fire({ icon: 'error', title: 'Error!', text: 'Please enter Lab Test Name.' });
            return;
        }

        $.ajax({
            url: "<?php echo site_url('Lab_test_master/saveTest'); ?>",
            type: "POST",
            data: { edit_id: edit_id, lab_test_name: lab_test_name },
            success: function(response) {
                if(response == 1){
                    $('#modal-role').modal('hide');
                    Swal.fire({ icon: 'success', title: 'Success!', text: 'Data inserted successfully!', showConfirmButton: false, timer: 1500 });
                    setTimeout(() => location.reload(), 1500);
                } else if(response == 3){
                    $('#modal-role').modal('hide');
                    Swal.fire({ icon: 'success', title: 'Updated!', text: 'Data updated successfully!', showConfirmButton: false, timer: 1500 });
                    setTimeout(() => location.reload(), 1500);
                } else {
                    Swal.fire({ icon: 'error', title: 'Oops...', text: 'Something went wrong.' });
                }
            },
            error: function(xhr){
                Swal.fire({ icon: 'error', title: 'Connection Error', text: 'Failed to connect to the server.' });
            }
        });
    });

    // Edit
    $(document).on('click', '.btn_edit', function(e){
        e.preventDefault();
        var id = $(this).data('id');
        $.ajax({
            url: "<?php echo site_url('Lab_test_master/getTestDatas'); ?>",
            type: "POST",
            data: { id: id },
            dataType: "json",
            success: function(response){
                if(response.length > 0){
                    $('#edit_id').val(response[0].lab_test_id);
                    $('#lab_test_name').val(response[0].lab_test_name);
                    $('#btn_save').text("Update");
                    $('#modal-role').modal('show');
                } else {
                    Swal.fire({ icon: 'error', title: 'Error!', text: 'Failed to fetch record!' });
                }
            }
        });
    });

    // Delete
    $(document).on('click', '.btn_delete', function(e){
        e.preventDefault();
        var id = $(this).data('id');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won’t be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if(result.isConfirmed){
                $.ajax({
                    url: "<?php echo site_url('Lab_test_master/deleteTest'); ?>",
                    type: "POST",
                    data: { id: id },
                    success: function(response){
                        if(response == 1){
                            Swal.fire({ icon: 'success', title: 'Deleted!', text: 'Record deleted successfully.', timer: 1500, showConfirmButton: false });
                            setTimeout(() => location.reload(), 1500);
                        } else {
                            Swal.fire({ icon: 'error', title: 'Failed!', text: 'Failed to delete record.' });
                        }
                    }
                });

            }
        });
    });
});
</script>
<script>
$(window).on('load', function() {
    $('#loading').fadeOut('slow'); // hide the loader when everything is loaded
});
</script>
</body>
</html>
