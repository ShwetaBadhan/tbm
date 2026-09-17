@extends('frontend.layouts.master')
@section('title', 'Social Media Marketing')
@section('content')

    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner/breadcroumb-img.jpg);">
        <div class="container">
            <div class="page-heading">
                <ul class="breadcrumb-list wow fadeInUp">
                    <li> <i class="fa-solid fa-house"></i><a href="{{ route('home') }}">Home</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i></li>
                    <li>Social Media Marketing</li>
                </ul>
                <h1 class="breadcrumb-title split-title">Social Media Marketing</h1>
            </div>
        </div>
    </section>

    <!-- Service details Section Start -->
    <section class="service-details-section section-padding fix">
        <div class="container">
            <div class="service-details-wrapper">
                <div class="service-details-thumb fix">
                    <img data-speed=".8" src="assets/img/service-details/social-media.jpg" alt="img">
                </div>
                <h2 class="title split-title">Building Brands That Get Seen, Remembered & Chosen</h2>
                <p class="mt-2 wow fadeInUp">
                    We help businesses build a strong social media presence that attracts the right audience, strengthens
                    brand identity, and turns engagement into meaningful business opportunities. From strategy and content
                    creation to community management and performance tracking, we manage your social media presence with a
                    clear focus on growth.
                </p>
                <p class="mt-3 wow fadeInUp" data-wow-delay=".2s">
                    Our approach combines creative storytelling, consistent communication, audience insights, and
                    performance data to create content that not only looks good but also supports your business goals.
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
                                    <h3>01. Social Media Strategy</h3>
                                    <div class="line"></div>
                                    <p>Platform-specific strategies based on your brand, audience, industry, and business
                                        objectives.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-02.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>02. Content Planning & Calendars</h3>
                                    <div class="line"></div>
                                    <p>Monthly content calendars covering campaigns, trends, educational content, offers,
                                        and brand communication.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>03. Creative Design</h3>
                                    <div class="line"></div>
                                    <p>Professional social media posts, carousels, infographics, promotional creatives, and
                                        branded visuals.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>04. Reels & Video Content</h3>
                                    <div class="line"></div>
                                    <p>Short-form videos, reels, product videos, trend-based content, and engaging visual
                                        storytelling.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>05. Copywriting & Captions</h3>
                                    <div class="line"></div>
                                    <p>Creative captions, hooks, CTAs, campaign messaging, and content to encourage
                                        engagement.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>06. Community Management</h3>
                                    <div class="line"></div>
                                    <p>Monitor comments, messages, mentions, and audience interactions to maintain
                                        responsive presence.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>07. Influencer & Creator Marketing</h3>
                                    <div class="line"></div>
                                    <p>Identify relevant creators and manage collaborations to increase brand awareness,
                                        reach, and audience trust.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>08. Social Media Campaigns</h3>
                                    <div class="line"></div>
                                    <p>Plan and execute promotional campaigns around product launches, offers, events,
                                        seasonal moments, and business objectives.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>09. Social Media Advertising</h3>
                                    <div class="line"></div>
                                    <p>Paid campaigns across platforms to increase reach, engagement, leads, website
                                        traffic, and conversions.</p>
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
                                    <p>Track reach, engagement, audience growth, leads, conversions, and campaign
                                        performance to continuously improve results.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
