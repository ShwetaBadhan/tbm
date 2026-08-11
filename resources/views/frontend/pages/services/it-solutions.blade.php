@extends('frontend.layouts.master')
@section('title', 'IT Solutions')
@section('content')

    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner/breadcroumb-img.jpg);">
        <div class="container">
            <div class="page-heading">
                <ul class="breadcrumb-list wow fadeInUp">
                    <li> <i class="fa-solid fa-house"></i><a href="{{ route('home') }}">Home</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i></li>
                    <li>IT Solutions</li>
                </ul>
                <h1 class="breadcrumb-title split-title">IT Solutions</h1>
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
                <h2 class="title split-title">Smart Technology. Seamless Solutions. Real Business Growth.</h2>
                <p class="mt-2 wow fadeInUp">
                    At The Boss Media, we provide reliable and customized IT solutions designed to help businesses simplify
                    operations, improve efficiency, and build a stronger digital foundation.

                </p>
                <p class="mt-3 wow fadeInUp" data-wow-delay=".2s">
                    From websites and applications to business software and automation, we combine technology, innovation,
                    and practical thinking to create solutions that are built around your business needs.
                </p>
                <h3 class="title-2 wow fadeInUp" data-wow-delay=".3s">
                    What We Offer

                </h3>

                <div class="service-feature-wrapper">
                    <div class="row g-4">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-01.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>Website Development</h3>
                                    <div class="line"></div>
                                    <p>Modern, responsive, and user-friendly websites designed to represent your brand and
                                        support your business goals.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-02.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>Web & Mobile Applications</h3>
                                    <div class="line"></div>
                                    <p>Custom applications built to provide seamless digital experiences for your customers
                                        and teams.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>Custom Software Solutions</h3>
                                    <div class="line"></div>
                                    <p>Business-focused software developed to address specific operational requirements and
                                        challenges.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>Business Automation</h3>
                                    <div class="line"></div>
                                    <p>Smart digital solutions that help automate repetitive processes, save time, and
                                        improve productivity.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>Website Maintenance </h3>
                                    <div class="line"></div>
                                    <p>Ongoing technical support, updates, maintenance, and optimization to keep your
                                        digital platforms running smoothly.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>Digital Transformation</h3>
                                    <div class="line"></div>
                                    <p>Helping businesses adopt modern technologies and digital processes to work smarter
                                        and stay competitive.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <h3 class="title-2 wow fadeInUp" data-wow-delay=".3s">
                        Why Choose Our IT Solutions?

                    </h3>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <ul class="wow fadeInUp" data-wow-delay=".4s">
                            <li>
                                <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                Customized to your business
                            </li>
                            <li>
                                <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                Scalable and future-ready
                            </li>
                            <li>
                                <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                User-focused technology
                            </li>
                            <li>
                                <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                Reliable technical support
                            </li>
                            <li>
                                <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                Business-oriented approach
                            </li>
                            <li>
                                <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                Focus on efficiency and growth
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
