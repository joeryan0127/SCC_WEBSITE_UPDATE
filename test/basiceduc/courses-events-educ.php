<?php
include '../headers/events-header.php';
?>
<!-- End Header Link -->
<?php
include '../headers/basic-educ-navigation.php';
?>
<!-- End Header -->
<!-- Masthead-->
<section class="page-section">
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="../assets/img/educ-course/logoeduc.jpg" alt="..." />
            <!-- Masthead Heading-->
            <h4 class="masthead-heading text-uppercase mb-0" style="color:black">BEED | BSED EVENTS</h4>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-info-circle"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->

        </div>
    </header>
    <!-- Portfolio Section-->
    <section class="portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <!-- Portfolio Item 1-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-expand fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="../assets/img/basic-education/portfolio/pgg.png" alt="..." />
                    </div>
                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Poetry</h2>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Porfolio  Section Form-->

    <!-- Footer-->
    <!-- Portfolio Modals-->
    <!-- Portfolio Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Poetry</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <p class="mb-4"><strong><i>Date Posted:<br> May 26, 2022</i></strong></p>
                                <p class="mb-4">Decription</p>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="../assets/img/basic-education/portfolio/pgg.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
            
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 
</section>
<!-- ======= Footer ======= -->
<?php
include '../headers/events-footer.php'
?>
