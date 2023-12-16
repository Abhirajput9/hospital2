<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sargam Multispeciality Hospital Pvt. Ltd. Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Sargam Multispeciality Hospital Pvt. Ltd.
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/Sargam Multispeciality Hospital Pvt. Ltd.-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <?php
  // Database connection settings
  $host = "localhost";
  $db_name = "hospitals_main";
  $username = "root";
  $password = "";

  // $host = "localhost";
  // $db_name = "jkbpiqkq_hospitals_main";
  // $username = "jkbpiqkq_sargam_user";
  // $password = "Xd_yaK3}%G@a";



  try {
    $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Retrieve and list products from the database
    // Retrieve and list products from the database
    $products = $conn->query("SELECT * FROM prdcts where (category = 'Company' AND description = '0') ORDER BY category ASC, content_id ASC ")->fetchAll(PDO::FETCH_ASSOC);
    $products1 = $conn->query("SELECT * FROM prdcts WHERE (category = 'Company' AND description = '1') ORDER BY category ASC, content_id ASC")->fetchAll(PDO::FETCH_ASSOC);
    $doctors = $conn->query("SELECT * FROM prdcts where category='Doctor' ORDER BY category ASC, content_id ASC")->fetchAll(PDO::FETCH_ASSOC);
    $galleryImages = $conn->query("SELECT image FROM prdcts WHERE category = 'Gallery' ORDER BY category ASC, content_id ASC")->fetchAll(PDO::FETCH_COLUMN);
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }

  $conn = null;
  ?>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">sargamhospital@gmail.com</a>
        <i class="bi bi-phone"></i><a href="">+919409248080</a>
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="https://www.facebook.com/profile.php?id=100063910340768&mibextid=ZbWKwL" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://instagram.com/sargammultispecialityhospital?igshid=MzMyNGUyNmU2YQ==" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/sargam-multispeciality-hospital-203372266?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <img style="height: 80px;" src="assets/img/logo.jpg" alt=""> <span>
        <pre>      </pre>
      </span> <span></span>
      <!-- <h1 class="logo me-auto"><a href="index.html">Sargam Multispeciality Hospital Pvt. Ltd.</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#departments">Specialities</a></li>
          <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>
          <li><a class="nav-link scrollto" href="#faq">Companies</a></li>

          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar --> <pre>       </pre>
      <img style="height: 80px;" src="assets/img/logo2.png" alt="">

      <!-- <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a> -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1 style="font-size: 40px;">Welcome to Sargam Multispeciality Hospital Pvt. Ltd.</h1>
      <h2>WE ARE A TEAM OF DEDICATED & COMPASSIONATE HEALTH CARE PROFESSIONAL</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Choose Sargam Multispeciality Hospital Pvt. Ltd.</h3>
              <p>
                SARGAM MULTISPECIALITY HOSPITAL PVT. LTD.
                (ADVANCED HEALTHCARE FACILITY WITH MODERN EQUIPMENTS)
                BEST HOSPITAL AMONG EMERGING MULTISPECIALITY HOSPITALS
                “BRINGS QUALITY CARE COUPLED WITH PATIENT CENTRIC APPROACH”
                “SARGAM MULTISPECIALITY HOSPITAL IS AN STATE OF THE ART HOSPITAL SPRED IS A CLEAN & SECTOR AREA OF 24000 SQ. FT WITH ADVANCED FACILITIES SUCH AS,

              </p>
              <ul>
                <li>BRAND NEW & MOST ADVANCED CATHLAB BHARUCH DISTRICT</li>
                <li>DIALYSIS UNIT- 5 MACHINE</li>
                <li>MODULAR OPERATION THEATRE</li>
                <li>ADVANCED CT SCANNER</li>
                <li>CRITICAL CARE & TRAUMA MANAGEMENT</li>
                <li>IN HOUSE PATHOLOGY & RADIOLOGY DEPARTMENT</li>
                <li>DEDICATED & COMPASSIONATE TEAM OF FULL-TIME CONSULTANTS</li>
              </ul>

              <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class='bx bx-plus-medical'></i>
                    <h4>24*7 Emergency Trauma & Critical Care Centre</h4>
                    <p>We are Committed to Provide Prompt & Quality Care to all the Patients Reporting to Our Emergency & Trauma Department & for Critically all Patients in the Cares of,</p>
                    <ul>
                      <li>Accident & Trauma</li>
                      <li>Poisoning</li>
                      <li>Snake Bite</li>
                      <li>Scorpion Bite</li>
                      <li>Animal Bite</li>
                      <li>Industrial Injuries</li>
                      <li>Industrial Gas Exposures</li>
                      <li>Heart attack</li>
                      <li>Stroke</li>
                      <li>Epilepsy</li>
                      <li>Surgeries</li>
                      <li>Industrial & Drastic Burn</li>
                    </ul>

                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class='bx bxs-heart-circle'></i>
                    <h4>24*7 Heart Care Centre</h4>
                    <p> <b>Angiography</b> With 1st & Most Technologically Advanced Machine in Bharuch District Ensuring Technical Advancement
                    </p>
                    <p><b>Angioplasty</b> </p>
                    <ul>
                      <li>Time matters as Heart Care - Improved access saves time.</li>
                      <li>Prompt Interventional Improves Outcomes.</li>
                      <li>Avoids Stress to Travel to cities to obtain Heart Care.</li>
                    </ul>

                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class='bx bxs-clinic'></i>
                    <h4>24*7 Dialysis Centre</h4>
                    <!--<p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>-->
                    <ul>
                      <li>Improving Accessibility</li>
                      <li>Ensuring Comfort, Care & Safety at Every Step of Your Dialysis Journey</li>
                      <li>Providing Quality Dialysis as an Affordable Process by Us with Standard Protections</li>
                      <li>Helping Everyone Suffering from Kidney Disease Resume Normal Function of Life</li>
                    </ul>

                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <a href="assets/img/VID.mp4" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>About Us</h3>
            <p>Sargam Multispeciality Hospital is an Outcome of joint effort of its promptness to strengthen the healthcare System of the District. <br>
              Viewing the huge of Infi of patients to Vadodara & Surat causing the stream ex, to patients & their relative with Hugh cost burden. <br>
              The Introduction of Sargam Multispeciality Hospital is “Ankleshwar” is meant to address the healthcare Concerns of Community for.
            </p>
            <ul>
              <li>Excess time required to reach the appropriate healthcare facility.</li>
              <li>Risks involved in delayed treatment.</li>
              <li>Bridge the gap between Expectation VS Outcome.</li>
              <li>Need for a Patient-Friendly, Advanced healthcare facility in the doormat.</li>
              <li>Reduce the Cost of Treatment VS Treatment in other metro cities.</li>
              <li>To develop a "Centre of Excellence" in Healthcare to meet all the Healthcare needs of People in Districts.</li>
            </ul>


            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Mission</a></h4>
              <p class="description">To create and promote a highly caring Healthcare system to spread the power of the optimism. </p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class='bx bx-bullseye'></i></div>
              <h4 class="title"><a href="">Vision</a></h4>
              <p class="description">To be the most trusted Multispeciality Hospital Creating healthy life for community.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Values:</a></h4>
              <p class="description">◇ Promptness <br>
                ◇ Quality <br>
                ◇ Empathy <br>
                ◇Transparency <br>
                ◇ Optimism
              </p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <!-- <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
              <p>Doctors</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
              <p>Departments</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
              <p>Research Labs</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section>End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>Embark on a journey of holistic wellness with our extensive range of healthcare services at Sargam Hospital. Our commitment to excellence spans from critical care and diagnostics to specialized surgeries and preventive health checkup packages. Trust in our unwavering dedication to your health, offering a seamless continuum of care tailored to meet your unique needs.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-heartbeat"></i></div>
              <h4><a href="">CRITCAL CARE ICU</a></h4>
              <p>Providing Critical Support in Moments That Matter</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <h4><a href="">Invasive & Non-Invasive Cardiology</a></h4>
              <p>Heart Health Precision at Your Service</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-hospital-user"></i></div>
              <h4><a href="">Pharmacy</a></h4>
              <p>Your Source for Medications, Care, and Expert Advice</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-dna"></i></div>
              <h4><a href="">Pathology</a></h4>
              <p> Insightful Tests for Informed Healthcare Decisions</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-wheelchair"></i></div>
              <h4><a href="">Radiology</a></h4>
              <p>Capturing Images, Revealing Answers for Your Well-being</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-notes-medical"></i></div>
              <h4><a href="">CT Scan</a></h4>
              <p>Precision Imaging for In-Depth Health Assessment</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    <!-- <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Make an Appointment</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="department" id="department" class="form-select">
                <option value="">Select Department</option>
                <option value="Department 1">Department 1</option>
                <option value="Department 2">Department 2</option>
                <option value="Department 3">Department 3</option>
              </select>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="doctor" id="doctor" class="form-select">
                <option value="">Select Doctor</option>
                <option value="Doctor 1">Doctor 1</option>
                <option value="Doctor 2">Doctor 2</option>
                <option value="Doctor 3">Doctor 3</option>
              </select>
              <div class="validate"></div>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Make an Appointment</button></div>
        </form>

      </div>
    </section>End Appointment Section -->

    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container">

        <div class="section-title">
          <h2>Specialities</h2>
          <p>Discover a comprehensive range of specialized healthcare services at Sargam Multispeciality Hospital. From advanced cardiac care and surgical interventions to diagnostic excellence and trauma support, our diverse departments are dedicated to ensuring your well-being. Experience personalized care and expertise across a spectrum of medical specialties, all under one roof.</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Anaesthesiology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Cardiology (Non Invasive & Invasive)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Emergency Care & ICU</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Emergency Medicine</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">General Medicine</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-6">General Surgery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-7">Health Checkup Packages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-8">Joint Replacement Surgery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-9">Laparoscopic Surgery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-10">Medical Gastroenterology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-11">Nephrology & Dialysis Center</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-12">Neurology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-13">Neurosurgery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-14">Oncology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-15">Oncosurgery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-16">Orthopedics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-17">Plastic Surgery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-18">Pulmonology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-19">Radiology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-20">Spine Surgery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-21">Surgical Gastroenterology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-22">Trauma Center</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-23">Urology</a>
              </li>
            </ul>

          </div>
          <div class="col-lg-9">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Anaesthesiology</h3>
                    <p class="fst-italic">Anaesthesia forms an important component of any surgical procedure and proper pre and post anaesthetic evaluation is very important for any successful surgical procedure. Sargam Multispeciality Hospital has a fully equipped Anaesthesiology department with 24x7 availability of skilled & dedicated anaesthetist which ensures you the highest degree of care with emphasis on patients’ safety & satisfaction.</p>
                    <!-- <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p> -->
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>INVASIVE CARDIOLOGY</h3>
                    <p class="fst-italic">Our best cardiac center in Ankleshwar makes sure that the patients receive top-quality care and support which cures their cardiac problems and disorders. The team of heart specialists works their best to find out the best possible solutions for heart disorders of patients from across India and the world after diagnosing them with precision through angiography in Ankleshwar. The invasive cardiology procedures involve procedures in which the body is invaded (entered) by puncturing or cutting (incising) the skin or by entering instruments. We provide advanced angiography in Ankleshwar performed by best cardiac experts. These different invasive procedures include:</p>
                    <ul>
                      <li>Coronary and peripheral angiography</li>
                      <li>Coronary angioplasty and stenting</li>
                      <li>Primary angioplasty in myocardial infarction (PAMI)</li>
                      <li>Emergency percutaneous transluminal coronary angioplasty (PTCA)</li>
                      <li>Balloon valvuloplasties (BMV, BAV, BPC, etc.)</li>
                      <li>Balloon angioplasties and peripheral vascular stenting (coronary, carotid, renal, mesenteric, iliac, etc.)</li>
                      <li>Septal defect repair (ASD, VSD, PDA, etc.)</li>
                      <li>Tetralogy of Fallot (TOF)</li>
                    </ul> <br>
                    <h3>NON-INVASIVE CARDIOLOGY</h3>
                    <p>Sargam Multispeciality Hospital is one of the best cardiac centre in Ankleshwar with excellent services catering to the medical needs of the patients in a unique manner. The non-invasive cardiology procedures comprise of conservative procedures that do not require incision into the body or removal of tissue. These include:</p>
                    <ul>
                      <li>Electrocardiogram (ECG for both adults and children)</li>
                      <li>Stress test treadmill test (TMT)</li>
                      <li>2D-Echo and Colour Doppler</li>
                      <li>Adenosine thallium and dobutamine 2D-Echo</li>
                    </ul>

                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Emergency Care, & ICU</h3>
                    <ul>
                      <li>At Sargam Multispeciality Hospital, Ankleshwar, we understand the importance of on-time & quality patient care.</li>
                      <li>Whether you have a minor illness or a major accident, Sargam Multispeciality Hospital is always there with its fully equipped OPD's and the Best ICU in Ankleshwar.</li>
                      <li>As one of the finest Critical Care Hospitals in Ankleshwar, we are proud to have the best team of Emergency experts with a wide range of experience spanning over 3+ years.</li>
                      <li>Our ICU is one of the best critical care facilities in Ankleshwar, and we offer world-class Intensive Care to our patients.</li>
                      <li>Our state-of-the-art equipment & advanced treatment modalities are the reasons why we are counted among the Best ICU in Ankleshwar.</li>
                    </ul>

                    <p class="fst-italic">Using a multidisciplinary approach, our team of critical care specialists ensure holistic care. The emergency care department, and ICU at Sargam Multispeciality Hospital are fully equipped with all basic facilities at affordable charges.</p>
                    <h4>Key services include:</h4>
                    <ul>
                      <li>Trauma unit backed by qualified emergency physicians and intensive care specialists.</li>
                      <li>Accident/trauma care.</li>
                      <li>Best trauma ICU in the city with all emergency facilities and state-of-the-art equipment.</li>
                      <li>Dedicated emergency operation theatre.</li>
                      <li>Dedicated portable USG machine and HD monitor in ICU to guide bedside procedures.</li>
                      <li>High-end negative pressure isolation rooms to cater to communicable diseases like H1N1.</li>
                      <li>Positive pressure isolation rooms to handle neutropenic patients and burn patients.</li>
                      <li>24x7 critical care specialists.</li>
                      <li>24x7 CT, USG facilities.</li>
                      <li>24x7 pathology.</li>
                      <li>24x7 well-trained and experienced staff.</li>
                    </ul>

                    <p>If you are looking for the Best ICU in Ankleshwar, you need not look any further than Sargam Multispeciality Hospital - Best Multispeciality hospital of Ankleshwar. Our hospital is a leading Critical care hospital in Ankleshwar and we offer world-class Intensive care to our patients.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Internal Medicine</h3>
                    <p class="fst-italic">Highly experienced specialists in medicine comprise our team of general physicians at Sargam Multispeciality Hospital. A wide range of non-surgical health care services including consultations and second opinions are provided to individuals seeking medical intervention at Sargam Hospital. <br>
                      At Sargam Multispeciality Hospital, we always put our patients first. With the aim to make affordable healthcare available to all at our hospital, we provide attractive health care packages for your whole family. <br>
                      Our general physicians are trained to carry out various medical procedures for the diagnosis and management of acute and severe diseases. Treatments provided by our general physicians at Sargam Multispeciality Hospital include the following: <br>
                    </p>
                    <ul>
                      <li>Fever, Dengue, Chikungunya, etc.</li>
                      <li>Infections</li>
                      <li>Respiratory diseases including asthma, lung infections, and allergies</li>
                      <li>Diabetes, Thyroid, High Cholesterol</li>
                      <li>Blood Pressure & Hypertension</li>
                      <li>Anaemia, Diarrhoea, Jaundice</li>
                      <li>Vitamin & nutrient deficiencies</li>
                      <li>Weakness, fatigue</li>
                      <li>ENT problems</li>
                      <li>Skin problems</li>
                      <li>Suturing & wound healing</li>
                      <li>Gastric health</li>
                    </ul>

                    <p>Comprehensive and personalized primary health care is provided to all by our team of general physicians at Sargam Multispeciality Hospital. Qualified nurses and a fully equipped medical treatment room further support our doctors. The treatment process is speeded up further as diagnostic services and pharmacy are available under the same roof.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <!-- <div class="tab-pane" id="tab-5">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>General Surgery</h3>
                    <p class="fst-italic">At Sargam Multispeciality Hospital, we have a team of experienced general surgeons who possess the skills to carry out the most complex surgeries. Our general surgeons at Sargam Multispeciality Hospital not only perform surgeries for a wide range of common ailments, but are also responsible for patient care before, during, and after surgery. Our general surgeons have knowledge and are experienced and equipped for operating:</p>
                    <ul>
                      <li>Alimentary tract (oesophagus and related organs)</li>
                      <li>Abdomen and its contents</li>
                      <li>Skin and soft tissue</li>
                      <li>Endocrine system</li>
                      <li>Perianal diseases</li>
                      <li>Urinary stones</li>
                    </ul>

                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiand ae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div> -->
              <div class="tab-pane" id="tab-6">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>General Surgery</h3>
                    <p class="fst-italic">At Sargam Multispeciality Hospital, we have a team of experienced general surgeons who possess the skills to carry out the most complex surgeries. Our general surgeons at Sargam Multispeciality Hospital not only perform surgeries for a wide range of common ailments, but are also responsible for patient care before, during, and after surgery. Our general surgeons have knowledge and are experienced and equipped for operating:</p>
                    <ul>
                      <li>Alimentary tract (oesophagus and related organs)</li>
                      <li>Abdomen and its contents</li>
                      <li>Skin and soft tissue</li>
                      <li>Endocrine system</li>
                      <li>Perianal diseases</li>
                      <li>Urinary stones</li>
                    </ul>

                    <!-- <p>Exercitationem nostrum omnis. Ut reiciendis repudiand ae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p> -->
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-7">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Health Checkup Packages</h3>
                    <p class="fst-italic">Taking into consideration our vision to ensure ‘well-being’ as a humane commitment to enliven humanity, Sargam Multispeciality Hospital provides health check up packages in Ankleshwar at very affordable price. As we aim at imbibing hope, health, and happiness in the community at large, our health check up packages in Ankleshwar help in early diagnosis and prevention of a number of ailments in people to help us achieve the motto of Sargam Multispeciality Hospital. <br>
                      You can find the details of our health check-up packages in Ankleshwar below :
                    </p>
                    <img src="assets/img/healthcare_package.jpg" alt="healthcare images">
                    <!-- <p>Exercitationem nostrum omnis. Ut reiciendis repudiand ae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p> -->
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="tab-8">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Joint replacement unit</h3>
                    <ul>
                      <li>Total knee replacement</li>
                      <li>Total hip replacement</li>
                      <li>In addition to this, our dedicated orthopedic OT with C-arm makes our orthopedic surgery department the best centre for orthopedic surgery in Ankleshwar. The availability of all types of arthroscopic surgeries for various joints including shoulder, knee, and ankle are available at our hospital.</li>
                      <li>We offer highly specialized orthopedic surgery in Ankleshwar with adequate care under the guidance and expertise of the orthopedic surgeons who are highly experienced in their respective specializations.</li>
                      <li>The excellent quality of services combined with the positive and timely solutions provided to the patients have made SARGAM MULTISPECIALITY HOSPITAL the most sought-after joint replacement centre in Ankleshwar.</li>
                      <li>You can also avail advanced physiotherapy rehabilitation and support at our orthopedic department after you undergo primary, complex, and revision surgeries at our hospital for orthopedic surgery in Ankleshwar.</li>
                    </ul>

                    <!-- <p class="fst-italic">At Sargam Multispeciality Hospital, we have a team of experienced general surgeons who possess the skills to carry out the most complex surgeries. Our general surgeons at Sargam Multispeciality Hospital not only perform surgeries for a wide range of common ailments, but are also responsible for patient care before, during, and after surgery. Our general surgeons have knowledge and are experienced and equipped for operating:</p> -->
                    <!-- <p>Exercitationem nostrum omnis. Ut reiciendis repudiand ae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p> -->
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <!-- <div class="tab-pane" id="tab-9">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Nephrology and Dialysis Centre</h3>
                    <p class="fst-italic">At Sargam Multispeciality Hospital, we have a team of experienced general surgeons who possess the skills to carry out the most complex surgeries. Our general surgeons at Sargam Multispeciality Hospital not only perform surgeries for a wide range of common ailments, but are also responsible for patient care before, during, and after surgery. Our general surgeons have knowledge and are experienced and equipped for operating:</p>
                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiand ae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                  </div>
                </div> -->
            <!-- </div> -->
            <div class="tab-pane" id="tab-10">
              <div class="row gy-4">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Gastroenterology</h3>
                  <p class="fst-italic">The Gastroenterology department at Sargam Multispeciality Hospital is regarded as one of the best Gastroenterology center in India. Our team of experienced Gastro physicians and skilled staff is dedicated towards the management of diseases of the digestive and hepatobiliary systems. The modern state-of-art equipment and the advanced intensive care units at Sargam Multispeciality Hospital are handled by the best gastroenterologist in Ankleshwar. We offer the best endoscopy in Ankleshwar with two technologically advanced endoscopy suites. <br>
                    Different Gastroenterology conditions treated after accurate diagnosis with best endoscopy in Ankleshwar include:
                  </p>
                  <ul>
                    <li>All kinds of liver disorders (fatty liver, cirrhosis of the liver & its complications)</li>
                    <li>Alcoholic liver disease</li>
                    <li>Hepatitis (HepA, HepB, HepC, drug-induced, etc.)</li>
                    <li>Gall bladder stones & common bile duct stones</li>
                    <li>Acute & chronic pancreatitis</li>
                    <li>All cases of abdominal pain</li>
                    <li>Difficulty in swallowing</li>
                    <li>Blood vomiting (Hematemesis)</li>
                    <li>Coloured stools (Melena)</li>
                    <li>Blood in stools</li>
                    <li>Diarrhoea (acute & chronic)</li>
                    <li>Peptic ulcer disease (gastritis, gastric ulcer, duodenal ulcer)</li>
                    <li>Gastroesophageal reflux disease (GERD)</li>
                    <li>Dyspepsia (upper abdomen discomfort, bloating)</li>
                    <li>Irritable bowel syndrome (altered bowel habits)</li>
                    <li>Constipation</li>
                  </ul>


                  <p>With our fully integrated model of care aimed at optimizing the patient experience, we offer a range of high end procedures that include endoscopic retrograde cholangiopancreatography (ERCP), colonoscopy, and best endoscopy in Ankleshwar.
                    <br> The best endoscopy in Ankleshwar we serve the patients who seek procedures like:
                  </p>
                  <ul>
                    <li>Esophagogastroduodenoscopy</li>
                    <li>Colonoscopy</li>
                    <li>Endoscopic Retrograde Cholangiopancreatography (ERCP)</li>
                    <li>Liver biopsy</li>
                    <li>Other Open Procedure</li>
                  </ul>
                  <p>Our highly experienced gastroenterologists and surgeons with their highly skilled staff form the pillars of the gastroenterology department at Sargam Multispeciality Hospital. All doctors are super-specialized in the field of gastroenterology and put their best efforts in the pursuit of providing the best endoscopy in Ankleshwar for treating patients successfully and achieving the best results in the form of a healthy and fit patient. Providing affordable and accessible care to patients has always been and continues to be the aim of the department of gastroenterology at Sargam Multispeciality Hospital, Ankleshwar.</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>

            <div class="tab-pane" id="tab-11">
              <div class="row gy-4">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Nephrology and Dialysis Centre</h3>
                  <p class="fst-italic">SARGAM MULTISPECIALITY HOSPITAL has built excellent quality specialized departments where patients receive the required care and individual attention right from the first appointment to the completion of the recommended and chosen treatment. Sargam Hospital Hospital has now established its name as the best dialysis centre in Ankleshwar. This has been possible only because of the dedicated and skilled team of nephrologists and kidney transplant physicians along with the constant assistance of the staff at SARGAM MULTISPECIALITY HOSPITAL. The doctors practicing in the Nephrology department of the SARGAM MULTISPECIALITY HOSPITAL counsel and treat patients in an excellent manner thus prioritizing patient satisfaction and making it the best dialysis centre in Ankleshwar. The services and healthcare facilities available in the Department of Nephrology at SARGAM MULTISPECIALITY HOSPITAL are of high quality and the treatments offered here are completely result oriented which is evident from the high success rates.
                    <br> High-end technology and equipment are utilized for treating the nephrology patients at our best dialysis centre in Ankleshwar. The major facilities include:
                  </p>
                  <ul>
                    <li>Dornier lithotripter</li>
                    <li>Uroflowmetry</li>
                    <li>LED light source</li>
                    <li>Dedicated dialysis unit with 5 dialysis machines</li>
                    <li>Hemodialysis for acute and chronic renal failure patients</li>
                    <li>Hemodialysis in cases of drug overdosage</li>
                    <li>Plasmapheresis for renal and non-renal cases</li>
                    <li>Continuous ambulatory peritoneal dialysis (CAPD)</li>
                    <li>Automated peritoneal dialysis (APD)</li>
                    <li>Continuous renal replacement therapy (CRRT)</li>
                    <li>Critical care nephrology</li>
                  </ul>

                  <p>The wide range of state-of-art services provided to patients using evidence-based guidelines and standard protocols at an affordable cost make Sargam Multispeciality Hospital the best dialysis centre in Ankleshwar.</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-12">
              <div class="row gy-4">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Neurology</h3>
                  <p class="fst-italic">Adhering to its vision of ensuring ‘well-being’ as a human commitment, Sargam Multispeciality Hospital has built a firm base of happy patients who trusted the medical experts at the hospital and went ahead with their neurological treatments. Sargam Hospital has one of the well-established stroke unit in Ankleshwar where several cases of neurology related disorders and problems have undergone successful treatment. The team at the Neurology department of SARGAM MULTISPECIALITY HOSPITAL comprises of highly-trained, skilled, and well-experienced team of Neurologists, Neurosurgeons, interventional radiologists, Neurophysiotherpists and rehabilitation teams who make sure that the patients receive the best quality treatments for curing their neurological problems. A range of neurological treatments are available at our neurology hospital and stroke unit in Ankleshwar for different ailments such as:</p>
                  <ul>
                    <li>Headaches and other pain syndromes (migraine)</li>
                    <li>Epilepsy (convulsion/seizure)</li>
                    <li>Stroke (paralysis)</li>
                    <li>Giddiness (dizziness, vertigo)</li>
                    <li>Movement disorders (such as Parkinson’s disease, essential tremor, and dystonia)</li>
                    <li>Dementia (Alzheimer’s and other)</li>
                    <li>Infections of the brain (Meningitis, Encephalitis)</li>
                    <li>Cerebral palsy and spasticity</li>
                    <li>Multiple sclerosis</li>
                    <li>Spine disorders (backache, slip-disc, radiculopathy, spondylosis)</li>
                    <li>Nerve and muscle diseases (including amyotrophic lateral sclerosis, peripheral neuropathy, myasthenia gravis, muscular dystrophy, myopathies)</li>
                    <li>Sleep disorders</li>
                    <li>Mental/behavioral health disorders</li>
                  </ul>

                  <p>We aim to provide the best diagnostic and treatment services to our patients with our state-of-art facilities SARGAM MULTISPECIALITY HOSPITAL in Ankleshwar. The major ones include:</p>
                  <ul>
                    <li>Advanced 32-slice Computed Tomography (CT) scanner</li>
                  </ul>

                  <p>Proper counselling of the patients and rehabilitation are ensured by the neurologists at SARGAM MULTISPECIALITY HOSPITAL so that the best results can be achieved. The quality of the highly advanced medical treatments along with the accessibility and affordability of these treatments makes patients visiting our stroke unit in Ankleshwar feel relaxed and satisfied at the end of the treatments.</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-13">
              <div class="row gy-4">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Neurosurgery</h3>
                  <p class="fst-italic">The Neurosurgery Department at the Sargam Hospital Hospital has been the epitome of excellence and innovation. We have successfully secured a prominent place in the Neurosurgery field in Ankleshwar and India because of our accurate diagnosis and advanced treatment. Our hallmarks are cutting-edge technology, a unique patient-centric approach, and commitment towards rendering the best possible treatment to patients with care, empathy, and sensitivity.

