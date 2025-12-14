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
                    @if(!empty($query))
                        <div class="col-lg-12">
                            <div class="alert alert-info">
                                Menampilkan hasil pencarian untuk: <strong>"{{ $query }}"</strong>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <p class="text-muted">Fitur pencarian masih kosong. Anda dapat mengembangkan pencarian
                                berdasarkan produk atau artikel.</p>
                        </div>
                    @else
                        <div class="col-lg-12">
                            <div class="alert alert-warning">
                                Silakan masukkan kata kunci pencarian di kotak pencarian.
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
    </main>

    @include ('layouts.footer')

</body>

</html>