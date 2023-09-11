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
  <link rel="stylesheet" href="css/style.css" />

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
              <img src="img/1743560-200.png" class="profile" width="50px" />
              <ul>
                <li class="sub-item">
                  <span  class="material-icons-outlined"><a href="/MyProfile" class="text-dark">
                    account_circle
                    </span>
                     <p>My Profile</p></a>
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
                <a href="/Prestasi" class="nav-item nav-link active">Prestasi</a>
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
    <div class="container-fluid bg-dark py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Prestasi</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/Home">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Prestasi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-danger px-3">Prestasi</h6>
                <h1 class="mb-5">Siswa/siswi Yang Meraih Prestasi</h1>
            </div>
            <div class="row g-4 row g-4 justify-content-center">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                      <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                          <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                              <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                  <img src="img/kate.jpeg" class="d-block w-100" alt="..." style="border-radius: 30px 30px 30px 30px;">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                  <img src="img/tedo4.jpeg" class="d-block w-100" alt="..." style="border-radius: 30px 30px 30px 30px;">
                                </div>
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                              </button>
                            </div>
                      </div>
                      <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                          <div class="bg-light d-flex justify-content-center pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                              <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CvI9iDoSM4t/?img_index=1"><i class="fab fa-instagram"></i></a>
                          </div>
                      </div>
                      <div class="text-center p-4">
                          <h5 class="mb-0">Selamat Kepada Ananda</h5>
                      
                          <b><p><small><ol><li>🏅G.Banu Prasetyo (XI TJKT 1)....</li></li></ol></p></b>
                            <a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>                
                            
                               </small>
                      </div>
                   </div>
              </div>
  
  <div class="modal fade show" id="modal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
  <div class="modal-wrapper">
      <div class="modal-dialog modal-fullscreen">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="container">
                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                      <div class="card-body bg-light">
                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                        <div id="mamak1" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="4000">
                              <img src="img/kate.jpeg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="4000">
                              <img src="img/campuran1.jpeg" class="d-block w-100" alt="...">
                            </div>
                          </div>
                          
                      </div>

                          <div class="col-md-8 order-md-2">
                                <div class="d-flex border-bottom"> 
                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">Selamat Kepada Ananda</p></h1>
                                </div>
                                <p class="card-text"><br><b> <p align="center">🏅G.Banu Prasetyo (XI TJKT 1)</p>
                                  <p align="center">🏅Faris Akbar (XI TJKT 5)</p>
                                    <p align="center">🏅Rafli Fahrezi Ramadhan (XII TKJ 2)</p></b>
                                <br>
                                <small><p align="center"><b>Sebagai peraih medali emas di nomor komite pada kejuaraan karate STKIP Pasundan Cup V Sirkuit II Jawa Barat 2023.Yuk jadikan prestasi sebagai tradisi.</b></p>
                                
                                  
                                  <p align="center">@karate.smktelbdg #realchampion #bearealdigitaltalent #smkhebat #smkbisa<div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                              <div class="d-flex  my-4">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CvI9iDoSM4t/?img_index=1"><i class="fab fa-instagram"></i></a>                  
                              </div>
                              </p></small></p>
                              

                          </div>
                          
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                  
              </div>
              <div class="modal-footer">
              </div>
              <div class="modal-footer">
              </div>
          </div>
      </div>
  </div>
  </div>
                  <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                      <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                          <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                              <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
                                  <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="10000">
                                      <img src="img/tedo1.jpeg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                      <img src="img/tedo2.jpeg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                      <img src="img/tedo3.jpeg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                      <img src="img/tedo4.jpeg" class="d-block w-100" alt="...">
                                    </div>
                                  </div>
                                  <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                  </button>
                                  <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                  </button>
                                </div>
                          </div>
                          <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                              <div class="bg-light d-flex justify-content-center pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                  <a class="btn my-button align-self-start-sm-square btn-danger mx-1"style="border-radius: 30px 30px 30px 30px;" href="https://www.instagram.com/p/CsqJjpqhL_L/?img_index=1"><i class="fab fa-instagram"></i></a>
                              </div>
                          </div>
                          <div class="text-center p-4">
                              <h5 class="mb-0">Congratulations!! 👏🏻💯</h5>
                          
                              <br><small><b>Sobat Prima! Berikut ini merupakan... </b></br>
                                <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal1" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>
  
                                  </small></ul></br>
                          </div>
                      </div>
                  </div>
                  <div class="modal fade show" id="modal1" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                    <div class="modal-wrapper">
                        <div class="modal-dialog modal-fullscreen">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                      <div class="card text-center" style="border-radius: 0 0 0 0;">
                                        <div class="card-body bg-light">
                                        <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="mamak" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                              <div class="carousel-item active" data-bs-interval="4000">
                                                <img src="img/tedo1.jpeg" class="d-block w-100" alt="...">
                                              </div>
                                              <div class="carousel-item" data-bs-interval="4000">
                                                <img src="img/tedo2.jpeg" class="d-block w-100" alt="...">
                                              </div>
                                              <div class="carousel-item" data-bs-interval="4000">
                                                <img src="img/tedo3.jpeg" class="d-block w-100" alt="...">
                                              </div>
                                              <div class="carousel-item" data-bs-interval="4000">
                                                <img src="img/tedo4.jpeg" class="d-block w-100" alt="...">
                                              </div>
                                            </div>
                                            
                                        </div>
                  
                                            <div class="col-md-8 order-md-2">
                                                  <div class="d-flex border-bottom"> 
                                                    <h1 class="flex-fill text-center py-2 " ><p align = "center">Selamat Kepada Ananda</p></h1>
                                                  </div>
                                                  <p class="card-text"><br><b> <p align="center">Sobat Prima! Berikut ini merupakan siswa SMK Telkom Bandung yang berhasil meraih Juara pada Lomba Taekwondo yang di gelar di SMK Marhas. Selamat atas pencapaian luar biasanya dan terima kasih atas prestasinya! Kami bangga!
                                                    Be a Real Digital Talent!</p></b>
                                                  <br>
                                                  <small><p align="center"><b>@yptelkom
                                                    @telkom_schools
                                                        @ridwankamil
                                                            @ruzhanul
                                                                @wahyu_mijaya
                                                                    @arifrudiana
                                                                        @rosy.telkom</b></p>
                                                  
                                                    
                                                    <p align="center">#smktelkombandung #smktelbdg #telkomschools #smktelkom #ppdb #smkno1bandung #infobandung #infodayeuhkolot #pelatihan #smkswastaterbaik #sekolahterbaik #smkhebatsmkbisa #bearealdigitaltalent #sekolahnyasangjuara #primaseru2023 #sekolahterakreditasia #smkakreditasia #smkterbaik #taekwondo
                                                      
                                                      <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                                <div class="d-flex  my-4">
                                                  <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CvI9iDoSM4t/?img_index=1"><i class="fab fa-instagram"></i></a>                  
                                                </div>
                                                </p></small></p>
                                                
                  
                                            </div>
                                            
                                            
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                    
                                </div>
                                <div class="modal-footer">
                                </div>
                                <div class="modal-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                  <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                      <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                          <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                              <div id="carousel2" class="carousel slide" data-bs-ride="carousel">
                                  <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="10000">
                                      <img src="img/kate1.jpeg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                      <img src="img/tedo4.jpeg" class="d-block w-100" alt="...">
                                    </div>
                                  </div>
                                  <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                  </button>
                                  <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                  </button>
                                </div>
                          </div>
                          <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                              <div class="bg-light d-flex justify-content-center pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                  <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CslDTg8BRLS?img_index=1"><i class="fab fa-instagram"></i></a>
                              </div>
                          </div>
                          <div class="text-center p-4">
                              <h5 class="mb-0">Congratulations!! 👏🏻💯</h5>
                              <small>
  
                                  <br><b>Sobat Prima! Berikut ini merupakan...
                                    <br> <br>
                                    <a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal2" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>
  
                                  </b></br>
                                  
                                  
                                      </small>
                          </div>
                      </div>
                  </div>
                  
                  <div class="modal fade show" id="modal2" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                    <div class="modal-wrapper">
                        <div class="modal-dialog modal-fullscreen">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                      <div class="card text-center" style="border-radius: 0 0 0 0;">
                                        <div class="card-body bg-light">
                                        <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="mamak" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                              <div class="carousel-item active" data-bs-interval="4000">
                                                <img src="img/kate1.jpeg" class="d-block w-100" alt="...">
                                              </div>
                                              <div class="carousel-item" data-bs-interval="4000">
                                                <img src="img/tedo4.jpeg" class="d-block w-100" alt="...">
                                              </div>
                                            </div>
                                            
                                        </div>
                                            <div class="col-md-8 order-md-2">
                                                  <div class="d-flex border-bottom"> 
                                                    <h1 class="flex-fill text-center py-2 " ><p align = "center">Selamat Kepada Ananda</p></h1>
                                                  </div>
                                                  <p class="card-text"><br><b> <p align="center">Sobat Prima! Berikut ini merupakan siswa SMK Telkom Bandung yang berhasil meraih Juara 3 Kata Karate dan Juara 1 Kumite Karate di ajang Olimpiade Olahraga Nasional (O2SN) untuk tingkat kabupaten Bandung. Selamat atas pencapaian luar biasanya dan terima kasih atas prestasinya! Kami bangga! Be a Real Digital Talent!</p></b>
                                                  <br>
                                                  <small><p align="center"><b>@yptelkom
                                                    @telkom_schools
                                                        @ridwankamil
                                                            @ruzhanul
                                                                @wahyu_mijaya
                                                                    @arifrudiana
                                                                        @rosy.telkom</b></p>
                                                  
                                                    
                                                    <p align="center">#smktelkombandung #smktelbdg #telkomschools #smktelkom #ppdb #smkno1bandung #infobandung #infodayeuhkolot #pelatihan #smkswastaterbaik #sekolahterbaik #smkhebatsmkbisa #bearealdigitaltalent #sekolahnyasangjuara #primaseru2023 #sekolahterakreditasia #smkakreditasia #smkterbaik #karate #o2sn
                                                      
                                                      <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                                <div class="d-flex  my-4">
                                                  <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CvI9iDoSM4t/?img_index=1"><i class="fab fa-instagram"></i></a>                  
                                                </div>
                                                </p></small></p>
                                                
                  
                                            </div>
                                            
                                            
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                    
                                </div>
                                <div class="modal-footer">
                                </div>
                                <div class="modal-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                  <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                      <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                          <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                              <div id="carousel3" class="carousel slide" data-bs-ride="carousel">
                                  <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="10000">
                                      <img src="img/basket.jpeg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                      <img src="img/tedo4.jpeg" class="d-block w-100" alt="...">
                                    </div>
                                  </div>
                                  <button class="carousel-control-prev" type="button" data-bs-target="#carousel3" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                  </button>
                                  <button class="carousel-control-next" type="button" data-bs-target="#carousel3" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                  </button>
                                </div>
                          </div>
                          <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                              <div class="bg-light d-flex justify-content-center pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                  <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CslC21mBVLx/?img_index=1"><i class="fab fa-instagram"></i></a>
                              </div>
                          </div>
                          <div class="text-center p-4">
                              <h5 class="mb-0">Congratulations!!👏🏻💯</h5>
                              <small><br><b>Sobat Prima! Berikut ini merupakan... </br></b>
                                <br> <a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal3" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>
  
  
                                 
                                     </small>
                          </div>
                      </div>
                  </div>
                  <div class="modal fade show" id="modal3" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                    <div class="modal-wrapper">
                        <div class="modal-dialog modal-fullscreen">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                      <div class="card text-center" style="border-radius: 0 0 0 0;">
                                        <div class="card-body bg-light">
                                        <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                            <div id="mamak" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                  <div class="carousel-item active" data-bs-interval="4000">
                                                    <img src="img/basket.jpeg" class="d-block w-100" alt="...">
                                                  </div>
                                                  <div class="carousel-item" data-bs-interval="4000">
                                                    <img src="img/tedo4.jpeg" class="d-block w-100" alt="...">
                                                  </div>
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-8 order-md-2">
                                                  <div class="d-flex border-bottom"> 
                                                    <h1 class="flex-fill text-center py-2 " ><p align = "center">Congratulations!! 👏🏻💯</p></h1>
                                                  </div>
                                                  <p class="card-text"><br><br><b>Sobat Prima! Berikut ini merupakan siswa SMK Telkom Bandung yang berhasil meraih Juara 2 Lomba Basket di ajang Olimpiade Olahraga Nasional (O2SN) untuk tingkat kabupaten Bandung. Selamat atas pencapaian luar biasanya dan terima kasih atas prestasinya! Kami bangga!
  
                                  Be a Real Digital Talent!!
                                                  </b><br>
                                                  <small><p align="center">
                                                    <br><br>
                                                  
                                  
                                                    <p align="center">#smktelkombandung #smktelbdg #telkomschools #smktelkom #ppdb #smkno1bandung #infobandung #infodayeuhkolot #pelatihan #smkswastaterbaik #sekolahterbaik #smkhebatsmkbisa #bearealdigitaltalent #sekolahnyasangjuara #primaseru2023 #sekolahterakreditasia #smkakreditasia #smkterbaik #basket #o2sn
                                                      <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                                <div class="d-flex  my-4">
                                                  <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CslC21mBVLx/?img_index=1"><i class="fab fa-instagram"></i></a>                  
                                                </div>
                                                </p></small></p>
                                                
                                                
                                                
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="modal-footer">
                                </div>
                                <div class="modal-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel4" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/silat.jpeg" class="d-block w-100" alt="..." style="border-radius: 30px 30px 30px 30px;">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/tedo4.jpeg" class="d-block w-100" alt="..." style="border-radius: 30px 30px 30px 30px;">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel4" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel4" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CslDEcHBVcY/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Congratulations!! 👏🏻💯</h5>
                        
                            <br><b><small>Sobat Prima! Berikut ini merupakan....</b></br>
                                <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal4" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>
                                </small></br>
                                </div>
                         </div>
                    
                </div>
                <div class="modal fade show" id="modal4" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="mamak" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/silat.jpeg" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="4000">
                                                  <img src="img/tedo4.jpeg" class="d-block w-100" alt="...">
                                                </div>
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">Congratulations!! 👏🏻💯</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Siswa SMK Telkom Bandung yang berhasil meraih medali emas di ajang Olimpiade Olahraga Nasional (O2SN) cabang Pencak Silat untuk tingkat kabupaten Bandung. Selamat atas pencapaian luar biasanya dan terima kasih atas prestasinya! Kami bangga! Be a Real Digital Talent!
                                                </b><br>
                                                <small><p align="center">
                                                  <br><br>
                                                
                                
                                                  <p align="center">@yptelkom @telkom_schools @ridwankamil @ruzhanul @wahyu_mijaya @arifrudiana @rosy.telkom
                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CslDEcHBVcY/"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel5" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/speech.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/tedo4.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel5" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel5" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1"style="border-radius: 30px 30px 30px 30px;" href="https://www.instagram.com/p/Cr2koiYBJGN/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Congratulations!! 👏🏻💯</h5>
                        
                           <small>

                            <br><b> Sobat Prima! berikut ini adalah.......
                            </br></b>
                            <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal5" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                </small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal5" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="mamak" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/speech.jpeg" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="4000">
                                                  <img src="img/tedo4.jpeg" class="d-block w-100" alt="...">
                                                </div>
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">Congratulations!! 👏🏻💯</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b> Sobat Prima! berikut ini adalah Athaillah Raihan S, siswa SMK Telkom Bandung yang berhasil meraih juara 2 Speech Contest dalam English Festival Widyatama 2023 se-Jawa Barat. Selamat atas pencapaian luar biasanya dan Terima kasih atas prestasinya, kami bangga!   </b><br>
                                                <small><p align="center">
                                                  <br><br>
                                                
                                
                                                  <p align="center">#siswaberprestasi #bearealdigitaltalent #smktelkombandung #smktelbdg #telkomschools
                                                    #smkno1bandung #smkhebatsmkbisa #bearealdigitaltalent
                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/Cr2koiYBJGN/"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel6" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/silat1.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/silat2.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/tedo4.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel6" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel6" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CqDgG9GBfw4/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Congratulations!! 👏🏻💯</h5>
                            <small>

                                <br><b>Sobat Prima! berikut ini siswa-siswi...... 
                                </b></br>
                                <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal6" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>


                                        </small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal6" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="mamak" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/silat1.jpeg" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="4000">
                                                  <img src="img/silat2.jpg" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="4000">
                                                  <img src="img/tedo4.jpeg" class="d-block w-100" alt="...">
                                                </div>
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">Congratulations!! 👏🏻💯</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Sobat Prima! berikut ini siswa-siswi SMK Telkom Bandung yang berhasil meraih juara 1, 2, dan 3 Lomba Pencak Silat yang di gelar oleh IPSI Kota Cimahi.
                                                  Selamat atas pencapaian luar biasanya dan Terima kasih atas prestasinya, kami bangga!  </b><br>
                                                <small><p align="center">
                                                  <br>
                                                
                                
                                                  <p align="center">#siswaberprestasi #bearealdigitaltalent #smktelkombandung #smktelbdg #telkomschools
                                                    #smkno1bandung #smkhebatsmkbisa #bearealdigitaltalent
                                                    
                                                    <br><br>© Studio Skillas
                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CqDgG9GBfw4/"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel7" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/baris.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/baris1.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/mosi.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel7" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel7" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CpfQh5KBSjA/?img_index=1"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Congratulations!!👏🏻💯</h5>
                            <small><br><b>Sobat Prima! berikut ini siswa-siswi....
                            </b></br>
                            <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal7" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                
                                
                                   </small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal7" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/baris.jpg" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="4000">
                                                  <img src="img/baris1.jpg" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="4000">
                                                  <img src="img/mosi.jpg" class="d-block w-100" alt="...">
                                                </div>
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">Congratulations!! 👏🏻💯</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Sobat Prima! berikut ini siswa-siswi SMK Telkom Bandung yang berhasil meraih juara 3 Bina Lomba Baris-berbaris yang di gelar oleh MIKO Berbasis 2.0. Selamat atas pencapaian luar biasanya dan Terima kasih atas prestasinya, kami bangga! </b><br>
                                                <small><p align="center">
                                                  <br>
                                                
                                
                                                  <p align="center">#siswaberprestasi #bearealdigitaltalent #smktelkombandung #smktelbdg #telkomschools
                                                    #smkno1bandung #smkhebatsmkbisa #bearealdigitaltalent
                                                    
                                                    
                                                    
                                                    <br><br>© Studio Skillas
                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CpfQh5KBSjA/?img_index=1"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel8" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/basket1.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/basket2.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/basket3.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/basket4.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/mosi.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel8" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel8" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CpMW8zFhuEQ/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Congratulations!!👏🏻💯</h5>
                            <small><br><b>SobPrim! Gimana hari ini?mudah.......</b></br>
                              
                                
                               <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal8" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                   </small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal8" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/basket1.jpeg" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="4000">
                                                  <img src="img/basket2.jpeg" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="4000">
                                                  <img src="img/basket3.jpeg" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="4000">
                                                  <img src="img/basket4.jpeg" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="4000">
                                                  <img src="img/mosi.jpg" class="d-block w-100" alt="...">
                                                </div>
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">Congratulations!! 👏🏻💯</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>SobPrim! Gimana hari ini?mudah-mudahan sehat ya. Kali ini siswa - siswi SMK Telkom Bandung berulah lagi nih 🫣

                                                  Waah kenapa tuh? Eits jangan salah sangka dulu ya SobPrim... ternyata siswa - siswi SMK Telkom Bandung berulah karena memenangkan perlombaan lho.
                                                  
                                                  Penasaran kann perlombaan apa sii?
                                                  Yuu langsung kepoin 😆
                                                  
                                                  SobPrim, Semangat terus yaa untuk mencetak rekor tertinggi 😆  </b></br>
                                                 </b><br>
                                                <small>
                                                  
                                                  <br>
                                                
                                
                                                  <p align="center">
                                                    @yptelkom
                                                    @telkom_schools
                                                    @rosy.telkom
                                                    @humas_jabar
                                                    @bdg.disdik
                                                    @pustekkom_kemdikbud
                                                    @ditjen.gtk.kemdikbud
                                                    @pemprovjabar
                                                    @kemdikbud.ri
                                                    
                                                    #smktelkom
                                                    #smktelkombandung
                                                    #smkbisa
                                                    #smkkeren
                                                    #smksangjuara
                                                    #bearealdigitaltalent
                                                    #SMKBisa
                                                    #SMKHebat
                                                    #SMKBisaHebat
                                                    #ppdbsmktelkombandung
                                                    #ppdbsmktelkombandung2023
                                                    #tahunbaru2023
                                                    
                                                    ©StudioSkillas
                                                    
                                                    
                                                    
                                                    <br><br>© Studio Skillas
                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CpMW8zFhuEQ/"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel9" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/pbb.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/pbb1.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/pbb2.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/pbb3.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/pbb4.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/pbb5.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/mosi.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel9" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel9" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CpJ3wLAB2We/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Congratulations!!👏🏻💯</h5>
                            <small><br><b>Sobat Prima! berikut ini siswa-siswi.... 
                                </b></br>
                               
                               <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal9" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                
                                   </small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal9" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/pbb.jpeg" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="4000">
                                                  <img src="img/pbb1.jpeg" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="4000">
                                                  <img src="img/pbb2.jpeg" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="4000">
                                                  <img src="img/pbb3.jpeg" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="4000">
                                                  <img src="img/pbb4.jpeg" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="4000">
                                                  <img src="img/pbb5.jpeg" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="4000">
                                                  <img src="img/mosi.jpg" class="d-block w-100" alt="...">
                                                </div>
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">Congratulations!! 👏🏻💯</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Sobat Prima! berikut ini siswa-siswi.... SMK Telkom Bandung yang berhasil meraih juara 3 madya lomba PBB yang di gelar oleh SMK Pasundan 1 Banjaran. Selamat atas pencapaian luar biasanya dan Terima kasih atas prestasinya, kami bangga! </b></br>
                                                 </b><br>
                                                <small>
                                                  
                                                  <br>
                                                
                                
                                                  <p align="center">
                                                    #siswaberprestasi #bearealdigitaltalent #smktelkombandung #smktelbdg #telkomschools
