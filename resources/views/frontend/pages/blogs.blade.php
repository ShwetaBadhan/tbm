@extends('frontend.layouts.master')
@section('title','Our Blogs')
@section('content')




  <!-- Breadcrumb Section Start -->
                <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner/breadcroumb-img.jpg);">
                    <div class="container">
                        <div class="page-heading">
                            <ul class="breadcrumb-list wow fadeInUp">
                                <li> <i class="fa-solid fa-house"></i><a href="{{ route('home') }}">Home</a></li>
                                <li><i class="fa-solid fa-chevron-right"></i></li>
                                <li>Blog Grid</li>
                            </ul>
                            <h1 class="breadcrumb-title split-title">Blog Grid</h1>
                        </div>
                    </div>
                </section>

                 <!-- News Grid Section Start -->
                <section class="news-section section-padding fix">
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="news-box-main-area mt-0">
                                    <div class="news-box-items">
                                        <img src="assets/img/home-1/news-01.jpg" alt="img">
                                        <div class="post-date">
                                            <h2 class="date">23</h2>
                                            <p>JAN</p>
                                        </div>
                                        <div class="content">
                                            <ul class="post-list">
                                                <li>
                                                    <i class="fa-solid fa-circle-user"></i>
                                                    John Smith
                                                </li>
                                                <li>
                                                    <i class="fa-jelly fa-regular fa-tag"></i>
                                                    Consulting
                                                </li>
                                            </ul>
                                            <h3><a href="{{ route('blog-details') }}">Innovative Solutions for every Business Success</a></h3>
                                        </div>
                                    </div>
                                    <div class="news-hover-box-items">
                                        <div class="post-date d-flex align-items-center justify-content-center">
                                            <div class="date-items">
                                                <h3 class="date">09</h3>
                                                <p>JAN</p>
                                            </div>
                                        </div>
                                        <ul class="post-list">
                                            <li>
                                                <i class="fa-solid fa-circle-user"></i>
                                                John Smith
                                            </li>
                                            <li>
                                                <i class="fa-jelly fa-regular fa-tag"></i>
                                                Consulting
                                            </li>
                                        </ul>
                                        <h3><a href="{{ route('blog-details') }}">Entrepreneur Mindset: Habits That Drive Success</a></h3>
                                        <div class="line"></div>
                                        <p class="news-text">
                                            Through a combination of data-driven insights and innovative approaches, work closely with you to develop
                                        </p>
                                        <a href="{{ route('blog-details') }}" class="link-btn">Learn More
                                            <i class="far fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                <div class="news-box-main-area mt-0">
                                    <div class="news-box-items">
                                        <img src="assets/img/inner/news-grid-04.jpg" alt="img">
                                        <div class="post-date">
                                            <h4>22</h4>
                                            <p>JAN</p>
                                        </div>
                                        <div class="content">
                                            <ul class="post-list">
                                                <li>
                                                    <i class="fa-solid fa-circle-user"></i>
                                                    John Smith
                                                </li>
                                                <li>
                                                    <i class="fa-jelly fa-regular fa-tag"></i>
                                                    Consulting
                                                </li>
                                            </ul>
                                            <h3><a href="{{ route('blog-details') }}">Entrepreneur Mindset: Habits That Drive Success</a></h3>
                                        </div>
                                    </div>
                                    <div class="news-hover-box-items">
                                        <div class="post-date d-flex align-items-center justify-content-center">
                                            <div class="date-items">
                                                <h4>09</h4>
                                                <p>JAN</p>
                                            </div>
                                        </div>
                                        <ul class="post-list">
                                            <li>
                                                <i class="fa-solid fa-circle-user"></i>
                                                John Smith
                                            </li>
                                            <li>
                                                <i class="fa-jelly fa-regular fa-tag"></i>
                                                Consulting
                                            </li>
                                        </ul>
                                        <h3><a href="{{ route('blog-details') }}">Entrepreneur Mindset: Habits That Drive Success</a></h3>
                                        <div class="line"></div>
                                        <p class="news-text">
                                            Through a combination of data-driven insights and innovative approaches, work closely with you to develop
                                        </p>
                                        <a href="{{ route('blog-details') }}" class="link-btn">Learn More
                                            <i class="far fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                                <div class="news-box-main-area mt-0">
                                    <div class="news-box-items">
                                        <img src="assets/img/home-1/news-02.jpg" alt="img">
                                        <div class="post-date">
                                            <h4>21</h4>
                                            <p>JAN</p>
                                        </div>
                                        <div class="content">
                                            <ul class="post-list">
                                                <li>
                                                    <i class="fa-solid fa-circle-user"></i>
                                                    John Smith
                                                </li>
                                                <li>
                                                    <i class="fa-jelly fa-regular fa-tag"></i>
                                                    Consulting
                                                </li>
                                            </ul>
                                            <h3><a href="{{ route('blog-details') }}">How Strategic Planning Drives Marketing Success</a></h3>
                                        </div>
                                    </div>
                                    <div class="news-hover-box-items">
                                        <div class="post-date d-flex align-items-center justify-content-center">
                                            <div class="date-items">
                                                <h4>09</h4>
                                                <p>JAN</p>
                                            </div>
                                        </div>
                                        <ul class="post-list">
                                            <li>
                                                <i class="fa-solid fa-circle-user"></i>
                                                John Smith
                                            </li>
                                            <li>
                                                <i class="fa-jelly fa-regular fa-tag"></i>
                                                Consulting
                                            </li>
                                        </ul>
                                        <h3><a href="{{ route('blog-details') }}">How Strategic Planning Drives Marketing Success</a></h3>
                                        <div class="line"></div>
                                        <p class="news-text">
                                            Through a combination of data-driven insights and innovative approaches, work closely with you to develop
                                        </p>
                                        <a href="{{ route('blog-details') }}" class="link-btn">Learn More
                                            <i class="far fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="news-box-main-area mt-0">
                                    <div class="news-box-items">
                                        <img src="assets/img/inner/news-grid-01.jpg" alt="img">
                                        <div class="post-date">
                                            <h4>23</h4>
                                            <p>JAN</p>
                                        </div>
                                        <div class="content">
                                            <ul class="post-list">
                                                <li>
                                                    <i class="fa-solid fa-circle-user"></i>
                                                    John Smith
                                                </li>
                                                <li>
                                                    <i class="fa-jelly fa-regular fa-tag"></i>
                                                    Consulting
                                                </li>
                                            </ul>
                                            <h3><a href="{{ route('blog-details') }}">5 Proven Strategies to Boost Brand Awareness</a></h3>
                                        </div>
                                    </div>
                                    <div class="news-hover-box-items">
                                        <div class="post-date d-flex align-items-center justify-content-center">
                                            <div class="date-items">
                                                <h4>09</h4>
                                                <p>JAN</p>
                                            </div>
                                        </div>
                                        <ul class="post-list">
                                            <li>
                                                <i class="fa-solid fa-circle-user"></i>
                                                John Smith
                                            </li>
                                            <li>
                                                <i class="fa-jelly fa-regular fa-tag"></i>
                                                Consulting
                                            </li>
                                        </ul>
                                        <h3><a href="{{ route('blog-details') }}">5 Proven Strategies to Boost Brand Awareness</a></h3>
                                        <div class="line"></div>
                                        <p class="news-text">
                                            Through a combination of data-driven insights and innovative approaches, work closely with you to develop
                                        </p>
                                        <a href="{{ route('blog-details') }}" class="link-btn">Learn More
                                            <i class="far fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                <div class="news-box-main-area mt-0">
                                    <div class="news-box-items">
                                        <img src="assets/img/inner/news-grid-02.jpg" alt="img">
                                        <div class="post-date">
                                            <h4>24</h4>
                                            <p>JAN</p>
                                        </div>
                                        <div class="content">
                                            <ul class="post-list">
                                                <li>
                                                    <i class="fa-solid fa-circle-user"></i>
                                                    John Smith
                                                </li>
                                                <li>
                                                    <i class="fa-jelly fa-regular fa-tag"></i>
                                                    Consulting
                                                </li>
                                            </ul>
                                            <h3><a href="{{ route('blog-details') }}">The Role of Data in Modern Marketing Campaign</a></h3>
                                        </div>
                                    </div>
                                    <div class="news-hover-box-items">
                                        <div class="post-date d-flex align-items-center justify-content-center">
                                            <div class="date-items">
                                                <h4>09</h4>
                                                <p>JAN</p>
                                            </div>
                                        </div>
                                        <ul class="post-list">
                                            <li>
                                                <i class="fa-solid fa-circle-user"></i>
                                                John Smith
                                            </li>
                                            <li>
                                                <i class="fa-jelly fa-regular fa-tag"></i>
                                                Consulting
                                            </li>
                                        </ul>
                                        <h3><a href="{{ route('blog-details') }}">The Role of Data in Modern Marketing Campaign</a></h3>
                                        <div class="line"></div>
                                        <p class="news-text">
                                            Through a combination of data-driven insights and innovative approaches, work closely with you to develop
                                        </p>
                                        <a href="{{ route('blog-details') }}" class="link-btn">Learn More
                                            <i class="far fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                                <div class="news-box-main-area mt-0">
                                    <div class="news-box-items">
                                        <img src="assets/img/inner/news-grid-03.jpg" alt="img">
                                        <div class="post-date">
                                            <h4>26</h4>
                                            <p>JAN</p>
                                        </div>
                                        <div class="content">
                                            <ul class="post-list">
                                                <li>
                                                    <i class="fa-solid fa-circle-user"></i>
                                                    John Smith
                                                </li>
                                                <li>
                                                    <i class="fa-jelly fa-regular fa-tag"></i>
                                                    Consulting
                                                </li>
                                            </ul>
                                            <h3><a href="{{ route('blog-details') }}">Despite the benefits of variety & opportunities</a></h3>
                                        </div>
                                    </div>
                                    <div class="news-hover-box-items">
                                        <div class="post-date d-flex align-items-center justify-content-center">
                                            <div class="date-items">
                                                <h4>09</h4>
                                                <p>JAN</p>
                                            </div>
                                        </div>
                                        <ul class="post-list">
                                            <li>
                                                <i class="fa-solid fa-circle-user"></i>
                                                John Smith
                                            </li>
                                            <li>
                                                <i class="fa-jelly fa-regular fa-tag"></i>
                                                Consulting
                                            </li>
                                        </ul>
                                        <h3><a href="{{ route('blog-details') }}">Despite the benefits of variety & opportunities</a></h3>
                                        <div class="line"></div>
                                        <p class="news-text">
                                            Through a combination of data-driven insights and innovative approaches, work closely with you to develop
                                        </p>
                                        <a href="{{ route('blog-details') }}" class="link-btn">Learn More
                                            <i class="far fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="news-box-main-area mt-0">
                                    <div class="news-box-items">
                                        <img src="assets/img/inner/news-grid-04.jpg" alt="img">
                                        <div class="post-date">
                                            <h4>28</h4>
                                            <p>JAN</p>
                                        </div>
                                        <div class="content">
                                            <ul class="post-list">
                                                <li>
                                                    <i class="fa-solid fa-circle-user"></i>
                                                    John Smith
                                                </li>
                                                <li>
                                                    <i class="fa-jelly fa-regular fa-tag"></i>
                                                    Consulting
                                                </li>
                                            </ul>
                                            <h3><a href="{{ route('blog-details') }}">Innovative Solutions for every Business Success</a></h3>
                                        </div>
                                    </div>
                                    <div class="news-hover-box-items">
                                        <div class="post-date d-flex align-items-center justify-content-center">
                                            <div class="date-items">
                                                <h4>09</h4>
                                                <p>JAN</p>
                                            </div>
                                        </div>
                                        <ul class="post-list">
                                            <li>
                                                <i class="fa-solid fa-circle-user"></i>
                                                John Smith
                                            </li>
                                            <li>
                                                <i class="fa-jelly fa-regular fa-tag"></i>
                                                Consulting
                                            </li>
                                        </ul>
                                        <h3><a href="{{ route('blog-details') }}">Innovative Solutions for every Business Success</a></h3>
                                        <div class="line"></div>
                                        <p class="news-text">
                                            Through a combination of data-driven insights and innovative approaches, work closely with you to develop
                                        </p>
                                        <a href="{{ route('blog-details') }}" class="link-btn">Learn More
                                            <i class="far fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                <div class="news-box-main-area mt-0">
                                    <div class="news-box-items">
                                        <img src="assets/img/inner/news-grid-05.jpg" alt="img">
                                        <div class="post-date">
                                            <h4>23</h4>
                                            <p>JAN</p>
                                        </div>
                                        <div class="content">
                                            <ul class="post-list">
                                                <li>
                                                    <i class="fa-solid fa-circle-user"></i>
                                                    John Smith
                                                </li>
                                                <li>
                                                    <i class="fa-jelly fa-regular fa-tag"></i>
                                                    Consulting
                                                </li>
                                            </ul>
                                            <h3><a href="{{ route('blog-details') }}">Transform Strategy with Consulting Expertise</a></h3>
                                        </div>
                                    </div>
                                    <div class="news-hover-box-items">
                                        <div class="post-date d-flex align-items-center justify-content-center">
                                            <div class="date-items">
                                                <h4>09</h4>
                                                <p>JAN</p>
                                            </div>
                                        </div>
                                        <ul class="post-list">
                                            <li>
                                                <i class="fa-solid fa-circle-user"></i>
                                                John Smith
                                            </li>
                                            <li>
                                                <i class="fa-jelly fa-regular fa-tag"></i>
                                                Consulting
                                            </li>
                                        </ul>
                                        <h3><a href="{{ route('blog-details') }}">Transform Strategy with Consulting Expertise</a></h3>
                                        <div class="line"></div>
                                        <p class="news-text">
                                            Through a combination of data-driven insights and innovative approaches, work closely with you to develop
                                        </p>
                                        <a href="{{ route('blog-details') }}" class="link-btn">Learn More
                                            <i class="far fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                                <div class="news-box-main-area mt-0">
                                    <div class="news-box-items">
                                        <img src="assets/img/inner/news-grid-06.jpg" alt="img">
                                        <div class="post-date">
                                            <h4>27</h4>
                                            <p>JAN</p>
                                        </div>
                                        <div class="content">
                                            <ul class="post-list">
                                                <li>
                                                    <i class="fa-solid fa-circle-user"></i>
                                                    John Smith
                                                </li>
                                                <li>
                                                    <i class="fa-jelly fa-regular fa-tag"></i>
                                                    Consulting
                                                </li>
                                            </ul>
                                            <h3><a href="{{ route('blog-details') }}">Future Proofing Your Business Approach</a></h3>
                                        </div>
                                    </div>
                                    <div class="news-hover-box-items">
                                        <div class="post-date d-flex align-items-center justify-content-center">
                                            <div class="date-items">
                                                <h4>09</h4>
                                                <p>JAN</p>
                                            </div>
                                        </div>
                                        <ul class="post-list">
                                            <li>
                                                <i class="fa-solid fa-circle-user"></i>
                                                John Smith
                                            </li>
                                            <li>
                                                <i class="fa-jelly fa-regular fa-tag"></i>
                                                Consulting
                                            </li>
                                        </ul>
                                        <h3><a href="{{ route('blog-details') }}">Future Proofing Your Business Approach</a></h3>
                                        <div class="line"></div>
                                        <p class="news-text">
                                            Through a combination of data-driven insights and innovative approaches, work closely with you to develop
                                        </p>
                                        <a href="{{ route('blog-details') }}" class="link-btn">Learn More
                                            <i class="far fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-nav-wrap text-center">
                            <ul>
                                <li><a class="page-numbers" href="#">01</a></li>
                                <li><a class="page-numbers" href="#">02</a></li>
                                <li><a class="page-numbers" href="#">03</a></li>
                                <li class="active"><a class="page-numbers" href="#">next</a></li>
                            </ul>
                        </div>
                    </div>
                </section>




@endsection