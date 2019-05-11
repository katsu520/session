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

    <footer>
      <hr class="home" noshade>
      <small class="copyright">©️ 2019 session</small>
    </footer>
  </body>
</html>
