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

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel ="stylesheet" href="style.css">
    
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
 

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
                    <a href="/Home" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kegiatan</a>
                    <div class="dropdown-menu fade-down m-9">
                        <a href="/Pembelajaran" class="dropdown-item">Pembelajaran</a>
                        <a href="/Ekskul" class="dropdown-item">Ekskul</a>
                        <a href="/GaleriSekolah" class="dropdown-item">GaleriSekolah</a>
                        <a href="/Quotes" class="dropdown-item">Quotes</a>
                    </div>
                </div>
                <a href="/Prestasi" class="nav-item nav-link active">Prestasi</a>
                <a href="/Guru" class="nav-item nav-link">GuruKami</a>
                <a href="/TentangKami" class="nav-item nav-link">TentangKami</a>
                <a href="/Login" class="nav-item nav-link">Login</a>
                <div class="nav-item dropdown text-danger">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"></a>
                    <div class="dropdown-menu fade-down m-9">
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
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/kate.jpeg" class="d-block w-100" alt="..." style="border-radius: 30px 30px 30px 30px;">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/campuran1.jpeg" class="d-block w-100" alt="..." style="border-radius: 30px 30px 30px 30px;">
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
                        
                            <b><p><small><ol><li>🏅G.Banu Prasetyo (XI TJKT 1)</li>
                                <li>🏅Faris Akbar (XI TJKT 5)</li>
                                <li>🏅Rafli Fahrezi Ramadhan (XII TKJ 2)</li></ol></p></b>
                                
                                <p class="text-center"> <b>Sebagai peraih medali emas di nomor komite pada kejuaraan karate STKIP Pasundan Cup V Sirkuit II Jawa Barat 2023.Yuk jadikan prestasi sebagai tradisi.</b></p>
                            
                            <br>@karate.smktelbdg
                                #realchampion
                                    #bearealdigitaltalent
                                         #smkhebat
                                             #smkbisa</br>
                          <br>  </small>
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
                        
                            <br><small><b>Sobat Prima! Berikut ini merupakan siswa SMK Telkom Bandung yang berhasil meraih Juara pada Lomba Taekwondo yang di gelar di SMK Marhas. Selamat atas pencapaian luar biasanya dan terima kasih atas prestasinya! Kami bangga!
                                Be a Real Digital Talent!</b></br>
                                
                                
                                    <br><br>@yptelkom
                                @telkom_schools
                                    @ridwankamil
                                        @ruzhanul
                                            @wahyu_mijaya
                                                @arifrudiana
                                                    @rosy.telkom
                                
                                </small></ul>
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

                                <br><b>Sobat Prima! Berikut ini merupakan siswa SMK Telkom Bandung yang berhasil meraih Juara 3 Kata Karate dan Juara 1 Kumite Karate di ajang Olimpiade Olahraga Nasional (O2SN) untuk tingkat kabupaten Bandung. Selamat atas pencapaian luar biasanya dan terima kasih atas prestasinya! Kami bangga!
                                
                                Be a Real Digital Talent!</b></br>
                                
                                
                                    <br>@yptelkom
                                        @telkom_schools
                                            @ridwankamil
                                                 @ruzhanul
                                                    @wahyu_mijaya
                                                         @arifrudiana
                                                            @rosy.telkom</small>
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
                            <small><br><b>Sobat Prima! Berikut ini merupakan siswa SMK Telkom Bandung yang berhasil meraih Juara 2 Lomba Basket di ajang Olimpiade Olahraga Nasional (O2SN) untuk tingkat kabupaten Bandung. Selamat atas pencapaian luar biasanya dan terima kasih atas prestasinya! Kami bangga!

                                Be a Real Digital Talent!!</br></b>

                                <br>#smktelkombandung 
                                #smktelbdg 
                                #telkomschools 
                                #smktelkom
                                 #ppdb
                                  #smkno1bandung 
                                  #infobandung 
                                  #infodayeuhkolot 
                                  #pelatihan 
                                   </small>
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
                        
                            <br><b><small>Sobat Prima! Berikut ini merupakan siswa SMK Telkom Bandung yang berhasil meraih medali emas di ajang Olimpiade Olahraga Nasional (O2SN) cabang Pencak Silat untuk tingkat kabupaten Bandung. Selamat atas pencapaian luar biasanya dan terima kasih atas prestasinya! Kami bangga!

                                Be a Real Digital Talent!</b></br>
                                
                                <br>@yptelkom
                                @telkom_schools
                                @ridwankamil
                                @ruzhanul
                                @wahyu_mijaya
                                @arifrudiana
                                @rosy.telkom</br>
                                
                                </small>
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

                            <br><b> Sobat Prima! berikut ini adalah Athaillah Raihan S, siswa SMK Telkom Bandung yang berhasil meraih juara 2 Speech Contest dalam English Festival Widyatama 2023 se-Jawa Barat. Selamat atas pencapaian luar biasanya dan Terima kasih atas prestasinya, kami bangga!
                            </br></b>
                                <br><br>#siswaberprestasi #bearealdigitaltalent #smktelkombandung #smktelbdg #telkomschools
                                #smkno1bandung #smkhebatsmkbisa ©️ Studio Skillas</br>    
                                </small>
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

                                <br><b>Sobat Prima! berikut ini siswa-siswi SMK Telkom Bandung yang berhasil meraih juara 1, 2, dan 3 Lomba Pencak Silat yang di gelar oleh IPSI Kota Cimahi.
                                Selamat atas pencapaian luar biasanya dan Terima kasih atas prestasinya, kami bangga!
                                </b></br>
                                    <br><br><br>#siswaberprestasi #bearealdigitaltalent #smktelkombandung #smktelbdg #telkomschools
                                    #smkno1bandung #smkhebatsmkbisa © Studio Skillas</br>

                                        </small>
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
                            <small><br><b>Sobat Prima! berikut ini siswa-siswi SMK Telkom Bandung yang berhasil meraih juara 3 Bina Lomba Baris-berbaris yang di gelar oleh MIKO Berbasis 2.0. Selamat atas pencapaian luar biasanya dan Terima kasih atas prestasinya, kami bangga!
                            </b></br>
                               <br><br><br> #siswaberprestasi #bearealdigitaltalent #smktelkombandung #smktelbdg #telkomschools
                                #smkno1bandung #smkhebatsmkbisa © Studio Skillas</br>
                                
                                
                                   </small>
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
                            <small><br><b>SobPrim! Gimana hari ini?mudah-mudahan sehat ya. Kali ini siswa - siswi SMK Telkom Bandung berulah lagi nih 🫣

                                Waah kenapa tuh? Eits jangan salah sangka dulu ya SobPrim... ternyata siswa - siswi SMK Telkom Bandung berulah karena memenangkan perlombaan lho.
                                
                                Penasaran kann perlombaan apa sii?
                                Yuu langsung kepoin 😆
                                
                                SobPrim, Semangat terus yaa untuk mencetak rekor tertinggi 😆  </b></br>
                               <br> @yptelkom
                               @telkom_schools
                               @rosy.telkom
                               @humas_jabar
                               @bdg.disdik
                               @pustekkom_kemdikbud
                               @ditjen.gtk.kemdikbud
                               @pemprovjabar
                               </br>
                                
                                
                                   </small>
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
                            <small><br><b>Sobat Prima! berikut ini siswa-siswi SMK Telkom Bandung yang berhasil meraih juara 3 madya lomba PBB yang di gelar oleh SMK Pasundan 1 Banjaran. Selamat atas pencapaian luar biasanya dan Terima kasih atas prestasinya, kami bangga!
                                </b></br>
                                <br><br><br><br><br> #siswaberprestasi #bearealdigitaltalent #smktelkombandung #smktelbdg #telkomschools
                               #smkno1bandung #smkhebatsmkbisa © Studio Skillas </br>
                                
                                
                                   </small>
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
                            <small><br><b>Sobat Prima! berikut ini siswa-siswi SMK Telkom Bandung yang berhasil meraih 12 medali pada Karate Championship 2023 yang di gelar oleh SMK Sangkuriang 1 Cimahi. Selamat atas pencapaian luar biasanya dan Terima kasih atas prestasinya, kami bangga!
                                </b></br>
                               <br><br><br><br>#siswaberprestasi #bearealdigitaltalent #smktelkombandung #smktelbdg #telkomschools
                                #smkno1bandung #smkhebatsmkbisa © Studio Skillas</br>
                                
                                
                                   </small>
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
                            <small><br><b>Sobprim! Siswa-Siswi SMK Telkom Bandung ngeborong 𝐩𝐫𝐞𝐬𝐭𝐚𝐬𝐢 lagi 𝘯𝘪𝘩!! Kali ini mereka berhasil men𝐣𝐮𝐚𝐫𝐚i perlombaan yang digelar oleh 𝘽𝙚𝙧𝙚𝙪𝙢 𝘽𝙤𝙙𝙖𝙨 𝙀𝙫𝙚𝙣𝙩. Selamat atas pencapaian luar biasanya dan Terima kasih atas prestasinya, kami bangga!🤩
                                 </b></br>
                               <br><br><br><br> #siswaberprestasi #bearealdigitaltalent #smktelkombandung #smktelbdg #telkomschools
                                #smkno1bandung #smkhebatsmkbisa © Studio Skillas</br>
                                
                                
                                   </small>
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
                            <small><br><b>Sobprim! Siswa-Siswi SMK Telkom Bandung ngeborong 𝐩𝐫𝐞𝐬𝐭𝐚𝐬𝐢 lagi 𝘯𝘪𝘩!! Kali ini mereka berhasil men𝐣𝐮𝐚𝐫𝐚i perlombaan yang digelar di 𝐀𝐄𝐂𝐒 𝐔𝐏𝐈, 𝐔𝐍𝐈𝐍𝐔𝐒, 𝐅𝐈𝐁 𝐔𝐍𝐏𝐀𝐃, dan mendapat 𝐬𝐤𝐨𝐫 𝐭𝐞𝐫𝐭𝐢𝐧𝐠𝐠𝐢 dalam 𝙏𝙊𝙀𝙄𝘾 di 𝙄𝙣𝙩𝙚𝙧𝙣𝙖𝙩𝙞𝙤𝙣𝙖𝙡 𝙏𝙚𝙨𝙩 𝘾𝙚𝙣𝙩𝙚𝙧. Selamat atas pencapaian luar biasanya dan Terima kasih atas prestasinya, kami bangga!
                                 </b></br>
                               <br><br><br><br> #siswaberprestasi #bearealdigitaltalent #smktelkombandung #smktelbdg #telkomschools
                                #smkno1bandung #smkhebatsmkbisa © Studio Skillas</br>
                                
                                
                                   </small>
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
                            <small><br><b>Sobat Prima! Berikut ini siswa-siswi SMK Telkom Bandung yang bernama Ryzqa dari XI MM 1, Gafa dari XI MM 3, Hanif dan Dinan dari XI MM 4, Sekar dan Hasbi dari XI TKJ 2, Ghinan dari XI TKJ 3, Indah dan Syafiq dari XI TKJ 4, Yudha dari XI TJAT 1, dan Zikri dari XI TJAT 2 berhasil menjadi Juara dalam perlombaan yang digelar Kadisjas TNI AD. Selamat atas pencapaian luar biasanya dan Terima kasih atas prestasinya, kami bangga!
                            </b></br>
                               <br><br> #siswaberprestasi #bearealdigitaltalent #smktelkombandung #smktelbdg #telkomschools
                                #smkno1bandung #smkhebatsmkbisa </br>
                                
                                
                                   </small>
                        </div>
                    </div>
                </div><div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
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
                            <small><br><b>Sobat Prima! berikut ini siswa-siswi SMK Telkom Bandung berhasil menjadi Juara dalam Event IGREEC, La Vesta, dan AHM Best Student. Selamat atas pencapaian luar biasanya dan Terima kasih atas prestasinya, kami bangga!
                            </b></br>
                            <br><br><br><br> <br><br><br><br> #siswaberprestasi #bearealdigitaltalent #smktelkombandung #smktelbdg #telkomschools
                                #smkno1bandung #smkhebatsmkbisa © Studio Skillas</br>
                                
                                
                                   </small>
                        </div>
                    </div>
                </div><div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
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
                            <small><br><b>Sobat Prima! berikut ini siswa SMK Telkom Bandung berhasil menjadi Juara 3 dalam Lomba Badminton. Selamat atas pencapaian luar biasanya dan Terima kasih atas prestasinya, kami bangga!
                                 </b></br>
                                 <br><br><b>Selamat Kepada sang juara🥉
                                @__ryanmirza__
                                @arillsyakib</b></br>
                               <br><br><br><br> #siswaberprestasi #bearealdigitaltalent #smktelkombandung #smktelbdg #telkomschools
                                #smkno1bandung #smkhebatsmkbisa © Studio Skillas</br>
                                
                                
                                   </small>
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
                            <small><br><b>Sobat Prima! berikut ini siswa-siswi SMK Telkom Bandung berhasil menjadi Juara dalam Event Ideathon 2022. Selamat atas pencapaian luar biasanya dan Terima kasih atas prestasinya, kami bangga!
                                 </b></br>
                                 <br><br> <br><br><br><br><br><br><br><br><br><br><br> #siswaberprestasi #bearealdigitaltalent #smktelkombandung #smktelbdg #telkomschools
                                #smkno1bandung #smkhebatsmkbisa © Studio Skillas</br>
                                
                                
                                <br>   </small>
                        </div>
                    </div>
                </div><div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
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
                            <small><br><b>Sobat Prima! Kahlil Ahmad Al Fatih siswa Kelas XI MM 4 Berhasil mendapat Juara 2 Kejuaraan ACSS Tahun 2022 Kategori Newscasting dibulan September ini. Wahh keren banget selamat yaa ✨
                                @aecs_esaupi
                                
                                𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                
                                𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                Sekolahnya Sang Juara
                                
                                 </b></br>
                                 <br><br><br><br><br><br><br><br>**********<br> #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2023 #reachyourdream</br>
                                
                                
                                   </small>
                        </div>
                    </div>
                </div><div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
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
                            <small><br><b>Sobat Prima! Ryzqa Buana Putri siswi Kelas XI MM 1 Berhasil mendapat Juara 1 Mahardika Kategori Poomsae Putri Tingkat Nasional yang diselenggarakan oleh Pemprov DKI Jakarta pada tanggal 26 Juni 2022.
                                Wahh keren banget selamat yaa ✨
                                
                                𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                
                                𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                Sekolahnya Sang Juara
                                
                                   </b></br>
                                   <br><br><br><br><br><br><br><br>**********<br> #siswaberprestasi #bearealdigitaltalent #smktelkombandung #smktelbdg #telkomschools
                                #smkno1bandung #smkhebatsmkbisa © Studio Skillas</br>
                                
                                
                                   <br></small>
                        </div>
                    </div>
                </div><div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
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
                            <small><br><b>Selamat kepada Kak Nurul Azizah Kumara Kelas XII TKJ 3 menjadi Juara 1 Astra Honda Motor Best Student 2022 Tingkat Regional Jawa Barat

                                Keren banget ya Sobat Prima! Kak Nurul ini akan mewakili Regional Jawa Barat untuk bersaing dengan peserta lain dari seluruh Indonesia di Tingkat Nasional, kita doakan yuk semoga Kak Nurul menjadi yang terbaik di Tingkat Nasional, aamiin
                                
                                Terima kasih Kak Nurul atas prestasinya, kami bangga!
                                
                                𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                
                                𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                Sekolahnya Sang Juara
                                
                                   </b></br>
                               <br><br>**********<br> #siswaberprestasi #bearealdigitaltalent #smktelkombandung #smktelbdg #telkomschools
                                #smkno1bandung #smkhebatsmkbisa © Studio Skillas</br>
                                
                                
                                  <br> </small>
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
                            <small><br><b>Sobat Prima! Tim e-sport Sunborn SMK Telkom Bandung, yang beranggotakan:
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
                                 </b></br>
                               <br><br><br>**********<br> #siswaberprestasi #bearealdigitaltalent #smktelkombandung #smktelbdg #telkomschools
                                #smkno1bandung #smkhebatsmkbisa © Studio Skillas</br>
                                
                                
                                   </small>
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
                            <small><br><br><b>Sobat Prima! Muhammad Iqbal Rasyid alumni XII TKJ 3 angkatan 7, berhasil menjadi juara 3 dalam lomba Desain Web di SKOMDA ACT, wah selamat ya kak Iqbal 👏🏻✨

                                𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                
                                𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                Sekolahnya Sang Juara
                                
                                 </b></br>
                                 
                                 <br><br> <br><br><br>  <br><br><br> <br><br><br><br><br><br>**********<br> #siswaberprestasi #bearealdigitaltalent #smktelkombandung #smktelbdg #telkomschools
                                #smkno1bandung #smkhebatsmkbisa © Studio Skillas</br>
                                
                                
                                   </small>
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
                                Kabar gembira dateng lagi nih...
                                Siswi SMK Telkom Bandung, Vania
                                Rahma Diyanti XII MM 1 berhasil meraih Juara 1 dalam Lomba Desain Poster pada kegiatan Digital SIK UPI.
                                Wahhh selamat yaa ✨
                                
                                𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                
                                𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                Sekolahnya Sang Juara
                                
                                 </b></br>
                                 
                                 <br><br><br><br> <br><br><br> <br><br><br><br><br><br>**********<br> #siswaberprestasi #bearealdigitaltalent #smktelkombandung #smktelbdg #telkomschools
                                #smkno1bandung #smkhebatsmkbisa © Studio Skillas</br>
                                
                                
                                   </small>
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
                                Kabar gembira datang dari Team Taekwondo SMK Telkom Bandung, telah berhasil meraih Penghargaan Medali Emas & Perak pada kegiatan Kejuaraan Taekwondo ITN Open V 2022 Se-Jawa Barat.
                                Selamat atas penghargaannya ✨
                                @taekwondo.smktelbdg
                                
                                𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                
                                𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                Sekolahnya Sang Juara
                                
                                 </b></br>
                                 
                                 <br> <br> <br> <br> <br> <br> <br> <br><br><br><br>**********<br> #siswaberprestasi #bearealdigitaltalent #smktelkombandung #smktelbdg #telkomschools
                                #smkno1bandung #smkhebatsmkbisa © Studio Skillas</br>
                                
                                
                                   </small>
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
                            <div class="bg-light d-flex justify-content-cent    er pt-2 px-1"style="border-radius: 30px 30px 30px 30px;">
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CZd_p31BTe3/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">𝐒𝐄𝐋𝐀𝐌𝐀𝐓 𝐃𝐀𝐍 𝐒𝐔𝐊𝐒𝐄𝐒

                            </h5>
                            <small><br><b>Sobat Prima! Kabar gembira datang dari Putri-putri berprestasi SMK Telkom Bandung dengan meraih Penghargaan sebagai 𝐉𝐮𝐚𝐫𝐚 𝟏 𝐏𝐨𝐨𝐦𝐬𝐚𝐞 𝐈𝐧𝐝𝐨𝐧𝐞𝐬𝐢𝐚 𝐄𝐱𝐩𝐨 𝐁𝐚𝐭𝐭𝐥𝐞 𝟐 𝐭𝐚𝐡𝐮𝐧 𝟐𝟎𝟐𝟏 Tingkat Nasional, yang diselenggarakan pada tanggal 18-19 Desember 2021.
                                Selamat atas penghargaannya ✨
                                
                                𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                
                                𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                Sekolahnya Sang Juara
                                
                                  </b></br>
                                
                                  <br><br><br><br><br><br><br><br>**********<br> #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022
                            </br>
                                
                                
                                   </small>
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
                            <small><br><b>Sobat Prima! 𝐓𝐞𝐚𝐦 𝐂𝐮𝐫𝐢𝐨𝐮𝐬 SMK Telkom Bandung yang beranggotakan Humam Ibadilah Fahri (XII TKJ 3) dan Zidan Muhamad Daffa (XII TKJ 1) mendapatkan Penghargaan sebagai 𝐉𝐮𝐚𝐫𝐚 𝟐 Lomba Web Design Dinamik 16 Tingkat Nasional pada kegiatan "Innovation Technology for better Education", yang diselenggarakan oleh Universitas Pendidikan Indonesia.
                                Hebat kan, Ingin seperti kakak-kakak yang berprestasi ini? Yuk gabung di SMK Telkom Bandung "Sekolahnya Sang Juara". 😉
                                
                                𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                
                                𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                Sekolahnya Sang Juara
                                
                                 </b></br>
                                 
                               <br><br><br>**********<br> #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022</br>
                                
                                
                                   </small>
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
                            <small><br><b>Sobat Prima! Kabar gembira datang lagi dari siswa berprestasi SMK Telkom Bandung, kali ini Humam Ibadilan Fakhri dan Refaya Jihad Putra Mudoffar dari XII TKJ 3 mendapatkan Penghargaan sebagai Juara 1 pada bidang Arduino Project Tingkat Nasional yang diselenggarakan oleh Robotics Competition 2021, UIN Sunan Gunung Djati Bandung.
                                Selamat atas penghargaannya ✨
                                
                                𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                
                                𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                Sekolahnya Sang Juara
                                
                                  </b></br>
                                
                                  <br><br><br> <br><br><br>**********<br> #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022</br>
                                
                                
                                   </small>
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
                                    <img src="img/web4.jpg" class="d-block w-100" alt="...">
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
                            <small><br><b>Sobat Prima! Zidan Muhamad Daffa, siswa Kelas XII SMK Telkom Bandung mendapatkan penghargaan sebagai Juara ke-1 Lomba Kategori Web Design Tingkat Nasional, dalam Kegiatan Infinity 2021 bu UKM Progress STIKOMBALI.
                                Selamat atas penghargaannya ✨
                                
                                𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                
                                𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                Sekolahnya Sang Juara
                                
                                  </b></br>
                                 
                                  <br><br><br><br><br><br><br><br><br>**********<br> #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022</br>
                                
                                
                                   </small>
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
                                    <img src="img/web4.jpg" class="d-block w-100" alt="...">
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
                            <small><br><b>Sobat Prima! Zidan Muhamad Daffa, siswa Kelas XII SMK Telkom Bandung mendapatkan penghargaan sebagai Juara ke-1 Lomba Kategori Web Design Tingkat Nasional, dalam Kegiatan Infinity 2021 bu UKM Progress STIKOMBALI.
                                Selamat atas penghargaannya ✨
                                
                                𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                
                                𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                Sekolahnya Sang Juara
                                
                                  </b></br>
                                 
                                  <br><br><br><br><br><br><br><br><br>**********<br> #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022</br>
                                
                                
                                   </small>
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
                                    <img src="img/web4.jpg" class="d-block w-100" alt="...">
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
                            <small><br><b>Sobat Prima! Zidan Muhamad Daffa, siswa Kelas XII SMK Telkom Bandung mendapatkan penghargaan sebagai Juara ke-1 Lomba Kategori Web Design Tingkat Nasional, dalam Kegiatan Infinity 2021 bu UKM Progress STIKOMBALI.
                                Selamat atas penghargaannya ✨
                                
                                𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                
                                𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                Sekolahnya Sang Juara
                                
                                  </b></br>
                                 
                                  <br><br><br><br><br><br><br><br><br>**********<br> #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022</br>
                                
                                
                                   </small>
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
                                    <img src="img/web4.jpg" class="d-block w-100" alt="...">
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
                            <small><br><b>Sobat Prima! Zidan Muhamad Daffa, siswa Kelas XII SMK Telkom Bandung mendapatkan penghargaan sebagai Juara ke-1 Lomba Kategori Web Design Tingkat Nasional, dalam Kegiatan Infinity 2021 bu UKM Progress STIKOMBALI.
                                Selamat atas penghargaannya ✨
                                
                                𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                
                                𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                Sekolahnya Sang Juara
                                
                                  </b></br>
                                 
                                  <br><br><br><br><br><br><br><br><br>**********<br> #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022</br>
                                
                                
                                   </small>
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
                                    <img src="img/web4.jpg" class="d-block w-100" alt="...">
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
                            <small><br><b>Sobat Prima! Zidan Muhamad Daffa, siswa Kelas XII SMK Telkom Bandung mendapatkan penghargaan sebagai Juara ke-1 Lomba Kategori Web Design Tingkat Nasional, dalam Kegiatan Infinity 2021 bu UKM Progress STIKOMBALI.
                                Selamat atas penghargaannya ✨
                                
                                𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                
                                𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                Sekolahnya Sang Juara
                                
                                  </b></br>
                                 
                                  <br><br><br><br><br><br><br><br><br>**********<br> #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022</br>
                                
                                
                                   </small>
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
                                    <img src="img/web4.jpg" class="d-block w-100" alt="...">
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
                            <small><br><b>Sobat Prima! Zidan Muhamad Daffa, siswa Kelas XII SMK Telkom Bandung mendapatkan penghargaan sebagai Juara ke-1 Lomba Kategori Web Design Tingkat Nasional, dalam Kegiatan Infinity 2021 bu UKM Progress STIKOMBALI.
                                Selamat atas penghargaannya ✨
                                
                                𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                
                                𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                Sekolahnya Sang Juara
                                
                                  </b></br>
                                 
                                  <br><br><br><br><br><br><br><br><br>**********<br> #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022</br>
                                
                                
                                   </small>
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
                                    <img src="img/web4.jpg" class="d-block w-100" alt="...">
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
                            <small><br><b>Sobat Prima! Zidan Muhamad Daffa, siswa Kelas XII SMK Telkom Bandung mendapatkan penghargaan sebagai Juara ke-1 Lomba Kategori Web Design Tingkat Nasional, dalam Kegiatan Infinity 2021 bu UKM Progress STIKOMBALI.
                                Selamat atas penghargaannya ✨
                                
                                𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                
                                𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                Sekolahnya Sang Juara
                                
                                  </b></br>
                                 
                                  <br><br><br><br><br><br><br><br><br>**********<br> #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022</br>
                                
                                
                                   </small>
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
                                    <img src="img/web4.jpg" class="d-block w-100" alt="...">
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
                            <small><br><b>Sobat Prima! Zidan Muhamad Daffa, siswa Kelas XII SMK Telkom Bandung mendapatkan penghargaan sebagai Juara ke-1 Lomba Kategori Web Design Tingkat Nasional, dalam Kegiatan Infinity 2021 bu UKM Progress STIKOMBALI.
                                Selamat atas penghargaannya ✨
                                
                                𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                
                                𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                Sekolahnya Sang Juara
                                
                                  </b></br>
                                 
                                  <br><br><br><br><br><br><br><br><br>**********<br> #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022</br>
                                
                                
                                   </small>
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
                                    <img src="img/web4.jpg" class="d-block w-100" alt="...">
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
                            <small><br><b>Sobat Prima! Zidan Muhamad Daffa, siswa Kelas XII SMK Telkom Bandung mendapatkan penghargaan sebagai Juara ke-1 Lomba Kategori Web Design Tingkat Nasional, dalam Kegiatan Infinity 2021 bu UKM Progress STIKOMBALI.
                                Selamat atas penghargaannya ✨
                                
                                𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                
                                𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                Sekolahnya Sang Juara
                                
                                  </b></br>
                                 
                                  <br><br><br><br><br><br><br><br><br>**********<br> #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022</br>
                                
                                
                                   </small>
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
                                    <img src="img/web4.jpg" class="d-block w-100" alt="...">
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
                            <small><br><b>Sobat Prima! Zidan Muhamad Daffa, siswa Kelas XII SMK Telkom Bandung mendapatkan penghargaan sebagai Juara ke-1 Lomba Kategori Web Design Tingkat Nasional, dalam Kegiatan Infinity 2021 bu UKM Progress STIKOMBALI.
                                Selamat atas penghargaannya ✨
                                
                                𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                
                                𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                Sekolahnya Sang Juara
                                
                                  </b></br>
                                 
                                  <br><br><br><br><br><br><br><br><br>**********<br> #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022</br>
                                
                                
                                   </small>
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
                                    <img src="img/web4.jpg" class="d-block w-100" alt="...">
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
                            <small><br><b>Sobat Prima! Zidan Muhamad Daffa, siswa Kelas XII SMK Telkom Bandung mendapatkan penghargaan sebagai Juara ke-1 Lomba Kategori Web Design Tingkat Nasional, dalam Kegiatan Infinity 2021 bu UKM Progress STIKOMBALI.
                                Selamat atas penghargaannya ✨
                                
                                𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                
                                𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                Sekolahnya Sang Juara
                                
                                  </b></br>
                                 
                                  <br><br><br><br><br><br><br><br><br>**********<br> #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022</br>
                                
                                
                                   </small>
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
                                    <img src="img/web4.jpg" class="d-block w-100" alt="...">
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
                            <small><br><b>Sobat Prima! Zidan Muhamad Daffa, siswa Kelas XII SMK Telkom Bandung mendapatkan penghargaan sebagai Juara ke-1 Lomba Kategori Web Design Tingkat Nasional, dalam Kegiatan Infinity 2021 bu UKM Progress STIKOMBALI.
                                Selamat atas penghargaannya ✨
                                
                                𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                                Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                                
                                𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                                Sekolahnya Sang Juara
                                
                                  </b></br>
                                 
                                  <br><br><br><br><br><br><br><br><br>**********<br> #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022</br>
                                
                                
                                   </small>
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
            <div class="row g-5">
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
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email"style="border-radius: 0 30px 30px 0;">
                        <button type="button" class="btn btn-danger py-2 position-absolute top-0 end-0 mt-2 me-2"style="border-radius: 0 30px 30px 0;">SignUp</button>
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
    <a href="#" class="btn btn-lg btn-danger btn-lg-square back-to-top"style="border-radius: 30px 30px 30px 30px;"><i class="bi bi-arrow-up"></i></a>


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

</body>

</html>