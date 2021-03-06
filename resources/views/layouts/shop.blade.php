<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link rel="shortcut" href="{{ url('/') }}/dist/img/favicon.ico">

    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  @yield('styles')
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet"><!-- FontAwesome -->

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
    <div class="container" style="margin-top: 40px; margin-bottom: 40px;">
      @yield('content')
    </div>

      @yield('table')

    <!-- Bootstrap core JavaScript
      ================================================== -->
    <script src="{{ url('/') }}/dist/js/vendor/jquery.min.js"></script>
    <script src="{{ url('/') }}/dist/js/vendor/video.js"></script>
    <script src="{{ url('/') }}/dist/js/flat-ui.min.js"></script>

    <script src="{{ url('/') }}/assets/js/prettify.js"></script>
    <script src="{{ url('/') }}/assets/js/application.js"></script>

      @yield('scripts')

      <div id="scrollToPageTopButtonBox"  style="position: fixed;bottom: 20px;right: 20px; display:none">
        <button id="scrollToPageTopButton" type="button" class="btn btn-sm btn-dark m-2" ><span class="h1"><i class="fa fa-angle-double-up"></i></span><br>PAGE<br>TOP</button>
      </div>
    <footer>
      <hr class="home" noshade>
      <small class="copyright">©️ 2019 session</small>
    </footer>
  </body>
</html>
