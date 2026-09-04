@extends('frontend.layouts.master')
@section('title', 'Food & Beverage')
@section('content')


 <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner/breadcroumb-img.jpg);">
        <div class="container">
            <div class="page-heading">
                <ul class="breadcrumb-list wow fadeInUp">
                    <li> <i class="fa-solid fa-house"></i><a href="{{ route('home') }}">Home</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i></li>
                    <li>Food & Beverage</li>
                </ul>
                <h1 class="breadcrumb-title split-title">Food & Beverage</h1>
            </div>
        </div>
    </section>

    <!-- Project details Section Start -->
    <section class="project-details-section section-padding fix">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-12">
                    <div class="project-details-wrapper">

                        {{-- <h2 class="title split-title">Smarter Digital Growth for Modern Manufacturing</h2> --}}
                        <p class="mt-2 wow fadeInUp">
                           The food and beverage industry is driven by product innovation, brand experience, customer demand, and speed to market. At The Boss Media, we help food brands, restaurants, cafés, cloud kitchens, and F&B businesses build a strong digital presence and turn customer attention into measurable growth. We handle the digital journey end-to-end—helping businesses attract customers, increase orders, strengthen their brand, and improve overall performance. 

                        </p>
                       
                        <h3 class="title-2 wow fadeInUp" data-wow-delay=".6s">How We Support Food & Beverage Businesses</h3>

                        <div class="mt-5">
                            <h5>01. Website & Digital Presence</h5>
                            <p>Build high-converting websites and digital experiences for your brand.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h5>02. Digital & Social Media Management</h5>
                            <p>Complete social media strategy, content, creatives, reels, engagement, and account management.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h5>03. Professional Photoshoots</h5>
                            <p>Create high-quality food, product, restaurant, and brand visuals that drive engagement.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h5>04. Influencer Marketing</h5>
                            <p>Connect your brand with relevant food creators and influencers to increase reach and awareness.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h5>05. PetPooja Management</h5>
                            <p>Manage and optimise your PetPooja account, menu, products, offers, and digital operations.</p>
                        </div>
                        <div class="mt-5">
                            <h5>06. Zomato & Swiggy Management</h5>
                            <p>Complete account handling, menu optimisation, offers, visibility, customer engagement, and performance monitoring.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h5>07. AI & Marketing Automation</h5>
                            <p>Use AI and automation to streamline customer engagement, campaigns, lead handling, and repetitive processes.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h5>08. Performance & Growth Analytics</h5>
                            <p>Track orders, campaigns, engagement, customer behaviour, and ROI to continuously optimise growth.

                            </p>
                        </div>
                       

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection