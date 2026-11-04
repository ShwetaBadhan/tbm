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
                                <li>Our Blogs</li>
                            </ul>
                            <h1 class="breadcrumb-title split-title">Our Blogs</h1>
                        </div>
                    </div>
                </section>

                <!-- News Grid Section Start -->
<section class="news-section section-padding fix">
    <div class="container">
        <div class="row g-4">
            @forelse ($blogs as $blog)
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="{{ $loop->iteration * 0.1 }}s">
                <div class="news-box-main-area mt-0">
                    <div class="news-box-items">
                        <!-- Adjust 'storage/' to your actual image upload directory if different -->
                        <img src="{{ $blog->image ? asset('storage/' . $blog->image) : asset('assets/img/default-blog.jpg') }}" alt="{{ $blog->title }}">
                        <div class="post-date">
                            <h2 class="date">{{ \Carbon\Carbon::parse($blog->created_at)->format('d') }}</h2>
                            <p>{{ \Carbon\Carbon::parse($blog->created_at)->format('M') }}</p>
                        </div>
                        <div class="content">
                            <ul class="post-list">
                                <li>
                                    <i class="fa-solid fa-circle-user"></i>
                                    {{ $blog->author ?? 'Admin' }}
                                </li>
                                <li>
                                    <i class="fa-jelly fa-regular fa-tag"></i>
                                    {{ $blog->category ?? 'Consulting' }}
                                </li>
                            </ul>
                            <h3><a href="{{ route('blog-details', $blog->slug) }}">{{ Str::limit($blog->title, 50) }}</a></h3>
                        </div>
                    </div>
                    
                    <!-- Hover Box -->
                    <div class="news-hover-box-items">
                        <div class="post-date d-flex align-items-center justify-content-center">
                            <div class="date-items">
                                <h3 class="date">{{ \Carbon\Carbon::parse($blog->created_at)->format('d') }}</h3>
                                <p>{{ \Carbon\Carbon::parse($blog->created_at)->format('M') }}</p>
                            </div>
                        </div>
                        <ul class="post-list">
                            <li>
                                <i class="fa-solid fa-circle-user"></i>
                                {{ $blog->author ?? 'Admin' }}
                            </li>
                            <li>
                                <i class="fa-jelly fa-regular fa-tag"></i>
                                {{ $blog->category ?? 'Consulting' }}
                            </li>
                        </ul>
                        <h3><a href="{{ route('blog-details', $blog->slug) }}">{{ $blog->title }}</a></h3>
                        <div class="line"></div>
                        <p class="news-text">
                            {{ Str::limit(strip_tags($blog->description ?? $blog->content ?? ''), 100) }}
                        </p>
                        <a href="{{ route('blog-details', $blog->slug) }}" class="link-btn">Learn More
                            <i class="far fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <!-- Fallback if no blogs are found -->
            <div class="col-12 text-center py-5">
                <h4>No blog posts available at the moment.</h4>
            </div>
            @endforelse
        </div>

       
    </div>
</section>
<!-- News Grid Section End -->




@endsection