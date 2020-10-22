<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sagar Choudhary') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/myjs.js') }}" defer></script>
<!-- Vendor JS Files -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}" defer></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
  <script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}" defer></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}" defer></script>
  <script src="{{ asset('vendor/waypoints/jquery.waypoints.min.js') }}" defer></script>
  <script src="{{ asset('vendor/counterup/counterup.min.js') }}" defer></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}" defer></script>
  <script src="{{ asset('vendor/venobox/venobox.min.js') }}" defer></script>
  <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}" defer></script>
  <script src="{{ asset('vendor/typed.js/typed.min.js') }}" defer></script>
  <script src="{{ asset('vendor/aos/aos.js') }}" defer></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}" defer></script>
 
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}" defer></script>
    <!-- <script src="{{ asset('js/popper.min.js') }}" defer></script> -->
    <!-- <script src="{{ asset('js/bootstrap.min.js') }}" defer></script> -->
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mystyle.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/icofont/icofont.min.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/vendor/boxicons/css/boxicons.min.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/venobox/venobox.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/aos/aos.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    
</head>
<body>
    <div id="app">

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
