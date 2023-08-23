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
                    <a href="/Home" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kegiatan</a>
                    <div class="dropdown-menu fade-down m-9">
                        <a href="/Pembelajaran" class="dropdown-item">Pembelajaran</a>
                        <a href="/Ekskul" class="dropdown-item">Ekskul</a>
                        <a href="/GaleriSekolah" class="dropdown-item">GaleriSekolah</a>
                        <a href="/Quotes" class="dropdown-item">Quotes</a>
                    </div>
                </div>
                <a href="/Prestasi" class="nav-item nav-link">Prestasi</a>
                <a href="/Guru" class="nav-item nav-link">GuruKami</a>
                <a href="/TentangKami" class="nav-item nav-link">TentangKami</a>
                <a href="/Login" class="nav-item nav-link">Login</a>
                <div class="nav-item dropdown text-danger">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"></a>
                    <div class="dropdown-menu fade-down m-9">
                        <a href="/TimKami" class="dropdown-item">TimKami</a>
                        <a href="/PageNotFound" class="dropdown-item">PageNotFound</a>
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
                    <h1 class="display-3 text-white animated slideInDown">FAQs</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/Home">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">FAQs Help</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-danger px-3">FaqsHelp</h6>
        <h1 class="mb-5">Pengajuan</h1>
    </div>
    <section>
        <div class="faq">
            <h3 class="text-center">Question 1</h3>
            <p class="text-center">Answer to question 1...</p>
        </div>
       

        <div id="question-modal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                
                <h2 class="text-center">Your Question</h2>
                <label class="text-center"for="text-input">Masukkan Pengajuan</label>
    <input type="text" id="text-input" name="letter" maxlength="100000"><br>
                <button id="submit-question" style="border-radius: 30px 30px 30px 30px;">Submit</button>
            </div>
        </div>
        <div class="faq">
            <h3 class="text-center">Question 2</h3>
            <p class="text-center">Answer to question 2...</p>
        </div>
        <a align="center"class="btn my-button align-self-start px-3 " id="question-button" style="border-radius: 30px 30px 30px 30px;">Pengajuan</a>
        <!-- Add more FAQs here -->
    </section>



    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const textInput = document.getElementById("text-input");
        
            textInput.addEventListener("input", (event) => {
                const enteredLetter = event.target.value;
                console.log("Entered letter:", enteredLetter);
            });
        });
        
        document.addEventListener("DOMContentLoaded", () => {
            const questionButton = document.getElementById("question-button");
            const modal = document.getElementById("question-modal");
            const closeButton = document.getElementsByClassName("close")[0];
        
            questionButton.addEventListener("click", () => {
                modal.style.display = "block";
            });
        
            closeButton.addEventListener("click", () => {
                modal.style.display = "none";
            });
        
            window.addEventListener("click", (event) => {
                if (event.target === modal) {
                    modal.style.display = "none";
                }
            });
        });
            </script>
            <style>
                body {
                    margin: 0;
                    padding: 0;
                    align-items: center;
                    justify-content: center;
                    text-align: center;
                }
                
                header {
                    background-color: #333;
                    color: white;
                    text-align: center;
                    padding: 1rem;
                }
                
                button {
                    padding: 0.5rem 1rem;
                    background-color: #ff0000;
                    color: white;
                    border: none;
                    cursor: pointer;
                }
                .my-button {
                    display: inline-block ;
                    background-color: #ff0000;
                    border: 2px solid #ff0000;
                    padding: 8px 24px ;
                    color: #ffffff;
                    font-weight: 500;
                    box-shadow: 0 0 0 #ffffff;
                    transition: all .2s !important;
                }
                .my-button:hover {
                    transform: right(4px, 4px) !important;
                    color: #ffffff !important;
                    box-shadow: 0px 0px 0 #FD2E2E !important;
                    transform: scale(1.05);
                
                    .rounded-xl {
                        border-radius: 16px;
                    }
                }
                .modal {
                    display: none;
                    position: fixed;
                    z-index: 1;
                    left: 0;
                    top: 0;
                    width: 100%;
                    height: 100%;
                    background-color: rgba(0,0,0,0.5);
                }
                
                .modal-content {
                    background-color: white;
                    margin: 15% auto;
                    padding: 20px;
                    border: 1px solid #888;
                    width: 80%;
                    position: relative;
                }
                
                .close {
                    color: #aaa;
                    float: right;
                    font-size: 28px;
                    font-weight: bold;
                    cursor: pointer;
                }
                
                .close:hover {
                    color: black;
                    text-decoration: none;
                    cursor: pointer;
                }
            section {
                max-width: 800px;
                margin: 2rem auto;
                padding: 0 1rem;
            }
            
            .faq {
                margin-bottom: 1rem;
                border: 1px solid #ccc;
                padding: 1rem;
                background-color: #f9f9f9;
            }
            </style>

            <!-- Footer Start -->
            <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s" style="border-radius: 30px 30px 0 0;">
                <div class="container py-5">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-6">
                            <h4 align="left" class="text-white mb-3">Quick Link</h4>
                            <a class="btn btn-link" href="/PrivacyPolicy">Privacy Policy</a>
                            <a class="btn btn-link" href="/TermsCondition">Terms & Condition</a>
                            <a class="btn btn-link text-danger active" href="/FaqsHelp">FAQs & Help</a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h4 align="left"class="text-white mb-3">Contact</h4>
                            <p align="left"class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Derwati Cuy</p>
                            <p align="left"class="mb-2"><i class="fa fa-phone-alt me-3"></i>0882-1899-0208</p>
                            <p align="left"class="mb-2"><i class="fa fa-envelope me-3"></i>alwaysongaming10@gmail.com</p>
                            <div class="d-flex pt-2">
                                <a class="text-danger btn btn-outline-light btn-social" href="https://www.instagram.com/ghinanms/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h4 align="left"class="text-white mb-3">Maps</h4>
                            <div class="row g-2 pt-2">
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <iframe class="position-relative rounded w-200 h-200"
                                        src="https://maps.google.com/maps?q=smk%20telkom%20bandung&#038;t=m&#038;z=10&#038;output=embed&#038;iwloc=near"
                                        frameborder="2" style="min-height: 200px; border:200px;" allowfullscreen="" aria-hidden="false"
                                        tabindex="0"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h4 align="left"class="text-white mb-3">Newsletter</h4>
                            <p align="left">Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
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