#smkno1bandung #smkhebatsmkbisa #bearealdigitaltalent

© Studio Skillas
                                                    
                                                    
                                                    
                                                    
                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CpJ3wLAB2We/"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel10" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/kate2.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/kate3.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/kate4.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/kate5.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/mosi.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel10" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel10" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CpJhKzyB6rQ/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Congratulations!!👏🏻💯</h5>
                            <small><br><b>Sobat Prima! berikut ini siswa-siswi..... 
                                </b></br>
                               
                                <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal10" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                
                                   </small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal10" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/kate2.jpeg" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="4000">
                                                  <img src="img/kate3.jpeg" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="4000">
                                                  <img src="img/kate4.jpeg" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="4000">
                                                  <img src="img/kate5.jpeg" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="4000">
                                                  <img src="img/mosi.jpg" class="d-block w-100" alt="...">
                                                </div>
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">Congratulations!! 👏🏻💯</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Sobat Prima! berikut ini siswa-siswi SMK Telkom Bandung yang berhasil meraih 12 medali pada Karate Championship 2023 yang di gelar oleh SMK Sangkuriang 1 Cimahi. Selamat atas pencapaian luar biasanya dan Terima kasih atas prestasinya, kami bangga! </b></br>
                                                 </b><br>
                                                <small>
                                                  
                                                  <br>
                                                
                                
                                                  <p align="center">
                                                    #siswaberprestasi #bearealdigitaltalent #smktelkombandung #smktelbdg #telkomschools
