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
            </div>

            <div class="row ghost-grid-wrapper g-3">
                @foreach($video_list as $vid)
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <a href="{{ route('video.show', $vid->slug) }}" class="activity-ghost-card video-card">
                        
                        <div class="ghost-img-container position-relative">
                            {{-- Thumbnail Video --}}
                            <img src="https://img.youtube.com/vi/{{ $vid->youtube_id }}/mqdefault.jpg" alt="{{ $vid->title }}" class="ghost-img">
                            
                            {{-- Icon Play Overlay (Tambahan CSS mungkin diperlukan agar posisi di tengah) --}}
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <i class="bi bi-play-circle-fill text-white" style="font-size: 3rem; opacity: 0.8;"></i>
                            </div>
                        </div>
                        
                        <div class="p-3">
                            <span class="ghost-date text-muted small">
                                <i class="bi bi-clock"></i> {{ $vid->duration ?? '00:00' }}
                            </span>
                            <h5 class="ghost-title mt-2">{{ Str::limit($vid->title, 50) }}</h5>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            
            <div class="mt-4 d-flex justify-content-center">
                {{ $video_list->links() }}
            </div>
        </div>
    </section>
  </main>
  @include('layouts.footer')