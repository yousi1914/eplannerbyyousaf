<?php    session_start(); ?>

  <!-- For Header  -->
  <?php include 'header.php' ?>

    <!-- for  sidebar 0 -->

    <?php include'sidebar.php' ?>
    <div id="content-wrapper">
      <div class="container">
    <!-- Body  -->

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <?php include'breadcrumb.php'?>

          <!-- Add Business Form-->
           <div class="row">
            <div class="col-lg-2 col-md-2"></div>
            <div class="col-lg-8 col-md-8 col-sm-12">
              <!-- Add Business Form Sarts -->
              <form method="POST" action="AddBusinessAction.php">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                      <div class="form-label-group">
                        <input type="text" id="businessname" class="form-control" placeholder="business name" name="b_name" required="required" autofocus="autofocus">
                        <label for="businessname"><i class="fas fa-user-tie"></i> Buisness Name</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                      <div class="form-label-group">
                        <input type="text" id="city" class="form-control" placeholder="City" name="city" required="required" autofocus="autofocus">
                        <label for="city"><i class="fas fa-university"></i> City </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <div class="form-label-group">
                          <input type="text" id="area" class="form-control" placeholder="Area" name="area" required="required" autofocus="autofocus">
                          <label for="area"><i class="fas fa-map-marker-alt"></i> Area</label>
                         </div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <div class="form-label-group">
                          <input type="text" id="location" class="form-control" placeholder="Location" name="blocation" required="required" autofocus="autofocus">
                          <label for="location"><i class="fas fa-location-arrow"></i> Location</label>
                         </div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <div class="form-label-group">
                          <input type="number" id="bcontact" class="form-control" placeholder="name" name="bcontact" required="required" autofocus="autofocus">
                          <label for="bcontact"><i class="fas fa-phone"></i> Business Contact</label>
                         </div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                          <div class="form-label-group">
                            <input type="text" id="bookingcharges" class="form-control" placeholder="bookingcharges" name="bookingFees" required="required" autofocus="autofocus">
                            <label for="bookingcharges"><i class="fas fa-money-check-alt"></i> Booking Fees</label>
                           </div>
                        </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                      <div class="form-label-group">
                        <select class="form-control" name="services[]" id="sel1">
                          <option>**Services**</option>
                          <option>Party</option>
                          <option>Marriage </option>
                          <option>Seminar</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <div class="form-label-group">
                          <input type="text" id="opendays" class="form-control" placeholder="opendays" name="openDays" required="required" autofocus="autofocus">
                          <label for="opendays"><i class="far fa-calendar"></i> Open Days</label>
                         </div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <div class="form-label-group">
                          <input type="text" id="bstatus" class="form-control" placeholder="services" name="bstatus" required="required" autofocus="autofocus">
                          <label for="bstatus"><i class="fab fa-sellcast"></i> Business Status</label>
                         </div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-4 col-sm-12">
                    <div class="form-group">
                      <div class="form-label-group">
                        <input type="text" id="paid" class="form-control" placeholder="paid" name="Paid" required="required" autofocus="autofocus">
                        <label for="paid"><i class="fas fa-images"></i> Paid</label>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-4 col-sm-12">
                    <div class="form-group">
                      <div class="form-label-group">
                        <input type="file" id="paid" class="form-control" placeholder="paid" name="bimages[]" multiple="" required="required" autofocus="autofocus">
                        <label for="paid"><i class="fas fa-images"></i> Business Images</label>
                        </div>
                    </div>
                  </div>
                  
                  <div class="col-lg-6 col-md-4 col-sm-12">
                    <button type="submit" name="business" class="btn btn-primary btn-lg">Submit
                    </button>
                  </div>`
                </div>
              </form>
              <!-- Add Buisness Close -->
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12"></div>
          </div>
          


        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright ©  assort tech Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      
    </div>
     <!--/#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>