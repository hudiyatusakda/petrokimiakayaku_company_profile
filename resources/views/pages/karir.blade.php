@include('layouts.header')

<body class="index-page karir-page">

<header id="header" class="header d-flex align-items-center">
  <div class="container-fluid container-xl d-flex justify-content-between align-items-center">
    <a href="{{ url('/') }}" class="logo d-flex align-items-center">
      <img src="{{ asset('assets/img/logo.png') }}" alt="Petrokayaku">
    </a>
    @include('layouts.navbar')
  </div>
</header>

<main class="main">

  <!-- PAGE TITLE -->
  <div class="page-title dark-background"
       style="background-image: url('{{ asset('assets/img/page-title-bg.webp') }}'); margin-top:120px;">
    <div class="container position-relative text-center">
      <h1 class="fade-up">Karir</h1>
      <p class="opacity-75 fade-up delay-1">
        Bergabung dan bertumbuh bersama PT Petrokimia Kayaku
      </p>
      <nav class="breadcrumbs fade-up delay-2">
        <ol class="justify-content-center">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li class="current">Karir</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- DESKRIPSI -->
  <section class="section">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-3 fade-up">Bangun Karirmu Bersama Kami</h2>
          <p class="text-muted fade-up delay-1">
            PT Petrokimia Kayaku membuka kesempatan bagi talenta terbaik
            untuk berkembang, berinovasi, dan berkontribusi dalam dunia
            pertanian berkelanjutan.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- LOWONGAN -->
  <section class="section karir-section">
    <div class="container">
      <div class="row gy-4">

        <!-- CARD -->
        <div class="col-md-4 fade-up">
          <div class="card karir-card h-100">
            <div class="card-body">
              <h5 class="fw-bold">Marketing Officer</h5>
              <p class="karir-meta">Full Time · Surabaya</p>
              <p class="text-muted">
                Bertanggung jawab dalam pemasaran produk dan pengembangan pasar.
              </p>
              <a href="#" class="btn btn-outline-success btn-sm">
                Lihat Detail
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-4 fade-up delay-1">
          <div class="card karir-card h-100">
            <div class="card-body">
              <h5 class="fw-bold">Agronomist</h5>
              <p class="karir-meta">Full Time · Jawa Timur</p>
              <p class="text-muted">
                Memberikan pendampingan teknis dan solusi pertanian.
              </p>
              <a href="#" class="btn btn-outline-success btn-sm">
                Lihat Detail
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-4 fade-up delay-2">
          <div class="card karir-card h-100">
            <div class="card-body">
              <h5 class="fw-bold">Admin Support</h5>
              <p class="karir-meta">Contract · Kantor Pusat</p>
              <p class="text-muted">
                Mendukung operasional administrasi perusahaan.
              </p>
              <a href="#" class="btn btn-outline-success btn-sm">
                Lihat Detail
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

</main>

@include('layouts.footer')
</body>