</p>
                  <p>Our best Neurosurgeons, Neurologists, Interventional Neuroradiologists and other associated specialists have extensive experience of over 20 years. We are available round the clock with our advanced scientific equipment to offer highly prioritized and effective treatment to emergency cases. <br>
The Neurosurgery Department at the SARGAM MULTISPECIALITY HOSPITAL is among the best in the country, providing specific treatment for stroke, epilepsy, head and spinal injuries, including brain tumours, and various Neurodegenerative disorders. With a high success rate in critical cases, a team of experienced experts, and an aim to serve patients with dedication, we have become one of the most sought-after hospitals when it comes to Neurosurgery.</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-14">
              <div class="row gy-4">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Medical Oncology & Chemotherapy Centre</h3>
                  <p class="fst-italic">At SARGAM MULTISPECIALITY HOSPITAL we understand that cancer is complex and its treatment requires a mix of therapies like chemotherapy, radiotherapy, and surgery, along with lifestyle modifications. Sargam Hospital Hospital provides holistic approach to cancer treatment as our team of oncologists work together and in coordination with other specialities keeping in mind the overall well-being of the patients.
<br>
                  Our team of best oncologists in Ankleshwar works towards preventing, diagnosing, and treating cancer in conjunction with surgical oncologists and radiation oncologists to give the best clinical outcomes. The treatment protocols and multi-modality therapies are customised based on the individual patient needs by our team of best oncologists in Ankleshwar. The facilities available include:
