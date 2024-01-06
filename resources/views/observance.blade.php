<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GIVELIFEMY</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <style>
    /* Add this CSS to your stylesheet or within <style> tags in the head section */
    .light-blue-bg {
        background-color: lightblue;
        padding: 20px; /* Adjust the padding as needed */
        border-radius: 10px; /* Optionally, add rounded corners */
    }
</style>

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



    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Observance</h2>
            <p>
                Ensuring patient confidentiality and data security stands as a cornerstone in both the medical realm of organ
                transfer and the digital landscape of website administration. Adhering to stringent HIPAA guidelines in healthcare and
                implementing robust data encryption are paramount to safeguarding patient information. Similarly, in the online sphere,
                 maintaining the privacy and security of user data through compliance with laws such as GDPR is indispensable.
                 Ethical considerations remain pivotal, demanding a delicate balance between medical ethics in fair organ allocation
                 and online ethical practices in content transparency and user rights protection. Regulatory compliance forms
                  a critical framework in both domains, necessitating adherence to medical regulations for organ donation and
                  transplantation and aligning website operations with legal requirements and industry standards. Timeliness and
                  accuracy hold immense significance, where precision in managing organ donor information parallels
                   the prompt resolution of technical issues in website administration, ensuring trust and reliability.
                   Embracing continuous education is vital in the rapidly evolving landscapes of medicine and technology,
                    demanding staying updated with the latest advancements,
                 be it in organ transplantation procedures or cybersecurity protocols, to maintain excellence in both fields.</p>
          </div>

          <body>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 icon-box light-blue-bg" data-aos="zoom-in" data-aos-delay="100">
                        <h4 class="title"><a href="">Timeliness and Accuracy</a></h4>
                        <p class="description">Critical compliance spans fields. For doctors, it's organ regulations; for websites, it's legal standards on accessibility, copyright, and industry-specific rules like COPPA. Both are vital.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box light-blue-bg" data-aos="zoom-in" data-aos-delay="200">
                        <h4 class="title"><a href="">Continuous Education and Adaptability</a></h4>
                        <p class="description">Medicine and tech race forward. Mastering new transplants, guidelines, and best practices is vital, while web trends, security, and UX updates keep your site alive.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box light-blue-bg" data-aos="zoom-in" data-aos-delay="300">
                        <h4 class="title"><a href="">Patient Confidentiality and Data Security</a></h4>
                        <p class="description"> Protecting patient and user data is paramount. Adhering to HIPAA guidelines secures medical information, while robust data encryption and compliance with laws like GDPR safeguard website user privacy.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box light-blue-bg" data-aos="zoom-in" data-aos-delay="200">
                        <h4 class="title"><a href="">Regulatory Compliance</a></h4>
                        <p class="description">Compliance is crucial. In medicine, it's about organ regulations; online, it's meeting legal website standards. Both are vital for doctors and website admins alike.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box light-blue-bg" data-aos="zoom-in" data-aos-delay="300">
                        <h4 class="title"><a href="">Ethical Considerations</a></h4>
                        <p class="description">Ethical balance matters. Whether in organ allocation or online content, respecting rights and ensuring transparency is key. Maintaining ethical standards online mirrors ethical imperatives in medicine.</p>
                    </div>
                </div>
            </div>
        </body>
      </section><!-- End Services Section -->




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
