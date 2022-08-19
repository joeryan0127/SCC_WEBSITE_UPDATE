<?php
session_start();
include 'headers/header.php';
?>
<!-- End Header Link -->
<?php
include 'headers/navigation-bar.php';
?>
<!-- End Header -->

<!-- ======= Hero Banner Section ======= -->
<section id="hero" class="d-flex justify-content-center align-items-center">
  <div class="container position-relative" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0">
    <div class="quote-text-align d-flex align-items-center text-center">
      <h1>"CHALLENGES MINDS, HOMES HEARTS, CHANGES LIVES."</h1>
    </div>
  </div>
</section><!-- End Hero Banner -->

<main id="main">
  <!-- ======= Featured Services Section ======= -->
  <section id="featured-services" class="featured-services">
    <div class="container" data-aos="fade-up">
      <div class="featured-services-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fas fa-child"></i></div>
              <h4 class="title"><a id="portfolioModal1" href="basiceduc/indexbasiced.php#portfolio-details">Playgroup</a></h4>
              <p class="description">For a kid with learning difficulties, disabilities, or giftedness is referred to as special education.</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fas fa-paint-brush"></i></div>
              <h4 class="title"><a id="portfolioModal2" href="basiceduc/indexbasiced.php#portfolio-details">SpEd</a></h4>
              <p class="description">For a kid with learning difficulties, disabilities, or giftedness is referred to as special education.</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fas fa-shapes"></i></div>
              <h4 class="title"><a id="portfolioModal3" href="basiceduc/indexbasiced.php#portfolio-details">Preschool</a></h4>
              <p class="description">An educational establishment or learning space offering early childhood education.</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-book-reader"></i></div>
              <h4 class="title"><a id="portfolioModal4" href="basiceduc/indexbasiced.php#portfolio-details">Grade School</a></h4>
              <p class="description">Primary School (Primary Education) –K to 6</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-award"></i></div>
              <h4 class="title"><a id="portfolioModal5" href="basiceduc/indexbasiced.php#portfolio-details">Junior High School</a></h4>
              <p class="description">Junior High School (Lower Secondary Education) – 7 to 10</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-graduation-cap"></i></div>
              <h4 class="title"><a id="portfolioModal6" href="basiceduc/indexbasiced.php#portfolio-details">Senior High School</a></h4>
              <p class="description">Senior High School (Upper Secondary Education) – 11 to 12</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-user-graduate"></i></div>
              <h4 class="title"><a href="">College</a></h4>
              <p class="description">Colleges typically offer specialised courses (e.g. Hotel & Restaurant Management, Business Administration, Information Technology).</p>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section><!-- End Featured Services Section -->

  <!-- News and Updates Section -->
  <?php
  include 'news-updates.php';
  ?>
  <!-- End of News and Updates section -->

  <!-- ======= Video Section ======= -->
  <section id="video-container" class="video-container">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <div class="glitch" data-glitch="Virtual Tour">Virtual Tour</div>
        <h2 class="pb-0"></h2>
      </div>
      <div class="row flex-sm-nowrap justify-content-center">
        <div class="video-wrap" data-aos="fade-right">
          <iframe class="video-card" id="existing-iframe-example" src="https://www.youtube.com/embed/w1CrlY7oiZ8?autoplay=1&mute=1&enablejsapi=1&amp;html5=1&amp;iv_load_policy=3&amp;rel=0&amp;showinfo=0" allow='autoplay' allowfullscreen="true" frameborder="0" data-aos="fade-right"></iframe>
        </div>
        <div id="video-desc" class="ms-md-4 pt-lg-0 flex-sm-shrink-1" data-aos="fade-left">
          <h3>St. Cecilia's College – Cebu, Inc. (SCC - CI)</h3>
          <p>&nbsp;&nbsp;&nbsp;is a private educational institution in Minglanilla, Cebu. It started out in 1999 as the St. Cecilia's Child Development Center, offering programs for preschool students. In 2004, the school was renamed into a college and opened its elementary and high school departments. Three years later, the college department opened with course offerings in Teacher Education, Business Administration, Information Technology, and Information Systems. St. Cecilia's College is currently a Lasallian School Supervision Office (LASSO) Consultancy School.</p>
          <p>At present, the St. Cecilia's College offers complete programs from the preschool to the college level, including Special Education (SPED). It has a Senior High School (SHS) department with available strands from the Academic and the Technical-Vocational-Livelihood (TVL) tracks. Its college department, on the other hand, provides undergraduate programs in Hospitality and Tourism Management, Business Administration, Teacher Education, Criminology, and Information Technology. Also available is an associate program in Computer Technology.</p>
        </div>
      </div>
    </div>
  </section><!-- End Cta Section -->

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>About Us</h2>
      </div>
      <div class="row flex-sm-nowrap">
        <div class="col-lg-4" id="about-img" data-aos="fade-right">
          <img src="assets/img/building.jpg" class="img-fluid" alt="img1">
          <img src="assets/img/allevo.jpg" class="img-fluid mt-4" alt="img2">
          <div class="link-hist"><a href="history.php">Read More</a></div>
        </div>
        <div class="ms-md-3 pt-4 pt-lg-0 content flex-sm-shrink-1" data-aos="fade-left">
          <h3>Vision Statement</h3>
          <p class="mb-4">
            <b>SCC</b> is a non-stock, non-profit educational institution that envisions itself to be a Center of excellence in Academics, Technology, and the Arts. It aspires to produce professionals and leaders who are globally competitive, imbued with Christian values, integrity, patriotism and stewardship, through quality human education.
          </p>
          <h3>Mission Statement</h3>
          <p>
            <b>SCC</b>, following the ideals of St. Cecilia, commits itself to:
          </p>
          <ul class="mb-4">
            <li>1. &nbsp;&nbsp;Cutivate and inculcate Christian values to its pupils/students to become men and women of faith and integrity;</li>
            <li>2. &nbsp;&nbsp;Provide the students with knowledge and skills in academic, technology and the arts through the use of modern teaching methods and techniques;</li>
            <li>3. &nbsp;&nbsp;Foster the development of love for country and service to fellowmen;</li>
            <li>4. &nbsp;&nbsp;Upgrade the teachers' skills and competencies in classroom instruction and management through Faculty Development Program;</li>
            <li>5. &nbsp;&nbsp;Develop the critical thinking skills of students;</li>
            <li>6. &nbsp;&nbsp;Provide opportunities to students;</li>
            <li>7. &nbsp;&nbsp;Inculcate in the students the love, care and preservation of Mother nature.</li>
          </ul>
          <ul class="ab-list">
            <div data-bs-toggle="collapse" class="collapsed question" href="#ab1">
              <i class="bi bi-chevron-down ab-icon-show"></i><i class="bi bi-chevron-up ab-icon-close"></i>Cecilian Core Values
            </div>
            <div id="ab1" class="collapse" data-bs-parent=".ab-list">
              <li><i class="bi bi-check-circle"></i> Christ-centeredness: Cecilians put Christ as the center of their thoughts and actions by doing things for the common good. They have strong sympathy and empathy towards others.</li>
              <li><i class="bi bi-check-circle"></i> Excellence: Cecilians have strong desire to excel in imparting knowledgeand skills with enthusiasm and goodwill.</li>
              <li><i class="bi bi-check-circle"></i> Commitment: Cecilians are able to give their best and do what is beyond one's task. They are self-motivated and determines to develop themselves wholistically.</li>
              <li><i class="bi bi-check-circle"></i> Integrity: Cecilians act in an honest and trustworthy manner based on personal accountability and a moral conviction to do the right thing.</li>
              <li><i class="bi bi-check-circle"></i> Love of Country: Cecilians priopritize the national interest, show love and respect for the Filipino culture and tradition, prioritize its own products and actively participate in community service.</li>
              <li><i class="bi bi-check-circle"></i> Innovativeness: Cecilians are open-minded, effective, functional, dynamic, and resourceful in creating and learningnew things. They are logical and artistic in expressing themselves through arts in bringing life to a reality.</li>
              <li><i class="bi bi-check-circle"></i> Arts Lover: Cecilians have a heart for arts in creating, building, appreciating and understanding everything created by God and made by man. They have the capacity to express themselves, and the passion to capture the interest of individuals through arts.</li>
              <li><i class="bi bi-check-circle"></i> Nurturance: Cecilians show care and concern for God's creation. They hold dearly the knowledge and skills imparted to them and strive to the develop and maintain a peaceful and harmonious relationship in the community.</li>
            </div>
          </ul>
        </div>
      </div>
    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts pt-3">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>THE PLACE WHERE</h2>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="count-box text-center">
            <i class='bi bi-award'></i>
            <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
            <br>
            <h4><strong>LPT PASSING RATE</strong></h4>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="count-box text-center">
            <i class='bi bi-award'></i>
            <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
            <br>
            <h4><strong>NC II HOLDER PASSING RATE</strong></h4>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="count-box text-center">
            <i class='bi bi-award'></i>
            <span data-purecounter-start="0" data-purecounter-end="90" data-purecounter-duration="1" class="purecounter"></span>
            <br>
            <h4><strong>TOP PERFORMING SCHOOL</strong></h4>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="400">
          <div class="count-box text-center">
            <i class='bi bi-award'></i>
            <h1><span data-purecounter-start="0" data-purecounter-end="80" data-purecounter-duration="1" class="purecounter"></span></h1>
            <br>
            <h4><strong>AWARDS</strong></h4>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Counts Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Amenities</h2>
      </div>
      <div class="row">
        <?php
        include 'amenities/chemistry.php';
        ?>
        <?php
        include 'amenities/clinic.php';
        ?>
        <?php
        include 'amenities/audi.php';
        ?>
        <?php
        include 'amenities/lib.php';
        ?>
        <?php
        include 'amenities/pgr.php';
        ?>
        <?php
        include 'amenities/bsket.php';
        ?>
        <?php
        include 'amenities/comlab.php';
        ?>
        <?php
        include 'amenities/crim.php';
        ?>
        <?php
        include 'amenities/avr.php';
        ?>
        <?php
        include 'amenities/NC2.php';
        ?>
        <?php
        include 'amenities/chapel.php';
        ?>
        <?php
        include 'amenities/bank.php';
        ?>
      </div>
    </div>
  </section><!-- End Services Section -->

  <!-- ======= Departments Section ======= -->
  <section id="departments" class="departments">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Courses</h2>
        <p>SCC offers a variety of of courses to choose from which all are all in demand and result to high paying jobs.
        </p>
      </div>
      <div class="row">
        <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-right">
          <ul class="nav nav-tabs flex-column dep-list">
            <li class="nav-item">
              <a class="nav-link active show-" data-bs-toggle="tab" data-bs-target="#tab-1">
                <div data-bs-toggle="collapse" class="collapsed question" href="#drop-1">
                  <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                  <h4>IT-Related</h4>
                  <p>Bachelor of Science in Information Technology (BSIT)</p>
                  <p>Associate in Computer Technology (ACT)</p>
                </div>
              </a>
              <div id="drop-1" class="collapse" data-bs-parent=".dep-list">
                <div class="tab-pane">
                  <h3>BSIT</h3>
                  <p class="fst-italic">Bachelor of Science in Information Technology(BSIT)</p>
                  <p>The study of utilization of computers and computer software and plan, installation, customize, operate, manage, administer and maintain information technology infrastructure.</p>
                  <p>The world is now in the Information Age. Computers are in every single industry. The demand for IT professionals is continuously growing just in the Philippines but all over the world. It's currently one of the highest paying jobs.For our IT program, SCC has industry linkages with Techvitals and others for our graduates possible employment.</p>
                  <p>The main purpose is to:</p>
                  <p>Prepare the students to be IT professional, be well versed in application, installation, operation, development, maintenance, administration, and familiar with hardware installation, operation and maintenance.</p>
                  <h3>ACT</h3>
                  <p class="fst-italic">Associate in Computer Technology (ACT)</p>
                  <p>A 2-year degree program that provides specialized tracks on application development, networking, multimedia development where software testing, analytics, computer security.</p>
                </div>
              </div>
            </li>
            <li class="nav-item mt-2">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                <div data-bs-toggle="collapse" class="collapsed question" href="#drop-2">
                  <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                  <h4>Hospitality and Tourism Management</h4>
                  <p>Bachelor of Science in Hospitality Management (BSHM)</p>
                  <p>Bachelor of Science in Tourism Management (BSTM)</p>
                </div>
              </a>
              <div id="drop-2" class="collapse" data-bs-parent=".dep-list">
                <div class="tab-pane">
                  <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
                    <div class="carousel-inner" role="listbox">
                      <!-- Slide 1 -->
                      <div class="carousel-item active">
                        <h3>BSHM</h3>
                        <p class="fst-italic">Bachelor of Science in Hospitality Management (BSHM)</p>
                        <p>Hospitality is made up of those business that offer one or more of the following:</p>
                        <p>✓ Provide accommodation</p>
                        <p>✓ Prepare food and beverage service and or</p>
                        <p>✓ Entertainment for the traveller.</p>
                        <P>The purpose is to create and maintain profitable customer and the central goal is customer satisfaction that is leading to profit. It aims to equip the students with competence to obtain success in hospitality industry thus, there is a need to:</p>
                        <P>a. Have more understanding of business and financial operations.</p>
                        <P>b. Possess an authentic sense of hospitality</p>
                        <P>c. Combine solid business skills with sincere and gracious hospitality.</p>
                        <P>d. Understand the way the business works, how it can be profitable, and what opportunities lie ahead to revitalized the essential qualities of excitement, service, fulfillment, and personal satisfaction that the industry has to offer and can continue to provide.</p>
                      </div>
                      <!-- Slide 2 -->
                      <div class="carousel-item">
                        <h3>BSTM</h3>
                        <p class="fst-italic">Bachelor of Science in Tourism Management (BSTM)</p>
                        <p>Tourism is the science, art and business of attracting visitors transporting them, accommodating them, and graciously catering to their needs and wants.</p>
                        <p>It aims to imbue the students with the:</p>
                        <p>Components of tourism, basic approaches to the study of tourism, economic importance of tourism, and the benefits and costs of the tourism industry.</p>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                    </a>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item mt-2">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                <div data-bs-toggle="collapse" class="collapsed question" href="#drop-3">
                  <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                  <h4>Business Administration</h4>
                  <p>Bachelor of Science in Business Administration (BSBA)</p>
                </div>
              </a>
              <div id="drop-3" class="collapse" data-bs-parent=".dep-list">
                <div class="tab-pane">
                  <h3>BSBA</h3>
                  <p class="fst-italic">Bachelor of Science in Business Administration (BSBA)</p>
                  <p>Majors:</p>
                  <p>☛ Marketing Management</p>
                  <p>☛ Financial Management</p>
                  <p>☛ Human Resource Development Management</p>
                  <p>☛ Business Economics</p>
                  <p>☛ Operations Management</p>
                  <p>The Business Administration Program is interdisciplinary and problem-focused which comprises three integrated elements: basic business, business core and professional courses. </p>
                  <p>The program covers the integrated approach and interrelationship among the funtional areas of business as well as the sensitivity to the economic, social, technological, legal and international environment in which business must operate.</p>
                  <p>Our BSBA program has several majors to choose from. Being one of the oldest courses available, this also the most resilent of all. This is non-cyclical so demand for its graduates is always there. BA graduates are always needed in all industries/businesses be it small or big, local or international. For our BSBA program, we have industry linkages with RNG Coastal Bank and Banco Maximo who are willing to absorb our graduates.</p>
                  <p>Program Objectives:</p>
                  <p>a. In still and nurture important qualities and skills in our students that are essential for future business leadership and organizational success.</p>
                  <p>b. Prepare the graduates for a career in office and business administration specially in various general and specialized administrative support, supervisory and managerial positions.</p>
                  <p>c. Equip graduates with the competencies, skills, knowledge and work values necessary for all employment.</p>
                </div>
              </div>
            </li>
            <li class="nav-item mt-2">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                <div data-bs-toggle="collapse" class="collapsed question" href="#drop-4">
                  <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                  <h4>Criminal Justice Education</h4>
                  <p>Bachelor of Science in Criminology (BSCRIM)</p>
                </div>
              </a>
              <div id="drop-4" class="collapse" data-bs-parent=".dep-list">
                <div class="tab-pane">
                  <h3>BSCRIM</h3>
                  <p class="fst-italic">Bachelor of Science in Criminology (BSCRIM)</p>
                  <p>The Criminology program is envisioned to actively and continually involve in producing graduates who have the holistic knowledge and skills in addressing the problem of criminality in the country and the global competence to meet the challenge of globalization in the field of criminology.</p>
                </div>
              </div>
            </li>
            <li class="nav-item mt-2">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
                <div data-bs-toggle="collapse" class="collapsed question" href="#drop-5">
                  <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                  <h4>Education</h4>
                  <p>Bachelor of Elementary Education (BEEd)</p>
                  <p>Bachelor of Secondary Education (BSEd)</p>
                </div>
              </a>
              <div id="drop-5" class="collapse" data-bs-parent=".dep-list">
                <div class="tab-pane">
                  <h3>BEEd/BSEd</h3>
                  <p class="fst-italic">Bachelor of Elementary Education (BEEd)</p>
                  <p>The BEEd is designed to meet the needs of professional teachers for elementary education schools, who are generalists and who can teach across the different learning areas.</p>
                  <p class="fst-italic">Bachelor of Secondary Education (BSEd)</p>
                  <p>The BSEd is designed to meet the needs of professional teachers who can teach in one of the different learning areas in secondary like Mathematics, Physical Sciences,Biological Sciences, English, Filipino, Social Sciences, among others.</p>
                  <p>☛ Bachelor in Elementary Education major in Preschool, General Education and Special Education</p>
                  <p>☛ Bachelor in Secondary Education major in English and Mathematics</p>
                  <p>With the upcoming implementation of the K to 12 curriculum in both private and public schools, the demand for teachers will be more than the supply, thus there will be shortage of teachers and employment will then be easy. Furthermore, foreign demand of Filipino teachers especially for English is very high.</p>
                  <p>Program Objectives</p>
                  <p>Teacher Education principally aims to prepare students to become globally competent, imbued with sufficient knowledge, values and skills for efficient and effective teaching and learning.</p>
                  <p>Specifically, Teacher Education Programs produce teachers who:</p>
                  <p>a. Have the basic and higher levels of literacy, communication, numeracy, critical thinking, learning skills needed for higher learning.</p>
                  <p>b. Have a deep and principled understanding of the learning, process and the role of the teacher in facilitating these processes in their students.</p>
                  <p>c. Can facilitate learning of diverse types of learners, in diverse types of learning environments, using a wide range of teaching knowledge and skills.</p>
                  <p>d. Can be creative and innovative in thinking of alternative teaching/learning system, take innovations and evaluate the effectiveness in improving student learning.</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-lg-8" data-aos="fade-left">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <h3>BSIT</h3>
              <p class="fst-italic">Bachelor of Science in Information Technology(BSIT)</p>
              <p>The study of utilization of computers and computer software and plan, installation, customize, operate, manage, administer and maintain information technology infrastructure.</p>
              <p>The world is now in the Information Age. Computers are in every single industry. The demand for IT professionals is continuously growing just in the Philippines but all over the world. It's currently one of the highest paying jobs.For our IT program, SCC has industry linkages with Techvitals and others for our graduates possible employment.</p>
              <p>The main purpose is to:</p>
              <p>Prepare the students to be IT professional, be well versed in application, installation, operation, development, maintenance, administration, and familiar with hardware installation, operation and maintenance.</p>
              <h3>ACT</h3>
              <p class="fst-italic">Associate in Computer Technology (ACT)</p>
              <p>A 2-year degree program that provides specialized tracks on application development, networking, multimedia development where software testing, analytics, computer security.</p>
            </div>
            <div class="tab-pane" id="tab-2">
              <p>These are courses in demand both locally and internationally. Philippine and world tourism is project to grow in an unpredicted level. With it, there will be more hotels, resorts, restaurants, and other travel/tourism related industries. You can also work on abroad cruise ships or be tour/tourist guides.</p>
              <h3>BSHM</h3>
              <p class="fst-italic">Bachelor of Science in Hospitality Management (BSHM)</p>
              <p>Hospitality is made up of those business that offer one or more of the following:</p>
              <p>✓ Provide accommodation</p>
              <p>✓ Prepare food and beverage service and or</p>
              <p>✓ Entertainment for the traveller.</p>
              <P>The purpose is to create and maintain profitable customer and the central goal is customer satisfaction that is leading to profit. It aims to equip the students with competence to obtain success in hospitality industry thus, there is a need to:</p>
              <P>a. Have more understanding of business and financial operations.</p>
              <P>b. Possess an authentic sense of hospitality</p>
              <P>c. Combine solid business skills with sincere and gracious hospitality.</p>
              <P>d. Understand the way the business works, how it can be profitable, and what opportunities lie ahead to revitalized the essential qualities of excitement, service, fulfillment, and personal satisfaction that the industry has to offer and can continue to provide.</p>
              <h3>BSTM</h3>
              <p class="fst-italic">Bachelor of Science in Tourism Management (BSTM)</p>
              <p>Tourism is the science, art and business of attracting visitors transporting them, accommodating them, and graciously catering to their needs and wants.</p>
              <p>It aims to imbue the students with the:</p>
              <p>Components of tourism, basic approaches to the study of tourism, economic importance of tourism, and the benefits and costs of the tourism industry.</p>
            </div>
            <div class="tab-pane" id="tab-3">
              <h3>BSBA</h3>
              <p class="fst-italic">Bachelor of Science in Business Administration (BSBA)</p>
              <p>Majors:</p>
              <p>☛ Marketing Management</p>
              <p>☛ Financial Management</p>
              <p>☛ Human Resource Development Management</p>
              <p>☛ Business Economics</p>
              <p>☛ Operations Management</p>
              <p>The Business Administration Program is interdisciplinary and problem-focused which comprises three integrated elements: basic business, business core and professional courses. </p>
              <p>The program covers the integrated approach and interrelationship among the funtional areas of business as well as the sensitivity to the economic, social, technological, legal and international environment in which business must operate.</p>
              <p>Our BSBA program has several majors to choose from. Being one of the oldest courses available, this also the most resilent of all. This is non-cyclical so demand for its graduates is always there. BA graduates are always needed in all industries/businesses be it small or big, local or international. For our BSBA program, we have industry linkages with RNG Coastal Bank and Banco Maximo who are willing to absorb our graduates.</p>
              <p>Program Objectives:</p>
              <p>a. In still and nurture important qualities and skills in our students that are essential for future business leadership and organizational success.</p>
              <p>b. Prepare the graduates for a career in office and business administration specially in various general and specialized administrative support, supervisory and managerial positions.</p>
              <p>c. Equip graduates with the competencies, skills, knowledge and work values necessary for all employment.</p>
            </div>
            <div class="tab-pane" id="tab-4">
              <h3>BSCRIM</h3>
              <p class="fst-italic">Bachelor of Science in Criminology (BSCRIM)</p>
              <p>The Criminology program is envisioned to actively and continually involve in producing graduates who have the holistic knowledge and skills in addressing the problem of criminality in the country and the global competence to meet the challenge of globalization in the field of criminology.</p>
            </div>
            <div class="tab-pane" id="tab-5">
              <h3>BEEd/BSEd</h3>
              <p class="fst-italic">Bachelor of Elementary Education (BEED)</p>
              <p>The BEEd is designed to meet the needs of professional teachers for elementary education schools, who are generalists and who can teach across the different learning areas.</p>
              <p class="fst-italic">Bachelor of Secondary Education (BSED)</p>
              <p>The BSEd is designed to meet the needs of professional teachers who can teach in one of the different learning areas in secondary like Mathematics, Physical Sciences,Biological Sciences, English, Filipino, Social Sciences, among others.</p>
              <p>☛ Bachelor in Elementary Education major in Preschool, General Education and Special Education</p>
              <p>☛ Bachelor in Secondary Education major in English and Mathematics</p>
              <p>With the upcoming implementation of the K to 12 curriculum in both private and public schools, the demand for teachers will be more than the supply, thus there will be shortage of teachers and employment will then be easy. Furthermore, foreign demand of Filipino teachers especially for English is very high.</p>
              <p>Program Objectives</p>
              <p>Teacher Education principally aims to prepare students to become globally competent, imbued with sufficient knowledge, values and skills for efficient and effective teaching and learning.</p>
              <p>Specifically, Teacher Education Programs produce teachers who:</p>
              <p>a. Have the basic and higher levels of literacy, communication, numeracy, critical thinking, learning skills needed for higher learning.</p>
              <p>b. Have a deep and principled understanding of the learning, process and the role of the teacher in facilitating these processes in their students.</p>
              <p>c. Can facilitate learning of diverse types of learners, in diverse types of learning environments, using a wide range of teaching knowledge and skills.</p>
              <p>d. Can be creative and innovative in thinking of alternative teaching/learning system, take innovations and evaluate the effectiveness in improving student learning.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Departments Section -->

  <!-- ======= Testimonials Section ======= -->
  <?php
  include 'testimonials.php';
  ?>
  <!-- End Testimonials Section -->

  <!-- ======= Tesda Section ======= -->
  <section class="tesda-container">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Tesda – Accredited</h2>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4" data-aos="fade-right">
          <img class="img-fluid w-100" src="assets/img/tesda.png">
        </div>
        <div class="col-lg-7" data-aos="fade-left">
          <p class="lead font-weight-normal">The technical training division of the parent organization, St. Cecilia's College - Cebu, Inc., is the St. Cecilia's College (SCC). The center was established on the premises of SCC to expand its service to humanity with the goal of offering affordable technical-vocational training and acting as a gateway to limitless potential.....<a  href="tesda.php">Read More</a></p>
          
          <!-- class="btn" -->
        </div>
      </div>
    </div>
  </section><!-- End Tesda Section -->

  <!-- ======= Gallery Section ======= -->
  <section id="gallery" class="gallery">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>SCC Moments</h2>
      </div>
      <div class="gallery-slider swiper" data-aos="zoom-in">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/SCC/M1.png"><img src="assets/img/SCC/M1.png" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/SCC/M2.png"><img src="assets/img/SCC/M2.png" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/SCC/M3.png"><img src="assets/img/SCC/M3.png" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/SCC/M4.png"><img src="assets/img/SCC/M4.png" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/SCC/M5.png"><img src="assets/img/SCC/M5.png" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/SCC/M6.png"><img src="assets/img/SCC/M6.png" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/SCC/BSEE2.png"><img src="assets/img/SCC/BSEE2.png" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/SCC/M8.png"><img src="assets/img/SCC/M8.png" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/SCC/BSIT.png"><img src="assets/img/SCC/BSIT.png" class="img-fluid" alt=""></a></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section><!-- End Gallery Section -->

   <!-- ======= Gallery Section ======= -->
   <!-- <section id="gallery" class="gallery">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>SCC Event</h2>
      </div>
      <div class="gallery-slider swiper" data-aos="zoom-in">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/SCC/M1.png"><img src="assets/img/SCC/M1.png" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/SCC/M2.png"><img src="assets/img/SCC/M2.png" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/SCC/M3.png"><img src="assets/img/SCC/M3.png" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/SCC/M4.png"><img src="assets/img/SCC/M4.png" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/SCC/M5.png"><img src="assets/img/SCC/M5.png" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/SCC/M6.png"><img src="assets/img/SCC/M6.png" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/SCC/BSEE2.png"><img src="assets/img/SCC/BSEE2.png" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/SCC/M8.png"><img src="assets/img/SCC/M8.png" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/SCC/BSIT.png"><img src="assets/img/SCC/BSIT.png" class="img-fluid" alt=""></a></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section> -->
  
  <!-- End Gallery Section -->

  <!-- ======= Academic & Non-Academic Scholar Section ======= -->
  <section id="pricing" class="pricing">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Scholarships Offer</h2>
        <p class="fst-italic">Bridging the New Normal to your bright FUTURE!</p>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="box">
            <h3>COLLEGE </h3>
            <ul>
              <li>UniFAST/TES</li>
              <li>TDP-TES</li>
              <li>Academic Scholar</li>
              <li>Non-academic Scholar</li>
              <li>Cultural Scholar</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
          <div class="box">
            <h3>SENIOR HIGH SCHOOL</h3>
            <ul>
              <li>FREE Senior High School thru DepED Voucher</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
          <div class="box">
            <h3>JUNIOR HIGH</h3>
            <ul>
              <li>Academic Scholar for incoming Grade 7</li>
              <li>ESC-for incoming Grade 7</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
          <div class="box">
            <h3>ELEMENTARY</h3>
            <ul>
              <li>Academic Scholar for incoming Grade 1 (new student)</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Academic & Non-Academic Scholar Section -->

  <!-- ======= Frequently Asked Questions Section ======= -->
  <section id="faq" class="faq container-fluid">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
      </div>
      <div class="d-flex justify-content-center">
        <div class="col-lg-4">
          <ul class="faq-list">
            <li data-aos="fade-right" data-aos-delay="100">
              <div data-bs-toggle="collapse" href="#faq1" class="collapsed question"><i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>What scholarships can be availed of?</div>
              <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Academic & Non-Academic Scholar<br>Cultural Scholarship<br>CHED & UniFAST Scholarship
                </p>
              </div>
            </li>

            <li data-aos="fade-left" data-aos-delay="200">
              <div data-bs-toggle="collapse" href="#faq2" class="collapsed question"><i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>How much is the enrollment fee?</div>
              <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  The enrollment fee is 1000 pesos.
                </p>
              </div>
            </li>

            <li data-aos="fade-right" data-aos-delay="300">
              <div data-bs-toggle="collapse" href="#faq3" class="collapsed question"><i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>What are the requirements for enrollment?</div>
              <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  In-coming freshmen<br>1.Report Card Original<br>2.Good moral<br>3.NSO(Photocopy)<br>4.2x2 picture(4pcs)
                </p>
              </div>
            </li>

            <li data-aos="fade-left" data-aos-delay="400">
              <div data-bs-toggle="collapse" href="#faq4" class="collapsed question"><i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>What are the transferee requirements?</div>
              <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  1.TOR (Transcript of Records)<br>2.Honorable Dismissal<br>3.Good moral<br>4.NSO(Photocopy)<br>5.2x2 picture(4pcs)
                </p>
              </div>
            </li>
            <li data-aos="fade-right" data-aos-delay="500">
              <div data-bs-toggle="collapse" href="#faq5" class="collapsed question"><i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>What are the UniFAST requirements?</div>
              <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  1.2x2 ID Picture(1pc)<br>2.Photocopy of NSO(1pc)<br>3.Barangay Residency
                </p>
              </div>
            </li>
            <li data-aos="fade-left" data-aos-delay="600">
              <div data-bs-toggle="collapse" href="#faq6" class="collapsed question"><i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>What are the prerequisites for SHS?</div>
              <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                <p>
                  1.Report Card<br>2.Good Moral<br>3.NSO/PSA Photocopy(3pcs)<br>4.2x2 Picture (4pcs)
                </p>
              </div>
            </li>

            <li data-aos="fade-right" data-aos-delay="700">
              <div data-bs-toggle="collapse" class="collapsed question" href="#faq7"><i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>What are the cecilian core values?</div>
              <div id="faq7" class="collapse" data-bs-parent=".faq-list">
                <p>
                  It aspires to produce professionals and leaders who are globally competitive, imbued with Christian values, integrity, patriotism and stewardship, through quality human education.
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section><!-- End Frequently Asked Questions Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Contact</h2>
      </div>
      <div class="row">
        <div class="col-lg-6" data-aos="fade-right">
          <iframe style="border:0; width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15704.837505262718!2d123.7944106!3d10.2446906!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x377f6ed9ed966fe7!2sSt.%20Cecilia&#39;s%20College%20-%20Cebu%2C%20Inc.!5e0!3m2!1sen!2sph!4v1648177286595!5m2!1sen!2sph" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col-lg-6" data-aos="fade-left">
          <iframe src="https://www.google.com/maps/embed?pb=!4v1651472299449!6m8!1m7!1sHJWZBWDJbLN3VOeHkuZaPg!2m2!1d10.24494481877671!2d123.7941309315603!3f126.99847423847496!4f21.45946118187348!5f0.7820865974627469" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="d-flex justify-content-center mt-5" id="contain-form">
        <div class="col-lg-6" id="form" data-aos="zoom-in-up">
          <form action="send_message.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col form-group">
                <h4>We are eager to hear your concern!</h4>
                <div class="my-3">
                  <?php
                  if (isset($_SESSION['success'])) {
                    echo "
                                <div style='color: green; text-align: center;' >
                                    <p>" . $_SESSION['success'] . "</p> 
                                </div>
                            ";
                    unset($_SESSION['success']);
                  }
                  ?>
                </div>
                <input type="text" name="name" class="form-control" id="name" placeholder="Please enter your complete name:" required>
                <div class="col form-group mt-3">
                  <input type="email" name="email" class="form-control" id="email" placeholder="Please enter your email:" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Major cause of concern:" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Your message:" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message"></div>
              </div>
              <div class="text-center submit-btn">
                <button type="submit" name="send_mail">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- ======= Partnership Section ======= -->
  <section id="partnership" class="partnership">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Partnership</h2>
      </div>
      <div class="partnership-slider swiper" data-aos="zoom-out">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="assets/img/partnership/MIIT.png" class="img-fluid" alt="MIIT"></div>
          <div class="swiper-slide"><img src="assets/img/partnership/delasalle.png" class="img-fluid" alt="Dela Salle"></div>
          <div class="swiper-slide"><img src="assets/img/partnership/BM.png" class="img-fluid" alt="Banco Maximo"></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section><!-- End Partnership Section -->

  <!-- COOKIES CONSENT -->
  <div class="wrapper">
    <img src="assets/img/cookie.png" alt="">
    <div class="content">
      <header>Cookies Consent</header>
      <p>This website use cookies to ensure you get the best experience on our website.</p>
      <div class="buttons">
        <button class="item">I understand</button>
      </div>
    </div>
  </div><!-- END OF COOKIES CONSENT -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php
include 'headers/footer.php'
?>