</p>
<ul>
  <li>Dedicated operation theatres</li>
  <li>Ultra-modern equipment</li>
  <li>Organ-specific specialist teams</li>
  <li>Latest treatment modalities</li>
</ul>

                  
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-15">
              <div class="row gy-4">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Surgical Oncology</h3>
                  <p class="fst-italic">Surgery may be indicated in cancer patients to relieve the symptoms, remove the affected tissues/ organs for preventing further damage or disability, and restore aesthetics. At SARGAM MULTISPECIALITY HOSPITAL, all presenting cases, primary or metastatic, are diagnosed and investigated by surgical teams streamlined into and specializing in organ specific services:</p>
                  <ul>
  <li>Head & Neck Oncology</li>
  <li>Breast Oncology</li>
  <li>GI Oncology</li>
  <li>Uro-Oncology</li>
  <li>Thoracic Oncology</li>
  <li>Ortho-Oncology</li>
  <li>Paediatric Oncology</li>
</ul>

                  <p>Our department of Surgical Oncology at Sargam Hospital Hospital offers both outpatient and inpatient services for screening, diagnosis, and treatment of cancer patients. Our aim is to assess and workout the treatment plan for the surgical services in oncology patients so that the survival rate is improved, recovery time is shortened, treatment-related side effects are minimized. We identify patients who can benefit from surgery both at early and late stages and provide them surgical solutions that they appreciate and benefit from.</p>
                  <!-- <p>Exercitationem nostrum omnis. Ut reiciendis repudiand ae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p> -->
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-16">
              <div class="row gy-4">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Orthopedic </h3>
                  <!-- <p class="fst-italic">At Sargam Multispeciality Hospital, we have a team of experienced general surgeons who possess the skills to carry out the most complex surgeries. Our general surgeons at Sargam Multispeciality Hospital not only perform surgeries for a wide range of common ailments, but are also responsible for patient care before, during, and after surgery. Our general surgeons have knowledge and are experienced and equipped for operating:</p> -->
                  <p class="fst-italic">The Orthopedic Surgery Department at Sargam Multispeciality Hospital stands as a center of excellence in orthopedics and joint replacement in Ankleshwar. Leveraging the latest technologies and state-of-the-art equipment, the department excels in delivering outstanding outcomes for orthopedic surgery procedures. Patients trust the treatments and services provided by the joint replacement center in Ankleshwar.</p>

