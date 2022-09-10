<?php
include '../headers/hmtm-course-header.php';
?>
<!-- End Header Link -->
<?php
include '../headers/course-navigation.php';
?>
<!-- End Header -->
<div class="wrapper">
    <div class="sidebar">
        <div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
            <img class="hmtm-logo rounded-circle mb-3" id="course-logo" src="../assets/img/hmtm-course/hmtm.jpg" alt="Image">
            <h4 style="text-align: justify;" class="mb-4"><strong>“It's the little things that make the big things possible. Only close attention to the fine details of any operation makes the operation first class.”<br><br>-J. Willard Marriott</strong></h4>
            <!-- <div class="d-flex justify-content-center mb-4">
                <a class="btn btn-outline-color mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-color mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-color mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-color mr-2" href="#"><i class="fab fa-instagram"></i></a>
            </div> -->
            <div class="btn btn-lg btn-block btn-outline-color mt-auto" style="cursor: default; pointer-events: none;">BSHM | BSTM DEPARTMENT</div>
        </div>
        <div class="sidebar-icon d-flex flex-column h-100 justify-content-center text-right">
            <i class="fas fa-2x fa-angle-double-right text-primary"></i>
        </div>
    </div>
    <div class="content">
        <div class="container p-0">
        </div>
        <div class="container  px-2 bg-color">
            <div class="row py-4 px-4">
                <div class="col-sm-6 text-center text-md-left">
                </div>
                <div class="col-sm-6 text-center text-md-right">
                    <div class="d-inline-flex pt-2">
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <!-- Carousel Start -->
        <div class="container p-0">
            <div id="blog-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="../assets/img/hmtm-course/BSHM1.jpg" alt="Image">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="../assets/img/hmtm-course/BSHM2.jpg" alt="Image">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="../assets/img/hmtm-course/BSHM3.jpg" alt="Image">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
        <!-- Carousel End -->
        <br>
        <br>
        <!-- Event Start -->
        <div class="container">
            <div class="card">
                <h1 class=""> <strong>UPCOMING EVENTS</strong></h1>
            </div>
            <div class="row">
            <?php
                    include('../Student/includes/conn.php');
                    $sql = "SELECT * FROM tbl_post WHERE post_department = 'bshm' OR post_department = 'bstm' ORDER BY id DESC";
                    // $sql = "SELECT * FROM tbl_post WHERE post_department = 'bstm' ORDER BY id DESC";
                    $query = $conn->query($sql);
                    foreach ($query as $q){ ?>
                    <div class="column">
                        <div class="card">
                            <img src="<?php echo '../master/images/'.$q['post_photo'];?>" style="max-height:200px; max-width:500px; object-fit: contain;">
                            <br>
                            <h2 class="text-left"><strong><?php echo $q['post_title']; ?></strong></h2>
                            <h6 class="text-left"><i>Date Posted:<br><?php echo $q['post_date']; ?></i></h6>
                        <!-- <p class="text-left">Description...<a id="portfolioModal1" href="../basiceduc/courses-events-hmtm.php">Read more</a></p> -->
                        <p class="text-left">Description...<a href="#portfolioModal1<?php echo $q['id']; ?>"  data-toggle="modal">Read more</a></p>
                        <?php include('../modal/iteventmodal.php'); ?>
                    </div>
                </div>
                <?php }?>
                <!-- <p class="text-right"><a href="../basiceduc/courses-events-hmtm.php" style="color:white"><strong>See more</strong><i class='fas'>&#xf101;</i> </a></p> -->
            </div>
            <!-- Event End -->

            <!-- Subscribe Start -->
            <div class="container py-5 px-4 bg-color text-center">
                <h1 class="text-white font-weight-bold">Subscribe My News and Updates</h1>
                <p class="text-white">Subscribe and get my latest article in your inbox</p>
                <form class="form-inline justify-content-center">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                        <div class="input-group-append">
                            <button onclick="myFunction()" class="btn btn-outline-color" type="submit">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Subscribe End -->

            <!-- About Start -->
            <div class="container bg-white pt-5">
                <center>
                    <h1> <strong> ABOUT US </strong></h1>
                </center><br>
                <div class="section-title" data-aos="fade-up">
                            <h2 class="animate-charcter"> <strong>Bachelor of Science in Hospitality Management</strong></h2>
                         </div>
                <div class="row px-3 pb-1">
                    <div class="col-md-12">
                        <img class="img-fluid float-left w-50  mr-4 mb-3" src="../assets/img/hmtm-course/hmtm.jpg" alt="Image">
                        <p class="m-0"><br>
                        <h4><strong>Bachelor of Science in Hospitality Management (BSHM)</strong></h4><br><br>
                        <p style="text-align: justify;"> Hospitality is made up of those business that offer one or more of the following:<br>
                            ✓ Provide accommodation<br>
                            ✓ Prepare food and beverage service and or<br>
                            ✓ Entertainment for the traveller.<br>
                            It aims to equip the students with competence to obtain success in hospitality industry thus, there is a need to:

                            a. Have more understanding of business and financial operations.<br>
                            b. Possess an authentic sense of hospitality.<br>
                            c. Combine solid business skills with sincere and gracious hospitality.<br>
                            d. Understand the way the business works, how it can be profitable, and what opportunities lie ahead to revitalized the essential qualities of excitement,<br>
                            service, fulfillment, and personal satisfaction that the industry has to offer and can continue to provide.<br>
                            service, fulfillment, and personal satisfaction that the industry has to offer and can continue to provide.<br>
                            The purpose is to create and maintain profitable customer and the central goal is customer satisfaction that is leading to profit.<br>
                        </p>
                    </div>
                    <div class="col-md-12 pt-4">
                        <div class="d-flex flex-column skills">

                            <div class="progress w-100 mb-4">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">FOOD & BEVERAGE MANAGEMENT</div>
                            </div>

                            <div class="progress w-120 mb-4">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">RESORT MANAGEMENT</div>
                            </div>

                            <div class="progress w-100">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">RESTAURANT MANAGEMENT</div>
                            </div>

                        </div> <br> <br>
                        <div class="section-title" data-aos="fade-up">
                                    <h2 class="animate-charcter"> <strong>Bachelor of Science in Tourism Management</strong></h2>
                            </div>

                        <img class="img-fluid float-left w-50  mr-4 mb-3" src="../assets/img/hmtm-course/hmtm.jpg" alt="Image">
                        <p class="m-0"><br>
                        <h4><strong>Bachelor of Science in Tourism Management (BSTM)</strong></h4><br>
                        <p style="text-align: justify;">Tourism is the science, art and business of attracting visitors transporting them, accommodating them, and graciously catering to their needs and wants.</p>
                        <p style="text-align: justify;">It aims to imbue the students with the:</p>
                        <p style="text-align: justify;">Components of tourism, basic approaches to the study of tourism, economic importance of tourism, and the benefits and costs of the tourism industry.</p>

                    </div>
                    <div class="col-md-12 pt-4">
                        <div class="d-flex flex-column skills">
                            <div class="progress w-100 mb-4">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"> FRONT OFFICE RECEPTION </div>
                            </div>
                            <div class="progress w-120 mb-4">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"> AIRLINES </div>
                            </div>
                        </div> <br>
                    </div>
                </div>
                <!-- About End -->

                <!-- Instructor -->
                <div class="section-title" data-aos="fade-up">
                                        <h2 class=""> <strong> College of BSHM | BSTM Instructors</strong></h2>
                                    </div>

                <div class="row">
                    <div class="column">
                        <div class="card">
                            <img src="../assets/img/management/anong.jpg" style="width:100%">
                            <br>
                            <h5><strong>Ms. Maria Angelique</strong></h5>
                            <p><i>FACULTY MEMBER</i></p>
                            <br>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="../assets/img/management/anong.jpg" style="width:100%"><br>
                            <h5> <strong> Ms. Kristine Teffanie A. Salugsugan </strong></h5>
                            <p> <i>CHAIR PERSON</i></p>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="../assets/img/management/anong.jpg" style="width:100%"><br>
                            <h5><strong>Ms. Erma Tan</strong></h5>
                            <p><i>FACULTY MEMBER</i></p>
                            <br>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="../assets/img/management/anong.jpg" style="width:100%"><br>
                            <h5><strong> Ms. Venus Sevillano</strong></h5>
                            <p><i>FACULTY MEMBER</i></p>
                            <br>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <img src="../assets/img/management/anonb.jpg" style="width:100%"> <br>
                            <h5> <strong>Mr. Danilo Mabitag</strong></h5>
                            <p><i>FACULTY MEMBER</i></p>
                            <br>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="../assets/img/management/anong.jpg    " style="width:100%"><br>
                            <h5><strong> Ms. Kim Cantero</strong></h5>
                            <p><i>FACULTY MEMBER</i></p>
                            <br>
                        </div>
                    </div><br>
                    <!-- Instructor -->

                    <!-- Blog Detail Start -->
                    <div class="column" style="width:100%; height:100%;"><br>
                        <div class="card">
                            <h4 class="text-center">WHAT YOU NEED TO KNOW:</h4><br>
                            <iframe src="https://youtube.com/embed/AwV1GheMEcM" width="100%" height="400" allowfullscreen></iframe>
                        </div>
                        <!-- ======= Gallery Section ======= -->
                        <section id="gallery" class="gallery">
                            <div class="container">
                                <div class="section-title" data-aos="fade-up">
                                    <h2> BSHM | BSTM MOMENTS </h2>
                                </div>
                                <div class="gallery-slider swiper" data-aos="zoom-in">
                                    <div class="swiper-wrapper align-items-center">
                                        <div class="swiper-slide"><a class="gallery-lightbox" href="../assets/img/hmtm-course/hmtm.jpg"><img src="../assets/img/hmtm-course/hmtm.jpg" class="img-fluid" alt="">
                                                <h5> Cooking CONTEST</h5>
                                            </a></div>

                                        <div class="swiper-slide"><a class="gallery-lightbox" href="../assets/img/hmtm-course/hmtm.jpg"><img src="../assets/img/hmtm-course/hmtm.jpg" class="img-fluid" alt="">
                                                <h5> CONTEST</h5>
                                            </a></div>

                                        <div class="swiper-slide"><a class="gallery-lightbox" href="../assets/img/hmtm-course/hmtm.jpg"><img src="../assets/img/hmtm-course/hmtm.jpg" class="img-fluid" alt="">
                                                <h5> INTRAMURALS</h5>
                                            </a></div>

                                        <div class="swiper-slide"><a class="gallery-lightbox" href="../assets/img/hmtm-course/hmtm.jpg"><img src="../assets/img/hmtm-course/hmtm.jpg" class="img-fluid" alt="">
                                                <h5> ACQUIANTANCE PARTY</h5>
                                            </a></div>
                                        <div class="swiper-slide"><a class="gallery-lightbox" href="../assets/img/hmtm-course/hmtm.jpg"><img src="../assets/img/hmtm-course/hmtm.jpg" class="img-fluid" alt="">
                                                <h5>BSHM | BSTM DAYS</h5>
                                            </a></div>

                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </section><!-- End Gallery Section -->
                        <script>
                                function myFunction() {
                                alert("Thank You For Subscribing!");
                                }
                                </script>
                        <!-- ======= Footer ======= -->
                        <?php
                        include '../headers/courses-footer.php';
                        ?>
                        <?php
                        include '../headers/ind-course-footer.php';
                        ?>
