<?php
include 'navigation-bar.php';
?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
 			<div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Manage Account</h4>
                    <div class="table-responsive">
                   <button type="button" class="btn btn-inverse-success btn-fw" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Add new Account</button>
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

                            <th> Name</th>
                            <th> Lastname </th>
                            <th> Email </th>
                            <th> Actions </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          include '../dbcon.php';
                          $bool = false;
                          $fetchData = "SELECT * FROM tbl_admin";
                          $fetchData1 = $conn->query($fetchData);
                          while ($rowData = $fetchData1->fetch_assoc()) {
                            $a_id = $rowData['a_id'];
                         
                          ?>
                          <tr>

                            <td><?php echo $rowData['a_firstname']?></td>
                            <td><?php echo $rowData['a_lastname']?></td>
                            <td><?php echo $rowData['a_email']?></td>
                            <td>

                                <!-- Delete Account -->
                            <a id="<?php echo $a_id; ?>" href="#deleteAccount<?php echo $a_id;?>"<?php echo $a_id?>type="button" class="btn btn-outline-danger btn-fw" data-bs-toggle="modal" data-bs-target="#deleteAccount<?php echo $a_id;?>">Delete</a>
                            <?php include 'modal/edit-account.php'; ?>



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