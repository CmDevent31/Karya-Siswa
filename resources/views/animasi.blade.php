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
                    <h1 class="display-3 text-white animated slideInDown">Animasi</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/Home">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="/Pembelajaran">Program Studi</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="/Keahlian">Keahlian</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Animasi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->



    
{{-- content --}}
<div class="container-xxl py-5" >
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
    <h6 class="section-title bg-white text-center text-danger px-3">Jurusan</h6>
    <h1 class="mb-5">Animasi</h1>
</div>

{{-- content --}}
<div class="container-xxl py-5" >
    <div class="container">
        <div class="row g-5">
          <div class="col-md-7">
         <blockquote><h2 class="featurette-heading fw-normal lh-1">Animasi</h2></blockquote>
          <p align="justify">Jurusan Animasi lebih fokus dalam mempelajari teori dan teknik dalam membuat animasi 2D dan 3D, animasi film, animasi game, dan bidang lainnya yang menggunakan konten animasi. Sedangkan untuk jurusan DKV lebih fokus pada pembuatan desain, ilustrasi, fotografi, animasi, hingga marketing.
          </p>
          <p align="justify"> Didik dengan seperangkat pengetahuan, ketrampilan, sikap, dan passion (renjana) supaya memiliki dasar yang kuat untuk mempelajari mata pelajaran selanjutnya di kelas XI dan XII.
        </p>
        <a class="btn my-button align-self-start px-3" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" >Selengkapnya</a>
        </div>
        <div class="col-md-4">
          <img src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/05/333631439_6075395605850670_2324727990982906825_n.jpg" style="border-radius: 30px 30px 30px 30px;" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="300" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Selengkapnya</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" align="justify">
              Mata pelajaran Dasar-Dasar Desain Komunikasi Visual berfungsi untuk menumbuhkembangkan keprofesionalan dan kebanggaan peserta didik terhadap desain komunikasi visual melalui pemahaman secara utuh dan menyeluruh profil technopreneur, peluang usaha dan pekerjaan/profesi, proses bisnis di dunia industri, perkembangan teknologi di industri dan dunia kerja serta isu-isu global, teknik dasar proses produksi pada industri, ketrampilan membuat sketsa dan illustrasi untuk kebutuhan dasar rancangan desain, komposisi tipografi untuk kebutuhan dasar rancangan desain, prosedur penggunaan peralatan fotografi, komputer grafis. Selain itu, sebagai landasan pengetahuan dan ketrampilan untuk pembelajaran di kelas XI dan XII pada konsentrasi keahlian yang bersangkutan.
                  Perencanaan, pelaksanaan, dan penilaian pembelajaran dilakukan sesuai dengan karakteristik mata pelajaran dan tujuan yang ingin dicapai. Pembelajarannya menggunakan berbagai variasi model pembelajaran yang interaktif, inspiratif, menyenangkan, menantang, memotivasi peserta didik untuk terlibat aktif, serta memberikan ruang yang cukup bagi prakarsa, kreativitas, kemandirian sesuai bakat, minat, renjana, serta perkembangan fisik dan psikilogis peserta didik. Model pembelajaran yang dapat digunakan antara lain: project-based learning, problem-based learning, teaching factory, discovery-based learning, inquiry-based learning, atau metode dan model lain yang relevan.          
                  <br> <br> Mata pelajaran Dasar-Dasar Desain Komunikasi Visual berkontribusi menjadikan peserta didik memiliki kompetensi sebagai seniman, dan/atau pekerja seni dalam bidang desain komunikasi visual yang berakhlak mulia, mampu berkomunikasi, bernegoisasi dan berinteraksi antar budaya, mampu bekerja dalam tim, bertanggungjawab, memiliki kepekaan dan kepedulian terhadap situasi dan lingkungan kerja, serta kritis dan kreatif.
            </div>
            <div class="modal-footer">
                <a class="btn my-button align-self-start px-3"data-bs-dismiss="modal">Close</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
    


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