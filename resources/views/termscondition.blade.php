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

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body>

  <!-- Spinner Start -->
 <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-danger" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0" style="border-radius: 0 0 30px 30px;">
           <div class=" align-items-center px-4 px-lg-5">
              <ul>
                <li>
              <img src="img/1743560-200.png" class="profile" width="50px" />
              <ul>
                <li class="sub-item">
                  <span  class="material-icons-outlined"><a href="/MyProfile" class="text-dark">
                    account_circle
                    </span>
                     <p>My Profile</p></a>
                </li>
                <li class="sub-item">
                  <span class="material-icons-outlined"><a href="/SettingProfile" class="text-dark">
                    manage_accounts 
                  </span>
                     <p>Edit Profile</p></a>
                </li>
                <li class="sub-item">
                  <span class="material-icons-outlined"><a href="/Inbox" class="text-dark">
                    inbox
                    </span>
                  <p>Inbox</p></a>
                </li>
                <li class="sub-item">
                  <span class="material-icons-outlined"><a href="/Setting" class="text-dark">
                    settings
                    </span>
                  <p>Setting</p></a>
                </li>
                
                <li class="sub-item">
                  <span class="material-icons-outlined"> <a href="/Logout" class="text-dark">logout </span>
                  <p>Logout</p></a>
                </li>
              </ul>
            </li>
          </ul>
           </div> 
          <a class=" align-items-left px-4 px-lg-2">
            <h2 class="m-0 text-danger">KaryaSiswa</h2>

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
                        <a href="/Ekskul" class="dropdown-item">Ekskul</a>
                        <a href="/GaleriSekolah" class="dropdown-item">GaleriSekolah</a>
                        <a href="/Quotes" class="dropdown-item">Quotes</a>
                    </div>
                </div>
                <a href="/Prestasi" class="nav-item nav-link">Prestasi</a>
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
                    <h1 class="display-3 text-white animated slideInDown">Terms</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/Home">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Terms & Condition</li>
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
        <h6 class="section-title bg-white text-center text-danger px-3">Terms</h6>
        <h1 class="mb-5">Terms & Condition</h1>
    </div>
    <div class="col-lg-15">
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3 rounded">
            <div class="col">
              <div class="card text-center  h-100 mb-3">
                <img src="https://www.sekolahbahasainggris.co.id/wp-content/uploads/2016/02/accept-and-receive.jpg" class="img-fluid rounded-top" alt="Responsive image" style="object-fit: cover">
                <div class="card-body">
                  <h5 class="card-title">Acceptance of Terms</h5>
                  <p class="card-text">By accessing and using this website, you agree to comply with and be bound by these terms and conditions...</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card text-center h-100 mb-3">
                <img src="data:image/jpeg;base64,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" class="img-fluid rounded-top" alt="Responsive image" style="object-fit: cover">
                <div class="card-body">
                  <h5 class="card-title">Use License</h5>
                  <p class="card-text">Permission is granted to temporarily download one copy of the materials on our website for License</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card text-center  h-100">
                <img src="https://www.exabytes.co.id/blog/wp-content/uploads/2023/01/disclaimer-merupakan.jpg" class="img-fluid rounded-top" alt="Responsive image" style="object-fit: cover">
                <div class="card-body">
                  <h5 class="card-title">Disclaimer</h5>
                  <p class="card-text">The materials on our website are provided on an 'as is' basis...</p>
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card text-center h-100 mb-3">
                  <img src="data:image/jpeg;base64,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" class="img-fluid rounded-top" alt="Responsive image" style="object-fit: cover">
                  <div class="card-body">
                    <h5 class="card-title">Limitations</h5>
                    <p class="card-text">In no event shall we or our suppliers be liable for any damages...</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-center h-100 mb-3">
                  <img src="https://i0.wp.com/sastrawacana.id/wp-content/uploads/2023/04/pengertian-revisi.jpg?resize=780%2C450&ssl=1" class="img-fluid rounded-top" alt="Responsive image" style="object-fit: cover">
                  <div class="card-body">
                    <h5 class="card-title">Revisions and Errors</h5>
                    <p class="card-text">The materials appearing on our website could include technical, typographical, or photographic errors...</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-center h-100 mb-3">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuSI4DjV5aQt3CF3ybWCuRg5MPGPjppSs36A&usqp=CAU" class="img-fluid rounded-top" alt="Responsive image" style="object-fit: cover">
                  <div class="card-body">
                    <h5 class="card-title">Governing Law</h5>
                    <p class="card-text">These terms and conditions are governed by and construed in accordance with the laws of [Your Jurisdiction]...</p>
                  </div>
                </div>
              </div>
          </div>      
        </div>
    </div>
  </div>
   

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s" style="border-radius: 30px 30px 0 0;">
        <div class="container py-5">
            <div class="row g-5 justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="/PrivacyPolicy">Privacy Policy</a>
                    <a class="btn btn-link" href="/TermsCondition">Terms & Condition</a>
                    <a class="btn btn-link" href="/FaqsHelp">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Derwati Cuy</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0882-1899-0208</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>alwaysongaming10@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="text-danger btn btn-outline-light btn-social" href="https://www.instagram.com/ghinanms/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Maps</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <iframe class="position-relative rounded w-200 h-200"
                                src="https://maps.google.com/maps?q=smk%20telkom%20bandung&#038;t=m&#038;z=10&#038;output=embed&#038;iwloc=near"
                                frameborder="0" style="min-height: 200px; border:200px;" allowfullscreen="" aria-hidden="false"
                                tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">KaryaSiswa</a>, All Right Reserved.

                        
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="/Home">Home</a>
                            <a href="/FaqsHelp">FAQs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn my-button align-self-start-lg-square back-to-top"style="border-radius: 30px 30px 30px 30px;"><i class="bi bi-arrow-up"></i></a>


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