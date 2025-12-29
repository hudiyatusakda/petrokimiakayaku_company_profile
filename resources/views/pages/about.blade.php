@include ('layouts.header')

<body class="about-page">

  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('assets/img/logo.png') }}" alt="Petrokayaku">
      </a>

      @include ('layouts.navbar')
      </div>
  </header>

  <main class="main">

    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">

        <ol class="carousel-indicators">
          @foreach($slides as $key => $slide)
            <li 
                data-bs-target="#hero-carousel" 
                data-bs-slide-to="{{ $key }}" 
                class="{{ $key == 0 ? 'active' : '' }}">
            </li>
          @endforeach
        </ol>

        <div class="carousel-inner">
          
          @forelse($slides as $key => $slide)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
              <img src="{{ asset('storage/' . $slide->image_path) }}" alt="{{ $slide->title }}">
              
              <div class="carousel-container">
                <h2>{{ $slide->title }}</h2>
                <p>{{ $slide->description }}</p>
              </div>
            </div>
          @empty
             <div class="carousel-item active">
               <img src="{{ asset('assets/img/kayaku-1.jpeg') }}" alt="Default">
               <div class="carousel-container">
                 <h2>About Us</h2>
                 <p>Informasi mengenai perusahaan kami.</p>
               </div>
            </div>
          @endforelse

        </div>

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>

    </section>
    
    <section id="company-menu" class="section">
      <div class="container">
        <div class="row gy-4">
          @foreach($menus as $menu)
          <div class="col-lg-4 col-md-6">
            <a href="{{ url($menu->url) }}" class="company-link">
              <div class="company-card">
                <div class="company-image">
                  <img src="{{ asset('storage/' . $menu->image_path) }}" alt="{{ $menu->title }}">
                </div>
                <div class="company-body">
                  <h5>{{ $menu->title }}</h5>
                </div>
              </div>
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </section>
  </main>

  @include ('layouts.footer')