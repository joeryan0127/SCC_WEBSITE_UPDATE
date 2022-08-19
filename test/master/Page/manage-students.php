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
                    <h4 class="card-title">Manage Payments</h4>
                    <div class="table-responsive">
                   <button type="button" class="btn btn-inverse-success btn-fw" data-bs-toggle="modal" data-bs-target="#UploadFile"><i class="mdi mdi-upload btn-icon-prepend"></i> Upload Excel/CSV</button>
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
                            <th> full name</th>
                            <th> year level </th>
                            <th> course </th>
                            <th> status </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          include '../dbcon.php';
                          $bool = false;
                          $fetchData = "SELECT * FROM tbl_student";
                          $fetchData1 = $conn->query($fetchData);
                          while ($rowData = $fetchData1->fetch_assoc()) {
                            $Fullname = $rowData['FullName'];
                            $yl = $rowData['YearLevel'];
                            $course = $rowData['Course'];
                            $Status = $rowData['Status'];
                         
                          ?>
                          <tr>

                            <td><?php echo $Fullname ?></td>
                            <td><?php echo $yl ?></td>
                            <td><?php echo $course ?></td>
                            <td><?php echo $Status ?></td>
                            <td>
                              <a href="#edit3_<?php echo $rowData['Student_id']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span >RESET</span></a>
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