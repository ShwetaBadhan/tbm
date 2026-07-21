@extends('frontend.layouts.master')
@section('title','Service Details')
@section('content')

 <!-- Breadcrumb Section Start -->
            <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner/breadcroumb-img.jpg);">
                <div class="container">
                    <div class="page-heading">
                        <ul class="breadcrumb-list wow fadeInUp">
                            <li> <i class="fa-solid fa-house"></i><a href="{{ route('home') }}">Home</a></li>
                            <li><i class="fa-solid fa-chevron-right"></i></li>
                            <li>Service Details</li>
                        </ul>
                        <h1 class="breadcrumb-title split-title">Service Details</h1>
                    </div>
                </div>
            </section>

            <!-- Service details Section Start -->
            <section class="service-details-section section-padding fix">
                <div class="container">
                    <div class="service-details-wrapper">
                        <div class="service-details-thumb fix">
                            <img data-speed=".8" src="assets/img/inner/service-details-01.jpg" alt="img">
                        </div>
                        <h2 class="title split-title">What we’ve accomplished together</h2>
                        <p class="mt-2 wow fadeInUp">
                            Discover how we’ve helped businesses grow transform and succeed through strategic consulting solutions Explore our portfolio of the impactful projects each tailored to solve unique business challenges From startups to established enterprises our projects demonstrate real-world results and measurable growth Were turn strategies into success See how our work drives innovation, growth, and sustainable change Every project tells a story of transformation dive into the journeys of our clients and the results we delivered.
                        </p>
                        <p class="mt-3 wow fadeInUp" data-wow-delay=".2s">
                            From startups to established enterprises our projects demonstrate real-world results and measurable growth Were turn strategies into success See how our work drives innovation, growth, and sustainable change Every project tells a story of transformation dive into the journeys of our clients and the results we delivered.
                        </p>
                        <h3 class="title-2 wow fadeInUp" data-wow-delay=".3s">
                            Services Overview
                        </h3>
                        <p class="mt-2 wow fadeInUp" data-wow-delay=".4s">
                            Discover how we’ve helped businesses grow transform and succeed through strategic consulting solutions Explore our portfolio of the impactful projects each tailored to solve unique business challenges From startups to established enterprises our projects demonstrate real-world results and measurable growth Were turn strategies into success See how our work drives innovation, growth, and sustainable change Every project tells a story of transformation dive into the journeys of our clients and the results we delivered.
                        </p>
                        <div class="service-feature-wrapper">
                            <div class="row g-4">
                                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="icon-feature-box-items-style">
                                        <div class="icon">
                                            <img src="assets/img/home-3/icon/feature-icon-01.svg" alt="img">
                                        </div>
                                        <div class="content">
                                            <h3>Dedicated Support</h3>
                                            <div class="line"></div>
                                            <p>We are dedicated to guiding you on your financial journey with expertise, integrity and a personalized approach.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="icon-feature-box-items-style">
                                        <div class="icon">
                                            <img src="assets/img/home-3/icon/feature-icon-02.svg" alt="img">
                                        </div>
                                        <div class="content">
                                            <h3>Innovative Solutions</h3>
                                            <div class="line"></div>
                                            <p>We are dedicated to guiding you on your financial journey with expertise, integrity and a personalized approach.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                                    <div class="icon-feature-box-items-style">
                                        <div class="icon">
                                            <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                        </div>
                                        <div class="content">
                                            <h3>Cost-Effectiveness</h3>
                                            <div class="line"></div>
                                            <p>We are dedicated to guiding you on your financial journey with expertise, integrity and a personalized approach.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".6s">
                                <div class="service-details-thumb-1">
                                    <div class="thumb">
                                        <img src="assets/img/inner/service-details-02.jpg" alt="img">
                                    </div>
                                    <h3 class="title-3">
                                        Increased Customer Satisfaction
                                    </h3>
                                    <p class="mt-2">
                                        Discover how we’ve helped businesses grow transform and succeed through strategic consulting solutions Explore our portfolio of the impactful projects each solve unique business challenges From startups to established enterprises Discover how we’ve helped businesses grow transform and succeed through.
                                    </p>
                                    <div class="list-items">
                                        <ul class="wow fadeInUp" data-wow-delay=".4s">
                                            <li>
                                                <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                                Regulatory Investigations
                                            </li>
                                            <li>
                                                <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                                Anit- Competitive Conduct
                                            </li>
                                        </ul>
                                        <ul class="wow fadeInUp" data-wow-delay=".6s">
                                            <li>
                                                <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                                Competitive Work Analysis
                                            </li>
                                            <li>
                                                <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                                Innovation. Strategy. Success.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".8s">
                                <div class="service-details-thumb-1">
                                    <div class="thumb">
                                        <img src="assets/img/inner/service-details-03.jpg" alt="img">
                                    </div>
                                    <h3 class="title-3">
                                        Range of Customer Services
                                    </h3>
                                    <p class="mt-2">
                                        Grow transform and succeed through strategic consulting solutions Explore our portfolio of the impactful projects each tailored to solve unique business challenges From startups to established enterprises
                                    </p>
                                    <div class="choose-feature wow fadeInUp" data-wow-delay=".6s">
                                        <h3 class="box-title">Business Consulting</h3>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 95%; animation: 2.6s ease 0s 1 normal none running animate-positive; opacity: 1;">
                                                <div class="progress-value"><span class="counter-number2">95</span>%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="choose-feature wow fadeInUp" data-wow-delay=".8s">
                                        <h3 class="box-title">Finance Consulting</h3>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 85%; animation: 2.6s ease 0s 1 normal none running animate-positive; opacity: 1;">
                                                <div class="progress-value"><span class="counter-number2">85</span>%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


@endsection