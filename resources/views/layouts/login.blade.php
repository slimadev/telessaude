<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Telessaude</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/logo_elessaude.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Jun 19 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class=" d-flex align-items-center">
      <img src="/assets/img/logo.svg" alt="" width="300">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ url('/') }}">Principal</a></li>
          <li>Segurança</li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

        <div class="container">

          <div class="row">

            <div class="col-lg-6 d-flex flex-column justify-content-center">
             
              <div class="blog-comments ">
              {{ $slot }}
              </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
              <img src="assets/img/Endpoint-bro.svg" class="img-fluid" alt="">
            </div>
          </div>
        </div>
  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <footer id="footer" class="footer">
    <section class="customer-separator ">
      <div class="container">
      </div>
    </section><!-- End Breadcrumbs -->
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="#" class="logo d-flex align-items-center">
              <span>Telessaúde MZ</span>
            </a>
            <div class="social-links mt-3">
             
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Links úteis</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="https://www.misau.gov.mz">MISAU</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Nossos Serviços</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Telessaude</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contacte-nos</h4>
            <p>
              4º Andar - Ministério da Saúde <br>
              Av. Eduardo Mondlane 1008<br>
              Maputo-Moçambique <br><br>
              <strong>Telefone:</strong> (+258) 84 3434 ou 82 3434<br>
              <strong>Email:</strong> telessaudemz@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Telessaúde MZ</span></strong>. Todos Direitos Reservados
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>
  <script src="/assets/js/user_register.js"></script>
</body>

</html>