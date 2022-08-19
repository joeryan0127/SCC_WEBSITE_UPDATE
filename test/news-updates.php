<section>
    <div class="section-title" data-aos="zoom-in">
        <h2>News and Updates</h2>
    </div>
    <div class="news-updates-gallery" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-evenly">
                <?php
                include 'Student/includes/conn.php';

                $bool = false;
                $fetchInfo = $conn->query("SELECT * FROM tbl_events LIMIT 3");

                if (mysqli_num_rows($fetchInfo)) {
                    while ($fetchData = $fetchInfo->fetch_array()) {
                    $arrayId = $fetchData['evnts_id'];
                ?>
                    <div class="col-lg-4 col-sm-6 mb-4 ">
                        <div class="thumbnail">
                            <a class="lightbox " href="<?php echo (!empty($fetchData['evnts_photo'])) ? 'master/images/' . $fetchData['evnts_photo'] : 'master/images/profile.jpg'; ?>"><br>
                                <img src="<?php echo (!empty($fetchData['evnts_photo'])) ? 'master/images/' . $fetchData['evnts_photo'] : 'master/images/profile.jpg'; ?>" alt="gallery-1" style="max-height:200px; max-width:200px; overflow: hidden">
                            </a>
                            <div class="caption">
                                <a href="" data-bs-toggle="modal" data-bs-target="#portfolioModal21<?php echo $arrayId; ?>">
                                    <h6><?php echo $fetchData['evnts_news']; ?></h6>
                                </a>
                                <p> <strong>Date Posted:</strong><?php echo $fetchData['evnts_date']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                }else{
                    ?>
                        <div class="caption">
                            <h5 style="color: white;">No News/updates available!</h5>
                        </div>
                    <?php
                }


                
                ?>
            </div><!-- ======= end of row ======= -->
        </div> <!-- ======= End of Container ======= -->
    </div>
    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
    <?php
    include 'Student/includes/conn.php';

    $bool = false;
    $fetchInfo = $conn->query("SELECT * FROM tbl_events LIMIT 3");
    while ($fetchData = $fetchInfo->fetch_array()) {
        $arrayId = $fetchData['evnts_id'];
    ?>
        <div class="news-updates-modal modal fade" id="portfolioModal21<?php echo  $arrayId; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><i class="fas fa-times "></i></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">

                                    <!-- Project details-->
                                    <h2 class="text-uppercase"> <?php echo $fetchData['evnts_news']; ?> </h2>
                                    <p class="item-intro text-muted">Date Posted:<br><?php echo $fetchData['evnts_date']; ?></p>
                                    <img class="img-fluid d-block mx-auto" src="<?php echo (!empty($fetchData['evnts_photo'])) ? 'master/images/' . $fetchData['evnts_photo'] : 'master/images/profile.jpg'; ?>" alt="..." 
                                    style="max-height:50%; max-width:100%; overflow: hidden" />
                                    <p><?php echo $fetchData['evnts_news'] . " " . $fetchData['evnts_date']; ?></p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Date Posted:</strong>
                                            <?php echo $fetchData['evnts_date']; ?>
                                        </li>
                                        <li>
                                            <strong>Description:</strong></br>
                                            <?php echo $fetchData['evnts_description']; ?>
                                        </li>
                                    </ul>
                                    <!-- <button class="btn btn-close-color btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times"></i>
                                        Close
                                    </button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="news-updates-modal modal fade" id="portfolioModal21<?php echo  $arrayId; ?>" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
        <div class="close-modal" data-bs-dismiss="modal"><i class="fas fa-times fa-3x"></i></div>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>This is a large modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div> -->


    <?php
    }
    ?>
</section>
