@extends('frontend.layouts.master')
@section('title', 'Our Services')
@section('content')

    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner/breadcroumb-img.jpg);">
        <div class="container">
            <div class="page-heading">
                <ul class="breadcrumb-list wow fadeInUp">
                    <li> <i class="fa-solid fa-house"></i><a href="{{ route('home') }}">Home</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i></li>
                    <li>Our Services</li>
                </ul>
                <h1 class="breadcrumb-title split-title">Our Services</h1>
            </div>
        </div>
    </section>

    <!-- Service Section Start -->
    <section class="service-section-inners section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="service-box-items-style-2 mt-0">
                        <div class="service-thumb">
                            <img class="hover-img" src="assets/img/home-2/service-01.jpg" alt="img">
                            <img class="hover-img" src="assets/img/home-2/service-01.jpg" alt="img">
                            <div class="icon">
                                <img src="assets/img/home-2/icon/service-icon-01.svg" alt="img">
                            </div>
                        </div>
                        <div class="service-content">
                            <h2><a href="{{ route('it-solutions') }}">It Solutions</a></h2>
                            <p align="justify">
                                We provide reliable and customized IT solutions that help businesses simplify processes,
                                improve efficiency, and build a stronger digital foundation.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="service-box-items-style-2 mt-0">
                        <div class="service-thumb">
                            <img class="hover-img" src="assets/img/home-2/service-02.jpg" alt="img">
                            <img class="hover-img" src="assets/img/home-2/service-02.jpg" alt="img">
                            <div class="icon">
                                <img src="assets/img/home-2/icon/service-icon-02.svg" alt="img">
                            </div>
                        </div>
                        <div class="service-content">
                            <h2><a href="{{ route('graphic-designing') }}">Graphic Designing</a></h2>
                            <p>Every number tells a story We analyze your data to uncover patterns and highlight for
                                solutions.</p>
                            <p align="justify">
                                We create creative, professional, and engaging designs that give your brand a strong visual
                                identity and help you communicate your message effectively.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="service-box-items-style-2 mt-0">
                        <div class="service-thumb">
                            <img class="hover-img" src="assets/img/home-2/service-03.jpg" alt="img">
                            <img class="hover-img" src="assets/img/home-2/service-03.jpg" alt="img">
                            <div class="icon">
                                <img src="assets/img/home-2/icon/service-icon-03.svg" alt="img">
                            </div>
                        </div>
                        <div class="service-content">
                            <h2><a href="{{ route('digital-marketing') }}">Marketing Strategy & Campaigns</a></h2>
                            <p align="justify">
                                We create data-driven marketing strategies and impactful campaigns that help businesses
                                reach the right audience, build brand awareness and generate leads.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="service-box-items-style-2 mt-0">
                        <div class="service-thumb">
                            <img class="hover-img" src="assets/img/home-2/service-04.jpg" alt="img">
                            <img class="hover-img" src="assets/img/home-2/service-04.jpg" alt="img">
                            <div class="icon">
                                <img src="assets/img/home-2/icon/service-icon-04.svg" alt="img">
                            </div>
                        </div>
                        <div class="service-content">
                            <h2><a href="{{ route('seo-optimization') }}">SEO Optimization</a></h2>
                            <p align="justify">
                                We optimize your digital presence to improve search visibility, and help your business reach
                                customers actively searching for your products or services.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
