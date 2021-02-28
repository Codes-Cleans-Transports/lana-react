<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Blank | Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
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
                                <h4 class="font-size-18">Blank Pages</h4>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Veltrix</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Blank Pages</a></li>
                                    <li class="breadcrumb-item active">Blank Pages</li>
                                </ol>
                            </div>
                        </div>


                        <?php include 'layouts/settingButton.php'; ?>

                    </div>
                    <!-- end page title -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <?php include 'layouts/footer.php'; ?>
        </div>
        <?php include 'layouts/rightbar.php'; ?>
        <?php include 'layouts/footerScript.php'; ?>
        <?php include 'layouts/content-end.php'; ?>