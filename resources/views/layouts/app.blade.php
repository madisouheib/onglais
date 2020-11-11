<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- SEO Meta description -->
    <meta name="description"
          content="Onglais  corporate business .">
    <meta name="author" content="Onglais">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content=""/> <!-- website name -->
    <meta property="og:site" content=""/> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content=""/> <!-- description shown in the actual shared post -->
    <meta property="og:image" content=""/> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content=""/> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article"/>

    <!--title-->
    <title>Onglais Let's talk  </title>

    <!--favicon icon-->
    <link rel="icon" href="website/img/logo-color.png" type="image/png" sizes="16x16">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans:400,600&display=swap" rel="stylesheet">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="{{ asset('website/css/bootstrap.min.css') }}">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="{{ asset('website/css/magnific-popup.css') }}">
    <!--Themify icon css-->
    <link rel="stylesheet" href="{{ asset('website/css/themify-icons.css') }}">
    <!--Fontawesome icon css-->
    <link rel="stylesheet" href="{{ asset('website/css/all.min.css') }}">
    <!--animated css-->
    <link rel="stylesheet" href="{{ asset('website/css/animate.min.css') }}">
    <!--ytplayer css-->
    <link rel="stylesheet" href="{{ asset('website/css/jquery.mb.YTPlayer.min.css') }}">
    <!--Owl carousel css-->
    <link rel="stylesheet" href="{{ asset('website/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/owl.theme.default.min.css') }}">
    <!--custom css-->
    <link rel="stylesheet" href="{{ asset('website/css/style.css') }}">
    <!--responsive css-->
    <link rel="stylesheet" href="{{ asset('website/css/responsive.css') }}">

</head>





<body>
 <div id="app">
       
            @yield('content')

    </div>



<!--jQuery-->
<script src="{{ asset('website/js/jquery-3.5.0.min.js') }}"></script>
<!--Popper js-->
<script src="{{ asset('website/js/popper.min.js') }}"></script>
<!--Bootstrap js-->
<script src="{{ asset('website/js/bootstrap.min.js') }}"></script>
<!--Magnific popup js-->
<script src="{{ asset('website/js/jquery.magnific-popup.min.js') }}"></script>
<!--jquery easing js-->
<script src="{{ asset('website/js/jquery.easing.min.js') }}"></script>
<!--jquery ytplayer js-->
<script src="{{ asset('website/js/jquery.mb.YTPlayer.min.js') }}"></script>
<!--Isotope filter js-->
<script src="{{ asset('website/js/mixitup.min.js') }}"></script>
<!--wow js-->
<script src="{{ asset('website/js/wow.min.js') }}"></script>
<!--owl carousel js-->
<script src="{{ asset('website/js/owl.carousel.min.js') }}"></script>
<!--countdown js-->
<script src="{{ asset('website/js/jquery.countdown.min.js') }}"></script>
<!--jquery easypiechart-->
<script src="{{ asset('website/js/jquery.easy-pie-chart.js') }}"></script>
<!--custom js-->
<script src="{{ asset('website/js/scripts.js') }}"></script>


</body>
</html>
