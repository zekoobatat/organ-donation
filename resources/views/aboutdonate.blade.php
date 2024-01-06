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

      <a href="/home" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/services">Services</a></li>
            <li><a href="/aboutdonate">About Donate</a></li>
            <li><a href="/organ">Organ Bank</a></li>
          <li><a href="/addorgan">donate</a></li>
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

      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>

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
            <a href="/organ" class="btn-get-started scrollto">Read More</a>
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



    <!-- ======= about organ Section ======= -->
    <section id="services" class="services services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
            <h2>introduction</h2>
            <p>Organ donation stands as a testament to the altruistic nature of humanity, offering the
                gift of life to those in dire need. Across diverse religious landscapes, attitudes toward
                organ donation vary, reflecting a tapestry of beliefs, values, and ethical considerations.
                In the realm of Christianity, Islam, Judaism, Hinduism, Buddhism, and Sikhism, perspectives on
                organ donation intertwine with fundamental teachings, showcasing a spectrum of support rooted in principles of compassion,
                selflessness, and the sanctity of life. Understanding these nuanced viewpoints within religious frameworks illuminates the shared reverence
                for saving lives while navigating
                individual convictions and communal guidance on this profound act of charity.</p>
          </div>

          <div class="section-title">
            <h2>Islam</h2>
            <p> In Islamic teachings, saving a life is highly valued.
                The majority of Islamic scholars support organ donation if it's for a
                noble cause and if it doesn't cause harm or exploit the donor.
                The concept of "altruistic donation" aligns with Islamic teachings
                 about helping others and saving lives. However, opinions might differ
                 among different schools of Islamic jurisprudence or individual scholars,
                 leading to varying perspectives on the permissibility and conditions of
                 organ donation.</p>
          </div>


          <div class="section-title">
            <h2>Christianity</h2>
            <p> The acceptance of organ donation varies among Christian denominations.
                 However, many Christian faiths view organ donation positively.
                  They emphasize the value of selflessness, charity, and love for others.
                  The decision to donate organs is often considered a personal one,
                  guided by the principles of love and altruism taught in the Bible.
                 Acts of generosity and giving to benefit others are seen as in line with Christian values.</p>
          </div>

          <div class="section-title">
            <h2>Judaism</h2>
            <p> Within Judaism, the principle of "pikuach nefesh" (saving a life) is paramount.
                 Most Jewish authorities endorse organ
                donation as an act that directly contributes to saving lives.
                 They consider it a mitzvah (a religious commandment) to donate organs and encourage their community members to do so.</p>
          </div>


          <div class="section-title">
            <h2>Hinduism</h2>
            <p> Hindu perspectives on organ donation are generally positive. The concept of
                "daan" (charity) is highly regarded in Hinduism, and organ donation can be seen as
                 a noble act of charity and selflessness. While some Hindu individuals and groups may have specific beliefs
                 or cultural considerations about the body after
                death, many support the idea of organ donation as a way to serve and benefit others.</p>
          </div>


          <div class="section-title">
            <h2>Buddhism</h2>
            <p> Buddhists generally support organ donation due to the emphasis on compassion and helping
                others in Buddhism. Acts of generosity, especially those that alleviate suffering and contribute to
                 the well-being of others, align with Buddhist teachings on compassion and selflessness.</p>
          </div>

          <div class="section-title">
            <h2>Sikhism</h2>
            <p> Sikhs, known for their emphasis on selfless service (seva), are generally supportive
                of organ donation. The principles of helping those in need and serving humanity align
                 with the act of organ donation, which is seen as a selfless service to save lives.</p>
          </div>

        </div>
      </section><!-- End about organ Section -->




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
