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
<div class="container" id="Karya">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-danger px-3">Product</h6>
        <h1 class="mb-5">Product Siswa</h1>
    </div>
    <div class="row g-4 justify-content-end"> <!-- Menggunakan 'justify-content-end' untuk menggeser ke kanan -->
        <div class="col-auto"> <!-- Menggunakan kolom otomatis untuk membatasi lebar tombol -->
            <div class="text-center position-relative overflow-hidden">
                <a href="/InputProduct" class="btn my-button px-3" style="border-radius: 30px 30px 30px 30px;">
                    Input Product ->
                </a>
            </div>
        </div>
    </div>
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <div class="col-lg-15">
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-3 rounded" id="product-container">
                <!-- Data produk akan ditampilkan di sini -->
            </div>
        </div>
    </div>
    <?php
    // URL API yang akan diakses
    $apiUrl = 'http://192.168.1.9:8000/api/listproduk';
    
    // Inisialisasi Guzzle Client
    $client = new GuzzleHttp\Client();
    
    try {
        // Kirim permintaan GET ke API
        $response = $client->get($apiUrl);
    
        // Periksa kode status HTTP
        if ($response->getStatusCode() == 200) {
            // Dapatkan data JSON dari respons
            $data = json_decode($response->getBody(), true);
    
            // Loop melalui data dan tampilkan di halaman HTML
            foreach ($data as $index => $product) {
                if (is_array($product)) { // Periksa apakah $product adalah array
                    $index = (int)$index; // Pastikan $index adalah integer
    
                    // Sesuaikan kelas dan tampilan berdasarkan indeks
                    $orderClass = $index % 2 === 0 ? 'order-lg-2' : 'order-lg-1';
                    $align = $index % 2 === 0 ? 'left' : 'right';
    
                    // Ambil data yang dibutuhkan dari $product
                    $image = isset($product['image']) ? $product['image'] : 'default-image.jpg';
                    $name = isset($product['name']) ? $product['name'] : 'Judul Produk';
                    $description = isset($product['description']) ? $product['description'] : 'Deskripsi produk...';
                    $productId = isset($product['id']) ? $product['id'] : '';
    
                    // Cetak informasi produk untuk tujuan debugging
                    // Hapus ini setelah data tampil dengan benar
                 
    
                    echo '
                    <div class="col">
                      <div class="card text-center h-100 mb-3">
                        <img src="' . $image . '" class="img-fluid rounded-top" alt="Responsive image" style="object-fit: cover">
                        <div class="card-body">
                          <h5 class="card-title">' . $name . '</h5>
                          <p class="card-text" align="justify">' . $description . '</p>
                        </div>  
                        <div class="card-footer">
                          <button class="btn my-button align-self-start px-3 btn-detail" data-product-id="' . $productId . '" data-bs-toggle="modal" data-bs-target="#modal14" style="border-radius: 30px 30px 30px 30px;">Read More</button>
                        </div>
                      </div>
                    </div>
                    ';
                }
            }
        } else {
            echo 'Gagal mengambil data dari API.';
        }
    } catch (GuzzleHttp\Exception\RequestException $e) {
        echo 'Error: ' . $e->getMessage();
    }
    ?>
        
    <div class="modal fade" id="modal14" tabindex="-1" aria-labelledby="modal14Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal14Label">Detail Produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Di sini, Anda dapat menambahkan elemen HTML untuk menampilkan detail produk -->
                    <div id="product-details">
                        <!-- Data produk akan ditampilkan di sini -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.btn-detail').click(function() {
                var productId = $(this).data('product-id');
                $.ajax({
                    url: 'http://192.168.1.9:8000/api/detailproduk/' + productId,
                    method: 'GET',
                    success: function(data) {
                        // Di sini Anda dapat mengisi detail produk ke dalam modal
                        $('#product-details').html(data);
                    },
                    error: function() {
                        alert('Gagal mengambil detail produk.');
                    }
                });
            });
        });
    </script>
    
    
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <?php

use GuzzleHttp\Client;

$apiUrl = 'http://192.168.1.9:8000/api/listproduk';
$detailApiUrl = 'http://192.168.1.4:8000/api/detailproduk/';

$client = new Client();

// Mengambil data produk ringkas
$response = $client->get($apiUrl);
$products = json_decode($response->getBody(), true)['data'];

// Mengambil detai  l produk
if (isset($_GET['productId'])) {
    $productId = $_GET['productId'];
    $detailResponse = $client->get($detailApiUrl . $productId);
    $productDetail = json_decode($detailResponse->getBody(), true)['data'];

    // Mengirim data produk detail sebagai JSON
    header('Content-Type: application/json');
    echo json_encode($productDetail);
    exit;
}

// Mengirim data produk ringkas sebagai JSON
header('Content-Type: application/json');
echo json_encode($products);
?>

    
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