@include ('layouts.header')



<body class="about-page">

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

  </section><!-- /Hero Section -->

  <main class="main">

    <section class="research-intro-section" id="riset">
        <div class="research-blob blob-left"></div>
        <div class="research-blob blob-right"></div>

        <div class="container position-relative" style="z-index: 2;">
            <div class="row align-items-center">
                
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <h6 class="text-warning fw-bold text-uppercase mb-3">Innovation & Development</h6>
                    <h2 class="display-4 fw-bold text-success mb-4">Masa Depan Pertanian Dimulai dari Laboratorium</h2>
                    <p class="lead text-secondary mb-4">
                        Kami tidak hanya memproduksi, tetapi juga meneliti. Setiap formula yang kami hasilkan merupakan buah dari riset mendalam selama bertahun-tahun untuk memastikan efektivitas maksimal dengan dampak lingkungan yang minimal.
                    </p>
                    <div class="d-flex gap-3">
                        <div class="border-start border-4 border-warning ps-3">
                            <h5 class="fw-bold mb-1">Riset Formulatif</h5>
                            <small class="text-muted">Pengembangan bahan aktif baru</small>
                        </div>
                        <div class="border-start border-4 border-warning ps-3">
                            <h5 class="fw-bold mb-1">Uji Efikasi</h5>
                            <small class="text-muted">Pengujian lapangan skala luas</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 text-center">
                    <div class="research-hero-img-wrapper">
                        <img src="assets/img/riset-lab-main.jpg" alt="Laboratorium Riset" class="research-hero-img">
                        <div class="dots-deco"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="research-grid-section">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h3 class="fw-bold text-success">Fokus Penelitian Kami</h3>
                <p class="text-muted">Eksplorasi teknologi pertanian dari hulu ke hilir</p>
            </div>

            <div class="bento-grid">
                
                <div class="bento-item large" data-aos="zoom-in">
                    <img src="assets/img/riset-1.jpg" alt="Riset 1" class="bento-img">
                    <div class="bento-overlay">
                        <div class="bento-text">
                            <h4>Molekuler & Genetika</h4>
                            <p>Analisis DNA tanaman untuk ketahanan hama.</p>
                        </div>
                    </div>
                </div>

                <div class="bento-item" data-aos="fade-up" data-aos-delay="100">
                    <img src="assets/img/riset-2.jpg" alt="Riset 2" class="bento-img">
                    <div class="bento-overlay">
                        <div class="bento-text">
                            <h4>Uji Sampel Tanah</h4>
                            <p>Pemetaan nutrisi lahan.</p>
                        </div>
                    </div>
                </div>

                <div class="bento-item" data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/img/riset-3.jpg" alt="Riset 3" class="bento-img">
                    <div class="bento-overlay">
                        <div class="bento-text">
                            <h4>Quality Control</h4>
                            <p>Standarisasi ISO 17025.</p>
                        </div>
                    </div>
                </div>

                <div class="bento-item wide" data-aos="fade-up" data-aos-delay="300">
                    <img src="assets/img/riset-4.jpg" alt="Riset 4" class="bento-img">
                    <div class="bento-overlay">
                        <div class="bento-text">
                            <h4>Green House Modern</h4>
                            <p>Simulasi iklim terkontrol untuk pengujian varietas baru.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="research-loop-section">
        <div class="container-fluid p-0">
            <div class="loop-title" data-aos="fade-down">
                <h4 class="fw-bold text-warning text-uppercase ls-2">Riset Tanpa Henti</h4>
                <p class="text-white-50">Mengintip aktivitas harian di fasilitas R&D kami</p>
            </div>

            <div class="marquee-wrapper">
                <div class="marquee-track">
                    
                    <div class="marquee-card">
                        <img src="assets/img/activity-1.jpg" alt="Activity">
                        <div class="marquee-badge">Mikroskopis</div>
                    </div>
                    <div class="marquee-card">
                        <img src="assets/img/activity-2.jpg" alt="Activity">
                        <div class="marquee-badge">Diskusi Tim</div>
                    </div>
                    <div class="marquee-card">
                        <img src="assets/img/activity-3.jpg" alt="Activity">
                        <div class="marquee-badge">Panen Uji Coba</div>
                    </div>
                    <div class="marquee-card">
                        <img src="assets/img/activity-4.jpg" alt="Activity">
                        <div class="marquee-badge">Analisis Data</div>
                    </div>
                    <div class="marquee-card">
                        <img src="assets/img/activity-5.jpg" alt="Activity">
                        <div class="marquee-badge">Drone Mapping</div>
                    </div>

                    <div class="marquee-card">
                        <img src="assets/img/activity-1.jpg" alt="Activity">
                        <div class="marquee-badge">Mikroskopis</div>
                    </div>
                    <div class="marquee-card">
                        <img src="assets/img/activity-2.jpg" alt="Activity">
                        <div class="marquee-badge">Diskusi Tim</div>
                    </div>
                    <div class="marquee-card">
                        <img src="assets/img/activity-3.jpg" alt="Activity">
                        <div class="marquee-badge">Panen Uji Coba</div>
                    </div>
                    <div class="marquee-card">
                        <img src="assets/img/activity-4.jpg" alt="Activity">
                        <div class="marquee-badge">Analisis Data</div>
                    </div>
                    <div class="marquee-card">
                        <img src="assets/img/activity-5.jpg" alt="Activity">
                        <div class="marquee-badge">Drone Mapping</div>
                    </div>

                </div>
            </div>
        </div>
    </section>

  </main>

  @include ('layouts.footer');