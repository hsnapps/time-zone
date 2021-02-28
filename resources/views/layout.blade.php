<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>FlexStart Bootstrap Template - Index</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('img/favicon.png') }}" rel="icon">
    <link href="{{ url('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ url('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ url('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ url('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart - v1.0.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="100">

    <!-- ======= Header ======= -->
    @include('parts.header')
    <!-- End Header -->

    @yield('content')

    <!-- Vendor JS Files -->
    <script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ url('vendor/aos/aos.js') }}"></script>
    <script src="{{ url('vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ url('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ url('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('vendor/glightbox/js/glightbox.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('js/main.js') }}"></script>

</body>

</html>
