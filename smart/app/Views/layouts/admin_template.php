<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title> <?= $this->renderSection('title' , 'Dashboard') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>public/assets/images/logo.png">

    <!-- Sweet Alerts css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/assets/sweetalert/sweet-alert.css">

    <!-- Plugins css -->
    <link href="<?= base_url() ?>public/assets/plugins/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>public/assets/plugins/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>public/assets/plugins/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>public/assets/plugins/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="<?= base_url() ?>public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>public/assets/css/theme.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <?= $this->include('partials/admin/_header') ?>
        <!-- ========== Left Sidebar Start ========== -->
        <?= $this->include('partials/admin/_sidebar') ?>
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <?= $this->renderSection('content') ?>
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <?= $this->include('partials/admin/_footer') ?>
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
    <!-- Overlay-->
    <div class="menu-overlay"></div>
    <!-- jQuery  -->
    <script src="<?= base_url() ?>public/assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>public/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>public/assets/js/metismenu.min.js"></script>
    <script src="<?= base_url() ?>public/assets/js/waves.js"></script>
    <script src="<?= base_url() ?>public/assets/js/simplebar.min.js"></script>

    <!-- third party js -->
    <script src="<?= base_url() ?>public/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>public/assets/plugins/datatables/dataTables.bootstrap4.js"></script>
    <script src="<?= base_url() ?>public/assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>public/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>public/assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>public/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>public/assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>public/assets/plugins/datatables/buttons.flash.min.js"></script>
    <script src="<?= base_url() ?>public/assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>public/assets/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="<?= base_url() ?>public/assets/plugins/datatables/dataTables.select.min.js"></script>
    <script src="<?= base_url() ?>public/assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>public/assets/plugins/datatables/vfs_fonts.js"></script>
    <!-- third party js ends -->

    <!-- Datatables init -->
    <script src="<?= base_url() ?>public/assets/pages/datatables-demo.js"></script>

    <!-- Sweet Alerts Js-->
    <script src="<?= base_url() ?>public/assets/sweetalert/sweet-alert.js"></script>

    <script src="<?= base_url() ?>public/assets/plugins/morris-js/morris.min.js"></script>
    <script src="<?= base_url() ?>public/assets/plugins/raphael/raphael.min.js"></script>
    <script src="<?= base_url() ?>public/assets/pages/dashboard-demo.js"></script>

    <!-- App js -->
    <script src="<?= base_url() ?>public/assets/js/theme.js"></script>


    <?php if(session('message') != null ){ ?>
    <script type="text/javascript">
        $(document).ready(function() {
            swal(
                "SMART ACCESS",
                "<?= session('message'); ?>",
                "success");		
        });
    </script>
    <?php } ?>

	<!-- Pour les notification d'avertissement -->
	<?php if(session('messages') != null ){ ?>
    <script type="text/javascript">
        $(document).ready(function() {
            swal({
                title: "SMART ACCESS",
                text: "<?= session('messages'); ?>",
                type: "warning",
                cancelButtonText: "OK"
            });		
        });
    </script>
    <?php } ?>

</body>

</html>