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

    </section><!-- /Hero Section -->

    <section class="factory-section" id="pabrik">
        <div class="container"> 
            
            <div class="text-center mb-5" data-aos="fade-up">
                <h6 class="text-success fw-bold text-uppercase">Infrastruktur & Teknologi</h6>
                <h2 class="display-5 fw-bold">Fasilitas Pabrik Unggulan</h2>
                <div class="d-flex justify-content-center mt-3">
                    <div style="width: 80px; height: 4px; background: #ffc107; border-radius: 2px;"></div>
                </div>
            </div>
            
            <div class="factory-item" data-aos="fade-up">
                
                <div class="factory-img-col">
                    <a href="{{ route('detail.pabrik') }}">
                        <img src="assets/img/sdm.jpg" alt="Unit Produksi" class="factory-img">
                    </a>
                    
                    <div class="yellow-badge">
                        <i class="bi bi-gear-wide-connected"></i>
                        <span>Teknologi Produksi Otomatis</span>
                    </div>
                </div>

                <div class="factory-text-col">
                    <h3><a href="{{ route('detail.pabrik') }}">Unit Produksi Utama</a></h3>
                    <p>
                        Dilengkapi dengan mesin pencampuran berkecepatan tinggi dan sistem pengemasan otomatis (Robotic Arm) untuk memastikan efisiensi, kecepatan, dan konsistensi kualitas produk di setiap kemasan.
                    </p>
                    <a href="#" class="factory-link">Lihat Selengkapnya <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>


            <div class="factory-item" data-aos="fade-up">
                
                <div class="factory-img-col">
                    <img src="assets/img/kayaku-1.jpeg" alt="Gudang Logistik" class="factory-img">
                    
                    <div class="yellow-badge">
                        <i class="bi bi-box-seam-fill"></i>
                        <span>Warehouse Management System</span>
                    </div>
                </div>

                <div class="factory-text-col">
                    <h3>Gudang Logistik Modern</h3>
                    <p>
                        Area penyimpanan seluas 5 hektar dengan sistem manajemen stok digital (WMS) dan kontrol suhu otomatis. Menjamin ketersediaan produk dan keamanan mutu sebelum didistribusikan ke petani.
                    </p>
                    <a href="#" class="factory-link">Lihat Selengkapnya <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>


            <div class="factory-item" data-aos="fade-up">
                
                <div class="factory-img-col">
                    <img src="assets/img/gambar_pabrik3.jpg" alt="Laboratorium QC" class="factory-img">
                    
                    <div class="yellow-badge">
                        <i class="bi bi-clipboard-check-fill"></i>
                        <span>Laboratorium Quality Control</span>
                    </div>
                </div>

                <div class="factory-text-col">
                    <h3>Laboratorium Riset & QC</h3>
                    <p>
                        Sebelum sampai ke tangan konsumen, setiap batch produk melalui uji ketat di laboratorium berstandar ISO 17025. Kami memastikan formula tepat sasaran dan aman bagi lingkungan.
                    </p>
                    <a href="#" class="factory-link">Lihat Selengkapnya <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

        </div>
    </section>

  </main>

  @include ('layouts.footer');