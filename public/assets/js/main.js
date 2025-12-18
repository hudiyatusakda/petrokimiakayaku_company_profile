/**
 * Template Name: AgriCulture (FIXED)
 */

(function () {
  "use strict";

  /* ===============================
   * SCROLL HEADER
   * =============================== */
  function toggleScrolled() {
    const body = document.body;
    const header = document.querySelector('#header');
    if (!header) return;

    if (
      !header.classList.contains('scroll-up-sticky') &&
      !header.classList.contains('sticky-top') &&
      !header.classList.contains('fixed-top')
    ) return;

    window.scrollY > 100
      ? body.classList.add('scrolled')
      : body.classList.remove('scrolled');
  }

  document.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

  /* ===============================
   * SCROLL UP STICKY (SAFE)
   * =============================== */
  let lastScrollTop = 0;
  window.addEventListener('scroll', function () {
    const header = document.querySelector('#header');
    if (!header || !header.classList.contains('scroll-up-sticky')) return;

    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop && scrollTop > header.offsetHeight) {
      header.style.position = 'sticky';
      header.style.top = `-${header.offsetHeight + 50}px`;
    } else if (scrollTop > header.offsetHeight) {
      header.style.position = 'sticky';
      header.style.top = '0';
    } else {
      header.style.removeProperty('top');
      header.style.removeProperty('position');
    }

    lastScrollTop = scrollTop;
  });

  /* ===============================
   * MOBILE NAV
   * =============================== */
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function mobileNavToggle() {
    document.body.classList.toggle('mobile-nav-active');
    mobileNavToggleBtn.classList.toggle('bi-list');
    mobileNavToggleBtn.classList.toggle('bi-x');
  }

  if (mobileNavToggleBtn) {
    mobileNavToggleBtn.addEventListener('click', mobileNavToggle);
  }

  document.querySelectorAll('#navmenu a').forEach(link => {
    link.addEventListener('click', () => {
      if (document.body.classList.contains('mobile-nav-active')) {
        mobileNavToggle();
      }
    });
  });

  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(btn => {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
    });
  });

  /* ===============================
   * PRELOADER (FIX)
   * =============================== */
  window.addEventListener('load', () => {
    const preloader = document.querySelector('#preloader');
    if (preloader) preloader.remove();
  });

  /* ===============================
   * SCROLL TOP
   * =============================== */
  const scrollTopBtn = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (!scrollTopBtn) return;
    window.scrollY > 100
      ? scrollTopBtn.classList.add('active')
      : scrollTopBtn.classList.remove('active');
  }

  if (scrollTopBtn) {
    scrollTopBtn.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);

  /* ===============================
   * AOS
   * =============================== */
  window.addEventListener('load', () => {
    if (typeof AOS !== 'undefined') {
      AOS.init({
        duration: 600,
        easing: 'ease-in-out',
        once: true
      });
    }
  });

  /* ===============================
   * SWIPER
   * =============================== */
  window.addEventListener('load', () => {
    if (typeof Swiper === 'undefined') return;

    document.querySelectorAll(".init-swiper").forEach(swiperElement => {
      const configEl = swiperElement.querySelector(".swiper-config");
      if (!configEl) return;

      const config = JSON.parse(configEl.innerHTML.trim());
      new Swiper(swiperElement, config);
    });
  });

  /* ===============================
   * SEARCH POPUP
   * =============================== */
  const popup = document.getElementById('search-popup');

  function openSearchPopup() {
    if (!popup) return;
    popup.setAttribute('aria-hidden', 'false');
    const input = document.getElementById('search-popup-input');
    if (input) setTimeout(() => input.focus(), 100);
  }

  function closeSearchPopup() {
    if (!popup) return;
    popup.setAttribute('aria-hidden', 'true');
  }

  document.addEventListener('click', (e) => {
    if (e.target.closest('.open-search-popup')) {
      e.preventDefault();
      openSearchPopup();
    }

    if (e.target.matches('.search-popup-close, .search-popup-backdrop')) {
      closeSearchPopup();
    }
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeSearchPopup();
  });

  const searchForm = document.getElementById('search-popup-form');
  if (searchForm) {
    searchForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const q = document.getElementById('search-popup-input').value || '';
      window.location.href = `/search?q=${encodeURIComponent(q)}`;
    });
  }

})();
