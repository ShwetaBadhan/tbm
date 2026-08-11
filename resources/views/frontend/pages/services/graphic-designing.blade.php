@extends('frontend.layouts.master')
@section('title', 'Graphic Designing')
@section('content')

    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner/breadcroumb-img.jpg);">
        <div class="container">
            <div class="page-heading">
                <ul class="breadcrumb-list wow fadeInUp">
                    <li> <i class="fa-solid fa-house"></i><a href="{{ route('home') }}">Home</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i></li>
                    <li>Graphic Designing</li>
                </ul>
                <h1 class="breadcrumb-title split-title">Graphic Designing</h1>
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
                <h2 class="title split-title">Creative Designs That Make Your Brand Stand Out.</h2>
                <p class="mt-2 wow fadeInUp">
                    At <b>The Boss Media</b>, we turn ideas into compelling visual experiences that capture attention,
                    communicate your message, and create a strong brand identity. Our graphic design solutions combine
                    <b>creativity, strategy, and consistency</b> to make your brand memorable across every platform.

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
                                    <h3>Logo & Brand Identity</h3>
                                    <div class="line"></div>
                                    <p> Create a distinctive visual identity that represents your brand, values, and
                                        personality.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-02.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>Social Media Designs</h3>
                                    <div class="line"></div>
                                    <p>Eye-catching and engaging creatives designed to strengthen your social media presence
                                        and connect with your audience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>Marketing & Advertising Creatives</h3>
                                    <div class="line"></div>
                                    <p>Professional designs for digital campaigns, advertisements, promotions, and brand
                                        awareness.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>Brochures & Flyers</h3>
                                    <div class="line"></div>
                                    <p>Informative and visually appealing marketing materials that present your products and
                                        services effectively.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>Banners & Posters </h3>
                                    <div class="line"></div>
                                    <p>Creative designs that grab attention and communicate your message instantly.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>Business Cards & Corporate Materials</h3>
                                    <div class="line"></div>
                                    <p>Professional stationery and business materials that maintain a consistent brand
                                        image.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>Presentation Designs</h3>
                                    <div class="line"></div>
                                    <p>Clean, engaging, and professional presentations that make your ideas easier to
                                        understand and remember.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>Packaging & Promotional Designs</h3>
                                    <div class="line"></div>
                                    <p>Creative visual solutions that help your products stand out and create a stronger
                                        customer impression.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <h3 class="title-2 wow fadeInUp" data-wow-delay=".3s">
                        Why Choose Our Design Services?

                    </h3>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <ul class="wow fadeInUp" data-wow-delay=".4s">
                            <li>
                                <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                Creative & original concepts
                            </li>
                            <li>
                                <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                Brand-focused designs
                            </li>
                            <li>
                                <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                Consistent visual identity
                            </li>
                            <li>
                                <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                Modern & professional aesthetics
                            </li>
                            <li>
                                <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                Designs tailored to your audience
                            </li>
                            <li>
                                <img src="assets/img/home-1/icon/check-icon.svg" alt="img">
                                High-quality marketing materials
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
