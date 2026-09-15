<!doctype html>
<html lang="en">
  <!--<< Header Area >>-->
 <head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="wowtheme7" />
    <meta
      name="description"
      content=""
    />
    <!-- ======== Page title ============ -->
    <title>@yield('title','Home')</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="assets/img/fevicon.png" />
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="assets/css/animate.css" />
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="assets/css/meanmenu.css" />
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body class="body-bg-1">
  
  {{-- @include('frontend.components.preloader') --}}
  @include('frontend.components.back-to-top')
  @include('frontend.components.mouse-cursor')

  @include('frontend.components.off-canvas')

   <div id="smooth-wrapper">
      <div id="smooth-content">
      
      @include('frontend.components.navbar')


        @yield('content')


      @include('frontend.components.footer')
      
      </div>

      </div>
  
 <!--<< All JS Plugins >>-->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!--<< Viewport Js >>-->
    <script src="assets/js/viewport.jquery.js"></script>
    <!--<< Bootstrap Js >>-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--<< Gsap Min Js >>-->
    <script src="assets/js/gsap.min.js"></script>
    <!--<< ScrollTrigger Min Js >>-->
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <!--<< ScrollSmoother Min Js >>-->
    <script src="assets/js/ScrollSmoother.min.js"></script>
    <!--<< ScrollToPlugin Min Js >>-->
    <script src="assets/js/ScrollToPlugin.min.js"></script>
    <!--<< SplitText Min Js >>-->
    <script src="assets/js/SplitText.min.js"></script>
    <!--<< TextPlugin Min Js >>-->
    <script src="assets/js/TextPlugin.js"></script>
    <!--<< nice-selec Js >>-->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!--<< Waypoints Js >>-->
    <script src="assets/js/jquery.waypoints.js"></script>
    <!--<< Counterup Js >>-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!--<< MeanMenu Js >>-->
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <!--<< Magnific Popup Js >>-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--<< Wow Animation Js >>-->
    <script src="assets/js/wow.min.js"></script>
    <!--<< Main.js >>-->
    <script src="assets/js/main.js"></script>
    <!-- TimetoHive WhatsApp Chat Widget -->
<script>
  window.TTH_WIDGET_CONFIG = {
    tenantId: '6',
    phone: '917657999786',
    color: '#b6910c',
    position: 'right',
    welcomeMessage: 'Hi there! 👋 How can we help you today?',
    services: ["Digital Marketing","Website & SEO","Social Media Marketing"]
  };
</script>
<script src="https://chat.timetohiveone.com/widget/loader.js" async></script>
<!-- End TimetoHive WhatsApp Chat Widget -->
  </body>
</html>
