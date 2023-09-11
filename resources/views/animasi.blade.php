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
                            <li class="breadcrumb-item text-white active" aria-current="page">Animasi</li>
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
    <h1 class="mb-5">Animasi</h1>
  </div>
</div>

{{-- content --}}
<div class="container-xxl py-5" >
    <div class="container">
        <div class="row g-5">
          <div class="col-md-7">
         <blockquote><h2 class="featurette-heading fw-normal lh-1">Animasi</h2></blockquote>
          <p align="justify">Jurusan Animasi lebih fokus dalam mempelajari teori dan teknik dalam membuat animasi 2D dan 3D, animasi film, animasi game, dan bidang lainnya yang menggunakan konten animasi. Sedangkan untuk jurusan DKV lebih fokus pada pembuatan desain, ilustrasi, fotografi, animasi, hingga marketing. 
          </p>
          <p align="justify"> Didik dengan seperangkat pengetahuan, ketrampilan, sikap, dan passion (renjana) supaya memiliki dasar yang kuat untuk mempelajari mata pelajaran selanjutnya di kelas XI dan XII.
        </p>
        <br><a class="btn my-button align-self-start px-3" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" >Selengkapnya</a>
       <br><br><br> <blockquote><h2 class="featurette-heading fw-normal lh-1">Tujuan Belajar</h2></blockquote>
        <p align="justify"> membekali peserta didik dengan dasar-dasar pengetahuan, keterampilan, dan sikap (soft skills dan hard skills) meliputi:
            <br>1. memahami profil technopreneur, peluang usaha dan pekerjaan/profesi di bidang Desain Komunikasi Visual;
            <br>2. memahami proses bisnis berbagai industri di bidang Desain Komunikasi Visual;....
            <br><br> <a class="btn my-button align-self-start px-3" type="button" data-bs-toggle="modal" data-bs-target="#modal" >Selengkapnya</a>
       <br><br><br> <blockquote><h2 class="featurette-heading fw-normal lh-1">Karakteristik Mata Pelajaran</h2></blockquote>
        <p align="justify"> Pada hakekatnya mata pelajaran Dasar-Dasar Desain Komunikasi Visual berfokus pada kompetensi bersifat dasar yang harus dimiliki oleh seniman, dan/atau pekerja seni dalam bidang desain komunikasi visual sesuai dengan perkembangan dunia kerja....
            <br><br> <a class="btn my-button align-self-start px-3" type="button" data-bs-toggle="modal" data-bs-target="#modal2" >Selengkapnya</a>

    
    </div>
        <div class="col-md-4">
          <img src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/05/333631439_6075395605850670_2324727990982906825_n.jpg" style="border-radius: 30px 30px 30px 30px;" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
        </div>
      </div>

            <hr class="featurette-divider">

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Animasi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" align="justify">
              Mata pelajaran Dasar-Dasar Desain Komunikasi Visual berfungsi untuk menumbuhkembangkan keprofesionalan dan kebanggaan peserta didik terhadap desain komunikasi visual melalui pemahaman secara utuh dan menyeluruh profil technopreneur, peluang usaha dan pekerjaan/profesi, proses bisnis di dunia industri, perkembangan teknologi di industri dan dunia kerja serta isu-isu global, teknik dasar proses produksi pada industri, ketrampilan membuat sketsa dan illustrasi untuk kebutuhan dasar rancangan desain, komposisi tipografi untuk kebutuhan dasar rancangan desain, prosedur penggunaan peralatan fotografi, komputer grafis. Selain itu, sebagai landasan pengetahuan dan ketrampilan untuk pembelajaran di kelas XI dan XII pada konsentrasi keahlian yang bersangkutan.
                  Perencanaan, pelaksanaan, dan penilaian pembelajaran dilakukan sesuai dengan karakteristik mata pelajaran dan tujuan yang ingin dicapai. Pembelajarannya menggunakan berbagai variasi model pembelajaran yang interaktif, inspiratif, menyenangkan, menantang, memotivasi peserta didik untuk terlibat aktif, serta memberikan ruang yang cukup bagi prakarsa, kreativitas, kemandirian sesuai bakat, minat, renjana, serta perkembangan fisik dan psikilogis peserta didik. Model pembelajaran yang dapat digunakan antara lain: project-based learning, problem-based learning, teaching factory, discovery-based learning, inquiry-based learning, atau metode dan model lain yang relevan.          
                  <br> <br> Mata pelajaran Dasar-Dasar Desain Komunikasi Visual berkontribusi menjadikan peserta didik memiliki kompetensi sebagai seniman, dan/atau pekerja seni dalam bidang desain komunikasi visual yang berakhlak mulia, mampu berkomunikasi, bernegoisasi dan berinteraksi antar budaya, mampu bekerja dalam tim, bertanggungjawab, memiliki kepekaan dan kepedulian terhadap situasi dan lingkungan kerja, serta kritis dan kreatif.
            </div>
            <div class="modal-footer">
                <a class="btn my-button align-self-start px-3"data-bs-dismiss="modal">Close</a>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tujuan Belajar</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" align="justify-content-center">
                3. memahami perkembangan teknologi di industri dan dunia kerja serta isu-isu global pada bidang Desain Komunikasi Visual;
               <br> 4. memahami teknik dasar proses produksi pada industri Desain Komunikasi Visual;
               <br> 5. memahami keterampilan membuat sketsa dan ilustrasi untuk kebutuhan dasar rancangan desain;
               <br> 6. memahami komposisi tipografi untuk kebutuhan dasar rancangan desain;
               <br> 7. memahami prosedur penggunaan peralatan fotografi; dan 8. memahami komputer grafis yang dibutuhkan pada pekerjaan Desain
            </div>
            <div class="modal-footer">
                <a class="btn my-button align-self-start px-3"data-bs-dismiss="modal">Close</a>
            </div>
          </div>
        </div>
      </div>
