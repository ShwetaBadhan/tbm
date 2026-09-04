@extends('frontend.layouts.master')
@section('title', 'Contact Us')
@section('content')

    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner/breadcroumb-img.jpg);">
        <div class="container">
            <div class="page-heading">
                <ul class="breadcrumb-list wow fadeInUp">
                    <li> <i class="fa-solid fa-house"></i><a href="{{ route('home') }}">Home</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i></li>
                    <li>Contact Us</li>
                </ul>
                <h1 class="breadcrumb-title split-title">Contact Us</h1>
            </div>
        </div>
    </section>

    <!--Contact Section Start -->
    <section class="contact-section fix section-padding">
        <div class="container container">
            <div class="contact-top">
                <div class="section-title text-center">
                    <span class="sub-title sub-title tz-sub-tilte tz-sub-anim tx-subTitle justify-content-center"><img
                            src="assets/img/sub-title-1.svg" alt="img">Contact Us</span>
                    <h2 class="split-title">Contact Us for Your Help</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="icon-box-items-inners">
                            <div class="icon">
                                <img src="assets/img/inner/contact-icon-01.png" alt="img">
                            </div>
                            <div class="content">
                                <p>Call Us 7/24</p>
                                <h3 class="title"><a href="tel:917657999786">+91 7657999786</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="icon-box-items-inners">
                            <div class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="content">
                                <p>Location</p>
                                <h3 class="title">Office No. 3, Second Floor, D-185, Phase 8B, Industrial Area, Sector 74,
                                    Sahibzada Ajit Singh Nagar (Mohali)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="icon-box-items-inners">
                            <div class="icon">
                                <img src="assets/img/inner/contact-icon-03.png" alt="img">
                            </div>
                            <div class="content">
                                <p>Make a Quote</p>
                                <h3 class="title">
                                    <a href="mailto:info@thebossmedia.co.in" class="link">info@thebossmedia.co.in</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-middle-items">
                <div class="row g-4">
                    <div class="col-lg-6 wow fadeInUp">
                        <form action="" id="contact-form" class="contact-form-box">
                            <h3 class="split-title">Get In Touch</h3>
                            <div class="row g-4 align-items-center justify-content-center">
                                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="form-clt">
                                        <input type="text" name="name" id="name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                    <div class="form-clt">
                                        <input type="text" name="email" id="email2" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                    <div class="form-clt">
                                        <input type="text" name="phone" id="phone" placeholder="Phone number">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                                    <div class="form-clt">
                                        <input type="text" name="subject" id="subject" placeholder="Select Subject">
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".8s">
                                    <div class="form-clt">
                                        <textarea name="message" id="message" placeholder="Write a message..."></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".9s">
                                    <div class="contact-button">
                                        <button type="submit" class="theme-btn">
                                            <span class="btn-arrow-left"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                            <span class="btn-title">Request a Call</span>
                                            <span class="btn-arrow-right"> <i class="fa-solid fa-arrow-up-right"></i>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="google-map-items">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.263792104758!2d76.68356267466059!3d30.710983686685093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fefaaa4a7fc21%3A0xf66a04b4a94e20ac!2sProsperity%20Square!5e0!3m2!1sen!2sin!4v1788503233283!5m2!1sen!2sin"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="strict-origin-when-cross-origin"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
