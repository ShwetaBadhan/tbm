@extends('frontend.layouts.master')
@section('title','Blog Details')
@section('content')

     <!-- Breadcrumb Section Start -->
                <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner/breadcroumb-img.jpg);">
                    <div class="container">
                        <div class="page-heading">
                            <ul class="breadcrumb-list wow fadeInUp">
                                <li> <i class="fa-solid fa-house"></i><a href="{{ route('home') }}">Home</a></li>
                                <li><i class="fa-solid fa-chevron-right"></i></li>
                                <li>Blog Details</li>
                            </ul>
                            <h1 class="breadcrumb-title split-title">Blog Details</h1>
                        </div>
                    </div>
                </section>

                <!-- News-standard Section Start -->
                <section class="news-standard-section section-padding">
                    <div class="container">
                        <div class="news-details-area">
                            <div class="row g-4">
                                <div class="col-12 col-lg-8">
                                    <div class="blog-post-details">
                                        <div class="single-blog-post">
                                            <div class="post-featured-thumb fix">
                                                <img data-speed=".8" src="assets/img/inner/blog-post-5.jpg" alt="">
                                            </div>
                                            <div class="post-content">
                                                <ul class="post-list d-flex align-items-center">
                                                    <li>
                                                        <i class="fa-regular fa-user"></i>
                                                        By Admin
                                                    </li>
                                                    <li>
                                                        <i class="fa-solid fa-calendar-days"></i>
                                                        18 Dec, 2025
                                                    </li>
                                                    <li>
                                                        <i class="fa-solid fa-tag"></i>
                                                       Corporate
                                                    </li>
                                                </ul>
                                                <h2>Healthy Cooking Made Easy With Nutritious Recipes</h2>
                                                <p class="mb-3">
                                                    Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat. Duis aute irure and dolor in reprehenderit.
                                                </p>
                                                <p class="mb-3">
                                                    The is ipsum dolor sit amet consectetur adipiscing elit. Fusce eleifend porta arcu In hac habitasse the is platea augue thelorem turpoi dictumst. In lacus libero faucibus at malesuada sagittis placerat eros sed istincidunt augue ac ante rutrum sed the is sodales augue consequat.
                                                </p>
                                                <p>
                                                    Nulla facilisi. Vestibulum tristique sem in eros eleifend imperdiet. Donec quis convallis neque. In id lacus pulvinar lacus, eget vulputate lectus. Ut viverra bibendum lorem, at tempus nibh mattis in. Sed a massa eget lacus consequat auctor.
                                                </p>
                                                <div class="hilight-text mt-4 mb-4">
                                                    <p>Pellentesque sollicitudin congue dolor non aliquam. Morbi volutpat, nisi vel
                                                        ultricies urnacondimentum, sapien neque
                                                        lobortis tortor, quis efficitur mi ipsum eu metus. Praesent eleifend orci sit
                                                        amet
                                                        est vehicula.</p>
                                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0 20.3698H7.71428L2.57139 30.5546H10.2857L15.4286 20.3698V5.09247H0V20.3698Z" fill="#1D8B8A"></path>
                                                            <path d="M20.5703 5.09247V20.3698H28.2846L23.1417 30.5546H30.856L35.9989 20.3698V5.09247H20.5703Z" fill="#1D8B8A"></path>
                                                        </svg>
                                                </div>
                                                <p class="mt-4 mb-5">
                                                    Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros.
                                                </p>
                                                <div class="row g-4">
                                                    <div class="col-lg-12">
                                                        <div class="details-image">
                                                            <img src="assets/img/inner/blog-post-6.jpg" alt="img">
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="pt-5">
                                                    Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat. Duis aute irure and dolor in reprehenderit.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat. Duis aute irure and dolor in reprehenderit.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row tag-share-wrap mt-4 mb-5">
                                            <div class="col-lg-8 col-12">
                                                <div class="tagcloud">                                   
                                                    <a href="{{ route('blog-details') }}">News</a>
                                                    <a href="{{ route('blog-details') }}">business</a>
                                                    <a href="{{ route('blog-details') }}">marketing</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-12 mt-3 mt-lg-0 text-lg-end">
                                                <div class="social-share">
                                                    <span class="me-3">Share:</span>
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comments-area">
                                            <div class="comments-heading">
                                                <h3>02 Comments</h3>
                                            </div>
                                            <div class="blog-single-comment d-flex gap-4 pt-4 pb-5">
                                                <div class="image">
                                                    <img src="assets/img/inner/post-comment-1.png" alt="image">
                                                </div>
                                                <div class="content">
                                                    <div class="head d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                                        <div class="con">
                                                            <h3><a href="{{ route('blog-details') }}">Devid Malan</a></h3>
                                                            <span>March 20, 2024 at 2:37 pm</span>
                                                        </div>
                                                        <div class="star">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p class="mt-30 mb-4">Neque porro est qui dolorem ipsum quia quaed inventor
                                                        veritatis et quasi
                                                        architecto var sed efficitur turpis gilla sed
                                                        sit amet finibus eros. Lorem Ipsum is simply dummy</p>
                                                    <a href="{{ route('blog-details') }}" class="reply">Reply</a>
                                                </div>
                                            </div>
                                            <div class="blog-single-comment bb-none d-flex gap-4 pt-5">
                                                <div class="image">
                                                    <img src="assets/img/inner/post-comment-2.png" alt="image">
                                                </div>
                                                <div class="content">
                                                    <div class="head d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                                        <div class="con">
                                                            <h3><a href="{{ route('blog-details') }}">Alex Flores</a></h3>
                                                            <span>March 20, 2024 at 2:37 pm</span>
                                                        </div>
                                                        <div class="star">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p class="mt-30 mb-4">Neque porro est qui dolorem ipsum quia quaed inventor
                                                        veritatis et quasi
                                                        architecto var sed efficitur turpis gilla sed
                                                        sit amet finibus eros. Lorem Ipsum is simply dummy</p>
                                                    <a href="{{ route('blog-details') }}" class="reply">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-form-wrap">
                                            <h3>Leave a Comments</h3>
                                            <form action="#" id="contact-form" method="POST">
                                                <div class="row g-4">
                                                    <div class="col-lg-6">
                                                        <div class="form-clt">
                                                            <input type="text" name="name" id="name" placeholder="Your Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-clt">
                                                            <input type="text" name="email" id="email2" placeholder="Your Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-clt">
                                                            <textarea name="message" id="message" placeholder="Write Message"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <button type="submit" class="theme-btn">
                                                            <span class="btn-arrow-left"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                            <span class="btn-title">Post Comment</span>
                                                            <span class="btn-arrow-right"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="main-sideber sticky-style">
                                        <div class="single-sideber-widget">
                                            <div class="widget-title">
                                                <h3>Search</h3>
                                            </div>
                                            <div class="search-widget">
                                                <form action="#">
                                                    <input type="text" placeholder="Search here">
                                                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="single-sideber-widget">
                                            <div class="widget-title">
                                                <h3>All Categories</h3>
                                            </div>
                                            <ul class="category-list">
                                                <li><a href="{{ route('blog-details') }}">Branding  </a><span>(08)</span></li>
                                                <li><a href="{{ route('blog-details') }}">Business </a><span>(02)</span></li>
                                                <li><a href="{{ route('blog-details') }}">Consulting </a><span>(10)</span></li>
                                                <li><a href="{{ route('blog-details') }}">Innovations  </a><span>(15)</span></li>
                                                <li><a href="{{ route('blog-details') }}">Managements </a><span>(12)</span></li>
                                                <li><a href="{{ route('blog-details') }}">SEO Marketing  </a><span>(07)</span></li>
                                            </ul>
                                        </div>
                                        <div class="single-sideber-widget">
                                            <div class="widget-title">
                                                <h3>Popular Articles</h3>
                                            </div>
                                            <div class="recent-post-area">
                                                <div class="recent-items">
                                                    <div class="recent-thumb">
                                                        <img src="assets/img/inner/post-01.jpg" alt="img">
                                                    </div>
                                                    <div class="recent-content">
                                                        <h4>
                                                            <a href="{{ route('blog-details') }}">
                                                            More effective schedules in remote work
                                                            </a>
                                                        </h4>
                                                        <ul>
                                                            <li>
                                                                March 26, 2025
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="recent-items">
                                                    <div class="recent-thumb">
                                                        <img src="assets/img/inner/post-02.jpg" alt="img">
                                                    </div>
                                                    <div class="recent-content">
                                                        <h4>
                                                            <a href="{{ route('blog-details') }}">
                                                            It Really Have Good Feeling When You Enjoy 
                                                            </a>
                                                        </h4>
                                                        <ul>
                                                            <li>
                                                                March 26, 2025
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="recent-items">
                                                    <div class="recent-thumb">
                                                    <img src="assets/img/inner/post-03.jpg" alt="img">
                                                    </div>
                                                    <div class="recent-content">
                                                        <h4>
                                                            <a href="{{ route('blog-details') }}">
                                                            Best Dressed Girl in Fashion Industry in 2021
                                                            </a>
                                                        </h4>
                                                        <ul>
                                                            <li>
                                                                March 26, 2025
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-sideber-widget mb-0">
                                            <div class="widget-title">
                                                <h3>Categories</h3>
                                            </div>
                                            <div class="tagcloud">
                                                <a href="{{ route('blog-details') }}">#Marketing</a>     
                                                <a href="{{ route('blog-details') }}">#Business</a>
                                                <a href="{{ route('blog-details') }}">#Lifestyle</a>
                                                <a href="{{ route('blog-details') }}">#Education</a>
                                                <a href="{{ route('blog-details') }}">#Travel</a>
                                                <a href="{{ route('blog-details') }}">#Trending</a>
                                                <a href="{{ route('blog-details') }}">#IT</a>
                                                <a href="{{ route('blog-details') }}">#Security</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

@endsection