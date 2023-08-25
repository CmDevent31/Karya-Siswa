@extends('layouts.main')
@section('tentangkami')
    

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
                    <a href="/Pembelajaran" class="dropdown-item">Pembelajaran</a>
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
                    <a href="/TentangKami" class="dropdown-item bg-danger text-white active">TentangKami</a>
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
                    
                    <h1 class="display-3 text-white animated slideInDown">TentangKami</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/Home">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">TentangKami</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5" >
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;" >
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="https://www.arenalaptop.com/wp-content/uploads/2018/12/Laptop-Untuk-Programmer.jpg" style="border-radius: 100px 100px 100px 100px;"alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-danger pe-3" >TentangKami</h6>
                    <h1 class="mb-4">Welcome to KaryaSiswa</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-danger me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-danger me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-danger me-2"></i>International Certificate</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-danger me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-danger me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-danger me-2"></i>International Certificate</p>
                        </div>
                    </div>
                    <a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#detailModal" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Read More</a>                
            
                </div>
        </div>
    </div>

    </div>

    <div class="modal fade show" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
        <div class="modal-wrapper">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row justify-content-center modal-detail">
                                <div class="col-lg-7 col-md-10">
                                    <img src="https://www.arenalaptop.com/wp-content/uploads/2018/12/Laptop-Untuk-Programmer.jpg" class="img-fluid rounded-xl" alt="">
                                </div>
                                <div class="col-lg-5 col-md-10 mt-4 mt-lg-0">
                                    <h1>TentangKami</h1>
                                    <span class="text-muted">About Us</span>
                                    <div class="d-flex  my-4">
                                        <p class="fw-bold me-4">Humam</p>
                                        <a href="https://instagram.com">
                                            <img src="asset/img/icon/ig.svg" class="sosmed-icon mx-1" alt="">
                                        </a>
                                    </div>
                                    <p align="Justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto amet nam at neque adipisci dicta sed sit laboriosam, quaerat incidunt maxime ea possimus enim explicabo? Amet alias soluta, provident nihil asperiores impedit dicta officia, voluptatibus distinctio eum delectus aperiam, deserunt minus quasi dolor voluptate autem maxime officiis nisi repellendus quos voluptas earum at beatae! Cupiditate quasi cum ratione pariatur excepturi tempore animi, ea vel in, dolore rerum fugiat iste? Assumenda, ratione inventore! Fuga, alias a nobis sapiente sint.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    

        


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
