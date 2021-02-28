<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Comming soon | Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="public/images/favicon.ico">
    <?php include 'layouts/headerStyle.php'; ?>
</head>

<body>
    <div class="home-btn d-none d-sm-block">
        <a href="index.php" class="text-dark"><i class="fas fa-home h2"></i></a>
    </div>

    <!-- Begin page -->
    <div class="authentication-bg d-flex align-items-center pb-0 vh-100">
        <div class="content-center w-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="home-wrapper text-center">
                            <img src="public/images/logo-dark.png" alt="logo" height="22" />
                            <h3 class="mt-4">Let's get started with Veltrix</h3>
                            <p class="mb-5">It will be as simple as Occidental in fact it will be Occidental.</p>

                            <div class="row justify-content-center mt-5">
                                <div class="col-md-8">
                                    <div data-countdown="2020/12/31" class="counter-number"></div>
                                </div> <!-- end col-->
                            </div>

                            <div class="text-center coming-soon-search-form pt-4">
                                <form action="#">
                                    <input type="text" placeholder="Enter email address">
                                    <button type="submit" class="btn btn-primary">Subscribe</button>
                                </form>
                            </div>
                        </div>
                        <!-- end home wrapper -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
    </div>

    <?php include 'layouts/footerScript.php'; ?>
    <!-- Plugins js-->
    <script src="public/libs/jquery-countdown/jquery.countdown.min.js"></script>

    <!-- Countdown js -->
    <script src="public/js/pages/coming-soon.init.js"></script>
    <?php include "layouts/content-end.php"; ?>