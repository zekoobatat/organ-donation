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
    <body>



        <main id="main">
          <div class="container">
            <h1> Organ Insert</h1>

            <form action="addorganadmin" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="ic" class="form-label">IC:</label>
                    <input type="number" name="ic" class="form-control">
                  </div>

                  <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" class="form-control">
              </div>

              <div class="mb-3">
                <label for="age" class="form-label">Age:</label>
                <input type="number" name="age" class="form-control">
              </div>

              <div class="mb-3">
                <label for="gender" class="form-label">Gender:</label>
                <select name="gender" class="form-select">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="blood" class="form-label">Blood Type:</label>
                <select name="blood" class="form-select">
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="Unknown">Unknown</option>
                </select>
            </div>


            <div class="mb-3">
                <label for="organ" class="form-label">Organ:</label>
                <select name="organ" class="form-select">
                    <option value="Liver">Liver</option>
                    <option value="Kidney">Kidney</option>
                    <option value="Lungs">Lungs</option>
                    <option value="Pancreas">Pancreas</option>
                    <option value="Heart">Heart</option>
                </select>
            </div>



            <div class="mb-3">
                <label for="state" class="form-label">State:</label>
                <select name="state" class="form-select">
                    <option value="Johor">Johor</option>
                    <option value="Kedah">Kedah</option>
                    <option value="Kelantan">Kelantan</option>
                    <option value="Melaka">Melaka</option>
                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                    <option value="Pahang">Pahang</option>
                    <option value="Perak">Perak</option>
                    <option value="Perlis">Perlis</option>
                    <option value="Penang">Penang</option>
                    <option value="Sabah">Sabah</option>
                    <option value="Sarawak">Sarawak</option>
                    <option value="Selangor">Selangor</option>
                    <option value="Terengganu">Terengganu</option>
                </select>
            </div>


              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </main>


      </body>
</html>
