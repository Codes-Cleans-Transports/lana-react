<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Form Editors | Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="public/images/favicon.ico">

    <!-- Summernote css -->
    <link href="public/libs/summernote/summernote-bs4.min.css" rel="stylesheet" type="text/css" />

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
                            <h4 class="font-size-18">Form Editors</h4>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Veltrix</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                <li class="breadcrumb-item active">Form Editors</li>
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

                                <h4 class="card-title">Tinymce wysihtml5</h4>
                                <p class="card-title-desc">Bootstrap-wysihtml5 is a javascript
                                    plugin that makes it easy to create simple, beautiful wysiwyg editors
                                    with the help of wysihtml5 and Twitter Bootstrap.</p>

                                <form method="post">
                                    <textarea id="elm1" name="area"></textarea>
                                </form>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Summernote</h4>
                                <p class="card-title-desc">Super simple wysiwyg editor on bootstrap</p>

                                <div class="summernote">Hello Summernote</div>

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
<!--tinymce js-->
<script src="public/libs/tinymce/tinymce.min.js"></script>

<!-- Summernote js -->
<script src="public/libs/summernote/summernote-bs4.min.js"></script>

<!-- init js -->
<script src="public/js/pages/form-editor.init.js"></script>

<?php include "layouts/content-end.php"; ?>