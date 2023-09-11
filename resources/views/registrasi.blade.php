<!DOCTYPE HTML>
<html>
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
            <title>Registrasi</title>
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="css/register.css">
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
                        <a href="/Login" class="nav-item nav-link">Login</a>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->



    <div class="container-xxl py-5" >
        <div class="row g-4 justify-content-center" >
            <div class="col-lg-6">

                <section class="container">
                    <header>Registration Form</header>
                    <form action="#" class="form">
                        <div class="input-box">
                            <label for="uname">Username</label>
                            <input type="text" placeholder="Enter Username" name="uname" required />
                          </div>
                          <div class="input-box">
                            <label for="email">Email Address</label>
                            <input type="email" placeholder="Enter email address"name="email" required />
                          </div>
                            <div class="input-box">
                                <label for="psw">Password</label>
                                <input type="password" placeholder="Enter password" name="psw"required />
                            </div>
                            <div class="input-box">
                              <label for="status">Status</label>
                              <input type="text" placeholder="Contoh :'Guru Prodi TJKT / Siswa XI TJKT 3'" name="status" rows="4" cols="4" required />
                            </div>
                      <div class="column">
                        
                        <div class="input-box">
                          <label>Birth Date</label>
                          <input type="date" placeholder="Enter birth date" required />
                        </div>
                      </div>
                      <div class="gender-box">
                        <h3>Gender</h3>
                        <div class="gender-option">
                          <div class="gender">
                            <input type="radio" id="check-male" name="gender" checked />
                            <label for="check-male">Male</label>
                          </div>
                          <div class="gender">
                            <input type="radio" id="check-female" name="gender" />
                            <label for="check-female">Female</label>
                          </div>
                          <div class="gender">
                            <input type="radio" id="check-other" name="gender" />
                            <label for="check-other">Trans</label>
                          </div>
                          
                        </div>
                      </div>
                      <div class="input-box">
                      <label for="deskripsi">Bio</label><br>
                      <input id="deskripsi" name="deskripsi" rows="4" cols="50" required>
                      </div>
                      
                      <div>
                      <label for="gambar"><br>Pilih Gambar Untuk Profile:</label>
                      <input type="file" id="gambar" name="gambar" accept="image/*" required>
                      </div>
                      <button>Submit</button>
                    </form>
                  </section>
</div>
</div>
</div>

<script>
    // Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == modal) {
modal.style.display = "none";
}
}
</script>
  


            

        
        
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
