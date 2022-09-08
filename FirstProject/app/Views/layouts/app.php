<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url('public/vendors/feather/feather.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/vendors/mdi/css/materialdesignicons.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/vendors/ti-icons/css/themify-icons.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/vendors/typicons/typicons.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/vendors/simple-line-icons/css/simple-line-icons.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/vendors/css/vendor.bundle.base.css'); ?>">

    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo base_url('public/vendors/datatables.net-bs4/dataTables.bootstrap4.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/js/select.dataTables.min.css'); ?>">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url('public/css/vertical-layout-light/style.css'); ?>">
    <!-- endinject -->
    <link rel="stylesheet" href="<?php echo base_url('public/images/favicon.png'); ?>">
</head>

<body>

    <?php echo $this->include('layouts/header'); ?>
    <?php echo  $this->include('layouts/sidebar'); ?>
    <div id="app">
        <main class=my-4>
            <?php echo $this->renderSection('content'); ?>
        </main>
    </div>
    <?php echo $this->include('layouts/footer'); ?>
    <!-- plugins:js -->
    <script type="text/javascript" src="<?php echo base_url('public/vendors/js/vendor.bundle.base.js'); ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script type="text/javascript" src="<?php echo base_url('public/vendors/chart.js/Chart.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('public/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('public/vendors/progressbar.js/progressbar.min.js'); ?>"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script type="text/javascript" src="<?php echo base_url('public/js/off-canvas.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('public/js/hoverable-collapse.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('public/js/template.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('public/js/settings.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('public/js/todolist.js'); ?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script type="text/javascript" src="<?php echo base_url('public/js/jquery.cookie.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('public/js/dashboard.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('public/js/Chart.roundedBarCharts.js'); ?>"></script>
    <!-- End custom js for this page-->
</body>

</html>