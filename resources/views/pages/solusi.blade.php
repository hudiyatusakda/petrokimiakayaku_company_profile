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

  <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade"
      style="background-image: url(assets/img/page-title-bg.webp);margin-top:120px;">
      <div class="container position-relative">
        <h1>Solusi</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="current">Solusi</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

  <!-- PENJELASAN -->
  <section class="section">
    <div class="container">
      <div class="row justify-content-center mb-4">
        <div class="col-lg-8 text-center">
          <h2 class="fw-bold mb-3 fade-up">Apa itu Insektisida?</h2>
          <p class="text-muted fade-up delay-1">
            Insektisida adalah bahan kimia yang digunakan untuk mengendalikan
            hama serangga (OPT) yang menyerang tanaman pertanian agar pertumbuhan
            tanaman optimal dan hasil panen meningkat.
          </p>
        </div>
      </div>

      <!-- FILTER -->
      <div class="row g-3 justify-content-center fade-up delay-2">
        <div class="col-md-3">
          <select id="komoditas" class="form-select solusi-select">
            <option selected disabled>Pilih Komoditas</option>
            <option value="pangan">Tanaman Pangan</option>
            <option value="hortikultura">Hortikultura</option>
          </select>
        </div>

        <div class="col-md-3">
          <select id="tanaman" class="form-select solusi-select">
            <option selected disabled>Pilih Tanaman</option>
            <option value="padi">Padi</option>
            <option value="cabai">Cabai</option>
          </select>
        </div>

        <div class="col-md-3">
          <select id="opt" class="form-select solusi-select">
            <option selected disabled>Pilih OPT</option>
            <option value="wereng">Wereng</option>
            <option value="ulat">Ulat</option>
          </select>
        </div>
      </div>
    </div>
  </section>

  <!-- HASIL PRODUK -->
  <section class="section solusi-result">
    <div class="container">
      <div class="row gy-4" id="produkResult">
        <p class="text-center text-muted">
          Silakan pilih komoditas, tanaman, dan OPT untuk melihat produk
        </p>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="section bg-white">
    <div class="container">
      <div class="row justify-content-center mb-4">
        <div class="col-lg-8 text-center">
          <h2 class="fw-bold fade-up">Pertanyaan yang Sering Diajukan</h2>
        </div>
      </div>

      <div class="accordion faq-accordion fade-up delay-1" id="faqSolusi">

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq1">
              Kapan insektisida perlu digunakan?
            </button>
          </h2>
          <div id="faq1" class="accordion-collapse collapse show">
            <div class="accordion-body">
              Insektisida digunakan ketika serangan OPT sudah mencapai ambang
              ekonomi dan berpotensi menurunkan hasil panen.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2">
              Apakah satu produk cocok untuk semua tanaman?
            </button>
          </h2>
          <div id="faq2" class="accordion-collapse collapse">
            <div class="accordion-body">
              Tidak. Setiap produk memiliki rekomendasi tanaman dan OPT tertentu
              yang harus disesuaikan.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3">
              Bagaimana cara memilih insektisida yang tepat?
            </button>
          </h2>
          <div id="faq3" class="accordion-collapse collapse">
            <div class="accordion-body">
              Pilih berdasarkan komoditas, jenis tanaman, dan OPT yang menyerang,
              seperti pada fitur filter di atas.
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

</main>

@include('layouts.footer')

<!-- JS -->
<script>
const produkData = [
  {
    komoditas: 'pangan',
    tanaman: 'padi',
    opt: 'wereng',
    nama: 'Bassa EC',
    img: '{{ asset("assets/img/products/bassa.png") }}',
    link: '{{ route("insektisida.bassa") }}'
  },
  {
    komoditas: 'hortikultura',
    tanaman: 'cabai',
    opt: 'ulat',
    nama: 'Ceba',
    img: '{{ asset("assets/img/products/ceba.png") }}',
    link: '{{ route("insektisida.ceba") }}'
  }
];

const selects = document.querySelectorAll('#komoditas, #tanaman, #opt');
const result = document.getElementById('produkResult');

selects.forEach(select => {
  select.addEventListener('change', filterProduk);
});

function filterProduk() {
  const komoditas = document.getElementById('komoditas').value;
  const tanaman = document.getElementById('tanaman').value;
  const opt = document.getElementById('opt').value;

  const filtered = produkData.filter(p =>
    p.komoditas === komoditas &&
    p.tanaman === tanaman &&
    p.opt === opt
  );

  result.innerHTML = '';

  if (filtered.length === 0) {
    result.innerHTML = `
      <p class="text-center text-muted">
        Produk tidak ditemukan untuk kombinasi ini
      </p>
    `;
    return;
  }

  filtered.forEach(p => {
    result.innerHTML += `
      <div class="col-md-4 fade-up">
        <div class="card solusi-card h-100 text-center">
          <img src="${p.img}" class="card-img-top p-4" alt="${p.nama}">
          <div class="card-body">
            <h5 class="fw-bold">${p.nama}</h5>
            <a href="${p.link}" class="btn btn-success btn-sm mt-2">
              Lihat Detail
            </a>
          </div>
        </div>
      </div>
    `;
  });
}
</script>

</body>
