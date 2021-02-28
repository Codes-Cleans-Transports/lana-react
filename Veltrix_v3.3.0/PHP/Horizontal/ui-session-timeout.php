<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Session Timeout | Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="public/images/favicon.ico">


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
                                <h4 class="font-size-18">Session Timeout</h4>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Veltrix</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                                    <li class="breadcrumb-item active">Session Timeout</li>
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

                                    <h5 class="card-title">Bootstrap-session-timeout</h5>
                                    <p class="card-title-desc">Session timeout and keep-alive control
                                        with a nice Bootstrap warning dialog.</p>

                                    <div>
                                        <p>After a set amount of idle time, a Bootstrap warning dialog is shown
                                            to the user with the option to either log out, or stay connected. If
                                            "Logout" button is selected, the page is redirected to a logout URL.
                                            If "Stay Connected" is selected the dialog closes and the session is
                                            kept alive. If no option is selected after another set amount of
                                            idle time, the page is automatically redirected to a set timeout
                                            URL.</p>

                                        <p>
                                            Idle time is defined as no mouse, keyboard or touch event activity
                                            registered by the browser.
                                        </p>

                                        <p class="mb-0">
                                            As long as the user is active, the (optional) keep-alive URL keeps
                                            getting pinged and the session stays alive. If you have no need to
                                            keep the server-side session alive via the keep-alive URL, you can
                                            also use this plugin as a simple lock mechanism that redirects to
                                            your lock-session or log-out URL after a set amount of idle time.
                                        </p>
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


        <!-- Session timeout js -->
        <script src="public/libs/@curiosityx/bootstrap-session-timeout/index.js"></script>

        <!-- Session timeout js -->
        <script src="public/js/pages/session-timeout.init.js"></script>

        <?php include 'layouts/content-end.php'; ?>