<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Morris | Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="public/images/favicon.ico">
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
                            <h4 class="font-size-18">Morris Chart</h4>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Veltrix</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
                                <li class="breadcrumb-item active">Morris Chart</li>
                            </ol>
                        </div>
                    </div>

                    <?php include 'layouts/settingButton.php'; ?>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Line Chart</h4>

                                <div class="row justify-content-center">
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">25610</h5>
                                            <p class="text-muted">Activated</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">56210</h5>
                                            <p class="text-muted">Pending</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">12485</h5>
                                            <p class="text-muted">Deactivated</p>
                                        </div>
                                    </div>
                                </div>


                                <div id="morris-line-example" class="morris-charts morris-chart-height" dir="ltr">
                                </div>

                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Bar Chart</h4>

                                <div class="row justify-content-center">
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">6,95,412</h5>
                                            <p class="text-muted">Activated</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">1,63,542</h5>
                                            <p class="text-muted">Pending</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="morris-bar-example" class="morris-charts morris-chart-height" dir="ltr">
                                </div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Area Chart</h4>

                                <div class="row justify-content-center">
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">86541</h5>
                                            <p class="text-muted">Activated</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">2541</h5>
                                            <p class="text-muted">Pending</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">102030</h5>
                                            <p class="text-muted">Deactivated</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="morris-area-example" class="morris-charts morris-chart-height" dir="ltr">
                                </div>

                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Donut Chart</h4>


                                <div class="row justify-content-center">
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">3201</h5>
                                            <p class="text-muted">Activated</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">85120</h5>
                                            <p class="text-muted">Pending</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">65214</h5>
                                            <p class="text-muted">Deactivated</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="morris-donut-example" class="morris-charts morris-chart-height" dir="ltr">
                                </div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Area Chart</h4>

                                <div class="row justify-content-center">
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">86541</h5>
                                            <p class="text-muted">Activated</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">2541</h5>
                                            <p class="text-muted">Pending</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">102030</h5>
                                            <p class="text-muted">Deactivated</p>
                                        </div>
                                    </div>
                                </div>



                                <div id="morris-bar-stacked" class="morris-charts morris-chart-height" dir="ltr">
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
<!--Morris Chart-->
<script src="public/libs/morris.js/morris.min.js"></script>
<script src="public/libs/raphael/raphael.min.js"></script>
<!-- Init js -->
<script src="public/js/pages/morris.init.js"></script>
<?php include "layouts/content-end.php"; ?>