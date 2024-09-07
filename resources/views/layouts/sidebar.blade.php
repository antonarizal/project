<section class="sticky-top fixed-top" id="navbar">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
          <img src="img/icon.png" height="50" alt="" />
          <div class="navbar-light" style="font-size: 0.95rem">
            <div>Sistem Informasi</div>
            <div class="fw-bold">Perbukuan Indonesia</div>
          </div>
        </a>
        <button class="navbar-toggler" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item mx-1">
              <a class="nav-link" href="#">Beranda</a>
            </li>
            <li class="nav-item mx-1">
              <a class="nav-link" href="{{ route('katalog') }}">Katalog Buku</a>
            </li>
          </ul>
          <ul class="navbar-nav mb-2 mb-lg-0 text-center text-xl-start">
            <li class="nav-item ms-3 pt-1">
              <a class="btn btn-sm btn-outline-blue" href="#">Masuk</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>