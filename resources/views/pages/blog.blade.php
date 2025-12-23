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

    <section class="news-detail-section" id="berita-detail">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-8 pe-lg-5">
                    
                    <div class="news-hero-img-wrap" data-aos="zoom-out" data-aos-duration="1000">
                        <img src="assets/img/news-hero.jpg" alt="Transformasi Digital" class="news-hero-img">
                    </div>

                    <div class="news-header-wrap" data-aos="fade-up">
                        <span class="news-category-badge">Teknologi & Inovasi</span>
                        <h1 class="news-title">Transformasi Digital: Membangun Ekosistem Pertanian 4.0 di Indonesia</h1>
                        
                        <div class="news-meta-bar">
                            <div class="d-flex align-items-center">
                                <img src="assets/img/avatar.jpg" alt="Author" class="author-avatar">
                                <span>Oleh <strong>Dr. Ir. Budi Santoso</strong></span>
                            </div>
                            <span>|</span>
                            <span><i class="bi bi-calendar3"></i> 20 Desember 2025</span>
                            <span>|</span>
                            <span><i class="bi bi-clock"></i> 5 Menit Baca</span>
                        </div>
                    </div>

                    <div class="article-content" data-aos="fade-up">
                        <p>
                            <strong>Gresik, Petrokimia Kayaku</strong> – Di era revolusi industri 4.0, sektor pertanian tidak boleh tertinggal. Digitalisasi bukan lagi sekadar pilihan, melainkan keharusan untuk mencapai efisiensi dan produktivitas maksimal. Melalui penerapan teknologi *drone spraying* dan *smart farming*, kami berkomitmen untuk menjadi pelopor perubahan ini.
                        </p>
                        
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas.
                        </p>

                        <div class="highlight-text-block">
                            "Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos himenaeos."
                        </div>

                        <p>
                            Laculis massa nisl malesuada lacinia integer nunc posuere. Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos himenaeos. Lorem ipsum dolor sit amet consectetur adipiscing elit.
                        </p>

                        <img src="assets/img/news-embedded.jpg" alt="Ilustrasi Smart Farming" class="article-embedded-img" data-aos="fade-up">

                        <p>
                            Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas.
                        </p>
                        
                        <div class="highlight-text-block" style="color: #d63384;">
                            Penyambutan Prestasi & Penutupan Penganugerahan
                        </div>

                        <p>
                            Sebagai penutup tahun yang gemilang, manajemen memberikan apresiasi setinggi-tingginya kepada seluruh tim yang telah bekerja keras. Semangat kolaborasi inilah yang akan terus kita bawa menyongsong tantangan di tahun depan.
                        </p>
                    </div>

                    <div class="news-comment-box" data-aos="fade-up" data-aos-offset="100">
                        <h3 class="mb-4 fw-bold text-dark">Komentar</h3>
                        
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" class="form-control comment-input-gray" placeholder="Nama Lengkap">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control comment-input-gray" placeholder="Alamat Email">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control comment-input-gray comment-input-large" placeholder="Masukkan komentar Anda disini..."></textarea>
                                </div>
                                <div class="col-12 text-end">
                                    <button type="button" class="btn btn-warning fw-bold px-4 py-2 rounded-pill">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="filter-btn-group" data-aos="fade-up">
                        <button class="filter-pill active">Terbaru</button>
                        <button class="filter-pill">Terlama</button>
                        <button class="filter-pill">Terpopuler</button>
                    </div>

                    <div class="comment-list-container" data-aos="fade-up">
                        <div class="comment-row">
                            <div class="comment-author-name">Muhammad Abdi</div>
                            <div class="comment-body">
                                Gas keunn Loremm :)) Artikel yang sangat inspiratif untuk petani muda!
                            </div>
                        </div>
                        <div class="comment-row">
                            <div class="comment-author-name">Berlinda Nasution</div>
                            <div class="comment-body">
                                Ga kebayang bakalan jadi apa nanti teknologi ini 5 tahun lagi. Semoga sukses terus Petrokimia!
                            </div>
                        </div>
                        <div class="comment-row">
                            <div class="comment-author-name">Muhammad Dilan</div>
                            <div class="comment-body">
                                Aku sih Setuju ya, Soalnya materinya daging semua.
                            </div>
                        </div>
                    </div>

                </div> <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="sticky-top" style="top: 100px; z-index: 1;">
                        
                        <div class="sidebar-box" data-aos="fade-left" data-aos-delay="100">
                            <a href="#" class="video-widget-card d-block text-decoration-none">
                                <img src="assets/img/sidebar-video-thumb.jpg" alt="Video" class="video-thumb">
                                <div class="play-btn-center">
                                    <i class="bi bi-play-fill"></i>
                                </div>
                            </a>
                            <div class="p-3 bg-light rounded-bottom text-center fw-bold">
                                Video Profil Perusahaan 2025
                            </div>
                        </div>

                        <div class="mt-5">
                            <h5 class="mb-4 fw-bold border-bottom pb-2 border-warning d-inline-block">Berita Terkait</h5>

                            <a href="#" class="sidebar-news-item" data-aos="fade-left" data-aos-delay="200">
                                <img src="assets/img/sidebar-news-1.jpg" alt="News 1" class="sidebar-news-img">
                                <div class="sidebar-news-desc">
                                    Inovasi Pupuk NPK Cair untuk Hidroponik
                                </div>
                            </a>

                            <a href="#" class="sidebar-news-item" data-aos="fade-left" data-aos-delay="300">
                                <img src="assets/img/sidebar-news-2.jpg" alt="News 2" class="sidebar-news-img">
                                <div class="sidebar-news-desc">
                                    Kunjungan Kerja Direksi ke Lahan Mitra
                                </div>
                            </a>
                            
                            <a href="#" class="sidebar-news-item" data-aos="fade-left" data-aos-delay="400">
                                <img src="assets/img/sidebar-news-3.jpg" alt="News 3" class="sidebar-news-img">
                                <div class="sidebar-news-desc">
                                    Webinar Nasional: Pertanian Berkelanjutan
                                </div>
                            </a>

                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>

  </main>

  {{-- footer --}}
  @include('layouts.footer')