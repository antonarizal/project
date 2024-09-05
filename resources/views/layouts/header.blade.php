<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" href="img/icon.png" type="image/png/ico" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <title>SIBI - Sistem Informasi Perbukuan Indonesia</title>
    <script>
      function gtag() {
        dataLayer.push(arguments);
      }
      (window.dataLayer = window.dataLayer || []), gtag("js", new Date()), gtag("config", "G-KQZ4PELP78");
    </script>
    <script>
      navigator.serviceWorker.getRegistrations().then(function (e) {
        for (let r of e) r.unregister();
      });
    </script>
    <script>
      window.onscroll = function () {
        var navbar = document.getElementById("navbar");
        if (window.pageYOffset > 50) {
          // Change 50 to the scroll distance you want
          navbar.classList.add("bg-soft-blue");
        } else {
          navbar.classList.remove("bg-soft-blue");
        }
      };
    </script>
  </head>
  <body>
    <div id="root">

      @include('layouts.sidebar')

        @yield('content')//menyesuaikan halaman yang dipilih, katalog.blade.php atau detail.blade.php

      <footer id="Footer" style="background-color: rgb(47, 62, 89)">
        <div class="container">
          <div class="row justify-content-between my-5">
            <div class="col-md-4 pe-md-5">
              <img src="{{ asset('img/icon.png')}}" width="100">
              <p class="text-white my-2">
                <strong>Pusat Perbukuan</strong>
              </p>
              <p class="text-white">
                <small>Badan Standar, Kurikulum, dan Asesmen Pendidikan. Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi.</small>
              </p>
            </div>
            <div class="col-md-5 mt-4 mt-md-0">
              <h5 class="footer-section-title">Peta Situs</h5>
              <ul class="nav flex-column">
                <div class="row">
                  <div class="col-md-6">
                    <a class="nav-link" href="#">Beranda</a>
                    <a class="nav-link" href="#">Buku Teks Kurikulum Merdeka</a>
                    <a class="nav-link" href="#">Buku Teks K-13</a>
                    <a class="nav-link" href="#">Buku Nonteks</a>
                    <a class="nav-link" href="#">Penilaian</a>
                  </div>
                  <div class="col-md-6">
                    <a class="nav-link" href="#">Kebijakan</a>
                    <a class="nav-link" href="#">Pembinaan</a>
                    <a class="nav-link" href="#">Profil</a>
                  </div>
                </div>
              </ul>
            </div>
            <div class="col-md-3 mt-4 mt-md-0">
              <h5 class="footer-section-title">Kontak Kami</h5>
              <p class="text-white">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-dot" class="svg-inline--fa fa-location-dot me-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                  <path
                    fill="currentColor"
                    d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"
                  >
                </path>
                </svg>
                Jalan RS. Fatmawati Gd D Komplek Kemendikbudristek Cipete, Jakarta 12410
              </p>
              <a class="nav-link" href="#">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" class="svg-inline--fa fa-phone me-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path
                    fill="currentColor"
                    d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z"
                  >
                </path>
                </svg>
                021-3804248
              </a>
              <a class="nav-link" href="#">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" class="svg-inline--fa fa-envelope me-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path
                    fill="currentColor"
                    d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z"
                  >
                </path>
                </svg>
                buku@kemdikbud.go.id
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-11">
              <p>© Copyrights 2022 Sistem Informasi Perbukuan Indonesia. All rights reserved.</p>
            </div>
            <div class="col text-end">
              <a class="btn btn-warning rounded" href="#">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle-arrow-up" class="svg-inline--fa fa-circle-arrow-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path
                    fill="currentColor"
                    d="M256 0C114.6 0 0 114.6 0 256c0 141.4 114.6 256 256 256s256-114.6 256-256C512 114.6 397.4 0 256 0zM382.6 254.6c-12.5 12.5-32.75 12.5-45.25 0L288 205.3V384c0 17.69-14.33 32-32 32s-32-14.31-32-32V205.3L174.6 254.6c-12.5 12.5-32.75 12.5-45.25 0s-12.5-32.75 0-45.25l103.1-103.1C241.3 97.4 251.1 96 256 96c4.881 0 14.65 1.391 22.65 9.398l103.1 103.1C395.1 221.9 395.1 242.1 382.6 254.6z"
                  ></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>
