<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Modal | Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
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
                                <h4 class="font-size-18">Modal</h4>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Veltrix</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                                    <li class="breadcrumb-item active">Modal</li>
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

                                    <h4 class="card-title">Modals Examples</h4>
                                    <p class="card-title-desc">Modals are streamlined, but flexible
                                        dialog prompts powered by JavaScript. They support a number of use cases
                                        from user notification to completely custom content and feature a
                                        handful of helpful subcomponents, sizes, and more.</p>

                                    <div class="modal bs-example-modal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title mt-0">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>One fine body&hellip;</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->


                                    <div class="row">

                                        <div class="col-sm-6 col-md-3 mt-4">
                                            <div class=" text-center">
                                                <p class="text-muted">Standard Modal</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light"
                                                    data-toggle="modal" data-target="#myModal">Standard Modal</button>
                                            </div>

                                            <!-- sample modal content -->
                                            <div id="myModal" class="modal fade" tabindex="-1" role="dialog"
                                                aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title mt-0" id="myModalLabel">Modal Heading
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Overflowing text to show scroll behavior</h5>
                                                            <p>Cras mattis consectetur purus sit amet fermentum.
                                                                Cras justo odio, dapibus ac facilisis in,
                                                                egestas eget quam. Morbi leo risus, porta ac
                                                                consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque
                                                                nisl consectetur et. Vivamus sagittis lacus vel
                                                                augue laoreet rutrum faucibus dolor auctor.</p>
                                                            <p>Aenean lacinia bibendum nulla sed consectetur.
                                                                Praesent commodo cursus magna, vel scelerisque
                                                                nisl consectetur et. Donec sed odio dui. Donec
                                                                ullamcorper nulla non metus auctor
                                                                fringilla.</p>
                                                            <p>Cras mattis consectetur purus sit amet fermentum.
                                                                Cras justo odio, dapibus ac facilisis in,
                                                                egestas eget quam. Morbi leo risus, porta ac
                                                                consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque
                                                                nisl consectetur et. Vivamus sagittis lacus vel
                                                                augue laoreet rutrum faucibus dolor auctor.</p>
                                                            <p>Aenean lacinia bibendum nulla sed consectetur.
                                                                Praesent commodo cursus magna, vel scelerisque
                                                                nisl consectetur et. Donec sed odio dui. Donec
                                                                ullamcorper nulla non metus auctor
                                                                fringilla.</p>
                                                            <p>Cras mattis consectetur purus sit amet fermentum.
                                                                Cras justo odio, dapibus ac facilisis in,
                                                                egestas eget quam. Morbi leo risus, porta ac
                                                                consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque
                                                                nisl consectetur et. Vivamus sagittis lacus vel
                                                                augue laoreet rutrum faucibus dolor auctor.</p>
                                                            <p>Aenean lacinia bibendum nulla sed consectetur.
                                                                Praesent commodo cursus magna, vel scelerisque
                                                                nisl consectetur et. Donec sed odio dui. Donec
                                                                ullamcorper nulla non metus auctor
                                                                fringilla.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary waves-effect"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="button"
                                                                class="btn btn-primary waves-effect waves-light">Save
                                                                changes</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                        </div>

                                        <div class="col-sm-6 col-md-3 mt-4">
                                            <div class="text-center">
                                                <p class="text-muted">Large modal</p>
                                                <!-- Large modal -->
                                                <button type="button" class="btn btn-primary waves-effect waves-light"
                                                    data-toggle="modal" data-target=".bs-example-modal-lg">Large
                                                    modal</button>
                                            </div>


                                            <!--  Modal content for the above example -->
                                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">Large
                                                                modal</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Cras mattis consectetur purus sit amet fermentum.
                                                                Cras justo odio, dapibus ac facilisis in,
                                                                egestas eget quam. Morbi leo risus, porta ac
                                                                consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque
                                                                nisl consectetur et. Vivamus sagittis lacus vel
                                                                augue laoreet rutrum faucibus dolor auctor.</p>
                                                            <p class="mb-0">Aenean lacinia bibendum nulla sed
                                                                consectetur.
                                                                Praesent commodo cursus magna, vel scelerisque
                                                                nisl consectetur et. Donec sed odio dui. Donec
                                                                ullamcorper nulla non metus auctor
                                                                fringilla.</p>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                        </div>

                                        <div class="col-sm-6 col-md-3 mt-4">
                                            <div class="text-center">
                                                <p class="text-muted">Small modal</p>
                                                <!-- Small modal -->
                                                <button type="button" class="btn btn-primary waves-effect waves-light"
                                                    data-toggle="modal" data-target=".bs-example-modal-sm">Small
                                                    modal</button>
                                            </div>

                                            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog"
                                                aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title mt-0" id="mySmallModalLabel">Small
                                                                modal</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Cras mattis consectetur purus sit amet fermentum.
                                                                Cras justo odio, dapibus ac facilisis in,
                                                                egestas eget quam. Morbi leo risus, porta ac
                                                                consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque
                                                                nisl consectetur et. Vivamus sagittis lacus vel
                                                                augue laoreet rutrum faucibus dolor auctor.</p>
                                                            <p class="mb-0">Aenean lacinia bibendum nulla sed
                                                                consectetur.
                                                                Praesent commodo cursus magna, vel scelerisque
                                                                nisl consectetur et. Donec sed odio dui. Donec
                                                                ullamcorper nulla non metus auctor
                                                                fringilla.</p>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                        </div>

                                        <div class="col-sm-6 col-md-3 mt-4">
                                            <div class="text-center">
                                                <p class="text-muted">Center modal</p>
                                                <!-- Small modal -->
                                                <button type="button" class="btn btn-primary waves-effect waves-light"
                                                    data-toggle="modal" data-target=".bs-example-modal-center">Center
                                                    modal</button>
                                            </div>

                                            <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
                                                aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title mt-0">Center modal</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Cras mattis consectetur purus sit amet fermentum.
                                                                Cras justo odio, dapibus ac facilisis in,
                                                                egestas eget quam. Morbi leo risus, porta ac
                                                                consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque
                                                                nisl consectetur et. Vivamus sagittis lacus vel
                                                                augue laoreet rutrum faucibus dolor auctor.</p>
                                                            <p class="mb-0">Aenean lacinia bibendum nulla sed
                                                                consectetur.
                                                                Praesent commodo cursus magna, vel scelerisque
                                                                nisl consectetur et. Donec sed odio dui. Donec
                                                                ullamcorper nulla non metus auctor
                                                                fringilla.</p>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                        </div>
                                    </div> <!-- end row -->
                                </div>
                            </div>
                        </div>
                    </div><!-- end row -->
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