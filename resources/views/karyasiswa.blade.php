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
                <a href="/Home" class="nav-item nav-link">Home</a>
                <div class="nav-item dropdown text-danger">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kegiatan</a>
                    <div class="dropdown-menu fade-down m-9">
                        <a href="/Pembelajaran" class="dropdown-item">Studi</a>
                        <a href="/Ekskul" class="dropdown-item">Ekskul</a>
                        <a href="/GaleriSekolah" class="dropdown-item">GaleriSekolah</a>
                    </div>
                </div>
                <a href="/Prestasi" class="nav-item nav-link">Prestasi</a>
                <a href="/Quotes" class="nav-item nav-link">Quotes</a>
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
                      <a href="/KaryaSiswa" class="dropdown-item bg-danger text-white active">KaryaSiswa</a>
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
                    <h1 class="display-3 text-white animated slideInDown">Karya Siswa</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/Home">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Karya</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
     
{{-- card title --}}
<div class="container "id="Karya">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-danger px-3">Karya</h6>
        <h1 class="mb-5">Karya Siswa</h1>
    </div>
     
    <div class="row g-4 justify-content-end"> <!-- Menggunakan 'justify-content-end' untuk menggeser ke kanan -->
      <div class="col-auto"> <!-- Menggunakan kolom otomatis untuk membatasi lebar tombol -->
          <div class="text-center position-relative overflow-hidden">
              <a href="/InputKarya" class="btn my-button px-3" style="border-radius: 30px 30px 30px 30px;">
                  Input Karya ->
              </a>
          </div>
      </div>
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
            <div class="col">
              <div class="card text-center  h-100">
                <img src="https://media.japanesestation.com/images/750x422/7-Karya-Seni-Yang-Indah-Ini-Terbuat-Dari-Sampah-4.jpg" class="img-fluid rounded-top" alt="Responsive image" style="object-fit: cover">
                <div class="card-body">
                  <h5 class="card-title">Karya 4</h5>
                  <p class="card-text"  align="justify">Lorem ipsum dolor sit amet, consectetur......</p>
                </div>
                <div class="card-footer ">
                  <a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal17" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Read More</a>                
                </div>
                
              </div>
            </div>
            <div class="col">
              <div class="card text-center  h-100">
                <img src="https://media.japanesestation.com/images/750x422/7-Karya-Seni-Yang-Indah-Ini-Terbuat-Dari-Sampah-4.jpg" class="img-fluid rounded-top" alt="Responsive image" style="object-fit: cover">
                <div class="card-body">
                  <h5 class="card-title">Karya 5</h5>
                  <p class="card-text"  align="justify">Lorem ipsum dolor sit amet, consectetur......</p>
                </div>
                <div class="card-footer ">
                  <a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal18" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Read More</a>                
                </div>
                
              </div>
            </div>
            <div class="col">
              <div class="card text-center  h-100">
                <img src="https://media.japanesestation.com/images/750x422/7-Karya-Seni-Yang-Indah-Ini-Terbuat-Dari-Sampah-4.jpg" class="img-fluid rounded-top" alt="Responsive image" style="object-fit: cover">
                <div class="card-body">
                  <h5 class="card-title">Karya 6</h5>
                  <p class="card-text"  align="justify">Lorem ipsum dolor sit amet, consectetur......</p>
                </div>
                <div class="card-footer ">
                  <a href="#"class="btn my-button align-self-start px-3"  data-bs-toggle="modal" data-bs-target="#modal19" class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Read More</a>                
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
  <div class="modal fade show" id="modal17" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
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
                              <h1>Karya 4</h1>
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
  <div class="modal fade show" id="modal18" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
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
                              <h1>Karya 5</h1>
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
  <div class="modal fade show" id="modal19" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" role="dialog">
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
                              <h1>Karya 6</h1>
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
           
            
<!-- Modal -->
<div id="successModal" class="popup">
  <div class="popup-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <p>Karya Berhasil Disimpan!</p>
      <button type="button" class="btn btn-primary" onclick="closeModal()">OK</button>
  </div>
</div>
<style>
  /* Styles untuk modal pop-up */
  .popup {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: white;
      padding: 20px;
      border-radius: 10px; /* Tambahkan radius border untuk membuatnya berbentuk rounded */
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      z-index: 1;
  }

  .popup-content {
      text-align: center;
  }

  .popup-content .close {
      position: absolute;
      top: 10px;
      right: 10px;
      cursor: pointer;
      color: red; /* Ganti warna ikon close menjadi merah */
  }

  .popup-content p {
      margin-bottom: 15px; /* Berikan jarak bawah pada paragraf */
  }

  .popup-content button {
      background-color: red; /* Ganti warna tombol menjadi merah */
      color: white; /* Ganti warna teks tombol menjadi putih */
      border: none;
      border-radius: 5px; /* Tambahkan radius border untuk membuatnya berbentuk rounded */
      padding: 10px 20px;
      cursor: pointer;
      transition: background-color 0.3s; /* Efek hover untuk perubahan warna latar belakang */
  }

  /* Efek saat tombol hover */
  .popup-content button:hover {
      background-color: rgb(255, 0, 0); /* Warna latar belakang saat hover */
  }

  /* Efek saat tombol ditekan (mousedown) */
  .popup-content button:active {
      background-color: darkred; /* Warna latar belakang saat tombol ditekan */
  }
</style>




<script>
  // JavaScript untuk menampilkan dan menyembunyikan modal
  function showModal() {
      const successModal = document.getElementById("successModal");
      successModal.style.display = "block";
  }

  function closeModal() {
      const successModal = document.getElementById("successModal");
      successModal.style.display = "none";
  }
</script>

        <script>
            // JavaScript code to handle the modal
            document.addEventListener("DOMContentLoaded", function() {
                const urlParams = new URLSearchParams(window.location.search);
                const successParam = urlParams.get("success");
                
                if (successParam === "true") {
                    const successModal = document.getElementById("successModal");
                    const closeModalButton = successModal.querySelector(".close");
                    
                    successModal.style.display = "block";
                    
                    closeModalButton.addEventListener("click", function() {
                        successModal.style.display = "none";
                    });
                    
                    // Close the modal after a certain time (e.g., 5 seconds)
                    setTimeout(function() {
                        successModal.style.display = "none";
                    }, 5000); // Adjust the time as needed
                }
            });
        </script>


    
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