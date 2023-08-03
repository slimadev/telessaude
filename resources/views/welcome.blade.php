<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Telessaude</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo_elessaude.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="#" class=" d-flex align-items-center">
      <img src="assets/img/logo.svg" alt="" width="300">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#clients">Parceiros</a></li>
          <li><a class="nav-link scrollto" href="#about">Sobre</a></li>

          <li><a class="nav-link scrollto" href="#contact">Contactos</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Telessaúde MZ</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">O SEU APLICATIVO DE CONSULTAS RAPIDAS</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="{{ route('login') }}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Entrar</span>
                <i class="bi bi-arrow-right"></i>
              </a>
              <a href="{{ route('register') }}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Criar conta</span>
                <i class="bi bi-list"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/Online wishes-amico.svg" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Nossos parceiros</p>
        </header>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>

            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </section><!-- End Clients Section -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Sobre o Programa</h3>
              <h2>Telessaúde MZ</h2>
              <p>
                É um programa do Ministério da Saúde de Moçambique que utiliza as modernas tecnologias de informação e das telecomunicações, para apoiar à distância 
                o desenvolvimento e actualização técnica dos profissionais de saúde no país com a finalidade de ajudar à melhoria da prestação dos serviços de saúde 
                nos diversos níveis de atenção priorizando os Cuidados de Saúde Primários.
              </p>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/Doctors-bro.svg" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->


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
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>