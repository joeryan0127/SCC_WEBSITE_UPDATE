<?php
include 'header/head.php';

?>
<!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="#"><img src="../assets1/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="dashboard.php?page=home"><img src="../assets1/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="../assets1/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal"><?php echo $result['a_firstname']." ".$result['a_lastname']; ?></h5>
                  <span><?php echo $result['status'];?></span>
                </div>
              </div>
             
                    
                
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
             
             <?php
          
                if($result['status']=='Admin'){
             
            echo' <a href="manage-account.php?page=account" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i  class="mdi mdi-account text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Manage Account</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="manage-accounting.php?page=accounting" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                   <div class="preview-icon bg-dark rounded-circle">
                      <i  class="mdi mdi-account text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Manage Accounting Acc</p>
                  </div>
                </a>';
              }
              ?> 
             
                <div class="dropdown-divider"></div>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="dashboard.php?page=home">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Departments</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">

              <?php
              if($result['status']=='BSIT'){

              echo '<li class="nav-item"> <a class="nav-link" href="bsit.php">BSIT</a></li>';
              
            }else  if($result['status']=='BSHM'){

              echo ' <li class="nav-item"> <a class="nav-link" href="bshm.php">BSHM</a></li>';
              echo '  <li class="nav-item"> <a class="nav-link" href="bstm.php">BSTM</a></li>';
              echo '  <li class="nav-item"> <a class="nav-link" href="bsba.php">BSBA</a></li>';
            
            }else if($result['status']=='BSCRIM'){
            
              echo '<li class="nav-item"> <a class="nav-link" href="bscrim.php">BSCRIM</a></li>';
            
            }else if($result['status']=='BEED'){
            
              echo '<li class="nav-item"> <a class="nav-link" href="bscrim.php">BSCRIM</a></li>';
              echo '<li class="nav-item"> <a class="nav-link" href="bsed.php">BSED</a></li>';
              echo '<li class="nav-item"> <a class="nav-link" href="beed.php">BEED</a></li>';
            
            }else{
              echo '<li class="nav-item"> <a class="nav-link" href="bsit.php">BSIT</a></li>';
              echo ' <li class="nav-item"> <a class="nav-link" href="bshm.php">BSHM</a></li>';
              echo '  <li class="nav-item"> <a class="nav-link" href="bstm.php">BSTM</a></li>';
              echo '  <li class="nav-item"> <a class="nav-link" href="bsba.php">BSBA</a></li>';
              echo '<li class="nav-item"> <a class="nav-link" href="bscrim.php">BSCRIM</a></li>';
              echo '<li class="nav-item"> <a class="nav-link" href="bscrim.php">BSCRIM</a></li>';
              echo '<li class="nav-item"> <a class="nav-link" href="bsed.php">BSED</a></li>';
              echo '<li class="nav-item"> <a class="nav-link" href="beed.php">BEED</a></li>';
            }
            

                
               
              
                
                
                ?>
              </ul>
            </div>
          </li>

      <?php
      if($result['status']=='Admin'){

     

       echo '<li class="nav-item menu-items">';
       echo '    <a class="nav-link" href="manage-academicyear.php">';
       echo ' <span class="menu-icon">';
       echo '   <i class="mdi mdi-playlist-play"></i>';
       echo ' </span>';
       echo ' <span class="menu-title">Academic Year</span>';
       echo '</a>';
       echo '</li>';
       echo '<li class="nav-item menu-items">';
       echo '<a class="nav-link" href="manage-schedule.php">';
       echo ' <span class="menu-icon">';
       echo '   <i class="mdi mdi-playlist-play"></i>';
       echo ' </span>';
       echo ' <span class="menu-title">Schedule</span>';
       echo '</a>';
       echo '</li>';

        }else if($result['status']=='SCO'){
          echo '<li class="nav-item menu-items">';
          echo '<a class="nav-link" href="manage-schedule.php">';
          echo ' <span class="menu-icon">';
          echo '   <i class="mdi mdi-playlist-play"></i>';
          echo ' </span>';
          echo ' <span class="menu-title">Schedule</span>';
          echo '</a>';
          echo '</li>';
        }
        ?>
        </ul>
      </nav>
      <!-- partial -->
            <!-- partial -->


      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../assets1/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link btn btn-success create-new-button" type="button" class="btn btn-inverse-success btn-fw" data-bs-toggle="modal" data-bs-target="#newsUpdates">+ Add News and Events</a>
                  </li>
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-view-grid"></i>
                </a>
              </li>
              
            <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>

                      
                  
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">

                  <h6 class="p-3 mb-0">Messages</h6>
                 <?php
              
                 $queries = $conn->query("SELECT * FROM tbl_messages LIMIT 5");
                      while ($list = $queries->fetch_array()){
                      
                ?>
                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../assets1/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1"><?php echo $list['msg_fullname']?> send you a message</p>
                      <p class="text-muted mb-0"><?php echo $list['msg_time']?>  Minutes ago </p>
                      </div>
                  </a>
                   <?php } ?>
                  <div class="dropdown-divider"></div>
                
                  <p class="p-3 mb-0 text-center"><a style="text-decoration: none;" href="manage-msg-inbox.php">View more...</a></p>
               
                </div>
                
             
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="../assets1/images/faces/face15.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $result['a_firstname']." ".$result['a_lastname']; ?></p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="myprofile.php?page=profile">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">My Profile</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="../logout.php">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>

                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1"> Log out</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                <!--   <p class="p-3 mb-0 text-center">Advanced settings</p> -->
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>

<!-- Add news and updates sco -->
<div class="modal fade" id="newsUpdates" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">News and Updates</h5>
        <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
      <form  method="post" action="addeditdelete_sconews.php" enctype="multipart/form-data">

        <div class="form-group">
          <label>Year</label>
          <select id="<?php echo$data['acad_id'];?>" name="acad_id" list="encodings" class="form-control" required>
           <option selected disabled>Select Year</option>
                  <?php
                  include 'include/dbcon.php';
                    $acadYear = $conn->query("SELECT * FROM `tbl_acadyear`");
                    while ($data = $acadYear->fetch_array()){
                      $acad_id = $data['acad_id'];
                        echo "<option value ='".$data['acad_id']."'>".$data['acad_year']."</option>";
                    }
                  ?>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputName1">News Date</label>
          <input type="date" class="form-control" id="exampleInputName1" placeholder="News title" required name="news_date" >
        </div>

        <div class="form-group">
          <label for="exampleInputName1">News Title</label>
          <input type="text" class="form-control" id="exampleInputName1" placeholder="News title" required name="news_title" >
        </div>

        <div class="form-group">
          <label for="exampleInputName1">Description</label>
          <textarea class="form-control" name="news_description" placeholder="Write description ....."></textarea>
        </div>

      <div class="form-group">
          <label for="exampleInputName1">Photo</label>
          <input type="file" class="form-control" id="exampleInputName1" placeholder="Select File" required name="file" >
        </div>

        <button type="submit" class="btn btn-primary mr-2" name="add_newsssco">Add</button>
        <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
        </form>
      </div>

    </div>
  </div>
</div>