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

          <!-- Profile Form-->
          <div class="card card-login mx-auto mt-5">
            <div class="card-body">
              <form method="POST" action="ProfileAction.php">
                <div class="form-group">
                  <div class="form-label-group">
                    <input type="text" id="name" class="form-control" placeholder="name" name="name" required="required" autofocus="autofocus">
                    <label for="name"><i class="fas fa-users"></i> Name</label>
                   </div>
                </div>
                <div class="form-group">
                  <div class="form-label-group">
                    <span class="input-group-addon"></span>
                    <input type="number" id="contact" class="form-control" placeholder="area" name="contact" required="required">
                    <label for="contact"><i class="fas fa-file-contract"></i> Contact</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-label-group">
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required="required">
                    <label for="inputEmail"><i class="far fa-envelope"></i> Email</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required="required">
                    <label for="inputPassword"><i class="fas fa-lock"></i> Password</label>
                    
                  </div>
                </div>
                <button type="submit" name="Profile" class="btn btn-success btn-block">Update</button>
              </form>
            </div>
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