@include ('layouts.header')



<body class="index-page">

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
    {{-- main --}}

    {{-- main --}}
    <main class="main">
        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url(assets/img/page-title-bg.webp); margin-top:120px;">
            <div class="container position-relative">
                <h1>Our Fresh Products</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="current">Products</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->
        <!-- Product Categories -->
        <section id="product-categories" class="product-categories section">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Product Categories</h2>
                </div>
              <div class="row gy-4 text-center">

  <!-- INSEKTISIDA -->
  <div class="col-lg-3 col-md-6">
    <div class="category-item p-4 shadow-sm">
      <i class="fa-solid fa-bug fa-2x text-success mb-3"></i>
      <h3>Insektisida</h3>
      <a href="{{ route('produk.insektisida') }}" class="btn btn-outline-success btn-sm">
        Lihat Produk
      </a>
    </div>
  </div>

  <!-- HERBISIDA -->
  <div class="col-lg-3 col-md-6">
    <div class="category-item p-4 shadow-sm">
      <i class="fa-solid fa-seedling fa-2x text-success mb-3"></i>
      <h3>Herbisida</h3>
      <a href="{{ route('produk.herbisida') }}" class="btn btn-outline-success btn-sm">
        Lihat Produk
      </a>
    </div>
  </div>

  <!-- FUNGISIDA -->
  <div class="col-lg-3 col-md-6">
    <div class="category-item p-4 shadow-sm">
      <i class="fa-solid fa-virus fa-2x text-success mb-3"></i>
      <h3>Fungisida</h3>
      <a href="{{ route('produk.fungisida') }}" class="btn btn-outline-success btn-sm">
        Lihat Produk
      </a>
    </div>
  </div>

  <!-- RODENTISIDA -->
  <div class="col-lg-3 col-md-6">
    <div class="category-item p-4 shadow-sm">
      <i class="fa-solid fa-skull-crossbones fa-2x text-success mb-3"></i>
      <h3>Rodentisida</h3>
      <a href="{{ route('produk.rodentisida') }}" class="btn btn-outline-success btn-sm">
        Lihat Produk
      </a>
    </div>
  </div>

  <!-- FUMIGAN -->
  <div class="col-lg-3 col-md-6">
    <div class="category-item p-4 shadow-sm">
      <i class="fa-solid fa-cloud fa-2x text-success mb-3"></i>
      <h3>Fumigan</h3>
      <a href="{{ route('produk.fumigan') }}" class="btn btn-outline-success btn-sm">
        Lihat Produk
      </a>
    </div>
  </div>

  <!-- MOLUSKISIDA -->
  <div class="col-lg-3 col-md-6">
    <div class="category-item p-4 shadow-sm">
      <i class="fa-solid fa-water fa-2x text-success mb-3"></i>
      <h3>Moluskisida</h3>
      <a href="{{ route('produk.moluskisida') }}" class="btn btn-outline-success btn-sm">
        Lihat Produk
      </a>
    </div>
  </div>

  <!-- ATRAKTAN -->
  <div class="col-lg-3 col-md-6">
    <div class="category-item p-4 shadow-sm">
      <i class="fa-solid fa-magnet fa-2x text-success mb-3"></i>
      <h3>Atraktan</h3>
      <a href="{{ route('produk.atraktan') }}" class="btn btn-outline-success btn-sm">
        Lihat Produk
      </a>
    </div>
  </div>

  <!-- PUPUK CAIR -->
  <div class="col-lg-3 col-md-6">
    <div class="category-item p-4 shadow-sm">
      <i class="fa-solid fa-flask fa-2x text-success mb-3"></i>
      <h3>Pupuk Cair</h3>
      <a href="{{ route('produk.pupuk_cair') }}" class="btn btn-outline-success btn-sm">
        Lihat Produk
      </a>
    </div>
  </div>

  <!-- ZPT -->
  <div class="col-lg-3 col-md-6">
    <div class="category-item p-4 shadow-sm">
      <i class="fa-solid fa-vial fa-2x text-success mb-3"></i>
      <h3>ZPT</h3>
      <a href="{{ route('produk.zpt') }}" class="btn btn-outline-success btn-sm">
        Lihat Produk
      </a>
    </div>
  </div>

  <!-- PUPUK HAYATI -->
  <div class="col-lg-3 col-md-6">
    <div class="category-item p-4 shadow-sm">
      <i class="fa-solid fa-leaf fa-2x text-success mb-3"></i>
      <h3>Pupuk Hayati</h3>
      <a href="{{ route('produk.pupuk_hayati') }}" class="btn btn-outline-success btn-sm">
        Lihat Produk
      </a>
    </div>
  </div>

  <!-- BIO FUNGISIDA -->
  <div class="col-lg-3 col-md-6">
    <div class="category-item p-4 shadow-sm">
      <i class="fa-solid fa-dna fa-2x text-success mb-3"></i>
      <h3>Bio Fungisida</h3>
      <a href="{{ route('produk.bio_fungisida') }}" class="btn btn-outline-success btn-sm">
        Lihat Produk
      </a>
    </div>
  </div>

  <!-- PROBIOTIK -->
  <div class="col-lg-3 col-md-6">
    <div class="category-item p-4 shadow-sm">
      <i class="fa-solid fa-bacteria fa-2x text-success mb-3"></i>
      <h3>Probiotik</h3>
      <a href="{{ route('produk.probiotik') }}" class="btn btn-outline-success btn-sm">
        Lihat Produk
      </a>
    </div>
  </div>

</div>

        </section>
       
        <!-- Newsletter Section -->
        <section id="newsletter" class="newsletter section green-background">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h3>Join Our Farm Community</h3>
                        <p class="opacity-50">
                            Subscribe to get updates on seasonal products, farm events, and special offers.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <form action="#" class="form-subscribe">
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Your email address">
                                <button class="btn btn-success" type="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    {{-- main --}}

    {{-- footer --}}
    @include('layouts.footer')

    