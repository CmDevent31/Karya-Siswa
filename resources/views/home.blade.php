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
        <span class="sr-only">Loading Riki...</span>
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
                  <span class="material-icons-outlined"> <a href="#" class="text-dark">logout </span>
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
                <a href="/Home" class="nav-item nav-link active">Home</a>
                <div class="nav-item dropdown text-danger">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kegiatan</a>
                    <div class="dropdown-menu fade-down m-9">
                        <a href="/Pembelajaran" class="dropdown-item">Studi</a>
                        <a href="/Ekskul" class="dropdown-item">Ekskul</a>
                        <a href="/GaleriSekolah" class="dropdown-item">GaleriSekolah</a>
                    </div>
                </div>
                <a href="/Prestasi" class="nav-item nav-link">Prestasi</a>
                <a href="/Quotes" class="nav-item nav-link ">Quotes</a>
                <div class="nav-item dropdown text-danger">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"></a>
                  <div class="dropdown-menu fade-down m-9">
                      <a href="/TentangKami" class="dropdown-item">TentangKami</a>
                      <a href="/TimKami" class="dropdown-item">TimKami</a>
                  </div>
              </div>
              <div class="nav-item dropdown text-danger">
                <a href="#" class="nav-link dropdown-toggle-2" data-bs-toggle="dropdown">+</a>
                <div class="dropdown-menu fade-down m-9">
                    <a href="/Article" class="dropdown-item">Artikel</a>
                    <a href="/Product" class="dropdown-item">Produk</a>
                    <a href="/KaryaSiswa" class="dropdown-item">KaryaSiswa</a>
                </div>
            </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

     <!-- Carousel Start -->
     <div class="container-fluid p-0 mb-5">
      <div class="owl-carousel header-carousel position-relative">
          <div class="owl-carousel-item position-relative">
              <img class="img-fluid" src="https://smktelkom-bdg.sch.id/wp-content/uploads/2019/11/WhatsApp-Image-2019-08-03-at-09.51.58-min-1024x682.jpeg" alt="">
              <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                  <div class="container">
                      <div class="row justify-content-center">
                          <div class="col-sm-10 col-lg-8">
                              <h1 class="display-3 text-white animated slideInDown" align="center">Patriot #1</h1>
                              <p class="fs-5 text-white mb-4 pb-2" align="center">PATRIOT adalah rangkaian kegiatan mula bagi siswa-siswi baru di SMK Telkom Bandung. Setelah purna menjalani Masa Adaptasi dan Pelatihan Peserta Didik Baru #MAHASERU selama 3 hari.</p>

                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="owl-carousel-item position-relative">
              <img class="img-fluid" src="https://smktelkom-bdg.sch.id/wp-content/uploads/2019/11/IMG_1683-min-e1584110696332-1024x683.jpg" alt="">
              <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                  <div class="container">
                      <div class="row justify-content-center">
                          <div class="col-sm-10 col-lg-8">
                              <h1 class="display-3 text-white animated slideInDown" align="center">Patriot #2</h1>
                              <p class="fs-5 text-white mb-4 pb-2" align="center">Kegiatan #PATRIOT ini nantinya akan ditutup pula dengan kemah pelatihan selama 3 hari 2 malam dalam agenda #KAMPIUN. Selama 9 bulan, siswa-siswi akan menjalani agenda pekanan yang untuk membangun integritas, kedisiplinan, dan sikap dasar.</p>

                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="owl-carousel-item position-relative">
              <img class="img-fluid" src="https://smktelkom-bdg.sch.id/wp-content/uploads/2019/11/DSC3001-min-1024x680.jpg" alt="">
              <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                  <div class="container">
                      <div class="row justify-content-center">
                          <div class="col-sm-10 col-lg-8">
                              <h1 class="display-3 text-white animated slideInDown" align="center">Patriot #3</h1>
                              <p class="fs-5 text-white mb-4 pb-2" align="center">Tujuan dilaksanakannya kegiatan #PATRIOT adalah untuk terbentuknya peserta didik SMK Telkom Bandung yang berkarakter tangguh, berintegritas, dan disiplin. Menjadi peserta didik baru yang memiliki bekal khusus dalam mengarungi dahsyatnya bahtera kehidupan SMK selama tiga tahun.</p>

                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Carousel End -->

<!-- About Start -->
<div class="container-xxl py-5" id="TentangKami">
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
              <p class="mb-4" align="justify">KaryaSiswa adalah website yang digunakan untuk menunjukkan bakat bakat para siswa yang ingin menampilkan skill apa saja yang mereka punya....</p>
              <p class="mb-4" align="justify">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
              <a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#detailModal" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Read More</a>                
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
                          <div class="col-lg-7 col-md-10 ">
                              <img src="img/ac39f1e8-655d-41e6-93f5-587b97849ffa.jpg" class="img-fluid rounded-xl" alt="">
                          </div>
                          <div class="col-lg-5 col-md-10 mt-4 mt-lg-0">
                              <h1>TentangKami</h1>
                              <span class="text-muted">About Us</span>
                              <div class="d-flex  my-4">

                              </div>
                              <p align="Justify">Ini adalah kami pada saat........ </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- About End -->
    
