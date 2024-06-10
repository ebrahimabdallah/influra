<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Influra</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="img/logo.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/LineIcons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css"> 
    
  </head>
  
  <body>



    

    <div class="body-wrapper">
        <!-- Header Start -->
        @include('website/layouts/header')
        <!-- Header End -->

        <div class="container-fluid">
            <!-- Row 1 -->
            @yield('content')
        </div>

        <!-- Include your footer -->
        @include('website/layouts/footer')
    </div>

    
  <!-- Go To Top Link -->
  <a href="#" class="back-to-top">
    <i class="lni-chevron-up"></i>
  </a> 

  <!-- Preloader -->
  <div id="preloader">
    <div class="loader" id="loader-1"></div>
  </div>
  <!-- End Preloader -->

  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery-min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.js"></script>      
  <script src="js/jquery.nav.js"></script>    
  <script src="js/scrolling-nav.js"></script>    
  <script src="js/jquery.easing.min.js"></script>     
  <script src="js/nivo-lightbox.js"></script>     
  <script src="js/jquery.magnific-popup.min.js"></script>     
  <script src="js/form-validator.min.js"></script>
  <script src="js/contact-form-script.js"></script>   
  <script src="js/main.js"></script>
  
</body>
</html>
