<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Colors | Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="public/images/favicon.ico">

    <?php include 'layouts/headerStyle.php'; ?>
</head>

<?php include 'layouts/master.php'; echo setLayout();?>

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
                                <h4 class="font-size-18">Colors</h4>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Veltrix</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                                    <li class="breadcrumb-item active">Colors</li>
                                </ol>
                            </div>
                        </div>


                        <?php include 'layouts/settingButton.php'; ?>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="color-box p-4 rounded bg-primary">
                                        <h5 class="my-2 text-white">#626ed4</h5>
                                    </div>
                                    <h5 class="mb-0 mt-4 text-primary text-center font-size-18">Primary</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="color-box p-4 rounded bg-success">
                                        <h5 class="my-2 text-white">#02a499</h5>
                                    </div>
                                    <h5 class="mb-0 mt-4 text-success text-center font-size-18">Success</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="color-box p-4 rounded bg-info">
                                        <h5 class="my-2 text-white">#38a4f8</h5>
                                    </div>
                                    <h5 class="mb-0 mt-4 text-info text-center font-size-18">Info</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="color-box p-4 rounded bg-warning">
                                        <h5 class="my-2 text-white">#f8b425</h5>
                                    </div>
                                    <h5 class="mb-0 mt-4 text-warning text-center font-size-18">Warning</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="color-box p-4 rounded bg-danger">
                                        <h5 class="my-2 text-white">#ec4561</h5>
                                    </div>
                                    <h5 class="mb-0 mt-4 text-danger text-center font-size-18">Danger</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="color-box p-4 rounded bg-dark">
                                        <h5 class="my-2 text-white">#343a40</h5>
                                    </div>
                                    <h5 class="mb-0 mt-4 text-dark text-center font-size-18">Dark</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="color-box p-4 rounded bg-secondary">
                                        <h5 class="my-2 text-white">#6c757d</h5>
                                    </div>
                                    <h5 class="mb-0 mt-4 text-muted text-center font-size-18">Secondary</h5>
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
    <?php include "layouts/content-end.php"; ?>