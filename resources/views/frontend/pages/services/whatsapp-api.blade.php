@extends('frontend.layouts.master')
@section('title','Whatsapp API')
@section('content')

 <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner/breadcroumb-img.jpg);">
        <div class="container">
            <div class="page-heading">
                <ul class="breadcrumb-list wow fadeInUp">
                    <li> <i class="fa-solid fa-house"></i><a href="{{ route('home') }}">Home</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i></li>
                    <li>Whatsapp API</li>
                </ul>
                <h1 class="breadcrumb-title split-title">Whatsapp API</h1>
            </div>
        </div>
    </section>

    <!-- Service details Section Start -->
    <section class="service-details-section section-padding fix">
        <div class="container">
            <div class="service-details-wrapper">
                <div class="service-details-thumb fix">
                    <img data-speed=".8" src="assets/img/service-details/whatsapp-API.jpg" alt="img">
                </div>
                <h2 class="title split-title">Turn WhatsApp Into a Powerful Business Communication Channel</h2>
                <p class="mt-2 wow fadeInUp">
                    We help businesses use WhatsApp as a structured channel for customer communication, lead engagement, notifications, and support. With WhatsApp API solutions, businesses can connect customer conversations with their websites, CRM, marketing campaigns, and internal workflows.
                </p>
                <p class="mt-3 wow fadeInUp" data-wow-delay=".2s">
                    From automated messages and lead follow-ups to order updates and customer support, we help streamline communication while keeping interactions timely, organised, and relevant.
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
                                    <h3>01. WhatsApp Business API Integration</h3>
                                    <div class="line"></div>
                                    <p>Connect your business with WhatsApp API to manage customer communication at scale.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-02.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>02. Lead Capture & Enquiries</h3>
                                    <div class="line"></div>
                                    <p>Capture leads from websites, campaigns, forms, and other digital channels directly into your communication workflow.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>03. Automated Responses</h3>
                                    <div class="line"></div>
                                    <p>Set up automated responses for common enquiries, FAQs, service information, and customer requests.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>04. Lead Follow-Ups</h3>
                                    <div class="line"></div>
                                    <p>Automate reminders and follow-ups to keep prospects engaged throughout the customer journey.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>05. CRM Integration</h3>
                                    <div class="line"></div>
                                    <p>Connect WhatsApp conversations with your CRM to manage leads, customer details, communication history, and sales activities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>06. Notifications & Updates</h3>
                                    <div class="line"></div>
                                    <p>Send appointment reminders, order updates, booking confirmations, payment notifications, and other business alerts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>07. WhatsApp Marketing Campaigns</h3>
                                    <div class="line"></div>
                                    <p>Create targeted customer communication campaigns for offers, launches, promotions, events, and announcements.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>08. Chatbot & Conversational Flows</h3>
                                    <div class="line"></div>
                                    <p>Build structured conversation journeys to guide customers, answer questions, collect information, and route enquiries.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>09. Customer Support</h3>
                                    <div class="line"></div>
                                    <p>Create organised WhatsApp-based support workflows for faster responses and better customer communication.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>10. Analytics & Performance Tracking</h3>
                                    <div class="line"></div>
                                    <p>Monitor message delivery, engagement, responses, leads, and campaign performance to improve communication strategies.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection