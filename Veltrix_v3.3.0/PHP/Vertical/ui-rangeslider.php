<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Range Slider | Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="public/images/favicon.ico">

    <!-- ION Slider -->
    <link href="public/libs/ion-rangeslider/css/ion.rangeSlider.min.css" rel="stylesheet" type="text/css" />

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
                            <h4 class="font-size-18">Range Slider</h4>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Veltrix</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                                <li class="breadcrumb-item active">Range Slider</li>
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

                                <h4 class="card-title">ION Range slider</h4>
                                <p class="card-title-desc">Cool, comfortable, responsive and easily customizable
                                    range slider</p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="p-3">
                                            <h5 class="font-size-14 mb-3 mt-0">Default</h5>
                                            <input type="text" id="range_01">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="p-3">
                                            <h5 class="font-size-14 mb-3 mt-0">Min-Max</h5>
                                            <input type="text" id="range_02">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="p-3">
                                            <h5 class="font-size-14 mb-3 mt-0">Prefix</h5>
                                            <input type="text" id="range_03">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="p-3">
                                            <h5 class="font-size-14 mb-3 mt-0">Range</h5>
                                            <input type="text" id="range_04">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="p-3">
                                            <h5 class="font-size-14 mb-3 mt-0">Step</h5>
                                            <input type="text" id="range_05">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="p-3">
                                            <h5 class="font-size-14 mb-3 mt-0">Custom Values</h5>
                                            <input type="text" id="range_06">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="p-3">
                                            <h5 class="font-size-14 mb-3 mt-0">Prettify Numbers</h5>
                                            <input type="text" id="range_07">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="p-3">
                                            <h5 class="font-size-14 mb-3 mt-0">Disabled</h5>
                                            <input type="text" id="range_08">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="p-3">
                                            <h5 class="font-size-14 mb-3 mt-0">Extra Example</h5>
                                            <input type="text" id="range_09">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="p-3">
                                            <h5 class="font-size-14 mb-3 mt-0">Use decorate_both option</h5>
                                            <input type="text" id="range_10">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="p-3">
                                            <h5 class="font-size-14 mb-3 mt-0">Postfixes</h5>
                                            <input type="text" id="range_11">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="p-3">
                                            <h5 class="font-size-14 mb-3 mt-0">Hide</h5>
                                            <input type="text" id="range_12">
                                        </div>
                                    </div>
                                </div>

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

<!-- Ion Range Slider-->
<script src="public/libs/ion-rangeslider/js/ion.rangeSlider.min.js"></script>

<!-- Range slider init js-->
<script src="public/js/pages/range-sliders.init.js"></script>

<?php include "layouts/content-end.php"; ?>