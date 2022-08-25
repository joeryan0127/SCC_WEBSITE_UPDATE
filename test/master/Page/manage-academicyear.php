<?php
include 'navigation-bar.php';
?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
 			 <!--  academic year -->
           <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> Academic Year</h4>
                    <div class="table-responsive">
                   <button type="button" class="btn btn-inverse-success btn-fw" data-bs-toggle="modal" data-bs-target="#accadYear">+ Academic Year</button>
                    
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

                            <th> Year </th>
                            <th> Actions </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          include '../dbcon.php';
                          $bool = false;
                          $fetchData = "SELECT * FROM `tbl_acadyear`";
                          $fetchData1 = $conn->query($fetchData);
                          while ($rowData = $fetchData1->fetch_assoc()) {
                            $acad_id = $rowData['acad_id'];
                         
                          ?>
                          <tr>

                            <td><?php echo $rowData['acad_year']?></td>
                            <td>

                            <!--   edit Account -->
                            <a id="<?php echo $acad_id; ?>" href="#editAcad<?php echo $acad_id; ?>"<?php echo $acad_id?>type="button" class="btn btn-outline-success btn-fw" data-bs-toggle="modal" data-bs-target="#editAcad<?php echo $acad_id ?>">Edit</a>
                            <?php include 'modal/acadyear-modal.php'; ?>

                            <!-- Delete Account -->
                            <!-- <a id="<?php echo $acad_id; ?>" href="#deleteAcad<?php echo $acad_id;?>"<?php echo $acad_id?>type="button" class="btn btn-outline-danger btn-fw" data-bs-toggle="modal" data-bs-target="#deleteAcad<?php echo $acad_id;?>">Delete</a> -->
                            <?php include 'modal/acadyear-modal.php'; ?>



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