<br><br>

<div class="container swiper"id="Artikel">
  <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="section-title bg-white text-center text-danger px-3">List</h6>
      <h1 class="mb-5"> Artikel</h1>
  </div>
  <div class="slide-container">
    <div class="card-wrapper swiper-wrapper" >
      <div class="card swiper-slide">
        <div class="image-box">
          <img src="https://media.istockphoto.com/id/1159237699/id/vektor/tata-letak-koran-artikel-kolom-berita-desain-majalah-newsprint-lembar-surat-kabar-brosur.jpg?s=1024x1024&w=is&k=20&c=SvqoyyyhHCD4ZmhdP475fhv2Sb5xUFQ_h__3xrzz6aA=" alt="" />
        </div>
          <div class="name-job " >
           <br> <h3 align="center"  class="name">Artikel 1</h3></br>
           <div class="text-center position-relative">  
            <a href="#"class="btn btn-outline-danger my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal9"  style="border-radius: 30px 30px 30px 30px;">Baca Selengkapnya</a>                
          </div>
        </div>
        <br>
      </div>
  
      <div class="card swiper-slide">
        <div class="image-box">
          <img src="https://media.istockphoto.com/id/1222488200/id/vektor/templat-halaman-koran-berita-utama-vektor-mockup-tabloid-jurnal-latar-belakang-sederhana.jpg?s=612x612&w=0&k=20&c=RRJeUifmagX-67gLTWyJLYVGCwIP35zaFpBJEVf_PoQ=" alt="" />
        </div>
          <div class="name-job " >
            <br> <h3 align="center"  class="name">Artikel 2</h3></br>
            <div class="text-center position-relative">  
             <a href="#"class="btn btn-outline-danger my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal10"  style="border-radius: 30px 30px 30px 30px;">Baca Selengkapnya</a>                
           </div>
         </div>
         <br>
       </div>
      <div class="card swiper-slide">
        <div class="image-box">
          <img src="https://media.istockphoto.com/id/610658518/id/vektor/template-vektor-jurnal-surat-kabar-vintage.jpg?s=612x612&w=0&k=20&c=rk4eZkaQse5nW6zze368ndaTVGagZj8we0J8XxXQaY8=" alt="" />
        </div>
        <div class="name-job " >
          <br> <h3 align="center"  class="name">Artikel 3</h3></br>
          <div class="text-center position-relative">  
           <a href="#"class="btn btn-outline-danger my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal11"  style="border-radius: 30px 30px 30px 30px;">Baca Selengkapnya</a>                
         </div>
       </div>
       <br>
     </div>
      <div class="card swiper-slide">
        <div class="image-box">
          <img src="https://media.istockphoto.com/id/610120462/id/vektor/gambar-datar-berita-koran.jpg?s=612x612&w=0&k=20&c=E-usDBd07aFLjEwExava7PTHh2eydsxA2JMyeSqXbC8=" alt="" />
        </div>
        <div class="name-job " >
          <br> <h3 align="center"  class="name">Artikel 4</h3></br>
          <div class="text-center position-relative">  
           <a href="#"class="btn btn-outline-danger my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal12"  style="border-radius: 30px 30px 30px 30px;">Baca Selengkapnya</a>                
         </div>
       </div>
       <br>
     </div>
      <div class="card swiper-slide">
        <div class="image-box">
          <img src="https://media.istockphoto.com/id/847662430/id/foto/surat-kabar-berita-dunia.jpg?s=612x612&w=0&k=20&c=sv0p8ooXH62RBjqiqm7Wt35zI41oSLLn4B_TC1hDPHk=" alt="" />
        </div>
        <div class="name-job " >
          <br> <h3 align="center"  class="name">Artikel 5</h3></br>
          <div class="text-center position-relative">  
           <a href="#"class="btn btn-outline-danger my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal13"  style="border-radius: 30px 30px 30px 30px;">Baca Selengkapnya</a>                
         </div>
       </div>
       <br>
     </div>
    </div>
  </div>
  <div class="swiper-button-next swiper-navBtn"></div>
  <div class="swiper-button-prev swiper-navBtn"></div>
  <div class="swiper-pagination"></div>
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
                    <div class="row justify-content-center modal-detail">
                        <div class="col-lg-7 col-md-10">
                            <img src="https://media.istockphoto.com/id/1159237699/id/vektor/tata-letak-koran-artikel-kolom-berita-desain-majalah-newsprint-lembar-surat-kabar-brosur.jpg?s=1024x1024&w=is&k=20&c=SvqoyyyhHCD4ZmhdP475fhv2Sb5xUFQ_h__3xrzz6aA=" class="img-fluid rounded-xl" alt="">
                        </div>
                        <div class="col-lg-5 col-md-10 mt-4 mt-lg-0">
                            <h1>Artikel 1</h1>
                            <span class="text-muted"></span>
                            <div class="d-flex  my-4">
                                <p class="fw-bold me-4">For Example</p>
                            </div>
                            <p align="Justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto amet nam at neque adipisci dicta sed sit laboriosam, quaerat incidunt maxime ea possimus enim explicabo? Amet alias soluta, provident nihil asperiores impedit dicta officia, voluptatibus distinctio eum delectus aperiam, deserunt minus quasi dolor voluptate autem maxime officiis nisi repellendus quos voluptas earum at beatae! Cupiditate quasi cum ratione pariatur excepturi tempore animi, ea vel in, dolore rerum fugiat iste? Assumenda, ratione inventore! Fuga, alias a nobis sapiente sint.</p>
                        </div>
                    </div>
                </div>
            </div>
              <div class="modal-footer">
              </div>
          </div>
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
                      <div class="row justify-content-center modal-detail">
                          <div class="col-lg-7 col-md-10">
                              <img src="https://media.istockphoto.com/id/1222488200/id/vektor/templat-halaman-koran-berita-utama-vektor-mockup-tabloid-jurnal-latar-belakang-sederhana.jpg?s=612x612&w=0&k=20&c=RRJeUifmagX-67gLTWyJLYVGCwIP35zaFpBJEVf_PoQ=" class="img-fluid rounded-xl" alt="" width="100%">
                          </div>
                          <div class="col-lg-5 col-md-10 mt-4 mt-lg-0">
                              <h1>Artikel 2</h1>
                              <span class="text-muted"></span>
                              <div class="d-flex  my-4">
                                  <p class="fw-bold me-4">For Example</p>  
                              </div>
                              <p align="Justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto amet nam at neque adipisci dicta sed sit laboriosam, quaerat incidunt maxime ea possimus enim explicabo? Amet alias soluta, provident nihil asperiores impedit dicta officia, voluptatibus distinctio eum delectus aperiam, deserunt minus quasi dolor voluptate autem maxime officiis nisi repellendus quos voluptas earum at beatae! Cupiditate quasi cum ratione pariatur excepturi tempore animi, ea vel in, dolore rerum fugiat iste? Assumenda, ratione inventore! Fuga, alias a nobis sapiente sint.</p>
                          </div>
                      </div>
                  </div>
              </div>
                <div class="modal-footer">
                </div>
            </div>
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
                        <div class="row justify-content-center modal-detail">
                            <div class="col-lg-7 col-md-10">
                                <img src="https://media.istockphoto.com/id/610658518/id/vektor/template-vektor-jurnal-surat-kabar-vintage.jpg?s=612x612&w=0&k=20&c=rk4eZkaQse5nW6zze368ndaTVGagZj8we0J8XxXQaY8=" class="img-fluid rounded-xl" alt="" width="100%">
                            </div>
                            <div class="col-lg-5 col-md-10 mt-4 mt-lg-0">
                                <h1>Artikel 3</h1>
                                <span class="text-muted"></span>
                                <div class="d-flex  my-4">
                                    <p class="fw-bold me-4">For Example</p>  
                                </div>
                                <p align="Justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto amet nam at neque adipisci dicta sed sit laboriosam, quaerat incidunt maxime ea possimus enim explicabo? Amet alias soluta, provident nihil asperiores impedit dicta officia, voluptatibus distinctio eum delectus aperiam, deserunt minus quasi dolor voluptate autem maxime officiis nisi repellendus quos voluptas earum at beatae! Cupiditate quasi cum ratione pariatur excepturi tempore animi, ea vel in, dolore rerum fugiat iste? Assumenda, ratione inventore! Fuga, alias a nobis sapiente sint.</p>
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="modal-footer">
                  </div>
              </div>
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
                          <div class="row justify-content-center modal-detail">
                              <div class="col-lg-7 col-md-10">
                                  <img src="https://media.istockphoto.com/id/1309699912/id/vektor/ilustrasi-vektor-template-kertas-berita-harian-dengan-tempat-penampung-teks-dan-gambar.jpg?s=612x612&w=0&k=20&c=TfrLVka84V0jdCO1gKU8VoXZEPFdlMMs0KWFnXKPJNk=" class="img-fluid rounded-xl" alt="" width="100%">
                              </div>
                              <div class="col-lg-5 col-md-10 mt-4 mt-lg-0">
                                  <h1>Artikel 4</h1>
                                  <span class="text-muted"></span>
                                  <div class="d-flex  my-4">
                                      <p class="fw-bold me-4">For Example</p>  
                                  </div>
                                  <p align="Justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto amet nam at neque adipisci dicta sed sit laboriosam, quaerat incidunt maxime ea possimus enim explicabo? Amet alias soluta, provident nihil asperiores impedit dicta officia, voluptatibus distinctio eum delectus aperiam, deserunt minus quasi dolor voluptate autem maxime officiis nisi repellendus quos voluptas earum at beatae! Cupiditate quasi cum ratione pariatur excepturi tempore animi, ea vel in, dolore rerum fugiat iste? Assumenda, ratione inventore! Fuga, alias a nobis sapiente sint.</p>
                              </div>
                          </div>
                      </div>
                  </div>
                    <div class="modal-footer">
                    </div>
                </div>
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
                            <div class="row justify-content-center modal-detail">
                                <div class="col-lg-7 col-md-10">
                                    <img src="https://media.istockphoto.com/id/1401208102/id/vektor/tata-letak-surat-kabar-kota-vektor-dengan-berita-utama.jpg?s=612x612&w=0&k=20&c=RX0XFR7DD-aKINscshTBSjmFbaU7R8i6sExXnPKOAgo=" class="img-fluid rounded-xl" alt="" width="100%">
                                </div>
                                <div class="col-lg-5 col-md-10 mt-4 mt-lg-0">
                                    <h1>Artikel 5</h1>
                                    <span class="text-muted"></span>
                                    <div class="d-flex  my-4">
                                        <p class="fw-bold me-4">For Example</p>  
                                    </div>
                                    <p align="Justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto amet nam at neque adipisci dicta sed sit laboriosam, quaerat incidunt maxime ea possimus enim explicabo? Amet alias soluta, provident nihil asperiores impedit dicta officia, voluptatibus distinctio eum delectus aperiam, deserunt minus quasi dolor voluptate autem maxime officiis nisi repellendus quos voluptas earum at beatae! Cupiditate quasi cum ratione pariatur excepturi tempore animi, ea vel in, dolore rerum fugiat iste? Assumenda, ratione inventore! Fuga, alias a nobis sapiente sint.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                      <div class="modal-footer">
                      </div>
                  </div>
              </div>
          </div>
          </div>

    <div class="container swiper"id="Produk">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-danger px-3">List</h6>
            <h1 class="mb-2" >Produk</h1>
        </div>
        <div class="slide-container">
          <div class="card-wrapper swiper-wrapper">
            <div class="card swiper-slide">
              <div class="image-box">
                <img src="https://www.bhinneka.com/blog/wp-content/uploads/2021/10/Cumal-Cemil-Paper-Pouch-Packaging-Mockup.jpg" alt="" />
              </div>
                <div class="name-job " >
                 <br> <h3 align="center"  class="name">Produk 1</h3></br>
                 <div class="text-center position-relative">  
                  <a href="#"class="btn btn-outline-danger my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal4"  style="border-radius: 30px 30px 30px 30px;">Baca Selengkapnya</a>                
                </div>
              </div>
              <br>
            </div>

            <div class="card swiper-slide">
              <div class="image-box">
                <img src="https://www.qiscus.com/id/wp-content/uploads/sites/2/2022/03/Desain-kemasan-produk-740x500.png" alt="" />
              </div>
                <div class="name-job " >
                  <br> <h3 align="center"  class="name">Produk 2</h3></br>
                  <div class="text-center position-relative">  
                   <a href="#"class="btn btn-outline-danger my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal5"  style="border-radius: 30px 30px 30px 30px;">Baca Selengkapnya</a>                
                 </div>
               </div>
               <br>
             </div>
            <div class="card swiper-slide">
              <div class="image-box">
                <img src="https://anotherorion.com/wp-content/uploads/2023/02/desain-kemasan-produk-unik-dari-kertas.jpg" alt="" />
              </div>
              <div class="name-job " >
                <br> <h3 align="center"  class="name">Produk 3</h3></br>
                <div class="text-center position-relative">  
                 <a href="#"class="btn btn-outline-danger my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal6"  style="border-radius: 30px 30px 30px 30px;">Baca Selengkapnya</a>                
               </div>
             </div>
             <br>
           </div>
            <div class="card swiper-slide">
              <div class="image-box">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSETe_YfQR2iPSobEpHUDZbiC-WgkjAJSO9MQ&usqp=CAU" alt="" />
              </div>
              <div class="name-job " >
                <br> <h3 align="center"  class="name">Produk 4</h3></br>
                <div class="text-center position-relative">  
                 <a href="#"class="btn btn-outline-danger my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal7"  style="border-radius: 30px 30px 30px 30px;">Baca Selengkapnya</a>                
               </div>
             </div>
             <br>
           </div>
            <div class="card swiper-slide">
              <div class="image-box">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkb4zUMriDk8PDMiVTDlvSgtzoXt_BOppel_zQVjv8zP6GmwIVRcdBL9a0uKVon7uwsio&usqp=CAU" alt="" />
              </div>
              <div class="name-job " >
                <br> <h3 align="center"  class="name">Produk 5</h3></br>
                <div class="text-center position-relative">  
                 <a href="#"class="btn btn-outline-danger my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal8"  style="border-radius: 30px 30px 30px 30px;">Baca Selengkapnya</a>                
               </div>
             </div>
             <br>
           </div>
          </div>
        </div>
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
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
                                <div id="mamak1" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                    <div class="carousel-inner ">
                                      <div class="carousel-item active" data-bs-interval="1000">
                                        <img src="https://i0.wp.com/blog.sribu.com/wp-content/uploads/2023/05/contoh-desain-produk-makanan-minuman-botol.jpg?resize=500%2C500&ssl=1" class="w-auto h-auto" alt="..." >
                                      </div>

                                    </div>
                                    
                                </div>
                                <div class="col-md-8 order-md-2">
                                      <div class="d-flex border-bottom"> 
                                        <h1 class="flex-fill text-center py-2 " ><p align = "center">Produk 1</p></h1>
                                      </div>
                                      <p class="card-text"><br><b> <p align="center"> For Example </p></b>
                                      <br>
                                      <small><p align="center"><b>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor vehicula dictum. Aliquam erat volutpat. Fusce eu ex porta, euismod leo eget, suscipit sem. Aenean at fermentum tellus, et tristique urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi eu egestas sem, ac posuere nunc. Mauris quis mauris facilisis, varius velit vestibulum, posuere est. Phasellus rhoncus felis ullamcorper ante rhoncus tempus. Aliquam nec viverra ante.</b></p>
                                      
                                        <p align="center">Nunc mollis lorem ac arcu mollis, tincidunt maximus nulla gravida. Phasellus mattis dolor a rhoncus consequat. Nullam faucibus erat at nulla viverra, et scelerisque odio maximus. Etiam eu ante tristique quam facilisis convallis. Quisque auctor vitae ipsum vel eleifend. Donec augue urna, rutrum non elit at, efficitur iaculis augue. Donec sed sem fermentum, euismod dui vel, mattis nisi.
                                          <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                    <div class="d-flex  my-4">
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

                </div>
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
                                  <div id="mamak1" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                      <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="1000">
                                          <img src="https://www.qiscus.com/id/wp-content/uploads/sites/2/2022/03/Desain-kemasan-produk-740x500.png" class="d-block w-200 " alt="..." >
                                        </div>
                                        
                                      </div>
                                      
                                  </div>
                                  <div class="col-md-8 order-md-2">
                                        <div class="d-flex border-bottom"> 
                                          <h1 class="flex-fill text-center py-2 " ><p align = "center">Produk 2</p></h1>
                                        </div>
                                        <p class="card-text"><br><b> <p align="center"> For Example </p></b>
                                        <br>
                                        <small><p align="center"><b>
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor vehicula dictum. Aliquam erat volutpat. Fusce eu ex porta, euismod leo eget, suscipit sem. Aenean at fermentum tellus, et tristique urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi eu egestas sem, ac posuere nunc. Mauris quis mauris facilisis, varius velit vestibulum, posuere est. Phasellus rhoncus felis ullamcorper ante rhoncus tempus. Aliquam nec viverra ante.</b></p>
                                        
                                          <p align="center">Nunc mollis lorem ac arcu mollis, tincidunt maximus nulla gravida. Phasellus mattis dolor a rhoncus consequat. Nullam faucibus erat at nulla viverra, et scelerisque odio maximus. Etiam eu ante tristique quam facilisis convallis. Quisque auctor vitae ipsum vel eleifend. Donec augue urna, rutrum non elit at, efficitur iaculis augue. Donec sed sem fermentum, euismod dui vel, mattis nisi.
                                            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                      <div class="d-flex  my-4">
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
                  </div>
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
                                    <div id="mamak1" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                          <div class="carousel-item active" data-bs-interval="1000">
                                            <img src="https://anotherorion.com/wp-content/uploads/2023/02/desain-kemasan-produk-unik-dari-kertas.jpg" class="d-block w-150 " alt="..." >
                                          </div>
                                          
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-8 order-md-2">
                                          <div class="d-flex border-bottom"> 
                                            <h1 class="flex-fill text-center py-2 " ><p align = "center">Produk 3</p></h1>
                                          </div>
                                          <p class="card-text"><br><b> <p align="center"> For Example </p></b>
                                          <br>
                                          <small><p align="center"><b>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor vehicula dictum. Aliquam erat volutpat. Fusce eu ex porta, euismod leo eget, suscipit sem. Aenean at fermentum tellus, et tristique urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi eu egestas sem, ac posuere nunc. Mauris quis mauris facilisis, varius velit vestibulum, posuere est. Phasellus rhoncus felis ullamcorper ante rhoncus tempus. Aliquam nec viverra ante.</b></p>
                                          
                                            <p align="center">Nunc mollis lorem ac arcu mollis, tincidunt maximus nulla gravida. Phasellus mattis dolor a rhoncus consequat. Nullam faucibus erat at nulla viverra, et scelerisque odio maximus. Etiam eu ante tristique quam facilisis convallis. Quisque auctor vitae ipsum vel eleifend. Donec augue urna, rutrum non elit at, efficitur iaculis augue. Donec sed sem fermentum, euismod dui vel, mattis nisi.
                                              <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                        <div class="d-flex  my-4">
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
                    </div>
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
                                      <div id="mamak1" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                          <div class="carousel-inner">
                                            <div class="carousel-item active" data-bs-interval="1000">
                                              <img src="https://i0.wp.com/blog.sribu.com/wp-content/uploads/2023/05/contoh-desain-produk-makanan-ringan-vintage.png?resize=555%2C405&ssl=1" class="d-block w-500 " alt="..." >
                                            </div>
                                            
                                          </div>
                                          
                                      </div>
                                      <div class="col-md-8 order-md-2">
                                            <div class="d-flex border-bottom"> 
                                              <h1 class="flex-fill text-center py-2 " ><p align = "center">Produk 4</p></h1>
                                            </div>
                                            <p class="card-text"><br><b> <p align="center"> For Example </p></b>
                                            <br>
                                            <small><p align="center"><b>
                                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor vehicula dictum. Aliquam erat volutpat. Fusce eu ex porta, euismod leo eget, suscipit sem. Aenean at fermentum tellus, et tristique urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi eu egestas sem, ac posuere nunc. Mauris quis mauris facilisis, varius velit vestibulum, posuere est. Phasellus rhoncus felis ullamcorper ante rhoncus tempus. Aliquam nec viverra ante.</b></p>
                                            
                                              <p align="center">Nunc mollis lorem ac arcu mollis, tincidunt maximus nulla gravida. Phasellus mattis dolor a rhoncus consequat. Nullam faucibus erat at nulla viverra, et scelerisque odio maximus. Etiam eu ante tristique quam facilisis convallis. Quisque auctor vitae ipsum vel eleifend. Donec augue urna, rutrum non elit at, efficitur iaculis augue. Donec sed sem fermentum, euismod dui vel, mattis nisi.
                                                <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                          <div class="d-flex  my-4">
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
                      </div>
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
                                        <div id="mamak1" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                              <div class="carousel-item active" data-bs-interval="1000">
                                                <img src="https://i0.wp.com/blog.sribu.com/wp-content/uploads/2023/05/contoh-desain-produk-makanan-kue.jpg?resize=600%2C387&ssl=1" class="d-block w-200 " alt="..." >
                                              </div>
                                              
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-8 order-md-2">
                                              <div class="d-flex border-bottom"> 
                                                <h1 class="flex-fill text-center py-2 " ><p align = "center">Produk 5</p></h1>
                                              </div>
                                              <p class="card-text"><br><b> <p align="center"> For Example </p></b>
                                              <br>
                                              <small><p align="center"><b>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor vehicula dictum. Aliquam erat volutpat. Fusce eu ex porta, euismod leo eget, suscipit sem. Aenean at fermentum tellus, et tristique urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi eu egestas sem, ac posuere nunc. Mauris quis mauris facilisis, varius velit vestibulum, posuere est. Phasellus rhoncus felis ullamcorper ante rhoncus tempus. Aliquam nec viverra ante.</b></p>
                                              
                                                <p align="center">Nunc mollis lorem ac arcu mollis, tincidunt maximus nulla gravida. Phasellus mattis dolor a rhoncus consequat. Nullam faucibus erat at nulla viverra, et scelerisque odio maximus. Etiam eu ante tristique quam facilisis convallis. Quisque auctor vitae ipsum vel eleifend. Donec augue urna, rutrum non elit at, efficitur iaculis augue. Donec sed sem fermentum, euismod dui vel, mattis nisi.
                                                  <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                            <div class="d-flex  my-4">
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
                        </div>
                    </div>
                </div>
                </div>


    
    <div class="container mt-5">

      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-danger px-3">Filter</h6>
        <h1 class="mb-5">Kategori</h1>
    </div>
    <div class="row g-4 justify-content-center" >
        <div class="text-center position-relative overflow-hidden">  
          <a href="#Produk"class="btn btn-outline-danger my-button align-self-start px-3" style="border-radius: 30px 30px 30px 30px;">#Produk</a>                
          <a href="#Artikel"class="btn btn-outline-danger my-button align-self-start px-3" style="border-radius: 30px 30px 30px 30px;">#Artikel</a> 
            <a href="#TentangKami"class="btn btn-outline-danger my-button align-self-start px-3" style="border-radius: 30px 30px 30px 30px;">#TentangKami</a>                
            <a href="#Studi"class="btn btn-outline-danger my-button align-self-start " style="border-radius: 30px 30px 30px 30px;">#Studi</a>                
            <a href="#Karya"class="btn btn-outline-danger my-button align-self-start px-3" style="border-radius: 30px 30px 30px 30px;">#Karya</a>                
            <a href="#Prestasi"class="btn btn-outline-danger my-button align-self-start px-3" style="border-radius: 30px 30px 30px 30px;">#Prestasi</a>                               
          </div>

        </div>
  </div>
    

  <br><br><br>
{{-- card title --}}
<div class="container "id="Karya">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-danger px-3">Karya</h6>
        <h1 class="mb-5">Karya Siswa</h1>
    </div>
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
    <div class="col-lg-15">
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3 rounded">
            <div class="col">
              <div class="card text-center  h-100 mb-3">
                <img src="https://asset.kompas.com/crops/8N09VtRGRP_Byj8TzBvKZUqPdtM=/0x49:2245x1546/750x500/data/photo/2022/06/08/62a02ca8d7972.jpg" class="img-fluid rounded-top" alt="Responsive image" style="object-fit: cover">
                <div class="card-body">
                  <h5 class="card-title">Karya 1 </h5>
                  <p class="card-text" align="justify">Lorem ipsum dolor sit amet, consectetur...... </p>
                </div>  
                <div class="card-footer ">
                  <a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal14" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Read More</a>                
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card text-center h-100 mb-3">
                <img src="https://cdn2.tstatic.net/travel/foto/bank/images/seni-dari-daun.jpg" class="img-fluid rounded-top" alt="Responsive image" style="object-fit: cover">
                <div class="card-body">
                  <h5 class="card-title">Karya 2</h5>
                  <p class="card-text"  align="justify">Lorem ipsum dolor sit amet, consectetur......</p>
                </div>
                <div class="card-footer">
                  <a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal15" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Read More</a>                
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card text-center  h-100">
                <img src="https://media.japanesestation.com/images/750x422/7-Karya-Seni-Yang-Indah-Ini-Terbuat-Dari-Sampah-4.jpg" class="img-fluid rounded-top" alt="Responsive image" style="object-fit: cover">
                <div class="card-body">
                  <h5 class="card-title">Karya 3</h5>
                  <p class="card-text"  align="justify">Lorem ipsum dolor sit amet, consectetur......</p>
                </div>
                <div class="card-footer ">
                  <a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal16" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Read More</a>                
                </div>
                
              </div>
            </div>
          </div>      
        </div>
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
                      <div class="row justify-content-center modal-detail">
                          <div class="col-lg-7 col-md-10">
                              <img src="https://asset.kompas.com/crops/8N09VtRGRP_Byj8TzBvKZUqPdtM=/0x49:2245x1546/750x500/data/photo/2022/06/08/62a02ca8d7972.jpg" class="img-fluid rounded-xl" alt="" width="100%">
                          </div>
                          <div class="col-lg-5 col-md-10 mt-4 mt-lg-0">
                              <h1>Karya 1</h1>
                              <span class="text-muted"></span>
                              <div class="d-flex  my-4">
                                  <p class="fw-bold me-4">For Example</p>  
                              </div>
                              <p align="Justify">adipisicing elit. Architecto amet nam at neque adipisci dicta sed sit laboriosam, quaerat incidunt maxime ea possimus enim explicabo? Amet alias soluta, provident nihil asperiores impedit dicta officia, voluptatibus distinctio eum delectus aperiam, deserunt minus quasi dolor voluptate autem maxime officiis nisi repellendus quos voluptas earum at beatae! Cupiditate quasi cum ratione pariatur excepturi tempore animi, ea vel in, dolore rerum fugiat iste? Assumenda, ratione inventore! Fuga, alias a nobis sapiente sint.</p>
                          </div>
                      </div>
                  </div>
              </div>
                <div class="modal-footer">
                </div>
            </div>
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
                      <div class="row justify-content-center modal-detail">
                          <div class="col-lg-7 col-md-10">
                              <img src="https://cdn2.tstatic.net/travel/foto/bank/images/seni-dari-daun.jpg" class="img-fluid rounded-xl" alt="" width="100%">
                          </div>
                          <div class="col-lg-5 col-md-10 mt-4 mt-lg-0">
                              <h1>Karya 2</h1>
                              <span class="text-muted"></span>
                              <div class="d-flex  my-4">
                                  <p class="fw-bold me-4">For Example</p>  
                              </div>
                              <p align="Justify">adipisicing elit. Architecto amet nam at neque adipisci dicta sed sit laboriosam, quaerat incidunt maxime ea possimus enim explicabo? Amet alias soluta, provident nihil asperiores impedit dicta officia, voluptatibus distinctio eum delectus aperiam, deserunt minus quasi dolor voluptate autem maxime officiis nisi repellendus quos voluptas earum at beatae! Cupiditate quasi cum ratione pariatur excepturi tempore animi, ea vel in, dolore rerum fugiat iste? Assumenda, ratione inventore! Fuga, alias a nobis sapiente sint.</p>
                          </div>
                      </div>
                  </div>
              </div>
                <div class="modal-footer">
                </div>
            </div>
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
                      <div class="row justify-content-center modal-detail">
                          <div class="col-lg-7 col-md-10">
                              <img src="https://media.japanesestation.com/images/750x422/7-Karya-Seni-Yang-Indah-Ini-Terbuat-Dari-Sampah-4.jpg" class="img-fluid rounded-xl" alt="" width="100%">
                          </div>
                          <div class="col-lg-5 col-md-10 mt-4 mt-lg-0">
                              <h1>Karya 3</h1>
                              <span class="text-muted"></span>
                                  <p class="fw-bold me-4">For Example</p>  
                              <p align="Justify">adipisicing elit. Architecto amet nam at neque adipisci dicta sed sit laboriosam, quaerat incidunt maxime ea possimus enim explicabo? Amet alias soluta, provident nihil asperiores impedit dicta officia, voluptatibus distinctio eum delectus aperiam, deserunt minus quasi dolor voluptate autem maxime officiis nisi repellendus quos voluptas earum at beatae! Cupiditate quasi cum ratione pariatur excepturi tempore animi, ea vel in, dolore rerum fugiat iste? Assumenda, ratione inventore! Fuga, alias a nobis sapiente sint.</p>
                          </div>
                      </div>
                  </div>
              </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    </div>




    <!-- Team Start -->
    <div class="container-xxl py-5" id="Prestasi">
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
                    
                        <br><b><p><small>🏅G.Banu Prasetyo (XI TJKT 1)....</p></b></br>
                        <br>  <a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Lihat Selengkapnya</a>                
                          
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
                      <div id="mamak" class="col-md-4 order-md-1"  class="carousel-slide" data-bs-ride="carousel">
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
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Categories Start -->
    <div class="container-xxl py-5 category" >
      <div class="container">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
              <h6 class="section-title bg-white text-center text-danger px-3">Keahlian</h6>
              <h1 class="mb-5"id="Studi">Program Keahlian</h1>
          </div>
          <div class="row g-3">
              <div class="col-lg-7 col-md-6">
                  <div class="row g-3">
                      <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                          <a class="position-relative d-block overflow-hidden" href="/Tjkt">
                              <img class="img-fluid" src="img/Screenshot (420).png" alt="">
                              <div class="bg-light text-center position-absolute bottom-0 end-0 py-2 px-3" style="border-radius: 30px 0 0 0;">
                                  <h5 class="m-0">TJKT</h5>
                                  <small class="text-danger">5 Materi</small>
                              </div>
                          </a>
                      </div>
                      
                      <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                          <a class="position-relative d-block overflow-hidden" href="/Animasi">
                              <img class="img-fluid" width="100%" height="100%"src="https://www.telkomsel.com/sites/default/files/2023-04/w3-2-04.png " alt="">
                              <div class="bg-light text-center position-absolute bottom-0 end-0 py-2 px-3" style="border-radius: 30px 0 0 0;">
                                  <h5 class="m-0">Animasi</h5>
                                  <small class="text-danger">6 Materi</small>
                              </div>
                          </a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                  <a class="position-relative d-block h-100 overflow-hidden" href="/Dkv">
                      <img class="img-fluid position-absolute w-100 h-100" src="https://asset.kompas.com/crops/K4dJTvUIhBhNwu0fgjZYDOp1iKA=/0x0:1280x853/750x500/data/photo/2023/01/11/63bee80957fca.jpg" alt="" style="object-fit: cover;">
                      <div class="bg-light text-center position-absolute bottom-0 end-0 py-2 px-3" style="border-radius: 30px 0 0 0;">
                          <h5 class="m-0">DKV</h5>
                          <small class="text-danger">9 Materi</small>
                      </div>  
                  </a>
              </div>
          </div>
      </div>
  </div>
  <!-- Categories Start -->

    
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
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jalan Derwati</p>
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
    <script src ="js/bootstrap.bundle.min.js" ></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>