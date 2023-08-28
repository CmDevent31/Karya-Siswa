@extends('layouts.main')
@section('pembelajaran')


<!DOCTYPE html>
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

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
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
                <a href="/Home" class="nav-item nav-link">Home</a>
                <div class="nav-item dropdown text-danger">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kegiatan</a>
                    <div class="dropdown-menu fade-down m-9">
                        <a href="/Pembelajaran" class="dropdown-item text-white bg-danger active">Studi</a>
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
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Studi</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/Home">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Program Studi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->




    <!-- Service Start -->
    <div class="container-xxl py-5"class= "text-secondary">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-danger px-3">Produktivitas</h6>
                    <h1 class="mb-5">Berbagai Macam Pembelajaran</h1>
                </div>
                
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s"style="border-radius: 30px 30px 30px 30px;"><a href="/Keahlian" class="text-dark">
                    <div class="service-item text-center pt-3"style="border-radius: 30px 30px 30px 30px;">
                        <div class="p-4">
                            <i class="fa fa-3x fa-laptop text-dark mb-4"></i>
                            <h5 class="mb-3">Produktif</h5>
                            <p class="text-dark ">Produktif adalah pembelajaran kejuruan yang merupakan kemampuan khusus yang diberikan kepada siswa sesuai dengan program keahlian yang dipilihnya.</p>
                        </div>
                    </div>
                </a></div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s"style="border-radius: 30px 30px 30px 30px;"><a href="#" class="text-dark">
                    <div class="service-item text-center pt-3"style="border-radius: 30px 30px 30px 30px;">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book text-dark mb-4"></i>
                            <h5 class="mb-3">Normatif & Adaptif</h5>
                            <p>Pelajaran normatif dan adaptif merupakan pelajaran non kejuruan yang diberikan kepada siswa sebagai penunjang kemampuan produktif.</p>
                        </div>
                    </div></a>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Service End -->


 
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
    
@endsection