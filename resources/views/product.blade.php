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
               <span class="material-icons-outlined"><a href="#" class="text-dark"> logout </span>
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
                      <a href="/Product" class="dropdown-item bg-danger text-white active">Produk</a>
                      <a href="/KaryaSiswa" class="dropdown-item">KaryaSiswa</a>
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
                    <h1 class="display-3 text-white animated slideInDown">List Produk</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/Home">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Produk</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container swiper"id="Produk">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-danger px-3">List</h6>
            <h1 class="mb-5" >Produk</h1>
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

                <div class="row g-4 justify-content-center" >
                  <div class="text-center position-relative overflow-hidden">  
                    <a href="/InputProduct"class="btn my-button align-self-start px-3"   class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;">Input Product -></a>                
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