<div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Karakteristik Mata Pelajaran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" align="justify">
        Selain itu, peserta didik diberikan pemahaman tentang proses bisnis, perkembangan penerapan teknologi dan issu-issu global, profil technopreneur, job profile, peluang usaha dan pekerjaan/profesi.

        <br><br>Profil technopreneur, peluang usaha danpekerjaan/profesi bidang Desain Komunikasi Visual
Lingkup pembelajaran meliputi technopreneur dalam bidang Desain Komunikasi Visual, dan kewirausahaan serta peluang usaha di bidang seni dan ekonomi kreatif yang mampu membaca peluang pasar dan usaha, untuk membangun visi dan passion, serta melakukan pembelajaran berbasis projek nyata sebagai simulasi projek/PjBL kewirausahaan.

<br><br>Proses bisnis berbagai industri di bidang Desain Komunikasi Visual Lingkup pembelajaran meliputi pemahaman peserta didik tentang K3 di bidang Desain Komunikasi Visual, proses produksi di industri, pengetahuan tentang kepribadian yang dibutuhkan agar dapat mengembangkan pola pikir kreatif, proses kreasi untuk menghasilkan solusi desain yang tepat sasaran, aspek perawatan peralatan, potensi lokal dan kearifan lokal, dan pengelolaan SDM di industri.

<br><br>Perkembangan teknologi di industri dan dunia kerja serta isu-isu global pada bidang Desain Komunikasi Visual
Lingkup pembelajaran meliputi pemahaman peserta didik tentang perkembangan proses produksi industri Desain Komunikasi Visual mulai dari teknologi konvensional sampai dengan teknologi modern, Industri 4.0, Internet of Things, digital teknologi dalam dunia industri, isu pemanasan global, perubahan iklim, aspek-aspek ketenagakerjaan, Life Cycle produk industri sampai dengan reuse, recycling.

<br><br>Teknik dasar proses produksi pada industri Desain Komunikasi Visual Lingkup pembelajaran meliputi pemahaman pengetahuan tentang kepribadian yang dibutuhkan peserta didik agar dapat mengembangkan pola pikir kreatif melalui praktek secara mandiri dengan berpikir kritis tentang seluruh proses produksi dan teknologi serta budaya kerja yang diaplikasikan dalam industri DKV.

<br><br>Sketsa dan Ilustrasi
Lingkup pembelajaran meliputi fungsi sketsa dan ilustrasi dalam dunia Desain Komunikasi Visual beserta penguasaan teknik keterampilan membuat sketsa dan ilustrasi untuk kebutuhan dasar rancangan desain.

<br><br>Komposisi typography
Lingkup pembelajaran meliputi sejarah huruf, pengertian huruf, jenis-jenis huruf, anatomi huruf, karakter huruf, dan fungsi huruf. Penguasaan keterampilan dalam menghadirkan komposisi tipografi tentang hirarki, leading, tracking, dan kerning. ilustrasi untuk kebutuhan dasar rancangan desain.

<br><br>Fotografi dasar
Lingkup pembelajaran meliputi dasar-dasar fotografi, prinsip, estetika fotografi, dan prosedur penggunaan peralatan fotografi seperti kamera, peralatan studio fotografi, dan dapat mengidentifikasi alat yang digunakan dalam pemotretan. Menerapkan pengetahuan dan keterampilan fotografi baik penggunaan peralatan di dalam studio dan luar studio.

<br><br>Komputer grafis
Lingkup pembelajaran meliputi jenis-jenis perangkat lunak komputer grafis berbasis bitmap dan vector yang dibutuhkan dalam eksekusi desain komunikasi visual. Menerapkan keterampilan dasar tentang penggunaan tools, menu, dan klasifikasi warna dalam RGB dan CMYK untuk proses produksi manual dan digital.
      </div>
      <div class="modal-footer">
        <a class="btn my-button align-self-start px-3"data-bs-dismiss="modal">Close</a>
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