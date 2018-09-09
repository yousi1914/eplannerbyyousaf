<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Buisness</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="dashboard.php">Eplanner </a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Pending Approval </a>
            <a class="dropdown-item" href="#">Ali ahmad booked your Hall </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
  
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
   
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>
    <!-- Side bar Including -->
    <?php include 'sidebar.php'  ?>
      <div id="content-wrapper">
        <div class="container">
          <!-- Bread Crumb -->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Business Owner Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Create Business</li>
          </ol>
          <!-- Bread Crumb close -->
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
                            <input type="text" id="ownerid" class="form-control" placeholder="ownerid" name="ownerId" required="required" autofocus="autofocus">
                            <label for="ownerid"><i class="fas fa-money-check-alt"></i> Owner Id</label>
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
                    <button type="submit" name="business" class="btn btn-primary btn-lg">Update</button>
                  </div>`
                </div>
              </form>
              <!-- Add Buisness Close -->
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12"></div>
          </div>
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
