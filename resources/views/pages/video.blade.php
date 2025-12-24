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

    <section class="video-detail-section" id="video-watch">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-8">
                    
                    <div class="video-stage-wrapper" data-aos="zoom-in" data-aos-duration="800">
                        <div class="video-frame-container ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/VIDEO_ID_HERE?rel=0" title="YouTube video player" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="video-primary-info" data-aos="fade-up">
                        <h1 class="video-main-title">Profil Perusahaan: Mengabdi untuk Pertanian Negeri</h1>
                        
                        <div class="video-actions-bar">
                            <div class="text-muted small">
                                <span class="fw-bold text-dark">12.504 x ditonton</span> • 12 Jan 2025
                            </div>
                            
                            <div class="d-flex gap-2">
                                <button class="action-btn-pill active">
                                    <i class="bi bi-hand-thumbs-up-fill"></i> 540
                                </button>
                                <button class="action-btn-pill">
                                    <i class="bi bi-share-fill"></i> Bagikan
                                </button>
                                <a href="https://youtube.com" target="_blank" class="action-btn-pill">
                                    <i class="bi bi-youtube"></i> Tonton di YT
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="video-desc-box" data-aos="fade-up" data-aos-delay="100">
                        <h5 class="fw-bold mb-3">Deskripsi</h5>
                        <p>
                            Video profil resmi Petrokimia Kayaku tahun 2025. Menampilkan perjalanan panjang kami dalam mendampingi petani Indonesia, mulai dari riset laboratorium hingga panen raya yang melimpah.
                        </p>
                        <p class="mb-0">
                            Inovasi tiada henti adalah kunci kami untuk menciptakan produk perlindungan tanaman yang efektif, efisien, dan ramah lingkungan.
                        </p>
                        <div class="mt-3">
                            <span class="badge bg-light text-dark border me-1">#Pertanian</span>
                            <span class="badge bg-light text-dark border me-1">#PetrokimiaKayaku</span>
                            <span class="badge bg-light text-dark border me-1">#IndonesiaMaju</span>
                        </div>
                    </div>

                    <div class="video-comments-wrap" data-aos="fade-up">
                        <h5 class="fw-bold mb-4">24 Komentar</h5>
                        
                        <div class="d-flex mb-4">
                            <div class="comment-user-avatar bg-warning d-flex align-items-center justify-content-center fw-bold text-white">A</div>
                            <input type="text" class="form-control border-0 border-bottom bg-transparent rounded-0" placeholder="Tambahkan komentar...">
                        </div>

                        <div class="d-flex mb-3">
                            <img src="assets/img/avatar-1.jpg" alt="User" class="comment-user-avatar object-fit-cover">
                            <div>
                                <div class="fw-bold text-dark">Budi Santoso <small class="text-muted fw-normal ms-2">2 hari lalu</small></div>
                                <p class="small text-secondary mb-0">Videonya sangat informatif, editingnya kelas banget!</p>
                            </div>
                        </div>
                        
                        <div class="d-flex mb-3">
                            <img src="assets/img/avatar-2.jpg" alt="User" class="comment-user-avatar object-fit-cover">
                            <div>
                                <div class="fw-bold text-dark">Sari Pertiwi <small class="text-muted fw-normal ms-2">5 jam lalu</small></div>
                                <p class="small text-secondary mb-0">Semoga Petrokimia semakin sukses.</p>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="playlist-header" data-aos="fade-left">
                        <h5 class="fw-bold m-0">Video Lainnya</h5>
                        <a href="#" class="text-warning small text-decoration-none fw-bold">Lihat Semua</a>
                    </div>

                    <div class="playlist-container">
                        
                        <a href="#" class="video-ghost-item" data-aos="fade-left" data-aos-delay="100">
                            <div class="ghost-thumb-wrap">
                                <img src="assets/img/video-thumb-1.jpg" alt="Thumb" class="ghost-thumb-img">
                                <span class="duration-badge">04:20</span>
                            </div>
                            <div class="ghost-info">
                                <h6 class="ghost-video-title">Cara Mengatasi Hama Wereng Secara Alami</h6>
                                <span class="ghost-meta">Petrokimia Kayaku • 5k x ditonton</span>
                            </div>
                        </a>

                        <a href="#" class="video-ghost-item" data-aos="fade-left" data-aos-delay="200">
                            <div class="ghost-thumb-wrap">
                                <img src="assets/img/video-thumb-2.jpg" alt="Thumb" class="ghost-thumb-img">
                                <span class="duration-badge">12:05</span>
                            </div>
                            <div class="ghost-info">
                                <h6 class="ghost-video-title">Webinar: Teknologi Drone Spraying</h6>
                                <span class="ghost-meta">Petrokimia Kayaku • 1.2k x ditonton</span>
                            </div>
                        </a>

                        <a href="#" class="video-ghost-item" data-aos="fade-left" data-aos-delay="300">
                            <div class="ghost-thumb-wrap">
                                <img src="assets/img/video-thumb-3.jpg" alt="Thumb" class="ghost-thumb-img">
                                <span class="duration-badge">08:45</span>
                            </div>
                            <div class="ghost-info">
                                <h6 class="ghost-video-title">Testimoni Petani Cabai Merah Kediri</h6>
                                <span class="ghost-meta">Mitra Tani • 800 x ditonton</span>
                            </div>
                        </a>

                        <a href="#" class="video-ghost-item" data-aos="fade-left" data-aos-delay="400">
                            <div class="ghost-thumb-wrap">
                                <img src="assets/img/video-thumb-4.jpg" alt="Thumb" class="ghost-thumb-img">
                                <span class="duration-badge">03:10</span>
                            </div>
                            <div class="ghost-info">
                                <h6 class="ghost-video-title">Peluncuran Produk Baru 2024</h6>
                                <span class="ghost-meta">Petrokimia Kayaku • 10k x ditonton</span>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>

  </main>

  {{-- footer --}}
  @include('layouts.footer')