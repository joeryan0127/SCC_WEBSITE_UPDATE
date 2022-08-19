<?php
	session_start();
	// if(isset($_SESSION['username'])){
	// 	header('location: Page/dashboard.php');
	// 	exit();
	// }
	// else{
	// 	unset($_SESSION['username']);
	// }

  // if(isset($_SESSION['username'])){
  //   header('location: Accounting/dashboard.php');
  //   exit();
  // }
  // else{
  //   unset($_SESSION['username']);
  // }
?>
<script>
if (navigator.onLine) {
}else{
  window.location = "404.php";
}

</script>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SCC | Accounting</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets2/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets2/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets2/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets2/images/favicon.png" />
  </head>
  <body>
   <?php
    // echo password_hash('admin', PASSWORD_BCRYPT);


    ?> 
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Login</h3>
                <form method="post" action="login.inc.php">
                  <div class="form-group">
                    <label>Username or email *</label>
                    <input type="text" class="form-control p_input" name="username">
                  </div>
                  <div class="form-group">
                    <label>Password *</label>
                    <input type="password" class="form-control p_input" name="password">
                  </div>
                    <?php
                        if(isset($_SESSION['error'])){
                            echo "
                                <div class='callout callout-danger text-center mt20'>
                                    <p style='color: red'>".$_SESSION['error']."</p> 
                                </div>
                            ";
                            unset($_SESSION['error']);  
                        }
                    ?>
                  <div class="form-group d-flex align-items-center justify-content-between">
<!--                     <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <a href="#" class="forgot-pass">Forgot password</a> -->
                  </div>
                  <div class="text-center">
                    <button type="submit" name="login" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
<!--                   <div class="d-flex">
                    <button class="btn btn-facebook mr-2 col">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div>
                  <p class="sign-up">Don't have an Account?<a href="#"> Sign Up</a></p> -->
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets1/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets1/js/off-canvas.js"></script>
    <script src="assets1/js/hoverable-collapse.js"></script>
    <script src="assets1/js/misc.js"></script>
    <script src="assets1/js/settings.js"></script>
    <script src="assets1/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>