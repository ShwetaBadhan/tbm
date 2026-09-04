@extends('frontend.layouts.master')
@section('title', 'Real Estate')
@section('content')


    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner/breadcroumb-img.jpg);">
        <div class="container">
            <div class="page-heading">
                <ul class="breadcrumb-list wow fadeInUp">
                    <li> <i class="fa-solid fa-house"></i><a href="{{ route('home') }}">Home</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i></li>
                    <li>Real Estate</li>
                </ul>
                <h1 class="breadcrumb-title split-title">Real Estate</h1>
            </div>
        </div>
    </section>

    <!-- Project details Section Start -->
    <section class="project-details-section section-padding fix">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-12">
                    <div class="project-details-wrapper">

                        <h2 class="title split-title">From Property Visibility to Sales & Growth</h2>
                        <p class="mt-2 wow fadeInUp">
                            We help real estate developers, builders, brokers, and luxury property brands turn properties
                            into powerful digital experiences and measurable sales opportunities. From luxury website
                            development and creative production to Google & Meta Ads, influencer marketing, automation, and
                            technology, we build complete digital growth journeys that attract the right buyers and move
                            them from discovery to enquiry, site visit, and conversion.

                        </p>
                        <p class="mt-2 wow fadeInUp" data-wow-delay=".7s">
                            We support the complete real estate marketing and technology journey—helping businesses attract
                            the right audience, improve sales efficiency, and achieve measurable growth.
                        </p>

                        <h3 class="title-2 wow fadeInUp" data-wow-delay=".6s">How We Support Real Estate Businesses</h3>

                        <div class="mt-5">
                            <h5>01. Luxury Website Development</h5>
                            <p>Create premium, immersive websites that showcase properties and drive enquiries.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h5>02. Google & Meta Ads</h5>
                            <p>Run performance-driven campaigns to reach high-intent buyers and generate qualified leads.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h5>03. Lead Generation</h5>
                            <p>Build targeted campaigns and landing pages that turn property interest into genuine
                                enquiries.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h5>04. Lead Nurturing & Automation</h5>
                            <p>Automate follow-ups, communication, reminders, and lead journeys to improve conversion
                                opportunities.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h5>05. Influencer Marketing</h5>
                            <p>Partner with relevant creators to build property awareness, trust, and audience reach.</p>
                        </div>
                        <div class="mt-5">
                            <h5>06. Property Photography & Videography</h5>
                            <p>Capture professional site videos, property photography, walkthroughs, and promotional
                                content.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h5>07. CGI & Visual Advertising</h5>
                            <p>Create high-impact CGI ads, 3D visuals, renders, and conceptual experiences for properties
                                and upcoming projects.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h5>08. CRM & Technology Support</h5>
                            <p>Connect websites, lead management, CRM, analytics, and automation to streamline the sales
                                process.

                            </p>
                        </div>
                        <div class="mt-5">
                            <h5>09. Site Visit & Conversion Growth</h5>
                            <p>Nurture prospects from enquiry to site visit and help improve booking and conversion
                                opportunities.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h5>10. Performance Analytics</h5>
                            <p>Track leads, CPL, site visits, conversions, campaign performance, and ROI to continuously
                                optimise growth.
                            </p>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
