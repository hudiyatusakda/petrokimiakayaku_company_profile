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

    <section class="commissioner-section" id="dewan-komisaris">
        <div class="container">
            
            <div class="section-title text-center mb-5" data-aos="fade-up">
                <h2>Profil Dewan Direksi</h2>
                <p>Mengenal lebih dekat para pemimpin strategis perusahaan.</p>
            </div>

            @foreach($direksiMembers as $member)
            <div class="row align-items-center commissioner-item" data-aos="fade-up">
              <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="profile-img-wrapper">
                  @if($member->image_path)
                    @php $publicPath = public_path('assets/img/'.$member->image_path); @endphp
                    @if(file_exists($publicPath))
                      <img src="{{ asset('assets/img/' . $member->image_path) }}" alt="{{ $member->name }}">
                    @else
                      <img src="{{ asset('storage/' . $member->image_path) }}" alt="{{ $member->name }}">
                    @endif
                  @else
                    <img src="{{ asset('assets/img/default-person.jpg') }}" alt="{{ $member->name }}">
                  @endif
                </div>
              </div>

              <div class="col-lg-6">
                <div class="profile-content">
                  <h2>{{ $member->name }}</h2>
                  <span class="position">{{ strtoupper($member->position ?? 'Direksi') }}</span>

                  @if($member->description)
                  <p class="description">
                    {!! nl2br(e($member->description)) !!}
                  </p>
                  @endif

                  <div class="profile-divider"></div>

                  <!-- <p><strong>Status:</strong> {{ $member->is_active ? 'Aktif' : 'Tidak aktif' }}</p> -->

                  <div class="social-links">
                    <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-facebook"></i></a>
                  </div>

                </div>
              </div>
            </div>
            @endforeach
        </div>
    </section>

</main>

@include ('layouts.footer');