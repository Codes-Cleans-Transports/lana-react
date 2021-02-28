<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Form Upload | Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="public/images/favicon.ico">

    <!-- Plugins css -->
    <link href="public/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />


    <?php include 'layouts/headerStyle.php'; ?>

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
                                <h4 class="font-size-18">File Upload</h4>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Veltrix</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active">File Upload</li>
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

                                    <h4 class="card-title">Dropzone</h4>
                                    <p class="card-title-desc">DropzoneJS is an open source library
                                        that provides drag’n’drop file uploads with image previews.
                                    </p>

                                    <div class="mb-5">
                                        <form action="#" class="dropzone">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple="multiple">
                                            </div>
                                        </form>
                                    </div>

                                    <div class="text-center mt-3">
                                        <button type="button" class="btn btn-primary waves-effect waves-light">Send
                                            Files</button>
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

        <?php include 'layouts/rightbar.php'; ?>
        <?php include 'layouts/footerScript.php'; ?>

        <!-- Plugins js -->
        <script src="public/libs/dropzone/min/dropzone.min.js"></script>

        <?php include 'layouts/content-end.php'; ?>