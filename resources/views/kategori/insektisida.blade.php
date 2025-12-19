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
            style="background-image: url({{ asset('assets/img/page-title-bg.webp') }}); margin-top:120px;">
            <div class="container position-relative">
                <h1>Our Fresh Products</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('products') }}">Produk</a></li>
                        <li class="current">Insektisida</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->
        <!-- INSECTICIDE INTRO -->
<section id="insektisida-intro" class="section">
  <div class="container">

    <div class="row justify-content-center text-center">
      <div class="col-lg-9" data-aos="fade-up">

        
        <h2 class="insektisida-title">Insektisida</h2>

        <p class="insektisida-desc mt-3">
          <strong>Insektisida</strong> adalah bahan atau senyawa kimia yang digunakan
          untuk mengendalikan, menolak, atau membunuh serangga hama yang dapat
          merusak tanaman pertanian. Penggunaan insektisida yang tepat membantu
          menjaga kualitas tanaman, meningkatkan hasil panen, dan melindungi
          tanaman dari serangan hama secara efektif.
        </p>

      </div>
    </div>

  </div>
</section>
<!-- END INSECTICIDE INTRO -->

        <!-- Services 2 Section (Products for dashboard) -->
    <section id="services-2" class="services-2 section dark-background">
      <div class="container section-title" data-aos="fade-up">
        <h2>Products</h2>
        
      </div>

      <div class="services-carousel-wrap">
        <div class="container">
          <div class="swiper services-products-swiper">
            <script type="application/json" class="services-products-config">
              {"loop":true,"speed":600,"slidesPerView":1,"spaceBetween":20,"breakpoints":{"768":{"slidesPerView":2},"992":{"slidesPerView":3}},"navigation":{"nextEl":".services-products-next","prevEl":".services-products-prev"},"pagination":{"el":".services-products-pagination","clickable":true}}
            </script>

            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="product-item position-relative h-100">
                  <div class="product-img position-relative overflow-hidden">
                    <img src="{{ asset('assets/img/products/admil.png') }}" class="img-fluid" alt="admil">
                    <div class="product-badge bg-success"></div>
                  </div>
                  <div class="product-content p-3">
                    <div class="product-category">Insecticide</div>
                    <h3 class="product-title">Admil</h3>
                    <div class="product-price"></div>
                    <a href="#" class="product-detail-btn">Detail</a>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="product-item position-relative h-100">
                  <div class="product-img position-relative overflow-hidden">
                    <img src="{{ asset('assets/img/products/bassa.png') }}" class="img-fluid" alt="bassa">
                    <div class="product-badge bg-success"></div>
                  </div>
                  <div class="product-content p-3">
                    <div class="product-category">Insecticide</div>
                    <h3 class="product-title">Bassa 500 EC</h3>
                    <div class="product-price"></div>
                    <a href="{{ route('insektisida.bassa') }}" class="product-detail-btn">Detail</a>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="product-item position-relative h-100">
                  <div class="product-img position-relative overflow-hidden">
                    <img src="{{ asset('assets/img/products/ceba.png') }}" class="img-fluid" alt="ceba">
                    <div class="product-badge bg-success"></div>
                  </div>
                  <div class="product-content p-3">
                    <div class="product-category">Insecticide</div>
                    <h3 class="product-title">Ceba 125 EC</h3>
                    <div class="product-price"></div>
                    <a href="#" class="product-detail-btn">Detail</a>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="product-item position-relative h-100">
                  <div class="product-img position-relative overflow-hidden">
                    <img src="{{ asset('assets/img/products/gempur.png') }}" class="img-fluid" alt="gempur">
                    <div class="product-badge bg-success"></div>
                  </div>
                  <div class="product-content p-3">
                    <div class="product-category">Insecticide</div>
                    <h3 class="product-title">Gempur</h3>
                    <div class="product-price"></div>
                    <a href="#" class="product-detail-btn">Detail</a>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="product-item position-relative h-100">
                  <div class="product-img position-relative overflow-hidden">
                    <img src="{{ asset('assets/img/products/ratkum.png') }}" class="img-fluid" alt="ratkum">
                    <div class="product-badge bg-success"></div>
                  </div>
                  <div class="product-content p-3">
                    <div class="product-category">Insecticide</div>
                    <h3 class="product-title">Ratkum</h3>
                    <div class="product-price"></div>
                    <a href="#" class="product-detail-btn">Detail</a>
                  </div>
                </div>
              </div>

            </div>

            <div class="d-flex justify-content-between align-items-center mt-3">
              <div class="services-products-prev btn btn-outline-secondary services-products-nav"><i
                  class="bi bi-chevron-left"></i></div>
              <div class="services-products-pagination"></div>
              <div class="services-products-next btn btn-outline-secondary services-products-nav"><i
                  class="bi bi-chevron-right"></i></div>
            </div>

          </div>
        </div>
      </div>

      <script>
        document.addEventListener('DOMContentLoaded', function () {
          if (typeof Swiper === 'undefined') return;
          try {
            const cfgEl = document.querySelector('.services-products-config');
            const cfg = cfgEl ? JSON.parse(cfgEl.textContent) : { loop: true, slidesPerView: 1 };
            cfg.navigation = cfg.navigation || {};
            cfg.navigation.nextEl = cfg.navigation.nextEl || '.services-products-next';
            cfg.navigation.prevEl = cfg.navigation.prevEl || '.services-products-prev';
            cfg.pagination = cfg.pagination || {};
            cfg.pagination.el = cfg.pagination.el || '.services-products-pagination';
            cfg.pagination.clickable = true;
            new Swiper('.services-products-swiper', cfg);
          } catch (e) { console.error('Swiper init error', e); }
        });
      </script>

    </section><!-- /Services 2 Section -->
       
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

    