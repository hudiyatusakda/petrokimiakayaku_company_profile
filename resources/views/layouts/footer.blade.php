<!-- footer -->
<footer id="footer" class="footer dark-background">
  <div class="footer-top">
    <div class="container">
      <div class="row gy-4">

        <!-- LOGO -->
        <div class="col-lg-3 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/logo_bawah.png') }}"
                 alt="Petrokimia Kayaku Logo"
                 class="img-fluid footer-logo">
          </a>
        </div>

        <!-- KANTOR PUSAT -->
        <div class="col-lg-3 col-md-6 footer-contact">
          <h4>KANTOR PUSAT</h4>
          <p>
            Jl. Jendral Ahmad Yani<br>
            PO Box 107 Gresik, 61119<br>
            Jawa Timur - Indonesia<br>
            Telp. (+6231) 3981815, 3981831, 3981989<br>
            Fax (+6231) 3981830
          </p>
        </div>

        <!-- KANTOR CABANG -->
        <div class="col-lg-3 col-md-6 footer-contact">
          <h4>KANTOR CABANG</h4>
          <p>
            Jl. Cisanggiri I/16 Blok Q-IV<br>
            Kebayoran Baru<br>
            Jakarta Selatan 12170<br>
            Telp. (+6221) 7205453<br>
            Fax (+6221) 7251244
          </p>
        </div>

        <!-- SOSMED -->
        <div class="col-lg-3 col-md-6 footer-social">
          <h4>FACEBOOK</h4>
          <p>Petani Kayaku</p>

          <h4>INSTAGRAM</h4>
          <p>@infopetrokayaku</p>

          <h4>YOUTUBE</h4>
          <p>infomedia_kayaku</p>
        </div>

      </div>
    </div>
  </div>

  <!-- Language Switcher -->
  <div class="footer-language-bar">
    <div class="container">
      <div class="language-wrapper">
        <span class="label">LANGUAGE:</span>

        <a href="?lang=id" class="lang-item active">
          <img src="{{ asset('assets/img/flags/indonesia.png') }}" alt="Indonesia">
          <span>ID</span>
        </a>

        <a href="?lang=en" class="lang-item">
          <img src="{{ asset('assets/img/flags/english.png') }}" alt="English">
          <span>EN</span>
        </a>
      </div>
    </div>
  </div>
</footer>
<!-- footer -->


<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

<!-- Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

@include('layouts.search-popup')

</body>

</html>