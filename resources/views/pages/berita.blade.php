@include ('layouts.header')

<body class="-page">
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('assets/img/logo.png') }}" alt="Petrokayaku">
      </a>
      @include ('layouts.navbar')
    </div>
  </header>

  <main class="main">
    {{-- Ubah ID section agar unik --}}
    <section class="activity-archive-section" id="berita-archive">
        <div class="container">

            <div class="section-header text-center mb-5">
                <h2>Berita Terkini</h2>
                <p>Update informasi terbaru seputar teknologi dan pertanian.</p>
            </div>

            {{-- Filter Bar Tetap Sama --}}
            <div class="activity-filter-bar" data-aos="fade-down">
                {{-- Form pencarian --}}
                <div class="activity-search-box w-100">
                    <form action="{{ route('berita.index') }}" method="GET">
                        <input type="text" name="q" placeholder="Cari berita...">
                        <button type="submit" class="search-btn-icon">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>
                </div>
            </div>

            {{-- Grid Berita --}}
            <div class="row ghost-grid-wrapper g-3">
                @foreach($berita_list as $item)
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    {{-- Arahkan ke Route Detail Berita --}}
                    <a href="{{ route('berita.show', $item->slug) }}" class="activity-ghost-card">
                        <div class="ghost-img-container">
                            {{-- Gambar Dinamis --}}
                            <img src="{{ asset('storage/'.$item->image) }}" alt="{{ $item->title }}" class="ghost-img">
                        </div>
                        
                        <span class="ghost-date">
                            {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}
                        </span>
                        
                        <h5 class="ghost-title">{{ Str::limit($item->title, 50) }}</h5>
                    </a>
                </div>
                @endforeach
            </div>

            <div class="mt-4 d-flex justify-content-center">
                {{ $berita_list->links() }}
            </div>
        </div>
    </section>
  </main>
  @include('layouts.footer')