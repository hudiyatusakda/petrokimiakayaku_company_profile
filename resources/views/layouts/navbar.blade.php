<nav id="navmenu" class="navmenu">
  <ul>

    <!-- BERANDA + MEGA DROPDOWN -->
   <li class="mega-dropdown">
  <a href="{{ route('home') }}" class="nav-link">Beranda</a> <div class="mega-menu">
    <div class="mega-container">

      <div class="mega-col">
        <h4>Tentang Perusahaan</h4>
        <ul>
          <li><a href="#">Riwayat Singkat</a></li>
          <li><a href="#">Budaya Perusahaan</a></li>
          <li><a href="#">Profil Bisnis</a></li>
          <li><a href="#">Pengembangan Bisnis</a></li>
        </ul>
      </div>

      <div class="mega-col">
        <h4>Layanan Kami</h4>
        <ul>
          <li><a href="#">Konsultasi</a></li>
          <li><a href="#">Manajemen Aset</a></li>
          <li><a href="#">Karir</a></li>
        </ul>
      </div>

    </div>
  </div>
</li>
    <!-- MENU LAIN -->
    <li><a href="{{ route('about') }}">Profil Perusahaan</a></li>
    <li><a href="{{ route('products') }}">Produk</a></li>
    <li><a href="{{ route('services') }}">Media</a></li>

    <li class="nav-search">
      <a href="#" class="nav-search-link open-search-popup">
        <i class="bi bi-search"></i>
      </a>
    </li>

  </ul>

  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>
