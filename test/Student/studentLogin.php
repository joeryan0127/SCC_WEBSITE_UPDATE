<?php
session_start();
if (isset($_SESSION['student'])) {
    header('location: student-index.php');
    exit();
} else {
    unset($_SESSION['student']);
}
?>
<?php
include 'header.php';
?>
<section>
    <div class="d-inline-block w-100">

        <div class="row">
            <main>
                <div class="auth-form">
                    <div class="auth-form-body border border-top rounded-3">
                        <div class="text-center w-100 pb-4">
                            <a href="../index.php">
                                <img class="text-center" src="../assets/img/scc-logo.webp" width="100" height="100">
                            </a>
                        </div>
                        <div class="text-center">
                            <p class="fs-4 fw-light">Sign in to SCC</p>
                        </div>
                        <form action="login.php" method="post" enctype="multipart/form-data">
                            <label for="student-id" class="d-block mb-2">School ID</label>
                            <input type="text" name="user_email" id="user_email" class="form-control d-block w-100 mb-3">
                            <span id="check-e"></span>
                            <div class="position-relative">
                                <label for="password" class="d-block mb-2">Password</label>
                                <input type="password" name="password" id="password" class="form-control mb-4">
                                <div class="text-center">
                                    <?php
                                    if (isset($_SESSION['error'])) {
                                        echo "<div style='color:red;'>
                                                <p>" . $_SESSION['error'] . "</p> 
                                            </div>
                                        ";
                                        unset($_SESSION['error']);
                                    }
                                    ?>
                                </div>
                                <input type="submit" name="login_button" id="login_button" value="Sign in" class="btn btn-success d-block w-100 fw-bold" style="font-size: 14px;">
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
</section>

<script src="../assets/vendor/purecounter/purecounter.js"></script>
<script src="../assets/vendor/aos/aos.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>
