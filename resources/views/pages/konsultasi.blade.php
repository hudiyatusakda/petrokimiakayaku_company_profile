@include('layouts.header')

<body class="index-page solusi-page">

<header id="header" class="header d-flex align-items-center">
  <div class="container-fluid container-xl d-flex justify-content-between align-items-center">
    <a href="{{ url('/') }}" class="logo d-flex align-items-center">
      <img src="{{ asset('assets/img/logo.png') }}" alt="Petrokayaku">
    </a>
    @include('layouts.navbar')
  </div>
</header>

<main class="main">

  <!-- PAGE TITLE  -->
  <div class="page-title dark-background" data-aos="fade"
    style="background-image: url('{{ asset('assets/img/page-title-bg.webp') }}'); margin-top:120px;">
    <div class="container position-relative">
      <h1>Konsultasi</h1>
      <p class="opacity-75">Forum Tanya Jawab Seputar Pertanian</p>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li class="current">Konsultasi</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- SECTION ISI  -->
  <section class="section">
    <div class="container">

      <div class="row justify-content-center">
        <div class="col-lg-8 text-center fade-up">

          <!-- JUDUL DARI GAMBAR -->
         <h2 class="fw-bold mb-3 fade-up">
              Konsultasi
          </h2>

        <p class="text-muted fade-up delay-1">
        Selamat datang di Media Tanya Jawab PT Petrokimia Kayaku, 
        sampaikan berbagai macam pertanyaan dan keluhan seputar
        PT Petrokimia Kayaku melalui kolom berikut yang telah disediakan,
        staf kami akan berusaha secepatnya untuk menjawab pertanyaan Anda.
        Pastikan semua identitas Anda isi dengan lengkap.
        </p>


        </div>
      </div>

    </div>
  </section>

  <!-- SECTION FORM (FORMAT SOLUSI) -->
  <section class="section solusi-result">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-lg-6 fade-up delay-1">
          <div class="card solusi-card p-4">

            <h5 class="fw-bold text-center mb-3">
              Form Pertanyaan
            </h5>

            <form>
              <div class="mb-3">
                <input type="text" class="form-control solusi-select"
                  placeholder="Nama Lengkap">
              </div>

              <div class="mb-3">
                <input type="email" class="form-control solusi-select"
                  placeholder="Email">
              </div>

              <div class="mb-3">
                <textarea rows="4" class="form-control solusi-select"
                  placeholder="Tulis pertanyaan Anda"></textarea>
              </div>

              <div class="text-center">
                <button class="btn btn-success px-4">
                  Kirim Pertanyaan
                </button>
              </div>
            </form>

          </div>
        </div>

      </div>
    </div>
  </section>

</main>

@include('layouts.footer')
</body>
