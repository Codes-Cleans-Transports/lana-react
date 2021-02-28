<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Invoice | Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
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
                                <h4 class="font-size-18">Invoice</h4>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Veltrix</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Extra Pages</a></li>
                                    <li class="breadcrumb-item active">Invoice</li>
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

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="invoice-title">
                                                <h4 class="float-right font-size-16"><strong>Order # 12345</strong></h4>
                                                <h3 class="mt-0">
                                                    <img src="public/images/logo-sm.png" alt="logo" height="24" />
                                                </h3>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-6">
                                                    <address>
                                                        <strong>Billed To:</strong><br>
                                                        John Smith<br>
                                                        1234 Main<br>
                                                        Apt. 4B<br>
                                                        Springfield, ST 54321
                                                    </address>
                                                </div>
                                                <div class="col-6 text-right">
                                                    <address>
                                                        <strong>Shipped To:</strong><br>
                                                        Kenny Rigdon<br>
                                                        1234 Main<br>
                                                        Apt. 4B<br>
                                                        Springfield, ST 54321
                                                    </address>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 mt-4">
                                                    <address>
                                                        <strong>Payment Method:</strong><br>
                                                        Visa ending **** 4242<br>
                                                        jsmith@email.com
                                                    </address>
                                                </div>
                                                <div class="col-6 mt-4 text-right">
                                                    <address>
                                                        <strong>Order Date:</strong><br>
                                                        January 16, 2019<br><br>
                                                    </address>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div>
                                                <div class="p-2">
                                                    <h3 class="font-size-16"><strong>Order summary</strong></h3>
                                                </div>
                                                <div class="">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <td><strong>Item</strong></td>
                                                                    <td class="text-center"><strong>Price</strong></td>
                                                                    <td class="text-center"><strong>Quantity</strong>
                                                                    </td>
                                                                    <td class="text-right"><strong>Totals</strong></td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                                                <tr>
                                                                    <td>BS-200</td>
                                                                    <td class="text-center">$10.99</td>
                                                                    <td class="text-center">1</td>
                                                                    <td class="text-right">$10.99</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>BS-400</td>
                                                                    <td class="text-center">$20.00</td>
                                                                    <td class="text-center">3</td>
                                                                    <td class="text-right">$60.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>BS-1000</td>
                                                                    <td class="text-center">$600.00</td>
                                                                    <td class="text-center">1</td>
                                                                    <td class="text-right">$600.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="thick-line"></td>
                                                                    <td class="thick-line"></td>
                                                                    <td class="thick-line text-center">
                                                                        <strong>Subtotal</strong></td>
                                                                    <td class="thick-line text-right">$670.99</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line text-center">
                                                                        <strong>Shipping</strong></td>
                                                                    <td class="no-line text-right">$15</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line text-center">
                                                                        <strong>Total</strong></td>
                                                                    <td class="no-line text-right">
                                                                        <h4 class="m-0">$685.99</h4>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="d-print-none">
                                                        <div class="float-right">
                                                            <a href="javascript:window.print()"
                                                                class="btn btn-success waves-effect waves-light"><i
                                                                    class="fa fa-print"></i></a>
                                                            <a href="#"
                                                                class="btn btn-primary waves-effect waves-light">Send</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div> <!-- end row -->

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
    <?php include "layouts/content-end.php"; ?>