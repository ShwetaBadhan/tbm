@extends('frontend.layouts.master')
@section('title', 'Website Development Company in Mohali | The Boss Media')
@section('meta_description', 'Fast, responsive, conversion-focused websites, from corporate sites and e-commerce stores
    to custom web apps. Build your online presence with The Boss Media.')
@section('canonical', 'https://thebossmedia.co.in/website-development ')
@section('content')

    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner/breadcroumb-img.jpg);">
        <div class="container">
            <div class="page-heading">
                <ul class="breadcrumb-list wow fadeInUp">
                    <li> <i class="fa-solid fa-house"></i><a href="{{ route('home') }}">Home</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i></li>
                    <li>Website Development</li>
                </ul>
                <h1 class="breadcrumb-title split-title">Website Development</h1>
            </div>
        </div>
    </section>

    <!-- Service details Section Start -->
    <section class="service-details-section section-padding fix">
        <div class="container">
            <div class="service-details-wrapper">
                <div class="service-details-thumb fix">
                    <img data-speed=".8" src="assets/img/service-details/website-development.jpg" alt="img">
                </div>
                <h2 class="title split-title">Building Powerful Websites That Turn Visitors into Customers.</h2>
                <p class="mt-2 wow fadeInUp">
                    Our web development services focus on building fast, secure, responsive, and user-friendly websites that
                    reflect your brand identity and support your business objectives. As a website development company in
                    Mohali, we specialise in corporate websites, e-commerce platforms, landing pages, and custom web
                    applications, combining modern technologies with creative website development and design.
                </p>
                <p class="mt-3 wow fadeInUp" data-wow-delay=".2s">
                    From planning and designing to development, testing, and deployment, we focus on creating seamless
                    digital experiences across all devices. Our responsive website design ensures smooth navigation, faster
                    loading, and consistent functionality on desktops, tablets, and mobiles. Whether you need a new website
                    or an upgrade to your existing platform, our website design development solutions are to improve user
                    experience, strengthen brand credibility, and turn website visitors into potential customers.
                </p>
                <h3 class="title-2 wow fadeInUp" data-wow-delay=".3s">
                    Our Website Development Services
                </h3>

                <div class="service-feature-wrapper">
                    <div class="row g-4">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-01.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>01. Business & Corporate Websites</h3>
                                    <div class="line"></div>
                                    <p>Professional websites that showcase your brand, services, and expertise.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-02.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>02. Luxury & Premium Websites</h3>
                                    <div class="line"></div>
                                    <p>Modern, high-end website designs for premium brand experiences.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>03. E-commerce Development</h3>
                                    <div class="line"></div>
                                    <p>Feature-rich online stores with product catalogues, payments, and order management.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>04. Custom Web Development</h3>
                                    <div class="line"></div>
                                    <p>Tailored web applications built around your business requirements.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>05. UI/UX & Responsive Design</h3>
                                    <div class="line"></div>
                                    <p>User-friendly interfaces and responsive website designs for all devices.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>06. Landing Pages</h3>
                                    <div class="line"></div>
                                    <p>Conversion-focused landing pages for campaigns, leads, and product launches.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>07. CMS & Website Management</h3>
                                    <div class="line"></div>
                                    <p>Easy-to-manage websites with flexible content management systems.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>08. API & Third-Party Integrations</h3>
                                    <div class="line"></div>
                                    <p>Connect websites with CRMs, payment gateways, booking systems, and other tools.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>09. Website Speed & SEO Readiness</h3>
                                    <div class="line"></div>
                                    <p>Optimise website speed, mobile performance, and technical SEO foundations.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>10. Maintenance & Support</h3>
                                    <div class="line"></div>
                                    <p>Ensure website security and performance through regular updates and technical
                                        support.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
