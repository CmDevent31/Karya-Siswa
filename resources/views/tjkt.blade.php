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
                        <a href="/Pembelajaran" class="dropdown-item text-white bg-danger active">Studi</a>
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
    <div class="container-fluid bg-danger py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Jurusan</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/Home">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="/Pembelajaran">Program Studi</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="/Keahlian">Keahlian</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">TJKT</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->



    
{{-- content --}}
<div class="container mt-5">
  <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
    <h6 class="section-title bg-white text-center text-danger px-3">Jurusan</h6>
    <h1 class="mb-5">TJKT</h1>
  </div>
</div>

{{-- content --}}
<div class="container-xxl py-5" >
  <div class="container">
      <div class="row g-5">
        <div class="col-lg-7 order-lg-1">
         <blockquote><h2 class="featurette-heading fw-normal lh-1">Rasional</h2></blockquote>
          <p align="justify">Dasar-dasar Teknik Jaringan Komputer dan Telekomunikasi adalah mata pelajaran yang berisi kompetensi-kompetensi yang mendasari penguasaan keahlian Teknik Jaringan Komputer dan Teknik Telekomunikasi.</p>
          <p align="justify"> Mata pelajaran Dasar-Dasar Teknik Jaringan Komputer dan Telekomunikasi berfungsi untuk membekali peserta didik dengan seperangkat....... </p>
          <a class="btn my-button align-self-start px-3" type="button" data-bs-toggle="modal" data-bs-target="#modal1" >Selengkapnya</a>
          <br><br><br><blockquote><h2 class="featurette-heading fw-normal lh-1">Tujuan Belajar</h2></blockquote>
        <p align="justify">Mata pelajaran ini bertujuan membekali peserta didik dengan dasar-dasar pengetahuan, keterampilan, dan sikap (hard skills dan soft skills) yang diarahkan untuk mengembangkan kemampuan sebagai berikut:
         <br> 1. memahami proses bisnis di bidang Teknik Jaringan Komputer.....
         <br><br> <a class="btn my-button align-self-start px-3" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1" >Selengkapnya</a>

         <br><br><br><blockquote><h2 class="featurette-heading fw-normal lh-1">Karakteristik Mata Pelajaran        </h2></blockquote>
         <p align="justify">Mata pelajaran ini memiliki elemen materi sebagai berikut: proses bisnis di bidang teknik jaringan komputer dan telekomunikasi, wawasan perkembangan bidang teknik jaringan komputer dan telekomunikasi, entrepreneurship dan job profile di bidang teknik jaringan komputer dan telekomunikasi, orientasi dasar teknik jaringan..
          <br><br> <a class="btn my-button align-self-start px-3" type="button" data-bs-toggle="modal" data-bs-target="#modal" >Selengkapnya</a>

         </p>

        </p>
        </div>
        
        <div class="col-lg-5 order-lg-2">
          <img src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/05/TJKT.jpg" style="border-radius: 30px 30px 30px 30px;" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
        </div>
        
      </div>
      <br>

      
</div>
</div>
  
       

            <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Rasional
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body" align="justify">
                  pengetahuan, keterampilan, dan sikap agar memiliki dasar yang kuat dalam mempelajari mata pelajaran konsentrasi keahlian di fase F. Lingkup materi mata pelajaran ini meliputi wawasan sis
                    tem dan cara pengukuran di bidang Teknik Jaringan Komputer dan Telekomunikasi.
                    <br><br>Pembelajaran dapat dilakukan menggunakan berbagai pendekatan, strategi, metode serta model yang sesuai dengan karakteristik kompetensi yang harus dipelajari, sehingga dapat menciptakan pembelajaran yang interaktif, inspiratif, menyenangkan, menantang, dan memotivasi peserta didik untuk berpartisipasi aktif, serta memberikan ruang yang cukup bagi prakarsa, kreativitas, kemandirian sesuai dengan bakat, minat, renjana, dan perkembangan fisik serta psikologis peserta didik. Peserta didik diarahkan untuk menemukan sendiri berbagai fakta, membangun konsep dan nilai-nilai baru secara mandiri serta memahami dan menerapkan aspek digital consumer behaviour. Model-model pembelajaran yang dapat digunakan antara lain Project-Based Learning, Teaching Factory, Discovery-Based Learning, Problem-Based Learning, Inquiry-Based Learning, atau model lainnya serta metode yang relevan.
                    <br><br> Mata pelajaran ini berkontribusi dalam membentuk peserta didik memiliki keahlian pada bidang Teknik Jaringan Komputer dan Telekomunikasi, meningkatkan lebih lanjut kemampuan logika dan teknologi digital (computational thinking), yaitu suatu cara berpikir yang memungkinkan untuk menguraikan suatu masalah menjadi beberapa bagian yang lebih kecil dan sederhana, menemukan pola masalah, serta menyusun langkah- langkah solusi mengatasi masalah. Pembelajarannya akan membiasakan peserta didik bernalar kritis dalam menghadapi permasalahan, bekerja mandiri, serta kreatif dalam mengembangkan solusi permasalahan di dunia usaha dan industri.
                  </div>
                  <div class="modal-footer">
                      <a class="btn my-button align-self-start px-3"data-bs-dismiss="modal">Close</a>
                  </div>
                </div>
              </div>
            </div>
      <hr class="featurette-divider">
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tujuan Belajar
              </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" align="left">
                  2. memahami wawasan perkembangan bidang Teknik Jaringan Komputer dan Telekomunikasi;
              <br>3. memahami profesi dan kewirausahaan (job profile dan technopreneurship), serta peluang usaha di bidang Teknik Jaringan Komputer dan Telekomunikasi;
              <br>4. memahami lingkup kerja pada bidang Teknik Jaringan Komputer dan Telekomunikasi;
              <br>5. menerapkan Keselamatan dan Kesehatan Kerja serta Lingkungan Hidup (K3LH) di lingkungan kerjanya;
              <br>6. memahami penerapan media dan jaringan telekomunikasi; 
              <br>7. dan memahami prinsip dasar pengukuran dalam Teknik Jaringan Komputer dan Telekomunikasi. 
            </div>
            <div class="modal-footer">
                <a class="btn my-button align-self-start px-3"data-bs-dismiss="modal">Close</a>
            </div>
          </div>
        </div>
      </div>


