@extends('layouts.admin')

@section('title', 'Session')

@section('content')
    <div class="container-fluid">
      <div class="row">
        <div class="mx-auto">
          <body>
            <div class="nami-head">
              <h1>天候・波情報</h1>
              <hr width="50%" noshade>
              <p>- サーフィンをする前に天候や波の情報をCheckしよう -</p>
            </div>
            <div class="col-xs-12 col-lg-12">
              <div class="row">
                <div class="zyouhou1">
                  <dt>波情報　サーフィン　BCM</dt>
                  <dd>
                    画像や動画で全国の波の様子を確認する事ができます。<br>
                    適したコンディション、ブレイクポイントや波数など安全さの情報がわかります。<br>
                    解説やレポートがあるので初心者の方でも安心です！<br>
                    <a href="https://www.bcm-surfpatrol.com/weather.html" class="btn-flat-border">Check</a>
                  </dd>
                </div>
                <img src="{{ asset('/images/11_s.jpg') }}" width="600px">
              </div>
            </div>
            <div class="col-xs-12 col-lg-12">
              <div class="row">
                <img src="{{ asset('/images/12_s.jpg') }}" width="600px">
                <div class="zyouhou2">
                  <dt>日本気象協会 tenki.jp</dt>
                  <dd>
                    全国の海の天気を確認する事ができます。<br>
                    日付ごとに波の大きさや潮の満ち引き、紫外線の強さなどを数値で分かりやすく確認する事ができます。<br>
                    <a href="https://tenki.jp/" class="btn-flat-border">Check</a>
                  </dd>
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
