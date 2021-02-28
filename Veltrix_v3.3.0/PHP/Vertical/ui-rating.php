<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Rating | Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="public/images/favicon.ico">

    <!-- Bootstrap Rating css -->
    <link href="public/libs/bootstrap-rating/bootstrap-rating.css" rel="stylesheet" type="text/css" />

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
                            <h4 class="font-size-18">Rating</h4>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Veltrix</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                                <li class="breadcrumb-item active">Rating</li>
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

                                <div class="row">
                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="p-4 text-center">
                                            <h5 class="font-size-16 mb-3">Default rating</h5>
                                            <input type="hidden" class="rating" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted" />
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="p-4 text-center">
                                            <h5 class="font-size-16 mb-3">Half rating</h5>
                                            <input type="hidden" class="rating" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-primary" data-fractions="2" />
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="p-4 text-center">
                                            <h5 class="font-size-16 mb-3">Disabled rating</h5>
                                            <input type="hidden" class="rating" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted" disabled="disabled" />
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="p-4 text-center">
                                            <h5 class="font-size-16 mb-3">Readonly rating with a value</h5>
                                            <input type="hidden" class="rating" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted" data-readonly value="3" />
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="p-4 text-center">
                                            <h5 class="font-size-16 mb-3">Customized heart rating</h5>
                                            <input type="hidden" class="rating" data-filled="mdi mdi-heart text-danger" data-empty="mdi mdi-heart-outline text-danger" />
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="p-4 text-center">
                                            <h5 class="font-size-16 mb-3">Only fill selected</h5>
                                            <input type="hidden" class="rating" data-filled="mdi mdi-star-outline text-primary" data-empty="mdi mdi-star-outline text-primary" data-filled-selected="mdi mdi-star text-primary" />
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="p-4 text-center">
                                            <h5 class="font-size-16 mb-3">Handle events</h5>
                                            <input type="hidden" class="rating check" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted" />
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="p-4 text-center">
                                            <h5 class="font-size-16 mb-3">Customize tooltips</h5>
                                            <input type="hidden" class="rating-tooltip" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted" />
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="p-4 text-center">
                                            <h5 class="font-size-16 mb-3">Default rating</h5>
                                            <input type="hidden" class="rating-tooltip" data-stop="10" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted" />
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="p-4 text-center">
                                            <h5 class="font-size-16 mb-3">Set start rate to 5 [6..10]</h5>
                                            <input type="hidden" class="rating-tooltip" data-start="5" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted" />
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="p-4 text-center">
                                            <h5 class="font-size-16 mb-3">Set start and stop rate [2..10]</h5>
                                            <input type="hidden" class="rating-tooltip" data-start="1" data-stop="10" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted" />
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="p-4 text-center">
                                            <h5 class="font-size-16 mb-3">Set start and stop rate [2..10] with step
                                                2</h5>
                                            <input type="hidden" class="rating-tooltip" data-stop="10" data-step="2" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted" />
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="p-4 text-center">
                                            <h5 class="font-size-16 mb-3">Custom icons</h5>
                                            <input type="hidden" class="rating" data-filled="mdi mdi-checkbox-marked text-primary" data-empty="mdi mdi-checkbox-blank-outline text-muted" />
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="p-4 text-center">
                                            <h5 class="font-size-16 mb-3">Fractional rating</h5>
                                            <input type="hidden" class="rating-tooltip-manual" data-fractions="3" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted" />
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="p-4 text-center">
                                            <h5 class="font-size-16 mb-3">Custom CSS icons</h5>
                                            <input type="hidden" class="rating" data-filled="symbol symbol-filled" data-empty="symbol symbol-empty" data-fractions="2" />
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

<!-- Bootstrap rating js -->
<script src="public/libs/bootstrap-rating/bootstrap-rating.min.js"></script>

<script src="public/js/pages/rating-init.js"></script>

<?php include "layouts/content-end.php"; ?>