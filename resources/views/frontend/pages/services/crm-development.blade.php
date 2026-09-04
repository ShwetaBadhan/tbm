@extends('frontend.layouts.master')
@section('title', 'CRM Development')
@section('content')


    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner/breadcroumb-img.jpg);">
        <div class="container">
            <div class="page-heading">
                <ul class="breadcrumb-list wow fadeInUp">
                    <li> <i class="fa-solid fa-house"></i><a href="{{ route('home') }}">Home</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i></li>
                    <li>CRM Development</li>
                </ul>
                <h1 class="breadcrumb-title split-title">CRM Development</h1>
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
                <h2 class="title split-title">Turn Customer Data Into Better Relationships & Faster Growth</h2>
                <p class="mt-2 wow fadeInUp">
                    We develop CRM solutions that help businesses organise customer information, manage leads, streamline
                    sales processes, and build stronger customer relationships. From custom CRM platforms to integrations
                    and automated workflows, we create systems that fit the way your business actually operates.
                </p>
                <p class="mt-3 wow fadeInUp" data-wow-delay=".2s">
                    Our CRM solutions bring sales, marketing, customer communication, and reporting into one connected
                    system—helping teams work more efficiently, reduce missed opportunities, and make better decisions.
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
                                    <h3>01. Custom CRM Development</h3>
                                    <div class="line"></div>
                                    <p>Build CRM platforms tailored to your business processes, teams, workflows, and
                                        industry requirements.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-02.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>02. Lead Management</h3>
                                    <div class="line"></div>
                                    <p>Capture, organise, assign, track, and manage leads throughout the complete sales
                                        journey.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>03. Sales Pipeline Management</h3>
                                    <div class="line"></div>
                                    <p>Create structured sales pipelines to monitor opportunities from first enquiry to
                                        conversion.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>04. Customer Database Management</h3>
                                    <div class="line"></div>
                                    <p>Centralise customer profiles, interactions, enquiries, transactions, and important
                                        business information.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>05. Workflow & Process Automation</h3>
                                    <div class="line"></div>
                                    <p>Automate repetitive tasks, lead assignments, reminders, follow-ups, notifications,
                                        and internal processes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>06. CRM Integrations</h3>
                                    <div class="line"></div>
                                    <p>Connect your CRM with websites, forms, email, payment systems, marketing platforms,
                                        APIs, and other business tools.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>07. Marketing & Lead Nurturing</h3>
                                    <div class="line"></div>
                                    <p>Support targeted communication, follow-ups, campaigns, customer segmentation, and
                                        lead nurturing.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>08. Reporting & Business Analytics</h3>
                                    <div class="line"></div>
                                    <p>Create dashboards and reports to track leads, sales performance, conversions,
                                        revenue, and team productivity.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>09. Customer Support & Service Management</h3>
                                    <div class="line"></div>
                                    <p>Manage customer requests, tickets, communication history, service activities, and
                                        support workflows.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-feature-box-items-style">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/feature-icon-03.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h3>10. CRM Maintenance & Optimisation</h3>
                                    <div class="line"></div>
                                    <p>Provide ongoing updates, improvements, troubleshooting, security, performance
                                        monitoring, and system support</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
