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
    <section class="video-detail-section" id="video-watch">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-8">
                    <div class="video-stage-wrapper" data-aos="zoom-in">
                        <div class="video-frame-container ratio ratio-16x9">
                            {{-- Embed Youtube ID Dinamis --}}
                            <iframe src="https://www.youtube.com/embed/{{ $video->youtube_id }}?rel=0" title="{{ $video->title }}" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="video-primary-info" data-aos="fade-up">
                        <h1 class="video-main-title">{{ $video->title }}</h1>
                        
                        <div class="video-actions-bar">
                            <div class="text-muted small">
                                <span class="fw-bold text-dark">{{ $video->views ?? 0 }} x ditonton</span> • {{ \Carbon\Carbon::parse($video->created_at)->format('d M Y') }}
                            </div>
                            
                            {{-- Tombol Share Statis (Fungsionalitas JS nanti) --}}
                            <div class="d-flex gap-2">
                                <button class="action-btn-pill">
                                    <i class="bi bi-share-fill"></i> Bagikan
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="video-desc-box" data-aos="fade-up" data-aos-delay="100">
                        <h5 class="fw-bold mb-3">Deskripsi</h5>
                        <p>{!! nl2br(e($video->description)) !!}</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="playlist-header" data-aos="fade-left">
                        <h5 class="fw-bold m-0">Video Lainnya</h5>
                    </div>

                    <div class="playlist-container">
                        @foreach($video_lainnya as $v)
                        <a href="{{ route('video.show', $v->slug) }}" class="video-ghost-item" data-aos="fade-left">
                            <div class="ghost-thumb-wrap">
                                {{-- Thumbnail Youtube Otomatis --}}
                                <img src="https://img.youtube.com/vi/{{ $v->youtube_id }}/default.jpg" alt="Thumb" class="ghost-thumb-img">
                                <span class="duration-badge">{{ $v->duration ?? 'Play' }}</span>
                            </div>
                            <div class="ghost-info">
                                <h6 class="ghost-video-title">{{ Str::limit($v->title, 40) }}</h6>
                                <span class="ghost-meta">{{ \Carbon\Carbon::parse($v->created_at)->diffForHumans() }}</span>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
  </main>
  @include('layouts.footer')