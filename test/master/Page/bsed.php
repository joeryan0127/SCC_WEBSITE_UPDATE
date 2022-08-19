<?php
include 'navigation-bar.php';
include 'modal/modal_post.php';
?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
 			<div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Manage BSED Department</h4>
                    <div class="table-responsive">
                   <button style="float: right;" type="button" class="btn btn-inverse-success btn-fw" data-toggle="modal" data-target="#addPostbsed" data-whatever="@mdo">Add Post</button>
                   <br><br>

                              <?php
                              if(isset($_SESSION['error'])){
                                echo "
                                  <div class='alert alert-danger alert-dismissible'>
                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                    <h6><i class='icon fa fa-check'></i> Error! <span> ".$_SESSION['error']."</span></h6>
                                   
                                  </div>
                                ";
                                unset($_SESSION['error']);
                              }
                              if(isset($_SESSION['success'])){
                                echo "
                                  <div class='alert alert-success alert-dismissible'>
                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                    <h6><i class='icon fa fa-check'></i> Success! <span> ".$_SESSION['success']."</span></h6>
                                   
                                  </div>
                                ";
                                unset($_SESSION['success']);
                              }
                            ?>
                      <table class="table" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                            <tr>
                              <th>Image</th>
                              <th>Title</th>
                              <th>Date</th>
                              <!-- <th style="text-align:center">View</th> -->
                              <th>Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                          
                          $bool = false;
                          $fetchData = "SELECT * FROM tbl_post WHERE post_department = 'bsed'";
                          $fetchData1 = $conn->query($fetchData);
                          while ($rowData = $fetchData1->fetch_assoc()) {
                            $a_id = $rowData['id'];
                         
                          ?>
                          <tr>
                            
                            <td><img style="width: 60px; height: 60px;" src="<?php echo (!empty($rowData['post_photo']))? '../images/'.$rowData['post_photo']:'../images/profile.jpg'; ?>" class="brand-image img-circle elevation-3" ></td>
                              <td><?php echo $rowData['post_title']?></td>
                              <td><?php echo $rowData['post_date']?></td>
                              <td>

                              <!--   edit Account -->
                              <a id="<?php echo $a_id; ?>" href="#editbsed<?php echo $a_id; ?>"<?php echo $a_id?>type="button" class="btn btn-outline-primary btn-fw" data-bs-toggle="modal" data-bs-target="#editbsed<?php echo $a_id ?>">Edit</a>
                              <?php include 'modal/modal_post.php'; ?>

                              <!-- Delete Account -->
                              <a id="<?php echo $a_id; ?>" href="#deletebsed<?php echo $a_id;?>"<?php echo $a_id?>type="button" class="btn btn-outline-danger btn-fw" data-bs-toggle="modal" data-bs-target="#deletebsed<?php echo $a_id;?>">Delete</a>
                              <?php include 'modal/modal_post.php'; ?>

                            </td>
                          </tr>
                      <?php
                          }
                        ?> 
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

 <?php
 include 'header/footer.php';
 ?>