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

    <section class="facilities-section" id="fasilitas">
        <div class="container-fluid p-0"> <div class="container mb-5 text-center" data-aos="fade-up">
                <h6 class="text-success fw-bold text-uppercase">Pemasaran & Fasilitas</h6>
                <h2 class="display-5 fw-bold">Infrastruktur & Pemasaran</h2>
            </div>

            <div class="container">

                <div class="row g-0 facility-row" data-aos="fade-up">
                    
                    <div class="col-lg-6 facility-img-col left-img">
                        <a href="{{ route('fasilitas.perusahaan') }}">
                            <img src="assets/img/sdm.jpg" alt="Laboratorium Riset" class="facility-img">
                        </a>
                        
                        <div class="yellow-badge">
                            <i class="bi bi-gear-wide-connected"></i>
                            Fasilitas Perusahaan dengan teknologi mutakhir.
                        </div>
                    </div>

                    <div class="col-lg-6 facility-text-col">
                        <h3><a href="{{ route('fasilitas.perusahaan') }}">Fasilitas & Pengembangan</a></h3>
                        <p>
                            Fasilitas Pabrik modern yang dilengkapi dengan peralatan analisis canggih untuk memastikan kualitas produk agrokimia yang presisi. Kami melakukan pengujian ketat mulai dari bahan baku hingga produk jadi demi keamanan lingkungan.
                        </p>
                        
                        <ul class="facility-features">
                            <li><i class="bi bi-check-lg"></i> Standar ISO 17025</li>
                            <li><i class="bi bi-check-lg"></i> Analisis Presisi</li>
                        </ul>
                    </div>
                </div>


                <div class="row g-0 facility-row" data-aos="fade-up">
                    
                    <div class="col-lg-6 facility-text-col order-2 order-lg-1">
                        <h3><a href="{{ route('pemasaran.perusahaan') }}">Pemasaran Perusahaan Terstruktur</a></h3>
                        <p>
                            Pemasaran produk kami dirancang dengan sistem otomatisasi tinggi untuk menjaga konsistensi kualitas. Kapasitas produksi yang besar memungkinkan kami memenuhi kebutuhan pasar domestik maupun ekspor dengan tepat waktu.
                        </p>

                        <ul class="facility-features">
                            <li><i class="bi bi-check-lg"></i> Marketing Expand</li>
                            <li><i class="bi bi-check-lg"></i> High Value Product</li>
                        </ul>
                    </div>

                    <div class="col-lg-6 facility-img-col right-img order-1 order-lg-2">
                        <a href="{{ route('pemasaran.perusahaan') }}">
                          <img src="assets/img/gambar_pabrik3.jpg" alt="Pabrik Produksi" class="facility-img">
                        </a>
                        <div class="yellow-badge">
                            <i class="bi bi-boxes"></i>
                            Distribusi efisien ke seluruh negeri.
                        </div>
                    </div>
                </div>


                <div class="row g-0 facility-row" data-aos="fade-up">
                    
                    <div class="col-lg-6 facility-img-col left-img">
                        <a href="{{ route('riset.perusahaan') }}">
                          <img src="assets/img/kayaku-1.jpeg" alt="Greenhouse Percobaan" class="facility-img">
                        </a>
                        
                        <div class="yellow-badge">
                            <i class="bi bi-flower1"></i>
                            Inovasi ramah lingkungan.
                        </div>
                    </div>

                    <div class="col-lg-6 facility-text-col">
                        <a href="{{ route('riset.perusahaan') }}"><h3>Riset dan Pengembangan</h3></a>
                        <p>
                            Sebelum dipasarkan, setiap produk diriset dan testing secara langsung di area greenhouse kami. Hal ini dilakukan untuk mensimulasikan efektivitas produk terhadap tanaman dalam berbagai kondisi cuaca dan tanah.
                        </p>

                        <ul class="facility-features">
                            <li><i class="bi bi-check-lg"></i> Simulasi Alami</li>
                            <li><i class="bi bi-check-lg"></i> Riset Biologi</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
  </main>

  @include ('layouts.footer');