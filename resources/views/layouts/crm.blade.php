<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CareBubble - The protection bubble for vulnerable people in your life</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/home/assets/img/favicon.png" rel="icon">
  <link href="/home/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/home/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/home/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="/home/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/home/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/home/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="/home/assets/vendor/owl.carousel//home/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/home/assets/css/style2.css" rel="stylesheet">
  <link href="/home/assets/css/style.css" rel="stylesheet">
  <style type="text/css">
      /*Cookie Consent Begin*/
    #cookieConsent {
      background-color: rgba(20,20,20,0.8);
      min-height: 26px;
      font-size: 14px;
      color: #ccc;
      line-height: 26px;
      padding: 8px 0 8px 30px;
      font-family: "Trebuchet MS",Helvetica,sans-serif;
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      display: none;
      z-index: 9999;
    }
    #cookieConsent a {
      color: #4B8EE7;
      text-decoration: none;
    }
    #closeCookieConsent {
      float: right;
      display: inline-block;
      cursor: pointer;
      height: 20px;
      width: 20px;
      margin: -15px 0 0 0;
      font-weight: bold;
    }
    #closeCookieConsent:hover {
      color: #FFF;
    }
    #cookieConsent a.cookieConsentOK {
      background-color: #F1D600;
      color: #000;
      display: inline-block;
      border-radius: 5px;
      padding: 0 20px;
      cursor: pointer;
      float: right;
      margin: 0 60px 0 10px;
    }
    #cookieConsent a.cookieConsentOK:hover {
      background-color: #E0C91F;
    }
    @media (max-width: 600px) {
     #hide-mobile {
       display: none;
     }
    }
    @media (min-width: 800px) {
     #show-mobile {
       display: none;
     }
    }
    #mobile-button{
      color: #fff!important;
      width: 100%;
    }


    /*Cookie Consent End*/
  </style>
  <!-- =======================================================
  * Template Name: Resi - v2.0.0
  * Template URL: https://bootstrapmade.com/resi-free-bootstrap-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="/"><img src="/home/assets/img/logo.png"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="/" class="logo"><img src="/home/assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="/register" id="show-mobile"><button class="get-started-btn" style="color:#fff!important;">Signup (Beta)</button></a></li>
          <?php $menu = \App\Menu::find(1);?>
          <?php $menu_items = \App\Link::where('menu_id', $menu->id)->get();?>
          @foreach($menu_items as $menu_item)
            <li><a href="{{$menu_item->href}}">{!!$menu_item->text!!}</a></li>
          @endforeach
        </ul>
      </nav><!-- .nav-menu -->

      @guest
        <a href="/register" id="hide-mobile"><button class="get-started-btn" style="color:#fff!important;">Signup (Beta)</button></a>
        <a href="/login" id="hide-mobile"><button class="patient-btn" style="color:#fff!important;">Login</button></a>
      @else
        <a href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();" id="hide-mobile"><button class="get-started-btn" style="color:#fff!important;">Logout</button></a>
      @endguest
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  @if(isset($hero))
    @if($hero === true)
    <!-- ======= Hero Section ======= -->

    <!-- End Hero -->
    @endif
  @endif

  <main id="main">
    @yield('content')

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
          <img src="/home/assets/img/logo2.png" class="img-fluid">
          <p>
            Level 39 One Canada Square<br>
            Canary Wharf, London<br>
            United Kingdom <br><br>
            <strong>Phone:</strong> +44 (0) 207 819 9172<br>
            <strong>Email:</strong> hello@koobli.co<br>
          </p>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="gdpr.html">GDPR Compliance</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="usage.html">Fair Usage</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="terms.html">Terms of service</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="privacy.html">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Hosted CareBubble solution</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Live monitoring</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#" title="Artificial Intelligence/Machine Learning">6 Active vital signs</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Instant notifications</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Instant Messaging/Video chat</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Join Our Newsletter</h4>
          <p>We Promise not to spam or sell your data.</p>
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </form>
        </div>

      </div>
    </div>
  </div>

  <div class="container d-md-flex py-4">

    <div class="mr-md-auto text-center text-md-left">
      <div class="copyright">
        &copy; Copyright <strong><span>Koobli</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/resi-free-bootstrap-html-template/ -->
      </div>
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
      <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
      <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="/home/assets/vendor/jquery/jquery.min.js"></script>
<script src="/home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/home/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="/home/assets/vendor/php-email-form/validate.js"></script>
<script src="/home/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="/home/assets/vendor/counterup/counterup.min.js"></script>
<script src="/home/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/home/assets/vendor/venobox/venobox.min.js"></script>
<script src="/home/assets/vendor/owl.carousel/owl.carousel.min.js"></script>

<!-- Template Main JS File -->
<script src="/home/assets/js/main.js"></script>
<div id="cookieConsent">
    <div id="closeCookieConsent">x</div>
    This website is using cookies. <a href="/page/gdpr" target="_blank">More info</a>. <a class="cookieConsentOK">That's Fine</a>
</div>
<script type="text/javascript">
    $(document).ready(function(){
      setTimeout(function () {
          $("#cookieConsent").fadeIn(200);
       }, 4000);
      $("#closeCookieConsent, .cookieConsentOK").click(function() {
          $("#cookieConsent").fadeOut(200);
      });
    });
</script>
</body>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		@csrf
</form>
</html>
