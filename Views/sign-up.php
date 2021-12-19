<?php include_once '../Database/config.php' ?>
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Request Form</title>
       <!--  CSS link Start  -->
       <?php
       include_once 'Header.php';
       session_start();
       ?>
       <!--  CSS link End  -->
   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
        <!-- Sign in Start -->
          <div class="iq-card-body">
              <p style="font-size: 25px; color: #0b0b0b">Crime Related Investigation Cooperation Request Form:-</p>
          </div>
          <form class ="validate" action="../Database/insert.php" method="post">
              <div class="col-lg-12">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                      <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                              <p style="font-size: 25px; color: grey" class="card-title">Requesting Police Officer Details:</p>
                          </div>
                      </div>
                      <div class="iq-card-body">
                         <div class="form-row">
                              <div class="col-md-6 mb-3 name alphaOnly">
                                  <label for="fname">First name:-</label>
                                  <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First name">
                                  <div class="invalid-feedback">
                                      please enter first name
                                  </div>
                              </div>
                              <div class="col-md-6 mb-3 name numOnly">
                                  <label for="rank">Rank:-</label>
                                  <input type="text" class="form-control" id="rank" name="rank" placeholder="Enter the Rank">
                                  <div class="invalid-feedback">
                                      Please enter rank
                                  </div>
                              </div>
                              <div class="col-md-6 mb-3 name alphaOnly">
                                  <label for="dept">Department/organization:-</label>
                                  <input type="text" class="form-control" id="dept" name="dept" placeholder="Enter the Department">
                                  <div class="invalid-feedback">
                                      please enter Department/organization.
                                  </div>
                              </div>
                              <div class="col-md-6 mb-3 number numOnly">
                                  <label for="mno">Mobile Number:-</label>
                                  <input type="text" class="form-control" id="mno" name="mno" placeholder="Enter the Mobile number">
                                  <div class="invalid-feedback">
                                      Please enter mobile number.
                                  </div>
                              </div>
                              <div class="col-md-6 mb-3 email emailOnly">
                                  <label for="email">Email:-</label>
                                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter the email">
                                  <div class="invalid-feedback">
                                      Please provide a valid email.
                                  </div>
                              </div>
                              <div class="col-md-6 mb-3 name numOnly">
                                  <label for="lno">Official Landline No:-</label>
                                  <input type="text" class="form-control" id="lno" name="lno" placeholder="Enter the official landline no">
                                  <div class="invalid-feedback">
                                      Please Enter official Landline No.
                                  </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                  <label for="stat">State</label>
                                  <select class="form-control" id="stat" name="stat">
                                      <?php
                                          $query = mysqli_query($conn,"SELECT * FROM states");
                                          while($row=mysqli_fetch_array($query)) {
                                            echo "<option value='" . $row['id'] . "'>" . $row['state'] .'</option>';
                                          }
                                      ?>
                                  </select>
                                  <div class="invalid-feedback">
                                      Please select a valid state.
                                  </div>
                              </div>
                              <div class="col-md-6 mb-3 name alphaOnly">
                                  <label for="dist">District</label>
                                  <input type="text" class="form-control" id="dist" name="dist" placeholder="Enter the District">
                                  <div class="invalid-feedback">
                                      Please Enter District
                                  </div>
                              </div>
                              <div class="col-md-6 mb-3 name alphaOnly">
                                  <label for="policestat">Police Station:-</label>
                                  <input type="text" class="form-control" id="policestat" name="policestat" placeholder="Enter the police station">
                                  <div class="invalid-feedback">
                                      Please Enter police station.
                                  </div>
                              </div>
                         </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-12">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                      <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                              <p style="font-size: 25px; color: grey" class="card-title">Details/Consent of the Supervising SP:</p>
                          </div>
                      </div>
                      <div class="iq-card-body">
                          <div class="form-row">
                                  <div class="col-md-6 mb-3 name alphaOnly">
                                      <label for="sname">Name of supervising SP:-</label>
                                      <input type="text" class="form-control" id="sname" name="sname" placeholder="Enter the name of supervising">
                                      <div class="invalid-feedback">
                                          Please enter name of supervising sp
                                      </div>
                                  </div>
                                  <div class="col-md-6 mb-3 name numOnly">
                                      <label for="slno">Supervising SP's official Landline No:-</label>
                                      <input type="text"class="form-control" id="slno" name="slno" placeholder="Enter the SP's official Landline No ">
                                      <div class="invalid-feedback">
                                          Please enter supervising sp's official landline no
                                      </div>
                                  </div>
                                  <div class="col-md-6 mb-3 email emailOnly">
                                      <label for="semail">Supervising SP's official Email Id:-</label>
                                      <input type="email" class="form-control" id="semail" name="semail" placeholder="Enter the SP's official Email Id ">
                                      <div class="invalid-feedback">
                                          Please enter supervising sp's official email id
                                      </div>
                                  </div>
                                  <div class="col-md-6 mb-3">
                                      <label for="sp">whether the supervising SP is endorsing the request:-</label>
                                      <select class="form-control" id="sp" name="sp">
                                      <?php
                                          $query = mysqli_query($conn,"SELECT * FROM supervising");
                                          while($row=mysqli_fetch_array($query)) {
                                              echo "<option value='" . $row['id'] . "'>".$row['sp'] . '</option>';
                                          }
                                      ?>
                                      </select>
                                      <div class="invalid-feedback">
                                          Please select a valid sp.
                                      </div>
                                  </div>
                            </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-12">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                      <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                              <p style="font-size: 25px; color: grey" class="card-title">Details of the Request:</p>
                          </div>
                      </div>
                      <div class="iq-card-body">
                          <div class="form-row">
                                  <div class="col-md-6 mb-3 name">
                                      <label for="firno">Fir No./Year:-</label>
                                      <input type="text" class="form-control" id="firno" name="firno" placeholder="Enter Fir No./Year">
                                      <div class="invalid-feedback">
                                          Please enter fir no and year
                                      </div>
                                  </div>
                                  <div class="col-md-6 mb-3 name alphaOnly">
                                      <label for="district">District:-</label>
                                      <input type="text" class="form-control" id="district" name="district" placeholder="Enter the District">
                                      <div class="invalid-feedback">
                                          Please enter district
                                      </div>
                                  </div>
                                  <div class="col-md-6 mb-3 name alphaOnly">
                                      <label for="polices">police station:-</label>
                                      <input type="text" class="form-control" id="polices" name="polices" placeholder="Enter the police station">
                                      <div class="invalid-feedback">
                                          Please enter police station.
                                      </div>
                                  </div>
                                  <div class="col-md-6 mb-3">
                                      <label for="upload">Detail of relevant document, if any<br>
                                          Add a new file:-
                                      </label>
                                      <input type="file" class="upload-button btn " id="upload" name="upload">
                                      <div class="invalid-feedback">
                                          Please enter document.
                                      </div>
                                  </div>
                                  <div class="col-md-6 mb-3 text alphaOnly">
                                      <label for="gist">Gist of FIR for which the Investigation cooperation request sought:-</label>
                                      <textarea class="form-control" id="gist" name="gist" placeholder="Enter request sought" rows="3" style="height: 80px;"></textarea>
                                      <div class="invalid-feedback">
                                          Please enter request.
                                      </div>
                                  </div>
                                  <div class="col-md-6 mb-3 text alphaOnly">
                                      <label for="invest">Investigation cooperation request details:-</label>
                                      <textarea class="form-control" id="invest" name="invest" placeholder="Enter detail" rows="3" style="height: 80px; " ></textarea>
                                      <div class="invalid-feedback">
                                          Please enter a request details.
                                      </div>
                                  </div>
                                  <div class="col-md-6 mb-3">
                                      <label for="city">Request relates to which district of surat City ? (if it is possible to say that):-</label>
                                      <select class="form-control" id="city" name="city">
                                      <?php
                                          $query = mysqli_query($conn,"SELECT * FROM cityrequest");
                                          while($row=mysqli_fetch_array($query)) {
                                              echo "<option value='" . $row['id'] . "'>" . $row['city'] . '</option>';
                                          }
                                      ?>
                                      </select>
                                      <div class="invalid-feedback">
                                          Please select a valid city.
                                      </div>
                                  </div>
                                  <div class="col-md-6 mb-3 name">
                                      <img src="../Asserts/images/page-img/captcha1.png" alt="post-image" class="img-fluid rounded">
                                      <label for="code">&nbsp;&nbsp;What code is in the image?
                                          <input type="text" class="form-control col-md-12"  id="code" name="code" placeholder="Enter code" >
                                      </label>
                                      <div class="invalid-feedback">
                                          Please enter image code.
                                      </div>
                                  </div>
                            </div>
                            <div class="" align="right">
                                <a href="../index.php" class="btn btn-primary btn rounded" >Home</a>
                                <button class="btn btn-primary btn rounded" id="submit" type="submit" name="insert">Submit form</button>
                            </div>
                    </div>
                </div>
              </div>
      </form>

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