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

    <section class="detail-activity-section" id="blog-detail">
        <div class="container">
            
            <div class="row">
                {{-- KONTEN UTAMA --}}
                <div class="col-lg-8">
                    
                    <div class="detail-header" data-aos="fade-down">
                        <div class="d-flex align-items-center mb-2">
                            <span class="badge bg-info text-white me-2">BLOG</span>
                            {{-- Tanggal Dinamis --}}
                            <small class="text-uppercase fw-bold text-muted">
                                {{ \Carbon\Carbon::parse($blog->created_at)->translatedFormat('d F Y') }}
                            </small>
                        </div>
                        
                        {{-- Judul Dinamis --}}
                        <h1 class="detail-title">{{ $blog->title }}</h1>
                        
                        <div class="detail-meta">
                            <span><i class="bi bi-person-fill"></i> Admin</span>
                            {{-- Views Dinamis --}}
                            <span><i class="bi bi-eye-fill"></i> {{ $blog->views ?? '0' }} Views</span> 
                            <span><i class="bi bi-chat-dots-fill"></i> 0 Komentar</span>
                        </div>
                    </div>

                    <div class="detail-hero-wrapper" data-aos="zoom-in">
                        {{-- Gambar Utama Dinamis --}}
                        <img src="{{ asset($blog->image_path) }}" alt="{{ $blog->title }}" class="detail-hero-img">
                    </div>

                    <div class="content-body" data-aos="fade-up">
                        {{-- 
                           ISI BLOG DINAMIS 
                           Menggunakan {!! !!} agar tag HTML (paragraf, bold) dari database terbaca 
                        --}}
                        {!! $blog->description !!}
                    </div>

                    {{-- KOMENTAR (Masih Statis - Karena butuh tabel comments terpisah) --}}
                    <div class="comment-section-wrapper" data-aos="fade-up" data-aos-offset="200">
                        <h4 class="fw-bold text-success mb-4">Komentar</h4>
                        <div class="alert alert-light border">
                            Fitur komentar akan segera hadir.
                        </div>
                    </div>

                </div> 
                
                {{-- SIDEBAR (BLOG LAINNYA) --}}
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="sidebar-sticky-wrap" data-aos="fade-left">
                        
                        <h5 class="sidebar-title">Blog Lainnya</h5>

                        {{-- Loop Sidebar Dinamis --}}
                        @foreach($otherBlogs as $other)
                        <a href="{{ route('blog.detail', $other->slug) }}" class="side-ghost-item">
                            <div class="side-ghost-thumb">
                                {{-- Gambar Sidebar --}}
                                <img src="{{ asset($other->image_path) }}" alt="{{ $other->title }}">
                            </div>
                            <div class="side-ghost-desc">
                                {{-- Judul Sidebar --}}
                                {{ Str::limit($other->title, 50) }}
                            </div>
                        </a>
                        @endforeach
                        {{-- End Loop --}}

                    </div>
                </div> 
            </div>
        </div>
    </section>

  </main>

  @include('layouts.footer')

</body>