<p>Aside from being an unbeatable joint replacement center, Sargam Multispeciality Hospital offers a diverse range of orthopedic surgery services in Ankleshwar, including:</p>

<ul>
  <li>Sports Medicine and Arthroscopic Unit</li>
  <ul>
    <li>Meniscus injury</li>
    <li>ACL injury (Anterior Cruciate Ligament Injury)</li>
    <li>Shoulder instability</li>
    <li>Hip arthroscopy</li>
  </ul>

  <li>Ortho-onco Unit</li>
  <ul>
    <li>Paediatric bone tumors</li>
    <li>Limb salvage surgery</li>
  </ul>

  <li>Trauma Fracture</li>
  <ul>
    <li>Fracture fixation with minimal invasive technique</li>
    <li>Complex trauma</li>
  </ul>

  <li>Spine Unit</li>
  <ul>
    <li>Disc prolapse</li>
    <li>Spinal deformities correction</li>
    <li>Spinal canal stenosis, etc.</li>
  </ul>
</ul>

                  <!-- <p>Exercitationem nostrum omnis. Ut reiciendis repudiand ae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p> -->
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-17">
              <div class="row gy-4">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Plastic Surgery</h3>
                  <!-- <p class="fst-italic">At Sargam Multispeciality Hospital, we have a team of experienced general surgeons who possess the skills to carry out the most complex surgeries. Our general surgeons at Sargam Multispeciality Hospital not only perform surgeries for a wide range of common ailments, but are also responsible for patient care before, during, and after surgery. Our general surgeons have knowledge and are experienced and equipped for operating:</p> -->
                  <p class="fst-italic" >At SARGAM MULTISPECIALITY HOSPITAL, we believe that “Every face tells a story” and we want to make yours a good one. Our hospital has the distinctive strength of offering both cosmetic and reconstructive surgeries under one roof. The department is led by super specialists credited with achieving high success rates even in the most complex cases. Our team of skilled clinicians has helped hundreds of patients not only achieve their desired looks with cosmetic facilities but also restore their normal life and lifestyle after severe accidents with successful reconstructive surgeries.</p>

