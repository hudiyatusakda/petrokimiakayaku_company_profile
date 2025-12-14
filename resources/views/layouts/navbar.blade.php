<nav id="navmenu" class="navmenu">
  <ul>
    <li><a href="{{ route('about') }}">Tentang Perusahaan</a></li>
    <li><a href="{{ route('products') }}">Produk</a></li>
    <li><a href="{{ route('services') }}">Media</a></li>

    <li class="nav-search">
      <a href="{{ route('search') }}" class="nav-search-link" aria-label="Buka pencarian">
        <i class="bi bi-search" style="font-size:20px"></i>
      </a>
    </li>
  </ul>

  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>
