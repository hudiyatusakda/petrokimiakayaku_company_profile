@include('layouts.header')

<body class="index-page">

  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('assets/img/logo.png') }}" alt="Petrokayaku">
      </a>

      @include('layouts.navbar')
      </div>
  </header>

  {{-- MAIN CONTENT --}}
  <main class="main">

    <div class="page-title dark-background" data-aos="fade"
      style="background-image: url({{ asset('assets/img/page-title-bg.webp') }}); margin-top:120px;">
      <div class="container position-relative">
        <h1>Our Fresh Products</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('products') }}">Produk</a></li>
            {{-- Nama Kategori Dinamis --}}
            <li class="current">{{ $category->name }}</li>
          </ol>
        </nav>
      </div>
    </div>
    <section id="category-intro" class="section">
      <div class="container">

        <div class="row justify-content-center text-center">
          <div class="col-lg-9">

            {{-- Judul Kategori dari Database --}}
            <h2 class="category-title" data-aos="fade-up" data-aos-delay="100">
              {{ $category->name }}
            </h2>

            <span class="category-line" 
                style="display:block; width: 60px; height: 3px; background: #28a745; margin: 15px auto;"
                data-aos="zoom-in" 
                data-aos-delay="250"></span>

            {{-- Deskripsi Kategori dari Database --}}
            <p class="category-desc mt-4" data-aos="fade-up" data-aos-delay="400">
              {!! nl2br(e($category->description)) !!}
            </p>

          </div>
        </div>

      </div>
    </section>
    <section id="services-2" class="services-2 section products-section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Products</h2>
        <p>Daftar Produk {{ $category->name }}</p>
      </div>

      <div class="services-carousel-wrap">
        <div class="container">
          
          {{-- Cek apakah ada produk di kategori ini --}}
          @if($products->count() > 0)
          <div class="swiper services-products-swiper">
            
            <script type="application/json" class="services-products-config">
              {"loop":true,"speed":600,"slidesPerView":1,"spaceBetween":20,"breakpoints":{"768":{"slidesPerView":2},"992":{"slidesPerView":3}},"navigation":{"nextEl":".services-products-next","prevEl":".services-products-prev"},"pagination":{"el":".services-products-pagination","clickable":true}}
            </script>

            <div class="swiper-wrapper">
              
              {{-- LOOPING DATABASE --}}
              @foreach($products as $product)
              <div class="swiper-slide">
                <div class="product-item position-relative h-100">
                  <div class="product-img position-relative overflow-hidden">
                    
                    {{-- PERBAIKAN 1: Hapus 'storage/'. Gunakan langsung $product->image_path --}}
                    {{-- Pastikan gambar ada di folder: public/assets/img/products/ --}}
                    <img src="{{ asset($product->image_path) }}" class="img-fluid" alt="{{ $product->name }}">
                    
                    <div class="product-badge bg-success">{{ $product->category }}</div>
                  </div>
                  <div class="product-content p-3">
                    <div class="product-category">{{ $product->category }}</div>
                    <h3 class="product-title">{{ $product->name }}</h3>
                    <div class="product-price">
                       {{ $product->price ? 'Rp ' . number_format($product->price, 0, ',', '.') : '' }}
                    </div>
                    
                    {{-- PERBAIKAN 2: Gunakan route dinamis berdasarkan slug --}}
                    <a href="{{ route('product.detail', $product->slug) }}" class="product-detail-btn">Detail</a>
                    
                  </div>
                </div>
              </div>
              @endforeach
              {{-- END LOOPING --}}

            </div>

            <div class="d-flex justify-content-between align-items-center mt-3">
              <div class="services-products-prev btn btn-outline-secondary services-products-nav"><i class="bi bi-chevron-left"></i></div>
              <div class="services-products-pagination"></div>
              <div class="services-products-next btn btn-outline-secondary services-products-nav"><i class="bi bi-chevron-right"></i></div>
            </div>

          </div>
          @else
            {{-- Jika Produk Kosong --}}
            <div class="text-center py-5">
                <h4>Belum ada produk di kategori ini.</h4>
            </div>
          @endif

        </div>
      </div>

      {{-- Script Inisialisasi Swiper --}}
      <script>
        document.addEventListener('DOMContentLoaded', function () {
          if (typeof Swiper === 'undefined') return;
          try {
            const cfgEl = document.querySelector('.services-products-config');
            const cfg = cfgEl ? JSON.parse(cfgEl.textContent) : { loop: true, slidesPerView: 1 };
            
            if(document.querySelector('.services-products-next')) {
                cfg.navigation = { nextEl: '.services-products-next', prevEl: '.services-products-prev' };
                cfg.pagination = { el: '.services-products-pagination', clickable: true };
                new Swiper('.services-products-swiper', cfg);
            }
          } catch (e) { console.error('Swiper init error', e); }
        });
      </script>

    </section>

  </main>
  {{-- END MAIN --}}

  {{-- footer --}}
  @include('layouts.footer')

</body>