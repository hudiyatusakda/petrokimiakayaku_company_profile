@include ('layouts.header')

<body class="index-page">

<header id="header" class="header d-flex align-items-center">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="{{ url('/') }}" class="logo d-flex align-items-center">
      <img src="{{ asset('assets/img/logo.png') }}" alt="Petrokayaku">
    </a>

    @include ('layouts.navbar')

  </div>
</header>

<main class="main">

  <div class="page-title dark-background"
       style="background-image: url({{ asset('assets/img/page-title-bg.webp') }}); margin-top:120px;"
       data-aos="fade-down">
    <div class="container position-relative">
      <h1>Our Fresh Products</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li class="current">Products</li>
        </ol>
      </nav>
    </div>
  </div>

  <section id="product-categories" class="product-categories section">
    <div class="container">

      <div class="section-title text-center" data-aos="fade-up">
        <h2>Product Categories</h2>
      </div>

      <div class="row gy-4 text-center">

        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="category-item p-4 shadow-sm">
            <i class="fa-solid fa-bug fa-2x text-success mb-3"></i>
            <h3>Insektisida</h3>
            {{-- PERHATIKAN: Parameter kedua adalah 'slug' --}}
            <a href="{{ route('category.detail', 'insektisida') }}" class="btn btn-outline-success btn-sm">
              Lihat kategori
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="150">
          <div class="category-item p-4 shadow-sm">
            <i class="fa-solid fa-seedling fa-2x text-success mb-3"></i>
            <h3>Herbisida</h3>
            <a href="{{ route('category.detail', 'herbisida') }}" class="btn btn-outline-success btn-sm">
              Lihat kategori
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="category-item p-4 shadow-sm">
            <i class="fa-solid fa-virus fa-2x text-success mb-3"></i>
            <h3>Fungisida</h3>
            <a href="{{ route('category.detail', 'fungisida') }}" class="btn btn-outline-success btn-sm">
              Lihat kategori
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="250">
          <div class="category-item p-4 shadow-sm">
            <i class="fa-solid fa-skull-crossbones fa-2x text-success mb-3"></i>
            <h3>Rodentisida</h3>
            <a href="{{ route('category.detail', 'rodentisida') }}" class="btn btn-outline-success btn-sm">
              Lihat kategori
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="category-item p-4 shadow-sm">
            <i class="fa-solid fa-cloud fa-2x text-success mb-3"></i>
            <h3>Fumigan</h3>
            <a href="{{ route('category.detail', 'fumigan') }}" class="btn btn-outline-success btn-sm">
              Lihat kategori
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="350">
          <div class="category-item p-4 shadow-sm">
            <i class="fa-solid fa-water fa-2x text-success mb-3"></i>
            <h3>Moluskisida</h3>
            <a href="{{ route('category.detail', 'moluskisida') }}" class="btn btn-outline-success btn-sm">
              Lihat kategori
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="category-item p-4 shadow-sm">
            <i class="fa-solid fa-magnet fa-2x text-success mb-3"></i>
            <h3>Atraktan</h3>
            <a href="{{ route('category.detail', 'atraktan') }}" class="btn btn-outline-success btn-sm">
              Lihat kategori
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="450">
          <div class="category-item p-4 shadow-sm">
            <i class="fa-solid fa-flask fa-2x text-success mb-3"></i>
            <h3>Pupuk Cair</h3>
            {{-- Slug biasanya menggunakan strip (-) untuk spasi --}}
            <a href="{{ route('category.detail', 'pupuk-cair') }}" class="btn btn-outline-success btn-sm">
              Lihat kategori
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="category-item p-4 shadow-sm">
            <i class="fa-solid fa-vial fa-2x text-success mb-3"></i>
            <h3>ZPT</h3>
            <a href="{{ route('category.detail', 'zpt') }}" class="btn btn-outline-success btn-sm">
              Lihat kategori
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="550">
          <div class="category-item p-4 shadow-sm">
            <i class="fa-solid fa-leaf fa-2x text-success mb-3"></i>
            <h3>Pupuk Hayati</h3>
            <a href="{{ route('category.detail', 'pupuk-hayati') }}" class="btn btn-outline-success btn-sm">
              Lihat kategori
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="category-item p-4 shadow-sm">
            <i class="fa-solid fa-dna fa-2x text-success mb-3"></i>
            <h3>Bio Fungisida</h3>
            <a href="{{ route('category.detail', 'bio-fungisida') }}" class="btn btn-outline-success btn-sm">
              Lihat kategori
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="650">
          <div class="category-item p-4 shadow-sm">
            <i class="fa-solid fa-bacteria fa-2x text-success mb-3"></i>
            <h3>Probiotik</h3>
            <a href="{{ route('category.detail', 'probiotik') }}" class="btn btn-outline-success btn-sm">
              Lihat kategori
            </a>
          </div>
        </div>

      </div>

    </div>
  </section>

</main>

@include('layouts.footer')
</body>