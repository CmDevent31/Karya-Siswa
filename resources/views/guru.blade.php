@extends('layouts.main')
@section('guru')
    


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
        <a class="navbar-brand d-flex align-items-center px-4 px-lg-5">
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
                        <a href="/Pembelajaran" class="dropdown-item">Studi</a>
                        <a href="/Ekskul" class="dropdown-item ">Ekskul</a>
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
                        <a href="/Guru" class="dropdown-item bg-danger text-white active">GuruKami</a>
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
                    <h1 class="display-3 text-white animated slideInDown">GuruKami</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/Home">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">GuruKami</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->



    
    <!-- Courses Start -->
    <div class="container-xxl py-5" >
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-danger px-3">Guru</h6>
                <h1 class="mb-5">TJKT</h1>
            </div>
            <div class="row g-4 justify-content-center" >
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="text-center position-relative overflow-hidden"style="border-radius: 30px 30px 30px 30px;">  
                            <img class="img-fluid" width="300px" height="0"src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/05/RYAN-NOVERIAND-RAWHAN-S.T-300x300.jpg" alt=""style="border-radius: 30px 30px 30px 30px;">
                        </div>
                        <div class="text-center p-4 pb-0" >
                            <h5 class="mb-4"></h5>
                        </div>
                        <div class="d-flex border-top"> 
                            <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-danger me-2"></i><b>Ryan Noveriand Rawhan. S.T</b></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="text-center position-relative overflow-hidden"class="scaled"style="border-radius: 30px 30px 30px 30px;">
                            <img class="img-fluid" width="300px" height="0"src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/05/FAJAR-NUGRAHA-M.T-300x300.jpg" width="207" height="200" alt=""style="border-radius: 30px 30px 30px 30px;">

                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4"></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-danger me-2"></i><b>Fajar Nugraha. M.T</b></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="text-center position-relative overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <img class="img-fluid" src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/05/EGI-NUGRAHA-S.Pd_-300x300.jpg" style="border-radius: 30px 30px 30px 30px;"alt="">

                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4"></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-danger me-2"></i><b>Egi Nugraha. S.Pd</b></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="text-center position-relative overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <img class="img-fluid" src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/05/WAHYU-NUR-SAPUTRA-M.T-300x300.jpg" style="border-radius: 30px 30px 30px 30px;"alt="">

                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4"></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-danger me-2"></i><b>Wahyu Nur Saputra. M.T</b></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="text-center position-relative overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <img class="img-fluid" src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/05/AMORSA-ERLOSIMA-PRIANDA-S.T-300x300.jpg" style="border-radius: 30px 30px 30px 30px;"alt="">

                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4"></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-danger me-2"></i><b>Amorsa Erlosima Prianda. S.T</b></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="text-center position-relative overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <img class="img-fluid" src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/05/MAIDARMAN-S.Kom_-300x300.jpg" style="border-radius: 30px 30px 30px 30px;"alt="">

                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4"></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-danger me-2"></i><b>Maidarman. S.Kom</b></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="text-center position-relative overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <img class="img-fluid" src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/05/MUHAMMAD-HANIF-TAQIUDDIN-A.Md_-300x300.jpg" style="border-radius: 30px 30px 30px 30px;"alt="">

                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4"></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-danger me-2"></i><b>Muhammad Hanif Taqiuddin. M.d</b></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="text-center position-relative overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <img class="img-fluid" src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/05/MUJAHID-HAQI-ROBANI-S.Kom_-300x300.jpg" style="border-radius: 30px 30px 30px 30px;"alt="">

                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4"></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-danger me-2"></i><b>Mujahid Haqi Robani. S.Kom</b></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="text-center position-relative overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <img class="img-fluid" src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/03/Fitri-241x300.png" style="border-radius: 30px 30px 30px 30px;"alt="">

                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4"></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-danger me-2"></i><b>Fitri Yanti. S.Kom</b></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="text-center position-relative overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <img class="img-fluid" src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/03/Weni-300x300.png" style="border-radius: 30px 30px 30px 30px;"alt="">

                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4"></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-danger me-2"></i><b>Weni Tasya. S.T</b></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="text-center position-relative overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <img class="img-fluid" src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/03/Ane-Riayane-188x300.png" style="border-radius: 30px 30px 30px 30px;"alt="">

                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4"></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-danger me-2"></i><b>Ane Riyana. S.Kom</b></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="text-center position-relative overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <img class="img-fluid" src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/05/WINDI-SOLIHATIN-WAHIDAH-S.Kom_-300x300.jpg" style="border-radius: 30px 30px 30px 30px;"alt="">

                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4"></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-danger me-2"></i><b>Windi Solihatin Wahidah. S.Kom</b></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="text-center position-relative overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <img class="img-fluid" src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/03/Elsa-188x300.png" style="border-radius: 30px 30px 30px 30px;"alt="">

                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4"></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-danger me-2"></i><b>Elsa Nur Oktaviar Herawati. S.T</b></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->



    <!-- Courses Start -->
    <div class="container-xxl py-5" >
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-danger px-3">Guru</h6>
                <h1 class="mb-5">DKV</h1>
            </div>
            <div class="row g-4 justify-content-center" >
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="text-center position-relative overflow-hidden"style="border-radius: 30px 30px 30px 30px;">  
                            <img class="img-fluid" width="300px" height="0"src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/03/riska-300x300.png" alt=""style="border-radius: 30px 30px 30px 30px;">
                        </div>
                        <div class="text-center p-4 pb-0" >
                            <h5 class="mb-4"></h5>
                        </div>
                        <div class="d-flex border-top"> 
                            <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-danger me-2"></i><b>Riska Sintia Dewi. A.Md.Kom</b></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="text-center position-relative overflow-hidden"class="scaled"style="border-radius: 30px 30px 30px 30px;">
                            <img class="img-fluid" width="300px" height="0"src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/03/rinrin-300x300.png" width="207" height="200" alt=""style="border-radius: 30px 30px 30px 30px;">

                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4"></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-danger me-2"></i><b>Rinrin Dewi Nurani. S.Pd</b></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="text-center position-relative overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <img class="img-fluid" src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/03/rahma-300x300.png" style="border-radius: 30px 30px 30px 30px;"alt="">

                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4"></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-danger me-2"></i><b>Rahma Sayyida Hilmia. S.Pd</b></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="text-center position-relative overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <img class="img-fluid" src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/03/prima-300x300.png" style="border-radius: 30px 30px 30px 30px;"alt="">

                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4"></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-danger me-2"></i><b>Primayanti Agustya Sofianti. S.Pd</b></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="text-center position-relative overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <img class="img-fluid" src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/03/Siti-Khofifah-300x300.png" style="border-radius: 30px 30px 30px 30px;"alt="">

                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4"></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-danger me-2"></i><b>Siti Khofifah. S.Pd</b></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="text-center position-relative overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <img class="img-fluid" src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/03/mamay-241x300.png" style="border-radius: 30px 30px 30px 30px;"alt="">

                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4"></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-danger me-2"></i><b>Mamay DjuDjun. S.E</b></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="text-center position-relative overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <img class="img-fluid" src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/03/Istiyanah-241x300.png" style="border-radius: 30px 30px 30px 30px;"alt="">

                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4"></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-danger me-2"></i><b>Istyanah Khoiriah. S.Pd</b></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="text-center position-relative overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <img class="img-fluid" src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/03/nita-300x300.png" style="border-radius: 30px 30px 30px 30px;"alt="">

                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4"></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-danger me-2"></i><b>Nita Mujahidah. S.Pd</b></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="text-center position-relative overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <img class="img-fluid" src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/03/Alya-2-188x300.png" style="border-radius: 30px 30px 30px 30px;"alt="">

                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4"></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-danger me-2"></i><b>Alya Fauzia Khansa. S.Pd/b></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->

    <!-- Courses Start -->
    <div class="container-xxl py-5" >
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-danger px-3">Guru</h6>
                <h1 class="mb-5">Animasi</h1>
            </div>
            <div class="row g-4 justify-content-center" >
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="text-center position-relative overflow-hidden"style="border-radius: 30px 30px 30px 30px;">  
                            <img class="img-fluid" width="300px" height="0"src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/03/riska-300x300.png" alt=""style="border-radius: 30px 30px 30px 30px;">
                        </div>
                        <div class="text-center p-4 pb-0" >
                            <h5 class="mb-4"></h5>
                        </div>
                        <div class="d-flex border-top"> 
                            <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-danger me-2"></i><b>Riska Sintia Dewi. A.Md.Kom</b></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="text-center position-relative overflow-hidden"class="scaled"style="border-radius: 30px 30px 30px 30px;">
                            <img class="img-fluid" width="300px" height="0"src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/03/rinrin-300x300.png" width="207" height="200" alt=""style="border-radius: 30px 30px 30px 30px;">

                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4"></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-danger me-2"></i><b>Rinrin Dewi Nurani. S.Pd</b></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="text-center position-relative overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <img class="img-fluid" src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/03/rahma-300x300.png" style="border-radius: 30px 30px 30px 30px;"alt="">

                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4"></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-danger me-2"></i><b>Rahma Sayyida Hilmia. S.Pd</b></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="text-center position-relative overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <img class="img-fluid" src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/03/prima-300x300.png" style="border-radius: 30px 30px 30px 30px;"alt="">

                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4"></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-danger me-2"></i><b>Primayanti Agustya Sofianti. S.Pd</b></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="text-center position-relative overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <img class="img-fluid" src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/03/Siti-Khofifah-300x300.png" style="border-radius: 30px 30px 30px 30px;"alt="">

                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4"></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-danger me-2"></i><b>Siti Khofifah. S.Pd</b></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="text-center position-relative overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <img class="img-fluid" src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/03/mamay-241x300.png" style="border-radius: 30px 30px 30px 30px;"alt="">

                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4"></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-danger me-2"></i><b>Mamay DjuDjun. S.E</b></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="text-center position-relative overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <img class="img-fluid" src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/03/Istiyanah-241x300.png" style="border-radius: 30px 30px 30px 30px;"alt="">

                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4"></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-danger me-2"></i><b>Istyanah Khoiriah. S.Pd</b></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="text-center position-relative overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <img class="img-fluid" src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/03/nita-300x300.png" style="border-radius: 30px 30px 30px 30px;"alt="">

                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4"></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-danger me-2"></i><b>Nita Mujahidah. S.Pd</b></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="text-center position-relative overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <img class="img-fluid" src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/03/Alya-2-188x300.png" style="border-radius: 30px 30px 30px 30px;"alt="">

                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4"></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-danger me-2"></i><b>Alya Fauzia Khansa. S.Pd/b></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->


    
    

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