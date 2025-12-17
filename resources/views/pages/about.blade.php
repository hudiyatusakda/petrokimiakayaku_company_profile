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

    <!-- Company Profile Menu -->
<section id="company-menu" class="section">
  <div class="container">

    <div class="row gy-4">

      <!-- Tentang Perusahaan -->
      <div class="col-lg-4 col-md-6">
        <a href="{{ route('tentang') }}" class="company-link">
          <div class="company-card">
            <div class="company-image">
              <img src="{{ asset('assets/img/sdm.jpg') }}" alt="Tentang Perusahaan">
            </div>
            <div class="company-body">
              <h5>Tentang Perusahaan</h5>
            </div>
          </div>
        </a>
      </div>

      <!-- Manajemen Perusahaan -->
      <div class="col-lg-4 col-md-6">
        <a href="{{ route('manajemen') }}" class="company-link">
          <div class="company-card">
            <div class="company-image">
              <img src="{{ asset('assets/img/gambar_kebijakan3.jpg') }}" alt="Manajemen Perusahaan">
            </div>
            <div class="company-body">
              <h5>Manajemen Perusahaan</h5>
            </div>
          </div>
        </a>
      </div>

      <!-- Fasilitas Perusahaan -->
      <div class="col-lg-4 col-md-6">
        <a href="{{ route('fasilitas') }}" class="company-link">
          <div class="company-card">
            <div class="company-image">
              <img src="{{ asset('assets/img/gambar_pabrik3.jpg') }}" alt="Fasilitas Perusahaan">
            </div>
            <div class="company-body">
              <h5>Fasilitas Perusahaan</h5>
            </div>
          </div>
        </a>
      </div>

    </div>

  </div>
</section>

<!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section light-background">

      <div class="content">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <h3>Jika ada pertanyaan</h3>
              <p> Jangan ragu untuk menghubungi kami  </p>
            </div>
            <div class="col-lg-6">
              <form action="forms/newsletter.php" class="form-subscribe php-email-form">
                <div class="form-group d-flex align-items-stretch">
                  <input type="email" name="email" class="form-control h-100" placeholder="Enter your e-mail">
                  <input type="submit" class="btn btn-secondary px-4" value="Kirim">
                </div>
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">
                  Thank you!
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Call To Action Section -->
  
  </main>

  @include ('layouts.footer');