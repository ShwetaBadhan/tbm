@extends('frontend.layouts.master')
@section('title', 'Digital Marketing Company in Mohali | The Boss Media')
@section('meta_description', 'One strategy, every channel. SEO, Google Ads, social media, content and lead generation,
    all working together to grow your business. Talk to The Boss Media.')
@section('canonical', 'https://thebossmedia.co.in/digital-marketing')

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
                <h2 class="title split-title">Connect Every Channel. Create More Opportunities.</h2>
                <p class="mt-2 wow fadeInUp">
                    Build a stronger digital presence with integrated digital marketing services designed to support your
                    business goals. As a digital marketing company in Mohali, we offer a comprehensive range of solutions,
                    including SEO, Google Ads, social media marketing, content creation, and lead generation. Our approach
                    connects every digital channel to create a consistent brand presence, reach the right audience, and
                    generate meaningful business opportunities.
                </p>
                <p class="mt-3 wow fadeInUp" data-wow-delay=".2s">
                    We combine creative thinking, data-driven insights, and a customised marketing strategy to improve brand
                    visibility, increase audience engagement, and drive conversions. From developing an effective social
                    media marketing strategy to managing multi-channel campaigns, our digital marketing solutions focus on
                    delivering measurable results and sustainable business growth.
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
                                    <p>Create a tailored marketing strategy based on your business goals, target audience,
                                        industry, and growth opportunities.</p>
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
                                    <p>Run targeted Google Ads and search campaigns to increase online visibility, website
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
                                    <h3>03. Social Media Marketing</h3>
                                    <div class="line"></div>
                                    <p>Build your brand through social media strategy, content creation, reels, creative
                                        design, and audience engagement.</p>
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
                                    <p>Improve search rankings, organic traffic, and visibility across search engines and
                                        AI-powered answer platforms.</p>
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
                                    <p>Create engaging blogs, articles, website content, landing pages, and social media
                                        content.</p>
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
                                    <p>Generate qualified leads through targeted digital marketing campaigns and
                                        conversion-focused strategies.</p>
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
                                    <p>Reconnect with potential customers through personalised advertising and targeted
                                        remarketing campaigns.</p>
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
                                    <p>Collaborate with relevant creators to expand brand reach, increase awareness, and
                                        build audience trust.</p>
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
                                    <p>Optimise landing pages, CTAs, creatives, and customer journeys to improve
                                        conversions.</p>
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
                                    <p>Track website traffic, engagement, leads, conversions, and campaign performance to
                                        measure marketing results.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