#smkno1bandung #smkhebatsmkbisa #bearealdigitaltalent

© Studio Skillas

                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CpJhKzyB6rQ/"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel11" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/muka.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/mosi.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel11" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel11" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-cent    er pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/ClsX06QSR4t/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">𝙲𝚘𝚗𝚐𝚛𝚊𝚝𝚞𝚕𝚊𝚝𝚒𝚘𝚗𝚜!!👏💯</h5>
                            <small><br><b>Sobprim! Siswa-Siswi..... 
                                 </b></br>
                               
                                
                                <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal11" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                   </small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal11" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/muka.jpeg" class="d-block w-100" alt="...">
                                                </div>  
                                                <div class="carousel-item" data-bs-interval="4000">
                                                  <img src="img/mosi.jpg" class="d-block w-100" alt="...">
                                                </div>
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">𝙲𝚘𝚗𝚐𝚛𝚊𝚝𝚞𝚕𝚊𝚝𝚒𝚘𝚗𝚜!!👏💯</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Sobprim! Siswa-Siswi SMK Telkom Bandung ngeborong 𝐩𝐫𝐞𝐬𝐭𝐚𝐬𝐢 lagi 𝘯𝘪𝘩!! Kali ini mereka berhasil men𝐣𝐮𝐚𝐫𝐚i perlombaan yang digelar oleh 𝘽𝙚𝙧𝙚𝙪𝙢 𝘽𝙤𝙙𝙖𝙨 𝙀𝙫𝙚𝙣𝙩. Selamat atas pencapaian luar biasanya dan Terima kasih atas prestasinya, kami bangga!🤩 </b></br>
                                                 </b><br>
                                                <small>
                                                  
                                                  <br>
                                                
                                
                                                  <p align="center">
                                                    #siswaberprestasi #bearealdigitaltalent #smktelkombandung #smktelbdg #telkomschools
#smkno1bandung #smkhebatsmkbisa #bearealdigitaltalent

© Studio Skillas

                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/ClsX06QSR4t/"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel12" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/toiec.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/toiec1.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/toiec2.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item " data-bs-interval="2000">
                                    <img src="img/toiec3.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/mosi.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel12" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel12" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/Cliw7vYyKmM/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Congratulations!!👏💯
                            </h5>
                            <small><br><b>Sobprim! Siswa-Siswi... 
                                 </b></br>
                               
                                
                                <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal12" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                   </small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal12" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/toiec.jpg" class="d-block w-100" alt="...">
                                                </div>  
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/toiec1.jpg" class="d-block w-100" alt="...">
                                                </div>  
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/toiec2.jpg" class="d-block w-100" alt="...">
                                                </div>  
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/toiec3.jpg" class="d-block w-100" alt="...">
                                                </div>  
                                                <div class="carousel-item" data-bs-interval="4000">
                                                  <img src="img/mosi.jpg" class="d-block w-100" alt="...">
                                                </div>
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">Congratulations!!👏💯</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Sobprim! Siswa-Siswi SMK Telkom Bandung ngeborong 𝐩𝐫𝐞𝐬𝐭𝐚𝐬𝐢 lagi 𝘯𝘪𝘩!! Kali ini mereka berhasil men𝐣𝐮𝐚𝐫𝐚i perlombaan yang digelar di 𝐀𝐄𝐂𝐒 𝐔𝐏𝐈, 𝐔𝐍𝐈𝐍𝐔𝐒, 𝐅𝐈𝐁 𝐔𝐍𝐏𝐀𝐃, dan mendapat 𝐬𝐤𝐨𝐫 𝐭𝐞𝐫𝐭𝐢𝐧𝐠𝐠𝐢 dalam 𝙏𝙊𝙀𝙄𝘾 di 𝙄𝙣𝙩𝙚𝙧𝙣𝙖𝙩𝙞𝙤𝙣𝙖𝙡 𝙏𝙚𝙨𝙩 𝘾𝙚𝙣𝙩𝙚𝙧. Selamat atas pencapaian luar biasanya dan Terima kasih atas prestasinya, kami bangga! </b></br>
                                                 </b><br>
                                                <small>
                                                  
                                                  <br>
                                                
                                
                                                  <p align="center">
                                                    #siswaberprestasi #bearealdigitaltalent #smktelkombandung #smktelbdg #telkomschools
#smkno1bandung #smkhebatsmkbisa #bearealdigitaltalent

