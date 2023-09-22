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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/myprofile.css" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel ="stylesheet" href="style.css">

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
              <img class="avatar" src="img/user.png" alt="avatar" />
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
               <span class="material-icons-outlined"><a href="/Logout" class="text-dark"> logout </span>
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
                <a href="/Input" class="nav-item nav-link">+</a>

            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <br>
        <div class="container ">
            <div class="row g-5 justify-content-center">
              <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-danger px-3">Profile</h6>
                <h1 class="mb-5">My Profile </h1>
            </div>
                <div class="col-lg-6">
                <div class="card" data-state="#about">
                  <div class="card-header">
                    <div class="card-cover" style="background-image: url('img/user.png')"></div>
                    <img class="card-avatar" src="img/user.png" alt="avatar" />
                    <h1 class="card-fullname">USER</h1>
                    <h2 class="card-jobtitle">Kelas</h2>
                  </div>
                  <div class="card-main">
                    <div class="card-section is-active" id="about">
                      <div class="card-content">
                        <div class="card-subtitle"><h5>Bio</h5></div>
                        <p class="card-desc">-
                        </p>
                      </div>
                      
                    </div>
                    <div class="card-section" id="experience">
                      <div class="card-content">
                        <div class="card-subtitle"><h5>Personal</h5></div>
                            <br><div class="card-item-title">Password</div>
                            <div class="card-item-desc">-</div>
                            <div class="card-item-title">Birth date</div>
                            <div class="card-item-desc">-</div>
                            <div class="card-item-title">Gender</div>
                            <div class="card-item-desc">-</div>
                      </div>
                    </div>
                    <div class="card-section" id="contact">
                      <div class="card-content">
                        <div class="card-subtitle"><h5>Contact</h5></div>
                        <div class="card-contact-wrapper">
                          <div class="card-contact">
                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z" /></svg>-</div>
                          <div class="card-contact">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                              <path d="M22 6l-10 7L2 6" /></svg>
                              -
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-buttons">
                      <button data-section="#about" class="is-active">ABOUT</button>
                      <button data-section="#experience">PERSONAL</button>
                      <button data-section="#contact">CONTACT</button>
                    </div>
                  </div>
                </div>
                </div>
            </div>
           
        </div>
    <!-- Header End -->

    

    
   
    

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
                                    frameborder="2" style="min-height: 200px; border:200px;" allowfullscreen="" aria-hidden="false"
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
                                <a href="/FaqsHelp">FQAs</a>
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
        <script src ="js/bootstrap.bundle.min.js" ></script>
        <script src="js/swiper-bundle.min.js"></script>
        <script src="js/script.js"></script>
    
    </body>
    
    </html>