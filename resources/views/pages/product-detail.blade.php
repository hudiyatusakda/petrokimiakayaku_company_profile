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
    
    <div class="page-title dark-background" data-aos="fade"
      style="background-image: url({{ asset('assets/img/page-title-bg.webp') }}); margin-top:120px;">
      <div class="container position-relative">
        <h1>Our Fresh Products</h1>
        <nav class="breadcrumbs">
          <ol>
            {{-- Link balik ke daftar kategori --}}
            <li><a href="{{ route('category.detail', strtolower($product->category)) }}">{{ $product->category }}</a></li>
            <li class="current">{{ $product->name }}</li>
          </ol>
        </nav>
      </div>
    </div>
    <section id="product-detail" class="section">
      <div class="container">
        <div class="row gy-4 align-items-center">

          <div class="col-lg-4 text-center">
            <div class="product-detail-image">
              <span class="badge bg-success product-badge-detail">{{ $product->category }}</span>
              {{-- Pastikan di database kolom image_path berisi path lengkap: assets/img/products/bassa.png --}}
              <img src="{{ asset($product->image_path) }}" 
                   class="img-fluid product-img-hover" 
                   alt="{{ $product->name }}">
            </div>
          </div>

          <div class="col-lg-8">
            <h3 class="fw-bold mb-1">{{ $product->name }}</h3>
            
            @if(!empty($product->active_ingredient))
                <p class="text-muted">(Bahan Aktif : {{ $product->active_ingredient }})</p>
            @endif

            <div class="mt-3">
               {{-- Deskripsi Produk --}}
               {!! nl2br(e($product->description)) !!}
            </div>

            <div class="row mt-4">
              <div class="col-md-6">
                <h6 class="fw-bold text-success">
                  <i class="bi bi-check-circle-fill"></i> Manfaat Produk
                </h6>
                <div class="product-list">
                    {{-- Jika kolom benefits ada isinya, tampilkan. Jika tidak, tampilkan default --}}
                    @if(!empty($product->benefits))
                        {!! $product->benefits !!} 
                    @else
                        <ul class="list-unstyled">
                            <li>Efektif membasmi hama sasaran</li>
                            <li>Meningkatkan kualitas panen</li>
                        </ul>
                    @endif
                </div>
              </div>

              <div class="col-md-6">
                <h6 class="fw-bold text-success">
                  <i class="bi bi-star-fill"></i> Keunggulan Produk
                </h6>
                <div class="product-list">
                     @if(!empty($product->advantages))
                        {!! $product->advantages !!}
                     @else
                        <ul class="list-unstyled">
                            <li>Aman bagi lingkungan</li>
                            <li>Mudah diaplikasikan</li>
                        </ul>
                     @endif
                </div>
              </div>
            </div>

            {{-- Harga (Opsional) --}}
            @if($product->price)
            <div class="mt-4">
                <h4 class="text-success fw-bold">Rp {{ number_format($product->price, 0, ',', '.') }}</h4>
            </div>
            @endif

          </div>
        </div>
      </div>
    </section>
    <section id="related-products" class="section bg-light">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <h4 class="fw-bold mb-0">Produk Serupa ({{ $product->category }})</h4>
          <div>
            <button class="btn btn-outline-success btn-sm related-prev"><i class="bi bi-chevron-left"></i></button>
            <button class="btn btn-outline-success btn-sm related-next"><i class="bi bi-chevron-right"></i></button>
          </div>
        </div>

        @if($relatedProducts->count() > 0)
        <div class="swiper related-products-swiper">
          <div class="swiper-wrapper">
            
            @foreach($relatedProducts as $related)
            <div class="swiper-slide">
              {{-- Link menuju detail produk tersebut --}}
              <a href="{{ route('product.detail', $related->slug) }}" class="related-card text-decoration-none">
                <div class="card border-0 shadow-sm h-100 p-3 text-center">
                    <img src="{{ asset($related->image_path) }}" class="img-fluid mb-3" style="height: 150px; object-fit: contain;" alt="{{ $related->name }}">
                    <h6 class="text-dark fw-bold">{{ $related->name }}</h6>
                </div>
              </a>
            </div>
            @endforeach

          </div>
        </div>
        @else
            <p class="text-center text-muted">Tidak ada produk serupa lainnya.</p>
        @endif

      </div>
    </section>
    </main>

  {{-- Script Swiper --}}
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      new Swiper(".related-products-swiper", {
        loop: false, // False agar tidak error jika produk sedikit
        spaceBetween: 20,
        grabCursor: true,
        navigation: {
          nextEl: ".related-next",
          prevEl: ".related-prev",
        },
        breakpoints: {
          0: { slidesPerView: 2 },
          768: { slidesPerView: 3 },
          992: { slidesPerView: 4 } // Menyesuaikan ukuran
        }
      });
    });
  </script>

  @include('layouts.footer')
</body>