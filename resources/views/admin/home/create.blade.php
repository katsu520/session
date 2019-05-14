@extends('layouts.admin')

@section('title', 'Session')

@section('content')
  <!-- 画面幅100%にするためのクラス -->
  <div class="container-fluid">
    <div class="row">
      <!-- Bootstrap4でのブロック中央寄せするためのクラス -->
        <body>
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
                <dd><a href="http://127.0.0.1:8000/admin/howto/create" class="btn-flat-border" style="margin-left: -58%;">Check</a></dd>
              </div>
              <img src="{{ asset('/images/3_s.png') }}" width="50% height=600px">
            </div>
          </div>
          <div class="col-xs-12 col-lg-12">
            <div class="row">
              <img src="{{ asset('/images/2_s.png') }}" width="50% height=600px">
              <div class="search">
                <dt>サーフショップ＆サーフィンスクール</dt>
                <dd><a href="http://127.0.0.1:8000/admin/search/create" class="btn-flat-border" style="margin-left: -40px;">Check</a></dd>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-lg-12">
            <div class="row">
              <div class="nami">
                <p>天候・波情報</p>
                <a href="http://127.0.0.1:8000/admin/nami/create" class="btn-flat-border">Check</a>
              </div>
            </div>
          </div>
          <div class="movie">
            <iframe src="https://www.youtube.com/embed/rjsD_yd6cqo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </body>
      </div>
    </div>
  </div>
@endsection
