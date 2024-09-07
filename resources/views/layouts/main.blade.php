<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" href="img/icon.png" type="image/png/ico" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <title>{{ $title }}</title>
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

        @include('layouts.header')

        @yield('content')//menyesuaikan halaman yang dipilih, katalog.blade.php atau detail.blade.php

        @include('layouts.footer')
    </div>
  </body>
</html>
