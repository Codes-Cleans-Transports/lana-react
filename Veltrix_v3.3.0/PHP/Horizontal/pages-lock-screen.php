<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>lock Screen | Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
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
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-primary">
                            <div class="text-primary text-center p-4">
                                <h5 class="text-white font-size-20">Locked</h5>
                                <p class="text-white-50">Hello Smith, enter your password to unlock the screen!</p>
                                <a href="index.php" class="logo logo-admin">
                                    <img src="public/images/logo-sm.png" height="24" alt="logo">
                                </a>
                            </div>
                        </div>

                        <div class="card-body p-4">
                            <div class="p-3">
                                <form class="form-horizontal mt-4" action="index.php">

                                    <div class="pt-3 text-center">
                                        <img src="public/images/users/user-6.jpg" class="rounded-circle img-thumbnail avatar-lg" alt="thumbnail">
                                        <h6 class="font-size-16 mt-3">Robert Smith</h6>
                                    </div>

                                    <div class="form-group">
                                        <label for="userpassword">Password</label>
                                        <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-12 text-right">
                                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Unlock</button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>

                    <div class="mt-5 text-center">
                        <p>Not you ? return <a href="pages-login.php" class="font-weight-medium text-primary"> Sign In
                            </a> </p>
                        <p class="mb-0">© <script>
                                document.write(new Date().getFullYear())
                            </script> Veltrix. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <?php include 'layouts/footerScript.php'; ?>
    <?php include "layouts/content-end.php"; ?>