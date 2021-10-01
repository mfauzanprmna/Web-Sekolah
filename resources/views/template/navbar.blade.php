<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Mentor Bootstrap Template - Index</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{asset('template/assets/img/favicon.png')}}" rel="icon" />

    <link href="{{asset('template/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{asset('template/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('template/assets/vendor/aos/aos.css')}}" rel="stylesheet" />
    <link href="{{asset('template/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('template/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('template/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet" />
    <link href="{{asset('template/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet" />
    <link href="{{asset('template/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{asset('template/assets/css/style.css')}}" rel="stylesheet" />

    <!-- Font Awesome -->
    <!-- <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" /> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- =======================================================
  * Template Name: Mentor - v4.5.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
<header id="header">
    <div class="container d-flex align-items-center">

      @foreach ($settings as $setting)
        @if ($setting->display_name == 'Site Logo')
            
          <img src="{{asset('storage/' . $setting->value)}}" alt="" style="height: 70px; width: 70px" />
        @endif
      @endforeach
        <!-- Uncomment below if you prefer to use an image logo -->
        {{-- <a href="index.html" class="logo me-auto"><img src="{{asset('template/assets/img/logo.png')}}" alt="" class="img-fluid"></a> --}}

        <nav id="navbar active" class="navbar order-last order-lg-0 {{request()->is('/') || request()->is('profile') || request()->is('kurikulum') || request()->is('hubin') || request()->is('sarpras') || request()->is('kesiswaan') || request()->is('kontak') ? 'show':''}}" style="margin-left: auto">
          <ul>
            <li><a class="{{request()->is('/*') ? 'active':''}}" href="/">Home</a></li>
            <li><a class="{{request()->is('profile*') ? 'active':''}}" href="/profile">Profile</a></li>
            <li><a class="{{request()->is('kurikulum*') ? 'active':''}}" href="/kurikulum">Kurikulum</a></li>
            <li><a class="{{request()->is('hubin*') ? 'active':''}}" href="/hubin">Hubungan Industri</a></li>
            <li><a class="{{request()->is('sarpras*') ? 'active':''}}" href="/sarpras">Sarana Pra Sarana</a></li>
            <li><a class="{{request()->is('kesiswaan*') ? 'active':''}}" href="/kesiswaan">Kesiswaan</a></li>
            <li><a class="{{request()->is('kontakkami*') ? 'active':''}}" href="/kontakkami">Kontak Kami</a></li>

          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>  
</header>

    <script src="{{asset('template/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('template/assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('template/assets/vendor/purecounter/purecounter.js')}}"></script>
    <script src="{{asset('template/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('template/assets/js/main.js')}}"></script>
  </body>
</html>