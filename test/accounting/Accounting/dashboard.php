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
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Students</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <h6 class="text-muted font-weight-normal"><a href="manage-students.php">View Details</a></h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                       <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Tuitions</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <h6 class="text-muted font-weight-normal"><a href="manage-tuitions.php">View Details</a></h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                       <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr style="background-color: white;">


      
            
    <?php
    include 'header/footer.php';
    ?>
