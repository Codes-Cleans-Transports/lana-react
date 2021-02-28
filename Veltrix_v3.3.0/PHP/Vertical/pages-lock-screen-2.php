<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>lock Screen 2 | Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="public/images/favicon.ico">

    <?php include 'layouts/headerStyle.php'; ?>

</head>

<body class="account-pages">

    <!-- Begin page -->
    <div class="accountbg"
        style="background: url('public/images/bg.jpg');background-size: cover;background-position: center;"></div>

    <div class="wrapper-page account-page-full">

        <div class="card shadow-none">
            <div class="card-block">

                <div class="account-box">

                    <div class="card-box shadow-none p-4">
                        <div class="p-2">
                            <div class="text-center mt-4">
                                <a href="index.php"><img src="public/images/logo-dark.png" height="22" alt="logo"></a>
                            </div>

                            <h4 class="font-size-18 mt-5 text-center">Locked</h4>
                            <p class="text-muted text-center">Hello Smith, enter your password to unlock the screen!</p>

                            <form class="mt-4" action="#">

                                <div class="pt-3 text-center">
                                    <img src="public/images/users/user-6.jpg"
                                        class="rounded-circle img-thumbnail avatar-lg" alt="thumbnail">
                                    <h6 class="font-size-16 mt-3">Robert Smith</h6>
                                </div>

                                <div class="form-group">
                                    <label for="userpassword">Password</label>
                                    <input type="password" class="form-control" id="userpassword"
                                        placeholder="Enter password">
                                </div>

                                <div class="form-group row">
                                    <div class="col-12 text-right">
                                        <button class="btn btn-primary w-md waves-effect waves-light"
                                            type="submit">Unlock</button>
                                    </div>
                                </div>


                            </form>

                            <div class="mt-5 pt-4 text-center">
                                <p>Not you ? return <a href="pages-login-2.php" class="font-weight-medium text-primary">
                                        Sign In </a> </p>
                                <p>© <script>
                                    document.write(new Date().getFullYear())
                                    </script> Veltrix. Crafted with <i class="mdi mdi-heart text-danger"></i> by
                                    Themesbrand</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'layouts/footerScript.php'; ?>
    <?php include "layouts/content-end.php"; ?>