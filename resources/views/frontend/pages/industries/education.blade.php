@extends('frontend.layouts.master')
@section('title', 'Education')
@section('content')

    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner/breadcroumb-img.jpg);">
        <div class="container">
            <div class="page-heading">
                <ul class="breadcrumb-list wow fadeInUp">
                    <li> <i class="fa-solid fa-house"></i><a href="{{ route('home') }}">Home</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i></li>
                    <li>Education</li>
                </ul>
                <h1 class="breadcrumb-title split-title">Education</h1>
            </div>
        </div>
    </section>

    <!-- Project details Section Start -->
    <section class="project-details-section section-padding fix">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-12">
                    <div class="project-details-wrapper">

                        <h2 class="title split-title">From Student Reach to Enrolment Growth</h2>
                        <p class="mt-2 wow fadeInUp">
                            We help schools, colleges, universities, coaching institutes, and EdTech businesses build
                            connected growth systems using automation, performance marketing, technology, SEO, creative
                            content, and data-driven strategies.

                        </p>
                        <p class="mt-3 wow fadeInUp" data-wow-delay=".2s">
                            From building a strong digital presence and generating qualified admission leads to nurturing
                            prospects, supporting counselling, improving conversions, and strengthening student engagement,
                            we manage the complete digital growth journey.

                        </p>

                        <h3 class="title-2 wow fadeInUp" data-wow-delay=".6s">How We Support Education Businesses</h3>

                        <div class="mt-5">
                            <h5>01. Digital Presence & Technology</h5>
                            <p>Modern websites, platforms, and technology solutions for better student experiences.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h5>02. Performance Marketing</h5>
                            <p>Targeted campaigns that reach the right students and drive admission enquiries.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h5>03. Lead Generation</h5>
                            <p>Generate qualified leads through SEO, paid campaigns, social media, and landing pages.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h5>04. Lead Nurturing & Automation</h5>
                            <p>Automate follow-ups and communication to nurture leads throughout the admission journey.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h5>05. Counselling & Conversion</h5>
                            <p>Turn enquiries into counselling opportunities and improve admission conversions.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h5>06. Student Engagement</h5>
                            <p>Build meaningful engagement through personalised content and digital communication.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h5>07. Technology & IT Support</h5>
                            <p>Reliable website, software, integration, maintenance, and technical support.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h5>08. Measure, Optimise & Scale</h5>
                            <p>Track leads, conversions, admissions, and ROI to continuously improve growth.
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
