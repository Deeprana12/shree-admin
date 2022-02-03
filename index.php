<?php  session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vito - Responsive Bootstrap 4 Admin Dashboard Template</title>
    <!--  CSS link Start  -->
    <!-- Favicon -->
    <link rel="shortcut icon" href="Asserts/images/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Asserts/css/bootstrap.min.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="Asserts/css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="Asserts/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="Asserts/css/responsive.css">
    <!-- Datatable CSS-->
    <link rel="stylesheet" href="Asserts/css/datatables.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="Asserts/css/fontawesome.css">
    <!--  CSS link End  -->
</head>
<body>

<div class="container">

    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto form p-2 mt-5">
        <!--  Alert Start -->
        <?php include_once 'Asserts/components/alerts.php' ?>
        <!--  Alert End -->

        <div class="iq-card-body font-weight-bold">
            <p style="text-align: center; font-size: 35px; color: #0b0b0b">Login</p>
            <form action="Database/loginPostMethod.php" class="validate" method="POST">

                <div class="row">
                    <div class="col-md-12 mb-3 name">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username">
                        <div class="invalid-feedback">
                            Please enter a username!
                        </div>
                    </div>

                    <div class="col-md-12 mb-4 name">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                        <div class="invalid-feedback">
                            Please enter a Password!
                        </div>
                    </div>

                    <div class="col-md-12 mb-4" align="right">
                        <!-- <a href="Views/sign-up.php" class="btn btn-primary" >Crime Registration Form</a> -->
                        <button class="btn btn-primary" id="submit" name="login" type="submit">Login</button>
                    </div>

                    <div class="col-md-12 mb-4">
                        <a href="Views/register.php">
                            Don't have an Account? Register
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="Asserts/js/jquery.min.js"></script>
<script src="Asserts/js/popper.min.js"></script>
<script src="Asserts/js/bootstrap.min.js"></script>
<!-- manual Javascript -->
<script src="Asserts/js/index.js"></script>
<!-- Validation Javascript -->
<script src="Asserts/js/validation.js"></script>
<!-- datatable JS-->
<script src="Asserts/js/datatables.min.js"></script>
<!-- Appear JavaScript -->
<script src="Asserts/js/jquery.appear.js"></script>
<!-- Countdown JavaScript -->
<script src="Asserts/js/countdown.min.js"></script>
<!-- Counterup JavaScript -->
<script src="Asserts/js/waypoints.min.js"></script>
<script src="Asserts/js/jquery.counterup.min.js"></script>
<!-- Wow JavaScript -->
<script src="Asserts/js/wow.min.js"></script>
<!-- Apexcharts JavaScript -->
<script src="Asserts/js/apexcharts.js"></script>
<!-- Slick JavaScript -->
<script src="Asserts/js/slick.min.js"></script>
<!-- Select2 JavaScript -->
<script src="Asserts/js/select2.min.js"></script>
<!-- Owl Carousel JavaScript -->
<script src="Asserts/js/owl.carousel.min.js"></script>
<!-- Magnific Popup JavaScript -->
<script src="Asserts/js/jquery.magnific-popup.min.js"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="Asserts/js/smooth-scrollbar.js"></script>
<!-- lottie JavaScript -->
<script src="Asserts/js/lottie.js"></script>
<!-- am core JavaScript -->
<script src="Asserts/js/core.js"></script>
<!-- am charts JavaScript -->
<script src="Asserts/js/charts.js"></script>
<!-- am animated JavaScript -->
<script src="Asserts/js/animated.js"></script>
<!-- am kelly JavaScript -->
<script src="Asserts/js/kelly.js"></script>
<!-- am maps JavaScript -->
<script src="Asserts/js/maps.js"></script>
<!-- am worldLow JavaScript -->
<script src="Asserts/js/worldLow.js"></script>
<!-- Chart Custom JavaScript -->
<script src="Asserts/js/chart-custom.js"></script>
<!-- Custom JavaScript -->
<script src="Asserts/js/custom.js"></script>
</body>
</html>