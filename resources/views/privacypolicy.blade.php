@extends('layouts.main')
@section('privacy')
    

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
                      <a href="/Pembelajaran" class="dropdown-item">Studi</a>
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
                    <h1 class="display-3 text-white animated slideInDown">Privasi</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/Home">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Privacy Policy</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

{{-- card title --}}
<div class="container ">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-danger px-3">Privasi</h6>
        <h1 class="mb-5">Privacy Policy</h1>
    </div>
    <div class="col-lg-15">
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3 rounded">
            <div class="col">
              <div class="card text-center  h-100 mb-3">
                <img src="https://media.licdn.com/dms/image/D5612AQEbao54KZy1_A/article-cover_image-shrink_600_2000/0/1659780433773?e=2147483647&v=beta&t=Ot01p2gbxkH8K9NKncX9V17lXb7egOgzOazUGBACA8s" class="img-fluid rounded-top" alt="Responsive image" style="object-fit: cover">
                <div class="card-body">
                  <h5 class="card-title">Data Collection</h5>
                  <p class="card-text">We collect certain personal information from users for the purpose of...</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card text-center h-100 mb-3">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/007/412/968/original/concept-of-mobile-phone-usage-and-data-communication-sending-data-links-around-the-world-free-video.jpg" class="img-fluid rounded-top" alt="Responsive image" style="object-fit: cover">
                <div class="card-body">
                  <h5 class="card-title">Data Usage</h5>
                  <p class="card-text">The collected data is used for...</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card text-center  h-100">
                <img src="data:image/jpeg;base64,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" class="img-fluid rounded-top" alt="Responsive image" style="object-fit: cover">
                <div class="card-body">
                  <h5 class="card-title">Data Protection</h5>
                  <p class="card-text">We take appropriate measures to protect the collected data, including...</p>
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card text-center h-100 mb-3">
                  <img src="https://ichef.bbci.co.uk/news/2048/cpsprodpb/2C77/production/_118738311_cookies_accept.png" class="img-fluid rounded-top" alt="Responsive image" style="object-fit: cover">
                  <div class="card-body">
                    <h5 class="card-title">Cookies</h5>
                    <p class="card-text">Our website uses cookies to...</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-center h-100 mb-3">
                  <img src="https://criminallawyervernonbc.com/wp-content/uploads/2017/01/e031b90b2cf61c3e81584d04ee44408be273ead11eb1154092f4_1280_paperwork.jpg" class="img-fluid rounded-top" alt="Responsive image" style="object-fit: cover">
                  <div class="card-body">
                    <h5 class="card-title">Third Party Disclosure</h5>
                    <p class="card-text">We do not sell, trade, or otherwise transfer...</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-center h-100 mb-3">
                  <img src="https://www.legalzoom.com/sites/lz.com/files/inline-images/articles/when_and_how_to_update_your_companys_privacy_policy.jpg" class="img-fluid rounded-top" alt="Responsive image" style="object-fit: cover">
                  <div class="card-body">
                    <h5 class="card-title">Changes to Privacy Policy</h5>
                    <p class="card-text">We reserve the right to update our privacy policy...</p>
                  </div>
                </div>
              </div>
          </div>      
        </div>
    </div>
  </div>
   

   
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
