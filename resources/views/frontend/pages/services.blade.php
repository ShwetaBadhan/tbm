@extends('frontend.layouts.master')
@section('title','Our Services')
@section('content')

 <!-- Breadcrumb Section Start -->
                <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner/breadcroumb-img.jpg);">
                    <div class="container">
                        <div class="page-heading">
                            <ul class="breadcrumb-list wow fadeInUp">
                                <li> <i class="fa-solid fa-house"></i><a href="{{ route('home') }}">Home</a></li>
                                <li><i class="fa-solid fa-chevron-right"></i></li>
                                <li>Our Services</li>
                            </ul>
                            <h1 class="breadcrumb-title split-title">Our Services</h1>
                        </div>
                    </div>
                </section>

                 <!-- Service Section Start -->
                <section class="service-section-inners section-padding">
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                <div class="service-box-items-style-2 mt-0">
                                    <div class="service-thumb">
                                        <img class="hover-img" src="assets/img/home-2/service-01.jpg" alt="img">
                                        <img class="hover-img" src="assets/img/home-2/service-01.jpg" alt="img">
                                        <div class="icon">
                                            <img src="assets/img/home-2/icon/service-icon-01.svg" alt="img">
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h2><a href="{{ route('service-details') }}">It Solutions</a></h2>
                                        <p>Every number tells a story We analyze your data to uncover patterns and highlight for solutions.</p>
                                        <h3 class="sub-titles">
                                            Bank Cost
                                        </h3>
                                        <ul>
                                            <li>
                                                <img src="assets/img/home-1/icon/service-check-icon.svg" alt="img">
                                                Strategy
                                            </li>
                                            <li>
                                                <img src="assets/img/home-1/icon/service-check-icon.svg" alt="img">
                                                Management System
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                <div class="service-box-items-style-2 mt-0">
                                    <div class="service-thumb">
                                        <img class="hover-img" src="assets/img/home-2/service-02.jpg" alt="img">
                                        <img class="hover-img" src="assets/img/home-2/service-02.jpg" alt="img">
                                        <div class="icon">
                                            <img src="assets/img/home-2/icon/service-icon-02.svg" alt="img">
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h2><a href="{{ route('service-details') }}">Business Strategy</a></h2>
                                        <p>Every number tells a story We analyze your data to uncover patterns and highlight for solutions.</p>
                                        <h3 class="sub-titles">
                                            Bank Cost
                                        </h3>
                                        <ul>
                                            <li>
                                                <img src="assets/img/home-1/icon/service-check-icon.svg" alt="img">
                                                Strategy
                                            </li>
                                            <li>
                                                <img src="assets/img/home-1/icon/service-check-icon.svg" alt="img">
                                                Management System
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                <div class="service-box-items-style-2 mt-0">
                                    <div class="service-thumb">
                                        <img class="hover-img" src="assets/img/home-2/service-03.jpg" alt="img">
                                        <img class="hover-img" src="assets/img/home-2/service-03.jpg" alt="img">
                                        <div class="icon">
                                            <img src="assets/img/home-2/icon/service-icon-03.svg" alt="img">
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h2><a href="{{ route('service-details') }}">IT Support</a></h2>
                                        <p>Every number tells a story We analyze your data to uncover patterns and highlight for solutions.</p>
                                       <h3 class="sub-titles">
                                            Bank Cost
                                        </h3>
                                        <ul>
                                            <li>
                                                <img src="assets/img/home-1/icon/service-check-icon.svg" alt="img">
                                                Strategy
                                            </li>
                                            <li>
                                                <img src="assets/img/home-1/icon/service-check-icon.svg" alt="img">
                                                Management System
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                <div class="service-box-items-style-2 mt-0">
                                    <div class="service-thumb">
                                        <img class="hover-img" src="assets/img/home-2/service-04.jpg" alt="img">
                                        <img class="hover-img" src="assets/img/home-2/service-04.jpg" alt="img">
                                        <div class="icon">
                                            <img src="assets/img/home-2/icon/service-icon-04.svg" alt="img">
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h2><a href="{{ route('service-details') }}">Financial Insurance</a></h2>
                                        <p>Every number tells a story We analyze your data to uncover patterns and highlight for solutions.</p>
                                        <h3 class="sub-titles">
                                            Bank Cost
                                        </h3>
                                        <ul>
                                            <li>
                                                <img src="assets/img/home-1/icon/service-check-icon.svg" alt="img">
                                                Strategy
                                            </li>
                                            <li>
                                                <img src="assets/img/home-1/icon/service-check-icon.svg" alt="img">
                                                Management System
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                <div class="service-box-items-style-2 mt-0">
                                    <div class="service-thumb">
                                        <img class="hover-img" src="assets/img/home-2/service-05.jpg" alt="img">
                                        <img class="hover-img" src="assets/img/home-2/service-05.jpg" alt="img">
                                        <div class="icon">
                                            <img src="assets/img/home-2/icon/service-icon-05.svg" alt="img">
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h2><a href="{{ route('service-details') }}">Mergers & Acquisitions</a></h2>
                                        <p>Every number tells a story We analyze your data to uncover patterns and highlight for solutions.</p>
                                        <h3 class="sub-titles">
                                            Bank Cost
                                        </h3>
                                        <ul>
                                            <li>
                                                <img src="assets/img/home-1/icon/service-check-icon.svg" alt="img">
                                                Strategy
                                            </li>
                                            <li>
                                                <img src="assets/img/home-1/icon/service-check-icon.svg" alt="img">
                                                Management System
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                <div class="service-box-items-style-2 mt-0">
                                    <div class="service-thumb">
                                        <img class="hover-img" src="assets/img/home-2/service-06.jpg" alt="img">
                                        <img class="hover-img" src="assets/img/home-2/service-06.jpg" alt="img">
                                        <div class="icon">
                                            <img src="assets/img/home-2/icon/service-icon-06.svg" alt="img">
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h2><a href="{{ route('service-details') }}">Wealth Management</a></h2>
                                        <p>Every number tells a story We analyze your data to uncover patterns and highlight for solutions.</p>
                                        <h3 class="sub-titles">
                                            Bank Cost
                                        </h3>
                                        <ul>
                                            <li>
                                                <img src="assets/img/home-1/icon/service-check-icon.svg" alt="img">
                                                Strategy
                                            </li>
                                            <li>
                                                <img src="assets/img/home-1/icon/service-check-icon.svg" alt="img">
                                                Management System
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                <div class="service-box-items-style-2 mt-0">
                                    <div class="service-thumb">
                                        <img class="hover-img" src="assets/img/home-2/service-07.jpg" alt="img">
                                        <img class="hover-img" src="assets/img/home-2/service-07.jpg" alt="img">
                                        <div class="icon">
                                            <img src="assets/img/home-2/icon/service-icon-07.svg" alt="img">
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h2><a href="{{ route('service-details') }}">Investment Advisory</a></h2>
                                        <p>Every number tells a story We analyze your data to uncover patterns and highlight for solutions.</p>
                                        <h3 class="sub-titles">
                                            Bank Cost
                                        </h3>
                                        <ul>
                                            <li>
                                                <img src="assets/img/home-1/icon/service-check-icon.svg" alt="img">
                                                Strategy
                                            </li>
                                            <li>
                                                <img src="assets/img/home-1/icon/service-check-icon.svg" alt="img">
                                                Management System
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                <div class="service-box-items-style-2 mt-0">
                                    <div class="service-thumb">
                                        <img class="hover-img" src="assets/img/home-2/service-08.jpg" alt="img">
                                        <img class="hover-img" src="assets/img/home-2/service-08.jpg" alt="img">
                                        <div class="icon">
                                            <img src="assets/img/home-2/icon/service-icon-08.svg" alt="img">
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h2><a href="{{ route('service-details') }}">Retirement Planning</a></h2>
                                        <p>Every number tells a story We analyze your data to uncover patterns and highlight for solutions.</p>
                                        <h3 class="sub-titles">
                                            Bank Cost
                                        </h3>
                                        <ul>
                                            <li>
                                                <img src="assets/img/home-1/icon/service-check-icon.svg" alt="img">
                                                Strategy
                                            </li>
                                            <li>
                                                <img src="assets/img/home-1/icon/service-check-icon.svg" alt="img">
                                                Management System
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


@endsection