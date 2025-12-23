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

    <section class="detail-activity-section" id="detail-kegiatan">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-8">
                    
                    <div class="detail-header" data-aos="fade-down">
                        <div class="d-flex align-items-center mb-2">
                            <span class="badge bg-warning text-dark me-2">EVENT</span>
                            <small class="text-uppercase fw-bold text-muted">8 Januari 2026</small>
                        </div>
                        <h1 class="detail-title">KAYAKUFEST 2026: Inovasi & Kolaborasi Masa Depan</h1>
                        <div class="detail-meta">
                            <span><i class="bi bi-person-fill"></i> Admin Petrokimia</span>
                            <span><i class="bi bi-eye-fill"></i> 1.240 Views</span>
                            <span><i class="bi bi-chat-dots-fill"></i> 45 Komentar</span>
                        </div>
                    </div>

                    <div class="detail-hero-wrapper" data-aos="zoom-in">
                        <img src="assets/img/detail-hero.jpg" alt="Kayakufest 2026" class="detail-hero-img">
                    </div>

                    <div class="content-body" data-aos="fade-up">
                        <p>
                            Gresik - Petrokimia Kayaku kembali menggelar acara tahunan terbesar, <strong>KAYAKUFEST 2026</strong>. Acara ini menjadi ajang pembuktian komitmen perusahaan dalam mengembangkan inovasi di bidang pertanian berkelanjutan. Ribuan peserta dari berbagai daerah turut hadir memeriahkan suasana.
                        </p>

                        <h3 class="content-sub-heading">Pembukaan Petronite Fest</h3>
                        <p>
                            Acara dibuka secara simbolis dengan pemukulan gong oleh Direktur Utama. Suasana meriah terasa saat ribuan lampion diterbangkan sebagai simbol harapan bagi kemajuan pertanian Indonesia. "Ini bukan sekadar festival, ini adalah gerakan," ujar Bapak Direktur dalam sambutannya.
                        </p>

                        <div class="embedded-img-card" data-aos="fade-up">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <img src="assets/img/detail-news-1.jpg" alt="Pembukaan" class="embedded-img">
                                </div>
                                <div class="col-md-7">
                                    <h5 class="fw-bold mb-2">Simbolisasi Pembukaan</h5>
                                    <p class="small text-muted mb-0">
                                        Momen pemotongan pita dan pelepasan burung merpati sebagai tanda dimulainya rangkaian acara Kayakufest selama satu minggu penuh di area pabrik utama.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <h3 class="content-sub-heading">Penyambutan Prestasi & Penghargaan</h3>
                        <p>
                            Selain hiburan, acara ini juga menjadi momen apresiasi bagi para mitra distributor dan petani teladan. Berbagai penghargaan diberikan kepada mereka yang telah berkontribusi besar dalam menjaga ketahanan pangan nasional.
                        </p>

                        <figure class="embedded-img-card" data-aos="fade-up">
                            <img src="assets/img/detail-news-2.jpg" alt="Penyerahan Sertifikat" class="embedded-img">
                            <figcaption class="embedded-caption">Penyerahan sertifikat penghargaan kepada Mitra Distributor Terbaik 2025</figcaption>
                        </figure>

                        <p>
                            Rangkaian acara ditutup dengan penampilan orkestra lokal yang memukau. Semangat kebersamaan yang terjalin diharapkan dapat terus menyala hingga tahun-tahun mendatang.
                        </p>
                    </div>

                    <div class="comment-section-wrapper" data-aos="fade-up" data-aos-offset="200">
                        <h4 class="fw-bold text-success mb-4">Komentar</h4>

                        <form action="#" class="row g-3 mb-5">
                            <div class="col-md-6 comment-form-group">
                                <label class="comment-label-float">Nama</label>
                                <input type="text" class="form-control" placeholder="Nama Lengkap">
                            </div>
                            <div class="col-md-6 comment-form-group">
                                <label class="comment-label-float">Email</label>
                                <input type="email" class="form-control" placeholder="Email (Tidak dipublikasikan)">
                            </div>
                            <div class="col-12 comment-form-group">
                                <textarea class="form-control" rows="4" placeholder="Masukkan komentar Anda disini..."></textarea>
                            </div>
                            <div class="col-12 mt-3">
                                <button type="button" class="btn btn-warning fw-bold px-4 rounded-pill">Kirim Komentar</button>
                            </div>
                        </form>

                        <hr>

                        <div class="comment-filters">
                            <button class="btn-filter active">Terbaru</button>
                            <button class="btn-filter">Terlama</button>
                            <button class="btn-filter">Terpopuler</button>
                        </div>

                        <div class="comment-list">
                            <div class="comment-item" data-aos="fade-left" data-aos-delay="100">
                                <div class="comment-user">Muhammad Abdi</div>
                                <div class="comment-text">
                                    Gas keunn Loremm :)) Acaranya sangat meriah, semoga tahun depan bisa ikut lagi!
                                </div>
                            </div>

                            <div class="comment-item" data-aos="fade-left" data-aos-delay="200">
                                <div class="comment-user">Muhammad Dilan</div>
                                <div class="comment-text">
                                    Aku sih Setuju ya, Soalnya kamu baik banget Prabowo. Maju terus pertanian Indonesia!
                                </div>
                            </div>
                            
                            <div class="comment-item" data-aos="fade-left" data-aos-delay="300">
                                <div class="comment-user">Siti Aminah</div>
                                <div class="comment-text">
                                    Dokumentasinya bagus sekali, berasa ikut hadir di sana.
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="sidebar-sticky-wrap" data-aos="fade-left">
                        
                        <h5 class="sidebar-title">Berita Lainnya</h5>

                        <a href="#" class="side-ghost-item">
                            <div class="side-ghost-thumb">
                                <img src="assets/img/sidebar-1.jpg" alt="Video Thumb">
                                <div class="video-icon"><i class="bi bi-play-fill"></i></div>
                            </div>
                            <div class="side-ghost-desc">
                                Highlight: Keseruan Kayakufest Hari Pertama
                            </div>
                        </a>

                        <a href="#" class="side-ghost-item">
                            <div class="side-ghost-thumb">
                                <img src="assets/img/sidebar-2.jpg" alt="News Thumb">
                            </div>
                            <div class="side-ghost-desc">
                                Peluncuran Produk Pestisida Nabati
                            </div>
                        </a>

                        <a href="#" class="side-ghost-item">
                            <div class="side-ghost-thumb">
                                <img src="assets/img/sidebar-3.jpg" alt="News Thumb">
                            </div>
                            <div class="side-ghost-desc">
                                Kunjungan Mahasiswa Pertanian IPB
                            </div>
                        </a>

                        <a href="#" class="side-ghost-item">
                            <div class="side-ghost-thumb">
                                <img src="assets/img/sidebar-4.jpg" alt="News Thumb">
                            </div>
                            <div class="side-ghost-desc">
                                Tips Memilih Pupuk yang Tepat
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