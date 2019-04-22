@extends('layouts.admin')

@section('title', 'Session')

@section('content')
  <!-- 画面幅100%にするためのクラス -->
  <div class="container-fluid">
    <div class="row">
      <!-- Bootstrap4でのブロック中央寄せするためのクラス -->
      <div class="mx-auto">
        <body>
          <nav class="mainnav nav-top">
            <div class="nav-top-inner">
              <div class="nav-top-logo">
                <a href="http://127.0.0.1:8000/admin/home/create">
                  <img id="nav-logo" src="{{ asset('/images/logo.png') }}" style="width: 130px; "data-at2x="http://127.0.0.1:8000/admin/home/create" scale="0">
                </a>
              </div>
            </div>
          </nav>
          <!-- スマホ画面ではグリッド12個,PC画面ではグリッド12個 -->
          <div class="col-xs-12 col-lg-12">
            <div class="row">
              <div class="top">
                <p>Session<br>-サーフィンを始めよう-</p>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-lg-12">
            <div class="row">
              <div class="how">
                <dt>サーフィンを始める前に<br>〜 ルール＆マナー 〜</dt>
                <dd><a href="http://127.0.0.1:8000/admin/howto/create" class="btn-flat-border">Check</a></dd>
              </div>
              <img src="{{ asset('/images/3_s.png') }}" width="600px height=600px">
            </div>
          </div>
          <div class="col-xs-12 col-lg-12">
            <div class="row">
              <img src="{{ asset('/images/2_s.png') }}" width="600px height=600px">
              <div class="search">
                <dt>サーフショップ＆サーフィンスクール</dt>
                <dd><a href="http://127.0.0.1:8000/admin/search/create" class="btn-flat-border">Check</a></dd>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-lg-12">
            <div class="row">
              <div class="nami">
                <p>天候・波情報</p>
                <a href="http://127.0.0.1:8000/admin/nami/create" class="btn-flat-border">Check</a>
              </div>
              <div class="movie">
                <iframe width="1200px" height="600px" src="https://www.youtube.com/embed/rjsD_yd6cqo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <footer>
            <hr class="home" noshade>
            <span class="copyright">©︎session</span>
          </footer>
        </body>
      </div>
    </div>
  </div>
@endsection
