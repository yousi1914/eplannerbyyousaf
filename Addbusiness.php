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
            <div class="col-xl-3 col-md-3"></div>
             <div class="col-xl-6 col-md-6">

                <div class="card card-login mx-auto mt-5">
                <div class="card-header">Add Business</div>
                <div class="card-body">
          <form method="post" action="AddBusinessAction.php" enctype="multipart/form-data">
                <div class="form-group">
                <div class="form-label-group">
                    <input type="text" id="inputName" class="form-control" placeholder="Name"  name="bname" required="required" autofocus="autofocus">
                    <label for="inputName"> Business Name</label>
                </div>
                </div>
            <div class="form-group">
            <div class="form-label-group">
                    <input type="text" id="inputCity" class="form-control" placeholder="City" name="bcity" required="required" autofocus="autofocus">
                    <label for="inputCity"> City</label>
            </div>
            </div>
            <div class="form-group">
            <div class="form-label-group">
                    <input type="text" id="inputArea" class="form-control" placeholder="Area" required="required" name="barea" autofocus="autofocus">
                    <label for="inputArea">Area</label>
                  </div>
                  </div>
                  <div class="form-group">
                  <div class="form-label-group">
                    <input type="text" id="inputLoction" class="form-control" placeholder="Location" required="required" name="blocation" autofocus="autofocus">
                    <label for="inputLocation"> Location</label>
                  </div>
                  </div>
                  <div class="form-group">
                  <div class="form-label-group">
                    <input type="number" id="inputContact" class="form-control" placeholder="Business Contact" required="required" name="bcontact" autofocus="autofocus">
                    <label for="inputContact">Business Contact</label>
                  </div>
                  </div>
                  <div class="form-group">
                  <div class="form-label-group">
                    <input type="number" id="inputCharges" class="form-control" placeholder="Booking Charges" required="required"  name="bookingFee" autofocus="autofocus">
                    <label for="inputCharges">Booking Fee</label>
                  </div>
                  </div>
                   <div class="form-group">  
                   <div class="form-label-group">              
                   <select class="form-control" name="opdays">
                        <option value="" disabled selected>Open Days</option>
                        <option>24/7</option>
                        <option>Saturday OFF</option>
                        <option>Sunday OFF</option>
                        <option>Saturday Sunday OFF</option>
                    </select>
                    </div>
                  </div>
                  <div class="form-group">
                  <div class="form-label-group">          
                      <select multiple="true" class="form-control select" name="services[]">
                          <option value="" disabled selected>Services</option>
                          <option>Marriage</option>
                          <option>Party</option>
                          <option>Political Meeting</option>
                          <option>Seminars</option>
                          <option>Sports</option>
                      </select>
                    </div>
                  </div>
                 

                  
                 <div class="form-group">
                  <div class="control-label"> 
                     <input type="file" class="fileinput btn-primary" name="bimages[]" id="filename" title="Browse file" multiple="" />
                  </div> 
                </div>
                  <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                  
          </form>
         </div>
      </div>
      </div>
      <div class="col-xl-3 col-md-3"></div>
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