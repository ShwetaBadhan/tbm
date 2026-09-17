@extends('frontend.layouts.master')
@section('title', 'SEO and AEO')
@section('content')

    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner/breadcroumb-img.jpg);">
        <div class="container">
            <div class="page-heading">
                <ul class="breadcrumb-list wow fadeInUp">
                    <li> <i class="fa-solid fa-house"></i><a href="{{ route('home') }}">Home</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i></li>
                    <li>SEO and AEO</li>
                </ul>
                <h1 class="breadcrumb-title split-title">SEO and AEO</h1>
            </div>
        </div>
    </section>

    <!-- Service details Section Start -->
    <section class="service-details-section section-padding fix">
        <div class="container">
            <div class="service-details-wrapper">
                <div class="service-details-thumb fix">
                    <img data-speed=".8" src="assets/img/service-details/seo.jpg" alt="img">
                </div>
                <h2 class="title split-title">Be Found in Search. Become the Answer.</h2>
                <p class="mt-2 wow fadeInUp">
                    We help businesses improve their online visibility across traditional search engines and emerging
                    answer-driven platforms. Our SEO and AEO strategies focus on increasing relevant traffic, improving
                    search presence, building authority, and helping your brand appear when potential customers are actively
                    looking for solutions.
                </p>
                <p class="mt-3 wow fadeInUp" data-wow-delay=".2s">
                    From technical optimisation and keyword strategy to content, local search, and answer-focused
                    optimisation, we build a search presence designed for long-term growth.
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
                                    <h3>01. SEO Strategy & Audit</h3>
                                    <div class="line"></div>
                                    <p>Analyse your website, competitors, search visibility, technical health, and growth
                                        opportunities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-02.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>02. Keyword Research</h3>
                                    <div class="line"></div>
                                    <p>Identify high-value keywords, search intent, long-tail opportunities, and topics
                                        relevant to your business.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>03. On-Page SEO</h3>
                                    <div class="line"></div>
                                    <p>Optimise page titles, meta descriptions, headings, content, internal links, URLs, and
                                        other on-page elements.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>04. Technical SEO</h3>
                                    <div class="line"></div>
                                    <p>Improve website structure, crawlability, indexing, page performance, mobile
                                        experience, and technical issues.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>05. Content SEO</h3>
                                    <div class="line"></div>
                                    <p>Create search-focused website content, blogs, landing pages, and topic clusters
                                        designed around user intent.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>06. Local SEO</h3>
                                    <div class="line"></div>
                                    <p>Improve local visibility through Google Business Profile optimisation, local content,
                                        citations, and location-based search strategies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>07. AEO – Answer Engine Optimisation</h3>
                                    <div class="line"></div>
                                    <p>Optimise content to provide clear, structured answers that can improve visibility
                                        across AI-powered search.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>08. Authority & Off-Page SEO</h3>
                                    <div class="line"></div>
                                    <p>Strengthen website authority through quality backlinks, digital PR, relevant
                                        listings, and off-page strategies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>09. Competitor & Search Analysis</h3>
                                    <div class="line"></div>
                                    <p>Monitor competitors, ranking opportunities, search trends, content gaps, and changes
                                        in the search landscape.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>10. SEO Reporting & Optimisation</h3>
                                    <div class="line"></div>
                                    <p>Track rankings, organic traffic, visibility, conversions, and other key metrics to
                                        continuously improve performance.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
