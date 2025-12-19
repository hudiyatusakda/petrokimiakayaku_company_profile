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

  <main class="main">

    <!-- Page Title -->
    <!-- <div class="page-title dark-background" data-aos="fade"
      style="background-image: url(assets/img/page-title-bg.webp);">
      <div class="container position-relative">
        <h1>About</h1>
        <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam
          molestias.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">About</li>
          </ol>
        </nav>
      </div>
    </div> -->
    <!-- End Page Title -->

    <!-- About 3 Section -->
    <section id="about-3" class="about-3 section py-5" style="margin-top: 70px;"> 
      <div class="container">
        <div class="row gy-5 align-items-center">
          
          <div class="col-lg-6 position-relative" data-aos="zoom-out">
            <div class="image-stack position-relative">
              <img src="assets/img/maxresdefault.jpg" alt="Farmer" class="img-fluid rounded-3 main-img">
              
              <div class="experience-badge text-center">
                <div class="badge-icon">
                  <i class="bi bi-patch-check-fill"></i>
                </div>
                <h4 class="fw-bold mb-0" style="color: white;">5 Years</h4>
                <p class="small mb-0">Working Experience</p>
              </div>

              <div class="video-box-mini position-absolute">
                <img src="assets/img/sdm.jpg" alt="Video" class="img-fluid rounded-3">
                <a href="https://youtu.be/0TVbMQDQZMw" class="glightbox play-btn">
                  <i class="bi bi-play-fill"></i>
                </a>
              </div>
              
              <div class="frame-decoration"></div>
            </div>
          </div>

          <div class="col-lg-6 ps-lg-5" data-aos="fade-up" data-aos-delay="100">
            <!-- <span class="badge bg-light text-success border px-3 py-2 mb-3 rounded-pill">
              <i class="bi bi-leaf-fill me-1"></i> About Our Industry
            </span> -->
            <h2 class="display-5 fw-bold mb-4">Towards the Most Trusted Company</h2>
            <p class="text-muted mb-5">
              Petrokimia Kayaku bergerak dalam bidang pestisida dan memastikan pertanian Indonesia sehat dan menopang ekonomi nasional.
            </p>

            <div class="d-flex mb-4">
              <div class="feature-icon me-3">
                <div class="icon-circle bg-success bg-opacity-10 text-success rounded-circle">
                  <i class="bi bi-shield-check fs-3"></i> </div>
              </div>
              <div>
                <h5 class="fw-bold">100% Kualitas Produk</h5>
                <p class="text-muted small">Menyediakan produk premium dengan kualitas terbaik tanpa kompromi, memastikan kepuasan pelanggan.</p>
              </div>
            </div>

            <hr class="my-4 opacity-50">

            <div class="d-flex mb-5">
              <div class="feature-icon me-3">
                <div class="icon-circle bg-success bg-opacity-10 text-success rounded-circle">
                  <i class="bi bi-lightbulb fs-3"></i>
                </div>
              </div>
              <div>
                <h5 class="fw-bold">Solusi Industri Pertanian Indonesia</h5>
                <p class="text-muted small">Menyediakan solusi industri pertanian yang berkelanjutan dan inovatif untuk meningkatkan produktivitas.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /About 3 Section -->

    <!-- Farm Promise Section -->
    <section id="company-values" class="company-values section py-5">
      <div class="container">
        <div class="row gy-5">
          
          <div class="col-lg-6 position-relative" data-aos="fade-right">
            <div class="collage-stack position-relative h-100">
              <div class="frame-decoration-back"></div>
              
              <img src="assets/img/kayaku-1.jpeg" alt="Kegiatan Operasional" class="img-fluid rounded-3 img-main shadow">
              
              <img src="assets/img/gambar_pabrik3.jpg" alt="Kerjasama Tim" class="img-fluid rounded-3 img-overlay-1 shadow border border-4 border-white">

              <img src="assets/img/gambar_kebijakan3.jpg" alt="Inovasi & Mutu" class="img-fluid rounded-3 img-overlay-2 shadow border border-4 border-white">
            </div>
          </div>

          <div class="col-lg-6 ps-lg-5" data-aos="fade-left">
            
            <!-- <span class="badge bg-light text-success border px-3 py-2 mb-3 rounded-pill">
              <i class="bi bi-building-check me-1"></i> Profil Perusahaan
            </span> -->
            
            <div class="mb-4">
              <h3 class="fw-bold text-dark">Visi & Misi Kami</h3>
              <div class="p-3 bg-light border-start border-4 border-success rounded-end mb-3">
                <p class="fst-italic mb-0 text-dark">
                  "Menjadi penyedia pestisida dan sarana produksi lain dalam industri pertanian yang paling dipercaya."
                </p>
              </div>
              <p class="text-muted small">
                Memuliakan dan meningkatkan kesejahteraan para pelaku industri pertanian dengan menyediakan produk bermutu tinggi, peduli lingkungan, serta mengutamakan K3.
              </p>
            </div>

            <h5 class="fw-bold mb-3">Nilai Dasar Perusahaan</h5>
            <div class="row g-3 mb-4">
              
              <div class="col-md-6">
                <div class="d-flex align-items-center">
                  <div class="icon-circle-small bg-success bg-opacity-10 text-success rounded-circle me-2">
                    <i class="bi bi-person-badge"></i>
                  </div>
                  <div>
                    <strong class="d-block text-dark">Integritas</strong>
                    <span class="text-muted small d-block lh-sm" style="font-size: 0.75rem;">Kejujuran & Kode Etik</span>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="d-flex align-items-center">
                  <div class="icon-circle-small bg-success bg-opacity-10 text-success rounded-circle me-2">
                    <i class="bi bi-lightbulb"></i>
                  </div>
                  <div>
                    <strong class="d-block text-dark">Inovasi</strong>
                    <span class="text-muted small d-block lh-sm" style="font-size: 0.75rem;">Ide Kreatif Baru</span>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="d-flex align-items-center">
                  <div class="icon-circle-small bg-success bg-opacity-10 text-success rounded-circle me-2">
                    <i class="bi bi-people"></i>
                  </div>
                  <div>
                    <strong class="d-block text-dark">Kerjasama Tim</strong>
                    <span class="text-muted small d-block lh-sm" style="font-size: 0.75rem;">Saling Percaya</span>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="d-flex align-items-center">
                  <div class="icon-circle-small bg-success bg-opacity-10 text-success rounded-circle me-2">
                    <i class="bi bi-eye"></i>
                  </div>
                  <div>
                    <strong class="d-block text-dark">Transparansi</strong>
                    <span class="text-muted small d-block lh-sm" style="font-size: 0.75rem;">Keterbukaan Adil</span>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="d-flex align-items-center">
                  <div class="icon-circle-small bg-success bg-opacity-10 text-success rounded-circle me-2">
                    <i class="bi bi-award"></i>
                  </div>
                  <div>
                    <strong class="d-block text-dark">Profesional</strong>
                    <span class="text-muted small d-block lh-sm" style="font-size: 0.75rem;">Mutu Unggul</span>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="d-flex align-items-center">
                  <div class="icon-circle-small bg-success bg-opacity-10 text-success rounded-circle me-2">
                    <i class="bi bi-shield-check"></i>
                  </div>
                  <div>
                    <strong class="d-block text-dark">Safety</strong>
                    <span class="text-muted small d-block lh-sm" style="font-size: 0.75rem;">K3 & Lingkungan</span>
                  </div>
                </div>
              </div>

            </div>

            <div class="bg-success text-white p-4 rounded-3 d-flex align-items-center gap-3 shadow-sm">
              <i class="bi bi-people-fill fs-1"></i>
              <div>
                <h5 class="fw-bold mb-1" style="color: white">Sumber Daya Manusia</h5>
                <p class="mb-0 small opacity-75">
                  Didukung oleh <strong>142 pegawai tetap</strong> dan tenaga pemasaran profesional di seluruh Indonesia.
                </p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section id="shareholders" class="shareholders-section position-relative py-5">
      <div class="bg-overlay"></div>

      <div class="container position-relative z-2">
        <div class="row align-items-center justify-content-between">
          
          <div class="col-lg-5 mb-5 mb-lg-0 text-white" data-aos="fade-right">
            <h5 class="text-warning fw-bold text-uppercase mb-2">Struktur Perusahaan</h5>
            <h2 class="display-4 fw-bold mb-4" style="color: white">Komposisi Pemegang Saham</h2>
            <p class="lead opacity-75 mb-4">
              Sinergi strategis antara kekuatan lokal dan mitra global untuk memajukan industri pertanian Indonesia.
            </p>
            
            <div class="shareholder-legend mt-4">
              <div class="legend-item d-flex align-items-center mb-3 p-3 rounded-3 bg-white bg-opacity-10 backdrop-blur">
                <div class="color-box rounded-circle me-3" style="background-color: #ffc107; width: 20px; height: 20px;"></div>
                <div>
                  <h5 class="mb-0 fw-bold" style="color: white">PT Petrokimia Gresik</h5>
                  <small class="text-warning">60% Kepemilikan</small>
                </div>
              </div>

              <div class="legend-item d-flex align-items-center mb-3 p-3 rounded-3 bg-white bg-opacity-10 backdrop-blur">
                <div class="color-box rounded-circle me-3" style="background-color: #ffffff; width: 20px; height: 20px;"></div>
                <div>
                  <h5 class="mb-0 fw-bold" style="color: white">Nippon Kayaku Co., Ltd.</h5>
                  <small class="text-white-50">20% Kepemilikan</small>
                </div>
              </div>

              <div class="legend-item d-flex align-items-center p-3 rounded-3 bg-white bg-opacity-10 backdrop-blur">
                <div class="color-box rounded-circle me-3" style="background-color: #198754; width: 20px; height: 20px;"></div>
                <div>
                  <h5 class="mb-0 fw-bold" style="color: white">Mitsubishi Corp.</h5>
                  <small class="text-success-light" style="color: #a3cfbb">20% Kepemilikan</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="zoom-in">
            <div class="chart-card text-center position-relative">
              
              <div class="floating-badge bg-warning text-dark fw-bold px-4 py-2 rounded-pill shadow">
                <i class="bi bi-pie-chart-fill me-2"></i> Total 100%
              </div>

              <div class="chart-container position-relative">
                <canvas id="shareholderChart"></canvas>
                <div class="center-text">
                  <span class="d-block text-white opacity-50 small">Saham</span>
                  <strong class="text-white fs-4">Equity</strong>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>

    <section id="policy-section" class="policy-section py-5">
      <div class="container">
        
        <div class="row g-4 align-items-stretch">
          
          <div class="col-lg-6" data-aos="fade-right">
            <div class="policy-card position-relative h-100 rounded-4 overflow-hidden shadow-lg">
              
              <div class="bg-image" style="background-image: url('assets/img/sdm.jpg');"></div>
              
              <div class="bg-overlay"></div>
              
              <div class="content position-relative z-2 p-5 text-white h-100 d-flex flex-column justify-content-center">
                <div class="icon-wrapper mb-4 text-warning">
                  <i class="bi bi-patch-check-fill fs-1"></i>
                </div>
                <h3 class="fw-bold text-uppercase mb-4" style="color: white">Kebijakan Mutu & Lingkungan</h3>
                
                <div class="policy-text">
                  <p class="mb-4 opacity-75">
                    PT Petrokimia Kayaku bertekat menjadi produsen Pestisida dan sarana produksi lain dalam industri pertanian yang paling dipercaya, dengan kinerja unggul dan berkelanjutan melalui penerapan Sistem Manajemen Mutu, Lingkungan dan K3.
                  </p>
                  <div class="d-flex flex-wrap gap-2 mt-3">
                    <span class="iso-badge">ISO 9001:2015</span>
                    <span class="iso-badge">ISO 14001:2015</span>
                    <span class="iso-badge">ISO 45001:2018</span>
                    <span class="iso-badge">SMK3 PP 50/2012</span>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
            <div class="policy-card position-relative h-100 rounded-4 overflow-hidden shadow-lg">
              
              <div class="bg-image" style="background-image: url('assets/img/gambar_pabrik3.jpg');"></div>
              
              <div class="bg-overlay"></div>
              
              <div class="content position-relative z-2 p-5 text-white h-100 d-flex flex-column justify-content-center">
                <div class="icon-wrapper mb-4 text-warning">
                  <i class="bi bi-shield-lock-fill fs-1"></i>
                </div>
                <h3 class="fw-bold text-uppercase mb-4" style="color: #ffffff">Kebijakan Manajemen Risiko</h3>
                
                <div class="policy-text">
                  <p class="mb-0 opacity-75">
                    Manajemen dan seluruh karyawan PT. Petrokimia Kayaku berkomitmen menjadikan risiko sebagai bagian tak terpisahkan dari kehidupan perusahaan yang dikelola untuk memaksimalkan nilai dan melindungi kepentingan stakeholders, bukan hanya mencegah kerugian tetapi juga sebagai sumber keunggulan dalam persaingan.
                  </p>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="meaning-section py-5">
        <div class="container">
            
            <div class="text-center mb-5" data-aos="fade-up">
                <h6 class="text-success fw-bold text-uppercase ls-2">Filosofi Kami</h6>
                <h2 class="display-5 fw-bold">Makna Logo Perusahaan</h2>
                <p class="text-muted">Simbol identitas yang mencerminkan visi dan nilai luhur Petrokimia Kayaku.</p>
            </div>

            <div class="row align-items-center">
                
                <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
                    <div class="meaning-list">
                        
                        <div class="meaning-item" onmouseenter="showSpot('erlenmeyer')" onmouseleave="hideSpot('erlenmeyer')">
                            <div class="item-title">
                                Tabung Erlenmeyer 
                                <i class="bi bi-arrow-right"></i>
                            </div>
                            <div class="item-desc">
                                Gelas kaca yang banyak dipakai dalam reaksi kimia, melambangkan identitas industri kimia yang kuat.
                            </div>
                        </div>

                        <div class="meaning-item" onmouseenter="showSpot('hexagon')" onmouseleave="hideSpot('hexagon')">
                            <div class="item-title">
                                Simbol Siklo-Heksan
                                <i class="bi bi-arrow-right"></i>
                            </div>
                            <div class="item-desc">
                                Rumus bangun (segi enam) menunjukkan bahan aktif senyawa organik yang efektif pada sasaran dan relatif aman bagi lingkungan karena mudah terurai.
                            </div>
                        </div>

                        <div class="meaning-item" onmouseenter="showSpot('leaf')" onmouseleave="hideSpot('leaf')">
                            <div class="item-title">
                                Dua Helai Daun
                                <i class="bi bi-arrow-right"></i>
                            </div>
                            <div class="item-desc">
                                Menunjukkan hasil pertanian berupa tanaman yang sehat, subur, dan produktif.
                            </div>
                        </div>

                        <div class="meaning-item" onmouseenter="showSpot('green')" onmouseleave="hideSpot('green')">
                            <div class="item-title">
                                Warna Hijau
                                <i class="bi bi-arrow-right"></i>
                            </div>
                            <div class="item-desc">
                                Mengandung harapan agar perusahaan dan stakeholder dapat hidup sejahtera dan tumbuh bersama.
                            </div>
                        </div>

                        <div class="meaning-item" onmouseenter="showSpot('symmetrical')" onmouseleave="hideSpot('symmetrical')">
                            <div class="item-title">
                                Bentuk Yang Simetris
                                <i class="bi bi-arrow-right"></i>
                            </div>
                            <div class="item-desc">
                                Bentuk keseluruhan yang seimbang mengandung anjuran perlunya menjaga keseimbangan alam agar lestari.
                            </div>
                        </div>

                        <div class="meaning-item" onmouseenter="showSpot('all')" onmouseleave="hideSpot('all')">
                            <div class="item-title text-success">
                                Makna Keseluruhan
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <div class="item-desc">
                                Industri agrokimia dengan produk yang efektif dan aman, bertujuan menciptakan kesejahteraan bagi konsumen maupun produsen.
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 order-1 order-lg-2 mb-5 mb-lg-0 text-center" data-aos="zoom-in">
                    <div class="logo-wrapper">
                        
                        <img src="{{ asset('assets/img/petrokayaku.png') }}" alt="Logo Petrokimia Kayaku" class="main-logo">

                        <div id="spot-erlenmeyer" class="hotspot hotspot-erlenmeyer"></div>
                        <div id="spot-hexagon" class="hotspot hotspot-hexagon"></div>
                        <div id="spot-leaf" class="hotspot hotspot-leaf"></div>
                        <div id="spot-green" class="hotspot hotspot-green"></div>
                        <div id="spot-symmetrical" class="hotspot hotspot-symmetrical"></div>
                        <div id="spot-all" class="hotspot hotspot-all"></div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
      document.addEventListener("DOMContentLoaded", function() {
        const ctx = document.getElementById('shareholderChart').getContext('2d');

        // Data Saham
        const data = {
          labels: ['PT Petrokimia Gresik', 'Nippon Kayaku Co., Ltd.', 'Mitsubishi Corp.'],
          datasets: [{
            label: 'Kepemilikan Saham',
            data: [60, 20, 20], // Persentase
            backgroundColor: [
              '#ffc107', // Kuning (Petrokimia - Penekanan Warna Utama)
              '#ffffff', // Putih (Nippon Kayaku)
              '#198754'  // Hijau Bootstrap (Mitsubishi)
            ],
            borderColor: 'transparent', // Hilangkan border default
            hoverOffset: 20, // Efek chart "keluar" saat di hover
            cutout: '70%',   // Membuat lubang tengah (model Doughnut)
            borderRadius: 5  // Membuat ujung chart sedikit membulat
          }]
        };

        // Konfigurasi Chart
        const config = {
          type: 'doughnut', // Menggunakan tipe Donat agar lebih modern
          data: data,
          options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
              legend: {
                display: false // Kita sembunyikan legend bawaan karena sudah buat custom HTML legend di kiri
              },
              tooltip: {
                backgroundColor: 'rgba(0, 0, 0, 0.8)',
                titleFont: { size: 14 },
                bodyFont: { size: 14, weight: 'bold' },
                padding: 12,
                cornerRadius: 8,
                callbacks: {
                  label: function(context) {
                    return context.label + ': ' + context.parsed + '%';
                  }
                }
              }
            },
            animation: {
              animateScale: true,
              animateRotate: true
            }
          }
        };

        // Render Chart
        new Chart(ctx, config);
      });

      function showSpot(id) {
        // Hapus semua class active dulu (reset)
        const allSpots = document.querySelectorAll('.hotspot');
        allSpots.forEach(spot => spot.classList.remove('active'));

        // Aktifkan hotspot yang sesuai
        const target = document.getElementById('spot-' + id);
        if(target) {
            target.classList.add('active');
        }
      }

      function hideSpot(id) {
        const target = document.getElementById('spot-' + id);
        if(target) {
            target.classList.remove('active');
        }
      }
    </script>  

  </main>

  @include ('layouts.footer');