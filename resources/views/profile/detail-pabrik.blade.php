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

  <section class="factory-section" id="detail-pabrik">
        <div class="container"> 
            
            <div class="text-center mb-5" data-aos="fade-up">
                <h6 class="text-success fw-bold text-uppercase">Data Operasional</h6>
                <h2 class="display-5 fw-bold">Detail Kapasitas & Fasilitas</h2>
                <div class="d-flex justify-content-center mt-3">
                    <div style="width: 80px; height: 4px; background: #ffc107; border-radius: 2px;"></div>
                </div>
            </div>

            <div class="factory-item" data-aos="fade-up">
                
                <div class="factory-img-col">
                    <img src="assets/img/fasilitas_produksi.jpg" alt="Kapasitas Produksi" class="factory-img">
                    
                    <div class="yellow-badge">
                        <i class="bi bi-bar-chart-line-fill"></i>
                        <span>Total Output Tahunan Tinggi</span>
                    </div>
                </div>

                <div class="factory-text-col">
                    <h3>Kapasitas Produksi</h3>
                    <p>
                        Didukung oleh mesin berteknologi tinggi, kami memiliki kapasitas produksi terpasang yang besar untuk memenuhi kebutuhan pasar domestik maupun ekspor. Berikut adalah rincian kapasitas per fasilitas:
                    </p>

                    <div class="spec-container scrollable-spec">
                        <div class="spec-row">
                            <span class="spec-label"><i class="bi bi-droplet-fill"></i> Pestisida Cair (EC, SL, L, PA)</span>
                            <span class="spec-value">8.700 KL</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-label"><i class="bi bi-circle-fill"></i> Pestisida Butiran (G)</span>
                            <span class="spec-value">6.200 MT</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-label"><i class="bi bi-boxes"></i> Pestisida Tepung (WP)</span>
                            <span class="spec-value">2.200 MT</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-label"><i class="bi bi-water"></i> Pestisida Flowable (SC)</span>
                            <span class="spec-value">2.400 KL</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-label"><i class="bi bi-flower1"></i> Pestisida Padatan (BB, RB)</span>
                            <span class="spec-value">1.500 MT</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-label"><i class="bi bi-flower1"></i> Produk Hayati Cair (SL)</span>
                            <span class="spec-value">300 KL</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-label"><i class="bi bi-flower1"></i> Produk Hayati Butiran (G)</span>
                            <span class="spec-value">9.700 MT</span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="factory-item" data-aos="fade-up">
                
                <div class="factory-img-col">
                    <img src="assets/img/fasilitas_produksi.jpg" alt="Sejarah Fasilitas" class="factory-img">
                    
                    <div class="yellow-badge">
                        <i class="bi bi-clock-history"></i>
                        <span>Beroperasi Sejak 1984</span>
                    </div>
                </div>

                <div class="factory-text-col">
                    <h3>Rekam Jejak Fasilitas</h3>
                    <p>
                        Pengembangan fasilitas produksi kami dilakukan secara bertahap dan berkelanjutan, menyesuaikan dengan perkembangan teknologi formulasi terkini.
                    </p>

                    <div class="spec-container scrollable-spec">
                        <div class="d-flex justify-content-between text-warning mb-2 border-bottom border-secondary pb-1" style="font-size: 0.8rem; font-weight:bold; letter-spacing: 1px;">
                            <span>UNIT PRODUKSI</span>
                            <span>TAHUN OPERASI</span>
                        </div>

                        <div class="spec-row">
                            <span class="spec-label">Unit Tepung (WP)</span>
                            <span class="spec-value">1984 - Sekarang</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-label">Unit Rodentisida (BB, RB)</span>
                            <span class="spec-value">1989 - Sekarang</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-label">Unit Flowable (SC)</span>
                            <span class="spec-value">1994 - Sekarang</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-label">Unit Cair 2 (SL, L, PA)</span>
                            <span class="spec-value">1996 - Sekarang</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-label">Unit Cair 1 (EC)</span>
                            <span class="spec-value">1997 - Sekarang</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-label">Unit Butiran (G)</span>
                            <span class="spec-value">1997 - Sekarang</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-label">Unit Produk Hayati Cair</span>
                            <span class="spec-value">2007 - Sekarang</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-label">Unit Produk Hayati Butiran</span>
                            <span class="spec-value">2009 - Sekarang</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

  <main class="main">

    

  </main>

  @include ('layouts.footer');