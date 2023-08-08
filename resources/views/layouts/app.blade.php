<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >

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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="assets/js/jquery-3.6.0.min.js"></script> 
  <script src="assets/js/notify.js"></script>

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
        <img src="assets/img/logo.svg" alt="" width="300">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
        @if(Auth::user()->is_admin)
          <li class="dropdown ">
              <a href="#" > <span >
              Administração
              </span> <i class="bi bi-chevron-down"></i>
              </a>
              <ul>
                <li>
                  <a href="{{ url('/users') }}">Utilizadores</a>
                </li>
                <li>
                    <a href="{{ url('/documents') }}">Documentos</a>
                </li>
                <li class="dropdown ">
                  <a href="#" > <span >
                  Estatística
                  </span> <i class="bi bi-chevron-down"></i>
                  </a>
                  <ul>
                    <li>
                      <a href="{{ url('/usage_statistics') }}">Uso de aplicativo</a>
                    </li>
                    <li>
                      <a href="{{ url('/user_statistics') }}">Utilizadores</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          
          @endif
          <li class="dropdown megamenu"><a href="#"><span>Cólera</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li>
                <a href="{{ url('/colera') }}">Cuidados de Enfermagem</a>
              </li>
              <li>
                <a href="{{ url('/colera_clinico') }}">Clínico</a>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Malária</a></li>
          <li><a class="nav-link scrollto" href="#contact">Tuberculose</a></li>
          <li class="dropdown ">
            <a href="#" > <span >
            <img src="assets/img/account.png" alt="" width="50">
            {{Auth::user()->name}}
             </span> <i class="bi bi-chevron-down"></i>
            </a>
            <ul>
              <li>
                      <a href="{{ url('/profile') }}"  >
                          Alterar dados pessoais
                      </a>
                </li>
                <li>
                      <a href="{{ url('/changepassword') }}"  >
                          Alterar senha
                      </a>
                </li>
                <li>
                  
                  <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <a href="route('logout')" onclick="event.preventDefault();
                                          this.closest('form').submit();">
                          Sair
                      </a>
                  </form>
                </li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    {{ $slot }}
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <section class="customer-separator ">
      <div class="container">
      </div>
    </section><!-- End Breadcrumbs -->
    

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
  <script src="assets/js/form_validate.js"></script>
  @yield('specific_js')
</body>

</html>