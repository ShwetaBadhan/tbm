<!-- News Section Start -->
<section class="news-section section-padding fix">
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-title sub-title tz-sub-tilte tz-sub-anim tx-subTitle justify-content-center">
                <img src="{{ asset('assets/img/sub-title-1.svg') }}" alt="img" /> Blog & News
            </span>
            <h2 class="split-title">Featured news and insights</h2>
        </div>

        <div class="row">
            @forelse($blogs as $blog)
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="{{ $loop->iteration * 0.2 }}s">
                    <div class="news-box-main-area">
                        <div class="news-box-items">
                           
                            <img src="{{ $blog->image ? asset('storage/' . $blog->image) : asset('assets/img/home-1/news-01.jpg') }}"
                                alt="{{ $blog->title }}" />

                            <div class="post-date">
                                <h3 class="date">{{ \Carbon\Carbon::parse($blog->created_at)->format('d') }}</h3>
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
                                <h3>
                                    <a href="{{ route('blog-details', $blog->slug) }}">
                                        {{ Str::limit($blog->title, 50) }}
                                    </a>
                                </h3>
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
                                <li><i class="fa-solid fa-circle-user"></i> {{ $blog->author ?? 'Admin' }}</li>
                                <li><i class="fa-jelly fa-regular fa-tag"></i> {{ $blog->category ?? 'Consulting' }}
                                </li>
                            </ul>
                            <h3>
                                <a href="{{ route('blog-details', $blog->slug) }}">
                                    {{ $blog->title }}
                                </a>
                            </h3>
                            <div class="line"></div>
                            <p class="news-text">
                                {{ Str::limit(strip_tags($blog->content ?? ($blog->description ?? '')), 100) }}
                            </p>
                            <a href="{{ route('blog-details', $blog->slug) }}" class="link-btn">
                                Learn More <i class="far fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                
                <div class="col-12 text-center py-4">
                    <p class="text-muted">No featured news available at the moment.</p>
                </div>
            @endforelse
        </div>

    </div>
</section>
<!-- News Section End -->
