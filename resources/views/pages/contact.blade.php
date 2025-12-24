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

  </div>
  </header>
  <main class="main">

    <section class="contact-section" id="kontak">
        <div class="container contact-container">
            
            <div class="text-center mb-5" data-aos="fade-up">
                <h6 class="text-warning fw-bold text-uppercase ls-2">Hubungi Kami</h6>
                <h2 class="display-5 fw-bold text-success">Tetap Terhubung Dengan Kami</h2>
            </div>

            <div class="row align-items-center">
                
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="contact-form-wrapper">
                        <h3 class="contact-form-title">Kirim Pesan</h3>
                        
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6 contact-input-group">
                                    <input type="text" class="contact-input-field" placeholder="Nama Lengkap" required>
                                </div>
                                <div class="col-md-6 contact-input-group">
                                    <input type="email" class="contact-input-field" placeholder="Alamat Email" required>
                                </div>
                                <div class="col-12 contact-input-group">
                                    <input type="text" class="contact-input-field" placeholder="Subjek Pesan">
                                </div>
                                <div class="col-12 contact-input-group">
                                    <textarea class="contact-input-field" placeholder="Tulis pesan Anda di sini..." required></textarea>
                                </div>
                                <div class="col-12 mt-3">
                                    <button type="submit" class="btn btn-contact-submit">
                                        Kirim Sekarang <i class="bi bi-send-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="col-lg-5 offset-lg-1" data-aos="fade-left" data-aos-delay="200">
                    <div class="contact-info-wrapper">
                        
                        <a href="https://maps.google.com/?q=Gresik" target="_blank" class="contact-info-item">
                            <div class="contact-icon-box">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="contact-info-text">
                                <h5>Lokasi Kantor Pusat</h5>
                                <p>Jl. Jend. Ahmad Yani, Gresik,<br> Jawa Timur 61119, Indonesia</p>
                            </div>
                        </a>

                        <a href="tel:+62313981815" class="contact-info-item">
                            <div class="contact-icon-box">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="contact-info-text">
                                <h5>Telepon & Fax</h5>
                                <p>Telp: (031) 3981815, 3982308<br>Fax: (031) 3981830</p>
                            </div>
                        </a>

                        <a href="mailto:kontak@petrokayaku.com" class="contact-info-item">
                            <div class="contact-icon-box">
                                <i class="bi bi-envelope-open-fill"></i>
                            </div>
                            <div class="contact-info-text">
                                <h5>Email Resmi</h5>
                                <p>kontak@petrokayaku.com<br>marketing@petrokayaku.com</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

  </main>

  @include('layouts.footer')