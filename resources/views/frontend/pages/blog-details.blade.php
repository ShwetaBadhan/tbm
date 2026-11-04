@extends('frontend.layouts.master')

{{-- Dynamic Title --}}
@section('title', $blog->title ?? 'Blog Details')

@section('content')

    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-wrapper bg-cover fix"
        style="background-image: url({{ asset('assets/img/inner/breadcroumb-img.jpg') }});">
        <div class="container">
            <div class="page-heading">
                <ul class="breadcrumb-list wow fadeInUp">
                    <li> <i class="fa-solid fa-house"></i><a href="{{ route('home') }}">Home</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i></li>
                    <li><a href="{{ route('our-blogs') }}">Blogs</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i></li>
                    <li>{{ Str::limit($blog->title, 30) }}</li>
                </ul>
                <h1 class="breadcrumb-title split-title">{{ $blog->title }}</h1>
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

                                    <img data-speed=".8"
                                        src="{{ $blog->image ? asset('storage/' . $blog->image) : asset('assets/img/default-blog.jpg') }}"
                                        alt="{{ $blog->title }}">
                                </div>
                                <div class="post-content">
                                    <ul class="post-list d-flex align-items-center">
                                        <li>
                                            <i class="fa-regular fa-user"></i>
                                            By {{ $blog->author ?? 'Admin' }}
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-calendar-days"></i>
                                            {{ \Carbon\Carbon::parse($blog->created_at)->format('d M, Y') }}
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-tag"></i>
                                            {{ $blog->category ?? 'General' }}
                                        </li>
                                    </ul>

                                    <h2>{{ $blog->title }}</h2>

                                    <div class="blog-main-content">
                                        {!! $blog->content ?? $blog->description !!}
                                    </div>

                                </div>
                            </div>




                        </div>
                    </div>

                    {{-- Sidebar Section --}}
                    <div class="col-lg-4 col-12">
                        <div class="main-sideber sticky-style">


                            <div class="single-sideber-widget">
                                @include('frontend.components.blog-sidebar')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
