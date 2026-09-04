@extends('frontend.layouts.master')
@section('title', 'Tour & Travel')
@section('content')

 <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner/breadcroumb-img.jpg);">
        <div class="container">
            <div class="page-heading">
                <ul class="breadcrumb-list wow fadeInUp">
                    <li> <i class="fa-solid fa-house"></i><a href="{{ route('home') }}">Home</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i></li>
                    <li>Tour & Travel</li>
                </ul>
                <h1 class="breadcrumb-title split-title">Tour & Travel</h1>
            </div>
        </div>
    </section>

    <!-- Project details Section Start -->
    <section class="project-details-section section-padding fix">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-12">
                    <div class="project-details-wrapper">

                        <h2 class="title split-title">From Travel Inspiration to Bookings & Customer Growth</h2>
                        <p class="mt-2 wow fadeInUp">
                            The travel industry is driven by experience, discovery, trust, convenience, and timely decision-making. Travellers search, compare, explore destinations, check reviews, and interact with travel brands across multiple digital touchpoints before making a booking. A strong digital presence and seamless customer journey are essential to stand out in a competitive travel market.

                        </p>
                        <p class="mt-2 wow fadeInUp" data-wow-delay=".7s">
                            We help travel agencies, tour operators, destination brands, hotels, and tourism businesses turn travel inspiration into qualified enquiries, bookings, and long-term customer relationships. We combine technology, creative content, SEO, social media, and data-driven strategies to build complete digital growth systems.
                        </p>

                        <h3 class="title-2 wow fadeInUp" data-wow-delay=".6s">How We Support Tour & Travel Businesses</h3>

                        <div class="mt-5">
                            <h5>01. Travel Website & Technology</h5>
                            <p>Build engaging, user-friendly websites with booking, enquiry, and travel solutions.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h5>02. Google & Meta Ads</h5>
                            <p>Run targeted campaigns to reach travellers actively searching for destinations.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h5>03. Lead Generation</h5>
                            <p>Generate qualified travel enquiries through SEO, paid campaigns, social media, and landing pages.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h5>04. Lead Nurturing & Automation</h5>
                            <p>Automate enquiries, follow-ups, reminders, offers, and customer communication.

                            </p>
                        </div>
                        <div class="mt-5">
                            <h5>05. Social Media & Content</h5>
                            <p>Create destination-focused content, reels, campaigns, and travel stories that inspire bookings.</p>
                        </div>
                        <div class="mt-5">
                            <h5>06. Influencer & Creator Marketing</h5>
                            <p>Collaborate with relevant travel creators to increase destination awareness, trust, and reach.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h5>07. Travel Photography & Videography</h5>
                            <p>Showcase destinations, hotels, tours, experiences, and packages through professional visual content.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h5>08. Booking & CRM Technology</h5>
                            <p>Connect booking systems, CRM, enquiry management, analytics, and digital platforms for smoother operations.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h5>09. Conversion & Customer Growth</h5>
                            <p>Turn travel enquiries into bookings while building repeat customers and long-term relationships.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h5>10. Performance Analytics</h5>
                            <p>Track enquiries, bookings, campaign performance, customer behaviour, and ROI to optimise growth.
                            </p>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection