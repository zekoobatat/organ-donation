<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GIVELIFEMY</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> Monday - Saturday, 8AM to 10PM
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Call us now +11223344
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="/admin" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="/admin">Home</a></li>
          <li><a href="/aboutadmin">About</a></li>
          <li><a href="/observance">Observance</a></li>
          <li><a href="/organadmin">Organ bank</a></li>
          <li><a href="/addorganadmin">donate</a></li>
          <li><a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
         </form></li>


        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->



    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="container">
            <h2>Welcome to <span>GIVELIFEMY</span></h2>
            <p>Our primary goal is to assist you in procuring the necessary organs vital for your health in a manner that is both effortless and expedient, while ensuring utmost safety throughout the process.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="container">
            <h2>DONOR</h2>
            <p>We assure you that your organs will be appropriately donated to the individual in need, ensuring proper allocation and use for their intended purpose.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <div class="container">
            <h2>PATIENTS</h2>
            <p>Acquiring organs for surgery swiftly and seamlessly is our commitment. Rest assured, these organs have been procured through legal and legitimate donation processes, ensuring complete compliance with all regulations and laws.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 4 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-4.jpg)">
          <div class="container">
            <h2>ORGAN</h2>
            <p>Securing organs for surgery in a prompt and hassle-free manner is our priority. Moreover, we guarantee that these organs have been procured through lawful and regulated donation channels, ensuring full compliance with legal standards.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

      <!-- ======= About Us Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>About Us</h2>
            <p>At GIVELIFEMY, we are dedicated to transforming lives through the gift of organ donation. Committed to bridging the gap between donors and recipients, we facilitate the process of organ procurement with integrity, efficiency, and compassion. Our mission is to ensure that every donated organ is ethically acquired and swiftly allocated to those in need, fostering hope and saving lives. Join us in making a difference by giving the gift of life through organ donation.</p>
          </div>

          <div class="row">
            <div class="col-lg-6" data-aos="fade-right">
              <img src="assets/img/about.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
              <h3>MISSION</h3>
              <p class="fst-italic">
                Our core mission revolves around saving lives and enhancing the quality of life for those requiring organ transplants. We achieve this by actively promoting awareness about organ donation, disseminating vital information, and streamlining the organ donation procedure to ensure a smoother, more accessible process for all involved.
              </p>

              <h3>VISION</h3>

              <p class="fst-italic">
                We envision a world where every person has equitable access to life-saving organ transplants, eradicating the crisis of organ scarcity. Our goal is to cultivate a culture that celebrates organ donation as a virtuous and altruistic deed, empowering individuals to make informed choices about donating organs and actively participate in enhancing the health of others.
              </p>

              <p>Join us in our endeavor to forge a future where organ transplantation is easily accessible, extending the gift of life to all who require it. Together, we possess the power to effect change and preserve lives.</p>
            </div>
          </div>

        </div>
      </section><!-- End About Us Section -->

      <!-- ======= Counts Section ======= -->
      <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

          <div class="row no-gutters">

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="fas fa-user-md"></i>
                <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>

                <p><strong>Doctors</strong> "Meet our exceptional team of specialized doctors—leaders in their fields dedicated to providing personalized care. With a commitment to excellence, they ensure every patient receives expert attention and tailored medical solutions."</p>

              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="far fa-hospital"></i>
                <span data-purecounter-start="0" data-purecounter-end="26" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Departments</strong> "Discover our specialized Transfer Organ department, ensuring seamless coordination and exceptional care for organ transplant procedures. Our dedicated team's expertise guarantees personalized support throughout the transplant journey."</p>

              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="fas fa-flask"></i>
                <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Research Lab</strong> "Explore our cutting-edge Research Lab, pioneering advancements in medical science and innovation. Our dedicated team of experts is committed to pushing boundaries and discovering groundbreaking solutions for tomorrow's healthcare."</p>

              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="fas fa-award"></i>
                <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Awards</strong> "Experience our proud collection of Awards, a testament to our commitment and excellence in delivering exceptional healthcare services. Each accolade underscores our dedication to quality care and patient satisfaction."</p>

              </div>
            </div>

          </div>

        </div>
      </section><!-- End Counts Section -->



  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
