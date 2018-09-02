
        <?php   if($_SESSION['user']['Type']=='Admin'){ ?>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Admin Dashboard</a>
            </li>
            <li class="breadcrumb-item active">My Profile</li>
          </ol>
          <?php } ?>
           <!--For User  -->
           <?php   if($_SESSION['user']['Type']=='User'){ ?>
           <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">User Dashboard</a>
            </li>
            <li class="breadcrumb-item active">My Profile</li>
          </ol>
     	<?php } ?>
     	<?php   if($_SESSION['user']['Type']=='Business'){ ?>

     	
           <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Business Dashboard</a>
            </li>
            <li class="breadcrumb-item active">My Profile</li>
          </ol>
      <?php }
