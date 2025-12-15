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

    <main class="main">
        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url({{ asset('assets/img/page-title-bg.webp') }});">
            <div class="container position-relative">
                <h1>Hasil Pencarian</h1>
                <p>Anda mencari: <strong>{{ $query ?? '' }}</strong></p>

                <div class="search-page-box">
                    <form method="GET" action="{{ route('search') }}" class="d-flex w-100">
                        <input name="q" type="text" class="search-page-input" placeholder="Pencarian"
                            value="{{ $query ?? '' }}">
                        <button type="submit" class="search-page-btn">Pencarian <i class="bi bi-search"></i></button>
                    </form>
                </div>

            </div>
        </div>

        <!-- Search Results Section -->
        <section id="search-results" class="search-results section">
            <div class="container">
                <div class="row gy-4">
                    @if(empty($query))
                        <div class="col-lg-12">
                            <div class="alert alert-warning">
                                Silakan masukkan kata kunci pencarian di kotak pencarian.
                            </div>
                        </div>
                    @else
                        <div class="col-lg-12">
                            <div class="alert alert-info">
                                Menampilkan hasil pencarian untuk: <strong>"{{ $query }}"</strong>
                            </div>
                        </div>

                        @if(!empty($results) && count($results) > 0)
                            @foreach($results as $item)
                                <div class="col-lg-4 col-md-6">
                                    <div class="product-item position-relative h-100">
                                        <div class="product-img position-relative overflow-hidden">
                                            <img src="{{ asset($item['image']) }}" class="img-fluid" alt="{{ $item['title'] }}">
                                        </div>
                                        <div class="product-content p-3">
                                            <h3 class="product-title">{{ $item['title'] }}</h3>
                                            <div class="product-price">{{ $item['price'] }}</div>
                                            <p class="product-description">{{ $item['description'] }}</p>
                                            <a href="{{ $item['url'] }}" class="btn btn-outline-success btn-sm">Lihat Produk</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-lg-12">
                                <div class="alert alert-danger">
                                    Kata kunci "<strong>{{ $query }}</strong>" tidak ditemukan. Coba kata lain atau periksa
                                    ejaan.
                                </div>
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </section>
    </main>

    @include ('layouts.footer')

</body>

</html>