<div class="widget-title">
    <h3>Popular Articles</h3>
</div>
<div class="recent-post-area">
    @forelse($latestBlogs as $recentBlog)
        <div class="recent-items">
            <div class="recent-thumb">
               
                <img src="{{ $recentBlog->image ? asset('storage/' . $recentBlog->image) : asset('assets/img/inner/post-01.jpg') }}"
                    alt="{{ $recentBlog->title }}" style="width: 100px">
            </div>
            <div class="recent-content">
                <h4>
                    <a href="{{ route('blog-details', $recentBlog->slug) }}">
                        {{ Str::limit($recentBlog->title, 45) }}
                    </a>
                </h4>
                <ul>
                    <li>
                        {{ \Carbon\Carbon::parse($recentBlog->created_at)->format('d M, Y') }}
                    </li>
                </ul>
            </div>
        </div>
    @empty
        <p class="text-muted">No recent articles found.</p>
    @endforelse
</div>
