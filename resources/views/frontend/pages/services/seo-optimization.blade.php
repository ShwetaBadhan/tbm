@extends('frontend.layouts.master')
@section('title', 'SEO Optimization')
@section('content')

    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner/breadcroumb-img.jpg);">
        <div class="container">
            <div class="page-heading">
                <ul class="breadcrumb-list wow fadeInUp">
                    <li> <i class="fa-solid fa-house"></i><a href="{{ route('home') }}">Home</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i></li>
                    <li>SEO Optimization</li>
                </ul>
                <h1 class="breadcrumb-title split-title">SEO Optimization</h1>
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
                <h2 class="title split-title">Get Found. Get Noticed. Grow Organically.</h2>
                <p class="mt-2 wow fadeInUp">
                    At <b>The Boss Media</b>, we help businesses improve their online visibility and connect with customers
                    who are actively searching for their products or services. Our SEO strategies combine research,
                    optimization, quality content, and continuous improvement to build sustainable organic growth.


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
                                    <h3>Keyword Research</h3>
                                    <div class="line"></div>
                                    <p> Identify the right search terms and opportunities to reach your target audience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-02.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>On-Page SEO</h3>
                                    <div class="line"></div>
                                    <p>Optimize website content, headings, meta tags, URLs, images, and internal linking for
                                        better search visibility.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>Technical SEO</h3>
                                    <div class="line"></div>
                                    <p>Improve your website's technical performance, structure, speed, mobile experience,
                                        and search-engine accessibility.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>Local SEO</h3>
                                    <div class="line"></div>
                                    <p>Help your business become more visible in local searches and reach customers in your
                                        target location.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>Off-Page SEO </h3>
                                    <div class="line"></div>
                                    <p> Build your website's authority through relevant and quality off-page strategies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>Content Optimization</h3>
                                    <div class="line"></div>
                                    <p>Create and optimize useful, search-friendly content that provides value to your
                                        audience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>SEO Audit & Analysis</h3>
                                    <div class="line"></div>
                                    <p> Identify technical issues, ranking opportunities, and areas where your website can
                                        improve.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>Competitor Analysis</h3>
                                    <div class="line"></div>
                                    <p>Analyze your competitors to discover their strategies, strengths, keywords, and
                                        growth opportunities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>SEO Reporting & Monitoring</h3>
                                    <div class="line"></div>
                                    <p>Track rankings, traffic, visibility, and other key performance indicators to measure
                                        progress.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <h3 class="title-2 wow fadeInUp" data-wow-delay=".3s">
                        Why Choose Our SEO Services?

                    </h3>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <ul class="wow fadeInUp" data-wow-delay=".4s">
                            <li>
                                <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                Customized SEO strategies
                            </li>
                            <li>
                                <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                Data-driven approach
                            </li>
                            <li>
                                <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                Focus on relevant traffic
                            </li>
                            <li>
                                <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                Technical & content optimization
                            </li>
                            <li>
                                <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                Continuous monitoring
                            </li>
                            <li>
                                <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                Transparent reporting
                            </li>
                            <li>
                                <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                Long-term growth focus
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
