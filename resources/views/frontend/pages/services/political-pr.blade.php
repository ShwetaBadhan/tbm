@extends('frontend.layouts.master')
@section('title', 'Political PR')
@section('content')

  <!-- Hero Section Start -->
                <section class="hero-section-9 hero-9">
                    <div class="dotted-shape">
                        <img src="assets/img/home-9/dotted-shape.png" alt="img">
                    </div>
                    <div class="hero-shape-9 float-bob-x">
                        <img src="assets/img/home-9/hero-shape-1.png" alt="img">
                    </div>
                    <div class="social-icon d-grid align-items-center">
                        <span class="line"></span>
                        <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                        <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                        <a href="javascript:void(0)"><i class="fab fa-vimeo-v"></i></a>
                        <a href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a>
                        <span>FOLLOW:</span>
                    </div>
                    <div class="hero-height">
                        <div class="hero-bg bg-cover" style="background-image: url('assets/img/home-9/hero-bg.jpg');"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="hero-content wow fadeInUp" data-wow-delay=".3s">
                                        <h1 style="font-size: 68px; !important">
                                            <span> Power your campaign. <br> Reach every voter. </span> 
                                              
                                        </h1>
                                        <p class="hero-text">
                                            Complete political campaign solutions designed to build visibility, engage voters and create a stronger digital presence — from the first strategy session to election day.
                                        </p>
                                    </div>
                                    <div class="hero-button wow fadeInUp" data-wow-delay=".8s">
                                        <a href="{{ route('contact-us') }}" class="theme-btn">
                                            <span class="btn-arrow-left"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                            <span class="btn-title">Free Consulting</span>
                                            <span class="btn-arrow-right"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                 <!-- Pricing Section Start -->
            <section class="pricing-section-2 section-padding fix">
                <div class="shape-1">
                    <img src="assets/img/home-2/pricing-shape.png" alt="img">
                </div>
                <div class="container">
                    <div class="section-title text-center">
                        <span class="sub-title sub-title tz-sub-tilte tz-sub-anim tx-subTitle justify-content-center"><img src="assets/img/sub-title-1.svg" alt="img">CAMPAIGN PACKAGES</span>
                        <h2 class="split-title">Campaign packages built <br> for every stage</h2>
                        <p class="mt-3 wow fadeInUp" data-wow-delay=".2s">
                            Whether you're contesting locally or running a large-scale election campaign, <br> choose the level of support that fits your campaign.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="pricing-box-items">
                                <div class="pricing-head">
                                    <h2>₹49,999</h2>
                                    <sup>/ campaign</sup>
                                </div>
                                <div class="pricing-content">
                                    <span>Normal Package</span>
                                    <h3>Starter</h3>
                                    <div class="line"></div>
                                    <p>For local campaigns and emerging candidates</p>
                                    <ul>
                                        <li>
                                            <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                            Campaign strategy consultation
                                        </li>
                                        <li>
                                            <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                            Social media setup
                                        </li>
                                        <li>
                                            <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                            Facebook & Instagram management
                                        </li>
                                        <li>
                                            <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                            12 creative posts
                                        </li>
                                        <li>
                                            <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                            4 campaign videos
                                        </li>
                                        <li>
                                            <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                            Basic website / landing page
                                        </li>
                                        <li>
                                            <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                            Candidate profile design
                                        </li>
                                        <li>
                                            <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                            Monthly performance report
                                        </li>
                                        <li>
                                            <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                            Campaign content calendar
                                        </li>
                                    </ul>
                                </div>
                                <a href="{{ route('contact-us') }}" class="pricing-theme-btn">
                                    Buy Standard Plan
                                    <i class="fa-solid fa-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="pricing-box-items">
                                <div class="pricing-head">
                                    <h2>₹99,999</h2>
                                    <sup> / campaign</sup>
                                </div>
                                <div class="pricing-content">
                                    <span>Standard Maintain</span>
                                    <h3>Growth</h3>
                                    <div class="line"></div>
                                    <p>For candidates looking to expand their digital reach</p>
                                    <ul>
                                        <li>
                                            <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                            Complete campaign strategy
                                        </li>
                                        <li>
                                            <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                            Social media management
                                        </li>
                                        <li>
                                            <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                            20+ creative posts
                                        </li>
                                        <li>
                                            <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                            8 short campaign videos
                                        </li>
                                        <li>
                                            <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                            Candidate branding
                                        </li>
                                        <li>
                                            <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                            Campaign website
                                        </li>
                                        <li>
                                            <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                            Voter engagement strategy
                                        </li>
                                        <li>
                                            <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                            WhatsApp campaign support
                                        </li>
                                        <li>
                                            <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                            Content & copywriting
                                        </li>
                                        <li>
                                            <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                            Analytics & performance reports
                                        </li>
                                    </ul>
                                </div>
                                <a href="{{ route('contact-us') }}" class="pricing-theme-btn">
                                    Buy Standard Plan
                                    <i class="fa-solid fa-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="pricing-box-items">
                                <div class="pricing-head">
                                    <h2>Custom Pricing</h2>
                                    <sup>/ campaign</sup>
                                </div>
                                <div class="pricing-content">
                                    <span>Standard Quality</span>
                                    <h3>Election Command</h3>
                                    <div class="line"></div>
                                    <p>End-to-end campaign management tailored to your constituency and objectives.</p>
                                    <ul>
                                        <li>
                                            <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                            Complete campaign strategy
                                        </li>
                                        <li>
                                            <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                            Social media management
                                        </li>
                                        <li>
                                            <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                            20+ creative posts
                                        </li>
                                        <li>
                                            <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                            8 short campaign videos
                                        </li>
                                        <li>
                                            <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                            Candidate branding
                                        </li>
                                        <li>
                                            <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                            Campaign website
                                        </li>
                                        <li>
                                            <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                            Voter engagement strategy
                                        </li>
                                        <li>
                                            <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                            WhatsApp campaign support
                                        </li>
                                        <li>
                                            <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                            Content & copywriting
                                        </li>
                                        <li>
                                            <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                            Analytics & performance reports
                                        </li>
                                    </ul>
                                </div>
                                <a href="{{ route('contact-us') }}" class="pricing-theme-btn">
                                    Buy Standard Plan
                                    <i class="fa-solid fa-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

             <!-- Work Process Section Start -->
            <section class="work-process-section-4 section-padding fix">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-xl-6 col-lg-6">
                            <div class="work-process-left-thumb-style-4">
                                <div class="section-title mb-0">
                                    <span class="sub-title sub-title tz-sub-tilte tz-sub-anim tx-subTitle"><img src="assets/img/sub-title-1.svg" alt="img">FULL-SERVICE SUPPORT</span>
                                    <h2 class="split-title">Everything your campaign needs</h2>
                                    <p>Not individual marketing services — one coordinated system built for elections.</p>
                                </div>
                                <div class="work-process-thumb thumb-style-6 fix wow fadeInUp" data-wow-delay=".3s">
                                    <img data-speed=".8" src="assets/img/home-6/work-process-01.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <ul class="work-process-content-style-4 content-style-6">
                                <li class="wow fadeInUp" data-wow-delay=".3s">
                                    <div class="icon-items">
                                        <div class="number">
                                            01
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Campaign Strategy</h3>
                                        <p>
                                            Build a focused campaign roadmap.
                                        </p>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay=".5s">
                                    <div class="icon-items">
                                        <div class="number">
                                            02
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Digital Presence</h3>
                                        <p>
                                            Build a strong online identity for the candidate.
                                        </p>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay=".7s">
                                    <div class="icon-items">
                                        <div class="number">
                                            03
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Social Media Campaigns</h3>
                                        <p>
                                            Consistent, engaging and campaign-focused content.
                                        </p>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay=".9s">
                                    <div class="icon-items">
                                        <div class="number">
                                            04
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Video & Creative</h3>
                                        <p>
                                            High-impact campaign videos, graphics and reels.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

  <!-- Counter Section Start -->
            <section class="counter-section-3 section-padding fix pt-0">
                <div class="container">
                    <div class="counter-wrap-3">
                        <div class="counter-box-items-style-3 wow fadeInUp" data-wow-delay=".3s">
                            <h2><span class="count">100</span>+</h2>
                            <h3>Campaigns Supported</h3>
                            <div class="line"></div>
                            {{-- <p>
                                Years of expertise, our results speak for themselves
                            </p> --}}
                        </div>
                         <div class="counter-box-items-style-3 wow fadeInUp" data-wow-delay=".5s">
                            <h2><span class="count">25</span>k</h2>
                            <h3>Cities Reached</h3>
                            <div class="line"></div>
                            {{-- <p>
                                Years of expertise, our results speak for themselves
                            </p> --}}
                        </div>
                        <div class="counter-box-items-style-3 wow fadeInUp" data-wow-delay=".7s">
                            <h2><span class="count">1000000</span>+</h2>
                            <h3>Voter <br> Interactions</h3>
                            <div class="line"></div>
                            {{-- <p>
                                Years of expertise, our results speak for themselves
                            </p> --}}
                        </div>
                        <div class="counter-box-items-style-3 wow fadeInUp" data-wow-delay=".7s">
                            <h2><span class="count">95</span>%</h2>
                            <h3>Campaign Satisfaction</h3>
                            <div class="line"></div>
                            {{-- <p>
                                Years of expertise, our results speak for themselves
                            </p> --}}
                        </div>
                    </div>
                </div>
            </section>


             <!-- Work Process Section Start -->
                <section class="work-process-section-4 section-padding fix pt-0">
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-xl-5 col-lg-6">
                                <div class="work-process-left-thumb-style-4">
                                    <div class="section-title mb-0">
                                        <span class="sub-title sub-title tz-sub-tilte tz-sub-anim tx-subTitle"><img src="assets/img/sub-title-1.svg" alt="img">Our Working Process</span>
                                        <h2 class="split-title">The campaign process</h2>
                                        <p>A structured path from first conversation to election day.</p>
                                    </div>
                                    <div class="work-process-thumb wow fadeInUp" data-wow-delay=".2s">
                                        <img src="assets/img/home-4/work-process-01.jpg" alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6">
                                <ul class="work-process-content-style-4">
                                    <li class="wow fadeInUp" data-wow-delay=".3s">
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="assets/img/home-4/work-icon-01.svg" alt="img">
                                            </div>
                                            <div class="number">
                                                01
                                            </div>
                                            <div class="check-shape-1">
                                                <img src="assets/img/home-4/work-shape-1.png" alt="img">
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h3>Discover</h3>
                                            <p>
                                                Understand the candidate, constituency and campaign objectives.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay=".5s">
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="assets/img/home-4/work-icon-02.svg" alt="img">
                                            </div>
                                            <div class="number">
                                                02
                                            </div>
                                            <div class="check-shape-1">
                                                <img src="assets/img/home-4/work-shape-1.png" alt="img">
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h3>Strategize</h3>
                                            <p>
                                                Develop the campaign strategy and communication plan.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay=".7s">
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="assets/img/home-4/work-icon-03.svg" alt="img">
                                            </div>
                                            <div class="number">
                                                03
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h3>Create</h3>
                                            <p>
                                                Produce campaign creatives, videos, websites and content
                                            </p>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                  <!-- Faq Section Start -->
            <section class="faq-section section-padding fix pt-0">
                <div class="container">
                    <div class="row g-4 justify-content-between align-items-center">
                        <div class="col-xl-5 col-lg-6">
                            <div class="faq-left-content">
                                <div class="section-title mb-0">
                                    <span class="sub-title sub-title tz-sub-tilte tz-sub-anim tx-subTitle"><img src="assets/img/sub-title-1.svg" alt="img">Our FAQ’s</span>
                                    <h2 class="split-title">Frequently Asked Questions About Us</h2>
                                </div>
                                <p class="faq-text wow fadeInUp" data-wow-delay=".2s">
                                    Collaboratively disintermediate move to impacter compellingly web architectures without installed
                                </p>
                                <div class="faq-bottom-area wow fadeInUp" data-wow-delay=".4s">
                                    <div class="icon">
                                        <img src="assets/img/home-1/icon/faq-icon-01.svg" alt="img">
                                    </div>
                                    <div class="content">
                                        <p>
                                            <a href="tel:+12(029)838994">+91 7657999786</a>
                                        </p>
                                        <a href="mailto:info@thebossmedia.co.in" class="mail-text">info@thebossmedia.co.in</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="faq-items-style-1">
                                <ul class="accordion-box">
                                    <!--Block-->
                                    <li class="accordion block active-block wow fadeInUp" data-wow-delay=".2s">
                                        <div class="acc-btn active">
                                            How do I know if I need a consultant?
                                            <div class="icon fa-regular fa-plus"></div>
                                        </div>
                                        <div class="acc-content current">
                                            <div class="content">
                                                <div class="text">
                                                    Through a combination of data-driven insights and innovative approaches, we work closely with you to develop customized.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!--Block-->
                                    <li class="accordion block wow fadeInUp" data-wow-delay=".4s">
                                        <div class="acc-btn active">
                                            What types of consulting services do you offer?
                                            <div class="icon fa-regular fa-plus"></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">
                                                    Through a combination of data-driven insights and innovative approaches, we work closely with you to develop customized.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                        <!--Block-->
                                    <li class="accordion block wow fadeInUp" data-wow-delay=".6s">
                                        <div class="acc-btn active">
                                            What makes your consulting firm different from others?
                                            <div class="icon fa-regular fa-plus"></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">
                                                    Through a combination of data-driven insights and innovative approaches, we work closely with you to develop customized.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!--Block-->
                                    <li class="accordion block wow fadeInUp" data-wow-delay=".8s">
                                        <div class="acc-btn active">
                                            What makes your consulting firm different from others?
                                            <div class="icon fa-regular fa-plus"></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">
                                                    Through a combination of data-driven insights and innovative approaches, we work closely with you to develop customized.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!--Block-->
                                    <li class="accordion block wow fadeInUp" data-wow-delay=".9s">
                                        <div class="acc-btn active">
                                            Who can benefit from your consulting services?
                                            <div class="icon fa-regular fa-plus"></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">
                                                    Through a combination of data-driven insights and innovative approaches, we work closely with you to develop customized.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
@endsection