<p><strong>Cosmetic/Aesthetic Surgeries</strong></p>

<p>The surgical improvement in appearance for deviations that do not amount to an objective deformity can permanently relieve the patient of a pre-occupation with his/her appearance. The aim of aesthetic surgery is to improve the quality of life of an individual by eliminating self-consciousness, improving social acceptance and interpersonal relationships, and increasing the chances of obtaining employment in occupations where looks are important. The commonly performed cosmetic/aesthetic surgeries available in our facility include:</p>

<ul>
  <li>Liposuction</li>
  <li>Abdominoplasty</li>
  <li>Fat Injection</li>
  <li>Mastopexy</li>
  <li>Augmentation Mammoplasty</li>
  <li>Reduction Mammoplasty</li>
  <li>Surgery for Gynaecomastia</li>
  <li>Rhinoplasty</li>
  <li>Scar Revision</li>
  <li>Surgery for Ears</li>
  <li>Surgery for White Spots</li>
  <li>Post-bariatric body contouring</li>
</ul>

                  <!-- <p>Exercitationem nostrum omnis. Ut reiciendis repudiand ae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p> -->
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-18">
              <div class="row gy-4">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Pulmonology</h3>
                  <!-- <p class="fst-italic">At Sargam Multispeciality Hospital, we have a team of experienced general surgeons who possess the skills to carry out the most complex surgeries. Our general surgeons at Sargam Multispeciality Hospital not only perform surgeries for a wide range of common ailments, but are also responsible for patient care before, during, and after surgery. Our general surgeons have knowledge and are experienced and equipped for operating:</p> -->
                  <p>At Sargam Multispeciality Hospital, we have an expert team of pulmonologists who bring in their varied experiences to provide the best diagnosis and treatment to the patients.</p>