<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Karakteristik Mata Pelajaran
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" align="justify">
        komputer dan telekomunikasi, media dan jaringan telekomunikasi, dan prinsip dasar pengukuran.

Pada hakikatnya mata pelajaran ini berfokus pada kompetensi bersifat dasar yang harus dimiliki oleh tenaga admin database, analis sistem komputer, dosen ilmu komputer, peneliti, perancang jaringan komputer, perancang sistem komputer dan jabatan lain sesuai dengan perkembangan dunia kerja. Selain itu peserta didik diberikan pemahaman tentang proses bisnis, perkembangan penerapan teknologi dan isu-isu global, entrepreneur profile, job profile, peluang usaha dan pekerjaan/profesi.
<br><br>
Pengembangan soft skills pada mata pelajaran ini sangat penting sebagai bekal dasar di dalam membangun etos kerja, meliputi: komunikasi, critical thinking, kolaborasi, dan kreativitas. Soft skills pada mata pelajaran ini menjadi fondasi dalam pengembangan hard skills seperti menginstalasi, memelihara, dan penanganan gangguan (troubleshooting) dalam bidang Teknik Jaringan Komputer dan Telekomunikasi.
<br><br>

Elemen dan deskripsi mata pelajaran ini adalah sebagai berikut.
<br>

Proses bisnis di bidang teknik jaringan komputer dan telekomunikasi
Meliputi proses bisnis pada bidang teknik jaringan komputer dan telekomunikasi, meliputi customer handling, perencanaan, analisis kebutuhan pelanggan, strategi implementasi (instalasi, konfigurasi, monitoring), dan pelayanan pada pelanggan sebagai implementasi penerapan budaya mutu.
<br><br>

Perkembangan teknologi di bidang teknik jaringan komputer dan telekomunikasi
Meliputi perkembangan teknologi pada perangkat teknik jaringan komputer dan telekomunikasi termasuk 5G, Microwave Link, IPV6, teknologi serat optik terkini, IoT, Data Centre, Cloud Computing, dan Information Security.
<br><br>

Profesi dan Kewirausahaan (job-profile dan technopreneur) di bidang teknik jaringan komputer dan telekomunikasi
Meliputi jenis-jenis profesi dan kewirausahaan (job- profil dan technopreneur), personal branding serta peluang usaha di bidang Teknik Jaringan Komputer dan Telekomunikasi.
<br><br>

Keselamatan dan Kesehatan Kerja Lingkungan Hidup (K3LH) dan budaya kerja industri
Meliputi penerapan K3LH dan budaya kerja industri, antara lain: praktik-praktik kerja yang aman, bahaya- bahaya di tempat kerja, prosedur-prosedur dalam keadaan darurat, dan penerapan budaya kerja industri (Ringkas, Rapi, Resik, Rawat, Rajin), termasuk pencegahan kecelakaan kerja di tempat tinggi dan prosedur kerja di tempat tinggi (pemanjatan).
<br><br>

Dasar-dasar teknik jaringan komputer dan telekomunikasi
Meliputi pemahaman dasar penggunaan dan konfigurasi peralatan/teknologi di bidang jaringan komputer dan telekomunikasi.
<br><br>

Media dan Jaringan Telekomunikasi
Meliputi pemahaman prinsip dasar sistem IPV4/ IPV6, TCP IP, Networking Service, Sistem Keamanan Jaringan Telekomunikasi, Sistem Seluler, Sistem Microwave, Sistem VSAT IP, Sistem Optik, dan Sistem WLAN.
<br><br>

Penggunaan Alat Ukur Jaringan
Meliputi pemahaman tentang jenis alat ukur dan penggunaannya dalam pemeliharaan jaringan komputer dan sistem telekomunikasi.
      </div>
      <div class="modal-footer">
        <a class="btn my-button align-self-start px-3"data-bs-dismiss="modal">Close</a>
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
