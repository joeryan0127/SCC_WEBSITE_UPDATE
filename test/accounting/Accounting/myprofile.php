<?php
include 'navigation-bar.php';

?>
  <div class="main-panel">
          <div class="content-wrapper">
 			      <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Manage Account</h4>
                    <div class="table-responsive">
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
                            <th>Firstname </th>
                            <th>Lastname</th>
                            <th> Email </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          include '../dbcon.php';
                          $bool = false;
                          $fetchData = "SELECT * FROM tbl_accounting WHERE ac_id='".$_SESSION['acusername']."'";

                          $fetchData1 = $conn->query($fetchData);
                          while ($rowData = $fetchData1->fetch_assoc()) {
                          	$ac_id = $rowData['ac_id'];
                            $firstname = $rowData['ac_firstname'];
                            $lastname = $rowData['ac_lastname'];
                            $email = $rowData['ac_email'];
                            
                         
                          ?>
                          <tr>

                          <td><?php echo $firstname ?></td>
                            <td><?php echo $lastname?></td>
                            <td><?php echo $email ?></td>
                            <td>
                              <a id="<?php echo $ac_id; ?>" href="#editProfile<?php echo $ac_id; ?>"<?php echo $ac_id?>type="button" class="btn btn-outline-success btn-fw" data-bs-toggle="modal" data-bs-target="#editProfile<?php echo $ac_id ?>">Edit</a>
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
            <?php include 'modal/edit-account.php'; ?>
 <?php
 
 include 'header/footer.php';
 ?>