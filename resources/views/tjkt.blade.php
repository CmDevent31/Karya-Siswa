@extends('layouts.main')
@section('ekskul')
    



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>KaryaSiswa</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel ="stylesheet" href="style.css">
  </head>
  <body class="">
<main>
 


    <!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0" style="border-radius: 0 0 30px 30px;">
    <a href="/KaryaSiswa" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-danger"><i class="fas fa-users me-3"></i>KaryaSiswa</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0"> 
            <a href="/Home" class="nav-item nav-link ">Home</a>
            <div class="nav-item dropdown text-danger">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kegiatan</a>
                <div class="dropdown-menu fade-down m-9">
                    <a href="/Pembelajaran" class="dropdown-item bg-danger text-white active">Studi</a>
                    <a href="/Ekskul" class="dropdown-item">Ekskul</a>
                    <a href="/GaleriSekolah" class="dropdown-item">GaleriSekolah</a>
                    <a href="/Quotes" class="dropdown-item">Quotes</a>
                </div>
            </div>
            <a href="/Prestasi" class="nav-item nav-link">Prestasi</a>
            <a href="/Login" class="nav-item nav-link">Login</a>
            <div class="nav-item dropdown text-danger">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"></a>
                <div class="dropdown-menu fade-down m-9">
                    <a href="/TentangKami" class="dropdown-item">TentangKami</a>
                    <a href="/Guru" class="dropdown-item">GuruKami</a>
                    <a href="/TimKami" class="dropdown-item">TimKami</a>
                    <a href="/PageNotFound" class="dropdown-item">PageNotFound</a>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->
    <!-- Header Start -->
    <div class="container-fluid bg-danger py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Studi</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/Home">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="/Pembelajaran">Program Studi</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Jurusan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->



    
{{-- content --}}
<div class="container mt-5">
  <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
    <h6 class="section-title bg-white text-center text-danger px-3">Jurusan</h6>
    <h1 class="mb-5">TJKT</h1>
</div>

{{-- content --}}
<div class="container mt-5">
    <div class="row featurette">
        <div class="col-md-7">
         <blockquote><h2 class="featurette-heading fw-normal lh-1">Rasional</h2></blockquote>
          <p align="justify">Dasar-dasar Teknik Jaringan Komputer dan Telekomunikasi adalah mata pelajaran yang berisi kompetensi-kompetensi yang mendasari penguasaan keahlian Teknik Jaringan Komputer dan Teknik Telekomunikasi.</p>
          <p align="justify"> Mata pelajaran Dasar-Dasar Teknik Jaringan Komputer dan Telekomunikasi berfungsi untuk membekali peserta didik dengan seperangkat pengetahuan, keterampilan, dan sikap agar memiliki dasar yang kuat dalam mempelajari mata pelajaran konsentrasi keahlian di fase F. Lingkup materi mata pelajaran ini meliputi wawasan sistem dan cara pengukuran di bidang Teknik Jaringan Komputer dan Telekomunikasi.</p>
        </div>
        <div class="col-md-4">
          <img src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/05/TJKT.jpg" style="border-radius: 30px 30px 30px 30px;"svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="300" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
        </div>
      </div>
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading-left fw-normal lh-1 ">Rohis Care</h2>
          <p class="lead-left">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
        </div>
        <div class="col-md-4 order-md-1">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text></svg>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">Paskibra</h2>
          <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
        </div>
        <div class="col-md-4">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text></svg>
        </div>
      </div>
<hr class="featurette-divider">
    
</main>




    <!-- Back to Top -->
<!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

  </body>
</html>
@endsection