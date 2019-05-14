<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"="" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300.400,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
<!--
  <header class="site-header">
    <h1 class="site-logo"><a href="http://127.0.0.1:8000/admin/home/create"><img src="{{ asset('/images/logo.png') }}" style="width: 130px;"></a></h1>
  </header>
-->
  </head>
  <body link="#ff0000" vlink="#008000" alink="#ffff00">
    <div id="app">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a href="http://127.0.0.1:8000/admin/home/create"><img src="{{ asset('/images/logo.png') }}" style="width: 130px; border-radius: 70px;"></a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="gnav__menu__item"><a href="http://127.0.0.1:8000/admin/howto/create">Howto</a></li>
              <li class="gnav__menu__item"><a href="http://127.0.0.1:8000/admin/search/create">Shop</a></li>
              <li class="gnav__menu__item"><a href="http://127.0.0.1:8000/admin/nami/create">Nami</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <main class="py-4">
        @yield('content')
      </main>
      <div id="scrollToPageTopButtonBox"  style="position: fixed;bottom: 20px;right: 20px; display:none">
        <button id="scrollToPageTopButton" type="button" class="btn btn-sm btn-dark m-2" ><span class="h1"><i class="fa fa-angle-double-up"></i></span><br>PAGE<br>TOP</button>
      </div>
    </div>
    <footer>
      <hr class="footer-line" noshade>
      <small class="copyright">©️ 2019 session</small>
    </footer>
  </body>
</html>
