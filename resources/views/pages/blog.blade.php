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
    <section class="news-detail-section" id="berita-detail">
        <div class="container">
            <div class="row">
                {{-- KONTEN UTAMA --}}
                <div class="col-lg-8 pe-lg-5">
                    
                    <div class="news-hero-img-wrap" data-aos="zoom-out">
                        {{-- Gambar Utama Dinamis --}}
                        <img src="{{ asset('storage/'.$berita->image) }}" alt="{{ $berita->title }}" class="news-hero-img">
                    </div>

                    <div class="news-header-wrap" data-aos="fade-up">
                        <span class="news-category-badge">Berita & Artikel</span>
                        <h1 class="news-title">{{ $berita->title }}</h1>
                        
                        <div class="news-meta-bar">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/img/avatar.jpg') }}" alt="Author" class="author-avatar">
                                <span>Oleh <strong>{{ $berita->author ?? 'Admin' }}</strong></span>
                            </div>
                            <span>|</span>
                            <span><i class="bi bi-calendar3"></i> {{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('d F Y') }}</span>
                        </div>
                    </div>

                    <div class="article-content" data-aos="fade-up">
                        {{-- Render HTML Konten (Gunakan {!! !!} hati-hati terhadap XSS jika input user publik) --}}
                        {!! $berita->content !!}
                    </div>

                    {{-- Komentar (Opsional, bisa dikosongkan dulu jika belum ada backend) --}}
                </div> 

                {{-- SIDEBAR --}}
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="sticky-top" style="top: 100px; z-index: 1;">
                        
                        <div class="mt-5">
                            <h5 class="mb-4 fw-bold border-bottom pb-2 border-warning d-inline-block">Berita Lainnya</h5>

                            {{-- Loop Berita Terkait di Sidebar --}}
                            @foreach($sidebar_news as $sideItem)
                            <a href="{{ route('berita.show', $sideItem->slug) }}" class="sidebar-news-item" data-aos="fade-left">
                                <img src="{{ asset('storage/'.$sideItem->image) }}" alt="News" class="sidebar-news-img">
                                <div class="sidebar-news-desc">
                                    {{ Str::limit($sideItem->title, 45) }}
                                </div>
                            </a>
                            @endforeach

                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>
  </main>
  @include('layouts.footer')