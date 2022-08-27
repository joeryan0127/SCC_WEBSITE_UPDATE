<?php
include 'navigation-bar.php';

?>
                    <script>
                      jQuery(document).ready(function() {
                      // Set up the toggle.
                      jQuery('.add-icon').on('click', function() {
                        jQuery(this).nextAll('.more-content').toggleClass('visible');
                      });

                      jQuery('.add-icon').click(function(e) {
                        e.preventDefault();
                        jQuery(this).text(jQuery(this).text() == '+' ? "-" : "+");
                      });
                    });
                    </script>

  
        <!-- partial -->
      

        <div class="main-panel">
          <div class="content-wrapper">
           
          <div class="row">

          <?php
        if($result['status'] =="Admin")
       {
            echo ' <div class="col-sm-4 grid-margin">';
            echo '   <div class="card">';
            echo '      <div class="card-body">';
            echo '        <h5>Students</h5>';
            echo '       <div class="row">';
            echo '          <div class="col-8 col-sm-12 col-xl-8 my-auto">';
            echo '           <h6 class="text-muted font-weight-normal"><a href="manage-students.php">View Details</a></h6>';
            echo '     </div>';
            echo '    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">';
            echo '     <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>';
            echo '    </div>';
            echo '  </div>';
            echo '      </div>';
            echo '    </div>';
            echo '  </div>';
       
             

              echo ' <div class="col-sm-4 grid-margin">';
              echo '   <div class="card">';
              echo '    <div class="card-body">';
              echo '      <h5>Tuitions</h5>';
              echo '<div class="row">';
              echo '  <div class="col-8 col-sm-12 col-xl-8 my-auto">';
              echo '    <h6 class="text-muted font-weight-normal"><a href="manage-tuitions.php">View Details</a></h6>';
              echo '  </div>';
              echo '  <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">';
              echo '   <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>';
              echo '  </div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
            }
            ?>
            </div>
            <hr style="background-color: white;">
            <!-- News and Updaes for SCO -->

            <h3>News and Updates</h3>
             <div class="row" id="table_sco">
                  <?php 
                  include 'include/dbcon.php';
                  $bool = false;
                  $fetchEvents = $conn->query("SELECT * FROM tbl_events");

                  if (mysqli_num_rows($fetchEvents)) {
                                      while ($rowEvents = $fetchEvents->fetch_array()) {
                    $evnts_id = $rowEvents['evnts_id'];
                 
                ?>
                <div class="col-sm-4 grid-margin">
                    <div class="card">
                      <div class="card-body">
                       <!--  <h5><?php echo $rowEvents['evnts_news'];?></h5> -->
                        <div class="row">
                          <div class="col-8 col-sm-12 col-xl-8 my-auto">
                          </div>

                          <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                          </div>                      
                           <img style="width: 100%; height: 200px;  object-fit: contain;" src="<?php echo (!empty($rowEvents['evnts_photo']))? '../images/'.$rowEvents['evnts_photo']:'../images/'; ?>" class="" >
                        </div>&nbsp;

                        <!-- show more -->

                        <div class="faq-box">
                          <h4 class="h2-v3"><?php echo $rowEvents['evnts_news'];?></h4><span class="add-icon">+</span>
                            <p class="more-content"><br>
                              <span class="date_held"><strong>Date:</strong> <?php echo $rowEvents['evnts_date'];?><br><strong>Description:</strong> </span>
                              <?php echo $rowEvents['evnts_description'];?>
                            </p>
                        </div> 

                        <!-- edit news and updates -->
                       <button type="button" class="btn btn-warning btn-icon-text"  data-bs-toggle="modal" data-bs-target="#editNewsupdates<?php echo $rowEvents['evnts_id']; ?>"><i class="mdi mdi-file-check btn-icon-append"></i></button>
                      <?php
                        include 'modal/modal_newssco.php';
                       ?>
                       <!-- delete news and updates -->
                      <button type="button" class="btn btn-danger btn-icon-text" data-bs-toggle="modal" data-bs-target="#deleteNewsupdates<?php echo $rowEvents['evnts_id']; ?>"><i class="mdi mdi-delete-forever"></i></button>
                      <?php
                        include 'modal/modal_newssco.php';
                       ?>
                      </div>
                    </div>
                  </div>
                  <?php             
                 }
                  }else{
                    ?>
                        <div class="col-sm-12 grid-margin">
                          <h5>
                            <center>
                              
                              No news/update are available! Please add post!
                            </center>
                          </h5>
                      </center>
                    </div>
                    <?php



                  }

              ?>
              </div>

                          <?php 
         if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
             ?>
            <script>
               swal({
               title: "<?php echo $_SESSION['status']; ?>",
               text: "<?php echo $_SESSION['text']; ?>",
               icon: "<?php echo $_SESSION['status_code']; ?>",
               button: "Done"
               });
            </script>
            <?php
         unset($_SESSION['status']);
         }
         ?>



      
            
    <?php
    include 'header/footer.php';
    ?>
