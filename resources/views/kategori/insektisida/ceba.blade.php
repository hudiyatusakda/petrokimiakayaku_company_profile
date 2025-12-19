@include ('layouts.header')

<body class="index-page">

<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Petrokayaku">
        </a>

        {{-- navbar --}}
        @include ('layouts.navbar')
        {{-- navbar --}}

    </div>
</header>

<main class="main">

    <!-- PAGE TITLE -->
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url({{ asset('assets/img/page-title-bg.webp') }}); margin-top:120px;">
        <div class="container position-relative">
            <h1>Our Fresh Products</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('kategori.insektisida') }}">Insektisida</a></li>
                    <li class="current">Ceba</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- END PAGE TITLE -->

    <!-- PRODUCT TITLE -->
    <section class="product-categories section">
        <div class="container">
            <div class="section-title text-center">
                <h2>Ceba</h2>
            </div>
        </div>
    </section>

    <!-- PRODUCT DETAIL -->
    <section id="product-detail" class="section">
        <div class="container">

            <div class="row gy-4 align-items-center">

                <!-- IMAGE -->
                <div class="col-lg-4 text-center">
                    <div class="product-detail-image">
                        <span class="badge bg-success product-badge-detail">Insektisida</span>
                        <img src="{{ asset('assets/img/products/ceba.png') }}"
                             class="img-fluid product-img-hover"
                             alt="Ceba EC">
                    </div>
                </div>

                <!-- INFO -->
                <div class="col-lg-8">
                    <h3 class="fw-bold mb-1">Ceba EC</h3>
                    <p class="text-muted">(Bahan Aktif : Carbaryl)</p>

                    <p class="mt-3">
                        <strong>Ceba EC</strong> adalah insektisida racun kontak dan lambung
                        yang efektif mengendalikan berbagai jenis hama perusak tanaman
                        seperti ulat, kumbang, dan serangga pengunyah.
                    </p>

                    <div class="row mt-4">

                        <div class="col-md-6">
                            <h6 class="fw-bold text-success">
                                <i class="bi bi-check-circle-fill"></i> Manfaat Produk
                            </h6>
                            <ul class="list-unstyled product-list">
                                <li>Mengendalikan ulat dan serangga pengunyah</li>
                                <li>Melindungi tanaman dari kerusakan</li>
                                <li>Mendukung hasil panen maksimal</li>
                            </ul>
                        </div>

                        <div class="col-md-6">
                            <h6 class="fw-bold text-success">
                                <i class="bi bi-star-fill"></i> Keunggulan Produk
                            </h6>
                            <ul class="list-unstyled product-list">
                                <li>Daya kerja cepat</li>
                                <li>Spektrum pengendalian luas</li>
                                <li>Mudah diaplikasikan</li>
                                <li>Efisien dan ekonomis</li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- END PRODUCT DETAIL -->

    <!-- RELATED PRODUCTS -->
    <section id="related-products" class="section bg-light">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="fw-bold mb-0">Produk Serupa</h4>
                <div>
                    <button class="btn btn-outline-success btn-sm related-prev">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <button class="btn btn-outline-success btn-sm related-next">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>
            </div>

            <div class="swiper related-products-swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <a href="{{ route('insektisida.bassa') }}" class="related-card">
                            <img src="{{ asset('assets/img/products/bassa.png') }}" alt="Bassa">
                            <span>Bassa</span>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="related-card">
                            <img src="{{ asset('assets/img/products/gempur.png') }}" alt="Gempur">
                            <span>Gempur</span>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="related-card">
                            <img src="{{ asset('assets/img/products/ratkum.png') }}" alt="Ratkum">
                            <span>Ratkum</span>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- END RELATED PRODUCTS -->

    <!-- NEWSLETTER -->
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

{{-- Swiper --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    new Swiper(".related-products-swiper", {
        loop: true,
        spaceBetween: 20,
        grabCursor: true,
        navigation: {
            nextEl: ".related-next",
            prevEl: ".related-prev",
        },
        breakpoints: {
            0: { slidesPerView: 2 },
            768: { slidesPerView: 3 },
            992: { slidesPerView: 5 }
        }
    });
});
</script>

@include('layouts.footer')
