<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Email Compose | Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="public/images/favicon.ico">

    <!-- Summernote css -->
    <link href="public/libs/summernote/summernote.min.css" rel="stylesheet" type="text/css" />

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
                            <h4 class="font-size-18">Email Compose</h4>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Veltrix</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Email</a></li>
                                <li class="breadcrumb-item active">Email Compose</li>
                            </ol>
                        </div>
                    </div>


                    <?php include 'layouts/settingButton.php'; ?>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <!-- Left sidebar -->
                        <div class="email-leftbar card">
                            <a href="email-compose.php" class="btn btn-danger rounded btn-custom btn-block waves-effect waves-light">Compose</a>

                            <div class="mail-list mt-4">
                                <a href="#" class="active">Inbox <span class="ml-1">(18)</span></a>
                                <a href="#">Starred</a>
                                <a href="#">Important</a>
                                <a href="#">Draft</a>
                                <a href="#">Sent Mail</a>
                                <a href="#">Trash</a>
                            </div>


                            <h5 class="mt-4">Labels</h5>

                            <div class="mail-list mt-4">
                                <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-info float-right"></span>Theme
                                    Support</a>
                                <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-warning float-right"></span>Freelance</a>
                                <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-primary float-right"></span>Social</a>
                                <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-danger float-right"></span>Friends</a>
                                <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-success float-right"></span>Family</a>
                            </div>

                            <h5 class="mt-4">Chat</h6>

                                <div class="mt-4">
                                    <a href="#" class="media">
                                        <img class="d-flex mr-3 rounded-circle" src="public/images/users/user-2.jpg" alt="Generic placeholder image" height="36">
                                        <div class="media-body chat-user-box">
                                            <p class="user-title m-0">Scott Median</p>
                                            <p class="text-muted">Hello</p>
                                        </div>
                                    </a>

                                    <a href="#" class="media">
                                        <img class="d-flex mr-3 rounded-circle" src="public/images/users/user-3.jpg" alt="Generic placeholder image" height="36">
                                        <div class="media-body chat-user-box">
                                            <p class="user-title m-0">Julian Rosa</p>
                                            <p class="text-muted">What about our next..</p>
                                        </div>
                                    </a>

                                    <a href="#" class="media">
                                        <img class="d-flex mr-3 rounded-circle" src="public/images/users/user-4.jpg" alt="Generic placeholder image" height="36">
                                        <div class="media-body chat-user-box">
                                            <p class="user-title m-0">David Medina</p>
                                            <p class="text-muted">Yeah everything is fine</p>
                                        </div>
                                    </a>

                                    <a href="#" class="media">
                                        <img class="d-flex mr-3 rounded-circle" src="public/images/users/user-6.jpg" alt="Generic placeholder image" height="36">
                                        <div class="media-body chat-user-box">
                                            <p class="user-title m-0">Jay Baker</p>
                                            <p class="text-muted">Wow that's great</p>
                                        </div>
                                    </a>

                                </div>
                        </div>
                        <!-- End Left sidebar -->


                        <!-- Right Sidebar -->
                        <div class="email-rightbar mb-3">

                            <div class="card">
                                <div class="card-body">

                                    <form>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="To">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Subject">
                                        </div>
                                        <div class="form-group">
                                            <div class="summernote">
                                                <h6>Hello Summer note</h6>
                                                <ul>
                                                    <li>
                                                        Select a text to reveal the toolbar.
                                                    </li>
                                                    <li>
                                                        Edit rich document on-the-fly, so elastic!
                                                    </li>
                                                </ul>
                                                <p>
                                                    End of air-mode area
                                                </p>

                                            </div>
                                        </div>

                                        <div class="btn-toolbar form-group mb-0">
                                            <div class="">
                                                <button type="button" class="btn btn-success waves-effect waves-light mr-1"><i class="far fa-save"></i></button>
                                                <button type="button" class="btn btn-success waves-effect waves-light mr-1"><i class="far fa-trash-alt"></i></button>
                                                <button class="btn btn-primary waves-effect waves-light">
                                                    <span>Send</span> <i class="fab fa-telegram-plane ml-1"></i>
                                                </button>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div> <!-- end Col-9 -->
                    </div>
                </div><!-- End row -->
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

<!-- Summernote js -->
<script src="public/libs/summernote/summernote-bs4.min.js"></script>

<!-- email summernote init -->
<script src="public/js/pages/email-summernote.init.js"></script>

<?php include "layouts/content-end.php"; ?>