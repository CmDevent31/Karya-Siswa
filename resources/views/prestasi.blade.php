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
                            
                            <br><br>@karate.smktelbdg
                                #realchampion
                                    #bearealdigitaltalent
                                         #smkhebat
                                             #smkbisa
                            </small>
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
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light"style="border-radius: 30px 30px 30px 30px;">
                        <div class="overflow-hidden"style="border-radius: 30px 30px 30px 30px;">
                            <div id="carousel4" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/kate.jpeg" class="d-block w-100" alt="..." style="border-radius: 30px 30px 30px 30px;">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/campuran1.jpeg" class="d-block w-100" alt="..." style="border-radius: 30px 30px 30px 30px;">
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
                                <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CvI9iDoSM4t/?img_index=1"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Selamat Kepada Ananda</h5>
                        
                            <b><p><small><ol><li>🏅G.Banu Prasetyo (XI TJKT 1)</li>
                                <li>🏅Faris Akbar (XI TJKT 5)</li>
                                <li>🏅Rafli Fahrezi Ramadhan (XII TKJ 2)</li></ol></p></b>
                                
                                <p class="text-center"> <b>Sebagai peraih medali emas di nomor komite pada kejuaraan karate STKIP Pasundan Cup V Sirkuit II Jawa Barat 2023.Yuk jadikan prestasi sebagai tradisi.</b></p>
                            
                            <br><br>@karate.smktelbdg
                                #realchampion
                                    #bearealdigitaltalent
                                         #smkhebat
                                             #smkbisa
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
                            <div id="carousel6" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/kate1.jpeg" class="d-block w-100" alt="...">
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
                            <div id="carousel7" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/basket.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/tedo4.jpeg" class="d-block w-100" alt="...">
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