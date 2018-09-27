<!-- Session -->
<?php session_start(); ?>
<!--  -->

<!-- For Header  -->
  <?php include 'header.php' ?>

    <!-- Side Bar-->
    <?php include'sidebar.php' ?>
    <!-- Body Start -->

      <div id="content-wrapper">
        <div class="container">
          <!-- Bread Crumb -->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Buisness Owner Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Create New Offers</li>
          </ol>
          <!-- Bread Crumb close -->
          <div class="row">
            <div class="col-lg-2 col-md-2"></div>
            <div class="col-lg-8 col-md-8 col-sm-12">
              <form method="POST" action="newofferAction.php">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                      <select class="form-control select" name="bid">
                        <?php
                        include "conn.php";
                        $uid = $_SESSION['user']['id'];
                         $b = mysqli_query($con, "SELECT * FROM `business` WHERE ownerId='$uid'");
                         while($ores = mysqli_fetch_assoc($b)){
                          ?>
                          <option value="<?php echo $ores['id'] ?>">
                            <?php echo $ores['bname'] ?>
                          </option>
                            <?php } ?>     
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                      <div class="form-label-group">
                        <input type="text" id="oname" class="form-control" placeholder="offer" name="oname" required="required" autofocus="autofocus">
                        <label for="oname"><i class="fas fa-user-tie"></i> Offer Name </label>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <div class="form-label-group">
                          <input type="text" id="description" class="form-control" placeholder="description" name="odesc" required="required" autofocus="autofocus">
                          <label for="description"><i class="fas fa-map-marker-alt"></i>Description</label>
                         </div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <div class="form-label-group">
                          <input type="date" id="startdate" class="form-control" placeholder="Start date" name="sdate" required="required" autofocus="autofocus">
                          <label for="startdate"><i class="far fa-calendar"></i> Starting Date</label>
                         </div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <div class="form-label-group">
                          <input type="date" id="enddate" class="form-control" placeholder="End date" name="edate" required="required" autofocus="autofocus">
                          <label for="enddate"><i class="far fa-calendar"></i> End date</label>
                         </div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <div class="form-label-group">
                          <input type="text" id="pOff" class="form-control" placeholder="pOff" name="poff" required="required" autofocus="autofocus">
                          <label for="pOff"><i class="fab fa-sellcast"></i> Percent Off</label>
                         </div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-4 col-sm-12">
                    <button type="submit" name="offer" class="btn btn-primary btn-lg ">Create</button>
                  </div>
                </div>
              </form>
              
            </div> 
          </div>
        </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

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
            <a class="btn btn-primary" href="login.html">Logout</a>
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

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