© Studio Skillas

                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/Cliw7vYyKmM/"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel13" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/tedo5.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/tedo6.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/tedo7.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/tedo8.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/mosi.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel13" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel13" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/ClSW1gUhSFc/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Congratulations!!👏💯
                            </h5>
                            <small><br><b>Sobat Prima! Berikut ini siswa-siswi.... 
                            </b></br>
                                
                                <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal13" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                   </small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal13" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/tedo5.jpeg" class="d-block w-100" alt="...">
                                                </div>  
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/tedo6.jpeg" class="d-block w-100" alt="...">
                                                </div>  
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/tedo7.jpeg" class="d-block w-100" alt="...">
                                                </div>  
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/tedo8.jpeg" class="d-block w-100" alt="...">
                                                </div>  
                                                <div class="carousel-item" data-bs-interval="4000">
                                                  <img src="img/mosi.jpg" class="d-block w-100" alt="...">
                                                </div>
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">Congratulations!!👏💯</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Sobat Prima! Berikut ini siswa-siswi SMK Telkom Bandung yang bernama Ryzqa dari XI MM 1, Gafa dari XI MM 3, Hanif dan Dinan dari XI MM 4, Sekar dan Hasbi dari XI TKJ 2, Ghinan dari XI TKJ 3, Indah dan Syafiq dari XI TKJ 4, Yudha dari XI TJAT 1, dan Zikri dari XI TJAT 2 berhasil menjadi Juara dalam perlombaan yang digelar Kadisjas TNI AD. Selamat atas pencapaian luar biasanya dan Terima kasih atas prestasinya, kami bangga!
                                                   </b></br>
                                                 </b><br>
                                                <small>
                                                  
                                                  <br>
                                                
                                
                                                  <p align="center">
                                                    #siswaberprestasi #bearealdigitaltalent #smktelkombandung #smktelbdg #telkomschools
#smkno1bandung #smkhebatsmkbisa #bearealdigitaltalent

© Studio Skillas

                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/ClSW1gUhSFc/"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel14" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/igrec.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/igrec1.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/igrec2.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/mosi.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel14" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel14" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-cent    er pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/Ck3B2IABRB4/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Congratulations!!👏💯
                            </h5>
                            <small><br><b>Sobat Prima! berikut ini siswa-siswi.... 
                            </b></br>
                                
                                <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal14" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                   </small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal14" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/igrec.jpeg" class="d-block w-100" alt="...">
                                                </div>  
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/igrec1.jpeg" class="d-block w-100" alt="...">
                                                </div>  
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/igrec2.jpeg" class="d-block w-100" alt="...">
                                                </div>   
                                                <div class="carousel-item" data-bs-interval="4000">
                                                  <img src="img/mosi.jpg" class="d-block w-100" alt="...">
                                                </div>
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">Congratulations!!👏💯</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Sobat Prima! berikut ini siswa-siswi SMK Telkom Bandung berhasil menjadi Juara dalam Event IGREEC, La Vesta, dan AHM Best Student. Selamat atas pencapaian luar biasanya dan Terima kasih atas prestasinya, kami bangga!
                                                   </b></br>
                                                 </b><br>
                                                <small>
                                                  
                                                  <br>
                                                
                                
                                                  <p align="center">
                                                    #siswaberprestasi #bearealdigitaltalent #smktelkombandung #smktelbdg #telkomschools
#smkno1bandung #smkhebatsmkbisa #bearealdigitaltalent

© Studio Skillas

                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/Ck3B2IABRB4/"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel15" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/minton.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/mosi.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel15" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel15" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-cent    er pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CksC3OEh0qD/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Congratulations!!👏💯
                            </h5>
                            <small><br><b>Sobat Prima! berikut ini siswa SMK..... 
                                 </b></br>
                                 
                                <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal15" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                
                                   </small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal15" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/minton.jpeg" class="d-block w-100" alt="...">
                                                </div>  
                                                <div class="carousel-item" data-bs-interval="4000">
                                                  <img src="img/mosi.jpg" class="d-block w-100" alt="...">
                                                </div>
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">Congratulations!!👏💯</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Sobat Prima! berikut ini siswa SMK Telkom Bandung berhasil menjadi Juara 3 dalam Lomba Badminton. Selamat atas pencapaian luar biasanya dan Terima kasih atas prestasinya, kami bangga!
                                                   </b></br>
                                                   <br><br><b>Selamat Kepada sang juara🥉
                                                    @__ryanmirza__
                                                    @arillsyakib
                                                 </b><br>
                                                <small>
                                                  
                                                  <br>
                                                
                                
                                                  <p align="center">
                                                    #siswaberprestasi #bearealdigitaltalent #smktelkombandung #smktelbdg #telkomschools
#smkno1bandung #smkhebatsmkbisa #bearealdigitaltalent

© Studio Skillas

                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CksC3OEh0qD/"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel16" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/ton.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/ton1.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/mosi.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel16" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel16" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-cent    er pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CkfZwpHSNd-/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Congratulations!!👏💯</h5>
                            <small><br><b>Sobat Prima! berikut ini siswa-siswi.... 
                                 </b></br>
                                
                                 <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal16" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                <br>   </small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal16" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/ton.jpg" class="d-block w-100" alt="...">
                                                </div>  
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/ton1.jpg" class="d-block w-100" alt="...">
                                                </div>  
                                                <div class="carousel-item" data-bs-interval="4000">
                                                  <img src="img/mosi.jpg" class="d-block w-100" alt="...">
                                                </div>
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">Congratulations!!👏💯</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Sobat Prima! berikut ini siswa-siswi.... SMK Telkom Bandung berhasil menjadi Juara dalam Event Ideathon 2022. Selamat atas pencapaian luar biasanya dan Terima kasih atas prestasinya, kami bangga!
                                                   </b></br>
                                                <small>
                                                  
                                                  <br>
                                                
                                
                                                  <p align="center">
                                                    #siswaberprestasi #bearealdigitaltalent #smktelkombandung #smktelbdg #telkomschools
#smkno1bandung #smkhebatsmkbisa #bearealdigitaltalent

