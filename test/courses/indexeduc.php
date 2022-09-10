<?php
include '../headers/educ-course-header.php';
?>
<!-- End Header Link -->
<?php
include '../headers/course-navigation.php';
?>
<!-- End Header -->
<div class="wrapper">
    <div class="sidebar">
        <div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
            <img class="educ-logo rounded-circle mb-3" id="course-logo" src="../assets/img/educ-course/logoeduc.jpg" alt="Image">
            <h4 style="text-align: justify;" class="mb-4"><strong>“Education is one thing no one can take away from you.”<br><br> —Elin Nordegren</strong></h4>
            <!-- <div class="d-flex justify-content-center mb-5">
                <a class="btn btn-outline-color mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-color mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-color mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-color mr-2" href="#"><i class="fab fa-instagram"></i></a>
            </div> -->
            <div class="btn btn-lg btn-block btn-outline-color mt-auto" style="cursor: default; pointer-events: none;"> BEED | BSED DEPARTMENT</div>
        </div>
        <div class="sidebar-icon d-flex flex-column h-100 justify-content-center text-right">
            <i class="fas fa-2x fa-angle-double-right text-primary"></i>
        </div>
    </div>
    <div class="content">
        <div class="container p-0">
        </div>
        <div class="container px-2 bg-color">
            <div class="row py-4 px-4">
                <div class="col-sm-6 text-center text-md-left">
                    <!-- <h1 class="mb-3 mb-md-0 text-white text-uppercase font-weight-bold">HOME </h1> -->
                </div>
                <div class="col-sm-6 text-center text-md-right">
                    <div class="d-inline-flex pt-2">
                        <!-- <h5> <h5 class="fas fa-angle-double-right text-white"> </h5>
                            <h5 class="btn btn text-white"><a class="text-white" href="../../index.php">Landing Page</a></h5> -->
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
                        <img class="w-100" src="../assets/img/educ-course/BSEE1.jpg" alt="Image">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="../assets/img/educ-course/BSEE2.jpg" alt="Image">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="../assets/img/educ-course/BSEE3.jpg" alt="Image">
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
                    $sql = "SELECT * FROM tbl_post WHERE post_department = 'bsed' OR post_department = 'beed' ORDER BY id DESC";
                    $query = $conn->query($sql);
                    foreach ($query as $q){ ?>
                    <div class="column">
                        <div class="card">
                            <img src="<?php echo '../master/images/'.$q['post_photo'];?>" style="max-height:200px; max-width:500px; object-fit: contain;">
                            <br>
                            <h2 class="text-left"><strong><?php echo $q['post_title']; ?></strong></h2>
                            <h6 class="text-left"><i>Date Posted:<br><?php echo $q['post_date']; ?></i></h6>
                         <!-- <p class="text-left">Description...<a id="portfolioModal1" href="../basiceduc/courses-events-educ.php">Read more</a></p> -->
                         <p class="text-left">Description...<a href="#portfolioModal1<?php echo $q['id']; ?>"  data-toggle="modal">Read more</a></p>
                        <?php include('../modal/iteventmodal.php'); ?>
                        </div>
                </div>
                <?php }?>
                <!-- <p class="text-right"><a href="../basiceduc/courses-events-educ.php" style="color:white"><strong>See more</strong><i class='fas'>&#xf101;</i> </a></p> -->
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
                            <h2 class="animate-charcter"> <strong>Bachelor of Science in Elementary Education</strong></h2>
                         </div>
            <div class="row px-3 pb-1">
                <div class="col-md-12">
                    <img class="img-fluid float-left w-50  mr-4 mb-3" src="../assets/img/educ-course/logoeduc.jpg" alt="Image">
                    <p class="m-0"><br>
                    <h4><strong>Bachelor of Science in Elementary Education (BEED)</strong></h4><br>
                    <p>The BEEd is designed to meet the needs of professional teachers for elementary education schools,
                        who are generalists and who can teach across the different learning areas.</p>
                    </p>
                </div>
                <div class="col-md-12 pt-4">
                    <div class="d-flex flex-column skills">
                        <div class="progress w-100 mb-4">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Major in General Education</div>
                        </div>
                        <div class="progress w-120 mb-4">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Major in Special Education</div>
                        </div>
                        <div class="progress w-100">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Major in PreSchool</div>
                        </div>
                    </div> <br> 
                    <div class="section-title" data-aos="fade-up">
                                    <h2 class="animate-charcter"> <strong>Bachelor of Science in Secondary Education</strong></h2>
                            </div>
                    <img class="img-fluid float-left w-50  mr-4 mb-3" src="../assets/img/educ-course/logoeduc.jpg" alt="Image">
                    <p class="m-0"><br>
                    <h4><strong>Bachelor of Science in Secondary Education (BSED)</strong></h4><br>
                    <p>The BSEd is designed to meet the needs of professional teachers who can teach in one of the different learning areas in secondary like Mathematics,
                        Physical Sciences,Biological Sciences, English, Filipino, Social Sciences, among others.</p>
                </div>
                <div class="col-md-12 pt-4">
                    <div class="d-flex flex-column skills">
                        <div class="progress w-100 mb-4">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"> Major in English </div>
                        </div>
                        <div class="progress w-120 mb-4">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"> Major in Mathematics </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->

            <!-- Instructor -->
            <div class="section-title" data-aos="fade-up">
                                        <h2 class=""> <strong> College of Education Instructors</strong></h2>
                                    </div>
            <div class="row">
                <div class="column">
                    <div class="card">
                        <img src="../assets/img/management/anong.jpg" style="width:100%"><br>
                        <h5><strong>Ms. Rowena Alison</strong></h5>
                        <p><i>FACULTY MEMBER</i></p>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <img src="../assets/img/management/anong.jpg" style="width:100%"><br>
                        <h5> <strong>Mrs. Dalecita Alterado </strong></h5>
                        <p> <i>CHAIR PERSON</i></p>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <img src="../assets/img/management/anong.jpg" style="width:100%"><br>
                        <h5> <strong>Mrs. Purisa Arnado</strong></h5>
                        <p><i>FACULTY MEMBER</i></p>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <img src="../assets/img/management/anong.jpg" style="width:100%"><br>
                        <h5><strong> Ms. Elma Quiero</strong></h5>
                        <p><i>FACULTY MEMBER</i></p>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <img src="../assets/img/management/anong.jpg" style="width:100%"><br>
                        <h5><strong>Mrs. Edwina Boldo</strong></h5>
                        <p><i>FACULTY MEMBER</i></p>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <img src="../assets/img/management/anong.jpg" style="width:100%"><br>
                        <h5><strong> Mrs. Ethel Bolen</strong></h5>
                        <p><i>FACULTY MEMBER</i></p>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="../assets/img/management/anonb.jpg" style="width:100%"><br>
                        <h5><strong>Mr. Marc Christopher Labastilla</strong></h5>
                        <p><i>FACULTY MEMBER</i></p>
                    </div>
                </div>
            
                <div class="column">
                    <div class="card">
                        <img src="../assets/img/management/anonb.jpg" style="width:100%"><br>
                        <h5><strong> Mr. Rey Marion Cabag</strong></h5>
                        <p><i>FACULTY MEMBER</i></p>
                        <br>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="../assets/img/management/anonb.jpg" style="width:100%"><br>
                        <h5><strong> Mr. Gesper Cuevas</strong></h5>
                        <p><i>FACULTY MEMBER</i></p>
                        <br>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="../assets/img/management/anong.jpg" style="width:100%"><br>
                        <h5><strong>Ms. Erlinda Desierto</strong></h5>
                        <p><i>FACULTY MEMBER</i></p>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="../assets/img/management/anong.jpg" style="width:100%"><br>
                        <h5><strong>Ms. Cherry Lyn Enad</strong></h5>
                        <p><i>FACULTY MEMBER</i></p>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="../assets/img/management/anong.jpg" style="width:100%"><br>
                        <h5><strong>Ms. Rachel Mae Gimenez</strong></h5>
                        <p><i>FACULTY MEMBER</i></p>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="../assets/img/management/anong.jpg" style="width:100%"><br>
                        <h5><strong>Ms. Jessa Lapay</strong></h5>
                        <p><i>FACULTY MEMBER</i></p>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="../assets/img/management/anong.jpg" style="width:100%"><br>
                        <h5><strong>Ms. Ethel Luz</strong></h5>
                        <p><i>FACULTY MEMBER</i></p>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="../assets/img/management/anong.jpg" style="width:100%"><br>
                        <h5><strong> Ms. Maine Bongas</strong></h5>
                        <p><i>FACULTY MEMBER</i></p>
                    </div>
                </div>
                
                <!-- Instructor -->

                <!-- Blog Detail Start -->
                <div class="column" style="width:100%; height:100%;"><br>
                    <div class="card">
                    <h4 class="text-center">WHAT YOU NEED TO KNOW:</h4><br>
                        <h1>
                            <iframe src="https://youtube.com/embed/1UtCgZZeUeI" width="100%" height="400" allowfullscreen></iframe>

                    </div>
                    <!-- ======= Gallery Section ======= -->
                    <section id="gallery" class="gallery">
                                    <div class="container">
                                    <div class="section-title" data-aos="fade-up">
                                        <h2> BEED | BSED MOMENTS </h2>
                                    </div>
                                    <div class="gallery-slider swiper" data-aos="zoom-in">
                                        <div class="swiper-wrapper align-items-center">
                                        <div class="swiper-slide"><a class="gallery-lightbox" href="../assets/img/educ-course/logoeduc.jpg"><img src="../assets/img/educ-course/logoeduc.jpg" class="img-fluid" alt=""> <h5> Spoken Poetry Contest</h5></a></div>
                
                                        <div class="swiper-slide"><a class="gallery-lightbox" href="../assets/img/educ-course/logoeduc.jpg"><img src="../assets/img/educ-course/logoeduc.jpg" class="img-fluid" alt=""><h5>  Declamation Contest</h5></a></div>
                
                                        <div class="swiper-slide"><a class="gallery-lightbox" href="../assets/img/educ-course/logoeduc.jpg"><img src="../assets/img/educ-course/logoeduc.jpg" class="img-fluid" alt=""><h5> INTRAMURALS</h5></a></div>
                
                                        <div class="swiper-slide"><a class="gallery-lightbox" href="../assets/img/educ-course/logoeduc.jpg"><img src="../assets/img/educ-course/logoeduc.jpg" class="img-fluid" alt=""><h5> ACQUIANTANCE PARTY</h5></a></div>
                                        <div class="swiper-slide"><a class="gallery-lightbox" href="../assets/img/educ-course/logoeduc.jpg"><img src="../assets/img/educ-course/logoeduc.jpg" class="img-fluid" alt=""><h5>EDUCATION DAYS</h5></a></div>
              
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
             
                    <!--======= Footer ======= -->
                     <?php
                    include '../headers/courses-footer.php';
                    ?> 
                    <?php
                    include '../headers/ind-course-footer.php';
                    ?>
