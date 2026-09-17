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
                            <img class="hover-img" src="assets/img/home-services/performance.jpg" alt="img">
                            <img class="hover-img" src="assets/img/home-services/performance.jpg" alt="img">
                            <div class="icon">
                                <img src="assets/img/home-2/icon/service-icon-01.svg" alt="img">
                            </div>
                        </div>
                        <div class="service-content">
                            <h2><a href="{{ route('performance-marketing') }}">Performance Marketing</a></h2>
                            <p align="justify">
                                We plan, launch, and optimise digital campaigns that connect your business with the right
                                audience and turn attention into measurable results.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="service-box-items-style-2 mt-0">
                        <div class="service-thumb">
                            <img class="hover-img" src="assets/img/home-services/social-media.jpg" alt="img">
                            <img class="hover-img" src="assets/img/home-services/social-media.jpg" alt="img">
                            <div class="icon">
                                <img src="assets/img/home-2/icon/service-icon-02.svg" alt="img">
                            </div>
                        </div>
                        <div class="service-content">
                            <h2><a href="{{ route('social-media-marketing') }}">Social Media Marketing</a></h2>
                            <p>Every number tells a story We analyze your data to uncover patterns and highlight for
                                solutions.</p>
                          
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="service-box-items-style-2 mt-0">
                        <div class="service-thumb">
                            <img class="hover-img" src="assets/img/home-services/seo-aeo.jpg" alt="img">
                            <img class="hover-img" src="assets/img/home-services/seo-aeo.jpg" alt="img">
                            <div class="icon">
                                <img src="assets/img/home-2/icon/service-icon-03.svg" alt="img">
                            </div>
                        </div>
                        <div class="service-content">
                            <h2><a href="{{ route('seo-and-aeo') }}">SEO and AEO</a></h2>
                            <p align="justify">
                                We help businesses improve their online visibility across traditional search engines and
                                emerging answer-driven platforms.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="service-box-items-style-2 mt-0">
                        <div class="service-thumb">
                            <img class="hover-img" src="assets/img/home-services/development.jpg" alt="img">
                            <img class="hover-img" src="assets/img/home-services/development.jpg" alt="img">
                            <div class="icon">
                                <img src="assets/img/home-2/icon/service-icon-04.svg" alt="img">
                            </div>
                        </div>
                        <div class="service-content">
                            <h2><a href="{{ route('website-development') }}">Website Development</a></h2>
                            <p align="justify">
                                We build modern, responsive, and conversion-focused websites that give your business a
                                strong digital foundation.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="service-box-items-style-2 mt-0">
                        <div class="service-thumb">
                            <img class="hover-img" src="assets/img/home-services/digital-marketing.jpg" alt="img">
                            <img class="hover-img" src="assets/img/home-services/digital-marketing.jpg" alt="img">
                            <div class="icon">
                                <img src="assets/img/home-2/icon/service-icon-04.svg" alt="img">
                            </div>
                        </div>
                        <div class="service-content">
                            <h2><a href="{{ route('digital-marketing') }}">Digital Marketing</a></h2>
                            <p align="justify">
                                We help businesses build a connected digital presence that attracts the right audience,
                                generates opportunities, strengthens brand visibility, and supports business growth.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="service-box-items-style-2 mt-0">
                        <div class="service-thumb">
                            <img class="hover-img" src="assets/img/home-services/crm.jpg" alt="img">
                            <img class="hover-img" src="assets/img/home-services/crm.jpg" alt="img">
                            <div class="icon">
                                <img src="assets/img/home-2/icon/service-icon-04.svg" alt="img">
                            </div>
                        </div>
                        <div class="service-content">
                            <h2><a href="{{ route('crm-development') }}">CRM Development</a></h2>
                            <p align="justify">
                                We develop CRM solutions that help businesses organise customer information, manage leads,
                                streamline sales processes, and build stronger customer relationships.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="service-box-items-style-2 mt-0">
                        <div class="service-thumb">
                            <img class="hover-img" src="assets/img/home-services/whatsapp-api.jpg" alt="img">
                            <img class="hover-img" src="assets/img/home-services/whatsapp-api.jpg" alt="img">
                            <div class="icon">
                                <img src="assets/img/home-2/icon/service-icon-04.svg" alt="img">
                            </div>
                        </div>
                        <div class="service-content">
                            <h2><a href="{{ route('whatsapp-api') }}">WhatsApp Api</a></h2>
                            <p align="justify">
                                We help businesses use WhatsApp as a structured channel for customer communication, lead
                                engagement, notifications, and support.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="service-box-items-style-2 mt-0">
                        <div class="service-thumb">
                            <img class="hover-img" src="assets/img/home-services/political-pr.jpg" alt="img">
                            <img class="hover-img" src="assets/img/home-services/political-pr.jpg" alt="img">
                            <div class="icon">
                                <img src="assets/img/home-2/icon/service-icon-04.svg" alt="img">
                            </div>
                        </div>
                        <div class="service-content">
                            <h2><a href="{{ route('political-pr') }}">Political PR</a></h2>
                            <p align="justify">
                                We help political leaders, representatives, organisations, and public-facing campaigns build
                                a credible public presence and communicate effectively with their audiences.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
