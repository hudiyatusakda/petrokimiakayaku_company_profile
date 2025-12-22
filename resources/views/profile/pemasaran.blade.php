@include ('layouts.header')



<body class="about-page">

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

  <section id="hero" class="hero section dark-background">

    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">

      <div class="carousel-item active">
        <img src="assets/img/kayaku-1.jpeg" alt="">
        <div class="carousel-container">
          <h2>Pestisida menjadi hak angket tanaman seluruh Indonesia</h2>
          <p>Kami memastikan distribusi dan produksi pestisida indonesia terjaga dan
            mampu menumbuhkan semnagat petani dan kesehatan tanaman Indonesia.</p>
        </div>
      </div><!-- End Carousel Item -->

      <div class="carousel-item">
        <img src="assets/img/maxresdefault.jpg" alt="">
        <div class="carousel-container">
          <h2>Organic vegetables is good for health</h2>
          <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
            placeat facere possimus.</p>
        </div>
      </div><!-- End Carousel Item -->

      <div class="carousel-item">
        <img src="assets/img/sdm.jpg" alt="">
        <div class="carousel-container">
          <h2>Providing Fresh Produce Every Single Day</h2>
          <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
            fugit.</p>
        </div>
      </div><!-- End Carousel Item -->

      <div class="carousel-item">
        <img src="assets/img/gambar_pabrik3.jpg" alt="">
        <div class="carousel-container">
          <h2>Farming as a Passione</h2>
          <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia
            non numquam eius.</p>
        </div>
      </div><!-- End Carousel Item -->

      <div class="carousel-item">
        <img src="assets/img/gambar_kebijakan3.jpg" alt="">
        <div class="carousel-container">
          <h2>Good Food For All</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.</p>
        </div>
      </div><!-- End Carousel Item -->

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators"></ol>

    </div>

  </section><!-- /Hero Section -->

  <main class="main">

    <section class="marketing-stats-section" id="pemasaran-statistik">
        <div class="container">
            <div class="marketing-content-wrapper">
                
                <div class="marketing-img-box" data-aos="fade-right">
                    <img src="assets/img/gambar_pabrik3.jpg" alt="Tim Pemasaran Petrokimia Kayaku" class="marketing-main-img">
                    
                    <div class="marketing-stat-overlay">
                        <div class="marketing-stat-box yellow">
                            <span class="stat-number count-up" data-target="107">0</span>
                            <span class="stat-label">Distributor Resmi</span>
                        </div>
                        <div class="marketing-stat-box green">
                            <span class="stat-number count-up" data-target="5000">0</span>
                            <span class="stat-label">Kios Retail</span>
                        </div>
                    </div>
                </div>

                <div class="marketing-text-box" data-aos="fade-left">
                    <!-- <div class="marketing-sub-title">
                        <i class="bi bi-graph-up-arrow"></i> Jangkauan Pasar Luas
                    </div> -->
                    <h2 class="marketing-title">Jaringan Distribusi Hingga Pelosok Negeri & Mancanegara</h2>
                    <p class="marketing-desc">
                        Hingga 47 tahun sejak berdirinya Perusahaan, PT Petrokimia Kayaku terus memperluas jangkauan pasar domestik dan ekspor, didukung oleh tim pemasaran yang solid dan jaringan distribusi yang kuat.
                    </p>

                    <div class="marketing-grid-stats">
                        <div class="grid-stat-item">
                            <div class="grid-stat-icon">
                                <i class="bi bi-person-badge-fill"></i>
                            </div>
                            <div class="grid-stat-content">
                                <h4>
                                    <span class="count-up" data-target="14">0</span>
                                </h4>
                                <p>Area Manager</p>
                            </div>
                        </div>
                        <div class="grid-stat-item">
                            <div class="grid-stat-icon">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <div class="grid-stat-content">
                                <h4><span class="count-up" data-target="21">0</span></h4>
                                <p>Asisten Area Manager</p>
                            </div>
                        </div>
                        <div class="grid-stat-item">
                            <div class="grid-stat-icon">
                                <i class="bi bi-person-lines-fill"></i>
                            </div>
                            <div class="grid-stat-content">
                                <h4><span class="count-up" data-target="189">0</span></h4>
                                <p>Field Assistant</p>
                            </div>
                        </div>
                        <div class="grid-stat-item">
                            <div class="grid-stat-icon">
                                <i class="bi bi-globe-americas"></i>
                            </div>
                            <div class="grid-stat-content">
                                <h4><span class="count-up" data-target="2">0</span>+</h4>
                                <p>Negara Ekspor (Malaysia & Bangladesh)</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="marketing-video-section" id="pemasaran-video">
        
        <div class="video-bg-wrapper">
            <video autoplay muted loop playsinline>
                <source src="assets/video/videoplayback.mp4" type="video/mp4">
                Browser Anda tidak mendukung tag video.
            </video>

            <a href="https://youtu.be/MJ18PSJNPRo" class="video-play-btn glightbox">
                <i class="bi bi-play-fill"></i>
            </a>
        </div>

        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-6 d-none d-lg-block"></div>
                
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="video-content-overlay">
                        <div class="video-desc-box">
                            <h3>Kekuatan Tim Pemasaran</h3>
                            <p>
                                Didukung lebih dari 224 Petugas Pemasaran berpengalaman yang tersebar di tiap propinsi dan kabupaten di hampir seluruh wilayah Republik Indonesia.
                            </p>
                            <p>
                                Masing-masing area dipimpin oleh seorang Area Manager yang kompeten. Jaringan pasar Domestik didukung oleh lebih dari 107 distributor dan lebih dari 5.000 kios, memastikan produk kami mudah dijangkau oleh petani. Adapun pengembangan pasar strategis ditangani langsung oleh kantor pusat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Pilih semua elemen dengan class 'count-up'
            const counters = document.querySelectorAll('.count-up');
            
            // Opsi untuk Intersection Observer (kapan animasi dimulai)
            const options = {
                threshold: 0.5 // Animasi mulai saat 50% elemen terlihat di layar
            };

            // Fungsi Observer
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    // Jika elemen terlihat di layar
                    if (entry.isIntersecting) {
                        const counter = entry.target;
                        const target = +counter.getAttribute('data-target'); // Ambil angka target
                        const duration = 2000; // Durasi animasi (ms) - misal 2 detik
                        const stepTime = Math.abs(Math.floor(duration / target)); // Waktu per langkah

                        let current = 0;
                        const timer = setInterval(() => {
                            current += Math.ceil(target / (duration / 10)); // Logika penambahan
                            
                            if (current >= target) {
                                counter.innerText = target.toLocaleString('id-ID'); // Format angka Indonesia
                                clearInterval(timer); // Hentikan timer jika sudah mencapai target
                            } else {
                                counter.innerText = current.toLocaleString('id-ID'); // Update angka
                            }
                        }, stepTime);

                        // Hentikan observasi setelah animasi berjalan sekali
                        observer.unobserve(counter);
                    }
                });
            }, options);

            // Daftarkan semua counter ke observer
            counters.forEach(counter => {
                observer.observe(counter);
            });
        });
    </script>

  </main>

  @include ('layouts.footer');