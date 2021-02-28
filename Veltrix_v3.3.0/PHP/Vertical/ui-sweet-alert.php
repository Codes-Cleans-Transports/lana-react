<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>SweetAlert 2 | Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="public/images/favicon.ico">

    <!-- Sweet Alert-->
    <link href="public/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    <?php include 'layouts/headerStyle.php'; ?>
</head>

<?php include 'layouts/master.php';
echo setLayout(); ?>

<!-- Begin page -->
<div id="layout-wrapper">


    <?php include 'layouts/topbar.php'; ?>
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="page-title-box">
                            <h4 class="font-size-18">SweetAlert 2</h4>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Veltrix</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                                <li class="breadcrumb-item active">SweetAlert 2</li>
                            </ol>
                        </div>
                    </div>


                    <?php include 'layouts/settingButton.php'; ?>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Examples</h4>
                                <p class="card-title-desc">A beautiful, responsive, customizable
                                    and accessible (WAI-ARIA) replacement for JavaScript's popup boxes. Zero
                                    dependencies.</p>

                                <div class="row text-center">
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                        <p>A basic message</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-basic">Click me</button>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                        <p>A title with a text under</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-title">Click me</button>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                        <p>A success message!</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-success">Click me</button>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                        <p>A warning message, with a function attached to the "Confirm"-button...
                                        </p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-warning">Click me</button>
                                    </div>

                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                        <p>By passing a parameter, you can execute something else for "Cancel".</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-params">Click me</button>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                        <p>A message with custom Image Header</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-image">Click me</button>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                        <p>A message with auto close timer</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-close">Click me</button>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                        <p>Custom HTML description and buttons</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="custom-html-alert">Click me</button>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                        <p>A message with custom width, padding and background</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="custom-padding-width-alert">Click me</button>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                        <p>Ajax request example</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="ajax-alert">Click me</button>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                        <p>Chaining modals (queue) example</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="chaining-alert">Click me</button>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                        <p>Dynamic queue example</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="dynamic-alert">Click me</button>
                                    </div>

                                </div> <!-- end row -->

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->



            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->



        <?php include 'layouts/footer.php'; ?>

    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->
<?php include 'layouts/rightbar.php'; ?>

<?php include 'layouts/footerScript.php'; ?>

<!-- Sweet Alerts js -->
<script src="public/libs/sweetalert2/sweetalert2.min.js"></script>

<!-- Sweet alert init js-->
<script src="public/js/pages/sweet-alerts.init.js"></script>


<?php include "layouts/content-end.php"; ?>