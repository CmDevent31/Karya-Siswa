<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>PrimaSeru</title>
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
            <title>Login</title>
            <link rel="stylesheet" href="style.css">


    
        <title>Registre</title>
        <link rel="stylesheet" href="style.css">


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



        <div class="container">
         <h1>Register</h1>
            <form>
                <label>Username</label><br>
                <input type="text"><br>
                <label>Email</label><br>
                <input type="text"><br>
                <label>Password</label><br>
                <input type="password"><br>
                <button class="text-center" >Register</button>
                <p> Sudah punya akun?
                  <a href="/Login">Login di sini</a>
                </p></form>
            </div>
                
                <style>
                   
                    *{
    margin: 0;
    padding: 0;
    outline: 0;
}
body{
    height: 100vh;
    background-image: url(https://img.freepik.com/premium-vector/abstract-white-bg-02-edit_7505-1800.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
p {
  color: rgb(7, 0, 0);
  font-family: 'Open Sans', sans-serif;
  padding-top: 8px;
}

h1 {
  text-align: center;
  padding-left: 28px;
  padding-bottom: 15px;
}

a {
  color: rgb(255, 0, 0);
}
.container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 20px 20px;
    width: 300px;
    
    background: transparent;
      border: 2px solid rgba(255, 255, 255, .2);
      color:#000000;
      border-radius: 20px;
      border: rounded;
      box-shadow: 10px 10px 20px #c5c5c5,-10px -10px 20px #fff;
      overflow: hidden;
}
.container h1{
    text-align: left;
    color: #ff0000;
    margin-bottom: 30px;
    text-transform: uppercase;
    border-bottom: 4px solid #535353;
}
.container label{
    text-align: left;
    color: #ff0000;
}
.container form input{
    width: calc(100% - 20px);
    padding: 6px 10px;
    margin-bottom: 10px;
    border: rgb(255, 0, 0);
    background-color: rgb(255, 255, 255);
    border-bottom: 2px solid #6b6868;
    color: #000000;
    font-size: 20px;
    
}
.container form button {
    width: 100%;
    height: 30px;
    padding: 20px ;
    font-size: 20;
border: 0;
padding: 12px 10px;
outline: none;
color: #fff;
background: linear-gradient(to right, #fb4283, #ff3527);
border-radius: 6px;
cursor: pointer;
transition: background-color 0.1ms, transform 0.2s;
}

button:hover {
background: linear-gradient(to right, #ff3527, #fb4283);
transform: scale(1.05);
}
</style>


            

        
        
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
