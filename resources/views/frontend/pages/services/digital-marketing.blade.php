@extends('frontend.layouts.master')
@section('title', 'Digital Marketing')
@section('content')

    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner/breadcroumb-img.jpg);">
        <div class="container">
            <div class="page-heading">
                <ul class="breadcrumb-list wow fadeInUp">
                    <li> <i class="fa-solid fa-house"></i><a href="{{ route('home') }}">Home</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i></li>
                    <li>Digital Marketing</li>
                </ul>
                <h1 class="breadcrumb-title split-title">Digital Marketing</h1>
            </div>
        </div>
    </section>

    <!-- Service details Section Start -->
    <section class="service-details-section section-padding fix">
        <div class="container">
            <div class="service-details-wrapper">
                <div class="service-details-thumb fix">
                    <img data-speed=".8" src="assets/img/service-details/digital-marketing.jpg" alt="img">
                </div>
                <h2 class="title split-title">One Digital Strategy. Every Channel Working Towards Growth.</h2>
                <p class="mt-2 wow fadeInUp">
                    We help businesses build a connected digital presence that attracts the right audience, generates
                    opportunities, strengthens brand visibility, and supports business growth. Our digital marketing
                    strategies bring together search, social media, content, advertising, and online engagement to create a
                    consistent customer journey across digital channels.
                </p>
                <p class="mt-3 wow fadeInUp" data-wow-delay=".2s">
                    From building awareness and generating traffic to nurturing prospects and improving conversions, we plan
                    and manage campaigns around your business objectives while continuously measuring what works.
                </p>
                <h3 class="title-2 wow fadeInUp" data-wow-delay=".3s">
                    What We Provide

                </h3>

                <div class="service-feature-wrapper">
                    <div class="row g-4">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-01.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>01. Digital Marketing Strategy</h3>
                                    <div class="line"></div>
                                    <p>Develop a complete digital roadmap based on your business goals, audience, industry,
                                        competitors, and growth opportunities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-02.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>02. Search Engine Marketing</h3>
                                    <div class="line"></div>
                                    <p>Google Ads and search campaigns designed to increase visibility, traffic, enquiries,
                                        and conversions..</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>03. Social Media Marketing</h3>
                                    <div class="line"></div>
                                    <p>Strategy, content, creative design, reels, community management, campaigns, and
                                        social media growth.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>04. SEO + AEO</h3>
                                    <div class="line"></div>
                                    <p>Improve organic search visibility, rankings, website traffic, and opportunities to
                                        appear in answer-driven search experiences.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>05. Content Marketing</h3>
                                    <div class="line"></div>
                                    <p>Create blogs, articles, landing pages, website content, social content, and campaigns
                                        that attract and engage your audience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>06. Lead Generation</h3>
                                    <div class="line"></div>
                                    <p>Build targeted campaigns and digital funnels to attract relevant prospects and create
                                        qualified business opportunities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>07. Remarketing & Customer Engagement</h3>
                                    <div class="line"></div>
                                    <p>Reconnect with existing website visitors and audiences through targeted campaigns and
                                        personalised communication.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>08. Influencer & Creator Marketing</h3>
                                    <div class="line"></div>
                                    <p>Plan and manage creator collaborations to increase brand awareness, reach new
                                        audiences, and build trust.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>09. Conversion Optimisation</h3>
                                    <div class="line"></div>
                                    <p>Improve landing pages, CTAs, offers, creatives, and customer journeys to turn digital
                                        traffic into meaningful actions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>10. Analytics & Reporting</h3>
                                    <div class="line"></div>
                                    <p>Monitor traffic, engagement, leads, conversions, customer acquisition, and campaign
                                        performance to guide ongoing optimisation.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