© Studio Skillas

                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CkfZwpHSNd-/"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel17" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/lil.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/mosi1.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel17" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel17" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-cent    er pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/Cio81Xvhc5B/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Congratulations!!👏💯</h5>
                            <small><br><b>Sobat Prima! Kahlil Ahmad Al Fatih.... 
                                
                                 </b></br>
                                 <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal17" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                
                                   </small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal17" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/lil.jpeg" class="d-block w-100" alt="...">
                                                </div>   
                                                <div class="carousel-item" data-bs-interval="4000">
                                                  <img src="img/mosi1.jpeg" class="d-block w-100" alt="...">
                                                </div>
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">Congratulations!!👏💯</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Sobat Prima! Kahlil Ahmad Al Fatih siswa Kelas XI MM 4 Berhasil mendapat Juara 2 Kejuaraan ACSS Tahun 2022 Kategori Newscasting dibulan September ini. Wahh keren banget selamat yaa ✨
                                                  @aecs_esaupi
                                                  
                                                  𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                                  Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                                  
                                                  𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                                  Sekolahnya Sang Juara
                                                   </b></br>
                                                <small>
                                                  
                                                  <br>
                                                
                                
                                                  <p align="center">
                                                    **********<br>#smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2023 #reachyourdream

                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/Cio81Xvhc5B/"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel18" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/ryz.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                </div>

                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-cent    er pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/ChThN2WBnKu/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">𝐉𝐮𝐚𝐫𝐚 𝟏 𝐏𝐨𝐨𝐦𝐬𝐚𝐞 𝐏𝐮𝐭𝐫𝐢
                            </h5>
                            <small><br><b>Sobat Prima! Ryzqa Buana Putri.... 
                                
                                   </b></br>

                                <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal18" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                
                                   <br></small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal18" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/ryz.jpeg" class="d-block w-100" alt="...">
                                                </div>   
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">𝐉𝐮𝐚𝐫𝐚 𝟏 𝐏𝐨𝐨𝐦𝐬𝐚𝐞 𝐏𝐮𝐭𝐫𝐢</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Sobat Prima! Ryzqa Buana Putri siswi Kelas XI MM 1 Berhasil mendapat Juara 1 Mahardika Kategori Poomsae Putri Tingkat Nasional yang diselenggarakan oleh Pemprov DKI Jakarta pada tanggal 26 Juni 2022.
                                                  Wahh keren banget selamat yaa ✨
                                                  
                                                  𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                                  Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                                  
                                                  𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                                  Sekolahnya Sang Juara
                                                   </b></br>
                                                <small>
                                                  
                                                  <br>
                                                
                                
                                                  <p align="center">
                                                    **********<br> #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022 #reachyourdream

                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/ChThN2WBnKu/"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel19" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/nr.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/nr1.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel19" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel19" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-cent    er pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/ChBTLFIBnMX/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">𝐀𝐇𝐌 𝐁𝐞𝐬𝐭 𝐒𝐭𝐮𝐝𝐞𝐧𝐭
                            </h5>
                            <small><br><b>Selamat kepada Kak Nurul Azizah.... 
                                
                                   </b></br>
                                  
                                <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal19" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                
                                  <br> </small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal19" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/nr.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/nr1.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">𝐀𝐇𝐌 𝐁𝐞𝐬𝐭 𝐒𝐭𝐮𝐝𝐞𝐧𝐭</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Selamat kepada Kak Nurul Azizah Kumara Kelas XII TKJ 3 menjadi Juara 1 Astra Honda Motor Best Student 2022 Tingkat Regional Jawa Barat

                                                  Keren banget ya Sobat Prima! Kak Nurul ini akan mewakili Regional Jawa Barat untuk bersaing dengan peserta lain dari seluruh Indonesia di Tingkat Nasional, kita doakan yuk semoga Kak Nurul menjadi yang terbaik di Tingkat Nasional, aamiin
                                                  
                                                  Terima kasih Kak Nurul atas prestasinya, kami bangga!
                                                  
                                                  𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                                  Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                                  
                                                  𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                                  Sekolahnya Sang Juara
                                                   </b></br>
                                                <small>
                                                  
                                                  <br>
                                                
                                
                                                  <p align="center">
                                                    **********<br> #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022 #reachyourdream

                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/ChBTLFIBnMX/"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel20" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/ML.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                </div>

                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-cent    er pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CgyWoeNBGZC/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">𝐉𝐮𝐚𝐫𝐚 𝟐 𝐋𝐢𝐠𝐚𝐦𝐞𝐧 𝐌𝐨𝐛𝐢𝐥𝐞 𝐋𝐞𝐠𝐞𝐧𝐝𝐬

                            </h5>
                            <small><br><b>Sobat Prima! Tim e-sport Sunborn....
                                
                                  </b></br>
                                 </b></br>
                              
                                 <<a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal20" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                
                                   </small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal20" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/ml.jpeg" class="d-block w-100" alt="...">
                                                </div>   
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">𝐉𝐮𝐚𝐫𝐚 𝟐 𝐋𝐢𝐠𝐚𝐦𝐞𝐧 𝐌𝐨𝐛𝐢𝐥𝐞 𝐋𝐞𝐠𝐞𝐧𝐝𝐬</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Sobat Prima! Tim e-sport Sunborn SMK Telkom Bandung, yang beranggotakan:
                                                  TANOVA REVAN ERGUSTIAN (XII MM4)
                                                  MUHAMMAD SYEHABUDIN (XII TJA2)
                                                  MUHAMMAD AZRIEL HIDAYAT (XII TJA1)
                                                  MOCHAMAD IHSAN (XII TKJ1)
                                                  MIKA HAKKINEN (XII TKJ1)
                                                  PIERRE IBRAHIMOVIC (XII TKJ1)
                                                  FADHLAN NARJU ZIDAN (XII TKJ3)
                                                  Berhasil mendapat Juara 2 Ligamen Mobile Legends Tingkat Bandung Raya yang diselenggarakan oleh Prodi Manajemen UPI pada tanggal 30 Juli 2022.
                                                  Wahh, selamat yaa Tim Sunborn ✨
                                                  
                                                  𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                                  Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                                  
                                                  𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                                  Sekolahnya Sang Juara
                                                   </b></br>
                                                <small>
                                                  
                                                  <br>
                                                
                                
                                                  <p align="center">
                                                    **********<br>#smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022 #reachyourdream

                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CgyWoeNBGZC/"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel21" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/video.jpeg" class="d-block w-100" width="400" height="375">
                                  </div>
                                </div>
                                
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-cent    er pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/Cf5hDMkhl_W/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">𝐊𝐚𝐫𝐲𝐚 𝐏𝐫𝐞𝐬𝐭𝐚𝐬𝐢 𝐀𝐥𝐮𝐦𝐧𝐢

                            </h5>
                            <small><br><br><b>Sobat Prima! Muhammad Iqbal.... 
                                
                                 </b></br>
                           
                                 <p><br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal21" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>
                                 </p>
                                
                                   </small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal21" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/video.jpeg" class="d-block w-100" alt="...">
                                                </div>   
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">𝐊𝐚𝐫𝐲𝐚 𝐏𝐫𝐞𝐬𝐭𝐚𝐬𝐢 𝐀𝐥𝐮𝐦𝐧𝐢</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Sobat Prima! Muhammad Iqbal Rasyid alumni XII TKJ 3 angkatan 7, berhasil menjadi juara 3 dalam lomba Desain Web di SKOMDA ACT, wah selamat ya kak Iqbal 👏🏻✨

                                                  𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                                  Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                                  
                                                  𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                                  Sekolahnya Sang Juara
                                                   </b></br>
                                                <small>
                                                  
                                                  <br>
                                                
                                
                                                  <p align="center">
                                                    **********<br> #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022 #reachyourdream

                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/Cf5hDMkhl_W/"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel22" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/upi.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/upi1.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/upi2.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel22" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel22" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-cent    er pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CcCn7rQBEe-/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">𝐒𝐞𝐥𝐚𝐦𝐚𝐭 𝐝𝐚𝐧 𝐒𝐮𝐤𝐬𝐞𝐬

                            </h5>
                            <small><br><br><b>Hi sobat prima!
                                Kabar gembira...  
                                
                                 </b></br>
                                 
                                 
                                <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal22" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                
                                   </small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal22" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/upi.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/upi1.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/upi2.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">𝐒𝐞𝐥𝐚𝐦𝐚𝐭 𝐝𝐚𝐧 𝐒𝐮𝐤𝐬𝐞𝐬</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Hi sobat prima!
                                                  Kabar gembira dateng lagi nih...
                                                  Siswi SMK Telkom Bandung, Vania
                                                  Rahma Diyanti XII MM 1 berhasil meraih Juara 1 dalam Lomba Desain Poster pada kegiatan Digital SIK UPI.
                                                  Wahhh selamat yaa ✨
                                                  
                                                  𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                                  Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                                  
                                                  𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                                  Sekolahnya Sang Juara
                                                   </b></br>
                                                <small>
                                                  
                                                  <br>
                                                
                                
                                                  <p align="center">
                                                    **********<br> #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022

                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CcCn7rQBEe-/"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel23" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/tedo9.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/tedo10.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/tedo11.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel23" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel23" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-cent    er pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CbcYC0EBkMt/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">𝐒𝐄𝐋𝐀𝐌𝐀𝐓 𝐃𝐀𝐍 𝐒𝐔𝐊𝐒𝐄𝐒

                            </h5>
                            <small><br><br><b>Halo Sobat Prima! 👋
                                Kabar gembira..... 
                                
                                 </b></br>
                                 
                                
                                 <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal23" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                   </small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal23" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/tedo9.jpeg" class="d-block w-100" alt="...">
                                                </div>   
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/tedo10.jpeg" class="d-block w-100" alt="...">
                                                </div>   
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/tedo11.jpeg" class="d-block w-100" alt="...">
                                                </div>   
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">𝐒𝐄𝐋𝐀𝐌𝐀𝐓 𝐃𝐀𝐍 𝐒𝐔𝐊𝐒𝐄𝐒</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Halo Sobat Prima! 👋
                                                  Kabar gembira datang dari Team Taekwondo SMK Telkom Bandung, telah berhasil meraih Penghargaan Medali Emas & Perak pada kegiatan Kejuaraan Taekwondo ITN Open V 2022 Se-Jawa Barat.
                                                  Selamat atas penghargaannya ✨
                                                  @taekwondo.smktelbdg
                                                  
                                                  𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                                  Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                                  
                                                  𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                                  Sekolahnya Sang Juara
                                                   </b></br>
                                                <small>
                                                  
                                                  <br>
                                                
                                
                                                  <p align="center">
                                                    **********<br> #siswaberprestasi #bearealdigitaltalent #smktelkombandung #smktelbdg #telkomschools
                                                    #smkno1bandung #smkhebatsmkbisa © Studio Skillas</br>
                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CbcYC0EBkMt/"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel24" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/tedo12.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CZd_p31BTe3/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">𝐒𝐄𝐋𝐀𝐌𝐀𝐓 𝐃𝐀𝐍 𝐒𝐔𝐊𝐒𝐄𝐒

                            </h5>
                            <small><br><b>Sobat Prima! Kabar gembira.... 
                                
                                  </b></br>
                                
                                  
                            <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal24" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                
                                   </small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal24" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/tedo12.jpeg" class="d-block w-100" alt="...">
                                                </div>   
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">𝐒𝐄𝐋𝐀𝐌𝐀𝐓 𝐃𝐀𝐍 𝐒𝐔𝐊𝐒𝐄𝐒</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Sobat Prima! Kabar gembira datang dari Putri-putri berprestasi SMK Telkom Bandung dengan meraih Penghargaan sebagai 𝐉𝐮𝐚𝐫𝐚 𝟏 𝐏𝐨𝐨𝐦𝐬𝐚𝐞 𝐈𝐧𝐝𝐨𝐧𝐞𝐬𝐢𝐚 𝐄𝐱𝐩𝐨 𝐁𝐚𝐭𝐭𝐥𝐞 𝟐 𝐭𝐚𝐡𝐮𝐧 𝟐𝟎𝟐𝟏 Tingkat Nasional, yang diselenggarakan pada tanggal 18-19 Desember 2021.
                                                  Selamat atas penghargaannya ✨
                                                  
                                                  𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                                  Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                                  
                                                  𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                                  Sekolahnya Sang Juara
                                                   </b></br>
                                                <small>
                                                  
                                                  <br>
                                                
                                
                                                  <p align="center">
                                                    **********<br> #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022
                                                        </br>
                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CZd_p31BTe3/"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel25" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/web.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/web1.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/web2.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel25" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel25" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-cent    er pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CYQ78oKB0W4/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">𝐒𝐄𝐋𝐀𝐌𝐀𝐓 𝐃𝐀𝐍 𝐒𝐔𝐊𝐒𝐄𝐒

                            </h5>
                            <small><br><b>Sobat Prima! 𝐓𝐞𝐚𝐦 𝐂𝐮𝐫𝐢𝐨𝐮𝐬..... 
                                
                                 </b></br>
                                 
                                
                               <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal25" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                   </small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal25" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/web.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/web1.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/web2.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">𝐒𝐄𝐋𝐀𝐌𝐀𝐓 𝐃𝐀𝐍 𝐒𝐔𝐊𝐒𝐄𝐒</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Sobat Prima! 𝐓𝐞𝐚𝐦 𝐂𝐮𝐫𝐢𝐨𝐮𝐬 SMK Telkom Bandung yang beranggotakan Humam Ibadilah Fahri (XII TKJ 3) dan Zidan Muhamad Daffa (XII TKJ 1) mendapatkan Penghargaan sebagai 𝐉𝐮𝐚𝐫𝐚 𝟐 Lomba Web Design Dinamik 16 Tingkat Nasional pada kegiatan "Innovation Technology for better Education", yang diselenggarakan oleh Universitas Pendidikan Indonesia.
                                                  Hebat kan, Ingin seperti kakak-kakak yang berprestasi ini? Yuk gabung di SMK Telkom Bandung "Sekolahnya Sang Juara". 😉
                                                  
                                                  𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                                  Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                                  
                                                  𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                                  Sekolahnya Sang Juara
                                                   </b></br>
                                                <small>
                                                  
                                                  <br>
                                                
                                
                                                  <p align="center">
                                                    **********<br> #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022</br>
                                                  </br>
                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CYQ78oKB0W4/"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel26" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/uno.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/uno1.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel26" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel26" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-cent    er pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CWXeNaFsc-D/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">𝐒𝐄𝐋𝐀𝐌𝐀𝐓 𝐃𝐀𝐍 𝐒𝐔𝐊𝐒𝐄𝐒

                            </h5>
                            <small><br><b>Sobat Prima! Kabar gembira datang..... 
                                
                                  </b></br>
                                
                                
                                  <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal26" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                   </small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal26" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/uno.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/uno1.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">𝐒𝐄𝐋𝐀𝐌𝐀𝐓 𝐃𝐀𝐍 𝐒𝐔𝐊𝐒𝐄𝐒</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Sobat Prima! Kabar gembira datang lagi dari siswa berprestasi SMK Telkom Bandung, kali ini Humam Ibadilan Fakhri dan Refaya Jihad Putra Mudoffar dari XII TKJ 3 mendapatkan Penghargaan sebagai Juara 1 pada bidang Arduino Project Tingkat Nasional yang diselenggarakan oleh Robotics Competition 2021, UIN Sunan Gunung Djati Bandung.
                                                  Selamat atas penghargaannya ✨
                                                  
                                                  𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                                  Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                                  
                                                  𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                                  Sekolahnya Sang Juara
                                                   </b></br>
                                                <small>
                                                  
                                                  <br>
                                                
                                
                                                  <p align="center">
                                                    **********<br> #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022</br>
                                                  </br>
                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CWXeNaFsc-D/"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel27" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/web3.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/web4.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/web5.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel27" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel27" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-cent    er pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CV2CLRgsbec/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">𝐒𝐄𝐋𝐀𝐌𝐀𝐓 𝐃𝐀𝐍 𝐒𝐔𝐊𝐒𝐄𝐒

                            </h5>
                            <small><br><b>Sobat Prima! Zidan Muhamad Daffa.... 
                                
                                  </b></br>
                                 
                                  <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal27" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                
                                   </small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal27" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/web3.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/web4.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/web5.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">𝐒𝐄𝐋𝐀𝐌𝐀𝐓 𝐃𝐀𝐍 𝐒𝐔𝐊𝐒𝐄𝐒</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Sobat Prima! Zidan Muhamad Daffa, siswa Kelas XII SMK Telkom Bandung mendapatkan penghargaan sebagai Juara ke-1 Lomba Kategori Web Design Tingkat Nasional, dalam Kegiatan Infinity 2021 bu UKM Progress STIKOMBALI.
                                                  Selamat atas penghargaannya ✨
                                                  
                                                  𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                                  Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                                  
                                                  𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                                  Sekolahnya Sang Juara
                                                   </b></br>
                                                <small>
                                                  
                                                  <br>
                                                
                                
                                                  <p align="center">
                                                    **********<br> #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022</br>
                                                  </br>
                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CV2CLRgsbec/"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel28" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/sma.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/sma1.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel28" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel28" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-cent    er pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CVe64PIhJvK"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">𝐒𝐄𝐋𝐀𝐌𝐀𝐓 𝐃𝐀𝐍 𝐒𝐔𝐊𝐒𝐄𝐒

                            </h5>
                            <small><br><br><b>Sobat Prima! Dalam rangka....
                              
                            
                                
                                  </b></br>
                                 
                                
                                  <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal28" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                   </small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal28" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/sma.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/sma1.jpg" class="d-block w-100" alt="...">
                                                </div>     
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">𝐒𝐄𝐋𝐀𝐌𝐀𝐓 𝐃𝐀𝐍 𝐒𝐔𝐊𝐒𝐄𝐒</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Sobat Prima! Dalam rangka kegiatan Sphatika Daarut Tauhid 2.0, Vania Rahma Diyanti siswi Kelas XII SMK Telkom Bandung mendapatkan penghargaan sebagai Juara ke-1 dan Juara Favorite dalam Lomba Poster.
                                                  Selamat atas penghargaannya ✨
                                                  
                                                  𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                                  Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                                  
                                                  𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                                  Sekolahnya Sang Juara
                                                   </b></br>
                                                <small>
                                                  
                                                  <br>
                                                
                                
                                                  <p align="center">
                                                    **********<br> #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022</br>
                                                  </br>
                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CVe64PIhJvK"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel29" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/speech1.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-cent    er pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CU6sLVXhjNd/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">𝐒𝐄𝐋𝐀𝐌𝐀𝐓 𝐃𝐀𝐍 𝐒𝐔𝐊𝐒𝐄𝐒

                            </h5>
                            <small><br><br><b>Sobat Prima! Dalam rangka..... 
                                
                                  </b></br>
                                 
                                  <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal29" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                
                                   </small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal29" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/speech1.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">𝐒𝐄𝐋𝐀𝐌𝐀𝐓 𝐃𝐀𝐍 𝐒𝐔𝐊𝐒𝐄𝐒</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Sobat Prima! Dalam rangka kegiatan Erlangga English Speech Contest 2021 (EESC), Kanaya Adystha Belva siswi Kelas X SMK Telkom Bandung mendapatkan penghargaan sebagai Juara ke-2.
                                                  Selamat atas penghargaannya ✨
                                                  
                                                  𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                                  Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                                  
                                                  𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                                  Sekolahnya Sang Juara
                                                   </b></br>
                                                <small>
                                                  
                                                  <br>
                                                
                                
                                                  <p align="center">
                                                    **********<br> #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022</br>
                                                  </br>
                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CU6sLVXhjNd/"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel30" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/web6.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/web7.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/web8.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel30" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel30" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-cent    er pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CSGKbvulg9V"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">𝐉𝐮𝐚𝐫𝐚 𝐁𝐚𝐬𝐢𝐜 𝐂𝐨𝐝𝐢𝐧𝐠 𝐌𝐢𝐬𝐬𝐢𝐨𝐧


                            </h5>
                            <small><br><br><b>Selamat kepada ananda....
                                
                                  </b></br>
                                 
                                
                                  <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal30" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                   </small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal30" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/web6.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/web7.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/web8.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">𝐉𝐮𝐚𝐫𝐚 𝐁𝐚𝐬𝐢𝐜 𝐂𝐨𝐝𝐢𝐧𝐠 𝐌𝐢𝐬𝐬𝐢𝐨𝐧</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Selamat kepada ananda Humam Ibadillah Fakhri kelas XI TKJ 1 atas prestasinya meraih Juara 2 Basic Coding Mission Jabar Robotic Expo and Competition 2021

                                                  Pandemi bukan penghalang untuk berprestasi. Terima kasih ananda Humam Ibadillah Fakhri atas prestasinya, kami bangga!
                                                  
                                                  𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                                  Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                                  
                                                  𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                                  Sekolahnya Sang Juara
                                                   </b></br>
                                                <small>
                                                  
                                                  <br>
                                                
                                
                                                  <p align="center">
                                                    **********<br> #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #ppdbonline2021 #ppdbjabar2021 #ppdbdki2021 #ppdbjateng2021 #pendidikan #merdekabelajar #sekolahdimanasajasama
                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CSGKbvulg9V"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel31" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/astra.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/astra1.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/web8.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel31" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel31" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-cent    er pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CRxrF3ehf5D"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">𝐒𝐢𝐬𝐰𝐚 𝐓𝐞𝐫𝐛𝐚𝐢𝐤 𝐓𝐢𝐧𝐠𝐤𝐚𝐭 𝐑𝐞𝐠𝐢𝐨𝐧𝐚𝐥 𝐉𝐚𝐰𝐚 𝐁𝐚𝐫𝐚𝐭


                            </h5>
                            <small><br><b>Selamat kepada Kak Sabna..... 
                              
                                
                                  </b></br>
                                 
                                  <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal31" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                
                                   </small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal31" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/astra.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/astra1.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/web8.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">𝐒𝐢𝐬𝐰𝐚 𝐓𝐞𝐫𝐛𝐚𝐢𝐤 𝐓𝐢𝐧𝐠𝐤𝐚𝐭 𝐑𝐞𝐠𝐢𝐨𝐧𝐚𝐥 𝐉𝐚𝐰𝐚 𝐁𝐚𝐫𝐚𝐭</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Selamat kepada Kak Sabna Nurul Hasanah Kelas XII MM 1 menjadi Juara 1 Astra Honda Motor Best Student 2021 Tingkat Regional Jawa Barat

                                                  Keren banget ya Sobat Prima! Kak Sabna ini akan mewakili Regional Jawa Barat untuk bersaing dengan peserta lain dari seluruh Indonesia di Tingkat Nasional, kita doakan yuk semoga Kak Sabna menjadi yang terbaik di Tingkat Nasional, aamiin
                                                  
                                                  Terima kasih Kak Sabna atas prestasinya, kami bangga!
                                                  
                                                  𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                                  Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                                  
                                                  𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                                  Sekolahnya Sang Juara
                                                   </b></br>
                                                <small>
                                                  
                                                  <br>
                                                
                                
                                                  <p align="center">
                                                    **********<br> #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #ppdbonline2021 #ppdbjabar2021 #ppdbdki2021 #ppdbjateng2021 #pendidikan #merdekabelajar #sekolahdimanasajasama
                                                  </br>
                                                  </br>
                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CRxrF3ehf5D"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel32" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/petra.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/petra1.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/web8.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel32" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel32" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-cent    er pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CRp0g_Fh8O_/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">𝐉𝐮𝐚𝐫𝐚 𝐍𝐚𝐬𝐢𝐨𝐧𝐚𝐥 𝐝𝐢 𝐌𝐚𝐬𝐚 𝐏𝐚𝐧𝐝𝐞𝐦𝐢

                            </h5>
                            <small><br><br><br><b>Selamat kepada ananda...
                                
                                  </b></br>
                                 
                                
                                  <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal32" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                   </small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal32" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/petra.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/petra1.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/web8.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">𝐉𝐮𝐚𝐫𝐚 𝐍𝐚𝐬𝐢𝐨𝐧𝐚𝐥 𝐝𝐢 𝐌𝐚𝐬𝐚 𝐏𝐚𝐧𝐝𝐞𝐦𝐢</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Selamat kepada ananda Muhammad Iqbal Rasyid dari kelas XII TKJ 3 sebagai Juara 1 Petra IoT Bootcamp & Prototyping Online Competition Tingkat Nasional

                                                  Terima kasih atas prestasi terbaik ananda, kami bangga!
                                                  
                                                  𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                                  Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                                  
                                                  𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                                  Sekolahnya Sang Juara
                                                   </b></br>
                                                <small>
                                                  
                                                  <br>
                                                
                                
                                                  <p align="center">
                                                    **********<br> #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #ppdbonline2021 #ppdbjabar2021 #ppdbdki2021 #ppdbjateng2021 #pendidikan #merdekabelajar #sekolahdimanasajasama #harianaknasional #harianaknasional2021
                                                  </br>
                                                  </br>
                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CRp0g_Fh8O_/"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel33" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/ml1.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/ml2.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/web8.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel33" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel33" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-cent    er pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CRIGCjrM1K5/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">𝐉𝐮𝐚𝐫𝐚 𝐍𝐚𝐬𝐢𝐨𝐧𝐚𝐥 𝐋𝐚𝐠𝐢 𝐃𝐢𝐦𝐚𝐬𝐚 𝐏𝐚𝐧𝐝𝐞𝐦𝐢


                            </h5>
                            <small><br><br><br><b>Selamat untuk Tim E-Sport.... 
                                
                                  </b></br>
                                 
                                  <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal33" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                
                                   </small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal33" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/ml1.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/ml2.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/web8.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">𝐉𝐮𝐚𝐫𝐚 𝐍𝐚𝐬𝐢𝐨𝐧𝐚𝐥 𝐝𝐢 𝐌𝐚𝐬𝐚 𝐏𝐚𝐧𝐝𝐞𝐦𝐢</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Selamat untuk Tim E-Sport SMK Telkom Bandung atas prestasinya sebagai Juara 3 E-Sports Mobile Legends pada event Statistics E-Sport Competition Tingkat Nasional yang diselenggarakan oleh Himpunan Mahasiswa Statistika Universitas Islam Bandung 2021.

                                                  Terima kasih, kami bangga!
                                                  
                                                  Yang pengen hobi games nya jadi prestasi, yukz gabung ke SMK Telkom Bandung!
                                                   </b></br>
                                                <small>
                                                  
                                                  <br>
                                                
                                
                                                  <p align="center">
                                                    **********<br> #smktelkom #smktelbdg #telkomschools #smkno1bandung #smkswataterbaik #smkhebatsmkbisa #merdekabelajar #ppdbonline2021 #ppdbjabar2021 #ppdbdki2021 #ppdbjateng2021 #pendidikan #sekolahdimanasajasama #esports #mobilelegends
                                                  </br>
                                                  </br>
                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CRIGCjrM1K5/"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel34" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/vokal.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/web8.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel34" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel34" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-cent    er pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CQpfOcgBOMO/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">𝗝𝘂𝗮𝗿𝗮 𝗹𝗮𝗴𝗶 ...


                            </h5>
                            <small><br><br><br><br><b>Selamat kepada Nazwa Kayla....
                                
                                  </b></br>
                                 
                                  <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal34" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                
                                   </small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal34" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/vokal.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/web8.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">𝗝𝘂𝗮𝗿𝗮 𝗹𝗮𝗴𝗶 ...</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Selamat kepada Nazwa Kayla Salsabila siswa SMK Telkom Bandung dari kelas XI MM 4, Juara 3 Vokal Solo FLS2N tingkat Wilayah. Terima kasih telah memberikan prestasi untuk SMK Telkom Bandung, Kami bangga!

                                                  𝗜𝗻𝗴𝗶𝗻 𝗺𝗲𝗻𝗷𝗮𝗱𝗶 𝗷𝘂𝗮𝗿𝗮 𝗷𝘂𝗴𝗮? 𝘆𝘂𝗸 𝗱𝗮𝗳𝘁𝗮𝗿 𝗱𝗶 𝗦𝗠𝗞 𝗧𝗲𝗹𝗸𝗼𝗺 𝗕𝗮𝗻𝗱𝘂𝗻𝗴 𝘀𝗲𝗸𝗮𝗿𝗮𝗻𝗴 𝗷𝘂𝗴𝗮, 𝗦𝗲𝗸𝗼𝗹𝗮𝗵𝗻𝘆𝗮 𝘀𝗮𝗻𝗴 𝗷𝘂𝗮𝗿𝗮
                                                   </b></br>
                                                <small>
                                                  
                                                  <br>
                                                
                                
                                                  <p align="center">
                                                    **********<br> #SMKTelkomBandung #SMKTelbdg #sekolahoffline2021 #PPDBJabar2021 #smkhebatsmkjuara #ppdb2021 #jalurreguler3 #5G #ppdbjabar2021 #semuaanakbisasekolah #semuaanakbisajuara #merdekabelajar #kepoppdbjabar #SekolahDimanaSajaSama #JabarTanggapCovid19 #ppdbdki2021 #ppdbjateng2021 #JabarJuara #pendidikan
                                                  </br>
                                                  </br>
                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CQpfOcgBOMO/"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel35" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/kosan.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/web8.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel35" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel35" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-cent    er pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CQYDm9TBuPV/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">𝗠𝗮𝗻𝘁𝗮𝗽, 𝗝𝘂𝗮𝗿𝗮 𝗟𝗮𝗴𝗶 𝗞𝗮𝗹𝗶 𝗶𝗻𝗶 𝗱𝗮𝗿𝗶 𝗣𝗲𝗻𝗱𝗲𝗸𝗮𝗿 𝗦𝗶𝗹𝗮𝘁 𝗣𝗮𝗱𝗲𝗽𝗼𝗸𝗮𝗻 𝗦𝗠𝗞 𝗧𝗲𝗹𝗸𝗼𝗺 𝗕𝗮𝗻𝗱𝘂𝗻𝗴


                            </h5>
                            <small><br><b>Selamat kepada Raka Naufal..... 
                                
                                  </b></br>
                                 
                                
                                  <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal35" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                   </small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal35" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/kosan.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/web8.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">𝗠𝗮𝗻𝘁𝗮𝗽, 𝗝𝘂𝗮𝗿𝗮 𝗟𝗮𝗴𝗶 𝗞𝗮𝗹𝗶 𝗶𝗻𝗶 𝗱𝗮𝗿𝗶 𝗣𝗲𝗻𝗱𝗲𝗸𝗮𝗿 𝗦𝗶𝗹𝗮𝘁 𝗣𝗮𝗱𝗲𝗽𝗼𝗸𝗮𝗻 𝗦𝗠𝗞 𝗧𝗲𝗹𝗸𝗼𝗺 𝗕𝗮𝗻𝗱𝘂𝗻𝗴</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Selamat kepada Raka Naufal Dzakwan siswa SMK Telkom Bandung dari kelas XI TKJ 1, Juara 1 Kompetisi Olahraga Siswa Nasional tingkat Wilayah. Terima kasih telah memberikan prestasi untuk SMK Telkom Bandung, Kami bangga!

                                                  𝗜𝗻𝗴𝗶𝗻 𝗺𝗲𝗻𝗷𝗮𝗱𝗶 𝗷𝘂𝗮𝗿𝗮 𝗷𝘂𝗴𝗮? 𝘆𝘂𝗸 𝗱𝗮𝗳𝘁𝗮𝗿 𝗱𝗶 𝗦𝗠𝗞 𝗧𝗲𝗹𝗸𝗼𝗺 𝗕𝗮𝗻𝗱𝘂𝗻𝗴 𝘀𝗲𝗸𝗮𝗿𝗮𝗻𝗴 𝗷𝘂𝗴𝗮, 𝗦𝗲𝗸𝗼𝗹𝗮𝗵𝗻𝘆𝗮 𝘀𝗮𝗻𝗴 𝗷𝘂𝗮𝗿𝗮
                                                   </b></br>
                                                <small>
                                                  
                                                  <br>
                                                
                                
                                                  <p align="center">
                                                    **********<br> #SMKTelkomBandung #SMKTelbdg #sekolahoffline2021 #PPDBJabar2021 #smkhebatsmkjuara #ppdb2021 #jalurreguler3 #5G #ppdbjabar2021 #semuaanakbisasekolah #semuaanakbisajuara #merdekabelajar #kepoppdbjabar #juara
                                                  </br>
                                                  </br>
                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CQYDm9TBuPV/"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel36" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/lukis.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/web8.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel36" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel36" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-cent    er pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CQLGblyhD_f/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">𝗝𝘂𝗮𝗿𝗮 𝘀𝘂𝗱𝗮𝗵 𝗺𝗲𝗻𝗷𝗮𝗱𝗶 𝘁𝗿𝗮𝗱𝗶𝘀𝗶 𝗱𝗶 𝘀𝗲𝗸𝗼𝗹𝗮𝗵 𝗶𝗻𝗶.


                            </h5>
                            <small><br><br><b>Selamat kepada Rizky Pratama Putra..... 
                                
                                  </b></br>
                                 
                                
                                  <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal36" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                   </small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal36" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/lukis.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/web8.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">𝗝𝘂𝗮𝗿𝗮 𝘀𝘂𝗱𝗮𝗵 𝗺𝗲𝗻𝗷𝗮𝗱𝗶 𝘁𝗿𝗮𝗱𝗶𝘀𝗶 𝗱𝗶 𝘀𝗲𝗸𝗼𝗹𝗮𝗵 𝗶𝗻𝗶.</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Selamat kepada Rizky Pratama Putra siswa SMK Telkom Bandung dari kelas X MM 3, Juara 2 Lomba Lukis FLS2N tingkat Wilayah. Terima kasih telah memberikan prestasi untuk SMK Telkom Bandung, Kami bangga!

                                                  𝗜𝗻𝗴𝗶𝗻 𝗺𝗲𝗻𝗷𝗮𝗱𝗶 𝗷𝘂𝗮𝗿𝗮 𝗷𝘂𝗴𝗮? 𝘆𝘂𝗸 𝗱𝗮𝗳𝘁𝗮𝗿 𝗱𝗶 𝗦𝗠𝗞 𝗧𝗲𝗹𝗸𝗼𝗺 𝗕𝗮𝗻𝗱𝘂𝗻𝗴 𝘀𝗲𝗸𝗮𝗿𝗮𝗻𝗴 𝗷𝘂𝗴𝗮, 𝗦𝗲𝗸𝗼𝗹𝗮𝗵𝗻𝘆𝗮 𝘀𝗮𝗻𝗴 𝗷𝘂𝗮𝗿𝗮
                                                   </b></br>
                                                <small>
                                                  
                                                  <br>
                                                
                                
                                                  <p align="center">
                                                    **********<br> #SMKTelkomBandung #SMKTelbdg #sekolahoffline2021 #PPDBJabar2021 #smkhebatsmkjuara #ppdb2021 #jalurreguler3 #5G #ppdbjabar2021 #semuaanakbisasekolah #semuaanakbisajuara #merdekabelajar #kepoppdbjabar #SekolahDimanaSajaSama #JabarTanggapCovid19 #ppdbdki2021 #ppdbjateng2021 #JabarJuara #pendidikan
                                                  </br>
                                                  </br>
                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CQLGblyhD_f/"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel37" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/web9.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/web10.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/web8.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel37" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel37" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-cent    er pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CPzL01ThXAW/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">𝗝𝘂𝗮𝗿𝗮 𝗡𝗮𝘀𝗶𝗼𝗻𝗮𝗹 𝗟𝗮𝗴𝗶 𝗱𝗼𝗻𝗴, 𝗺𝗲𝗺𝗮𝗻𝗴 𝘀𝘂𝗱𝗮𝗵 𝘁𝗿𝗮𝗱𝗶𝘀𝗶 𝗱𝗶 𝗦𝗠𝗞 𝗧𝗲𝗹𝗸𝗼𝗺 𝗕𝗮𝗻𝗱𝘂𝗻𝗴.


                            </h5>
                            <small><br><b>Selamat kepada Zidan M. Daffa.... 
                                
                                  </b></br>
                                 
                                  <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal37" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                
                                  <br></small>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal37" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/web9.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/web10.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/web8.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">𝗝𝘂𝗮𝗿𝗮 𝗡𝗮𝘀𝗶𝗼𝗻𝗮𝗹 𝗟𝗮𝗴𝗶 𝗱𝗼𝗻𝗴, 𝗺𝗲𝗺𝗮𝗻𝗴 𝘀𝘂𝗱𝗮𝗵 𝘁𝗿𝗮𝗱𝗶𝘀𝗶 𝗱𝗶 𝗦𝗠𝗞 𝗧𝗲𝗹𝗸𝗼𝗺 𝗕𝗮𝗻𝗱𝘂𝗻𝗴.</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Selamat kepada Zidan M. Daffa yang telah Juara 1 Tingkat Nasional dalam kompetisi design Website yang di selenggarakan HIMASI Universitas Jambi. Terima kasih telah berprestasi dan kami bangga!

                                                  𝗶𝗻𝗴𝗶𝗻 𝗯𝗲𝗿𝗽𝗿𝗲𝘀𝘁𝗮𝘀𝗶 𝗱𝗮𝗻 𝗷𝘂𝗮𝗿𝗮 𝘀𝗲𝗽𝗲𝗿𝘁𝗶 𝘇𝗶𝗱𝗮𝗻? 𝘆𝘂𝗸 𝗱𝗮𝗳𝘁𝗮𝗿 𝗦𝗠𝗞 𝗧𝗲𝗹𝗸𝗼𝗺 𝗕𝗮𝗻𝗱𝘂𝗻𝗴 𝗦𝗲𝗸𝗮𝗿𝗮𝗻𝗴 𝗝𝘂𝗴𝗮
                                                   </b></br>
                                                <small>
                                                  
                                                  <br>
                                                
                                
                                                  <p align="center">
                                                    **********<br> #smkno1bandung #sekolahoffline2021 #smkjuara #smkhebat #smkhebatsmkjuara #smkterbaik #smkbisa #smkswastaterbaik #ppdb2021 #siaptatapmuka #sekolahsiaptatapmuka #jalurreguler3
                                                  </br>
                                                  </br>
                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CPzL01ThXAW/"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel38" class="carousel slide" data-bs-ride="carousel" >
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/speech2.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/speech3.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/web8.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel38" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel38" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-cent    er pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CO9XLimhj6a/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Memang sudah menjadi tradisi DI SMK Telkom Bandung.


                            </h5>
                            <small><br><b>Selamat ! Aura Febrina Liando......... 
                                
                                  </b></br>
                                 
                                  <br><a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal38" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>

                                
                                  </small></br>
                        </div>
                    </div>
                </div>
                <div class="modal fade show" id="modal38" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
                  <div class="modal-wrapper">
                      <div class="modal-dialog modal-fullscreen">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                    <div class="card text-center" style="border-radius: 0 0 0 0;">
                                      <div class="card-body bg-light">
                                      <div class="row justify-content-center modal-detail " class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;"> 
                                          <div id="carousel7" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="4000">
                                                  <img src="img/speech2.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/speech3.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                                <div class="carousel-item " data-bs-interval="4000">
                                                  <img src="img/web8.jpg" class="d-block w-100" alt="...">
                                                </div>   
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-8 order-md-2">
                                                <div class="d-flex border-bottom"> 
                                                  <h1 class="flex-fill text-center py-2 " ><p align = "center">Memang sudah menjadi tradisi DI SMK Telkom Bandung.</p></h1>
                                                </div>
                                                <p class="card-text"><br><br><b>Selamat ! Aura Febrina Liando (@aurafl_ ) dari XI TKJ 2 menjadi juara kedua English Speech Contest di ajang Sakura Escofest 2021 yang diselenggarakan oleh English Community SMAN 1 Cikarang Utara.

                                                  Ingin berprestasi seperti ka Aura? yuk segera daftar ke SMK Telkom Bandung sekarang juga
                                                   </b></br>
                                                <small>
                                                  
                                                  <br>
                                                
                                
                                                  <p align="center">
                                                    **********<br> #smktelkombandung #smkno1bandung #sekolahoffline2021 #smkjuara #smkhebat #smkhebatsmkjuara #smkterbaik #smkbisa #smkswastaterbaik #ppdb2021 #siaptatapmuka #sekolahsiaptatapmuka #jalurreguler3 #ramadhan2021 #ramadhan #ramadhankareem #lebaran #lebaran2021
                                                  </br>
                                                  </br>
                                                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                              <div class="d-flex  my-4">
                                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CO9XLimhj6a/"><i class="fab fa-instagram"></i></a>                  
                                              </div>
                                              </p></small></p>
                                              
                                              
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                              </div>
                              <div class="modal-footer">
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
            </div>
        </div>
    </div>
    

    <!-- Team End -->

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

                      <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                      Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
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
