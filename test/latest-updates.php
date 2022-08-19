<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>News and Updates</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.webp" rel="icon">
    <link href="assets/img/apple-touch-icon.webp" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Bootstrap Template Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Template Campus Ministry CSS File -->
    <link href="assets/css/news-updates-style.css" rel="stylesheet">
    <!-- =======================================================
  * Front-end
  ======================================================== -->
</head>

<body>

    <!-- End Header Link -->
    <?php
    include 'headers/navigation-bar.php';
    ?>
    <!-- End Header -->

    <section>
        <br><br><br>
    <div class="section-title" data-aos="zoom-in">
        <h2>News and Updates</h2>
    </div>
    <div class="news-updates-gallery" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-evenly">
                <?php
                include 'Student/includes/conn.php';

                $bool = false;
                $fetchInfo = $conn->query("SELECT * FROM tbl_events");

                if (mysqli_num_rows($fetchInfo)) {
                    while ($fetchData = $fetchInfo->fetch_array()) {
                    $arrayId = $fetchData['evnts_id'];
                ?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="thumbnail">
                            <a class="lightbox" href="<?php echo (!empty($fetchData['evnts_photo'])) ? 'master/images/' . $fetchData['evnts_photo'] : 'master/images/profile.jpg'; ?>"><br>
                                <img src="<?php echo (!empty($fetchData['evnts_photo'])) ? 'master/images/' . $fetchData['evnts_photo'] : 'master/images/profile.jpg'; ?>" alt="gallery-1">
                            </a>
                            <div class="caption">
                                <a href="" data-bs-toggle="modal" data-bs-target="#portfolioModal21<?php echo $arrayId; ?>">
                                    <h3><?php echo $fetchData['evnts_news']; ?></h3>
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
                            <h6 style="color: white;">No post/update available</h6>
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
    $fetchInfo = $conn->query("SELECT * FROM tbl_events");
    while ($fetchData = $fetchInfo->fetch_array()) {
        $arrayId = $fetchData['evnts_id'];
    ?>
        <div class="news-updates-modal modal fade" id="portfolioModal21<?php echo  $arrayId; ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><i class="fas fa-times fa-3x"></i></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">

                                    <!-- Project details-->
                                    <h2 class="text-uppercase"> <?php echo $fetchData['evnts_news']; ?> </h2>
                                    <p class="item-intro text-muted">Date Posted:<br><?php echo $fetchData['evnts_date']; ?></p>
                                    <img class="img-fluid d-block mx-auto" src="<?php echo (!empty($fetchData['evnts_photo'])) ? 'master/images/' . $fetchData['evnts_photo'] : 'master/images/profile.jpg'; ?>" alt="..." />
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
                                    <button class="btn btn-close-color btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</section>

    <?php
    include 'headers/footer.php'
    ?>
