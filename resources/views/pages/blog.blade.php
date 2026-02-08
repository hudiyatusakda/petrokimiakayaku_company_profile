@include ('layouts.header')

<body class="-page">
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('assets/img/logo.png') }}" alt="Petrokayaku">
      </a>
      @include ('layouts.navbar')
    </div>
  </header>

  <main class="main">

    <section class="activity-archive-section" id="blog-archive">
        <div class="container">

            <div class="activity-filter-bar" data-aos="fade-down">
                <div class="activity-search-box w-100">
                    <form action="{{ route('blog') }}" method="GET">
                        <input type="text" name="q" placeholder="Cari blog atau berita...">
                        <button type="submit" class="search-btn-icon">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>
                </div>
            </div>

            <div class="row">
                
                <div class="col-lg-8 mb-4 mb-lg-0" data-aos="fade-right">
                    @if($heroBlog)
                        <a href="{{ route('blog.detail', $heroBlog->slug) }}" class="activity-hero-card">
                            <img src="{{ asset($heroBlog->image_path) }}" alt="{{ $heroBlog->title }}" class="activity-hero-img">
                            <div class="activity-hero-overlay">
                                <span class="hero-date-badge">
                                    {{ \Carbon\Carbon::parse($heroBlog->created_at)->translatedFormat('d F Y') }}
                                </span>
                                <h2 class="activity-hero-title">{{ $heroBlog->title }}</h2>
                                <p class="activity-hero-desc">
                                    {{ Str::limit(strip_tags($heroBlog->description), 100) }}
                                </p>
                            </div>
                        </a>
                    @else
                        <div class="alert alert-warning">Belum ada blog utama.</div>
                    @endif
                </div>

                <div class="col-lg-4" data-aos="fade-left">
                    <div class="activity-side-wrapper">
                        @foreach($blogs->take(2) as $sideBlog)
                        <a href="{{ route('blog.detail', $sideBlog->slug) }}" class="activity-side-card">
                            <img src="{{ asset($sideBlog->image_path) }}" alt="{{ $sideBlog->title }}" class="activity-side-img">
                            <div class="side-overlay">
                                <h5 class="side-title">{{ Str::limit($sideBlog->title, 50) }}</h5>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="row ghost-grid-wrapper g-3">
                @foreach($blogs as $item)
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <a href="{{ route('blog.detail', $item->slug) }}" class="activity-ghost-card">
                        <div class="ghost-img-container">
                            <img src="{{ asset($item->image_path) }}" alt="{{ $item->title }}" class="ghost-img">
                        </div>
                        <span class="ghost-date">
                            {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('M Y') }}
                        </span>
                        <h5 class="ghost-title">{{ Str::limit($item->title, 40) }}</h5>
                    </a>
                </div>
                @endforeach
            </div>

            <div class="mt-4 d-flex justify-content-center">
                {{ $blogs->links() }}
            </div>
        </div>
    </section>

  </main>

  @include('layouts.footer')
