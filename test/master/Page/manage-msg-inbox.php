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
                    <h4 class="card-title">Message Inbox</h4>
                    <div class="table-responsive">
                   <button type="button" class="btn btn-inverse-success btn-fw" data-bs-toggle="modal" data-bs-target="#messageConcern">Reply All Concerns</button>
                  
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

                            <th> Fullname</th>
                            <th> Course Concern </th>
                            <th> Message </th>
                            <th> Actions </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          include '../dbcon.php';
                          $bool = false;
                          $fetchData = "SELECT * FROM tbl_messages";
                          $fetchData1 = $conn->query($fetchData);
                          while ($rowData = $fetchData1->fetch_assoc()) {
                            $msg_id = $rowData['msg_id'];
                         
                          ?>
                          <tr>

                            <td><?php echo $rowData['msg_fullname']?></td>
                            <td><?php echo $rowData['msg_mjrconcern']?></td>
                            <td><?php echo $rowData['msg_messages']?></td>
                            <td>

                            <!-- Reply respondonts -->
                            <a id="<?php echo $msg_id; ?>" href="#messageReply<?php echo $msg_id;?>"<?php echo $msg_id?>type="button" class="btn btn-outline-success btn-fw" data-bs-toggle="modal" data-bs-target="#messageReply<?php echo $msg_id;?>">Reply</a>
                            

                            <!-- Delete Account -->
                            <a id="<?php echo $msg_id; ?>" href="#removeMsg<?php echo $msg_id;?>"<?php echo $msg_id?>type="button" class="btn btn-outline-danger btn-fw" data-bs-toggle="modal" data-bs-target="#removeMsg<?php echo $msg_id;?>">Remove</a>
                            



                            </td>
                          </tr>
                          <?php include 'modal/modal_message.php'; ?>
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