<p>At Sargam Multispeciality Hospital, different diseases of the lungs and breathing problems are taken care of because we believe that “Every breath counts.” The different diseases treated include bronchial asthma (from simple to resistant asthma), allergy, fibrosis, pulmonary edema, tuberculosis (TB - simple, MDR and XDR TB), chronic obstructive pulmonary disease (COPD), sleep apnea, allergic rhinitis, interstitial lung diseases, pulmonary embolism, pneumonia, occupational lung diseases, pleural diseases, lung cancer, snoring, and sleep apnea syndrome.</p>

<p>Facilities available for diagnosing and treating lung diseases include:</p>

<ul>
  <li>Pulmonary Function Tests (MS PFT Pro)</li>
  <li>Spirometry (for children and adults)</li>
  <li>Bedside spirometry</li>
  <li>Portable spirometry for occupational health services</li>
  <li>Maximum ventilation volume (MVV), slow vital capacity (SVC), and forced vital capacity (FVC)</li>
  <li>Lung volume and subdivisions: Total lung capacity (TLC), respiratory volume (RV), and functional residual capacity (FRC)</li>
  <li>Single breath diffusion capacity of lungs for carbon monoxide and helium (DLCO-He)</li>
  <li>Allergy testing</li>
  <li>Sleep laboratory</li>
  <li>Smoking cessation program</li>
  <li>Pulmonary rehabilitation program</li>
</ul>

                  <!-- <p>Exercitationem nostrum omnis. Ut reiciendis repudiand ae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p> -->
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-19">
              <div class="row gy-4">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Radiology</h3>
                  <!-- <p class="fst-italic">At Sargam Multispeciality Hospital, we have a team of experienced general surgeons who possess the skills to carry out the most complex surgeries. Our general surgeons at Sargam Multispeciality Hospital not only perform surgeries for a wide range of common ailments, but are also responsible for patient care before, during, and after surgery. Our general surgeons have knowledge and are experienced and equipped for operating:</p> -->
                  <p class="fst-italic">Sargam Multispeciality Hospital has a full-fledged radiology department equipped with all the latest, high-quality, and state-of-the-art equipment. A team of qualified and experienced radiologists helps in the correct interpretation and diagnosis so that correct treatment/intervention can be provided to the patients accordingly. The radiological services provided at the radiology department in Sargam Multispeciality Hospital are the best in terms of diagnosis and inference as highly skilled technicians and radiologists are dedicated to providing 24x7 patient care in a professional and compassionate manner.</p>

<p>The facilities available in the radiology department include:</p>

<ul>
  <li>Advanced Ultra Sonography</li>
  <li>Doppler, Ultrasound MSK, USG guided interventions, CT Scan (Revolution Evo128 Slices)</li>
  <li>CT Coronary Angiography, CT Pulmonary, CT Brain Angiography, 3D CT, High-Resolution CT Scan</li>
  <li>Digital X-Ray</li>
</ul>

                  <!-- <p>Exercitationem nostrum omnis. Ut reiciendis repudiand ae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p> -->
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-20">
              <div class="row gy-4">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Spine Surgery</h3>
                  <!-- <p class="fst-italic">At Sargam Multispeciality Hospital, we have a team of experienced general surgeons who possess the skills to carry out the most complex surgeries. Our general surgeons at Sargam Multispeciality Hospital not only perform surgeries for a wide range of common ailments, but are also responsible for patient care before, during, and after surgery. Our general surgeons have knowledge and are experienced and equipped for operating:</p> -->
                  <p class="fst-italic">At our Spine Surgery Centre in SARGAM MULTISPECIALITY HOSPITAL, we aim to provide “Complete care from neck to back.” We treat all ailments related to the spine here.</p>

<p>The Spine Surgery Centre of SARGAM MULTISPECIALITY HOSPITAL provides advanced care for conditions of the neck, back, and spine. We understand that the diagnosis and coordination of care for spine conditions can be challenging for patients and their primary care providers.</p>

<p>At our Spine Surgery Centre, we streamline this process, with an experienced multidisciplinary team to diagnose spine disorders and develop individual treatment plans. The concerted expertise of our spine surgery and pain management specialists, combined with physical and occupational therapy, and a nurse navigator is available to patients at the Spine Surgery Centre in SARGAM MULTISPECIALITY HOSPITAL.</p>

<p>Our aim is to ensure that the patient is provided care by the most appropriate specialist right from the start. From the first visit itself, we collaborate with each patient to decide on the best treatment option. Often, this is not surgery.</p>

<p><strong>Back Pain Does Not Always Mean Surgery</strong></p>

<p>About 80% of people will suffer from back pain at some point in their lives. In fact, back pain is the leading cause of job or lifestyle-related disabilities. Many people, however, may believe they only have two options: surgery or simply living with the pain. This is not true in most cases, though.</p>

<p><strong>Non-surgical Treatments</strong></p>

<p>About 90% of patients treated at the Spine Surgery Centre of SARGAM MULTISPECIALITY HOSPITAL become pain-free and functional without surgery. Non-surgical treatments typically involve several therapies over the course of six weeks to six months.</p>

                  <!-- <p>Exercitationem nostrum omnis. Ut reiciendis repudiand ae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p> -->
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-21">
              <div class="row gy-4">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Gastrosurgery</h3>
                  <!-- <p class="fst-italic">At Sargam Multispeciality Hospital, we have a team of experienced general surgeons who possess the skills to carry out the most complex surgeries. Our general surgeons at Sargam Multispeciality Hospital not only perform surgeries for a wide range of common ailments, but are also responsible for patient care before, during, and after surgery. Our general surgeons have knowledge and are experienced and equipped for operating:</p> -->
                  <p class="fst-italic">The Gastrosurgery department at Sargam Multispeciality Hospital has created a mark as a leading specialization in Ankleshwar. Patients with various gastric-related problems visit Sargam Multispeciality Hospital and receive quality healthcare facilities and services for their welfare and optimum health. Gastrosurgery in Ankleshwar is performed successfully with the help of advanced technologies and equipment at Sargam Multispeciality Hospital.</p>

<p>Before commencing with the treatments of the patients, proper counseling of the patients is done successfully to make the patient understand the procedure. This helps in keeping transparency between the patient and doctor at an optimum level. We deliver a wide range of healthcare services for the treatments of the conditions that affect the upper and lower gastrointestinal (GI) tract.</p>

<p>The conditions affecting the upper GI tract that are treated through gastrosurgery in Ankleshwar at our center include:</p>

<ul>
  <li>Esophageal diverticulum</li>
  <li>Corrosive (acid) ingestion injuries and strictures</li>
  <li>Achalasia cardia and other motility disorders</li>
  <li>Gastroesophageal Reflux Disease (GERD)</li>
  <li>Hiatus hernia</li>
  <li>Esophageal cancer</li>
</ul>

<p>The conditions affecting the Stomach and Duodenum that are treated through gastrosurgery in Ankleshwar at our center include:</p>

