<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Grid | Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
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
                                <h4 class="font-size-18">Grid</h4>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Veltrix</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                                    <li class="breadcrumb-item active">Grid</li>
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

                                    <h4 class="card-title">Grid options</h4>
                                    <p class="card-title-desc">See how aspects of the Bootstrap grid
                                        system work across multiple devices with a handy table.</p>

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped mb-0">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th class="text-center">
                                                        Extra small<br>
                                                        <small>&lt;576px</small>
                                                    </th>
                                                    <th class="text-center">
                                                        Small<br>
                                                        <small>≥576px</small>
                                                    </th>
                                                    <th class="text-center">
                                                        Medium<br>
                                                        <small>≥768px</small>
                                                    </th>
                                                    <th class="text-center">
                                                        Large<br>
                                                        <small>≥992px</small>
                                                    </th>
                                                    <th class="text-center">
                                                        Extra large<br>
                                                        <small>≥1200px</small>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th class="text-nowrap" scope="row">Grid behavior</th>
                                                    <td>Horizontal at all times</td>
                                                    <td colspan="4">Collapsed to start, horizontal above breakpoints
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="text-nowrap" scope="row">Max container width</th>
                                                    <td>None (auto)</td>
                                                    <td>540px</td>
                                                    <td>720px</td>
                                                    <td>960px</td>
                                                    <td>1140px</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-nowrap" scope="row">Class prefix</th>
                                                    <td><code>.col-</code></td>
                                                    <td><code>.col-sm-</code></td>
                                                    <td><code>.col-md-</code></td>
                                                    <td><code>.col-lg-</code></td>
                                                    <td><code>.col-xl-</code></td>
                                                </tr>
                                                <tr>
                                                    <th class="text-nowrap" scope="row"># of columns</th>
                                                    <td colspan="5">12</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-nowrap" scope="row">Gutter width</th>
                                                    <td colspan="5">20px (10px on each side of a column)</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-nowrap" scope="row">Nestable</th>
                                                    <td colspan="5">Yes</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-nowrap" scope="row">Offsets</th>
                                                    <td colspan="5">Yes</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-nowrap" scope="row">Column ordering</th>
                                                    <td colspan="5">Yes</td>
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

        <?php include 'layouts/rightbar.php'; ?>
        <?php include 'layouts/footerScript.php'; ?>

        <?php include 'layouts/content-end.php'; ?>