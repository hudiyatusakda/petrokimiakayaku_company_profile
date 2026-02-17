@include ('layouts.header')



<body class="index-page">

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

    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">

        <div class="carousel-item active">
          <img src="assets/img/kayaku-1.jpeg" alt="">
          <div class="carousel-container">
            <h2>Pestisida menjadi hak angket tanaman seluruh Indonesia</h2>
            <p>Kami memastikan distribusi dan produksi pestisida indonesia terjaga dan
              mampu menumbuhkan semnagat petani dan kesehatan tanaman Indonesia.</p>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/maxresdefault.jpg" alt="">
          <div class="carousel-container">
            <h2>Organic vegetables is good for health</h2>
            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
              placeat facere possimus.</p>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/sdm.jpg" alt="">
          <div class="carousel-container">
            <h2>Providing Fresh Produce Every Single Day</h2>
            <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
              fugit.</p>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/gambar_pabrik3.jpg" alt="">
          <div class="carousel-container">
            <h2>Farming as a Passione</h2>
            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia
              non numquam eius.</p>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/gambar_kebijakan3.jpg" alt="">
          <div class="carousel-container">
            <h2>Good Food For All</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua.</p>
          </div>
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    <section class="media-section" id="media-center">
    <div class="container">
        
        <div class="row">
            <div class="col-lg-8">
                
                <div class="media-hero-video" data-aos="zoom-in">
                    @if($heroArticle)
                        <img src="{{ asset($heroArticle->image_path) }}" alt="{{ $heroArticle->title }}" class="media-hero-thumb">
                        <div class="media-play-overlay">
                            <a href="{{ route('blog.detail', $heroArticle->slug) }}" class="hero-play-btn">
                                <i class="bi bi-link"></i>
                            </a>
                            <div class="media-hero-caption text-start">
                                <span class="badge bg-warning text-dark mb-2">FEATURED</span>
                                <h3 class="fw-bold m-0">{{ Str::limit($heroArticle->title, 60) }}</h3>
                            </div>
                        </div>
                    @else
                        <img src="assets/img/news-hero.jpg" alt="Highlight Video" class="media-hero-thumb">
                        <div class="media-play-overlay">
                            <div class="media-hero-caption text-start">
                                <span class="badge bg-warning text-dark mb-2">FEATURED</span>
                                <h3 class="fw-bold m-0">Belum ada berita featured</h3>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="d-flex justify-content-between align-items-center mb-3 mt-5" data-aos="fade-right">
                    <div class="section-header-simple border-0 p-0 m-0">
                        <h4>Kegiatan Petrokimia</h4>
                    </div>
                    <div class="d-flex gap-2">
                         <div class="scroll-nav-btn" onclick="document.getElementById('kegiatanScroll').scrollBy({left: -250, behavior: 'smooth'})"><i class="bi bi-chevron-left"></i></div>
                         <div class="scroll-nav-btn" onclick="document.getElementById('kegiatanScroll').scrollBy({left: 250, behavior: 'smooth'})"><i class="bi bi-chevron-right"></i></div>
                    </div>
                </div>

                <div class="horizontal-scroll-wrapper" id="kegiatanScroll" data-aos="fade-up">
                    @forelse($articles as $article)
                    <a href="{{ route('blog.detail', $article->slug) }}" class="kegiatan-card">
                        <img src="{{ asset($article->image_path) }}" alt="{{ $article->title }}" class="kegiatan-img">
                        <div class="kegiatan-overlay">
                            <h5 class="kegiatan-title">{{ Str::limit($article->title, 50) }}</h5>
                        </div>
                    </a>
                    @empty
                    <div class="alert alert-light">Belum ada berita.</div>
                    @endforelse
                </div>

                <div class="section-header-simple mt-5" data-aos="fade-right">
                    <h4>Terpopuler</h4>
                </div>

                <div class="populer-grid">
                    @forelse($articles->take(4) as $item)
                    <a href="{{ route('blog.detail', $item->slug) }}" class="ghost-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="ghost-img-wrap">
                            <img src="{{ asset($item->image_path) }}" alt="{{ $item->title }}">
                        </div>
                        <div class="ghost-content">
                            <span class="ghost-meta">Berita</span>
                            <h5 class="ghost-title">{{ Str::limit($item->title, 50) }}</h5>
                        </div>
                    </a>
                    @empty
                    <div class="alert alert-light">Belum ada berita populer.</div>
                    @endforelse
                </div>

            </div>

            <div class="col-lg-4">
                <div class="sidebar-list-wrapper sticky-top" style="top: 20px;" data-aos="fade-left">
                    <div class="section-header-simple border-0 p-0 mb-4">
                        <h4>Video Terbaru</h4>
                    </div>

                    @forelse($videos as $video)
                    <a href="{{ route('video.detail', $video->slug) }}" class="sidebar-item">
                        <img src="https://img.youtube.com/vi/{{ $video->youtube_id }}/default.jpg" alt="{{ $video->title }}" class="sidebar-thumb">
                        <div class="sidebar-info">
                            <h5>{{ Str::limit($video->title, 40) }}</h5>
                            <span><i class="bi bi-eye"></i> {{ $video->views ?? 0 }} Views</span>
                        </div>
                    </a>
                    @empty
                    <div class="alert alert-light">Belum ada video.</div>
                    @endforelse

                </div>
            </div>

        </div> <div class="category-links-wrapper" data-aos="fade-up" data-aos-offset="0">
            <div class="row g-3">
                <div class="col-md-4">
                    <a href="{{ route('video') }}" class="cat-link-card">
                        <i class="bi bi-collection-play-fill"></i>
                        <h5>Video Petrokimia</h5>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('blog') }}" class="cat-link-card">
                        <i class="bi bi-newspaper"></i>
                        <h5>Berita Petrokimia</h5>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('kegiatan') }}" class="cat-link-card">
                        <i class="bi bi-people-fill"></i>
                        <h5>Kegiatan Petrokimia</h5>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

  </main>

  <!-- footer -->

  @include ('layouts.footer');