<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Form Xeditable | Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="public/images/favicon.ico">

    <!-- Plugins css -->
    <link href="public/libs/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet" type="text/css" />

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
                            <h4 class="font-size-18">Form Xeditable</h4>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Veltrix</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                <li class="breadcrumb-item active">Form Xeditable</li>
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

                                <h4 class="card-title">Inline Example</h4>
                                <p class="card-title-desc">This library allows you to create
                                    editable elements on your page. It can be used with any engine
                                    (bootstrap, jquery-ui, jquery only) and includes both popup and inline
                                    modes. Please try out demo to see how it works.</p>

                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th style="width: 50%;">Inline</th>
                                                <th>Examples</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Simple Text Field</td>
                                                <td>
                                                    <a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">superuser</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Empty text field, required</td>
                                                <td>
                                                    <a href="#" id="inline-firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Select, local array, custom display</td>
                                                <td>
                                                    <a href="#" id="inline-sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Select, error while loading</td>
                                                <td>
                                                    <a href="#" id="inline-status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Combodate</td>
                                                <td>
                                                    <a href="#" id="inline-dob" data-type="combodate" data-value="2015-09-24" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-title="Select Date of birth"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Textarea, buttons below. Submit by ctrl+enter</td>
                                                <td>
                                                    <a href="#" id="inline-comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
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
<?php include 'layouts/rightbar.php'; ?>

<?php include 'layouts/footerScript.php'; ?>
<!-- Plugins js -->
<script src="public/libs/moment/min/moment.min.js"></script>
<script src="public/libs/bootstrap-editable/js/index.js"></script>

<!-- Init js-->
<script src="public/js/pages/form-xeditable.init.js"></script>


<?php include "layouts/content-end.php"; ?>