@extends('frontend.layouts.master')
@section('title','About Us | The Boss Media')
@section('content')

 <!-- Breadcrumb Section Start -->
                <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner/breadcroumb-img.jpg);">
                    <div class="container">
                        <div class="page-heading">
                            <ul class="breadcrumb-list wow fadeInUp">
                                <li> <i class="fa-solid fa-house"></i><a href="{{ route('home') }}">Home</a></li>
                                <li><i class="fa-solid fa-chevron-right"></i></li>
                                <li>About Us</li>
                            </ul>
                            <h1 class="breadcrumb-title split-title">About Us</h1>
                        </div>
                    </div>
                </section>

              @include('frontend.components.home.about')

                 <!-- Brand Section Start -->
                <div class="brand-section section-padding pt-0 fix">
                    <div class="brand-top text-center">
                        <p>Chosen by Millions of Learners and Forward-Thinking Companies</p>
                    </div>
                    <div class="container">
                        <div class="swiper brand-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="brand-image">
                                        <img src="assets/img/home-1/brand-01.png" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-image">
                                        <img src="assets/img/home-1/brand-02.png" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-image">
                                        <img src="assets/img/home-1/brand-03.png" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-image">
                                        <img src="assets/img/home-1/brand-04.png" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-image">
                                        <img src="assets/img/home-1/brand-05.png" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-image">
                                        <img src="assets/img/home-1/brand-06.png" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                
@include('frontend.components.home.work')

 <!-- Build Industries Section Start -->
            <section class="build-industries-section-2 section-padding fix">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-xl-5 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="build-industries-thumb-style-2">
                                <img src="assets/img/home-2/bulid-01.jpg" alt="img">
                            </div>
                            <div class="single-circle-bar">
                                <div class="circle-progress" data-percent="85">
                                    <svg viewBox="0 0 120 120">
                                        <circle class="bg" cx="60" cy="60" r="54"></circle>
                                        <circle class="progress" cx="60" cy="60" r="54"></circle>
                                    </svg>
                                    <div class="value">0%</div>
                                </div>
                                <div class="content">
                                    <p>Average increase in sales <br> for our clients</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <div class="build-industries-content-style-2">
                                <div class="section-title mb-0">
                                    <span class="sub-title sub-title tz-sub-tilte tz-sub-anim tx-subTitle"><img src="assets/img/sub-title-1.svg" alt="img">Build Your Industries</span>
                                    <h2 class="split-title">Transforming challenges into opportunities for growth</h2>
                                </div>
                                <div class="build-industries-box">
                                    <ul class="wow fadeInUp" data-wow-delay=".3s">
                                        <li>
                                            <div class="build-industries-items">
                                                <div class="build-list">
                                                    <img src="assets/img/home-2/bulid-02.jpg" alt="img">
                                                    <h3><a href="{{ route('about-us') }}">Advanced Manufacturing <i class="fa-regular fa-arrow-up-right"></i></a></h3>
                                                </div>
                                                <div class="build-list style-margin">
                                                   <img src="assets/img/home-2/bulid-05.jpg" alt="img">
                                                    <h3><a href="{{ route('about-us') }}">Financial Services <i class="fa-regular fa-arrow-up-right"></i></a></h3>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="build-industries-items">
                                                <div class="build-list">
                                                     <img src="assets/img/home-2/bulid-03.jpg" alt="img">
                                                     <h3><a href="{{ route('about-us') }}">Transportation & Logistics <i class="fa-regular fa-arrow-up-right"></i></a></h3>
                                                </div>
                                                <div class="build-list style-margin">
                                                    <img src="assets/img/home-2/bulid-06.jpg" alt="img">
                                                    <h3><a href="{{ route('about-us') }}">Healthcare <i class="fa-regular fa-arrow-up-right"></i></a></h3>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="build-industries-items">
                                                  <div class="build-list">
                                                   <img src="assets/img/home-2/bulid-04.jpg" alt="img">
                                                    <h3><a href="{{ route('about-us') }}">Industry & Manufacturing <i class="fa-regular fa-arrow-up-right"></i></a></h3>
                                                </div>
                                                <div class="build-list style-margin">
                                                   <img src="assets/img/home-2/bulid-07.jpg" alt="img">
                                                    <h3><a href="{{ route('about-us') }}">Non-Profit <i class="fa-regular fa-arrow-up-right"></i></a></h3>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

@endsection