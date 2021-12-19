<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vito - Registration</title>
    <!--  CSS link Start  -->
    <?php
    include_once 'Header.php';
    session_start();
    ?>
    <!--  CSS link End  -->
</head>

<body>
<div class="container">
    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto form p-2 mt-5">
        <!--  Alert Start  -->
        <?php include_once '../Asserts/components/alerts.php'?>
        <!--  Alert End -->
        <div class="iq-card-body font-weight-bold">
            <p style="text-align: center; font-size: 35px; color: #0b0b0b">Registration</p>
            <form action="../Database/loginPostMethod.php" class="validate" method="POST">
                <div class="row g-2">
                    <div class="col-md-6 mb-3 name alphaOnly">
                        <label for="firstname" class="form-label">First name : </label>
                        <input type="text" class="form-control" name="firstname">
                        <div class="invalid-feedback">
                            Please enter a firstname!
                        </div>
                    </div>
                    <div class="col-md-6 mb-3 name alphaOnly">
                        <label for="lastname" class="form-label">Last Name : </label>
                        <input type="text" class="form-control" name="lastname">
                        <div class="invalid-feedback">
                            Please enter a lastname!
                        </div>
                    </div>
                    <div class="col-md-12 mb-3 name">
                        <label for="username" class="form-label">Username : </label>
                        <input type="text" class="form-control" name="username">
                        <div class="invalid-feedback">
                            Please enter a username!
                        </div>
                    </div>
                    <div class="col-md-12 mb-4 password">
                        <label for="password" class="form-label">Password : </label>
                        <input type="password" class="form-control" name="password">
                        <div class="invalid-feedback">
                            Password must contains at least 8 characters!
                        </div>
                    </div>
                    <div class="col-md-12 mb-4" align="right">
                        <button class="btn btn-primary" id="submit" name="register" type="submit">Register</button>
                    </div>
                    <div class="col-md-12 mb-4">
                        <a href="../index.php">
                            Already have an Account? Login
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../Asserts/js/jquery.min.js"></script>
<script src="../Asserts/js/popper.min.js"></script>
<script src="../Asserts/js/bootstrap.min.js"></script>
<!-- manual Javascript -->
<script src="../Asserts/js/index.js"></script>
<!-- Validation Javascript -->
<script src="../Asserts/js/validation.js"></script>
<!-- datatable JS-->
<script src="../Asserts/js/datatables.min.js"></script>
<!-- Appear JavaScript -->
<script src="../Asserts/js/jquery.appear.js"></script>
<!-- Countdown JavaScript -->
<script src="../Asserts/js/countdown.min.js"></script>
<!-- Counterup JavaScript -->
<script src="../Asserts/js/waypoints.min.js"></script>
<script src="../Asserts/js/jquery.counterup.min.js"></script>
<!-- Wow JavaScript -->
<script src="../Asserts/js/wow.min.js"></script>
<!-- Apexcharts JavaScript -->
<script src="../Asserts/js/apexcharts.js"></script>
<!-- Slick JavaScript -->
<script src="../Asserts/js/slick.min.js"></script>
<!-- Select2 JavaScript -->
<script src="../Asserts/js/select2.min.js"></script>
<!-- Owl Carousel JavaScript -->
<script src="../Asserts/js/owl.carousel.min.js"></script>
<!-- Magnific Popup JavaScript -->
<script src="../Asserts/js/jquery.magnific-popup.min.js"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="../Asserts/js/smooth-scrollbar.js"></script>
<!-- lottie JavaScript -->
<script src="../Asserts/js/lottie.js"></script>
<!-- am core JavaScript -->
<script src="../Asserts/js/core.js"></script>
<!-- am charts JavaScript -->
<script src="../Asserts/js/charts.js"></script>
<!-- am animated JavaScript -->
<script src="../Asserts/js/animated.js"></script>
<!-- am kelly JavaScript -->
<script src="../Asserts/js/kelly.js"></script>
<!-- am maps JavaScript -->
<script src="../Asserts/js/maps.js"></script>
<!-- am worldLow JavaScript -->
<script src="../Asserts/js/worldLow.js"></script>
<!-- Chart Custom JavaScript -->
<script src="../Asserts/js/chart-custom.js"></script>
<!-- Custom JavaScript -->
<script src="../Asserts/js/custom.js"></script>

</body>
</html>