<ul>
  <li>Peptic ulcer disease and its complications</li>
  <li>Gastrointestinal Stromal Tumors (GIST)</li>
  <li>Stomach cancer</li>
</ul>

<p>Sargam Multispeciality Hospital provides you the best range of specialized and diversified procedures of gastrosurgery. Our team has handled many complicated cases successfully with their expertise and experience.</p>

<p>Similarly, conditions affecting the lower GI tract that are treated through gastrosurgery in Ankleshwar at our center include:</p>

<ul>
  <li>Ulcerative colitis</li>
  <li>Crohn’s disease</li>
  <li>Rectal prolapse</li>
  <li>Colonic diverticulitis</li>
  <li>Colonic cancer</li>
  <li>Rectal cancer</li>
  <li>Perianal diseases</li>
</ul>

<p>Conditions affecting the Liver treated through gastrosurgery in Ankleshwar at our center include:</p>

<ul>
  <li>Liver Cancer (HCC)</li>
  <li>Bile duct cancer (Cholangiocarcinoma)</li>
  <li>Metastatic colorectal cancer</li>
  <li>Neuroendocrine tumors</li>
  <li>Other metastatic tumors</li>
  <li>Benign liver lesions</li>
</ul>

<p>Conditions affecting the pancreas treated through gastrosurgery in Ankleshwar at our center include:</p>

<ul>
  <li>Pancreatic cancer</li>
  <li>Pancreatitis</li>
  <li>Pseudocyst</li>
  <li>Cystic tumors</li>
</ul>

<p>Conditions affecting the bile ducts and gallbladder treated through gastrosurgery in Ankleshwar at our center include:</p>

<ul>
  <li>Gallstones</li>
  <li>Biliary stricture</li>
  <li>Bile leaks (caused by trauma and surgery)</li>
  <li>Cancer (cholangiocarcinoma/gallbladder)</li>
</ul>

<p>All routine and special procedures related to gastrosurgery in Ankleshwar are performed at our hospital by our team of experienced gastrosurgeons. Our team of physicians, surgeons, and staff are skilled to provide the best diagnosis and treatment to patients. With the assistance of the latest high-tech procedures and a proven track record of successful cases, we at Sargam Multispeciality Hospital are continuously providing successful treatments and healthy living to all patients visiting Sargam Multispeciality Hospital.</p>

                  <!-- <p>Exercitationem nostrum omnis. Ut reiciendis repudiand ae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p> -->
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-22">
              <div class="row gy-4">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Trauma Centre</h3>
                  <!-- <p class="fst-italic">At Sargam Multispeciality Hospital, we have a team of experienced general surgeons who possess the skills to carry out the most complex surgeries. Our general surgeons at Sargam Multispeciality Hospital not only perform surgeries for a wide range of common ailments, but are also responsible for patient care before, during, and after surgery. Our general surgeons have knowledge and are experienced and equipped for operating:</p> -->
                  <p class="fst-italic">SARGAM MULTISPECIALITY HOSPITAL boasts of having a Level I Trauma Centre, one of the Best Tertiary Care Trauma Centres in Ankleshwar, India, and one of its kind. The Level I Trauma Centre, being the highest level of the care centre in the hierarchy, is facilitated to provide supreme patient care once the patient presents to the hospital after having a traumatic injury until complete recovery.</p>

<p><strong>Salient Features of KD Trauma Centre:</strong></p>
<ul>
  <li>Fully-equipped facilities to take care of the patient from admission to discharge</li>
  <li>An experienced team of Emergency Medicine Specialists, Neurotrauma Surgeons, Vascular Surgeons, Orthopaedic Surgeons, Plastic Surgeons, General Surgeons, and Critical Care Specialists available Full-Time 24*7</li>
  <li>Experienced ATLS trained Emergency Medicine Physicians</li>
</ul>

<p><strong>Facilities Available:</strong></p>
<ul>
  <li>Modernized ER department equipped with spine boards, cervical collars, pelvic binders</li>
  <li>32 sliced CT scan available 24x7</li>
  <li>Dedicated State-of-the-Art Trauma ICU</li>
  <li>Portable USG machine to guide bedside procedures with other points of care instruments/analyzer/equipment</li>
  <li>Advanced Emergency Operation Theatre</li>
  <li>Fully equipped ICU on wheels ambulance</li>
  <li>24x7 Pathology to get the required tests done with quick delivery alongside blood bank to fulfill the patient requirement for blood loss during trauma</li>
</ul>

<p><strong>Scope of Services:</strong></p>
<ul>
  <li>Head and maxillofacial injuries and fractures</li>
  <li>Traumatic and penetrating brain and spinal injuries</li>
  <li>Intracranial hematoma and hemorrhage (subarachnoid hemorrhage, subdural hemorrhage, epidural hematoma, etc.)</li>
  <li>Chest Injuries (rib fractures, pericardial effusion, cardiac tamponade, aortic rupture)</li>
  <li>Abdominal injuries (spleen injuries, liver injuries, kidney injuries, adrenal injuries, intestinal injuries)</li>
  <li>High-velocity injuries</li>
  <li>Fracture with vascular injuries</li>
  <li>Pelvic injuries</li>
</ul>

                  <!-- <p>Exercitationem nostrum omnis. Ut reiciendis repudiand ae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p> -->
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-23">
              <div class="row gy-4">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Urology </h3>
                  <!-- <p class="fst-italic">At Sargam Multispeciality Hospital, we have a team of experienced general surgeons who possess the skills to carry out the most complex surgeries. Our general surgeons at Sargam Multispeciality Hospital not only perform surgeries for a wide range of common ailments, but are also responsible for patient care before, during, and after surgery. Our general surgeons have knowledge and are experienced and equipped for operating:</p> -->
                  <p class="fst-italic">SARGAM MULTISPECIALITY HOSPITAL has been established with the prime motive of taking care of the well-being of the patients who are visiting the hospital for treatment. Owing to the excellent quality and affordability of treatment provided, Sargam Hospital Hospital is now a renowned hospital providing the best prostate surgery in Ankleshwar. Our Urologists make sure that the patients receive the best quality care in the form of result-oriented treatment solutions.</p>

<p>The urology department of the SARGAM MULTISPECIALITY HOSPITAL has a team of doctors and medical specialists who are dedicated to providing customized and result-focused treatment solutions for prostate disorders by providing the best prostate surgery in Ankleshwar, prostate cancer diagnosis and treatment, bladder cancer, kidney cancer, stone surgeries, and other types of surgeries. The list of the services offered by the urology department includes:</p>

