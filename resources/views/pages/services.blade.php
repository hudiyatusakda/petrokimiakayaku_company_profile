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
                    <img src="assets/img/news-hero.jpg" alt="Highlight Video" class="media-hero-thumb">
                    <div class="media-play-overlay">
                        <a href="https://www.youtube.com/watch?v=XXXXXXXX" class="hero-play-btn glightbox">
                            <i class="bi bi-play-fill"></i>
                        </a>
                        <div class="media-hero-caption text-start">
                            <span class="badge bg-warning text-dark mb-2">FEATURED</span>
                            <h3 class="fw-bold m-0">Inovasi Teknologi Drone untuk Pemupukan Efisien</h3>
                        </div>
                    </div>
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
                    <div class="kegiatan-card">
                        <img src="assets/img/kegiatan-1.jpg" alt="Kegiatan 1" class="kegiatan-img">
                        <div class="kegiatan-overlay">
                            <h5 class="kegiatan-title">Panen Raya Bersama Mitra Petani di Jawa Timur</h5>
                        </div>
                    </div>
                    <div class="kegiatan-card">
                        <img src="assets/img/kegiatan-2.jpg" alt="Kegiatan 2" class="kegiatan-img">
                        <div class="kegiatan-overlay">
                            <h5 class="kegiatan-title">Pelatihan Safety Riding untuk Field Assistant</h5>
                        </div>
                    </div>
                    <div class="kegiatan-card">
                        <img src="assets/img/kegiatan-3.jpg" alt="Kegiatan 3" class="kegiatan-img">
                        <div class="kegiatan-overlay">
                            <h5 class="kegiatan-title">Kunjungan Direksi ke Pabrik Baru</h5>
                        </div>
                    </div>
                    <div class="kegiatan-card">
                        <img src="assets/img/kegiatan-4.jpg" alt="Kegiatan 4" class="kegiatan-img">
                        <div class="kegiatan-overlay">
                            <h5 class="kegiatan-title">Edukasi Hama Wareng di Desa Binaan</h5>
                        </div>
                    </div>
                </div>

                <div class="section-header-simple mt-5" data-aos="fade-right">
                    <h4>Terpopuler</h4>
                </div>

                <div class="populer-grid">
                    <div class="ghost-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="ghost-img-wrap">
                            <img src="assets/img/news-1.jpg" alt="News">
                        </div>
                        <div class="ghost-content">
                            <span class="ghost-meta">Berita Korporat</span>
                            <h5 class="ghost-title">Petrokimia Kayaku Raih Penghargaan Lingkungan 2024</h5>
                        </div>
                    </div>
                    <div class="ghost-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="ghost-img-wrap">
                            <img src="assets/img/news-2.jpg" alt="News">
                        </div>
                        <div class="ghost-content">
                            <span class="ghost-meta">Teknologi</span>
                            <h5 class="ghost-title">Peluncuran Produk Hayati Terbaru: Bio-X</h5>
                        </div>
                    </div>
                    <div class="ghost-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="ghost-img-wrap">
                            <img src="assets/img/news-3.jpg" alt="News">
                        </div>
                        <div class="ghost-content">
                            <span class="ghost-meta">Tips Petani</span>
                            <h5 class="ghost-title">Cara Mengatasi Hama Padi di Musim Hujan</h5>
                        </div>
                    </div>
                     <div class="ghost-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="ghost-img-wrap">
                            <img src="assets/img/news-4.jpg" alt="News">
                        </div>
                        <div class="ghost-content">
                            <span class="ghost-meta">CSR</span>
                            <h5 class="ghost-title">Bantuan Bibit Gratis untuk Kampung Pangan</h5>
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-lg-4">
                <div class="sidebar-list-wrapper sticky-top" style="top: 20px;" data-aos="fade-left">
                    <div class="section-header-simple border-0 p-0 mb-4">
                        <h4>Paling Ramai Ditonton</h4>
                    </div>

                    <div class="sidebar-item">
                        <img src="assets/img/news-side-1.jpg" alt="Side 1" class="sidebar-thumb">
                        <div class="sidebar-info">
                            <h5>Profil Perusahaan: Mengabdi untuk Negeri</h5>
                            <span><i class="bi bi-eye"></i> 12.5k Views</span>
                        </div>
                    </div>

                    <div class="sidebar-item">
                        <img src="assets/img/news-side-2.jpg" alt="Side 2" class="sidebar-thumb">
                        <div class="sidebar-info">
                            <h5>Testimoni Petani Cabai Merah</h5>
                            <span><i class="bi bi-eye"></i> 8.2k Views</span>
                        </div>
                    </div>

                    <div class="sidebar-item">
                        <img src="assets/img/news-side-3.jpg" alt="Side 3" class="sidebar-thumb">
                        <div class="sidebar-info">
                            <h5>Tutorial Penggunaan Pestisida Cair</h5>
                            <span><i class="bi bi-eye"></i> 5.1k Views</span>
                        </div>
                    </div>

                    <div class="sidebar-item">
                        <img src="assets/img/news-side-4.jpg" alt="Side 4" class="sidebar-thumb">
                        <div class="sidebar-info">
                            <h5>Gathering Distributor Nasional 2024</h5>
                            <span><i class="bi bi-eye"></i> 3.4k Views</span>
                        </div>
                    </div>

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