<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{asset('img/logo.png ') }}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png ') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css ') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css ') }}" rel="stylesheet">
    <link href="{{asset('lib/animate/animate.min.css ') }}" rel="stylesheet">
    <link href="{{asset('lib/ionicons/css/ionicons.min.css ') }}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css ') }}" rel="stylesheet">
    <link href="{{asset('lib/lightbox/css/lightbox.min.css ') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('css/style.css ') }}" rel="stylesheet">
    <link href="{{asset('css/typed.scss ') }}" rel="stylesheet">

    @livewireStyles

    @yield('style')

    {{-- <style>
        @yield('css')
    </style> --}}
    <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->

    <style>
        #mobile-nav-toggle i{
            color: #01674e;
        }

        .page-item.active .page-link{
            background-color: #01674e !important;
            border-color: #01674e !important;
            color: #fff !important;
        }

        .page-link{
            color: #01674e !important;
        }
    </style>

</head>

<body>

    @include('layouts.partials.header')

    @yield('intro')

    <main id="main">

        @yield('slide')

        @yield('top-formation')

        @yield('domaine-formation')

        @yield('formation')

        @yield('about')

        @yield('services')

        @yield('call-to-action')

        @yield('facts')

        @yield('contact')

    </main>

    @include('layouts.partials.footer')

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- JavaScript Libraries -->
    <script src="{{asset('lib/jquery/jquery.min.js ') }}"></script>
    <script src="{{asset('lib/jquery/jquery-migrate.min.js ') }}"></script>
    <script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js ') }}"></script>
    <script src="{{asset('lib/easing/easing.min.js ') }}"></script>
    <script src="{{asset('lib/superfish/hoverIntent.js ') }}"></script>
    <script src="{{asset('lib/superfish/superfish.min.js ') }}"></script>
    <script src="{{asset('lib/wow/wow.min.js ') }}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js ') }}"></script>
    <script src="{{asset('lib/counterup/counterup.min.js ') }}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js ') }}"></script>
    <script src="{{asset('lib/isotope/isotope.pkgd.min.js ') }}"></script>
    <script src="{{asset('lib/lightbox/js/lightbox.min.js ') }}"></script>
    <script src="{{asset('lib/touchSwipe/jquery.touchSwipe.min.js ') }}"></script>
    <!-- Contact Form JavaScript File -->
    <script src="{{asset('contactform/contactform.js ') }}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{asset('js/main.js ') }}"></script>

    @livewireScripts

    @include('flashy::message')

</body>
</html>
