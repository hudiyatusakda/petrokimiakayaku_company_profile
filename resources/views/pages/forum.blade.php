@include('layouts.header')

<body class="index-page forum-page">

<header id="header" class="header d-flex align-items-center">
  <div class="container-fluid container-xl d-flex justify-content-between align-items-center">
    <a href="{{ url('/') }}" class="logo d-flex align-items-center">
      <img src="{{ asset('assets/img/logo.png') }}" alt="Petrokimia Kayaku">
    </a>
    @include('layouts.navbar')
  </div>
</header>

<main class="main">

  <!-- PAGE TITLE -->
  <div class="page-title dark-background" data-aos="fade"
    style="background-image: url({{ asset('assets/img/page-title-bg.webp') }}); margin-top:120px;">
    <div class="container position-relative">
      <h1>Forum Konsultasi</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li class="current">Forum</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- INTRO -->
  <section class="section">
    <div class="container">
      <div class="row justify-content-center mb-4">
        <div class="col-lg-8 text-center">
          <h2 class="fw-bold fade-up">Forum Konsultasi Petani Indonesia</h2>
          <p class="text-muted fade-up delay-1">
            Ajukan pertanyaan seputar produk & solusi pertanian.
            Tim kami akan membantu secepatnya.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- LIST PERTANYAAN -->
  <section class="section forum-list">
    <div class="container">

      <div class="forum-box fade-up">
        <h5 class="fw-bold mb-3">List Pertanyaan</h5>

        <!-- ITEM -->
        <div class="forum-item">
          <p class="forum-meta">
            <strong>Pengirim:</strong> Rendi (Pekanbaru, Riau)
            <span>• 1 Okt 2025</span>
          </p>
          <p><strong>Pertanyaan:</strong><br>
            “Mohon info cara menjadi sales di wilayah saya”
          </p>
          <p class="forum-answer">
            <strong>Jawaban:</strong> Mohon hubungi distributor terdekat.
          </p>
        </div>

        <div class="forum-item">
          <p class="forum-meta">
            <strong>Pengirim:</strong> Budi (Jakarta)
            <span>• 7 Nov 2025</span>
          </p>
          <p><strong>Pertanyaan:</strong><br>
            “Mau cari supplier pupuk & obat pertanian”
          </p>
          <p class="forum-answer">
            <strong>Jawaban:</strong> Mohon hubungi distributor.
          </p>
        </div>

        <div class="forum-item">
          <p class="forum-meta">
            <strong>Pengirim:</strong> Budi (Jakarta)
            <span>• 7 Nov 2025</span>
          </p>
          <p><strong>Pertanyaan:</strong><br>
            “Mau cari supplier pupuk & obat pertanian”
          </p>
          <p class="forum-answer">
            <strong>Jawaban:</strong> Mohon hubungi distributor.
          </p>
        </div>

      </div>
    </div>
  </section>

</main>

@include('layouts.footer')

</body>
