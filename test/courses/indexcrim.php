<?php
include '../headers/crim-course-header.php';
?>
<!-- End Header Link -->
<?php
include '../headers/course-navigation.php';
?>
<!-- End Header -->
<div class="wrapper">
    <div class="sidebar">
        <div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
            <img class="crim-logo rounded-circle mb-3" id="course-logo" src="../assets/img/crim-course/crim.jpg" alt="Image">
            <h4 style="text-align: justify;" class="mb-4">“Every society has the criminals that it deserves.” <br><br>-H. Havelock Ellis</h4>
            <p class="mb-4">
                <!-- <strong> Were always together, were on a kind, three words describe us partners in crime</strong> -->
            </p>
            <!-- <div class="d-flex justify-content-center mb-5">
                <a class="btn btn-outline-color mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-color mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-color mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-color mr-2" href="#"><i class="fab fa-instagram"></i></a>
            </div> -->
            <div class="btn btn-lg btn-block btn-outline-color mt-auto" style="cursor: default; pointer-events: none;"> BSCRIM DEPARTMENT</div>
        </div>
        <div class="sidebar-icon d-flex flex-column h-100 justify-content-center text-right">
            <i class="fas fa-2x fa-angle-double-right text-primary"></i>
        </div>
    </div>
    <div class="content">
        <!-- Navbar Start -->
        <div class="container p-0">
        </div>
        <!-- Navbar End -->
        <div class="container py-0 px-2 bg-color">
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
                        <img class="w-100" src="../assets/img/crim-course/BSC1.jpg" alt="Image">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="../assets/img/crim-course/BSC2.jpg" alt="Image">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="../assets/img/crim-course/BSC3.jpg" alt="Image">
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
                    $sql = "SELECT * FROM tbl_post WHERE post_department = 'bscrim' ORDER BY id DESC";
                    $query = $conn->query($sql);
                    foreach ($query as $q){ ?>
                    <div class="column">
                        <div class="card">
                            <img src="<?php echo '../master/images/'.$q['post_photo'];?>" style="max-height:200px; max-width:500px; object-fit: contain;">
                            <br>
                            <h2 class="text-left"><strong><?php echo $q['post_title']; ?></strong></h2>
                            <h6 class="text-left"><i>Date Posted:<br><?php echo $q['post_date']; ?></i></h6>
                        <!-- <p class="text-left">Description...<a id="portfolioModal1" href="../basiceduc/courses-events-crim.php">Read more</a></p> -->

                        <p class="text-left">Description...<a href="#portfolioModal1<?php echo $q['id']; ?>"  data-toggle="modal">Read more</a></p>
                        <?php include('../modal/iteventmodal.php'); ?>
                    
                    </div>
                </div>
                <?php }?>
                <!-- <p class="text-right"><a href="../basiceduc/courses-events-crim.php" style="color:white"><strong>See more</strong><i class='fas'>&#xf101;</i> </a></p> -->
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


        <!-- About US -->
        <div class="container bg-white pt-5">
            <center>
                <h1> <strong> ABOUT US </strong></h1>
            </center><br>
            <div class="section-title" data-aos="fade-up">
                                        <h2 class="animate-charcter"> <strong>Bachelor of Science in Criminology</strong></h2>
                                    </div>
            <div class="row px-3 pb-1">
                <div class="col-md-12">
                    <img class="img-fluid float-left w-50 mr-4 mb-3" src="../assets/img/crim-course/crim.jpg" alt="Image">
                    <p class="m-0"><br>
                    <h4><strong>Bachelor of Science in Criminology (BSCRIM)</strong></h4><br><br>
                    <p style="text-align: justify;">The Criminology program is envisioned to actively and continually involve in producing graduates who have the holistic knowledge and skills in
                        addressing the problem of criminality in the country and the global competence to meet the challenge of globalization in the field of criminology.<br><br> The BS in Criminology focuses on the study of historical and contemporary patterns of crime and victimization, the social etiology of criminality, social responses to crime, and the processes of crime control.</p>
                </div>
                <div class="col-md-12 pt-4">
                    <div class="d-flex flex-column skills">
                        <div class="progress w-100 mb-4">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Judicial / Courts</div>
                        </div>
                        <div class="progress w-120 mb-4">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Criminal Investigation</div>
                        </div>
                        <div class="progress w-100">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Law Enforcement</div>
                        </div>
                    </div> <br>
                </div>
            </div>
            <!-- About End -->

            <!-- Instructor Start-->
              <div class="section-title" data-aos="fade-up">
                     <h2 class=""> <strong>College Of Criminology Instructors</strong></h2>
                </div>    
            <div class="row">
                <div class="column">
                    <div class="card">
                        <img src="../assets/img/management/anonb.jpg" style="width:100%">
                        <br>
                        <h5><strong>Mr. Blonnie Arriesgado</strong></h5>
                        <p><i>FACULTY MEMBER</i></p>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <img src="../assets/img/management/anonb.jpg" style="width:100%"><br>
                        <h5> <strong>Mr. Joemar R. Paclauna </strong></h5>
                        <p> <i>CHAIR PERSON</i></p>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <img src="../assets/img/management/anonb.jpg" style="width:100%"> <br>
                        <h5> <strong>Mr. Edward Maglucot</strong></h5>
                        <p><i>FACULTY MEMBER</i></p>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <img src="../assets/img/management/anonb.jpg" style="width:100%">
                        <h5><strong> Mr. Edito Maribojoc</strong></h5>
                        <p><i>FACULTY MEMBER</i></p>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <img src="../assets/img/management/anonb.jpg" style="width:100%">
                        <h5><strong>Mr. Arman Manigos</strong></h5>
                        <p><i>FCULTY MEMBER</i></p>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <img src="../assets/img/management/anonb.jpg" style="width:100%">
                        <h5><strong> Mr. Jorge Mirambel</strong></h5>
                        <p><i>FACULTY MEMBER</i></p>
                    </div>
                </div>
                <!-- Instructor End -->

                <!-- Blog Detail Start -->
                <div class="column" style="width:100%; height:100%;"><br>
                    <div class="card">
                    <h4 class="text-center">WHAT YOU NEED TO KNOW:</h4><br>
                            <iframe src="https://youtube.com/embed/KVqUDOWoIXs" width="100%" height="400" allowfullscreen></iframe>
                    </div>
                      <!-- ======= Gallery Section ======= -->
                      <section id="gallery" class="gallery">
                                    <div class="container">
                                    <div class="section-title" data-aos="fade-up">
                                        <h2> BSCRIM MOMENTS </h2>
                                    </div>
                                    <div class="gallery-slider swiper" data-aos="zoom-in">
                                        <div class="swiper-wrapper align-items-center">
                                        <div class="swiper-slide"><a class="gallery-lightbox" href="../assets/img/crim-course/crim.jpg"><img src="../assets/img/crim-course/crim.jpg" class="img-fluid" alt=""> <h5> </h5></a></div>
                
                                        <div class="swiper-slide"><a class="gallery-lightbox" href="../assets/img/crim-course/crim.jpg"><img src="../assets/img/crim-course/crim.jpg" class="img-fluid" alt=""><h5>  </h5></a></div>
                
                                        <div class="swiper-slide"><a class="gallery-lightbox" href="../assets/img/crim-course/crim.jpg"><img src="../assets/img/crim-course/crim.jpg" class="img-fluid" alt=""><h5> INTRAMURALS</h5></a></div>
                
                                        <div class="swiper-slide"><a class="gallery-lightbox" href="../assets/img/crim-course/crim.jpg"><img src="../assets/img/crim-course/crim.jpg" class="img-fluid" alt=""><h5> ACQUIANTANCE PARTY</h5></a></div>
                                        <div class="swiper-slide"><a class="gallery-lightbox" href="../assets/img/crim-course/crim.jpg"><img src="../assets/img/crim-course/crim.jpg" class="img-fluid" alt=""><h5> BSCRIM DAYS</h5></a></div>
              
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
