  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex fixed-top">
      <div id="topbarc" class="container d-flex align-items-center justify-content-center justify-content-md-between">
          <a href="index.php">
              <img class="img-fluid" src="assets/img/scc-logo.png" alt="scc-logo">
          </a>
          <div class="work-dt">
              <i class="bi bi-clock"></i> Monday - Friday, 8AM to 5PM / Saturday, 8AM to 12PM
          </div>
      </div>
  </div>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center justify-content-sm-center">

          <div class="me-auto"></div>
          <!-- navbar -->
          <nav id="navbar" class="navbar">
              <ul>
                  <li><a class="nav-link scrollto" id="mrgn-t" href="index.php#hero">Home</a></li>
                  <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
                  <li><a class="nav-link scrollto" href="index.php#departments">Courses</a></li>
                  <li><a class="nav-link scrollto" href="basiceduc/admission.php">Admission</a></li>
                  <li class="dropdown"><a class="nav-link"><span>Events</span> <i class="bi bi-chevron-down"></i></a>
                      <ul>
                          <li><a href="calendar-index.php">Calendar</a></li>
                      </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link"><span>Basic Education</span> <i class="bi bi-chevron-down"></i></a>
                      <ul>
                          <li><a id="portfolioModal1" href="basiceduc/indexbasiced.php#portfolio-details">PLAYGROUP</a></li>
                          <li><a id="portfolioModal3" href="basiceduc/indexbasiced.php#portfolio-details">PRESCHOOL</a></li>
                          <li><a id="portfolioModal4" href="basiceduc/indexbasiced.php#portfolio-details">GRADE SCHOOL</a></li>
                          <li><a id="portfolioModal5" href="basiceduc/indexbasiced.php#portfolio-details">JUNIOR HIGH SCHOOL</a></li>
                          <li><a id="portfolioModal6" href="basiceduc/indexbasiced.php#portfolio-details">SENIOR HIGH SCHOOL</a></li>
                      </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link"><span>Colleges</span> <i class="bi bi-chevron-down"></i></a>
                      <ul>
                          <li><a href="courses/indexit.php">BSIT | ACT</a></li>
                          <li><a href="courses/indexhm.php">BSHM | BSTM</a></li>
                          <li><a href="courses/indexba.php">BSBA</a></li>
                          <li><a href="courses/indexcrim.php">BSCRIM</a></li>
                          <li><a href="courses/indexeduc.php">BEED | BSED</a></li>
                      </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link"><span>Services Offered</span> <i class="bi bi-chevron-down"></i></a>
                      <ul>
                          <li><a href="tesda.php">TESDA</a></li>
                          <li><a href="clinic.php">Clinic Services</a></li>
                          <li><a href="guidance-services.php">Guidance Services</a></li>
                          <li><a href="camp-ministry.php">Campus Ministry</a></li>
                          <li><a href="faculty-staffs.php">Faculty and Staffs</a></li>
                          <li><a href="forms-manuals.php">Forms and Manuals</a></li>
                          <li><a href="https://scovs.000webhostapp.com/">Voting System</a></li>
                      </ul>
                  </li>
                  <a href="Student/studentLogin.php">
                      <button class="btn text-uppercase login-btn scrollto" id="main-top"><span class="d-none d-md-inline">I'm </span>Student</button>
                  </a>
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>
      </div>
  </header><!-- End Header -->
  <!-- Amenities Modals -->
  <?php
    include 'headers/amenities-modal.php';
    ?>
