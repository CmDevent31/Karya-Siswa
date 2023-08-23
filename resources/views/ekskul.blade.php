@extends('layouts.main')
@section('ekskul')
    



<!doctype html>
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
  <body class="">
<main>
 

    <!-- Header Start -->
    <div class="container-fluid bg-danger py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Ekskul</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/Home">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Ekskul</li>
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
    <h6 class="section-title bg-white text-center text-danger px-3">Ekskul</h6>
    <h1 class="mb-5">Ekstrakulikuler</h1>
</div>
<div id="ekskul-container">
  <!-- Data ekskul akan ditampilkan di sini -->
</div>
<script>
  $(document).ready(function() {
      $.get('/api/listekskul', function(data) {
          var ekskulContainer = $('#ekskul-container'); // Pilih elemen kontainer
          
          data.forEach(function(ekskul, index) {
              var ekskulHtml = `
                  <hr class="featurette-divider">
                  <div class="row featurette">
                      <div class="col-md-7 ${index % 2 === 0 ? 'order-md-2' : ''}">
                          <h2 ${index % 2 === 0 ? 'align="left"' : 'align="right"'} id="ekskul-title">${ekskul.title}</h2>
                          <p align="justify" class="${index % 2 === 0 ? 'lead-left' : ''}" id="ekskul-description">${ekskul.description}</p>
                      </div>
                      <div class="col-md-4 ${index % 2 === 0 ? 'order-md-1' : ''}">
                          <img src="${ekskul.image}" style="border-radius: 30px 30px 30px 30px;" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" alt="Ekskul Image">
                      </div>
                  </div>
              `;
              
              ekskulContainer.append(ekskulHtml); // Tambahkan elemen baru ke kontainer
          });
      });
  });
</script>
<hr class="featurette-divider">
    
</main>

<!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s" style="border-radius: 30px 30px 0 0;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 align="left" class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="/PrivacyPolicy">Privacy Policy</a>
                    <a class="btn btn-link" href="/TermsCondition">Terms & Condition</a>
                    <a class="btn btn-link" href="/FaqsHelp">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 align="left" class="text-white mb-3">Contact</h4>
                    <p align="left" class="text-white mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p align="left" class="text-white mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p align="left" class="text-white mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2"> 
                        <a class="text-danger btn btn-outline-light btn-social" href="https://www.instagram.com/ghinanms/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 align="left" class="text-white mb-3">Maps</h4>
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
                    <h4 align="left"      class="text-white mb-3">Newsletter</h4>
                    <p align="left" class="text-white mb-3">Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

  </body>
</html>
@endsection