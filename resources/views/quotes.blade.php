@extends('layouts.main')
@section('quotes')
    

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
</head>

<body>
   
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0" style="border-radius: 0 0 30px 30px;">
        <a class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-danger"><i class="fas fa-users me-3"></i>KaryaSiswa</h2>
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
                        <a href="/Quotes" class="dropdown-item text-white bg-danger active">Quotes</a>
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
                    <h1 class="display-3 text-white animated slideInDown">Quotes</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/Home">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Quotes</li>
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
        <h6 class="section-title bg-white text-center text-danger px-3">Quotes</h6>
        <h1 class="mb-5">Quotes Para Guru</h1>
    </div>
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
    <div class="col-lg-15">
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3 rounded">
            <div class="col">
              <div class="card text-center  h-100 mb-3">
                <img src="img/1692280399658.jpeg">
                <div class="card-body">
                  <h5 class="card-title">𝐐𝐮𝐨𝐭𝐞𝐬 𝐨𝐟 𝐓𝐡𝐞 𝐃𝐚𝐲</h5>
                  <p class="card-text">
                   <br><b> Haii Sobat Prima👋🏻
                    Gimana nih hasil rapot nya?😁. Semoga memuaskan sesuai usaha Sobat Prima masing-masing ,apapun hasilnya terima dengan lapang dada ya.
                    Biar ga patah semangat cek Quotes motivasi dari guru kita diatas yukk.</br></b>
                    
                    <br><br><b>𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                    Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                    
                    𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                    Sekolahnya Sang Juara</br></b>  
                    
                    <br>**********<br>
                    #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022 #reachyourdream</p>
                    <div class=" d-flex justify-content-center ">
                        <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CfTJwbCh9Gh/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card text-center  h-100 mb-3">
                  <img src="img/1692280434841.jpeg">
                  <div class="card-body">
                    <h5 class="card-title">𝐐𝐮𝐨𝐭𝐞𝐬 𝐨𝐟 𝐓𝐡𝐞 𝐃𝐚𝐲</h5>
                    <p class="card-text"><br><b>Haii Sobat Prima👋🏻
                        Hari Senin harus lebih semangat dong yaaa🔥
                        Jangan lupa, lakukan aktivitas produktif yang bisa memberi dampak positif untuk diri kamu ya.
                        Ada motivasi nih buat Sobat Prima, supaya lebih semangat menjalankan hal yang positif. Cek postingan di atas yukk!
                    </br></b>
                    <br><b>𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                        Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                        
                        𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                        Sekolahnya Sang Juara</br></b>
                        
                        <br>**********<br>
                        #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022 #reachyourdream</p>
                        <div class=" d-flex justify-content-center ">
                            <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CeuhDtZBv_a/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-center  h-100 mb-3">
                  <img src="img/1692280442038.jpeg">
                  <div class="card-body">
                    <h5 class="card-title">𝐐𝐮𝐨𝐭𝐞𝐬 𝐨𝐟 𝐓𝐡𝐞 𝐃𝐚𝐲</h5>
                    <p class="card-text"><br><b>Haii Sobat Prima👋🏻
                        Hari pertama PAT dapet motivasi yang bagus nih supaya lebih semangat belajar nya, cek postingan di atas yukk!
                    </br></b>
                    <br><br><br><br><b> 𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                        Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                        
                        𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                        Sekolahnya Sang Juara</br></b>
                        
                        <br>**********<br>
                        #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022 #reachyourdream</p>
                        <div class=" d-flex justify-content-center ">
                            <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CefdcDfhu7p/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-center  h-100 mb-3">
                  <img src="img/1692280455179.jpeg">
                  <div class="card-body">
                    <h5 class="card-title">𝐐𝐮𝐨𝐭𝐞𝐬 𝐨𝐟 𝐓𝐡𝐞 𝐃𝐚𝐲</h5>
                    <p class="card-text"><br><b>Hi sobat Prima!
                        Quotes Of the day kali ini berasal dari pa Fajar nih guys keren banget ya!
                        Mimin setuju banget nih, hidup itu penuh perjuangan dan pengorbanan, juga sertai dengan keikhlasan ya sobat!
                    </br></b>
                    <br><br><br><b> 𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                        Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                        
                        𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                        Sekolahnya Sang Juara</br></b>
                        
                        <br> **********<br>
                        #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022 #ReachYourDream #quotesoftheday</p>
                        <div class=" d-flex justify-content-center ">
                            <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/Cd4peBjhkwa/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-center  h-100 mb-3">
                  <img src="img/1692280462719.jpeg">
                  <div class="card-body">
                    <h5 class="card-title">𝐐𝐮𝐨𝐭𝐞𝐬 𝐨𝐟 𝐓𝐡𝐞 𝐃𝐚𝐲</h5>
                    <p class="card-text"><br><b>Haii Sobat Prima👋🏻
                        Gimana nih kabarnya? Semangat lagi ya sekolah nya setelah liburan sejenak😆🔥
                        Awali hari senin kalian dengan hal yang produktif ya. Untuk membuka hari kalian, quotes di atas bisa jadi motivasi buat kalian loh. Di cek yuu!!
                    </br></b>
                   <br> <br><b> 𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                        Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                        
                        𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                        Sekolahnya Sang Juara</br></b>
                        
                        <br>**********<br>
                        #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022 #ReachYourDream #quotesoftheday</p>
                        <div class=" d-flex justify-content-center ">
                            <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CdmyAKMBhtr/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-center  h-100 mb-3">
                  <img src="img/1692280471308.jpeg">
                  <div class="card-body">
                    <h5 class="card-title">𝐐𝐮𝐨𝐭𝐞𝐬 𝐨𝐟 𝐓𝐡𝐞 𝐃𝐚𝐲</h5>
                    <p class="card-text"><br><b>Haii Sobat Prima👋🏻
                        Awal liburan pasti pada mageran ya🤭. Jangan lupa tetap produktif kapan pun dimana pun yaa.
                        Nih, buat Sobat Prima yang lagi ga semangat. Bisa langsung cek poster di atas ya, biar semangat dan optimis setiap harinya!
                    </br></b>
                            <br><br><br><b> 𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                        Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                        
                        𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                        Sekolahnya Sang Juara</br></b>
                        
                        <br>****<br>
                        #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022 #ReachYourDream #quotesoftheday</p>
                        <div class=" d-flex justify-content-center ">
                            <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CcxDSdtPDWP/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-center  h-100 mb-3">
                  <img src="img/1692280477293.jpeg">
                  <div class="card-body">
                    <h5 class="card-title">𝐐𝐮𝐨𝐭𝐞𝐬 𝐨𝐟 𝐓𝐡𝐞 𝐃𝐚𝐲</h5>
                    <p class="card-text"><br><b>Haii Sobat Prima👋🏻
                        Selamat hari senin,jangan lupa tetap produktif ya!
                        Tetap menjadi jati diri kamu, be your self and be happy. Semangatt🔥🔥
                    </br></b>
                            <br><br><br><br><br><b> 𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                        Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                        
                        𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                        Sekolahnya Sang Juara</br></b>
                        
                            <br> **********<br>
                        #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022 #ReachYourDream</p>
                        <div class=" d-flex justify-content-center ">
                            <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CchteSXhHBX/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-center  h-100 mb-3">
                  <img src="img/1692280492645.jpeg">
                  <div class="card-body">
                    <h5 class="card-title">𝐐𝐮𝐨𝐭𝐞𝐬 𝐨𝐟 𝐓𝐡𝐞 𝐃𝐚𝐲</h5>
                    <p class="card-text"><br><b>Haii Sobat Prima👋🏻
                        Gimana nih harinya?? Masih suka ngerasa gagal sama pencapaian sendiri? Mulai sekarang belajar ikhlas dan terima keadaan yuk. Belajar untuk terus bersyukur yaa, Semangatt!!!
                    </br></b>
                    <br><br><br><br><b> 𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                        Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                        
                        𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                        Sekolahnya Sang Juara</br></b>
                        
                            <br>**********<br>
                        #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022</p>
                        <div class=" d-flex justify-content-center ">
                            <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CbZeMA7OBwN/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-center  h-100 mb-3">
                  <img src="img/1692280526750.jpeg">
                  <div class="card-body">
                    <h5 class="card-title">𝐐𝐮𝐨𝐭𝐞𝐬 𝐨𝐟 𝐓𝐡𝐞 𝐃𝐚𝐲</h5>
                    <p class="card-text"><br><b>Hi sobat prima!
                        Sudahkah kamu bersyukur hari ini? Hidup itu singkat maka kamu harus berani dalam mengambil keputusan yang tepat tentang apa yang pantas diperjuangkan dan diperbaiki.
                    </br></b>
                    <br><br><br><br><b> 𝐏𝐑𝐈𝐌𝐀𝐒𝐄𝐑𝐔
                        Makin Prima dan Seru dalam Layanan, Karakter dan Prestasi
                        
                        𝐒𝐌𝐊 𝐓𝐄𝐋𝐊𝐎𝐌 𝐁𝐀𝐍𝐃𝐔𝐍𝐆
                        Sekolahnya Sang Juara</br></b>
                        
                            <br>**********<br>
                        #smktelkombandung #smktelbdg #telkomschools #smkno1bandung #smkswastaterbaik #smkhebatsmkbisa #sekolahnyasangjuara #primaseru2022</p>
                        <div class=" d-flex justify-content-center ">
                            <a class="btn my-button align-self-start-sm-square btn-danger mx-1" style="border-radius: 30px 30px 30px 30px;"href="https://www.instagram.com/p/CZtLVHch-q6/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
              </div>
        </div>
          </div>      
        </div>
    </div>
  </div>
        



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
@endsection
