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

    <!-- Hero Section -->
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

    <!-- About 3 Section -->
    <section id="about-3" class="about-3 section">

      <div class="container">
        <div class="row gy-4 justify-content-between align-items-center">
          <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
            <img src="assets/img/gambar_kebijakan3.jpg" alt="Image" class="img-fluid">
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn">
              <span class="play"><i class="bi bi-play-fill"></i></span>
            </a>
          </div>
          <div class="col-lg-5 order-lg-1" data-aos="fade-up" data-aos-delay="100">
            <h2 class="content-title mb-4">Manajemen Petrokimia Kayaku</h2>
            <p class="mb-4">
              Manajemen Petrokimia Kayaku merupakan sumber daya manusia yang mampu memberikan kontribusi dan nilai pemimpin
              yang baik guna terus mengemban misi perusahaan dalam menyediakan produk-produk pestisida yang berkualitas tinggi serta
              layanan terbaik bagi pelanggan dan masyarakat luas. Selain itu, Petrokimia Kayaku juga berkomitmen untuk meningkatkan
              kompetensi dan kesejahteraan karyawan melalui berbagai program pengembangan sumber daya manusia yang baik dan terstruktur
            </p>
            <!-- <ul class="list-unstyled list-check">
              <li>Lorem ipsum dolor sit amet</li>
              <li>Velit explicabo vitae repellendu</li>
              <li>Repellat aliquam nihil illo</li>
            </ul> -->

            <!-- <p><a href="#" class="btn-cta">Get in touch</a></p> -->
          </div>
        </div>
      </div>
    </section><!-- /About 3 Section -->

    <section class="team-15 team section" id="team">
    
        <div class="container section-title" data-aos="fade-up">
            <h2>Tim Manajemen</h2>
            <p>Struktur Organisasi Perusahaan</p>
        </div>

        <div class="content">
            <div class="container">

                <div class="row mb-5" data-aos="fade-up">
                    <div class="col-12 text-center section-header">
                        <h3>
                            <a href="{{ route('komisaris') }}" class="section-link">Dewan Komisaris <i class="bi bi-arrow-right-short" style="font-size: 0.8em;"></i></a>
                        </h3>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="person">
                            <figure>
                                <img src="assets/img/Shujiro.jpg" alt="Komisaris Utama" class="img-fluid">
                                <div class="social">
                                    <a href="#"><span class="bi bi-facebook" style="color: green"></span></a>
                                    <a href="#"><span class="bi bi-twitter-x" style="color: green"></span></a>
                                    <a href="#"><span class="bi bi-linkedin" style="color: green"></span></a>
                                </div>
                            </figure>
                            <div class="person-contents">
                                <h3>Shujiro Nishida</h3>
                                <span class="position">KOMISARIS</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="person">
                            <figure>
                                <img src="assets/img/Bayu-Aprianto.png" alt="Komisaris" class="img-fluid">
                                <div class="social">
                                    <a href="#"><span class="bi bi-facebook" style="color: green"></span></a>
                                    <a href="#"><span class="bi bi-twitter-x" style="color: green"></span></a>
                                    <a href="#"><span class="bi bi-linkedin" style="color: green"></span></a>
                                </div>
                            </figure>
                            <div class="person-contents">
                                <h3>Bayu Aprianto</h3>
                                <span class="position">KOMISARIS</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="person">
                            <figure>
                                <img src="assets/img/Faizal-Reza.png" alt="Komisaris" class="img-fluid">
                                <div class="social">
                                    <a href="#"><span class="bi bi-facebook" style="color: green"></span></a>
                                    <a href="#"><span class="bi bi-twitter-x" style="color: green"></span></a>
                                    <a href="#"><span class="bi bi-linkedin" style="color: green"></span></a>
                                </div>
                            </figure>
                            <div class="person-contents">
                                <h3>Muhammad Faizal Reza</h3>
                                <span class="position">KOMISARIS</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-12 text-center section-header mt-4">
                        <h3>
                            <a href="{{ route('direksi') }}" class="section-link">Direksi <i class="bi bi-arrow-right-short" style="font-size: 0.8em;"></i></a>
                        </h3>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="person">
                            <figure>
                                <img src="assets/img/muammar-maarif.jpg" alt="Direktur Utama" class="img-fluid">
                                <div class="social">
                                    <a href="#"><span class="bi bi-facebook" style="color: green"></span></a>
                                    <a href="#"><span class="bi bi-twitter-x" style="color: green"></span></a>
                                    <a href="#"><span class="bi bi-linkedin" style="color: green"></span></a>
                                </div>
                            </figure>
                            <div class="person-contents">
                                <h3>Muammar Ma`arif</h3>
                                <span class="position">Direktur Komersil</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="person">
                            <figure>
                                <img src="assets/img/iqbal-wahyudi.jpg" alt="Direktur Keuangan" class="img-fluid">
                                <div class="social">
                                    <a href="#"><span class="bi bi-facebook" style="color: green"></span></a>
                                    <a href="#"><span class="bi bi-twitter-x" style="color: green"></span></a>
                                    <a href="#"><span class="bi bi-linkedin" style="color: green"></span></a>
                                </div>
                            </figure>
                            <div class="person-contents">
                                <h3>Iqbal Wahyudi</h3>
                                <span class="position">Direktur Produksi</span>
                            </div>
                        </div>
                    </div>

                </div>
                </div>
        </div>
    </section>
  </main>

  @include ('layouts.footer');