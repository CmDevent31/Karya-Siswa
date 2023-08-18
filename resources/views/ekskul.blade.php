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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/ekskul.css">    
  </head>
  <body class="">
<main>
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
                    <a href="/Home" class="nav-link dropdown-toggle px-4 px-lg-2 nav-item nav-link " data-bs-toggle="dropdown">Kegiatan</a>
                    <div class="dropdown-menu fade-down m-9">
                        <a href="/Pembelajaran" class="dropdown-item">Pembelajaran</a>
                        <a href="/Ekskul" class="dropdown-item bg-danger text-white active">Ekskul</a>
                        <a href="/Testimoni" class="dropdown-item">Testimoni</a>
                    </div>
                </div>
                <a href="/Prestasi" class="nav-item nav-link">Prestasi</a>
                <a href="/Guru" class="nav-item nav-link">GuruKami</a>
                <a href="/TentangKami" class="nav-item nav-link">TentangKami</a>
                <a href="/Login" class="nav-item nav-link">Login</a>
                <div class="nav-item dropdown text-danger">
                    <a href="#" class="nav-link dropdown-toggle px-4 px-lg-2 nav-item nav-link " data-bs-toggle="dropdown"></a>
                    <div class="dropdown-menu fade-down m-9">
                        <a href="/TimKami" class="dropdown-item">TimKami</a>
                        <a href="/PageNotFound" class="dropdown-item">PageNotFound</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    
{{-- carousel--}}
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-inner"style="border-radius: 30px 30px 30px 30px;">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="img/IMG_3216.JPG" class="d-block w-100" alt="..." style="border-radius: 30px 30px 30px 30px;">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="img/IMG_3223.JPG" class="d-block w-100" alt="..." style="border-radius: 30px 30px 30px 30px;">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="img/IMG_3211.JPG" class="d-block w-100" alt="..." style="border-radius: 30px 30px 30px 30px;">
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

    

{{-- card title --}}
<div class="container ">
    <div class="col-lg-15">
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3 rounded">
            <div class="col">
              <div class="card text-center  h-100 mb-3">
                <img src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/01/Banner-Vokatella-5-1024x559.png" class="img-fluid rounded-top" alt="Responsive image" style="object-fit: cover">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer ">
                  <button type="button" >View</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card text-center h-100 mb-3">
                <img src="https://smktelkom-bdg.sch.id/wp-content/uploads/2023/03/skuad2-768x432.png" class="img-fluid rounded-top" alt="Responsive image" style="object-fit: cover">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                  <button type="button" >View</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card text-center  h-100">
                <img src="https://primaseru.smktelkom-bdg.sch.id/static/homepage/images/asrama.jpg" class="img-fluid rounded-top" alt="Responsive image" style="object-fit: cover">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer ">
                  <button type="button">View</button>
                </div>
              </div>
            </div>
          </div>      
</div>
</div>

{{-- content --}}
<div class="container mt-5">
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7">
         <blockquote><h2 class="featurette-heading fw-normal lh-1">Palang Merah Remaja</h2></blockquote>
          <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
        </div>
        <div class="col-md-4">
          <img src="https://primaseru.smktelkom-bdg.sch.id/static/homepage/images/school_clubs/pmr.jpg" style="border-radius: 30px 30px 30px 30px;"svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
        </div>
      </div>
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading-left fw-normal lh-1 ">Rohis Care</h2>
          <p class="lead-left">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
        </div>
        <div class="col-md-4 order-md-1">
          <img src="https://primaseru.smktelkom-bdg.sch.id/static/homepage/images/school_clubs/rohis.jpg" style="border-radius: 30px 30px 30px 30px;"svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
        </div>
      </div>
  
      <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">Paskibra</h2>
          <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
        </div>
        <div class="col-md-4">
          <img src="https://primaseru.smktelkom-bdg.sch.id/static/homepage/images/school_clubs/paskibra.jpg"  style="border-radius: 30px 30px 30px 30px;"svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
        </div>
      </div>
      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading-left fw-normal lh-1 ">Pramuka</h2>
          <p class="lead-left">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
        </div>
        <div class="col-md-4 order-md-1">
          <style="border-radius: 30px 30px 30px 30px;"svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
        </div>
      </div>
  
      <hr class="featurette-divider">
  
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">Telkom Basketball</h2>
            <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
          </div>
          <div class="col-md-4">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
          </div>
          <hr class="featurette-divider">


          <div class="row featurette">
            <div class="col-md-7 order-md-2">
              <h2 class="featurette-heading-left fw-normal lh-1 ">Karate</h2>
              <p class="lead-left">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
            </div>
            <div class="col-md-4 order-md-1">
              <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
            </div>
          </div>
      
          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading fw-normal lh-1">Tarung Derajat</h2>
              <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
            </div>
            <div class="col-md-4">
              <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
            </div>
            <hr class="featurette-divider">
  

            
          <div class="row featurette">
            <div class="col-md-7 order-md-2">
              <h2 class="featurette-heading-left fw-normal lh-1 ">Futsal</h2>
              <p class="lead-left">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
            </div>
            <div class="col-md-4 order-md-1">
              <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
            </div>
          </div>
      
          <hr class="featurette-divider">

          
          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading fw-normal lh-1">Tarung Derajat</h2>
              <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
            </div>
            <div class="col-md-4">
              <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
            </div>
            <hr class="featurette-divider">
            

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                  <h2 class="featurette-heading-left fw-normal lh-1 ">Volley Ball</h2>
                  <p class="lead-left">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
                </div>
                <div class="col-md-4 order-md-1">
                  <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
                </div>
              </div>
          
              <hr class="featurette-divider">

              <div class="row featurette">
                <div class="col-md-7">
                  <h2 class="featurette-heading fw-normal lh-1">E-Sports</h2>
                  <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
                </div>
                <div class="col-md-4">
                  <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
                </div>
                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                      <h2 class="featurette-heading-left fw-normal lh-1 ">English Club</h2>
                      <p class="lead-left">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
                    </div>
                    <div class="col-md-4 order-md-1">
                      <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
                    </div>
                  </div>
              
                  <hr class="featurette-divider">

                  <div class="row featurette">
                    <div class="col-md-7">
                      <h2 class="featurette-heading fw-normal lh-1">Taekwondo</h2>
                      <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
                    </div>
                    <div class="col-md-4">
                      <img src="https://primaseru.smktelkom-bdg.sch.id/static/homepage/images/school_clubs/taekwondo.jpg" svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
                    </div>
                    <hr class="featurette-divider">

                    <div class="row featurette">
                        <div class="col-md-7 order-md-2">
                          <h2 class="featurette-heading-left fw-normal lh-1 ">Aslab</h2>
                          <p class="lead-left">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
                        </div>
                        <div class="col-md-4 order-md-1">
                          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
                        </div>
                      </div>
                  
                      <hr class="featurette-divider">

                      
                  <div class="row featurette">
                    <div class="col-md-7">
                      <h2 class="featurette-heading fw-normal lh-1">SKILLAS!</h2>
                      <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
                    </div>
                    <div class="col-md-4">
                      <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
                    </div>
                    <hr class="featurette-divider">
                    
    </div>
  </div>
</main>

<!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s" style="border-radius: 30px 30px 0 0;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 align="left" class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 align="left" class="text-white mb-3">Contact</h4>
                    <p align="left" class="text-white mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p align="left" class="text-white mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p align="left" class="text-white mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="text-white btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="text-white btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="text-white btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="text-white btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
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
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-danger py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
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
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
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