<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Video | Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
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
                            <h4 class="font-size-18">Video</h4>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Veltrix</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                                <li class="breadcrumb-item active">Video</li>
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

                                <h4 class="card-title">Responsive embed video 16:9</h4>
                                <p class="card-title-desc">Aspect ratios can be customized with modifier classes.
                                </p>

                                <!-- 16:9 aspect ratio -->
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1y_kfWUCFDQ"></iframe>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Responsive embed video 21:9</h4>
                                <p class="card-title-desc">Aspect ratios can be customized with modifier classes.
                                </p>

                                <!-- 21:9 aspect ratio -->
                                <div class="embed-responsive embed-responsive-21by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1y_kfWUCFDQ"></iframe>
                                </div>

                            </div>
                        </div>
                    </div> <!-- end col -->

                </div> <!-- end row -->

                <div class="row">

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Responsive embed video 4:3</h4>
                                <p class="card-title-desc">Aspect ratios can be customized with modifier classes.
                                </p>

                                <!-- 4:3 aspect ratio -->
                                <div class="embed-responsive embed-responsive-4by3">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1y_kfWUCFDQ"></iframe>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Responsive embed video 1:1</h4>
                                <p class="card-title-desc">Aspect ratios can be customized with modifier classes.
                                </p>

                                <!-- 1:1 aspect ratio -->
                                <div class="embed-responsive embed-responsive-1by1">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1y_kfWUCFDQ"></iframe>
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
<?php include "layouts/content-end.php"; ?>