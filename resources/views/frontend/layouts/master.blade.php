<!doctype html>
<html lang="en">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="google-site-verification" content="ctbqVAkmk5LqYTtl9Bu4KZcKDHphgu2gWf8aecQzVm4" />

    <meta name="description" content="@yield('meta_description', 'The Boss Media is a digital solutions company in Mohali offering performance marketing, SEO & AEO, website development, CRM and WhatsApp API. Get a free quote.')" />

    <!-- ======== Page title ============ -->
    <title>@yield('title', 'The Boss Media | Performance Marketing & Web Development Company ')</title>

    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="{{ asset('assets/img/fevicon.png') }}" />

    <!--<< CSS Files >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

    <link rel="canonical" href="@yield('canonical', url()->current())">

    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    <!--<< Open Graph Meta Tags >>-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="The Boss Media">
    <meta property="og:locale" content="en_IN">
    <meta property="og:url" content="https://thebossmedia.co.in/">
    <meta property="og:title" content="The Boss Media | Digital Marketing, SEO & Web Development Company">
    <meta property="og:description"
        content="The Boss Media is a digital solutions company in Mohali offering performance marketing, SEO & AEO, website development, CRM and WhatsApp API. Get a free quote.">
    <meta property="og:image" content="https://thebossmedia.co.in/assets/img/og-image.jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="The Boss Media - Digital Marketing & SEO Company">

    <!--<< Schema.org JSON-LD (Block 1) >>-->
    @verbatim
        <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "@id": "https://thebossmedia.co.in/#organization",
      "name": "The Boss Media",
      "url": "https://thebossmedia.co.in/",
      "logo": "https://thebossmedia.co.in/assets/img/logo/boss-logo.webp",
      "description": "The Boss Media is a digital solutions company helping businesses build, grow and strengthen their online presence through technology, creativity, SEO and digital marketing.",
      "email": "info@thebossmedia.co.in",
      "telephone": "+91-7657999786",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "B-1, D-185, Phase 8B, Industrial Area, Sector 74",
        "addressLocality": "Sahibzada Ajit Singh Nagar (Mohali)",
        "addressRegion": "Punjab",
        "postalCode": "160055",
        "addressCountry": "IN"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+91-7657999786",
        "email": "info@thebossmedia.co.in",
        "contactType": "customer service",
        "areaServed": "IN",
        "availableLanguage": ["English", "Hindi"]
      },
      "sameAs": [
        "https://www.facebook.com/thebossmedia.in",
        "https://www.instagram.com/thebossmedia.official",
        "https://www.linkedin.com/company/thebossmedia"
      ]
    }
    </script>
    @endverbatim

   
</head>

<body class="body-bg-1">
    <script async src="https://www.googletagmanager.com/gtm.js?id=GTM-KTB8679J"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
    </script>



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
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/viewport.jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollSmoother.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('assets/js/SplitText.min.js') }}"></script>
    <script src="{{ asset('assets/js/TextPlugin.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- TimetoHive WhatsApp Chat Widget -->
    <script>
        window.TTH_WIDGET_CONFIG = {
            tenantId: '6',
            phone: '917657999786',
            color: '#b6910c',
            position: 'right',
            welcomeMessage: 'Hi there! 👋 How can we help you today?',
            services: ["Digital Marketing", "Website & SEO", "Social Media Marketing"]
        };
    </script>
    <script src="https://chat.timetohiveone.com/widget/loader.js" async></script>
    <!-- End TimetoHive WhatsApp Chat Widget -->
</body>

</html>
