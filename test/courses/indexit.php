    <?php
    include '../headers/it-course-header.php';
    
    ?>
    <!-- End Header Link -->
    <?php
    include '../headers/course-navigation.php';
    ?>




    <!-- End Header -->
    <div class="wrapper">
        <div class="sidebar">
            <div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
                <img class="it-logo rounded-circle mb-3" id="course-logo" src="../assets/img/it-course/it.jpg" alt="Image">
                <h4 style="text-align: justify;" class="mb-4"><strong>“Computers are incredibly fast, accurate, and stupid. Human beings are incredibly slow, inaccurate, and brilliant. Together they are powerful beyond imagination.”<br><br>- Albert Einstein</strong></h4>
                <!-- <div class="d-flex justify-content-center mb-5">
                    <a class="btn btn-outline-color mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-color mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-color mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-color mr-2" href="#"><i class="fab fa-instagram"></i></a>
                </div> -->
                <div class="btn btn-lg btn-block btn-outline-color mt-auto" style="cursor: default; pointer-events: none;">BSIT DEPARTMENT</div>
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
                            <img class="w-100" src="../assets/img/it-course/BSIT1.jpg" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100" src="../assets/img/it-course/BSIT2.jpg" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100" src="../assets/img/it-course/BSIT3.jpg" alt="Image">
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


                <!-- Button trigger modal -->


