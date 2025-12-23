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
                    <a href="{{ route('detail-kegiatan') }}" class="activity-hero-card">
                        <img src="assets/img/kegiatan-hero.jpg" alt="Kegiatan Utama" class="activity-hero-img">
                        <div class="activity-hero-overlay">
                            <span class="hero-date-badge">12 Januari 2025</span>
                            <h2 class="activity-hero-title">Peresmian Laboratorium Riset Bioteknologi Terpadu</h2>
                            <p class="activity-hero-desc">
                                Petrokimia Kayaku terus berinovasi dengan fasilitas terbaru untuk mendukung pengembangan produk hayati yang ramah lingkungan.
                            </p>
                        </div>
                    </a>
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
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <a href="detail-kegiatan.html" class="activity-ghost-card">
                        <div class="ghost-img-container">
                            <img src="assets/img/kegiatan-grid-1.jpg" alt="Grid 1" class="ghost-img">
                        </div>
                        <span class="ghost-date">Des 2024</span>
                        <h5 class="ghost-title">Panen Raya Jagung Hibrida di Lamongan</h5>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <a href="detail-kegiatan.html" class="activity-ghost-card">
                        <div class="ghost-img-container">
                            <img src="assets/img/kegiatan-grid-2.jpg" alt="Grid 2" class="ghost-img">
                        </div>
                        <span class="ghost-date">Nov 2024</span>
                        <h5 class="ghost-title">CSR: Bantuan Air Bersih Desa Sekitar</h5>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <a href="detail-kegiatan.html" class="activity-ghost-card">
                        <div class="ghost-img-container">
                            <img src="assets/img/kegiatan-grid-3.jpg" alt="Grid 3" class="ghost-img">
                        </div>
                        <span class="ghost-date">Okt 2024</span>
                        <h5 class="ghost-title">Internal Gathering & Team Building</h5>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <a href="detail-kegiatan.html" class="activity-ghost-card">
                        <div class="ghost-img-container">
                            <img src="assets/img/kegiatan-grid-4.jpg" alt="Grid 4" class="ghost-img">
                        </div>
                        <span class="ghost-date">Sep 2024</span>
                        <h5 class="ghost-title">Peluncuran Produk Insektisida Baru</h5>
                    </a>
                </div>

            </div>
        </div>
    </section>

  </main>

  {{-- footer --}}
  @include('layouts.footer')