<ul>
  <li>Holmium Laser Technology Guided Prostate Surgery</li>
  <li>Trans-Urethral Resection of the Prostate (TURP)</li>
  <li>Prostatic Biopsy</li>
  <li>Radical Prostatectomy</li>
  <li>Laparoscopic Prostatectomy</li>
  <li>Flexible Cystoscopy</li>
  <li>Transurethral Resection of Bladder Tumour (TURBT)</li>
  <li>Open Radical Cystectomy</li>
  <li>Laparoscopic Radical Cystectomy</li>
  <li>Radical Cystectomy and Neobladder Formation</li>
  <li>Partial Nephrectomy</li>
  <li>Laparoscopic Radical Nephrectomy</li>
  <li>Open Radical Nephrectomy</li>
  <li>Percutaneous Nephrolithotomy Surgery (PCNL) /Ureteroscopic Lithotripsy (URS) / Flexible URS / Cystolitholapaxy for Urinary Stones.</li>
  <li>Visual Internal Urethrotomy (VIU) for Urethral Stricture</li>
  <li>Tension-free Vaginal Tape (TVT) / Transobturator Tape (TOT) for Stress Urinary Incontinence</li>
  <li>Plastic Surgery for Hypospadias, Hernia, Hydrocele, and Mesh Repairs</li>
  <li>Orchiopexy, Varicocelectomy , Vasectomy</li>
  <li>Uroflowmetry</li>
</ul>

<p>At SARGAM MULTISPECIALITY HOSPITAL, a team of senior most and internationally renowned doctors provide you the best prostate surgery in Ankleshwar and helps you to overcome the disorders affecting your urinary tract to ensure a healthy life. Our team of urologists and medical experts who have several years of experience in treating patients with urology disorders at different stages are assisted by skilled staff and provide the best prostate surgery in Ankleshwar which you can rely on exclusively. The top-quality treatments provided to the patients keeping their interests and welfare as the primary goal create a unique position for SARGAM MULTISPECIALITY HOSPITAL making it a renowned urology hospital in Ankleshwar.</p>

                  <!-- <p>Exercitationem nostrum omnis. Ut reiciendis repudiand ae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p> -->
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      </div>
    </section><!-- End Departments Section -->

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Doctors</h2>
          <p>Meet the dedicated team of healthcare professionals at Sargam Hospital. Our expert doctors, committed to your well-being, cover a spectrum of medical specialties. With a focus on compassion and expertise, our doctors provide personalized care, ensuring that you receive the highest standard of medical attention for a healthier and happier life.</p>
        </div>

        <div class="row">

          <?php
          foreach ($doctors as $doctor) {
            echo '<div class="col-lg-6 mt-4 mt-lg-0">';
            echo '  <div class="member d-flex align-items-start">';
            echo '    <div class="pic"><img src="' . $doctor["image"] . '" class="img-fluid" alt=""></div>';
            echo '    <div class="member-info">';
            echo '      <h4>' . $doctor["name"] . '</h4>';
            echo '      <span>' . $doctor["price"] . '</span>';
            echo '      <p>' . $doctor["description"] . '</p>';
            echo '    </div>';
            echo '  </div>';
            echo '</div>';
          }


          ?>

        </div>

      </div>
    </section><!-- End Doctors Section -->
    <style>
      /* Add your custom styles here */
      .company-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        margin-bottom: 20px;
      }

      .company-logo {
        max-width: 100%;
        height: auto;
        max-height: 80px;
        /* Set a maximum height for the logos */
      }

      .company-name {
        margin-top: 10px;
      }
    </style>

    <!-- <div class="container"> -->


    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Companies Aligned</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <!-- <div class="row"> -->
        <!-- Replace the URLs with the actual paths to your company logos -->
        <!-- <div class="col-md-4">
              <img src="productimgs/coke.png" alt="Company 1" class="company-logo">
              <p class="company-name">Company 1 Pvt Ltd</p>
          </div>

          <div class="col-md-4">
              <img src="productimgs/coke.png" alt="Company 2" class="company-logo">
              <p class="company-name">Company 2 Pvt Ltd</p>
          </div> -->



        <!-- </div> -->
        <!-- <div class="container mt-5">
        <h2 class="text-center mb-4">Our Company Partners</h2> -->

        <div class="row">
          <!-- Replace the URLs with the actual paths to your company logos -->
          <?php
          foreach ($products as $product) {
            echo "<div class='col-md-3'>";
            echo "<div class='company-container'>";
            echo "<img src='{$product['image']}' alt='Company 1' class='company-logo'>";
            echo "<p class='company-name'>{$product['name']}</p>";
            echo "</div>";
            echo "</div>";
          }
          ?>

        </div>
        <div class="section-title">
          <h2>Insurance Companies Aligned</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>
        <div class="row">
          <!-- Replace the URLs with the actual paths to your company logos -->
          <?php
          foreach ($products1 as $product) {
            echo "<div class='col-md-3'>";
            echo "<div class='company-container'>";
            echo "<img src='{$product['image']}' alt='Company 1' class='company-logo'>";
            echo "<p class='company-name'>{$product['name']}</p>";
            echo "</div>";
            echo "</div>";
          }
          ?>

        </div>
      </div>
    </section>

    <!-- ======= Frequently Asked Questions Section ======= -->
    <!-- <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section>End Frequently Asked Questions Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>End testimonial item -->

    <!-- <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>End testimonial item -->

    <!-- <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>End testimonial item -->

    <!-- <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>End testimonial item -->

    <!-- <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>End testimonial item -->

    <!-- </div>
          <div class="swiper-pagination"></div>
        </div> -->

    <!-- </div>
    </section> -->
    <!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row g-0">

          <!-- HTML code for displaying gallery items -->
          <?php foreach ($galleryImages as $imagePath) : ?>
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="<?php echo $imagePath; ?>" class="gallery-lightbox">
                  <img src="<?php echo $imagePath; ?>" alt="" class="img-fluid">
                </a>
              </div>
            </div>
          <?php endforeach; ?>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3708.833006511544!2d72.99515627519344!3d21.63142998017308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0233b0e1498f1%3A0x6c923090d5163b4c!2sSargam%20Multispeciality%20Hospital!5e0!3m2!1sen!2sin!4v1700464179378!5m2!1sen!2sin" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>
                  Sargam Multispeciality Hospital Pvt. Ltd., 3rd Floor, Sargam Complex, Nr. 3 Rasta, Besides ONGC, Ankleshwar. 
                </p>
              </div> <br>
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location 2:</h4>
                <p>SARGAM DAY CARE CENTRE</p>
                <p>(A Unit of Sargam Multispeciality Hospital Pvt. Ltd.)
                  In Association With
                  PANOLI INDUSTRIES ASSOCIATION
                </p> <br>
                <p>
                Ground Floor, Panoli Industries Association, Plot No.- 913/ 9-20, Panoli GIDC <br> Contact: 9499613603 / 6393326745
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>sargamhospital@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p> 02646-248080 / +91 94092 48080 </p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Sargam Multispeciality Hospital Pvt. Ltd.</h3>
            <p>
              Sargam Multispeciality Hospital Pvt. Ltd., <br>
              3rd Floor, Sargam Complex, <br>
              Nr. 3 Rasta, Besides ONGC, Ankleshwar. <br>
              <strong>Phone:</strong> 02646-248080/ +91 94092 48080 <br>
              <strong>Email:</strong> sargamhospital@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>
          <!-- 
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div> -->

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Sargam Multispeciality Hospital Pvt. Ltd.</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/Sargam Multispeciality Hospital Pvt. Ltd.-free-medical-bootstrap-theme/ -->
          Designed by <a href="">Nomad Network</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://www.facebook.com/profile.php?id=100063910340768&mibextid=ZbWKwL" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://instagram.com/sargammultispecialityhospital?igshid=MzMyNGUyNmU2YQ==" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/in/sargam-multispeciality-hospital-203372266/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>