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
                    <h4 class="card-title">Manage Tuitions</h4>
                    <div class="table-responsive">
                   <button type="button" class="btn btn-inverse-success btn-fw" data-bs-toggle="modal" data-bs-target="#UploadFile1"><i class="mdi mdi-upload btn-icon-prepend"></i> Upload Excel/CSV</button>
                  
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


                      <table class="table"  id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>Academic Year </th>
                            <th>Semester</th>
                            <th> Period </th>
                            <th> Full name </th>
                            <th> Balance </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          include '../dbcon.php';
                          $bool = false;
                          $fetchData = "SELECT * FROM ((((tbl_tuition 
                          INNER JOIN tbl_student on tbl_tuition.Student_id = tbl_student.Student_id) 
                          INNER JOIN tbl_acadyear on tbl_tuition.Acad_id = tbl_acadyear.acad_id) 
                          INNER JOIN tbl_semister ON tbl_tuition.sem_id = tbl_semister.sem_id) 
                          INNER JOIN tbl_period ON tbl_tuition.period_id = tbl_period.period_id)";

                          $fetchData1 = $conn->query($fetchData);
                          while ($rowData = $fetchData1->fetch_assoc()) {
                            $acad = $rowData['acad_year'];
                            $sem = $rowData['sem_year'];
                            $period = $rowData['period'];
                            $Fullname = $rowData['FullName'];
                            $balance = $rowData['Balance'];
                         
                          ?>
                          <tr>

                          <td><?php echo $acad ?></td>
                            <td><?php echo $sem ?></td>
                            <td><?php echo $period ?></td>
                            <td><?php echo $Fullname ?></td>
                            <td><?php echo $balance ?></td>
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