<!-- Modal -->



                <div class="row">
                <?php
                    include('../Student/includes/conn.php');
                    $sql = "SELECT * FROM tbl_post WHERE post_department = 'bsit' ORDER BY id DESC";
                    $query = $conn->query($sql);
                    foreach ($query as $q){ ?>
                    <div class="column">
                        <div class="card">
                            <img src="<?php echo '../master/images/'.$q['post_photo'];?>" style="max-height:200px; max-width:500px; object-fit: contain;">
                            <br>
                            <h2 class="text-left"><strong><?php echo $q['post_title']; ?></strong></h2>
                            <h6 class="text-left"><i>Date Posted:<br><?php echo $q['post_date']; ?></i></h6>
                            <p class="text-left">Description...<a href="#portfolioModal1<?php echo $q['id']; ?>"  data-toggle="modal">Read more</a></p>
                            <?php include('../modal/iteventmodal.php'); ?>
                            <!-- <a id="portfolioModal1" href="../basiceduc/courses-events-it.php">Read more</a> -->
                          
                            

                        </div>
                    </div>
                    <?php }?>
                    <!-- <p class="text-right"><a href="../basiceduc/courses-events-it.php" style="color:white"><strong>See more</strong><i class='fas'>&#xf101;</i> </a></p> -->
        
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
                        <h2 class="animate-charcter"> <strong>Bachelor of Science in Information Technology</strong></h2>
                    </div>

                    <div class="row px-3 pb-1">
                        <div class="col-md-12"><br>
                            <img class="img-fluid float-left w-50  mr-4 mb-3" src="../assets/img/it-course/it.jpg" alt="Image">
                            <p class="m-4">
                            <h4><strong>Bachelor of Science in Information Technology(BSIT)</strong></h4><br>
                            <p style="text-align: justify;">The study of utilization of computers and computer software and plan,
                                installation, customize, operate, manage, administer and maintain information technology infrastructure.<br><br>
                                The world is now in the Information Age. Computers are in every single industry. The demand for IT professionals is continuously growing just in
                                the Philippines but all over the world. It's currently one of the highest paying jobs.
                                For our IT program, SCC has industry linkages with Techvitals and others for our graduates possible employment.</p>
                            <br>

                        </div>
                        <div class="col-md-12 pt-4">
                            <div class="d-flex flex-column skills">
                                <div class="progress w-100 mb-4">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Software and Hardware</div>
                                </div>
                                <div class="progress w-100 mb-4">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">System Analyst and Design</div>
                                </div>
                                <div class="progress w-100">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Web Development</div>
                                </div>
                            </div> <br><br>

                            <div class="section-title" data-aos="fade-up">
                                <h2 class="animate-charcter"> <strong>Associate in Computer Technology</strong></h2>
                            </div>
                            <img class="img-fluid float-left w-50  mr-4 mb-3" src="../assets/img/it-course/it.jpg" alt="Image">
                            <p class="m-4">
                            <h4><strong>Associate in Computer Technology (ACT)</strong></h4><br>
                            A 2-year degree program that provides specialized tracks on application development,
                            networking, multimedia development where software testing, analytics, computer security.

                            </p>
                        </div>
                        <div class="col-md-12 pt-4">
                            <div class="d-flex flex-column skills">
                                <div class="progress w-100 mb-4">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Computer Assembly and Disassembly</div>
                                </div>
                                <div class="progress w-100 mb-4">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Object Oriented Programming </div>
                                </div>
                                <div class="progress w-100">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Networking </div>
                                </div>
                            </div> <br> <br>
                        </div>
                    </div>
                    <!-- About End -->

                    <!-- Instructor -->
                    <div class="section-title" data-aos="fade-up">
                        <h2 class=""> <strong> College of BSIT Instructors</strong></h2>
                    </div>
                    <div class="row">
                        <div class="column">
                            <div class="card">
                                <img src="../assets/img/it-course/mic.jpg" style="width:100%"><br>

                                <h5><strong>Mr. Michael John A. Bustamante</strong></h5>
                                <p><i>FACULTY MEMBER</i></p>
                                <!-- <input type="file" id="img" name="img" accept="image/*">
                    <input type="submit" style="width:90px;  background-image: linear-gradient(to right, #ff4e00, green); color:white;"> -->
                            </div>
                        </div>

                        <div class="column">
                            <div class="card">
                                <img src="../assets/img/it-course/ch.jpg" style="width:100%"><br>

                                <h5> <strong>Mrs. Hitchean E. Lisondra </strong></h5>
                                <p><i>CHAIR PERSON</i></p>
                                <!-- <input type="file" id="img" name="img" accept="image/*">
                    <input type="submit" style="width:90px;  background-image: linear-gradient(to right, #ff4e00, green); color:white;"> -->
                                <br>
                            </div>
                        </div>

                        <div class="column">
                            <div class="card">
                                <img src="../assets/img/it-course/rob.jpg" style="width:100%"><br>

                                <h5> <strong>Mr. Jhon Ericson Robin R. Brigildo</strong></h5>
                                <p><i>FACULTY MEMBER</i></p>
                                <!-- <input type="file" id="img" name="img" accept="image/*">
                <input type="submit" style="width:90px;  background-image: linear-gradient(to right, #ff4e00, green); color:white;"> -->
                            </div>
                        </div>

                        <div class="column">
                            <div class="card">
                                <img src="../assets/img/it-course/cec.jpg" style="width:100%"><br>

                                <h5><strong> Ms. Cecilie B. Repollo</strong></h5>
                                <p><i>FCULTY MEMBER</i></p>
                                <!-- <input type="file" id="img" name="img" accept="image/*">
                    <input type="submit" style="width:90px;  background-image: linear-gradient(to right, #ff4e00, green); color:white;"> -->
                            </div>
                        </div>

                        <div class="column">
                            <div class="card">
                                <img src="../assets/img/it-course/tal.jpg" style="width:100%"><br>

                                <h5><strong>Ms. Rozaly D. Povadora</strong></h5>
                                <p><i>FACULTY MEMBER</i></p>
                                <!-- <input type="file" id="img" name="img" accept="image/*">
                    <input type="submit" style="width:90px;  background-image: linear-gradient(to right, #ff4e00, green); color:white;"> -->
                            </div>
                        </div>

                        <div class="column">
                            <div class="card">
                                <img src="../assets/img/it-course/gil.jpg" style="width:100%"><br>

                                <h5><strong> Mr. Atty. Giovanne Gil</strong></h5>
                                <p><i>FACULTY MEMBER</i></p>
                                <!-- <input type="file" id="img" name="img" accept="image/*">
                    <input type="submit" style="width:90px;  background-image: linear-gradient(to right, #ff4e00, green); color:white;"> -->
                            </div>
                        </div><br>
                        <!-- Instructor -->

                        <!-- Blog Detail Start -->

                        <div class="column" style="width:100%; height:80%;"><br>
                            <div class="card">
                                <h4 class="text-center">WHAT YOU NEED TO KNOW:</h4><br>
                                <iframe src="https://youtube.com/embed/Dv7gLpW91DM" width="100%" height="400" allowfullscreen></iframe>
                            </div>
                            <!-- ======= Gallery Section ======= -->
                            <section id="gallery" class="gallery">
                                <div class="container">
                                    <div class="section-title" data-aos="fade-up">
                                        <h2> BSIT | ACT MOMENTS </h2>
                                    </div>
                                    <div class="gallery-slider swiper" data-aos="zoom-in">
                                        <div class="swiper-wrapper align-items-center">
                                            <div class="swiper-slide"><a class="gallery-lightbox" href="../assets/img/it-course/day3.jpg"><img src="../assets/img/it-course/day3.jpg" class="img-fluid" alt="">
                                                    <h5> WEB DESIGNING CONTEST</h5>
                                                </a></div>

                                            <div class="swiper-slide"><a class="gallery-lightbox" href="../assets/img/it-course/day2.jpg"><img src="../assets/img/it-course/day2.jpg" class="img-fluid" alt="">
                                                    <h5> PROGRAMMING CONTEST</h5>
                                                </a></div>

                                            <div class="swiper-slide"><a class="gallery-lightbox" href="../assets/img/it-course/day1.jpg"><img src="../assets/img/it-course/day1.jpg" class="img-fluid" alt="">
                                                    <h5> INTRAMURALS</h5>
                                                </a></div>

                                            <div class="swiper-slide"><a class="gallery-lightbox" href="../assets/img/it-course/acq.jpg"><img src="../assets/img/it-course/acq.jpg" class="img-fluid" alt="">
                                                    <h5> ACQUIANTANCE PARTY</h5>
                                                </a></div>
                                            <div class="swiper-slide"><a class="gallery-lightbox" href="../assets/img/it-course/it.jpg"><img src="../assets/img/it-course/it.jpg" class="img-fluid" alt="">
                                                    <h5>BSIT DAYS</h5>
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