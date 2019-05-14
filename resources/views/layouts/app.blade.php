<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
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
</body>
</html>
