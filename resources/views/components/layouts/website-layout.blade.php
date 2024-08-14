<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{$title ?? ''}} | Be One Pet</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('assets/images/logo/favicon.png')}}">

    <!-- Vendor CSS (Icon Font) -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Times+New+Roman&display=swap">
{{--    <link rel="stylesheet" href="{{asset('assets/css/vendor/fontawesome.min.css')}}"/>--}}
    <link rel="stylesheet" href="{{asset('assets/css/vendor/simple-line-icons.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/vendor/themify-icons-min.css')}}"/>

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper-bundle.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/plugins/animate.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/plugins/lightgallery.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/plugins/aos.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/plugins/nice-select.min.css')}}"/>

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/custom-style.css')}}"/>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!--
        <link rel="stylesheet" href="{{asset('assets/css/vendor/vendor.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/plugins/plugins.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}">
    -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/heroicons-css@0.1.1/heroicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            color : #7d3800 !important;
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
</head>
<body>

<x-header />

{{ $slot }}

<x-footer />

<!-- Scroll Top Start -->
<a href="#" class="scroll-top show" id="scroll-top">
    <i class="arrow-top ti-angle-double-up"></i>
    <i class="arrow-bottom ti-angle-double-up"></i>
</a>
<!-- Scroll Top End -->

<x-mobile-menu />

<x-login-modal />
<x-register-modal />
<!-- Global Vendor, plugins JS -->

<!-- Vendor JS -->
<script src="{{asset('assets/js/vendor/popper.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>


<!-- Plugins JS -->
<script src="{{asset('assets/js/plugins/aos.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/nice-select.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/countdown.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/lightgallery-all.min.js')}}"></script>


<!-- Use the minified version files listed below for better performance and remove the files listed above -->
<!--
<script src="{{asset('assets/js/vendor.min.js')}}"></script>
<script src="{{asset('assets/js/plugins.min.js')}}"></script>
-->

<!--Main JS-->
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/custom-scripts.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/heroicons-css@0.1.1/heroicons.min.js"></script>

</body>
</html>
