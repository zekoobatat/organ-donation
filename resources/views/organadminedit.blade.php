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
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <!-- =======================================================
  * Template Name: Medicio
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>



        <main id="main">
            <div class="container">
                <h1> Edit the Information</h1>

                <form action="{{ route('updateorganadmin', ['organ' => $organ->id]) }}" method="post" enctype="multipart/form-data">

                  @csrf

                  <div class="mb-3">
                    <label for="ic" class="form-label">IC:</label>
                    <input type="number" name="ic" class="form-control"value="{{$organ->ic}}">
                  </div>

                  <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" name="name" class="form-control" value="{{$organ->name}}">
                  </div>

                  <div class="mb-3">
                    <label for="age" class="form-label">Age:</label>
                    <input type="number" name="age" class="form-control"value="{{$organ->age}}">
                  </div>

                  <div class="mb-3">
                    <label for="gender" class="form-label">Gender:</label>
                    <select name="gender" class="form-select">
                        <option value="male" @if($organ->gender === 'male') selected @endif>Male</option>
                        <option value="female" @if($organ->gender === 'female') selected @endif>Female</option>
                    </select>
                </div>


                <div class="mb-3">
                    <label for="blood" class="form-label">Blood Type:</label>
                    <select name="blood" class="form-select"value="{{$organ->blood}}">
                        <option value="A+" @if($organ->blood === 'A+') selected @endif>A+</option>
                        <option value="A-" @if($organ->blood === 'A-') selected @endif>A-</option>
                        <option value="B+" @if($organ->blood === 'B+') selected @endif>B+</option>
                        <option value="B-" @if($organ->blood === 'B-') selected @endif>B-</option>
                        <option value="AB+" @if($organ->blood === 'AB+') selected @endif>AB+</option>
                        <option value="AB-" @if($organ->blood === 'AB-') selected @endif>AB-</option>
                        <option value="O+" @if($organ->blood === 'O+') selected @endif>O+</option>
                        <option value="O-" @if($organ->blood === 'O-') selected @endif>O-</option>
                    </select>
                </div>


                <div class="mb-3">
                    <label for="organ" class="form-label">Organ:</label>
                    <select name="organ" class="form-select">
                        <option value="Liver" @if($organ->organ === 'Liver') selected @endif>Liver</option>
                        <option value="Kidney" @if($organ->organ === 'Kidney') selected @endif>Kidney</option>
                        <option value="Lungs" @if($organ->organ === 'Lungs') selected @endif>Lungs</option>
                        <option value="Pancreas" @if($organ->organ === 'Pancreas') selected @endif>Pancreas</option>
                        <option value="Heart" @if($organ->organ === 'Heart') selected @endif>Heart</option>

                    </select>
                </div>




                <div class="mb-3">
                    <label for="state" class="form-label">State:</label>
                    <select name="state" class="form-select">
                        <option value="Johor" @if($organ->state === 'Johor') selected @endif>Johor</option>
                        <option value="Kedah" @if($organ->state === 'Kedah') selected @endif>Kedah</option>
                        <option value="Kelantan" @if($organ->state === 'Kelantan') selected @endif>Kelantan</option>
                        <option value="Melaka" @if($organ->state === 'Melaka') selected @endif>Melaka</option>
                        <option value="Negeri Sembilan" @if($organ->state === 'Negeri Sembilan') selected @endif>Negeri Sembilan</option>
                        <option value="Pahang" @if($organ->state === 'Pahang') selected @endif>Pahang</option>
                        <option value="Perak" @if($organ->state === 'Perak') selected @endif>Perak</option>
                        <option value="Perlis" @if($organ->state === 'Perlis') selected @endif>Perlis</option>
                        <option value="Penang" @if($organ->state === 'Penang') selected @endif>Penang</option>
                        <option value="Sabah" @if($organ->state === 'Sabah') selected @endif>Sabah</option>
                        <option value="Sarawak" @if($organ->state === 'Sarawak') selected @endif>Sarawak</option>
                        <option value="Selangor" @if($organ->state === 'Selangor') selected @endif>Selangor</option>
                        <option value="Terengganu" @if($organ->state === 'Terengganu') selected @endif>Terengganu</option>
                    </select>
                </div>


                <div class="mb-3">
                    <label for="status" class="form-label">select status:</label>
                    <select name="status" class="form-select"value="{{$organ->status}}">

                        <option value="Approved">Approved</option>
                        <option value="Pennding">Pennding</option>
                    </select>
                </div>


                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
        </main>


      </body>
</html>
