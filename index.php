<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Desa Mekarsari</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>

  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(){
      
      window.addEventListener('scroll', function() {
        if (!x.matches) {
        if (window.scrollY > 50) {
          document.getElementById('navbar_top').classList.add('fixed-top');
          // add padding top to show content behind navbar
          navbar_height = document.querySelector('.navbar').offsetHeight;
          document.body.style.paddingTop = navbar_height + 'px';
        } else {
           document.getElementById('navbar_top').classList.remove('fixed-top');
           // remove padding top from body
          document.body.style.paddingTop = '0';
        } 
    }});
    }); 
    // DOMContentLoaded  end

    var x = window.matchMedia("(max-width: 1279px)")
  </script>


<body>

  <!-- ======= Header ======= -->
  <div class="d-flex justify-content-center bg-dark">
    <div id="sosmed" class="align-items-center">
      <a href="#" class="mx-2 text-white"><span class="bi-facebook"></span></a>
      <a href="#" class="mx-2 text-white"><span class="bi-twitter"></span></a>
      <a href="#" class="mx-2 text-white"><span class="bi-instagram"></span></a>


    </div>
  </div>

  <div class="header d-flex py-3">
    <div id="header" class="container">
      <table>
        <tr>
          <td><img src="assets/img/Logo_Mekarsari.png" alt="Logo" height="60"></td>
          <td><strong>Desa Mekarsari</strong><br>Kabupaten Bogor</td>
        </tr>
      </table>
    </div>
  </div>
  <header id="navbar_top" class="header d-flex align-items-center bg-dark">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center">
      <div id="logo" class="container" style="display: none;">
        <table>
          <tr>
            <td><img src="assets/img/Logo_Mekarsari.png" alt="Logo" height="60"></td>
            <td class="text-white"><strong>Desa Mekarsari</strong><br>Kabupaten Bogor</td>
          </tr>
        </table>
      </div>


      <nav id="navbar" class="navbar">
        <ul>
          <li><a id="beranda" href="index.html" class="text-decoration-none text-white">Beranda</a></li>
          <li class="dropdown"><a href="#" class="text-decoration-none text-white"><span>Pemerintahan Desa</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#" class="text-decoration-none">Visi dan Misi</a></li>
              <li><a href="#" class="text-decoration-none">Pemerintahan Desa</a></li>
              <li><a href="#" class="text-decoration-none">Badan Permusyawaratan Desa</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="text-decoration-none text-white"><span>Profil Desa</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#" class="text-decoration-none">Sejarah Desa</a></li>
              <li><a href="#" class="text-decoration-none">Profil Wilayah Desa</a></li>
              <li><a href="#" class="text-decoration-none">Arti Lambang Desa</a></li>
            </ul>
          </li>

          <li><a href="#" class="text-decoration-none text-white">Galeri</a></li>
          <li><a href="#" class="text-decoration-none text-white">Surat Online</a></li>

          <li class="dropdown"><a href="#" class="text-decoration-none text-white"><span>Login</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#" class="text-decoration-none">Admin</a></li>
              <li><a href="#" class="text-decoration-none">Layanan</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- .navbar -->
      <div class="d-flex justify-content-center bg-dark">
        <div class="align-items-center">
    
          <a href="#" class="mx-2 js-search-open text-white"><span class="bi-search"></span></a>
          <i class="bi bi-list mobile-nav-toggle"></i>
    
          <!-- ======= Search Form ======= -->
          <div class="search-form-wrap js-search-form-wrap">
            <form action="search-result.html" class="search-form">
              <span class="icon bi-search"></span>
              <input type="text" placeholder="Search" class="form-control">
              <button class="btn js-search-close"><span class="bi-x"></span></button>
            </form>
          </div><!-- End Search Form -->
    
        </div>
      </div>
      

    </div>

  </header><!-- End Header -->

  <main id="main">
    <?php
    error_reporting(0);
    if ($_GET['page'] =="") {
      include 'page/main.php';
    }
    ?>
  </main><!-- End #main -->

  
  <?php 
  include "page/footer.php";
   ?>  


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>

</body>

</html>