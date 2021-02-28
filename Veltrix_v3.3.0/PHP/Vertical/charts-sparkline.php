<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Sparkline | Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
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
                            <h4 class="font-size-18">Sparkline Chart</h4>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Veltrix</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
                                <li class="breadcrumb-item active">Sparkline Chart</li>
                            </ol>
                        </div>
                    </div>


                    <?php include 'layouts/settingButton.php'; ?>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pie Chart</h4>
                                <div id="sparkline1" class="text-center"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bar Chart</h4>
                                <div id="sparkline2" class="text-center"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title">Line Chart</h4>
                                <div id="sparkline4"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Composite Bar Chart</h4>
                                <div id="sparkline3" class="text-center"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Line Charts</h4>
                                <div id="sparkline5" class="text-center"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card bg-success mb-4">
                            <div class="card-body">
                                <h4 class="card-title text-white">Discrete Chart</h4>
                                <div id="sparkline6" class="text-center"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bullet Chart</h4>
                                <div id="sparkline7"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Box Plot Chart</h4>
                                <div id="sparkline8" class="text-center"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tristate Charts</h4>
                                <div id="sparkline9" class="text-center"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->



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

<script src="public/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

<script src="public/js/pages/sparklines.init.js"></script>

<?php include "layouts/content-end.php"; ?>