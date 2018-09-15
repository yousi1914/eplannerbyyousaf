
    <div id="wrapper">

      <!-- Sidebar -->

      <!-- forr admin -->
      <ul class="sidebar navbar-nav">

        <?php   if($_SESSION['user']['userType']=='For Admin'){ ?>
        <li class="nav-item active">
          <a class="nav-link" href="dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="myprofile.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>My Profile </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-file"></i>
            <span>Business for Approvals </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-check"></i>
            <span> View Approved Buisness </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">
            <i class="far fa-fw fa-arrow-alt-circle-right"></i>
            <span>Logout </span>
          </a>
        </li>
         <?php } ?>  
        <!-- for business ower 
         -->



        <?php   if($_SESSION['user']['userType']=='For Business'){ ?>
                   
        <li class="nav-item">
          <a class="nav-link" href="myprofile.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>My Profile </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Addbusiness.php">
            <i class="fas fa-fw fa-folder"></i>
            <span>  Add Business </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Mybusiness.php">
            <i class="fas fa-briefcase"></i>
            <span>  My Business </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>  Booking Schedule </span></a>
        </li>
        
        
        <li class="nav-item">
          <a class="nav-link" href="newoffers.php">
            <i class="fas fa-fw fa-table"></i>
            <span>  Create New Offers </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>  My Offers  </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-user"></i>
            <span>  View my clients </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">
            <i class="far fa-fw fa-arrow-alt-circle-right"></i>
            <span>  Logout </span>
          </a>
        </li>
        
        <?php } ?>  
        <!-- for user  -->

        <?php   if($_SESSION['user']['userType']=='For User'){ ?>
        <li class="nav-item">
          <a class="nav-link" href="myprofile.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>My Profile </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="booking.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>My Bookings</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span> New Offers </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">
            <i class="far fa-fw fa-arrow-alt-circle-right"></i>
            <span>Logout </span>
          </a>
        </li>
          <?php } ?>  

      </ul>
