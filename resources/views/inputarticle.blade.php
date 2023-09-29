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
                      <a href="/Product" class="dropdown-item">Produk</a>
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
                    <h1 class="display-3 text-white animated slideInDown">Input Artikel</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/Home">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Input</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


<div class="container mt-5">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-danger px-3">Input</h6>
        <h1 class="mb-5">Artikel</h1>
    </div>
</div>
    
<div class="container-xxl py-5" >
    <div class="row g-4 justify-content-center" >
    <div class="col-lg-6">
<section class="container-i">
    <form action="http://192.168.1.4:8000/api/create" method="post" enctype="multipart/form-data" class="form">
        <div class="input-box">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" placeholder="Enter Title" required />
        </div>
        <div class="input-box">
            <label for="description">Description</label>
            <input type="text" id="description" name="description" placeholder="Enter Description" required />
        </div>
        <div class="input-box">
            <label for="user_id">User ID</label>
            <input type="text" id="user_id" name="user_id" placeholder="Enter User ID" required />
        </div>
        <div class="input-box">
            <label for="category_id">Category ID</label>
            <input type="text" id="categori_id" name="categori_id" placeholder="Enter Category ID" required />
        </div>
        <div class="input-box">
            <label for="image">Image</label>
            <input type="file" id="image[]" name="image[]" required />
        </div>
    
        <button type="submit" href="/article">Submit</button>
    </form>
    
    <?php
    // require 'vendor/autoload.php'; //? Include autoload file dari Guzzle
    
    use GuzzleHttp\Client;
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $client = new Client();
    
        // Mengirim permintaan ke API
        $response = $client->post('URL_API_ANDA', [
            'multipart' => [
                [
                    'name' => 'title',
                    'contents' => $_POST['title']
                ],
                [
                    'name' => 'description',
                    'contents' => $_POST['description']
                ],
                [
                    'name' => 'user_id',
                    'contents' => $_POST['user_id']
                ],
                [
                    'name' => 'categori_id',
                    'contents' => $_POST['categori_id']
                ],
                [
                    'name' => 'image[]',
                    'contents' => fopen($_FILES['image']['tmp_name'], 'r') // Menggunakan file yang diunggah
                ]
            ]
        ]);
    
        // Mengecek respons dari API
        $data = json_decode($response->getBody(), true);
    
        // Menggunakan data respons sesuai kebutuhan Anda
        // ...
    
        // Redirect atau menampilkan pesan sukses
        header('Location: success.php');
    }
    ?>
        
<!-- Modal -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Success!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Data has been successfully submitted.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

  </section>
    </div>
    </div>
</div>

<div class="row g-4 justify-content-center" >
    <div class="text-center position-relative overflow-hidden">  
      <a href="/Article"class="btn my-button align-self-start px-3"   class="btn btn-red btn-detail" style="border-radius: 30px 30px 30px 30px;"><- Artikel</a>                
    
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
</body>

</html>