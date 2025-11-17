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
                                Add New Role
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
                                <span class="mt-3 mt-md-0 pg-header">
                                    <a href="#" class="btn btn-info ml-0 ml-md-4 mt-1" data-toggle="modal"
                                        data-target="#modal-role"><i class="typcn typcn-plus"></i> Add New Role</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Page-header closed -->

                    <!-- YOU CAN WRITE CODE HERE - START-->

                  <div class="row">
                        <div class="col-md-12 col-lg-12">

                            <div class="card-header">
                                <div class="card-title">Report List</div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <button class="btn btn-primary" id="btn_current_month">Current Month</button>
                                    <button class="btn btn-secondary" id="btn_previous_month">Previous Month</button>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped w-100" id="reportTable">
                                    <thead style="background-color: #003366; color:#fff;">
                                        <tr>
                                            <th>SI No</th>
                                            <th>Patient Name</th>
                                            <th>Breed</th>
                                            <th>Sample Type</th>
                                            <th>Species</th>
                                            <th>Mobile No</th>
                                            <th>Owner's Name</th>
                                        </tr>
                                    </thead>
                                </table>
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
                        href="https://sitasoftwares.com/" class="fs-14 text-primary" target="_blank">sita softwares</a>
                    All rights reserved.
                </div>
            </div>
        </footer>
        <!-- Footer closed -->
    </div>

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <!-- ONLY ONE jQuery version -->
    <script src="<?php echo base_url(); ?>assets/js/vendors/jquery-3.2.1.min.js"></script>

    <!-- Required JS -->
    <script src="<?php echo base_url(); ?>assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/custom-dark.js"></script>

    <!-- DATATABLES -->
    <script src="<?php echo base_url(); ?>assets/datatable/jquery.dataTables.min.js"></script>

    <!-- Moment JS -->
    <script src="<?php echo base_url(); ?>assets/plugins/moment/moment.min.js"></script>


    <script>
        $(document).ready(function () {

            apply_filter("current");

            $("#btn_current_month").click(() => apply_filter("current"));
            $("#btn_previous_month").click(() => apply_filter("previous"));

            function apply_filter(type) {

                let from_date = "";
                let to_date = "";

                if (type === "current") {
                    from_date = moment().startOf("month").format("YYYY-MM-DD");
                    to_date = moment().endOf("month").format("YYYY-MM-DD");
                }

                if (type === "previous") {
                    from_date = moment().subtract(1, "month").startOf("month").format("YYYY-MM-DD");
                    to_date = moment().subtract(1, "month").endOf("month").format("YYYY-MM-DD");
                }

                load_table(from_date, to_date);
            }

            function load_table(from_date, to_date) {

                $('#reportTable').DataTable({
                    processing: true,
                    serverSide: true,
                    destroy: true,
                    ajax: {
                        url: "<?= site_url('monthly_report/get_reports'); ?>",
                        type: "POST",
                        data: {
                            from_date: from_date,
                            to_date: to_date
                        }
                    },
                    order: [[0, 'desc']],
                    columns: [
                        { data: 'reg_id' },
                        { data: 'patient_name' },
                        { data: 'breed_name' },
                        { data: 'sample_type_name' },
                        { data: 'species_name' },
                        { data: 'mob_no' },
                        { data: 'owners_name' }
                    ]
                });
            }

        });
    </script>
    <script>
        $(document).ready(function () {

            if ($.fn.DataTable.isDataTable('#reportTable')) {
                $('#reportTable').DataTable().destroy();
            }

            $('#reportTable').DataTable({
                searching: true,
                ordering: true,
                paging: true,
                info: true,
                dom: 'Bfrtip',
                buttons: [
                    { extend: 'excelHtml5', title: 'Today ConsultTable List' },
                    { extend: 'pdfHtml5', title: 'Today ConsultTable List' }

                ]
            });

        });
    </script>
    <!-- DATATABLE CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Datatables -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <!-- Buttons -->
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>

    <!-- Excel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.7.1/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>

    <!-- PDF -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>



</body>

</html>
