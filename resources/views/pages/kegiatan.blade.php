@include ('layouts.header')



<body class="-page">

  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">


      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('assets/img/logo.png') }}" alt="Petrokayaku">
      </a>



      <!-- navbar -->
      @include ('layouts.navbar')
      <!-- navbar -->

    </div>
  </header>

  <main class="main">

    <section class="activity-archive-section" id="kegiatan-archive">
        <div class="container">

            <div class="activity-filter-bar" data-aos="fade-down">
                <ul class="year-nav">
                    <li><a href="#" class="year-link active">2025</a></li>
                    <li><a href="#" class="year-link">2024</a></li>
                    <li><a href="#" class="year-link">2023</a></li>
                    <li><a href="#" class="year-link">2022</a></li>
                </ul>

                <div class="activity-search-box">
                    <form action="#">
                        <input type="text" placeholder="Cari berita atau kegiatan...">
                        <button type="submit" class="search-btn-icon">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>
                </div>
            </div>

            <div class="row">
                
                <div class="col-lg-8 mb-4 mb-lg-0" data-aos="fade-right">
                    @if($heroArticle)
                        {{-- PERHATIKAN: Disini kita panggil route yang benar dengan slug --}}
                        <a href="{{ route('article.detail', $heroArticle->slug) }}" class="activity-hero-card">
                            
                            {{-- Gambar Dinamis --}}
                            <img src="{{ asset($heroArticle->image_path) }}" alt="{{ $heroArticle->title }}" class="activity-hero-img">
                            
                            <div class="activity-hero-overlay">
                                {{-- Tanggal Dinamis --}}
                                <span class="hero-date-badge">
                                    {{ \Carbon\Carbon::parse($heroArticle->created_at)->translatedFormat('d F Y') }}
                                </span>
                                
                                {{-- Judul Dinamis --}}
                                <h2 class="activity-hero-title">{{ $heroArticle->title }}</h2>
                                
                                {{-- Deskripsi Singkat (bersihkan tag HTML karena description isinya HTML) --}}
                                <p class="activity-hero-desc">
                                    {{ Str::limit(strip_tags($heroArticle->description), 100) }}
                                </p>
                            </div>
                        </a>
                    @else
                        <div class="alert alert-warning">Belum ada berita utama.</div>
                    @endif
                </div>

                <div class="col-lg-4" data-aos="fade-left">
                    <div class="activity-side-wrapper">
                        
                        <a href="detail-kegiatan.html" class="activity-side-card">
                            <img src="assets/img/kegiatan-side-1.jpg" alt="Side 1" class="activity-side-img">
                            <div class="side-overlay">
                                <h5 class="side-title">Kunjungan Kerja Kementan RI</h5>
                            </div>
                        </a>

                        <a href="detail-kegiatan.html" class="activity-side-card">
                            <img src="assets/img/kegiatan-side-2.jpg" alt="Side 2" class="activity-side-img">
                            <div class="side-overlay">
                                <h5 class="side-title">Workshop Petani Milenial 4.0</h5>
                            </div>
                        </a>

                    </div>
                </div>
            </div>

            <div class="row ghost-grid-wrapper g-3">
    
                @foreach($articles as $item)
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    {{-- Link Dinamis ke Detail --}}
                    <a href="{{ route('article.detail', $item->slug) }}" class="activity-ghost-card">
                        
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

            {{-- Tampilkan Pagination jika perlu --}}
            <div class="mt-4 d-flex justify-content-center">
                {{ $articles->links() }}
            </div>
        </div>
    </section>

  </main>

  {{-- footer --}}
  @include('layouts.footer')