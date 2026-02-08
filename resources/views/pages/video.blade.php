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
    <section class="activity-archive-section" id="video-archive">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2>Galeri Video</h2>
                <p>Tonton video terbaru Petrokimia Kayaku</p>
            </div>

            <div class="row ghost-grid-wrapper g-3">
                @forelse($videos as $vid)
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <a href="{{ route('video.detail', $vid->slug) }}" class="activity-ghost-card video-card">
                        
                        <div class="ghost-img-container position-relative">
                            {{-- Thumbnail Video YouTube Otomatis --}}
                            <img src="https://img.youtube.com/vi/{{ $vid->youtube_id }}/mqdefault.jpg" alt="{{ $vid->title }}" class="ghost-img">
                            
                            {{-- Icon Play Overlay --}}
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <i class="bi bi-play-circle-fill text-white" style="font-size: 3rem; opacity: 0.8;"></i>
                            </div>
                        </div>
                        
                        <div class="p-3">
                            <span class="ghost-date text-muted small">
                                <i class="bi bi-clock"></i> {{ $vid->duration ?? '--:--' }}
                            </span>
                            <h5 class="ghost-title mt-2">{{ Str::limit($vid->title, 50) }}</h5>
                        </div>
                    </a>
                </div>
                @empty
                <div class="col-12">
                    <div class="alert alert-info text-center">Belum ada video. Silakan kembali nanti.</div>
                </div>
                @endforelse
            </div>
            
            <div class="mt-4 d-flex justify-content-center">
                {{-- Pagination jika ada --}}
                @if(method_exists($videos, 'links'))
                    {{ $videos->links() }}
                @endif
            </div>
        </div>
    </section>
  </main>
  @include('layouts.footer')