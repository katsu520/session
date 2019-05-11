@extends('layouts.admin')

@section('title', 'Session')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="mx-auto">
        <body>
          <div class="how-head">
            <h1>サーフィンを始める前に</h1>
            <hr width="50%" noshade>
            <p>- サーフィンをするに至って必要なアイテムやルール・マナーを知ろう -</p>
          </div>
          <h2 class="item-title"><  必要なアイテム  ></h2>
          <div class="col-xs-12 col-lg-12">
            <div class="row">
              <div class="item1">
                <dt>サーフボード</dt>
                <dd>ショートやロングといった様々なサイズがあり、波の乗り方や楽しみ方が違います。<br>ショートはアグレッシブに動け、ロングは小さい波でもゆったり楽しむ事ができます。<br>まずは自分に合ったサイズや浮力などをサーフショップの店員さんなどに教えてもらいましょう！</dd>
              </div>
              <img src="{{ asset('/images/5_s.jpg') }}" width="600px">
            </div>
          </div>

          <div class="col-xs-12 col-lg-12">
            <div class="row">
              <img src="{{ asset('/images/6_s.jpg') }}" width="600px">
              <div class="item2">
                <dt>リッシュコード</dt>
                <dd>サーフボードと足首を繋ぐものです。<br>サーフボードが流されてしまう事を避ける為に必ず必要です。</dd>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-lg-12">
            <div class="row">
              <div class="item3">
                <dt>デッキパッド</dt>
                <dd>サーフボードの表面側の後ろ足の位置に貼る滑り止めです。</dd>
              </div>
              <img src="{{ asset('/images/7_s.jpg') }}" width="600px">
            </div>
          </div>

          <div class="col-xs-12 col-lg-12">
            <div class="row">
              <img src="{{ asset('/images/8_s.jpg') }}" width="600px">
              <div class="item4">
                <dt>フィン</dt>
                <dd>サーフボードをコントロールする為に必要不可欠です。<br>シングルフィン、ツインフィン、トライフィン、クアッドフィンなど多種多様な物があります。</dd>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-lg-12">
            <div class="row">
              <div class="item5">
                <dt>ワックス</dt>
                <dd>足を滑らなくする為にサーフボードの表面に塗っていくものです。<br>柔らかいものは冬用、硬いものは夏用となります。<br>季節や水温によって使い分けましょう!</dd>
              </div>
              <img src="{{ asset('/images/9_s.jpeg') }}" width="600px">
            </div>
          </div>

          <div class="col-xs-12 col-lg-12">
            <div class="row">
              <img src="{{ asset('/images/10_s.jpg') }}" width="600px">
              <div class="item6">
                <dt>ウェットスーツ</dt>
                <dd>寒い時期や日焼けを防止する為に必要となっていきます。<br>季節によって様々な種類のものがあります。<br>同じ季節でも気温、水温が異なる場合があるのでその時に合ったものを選びましょう!</dd>
              </div>
            </div>
          </div>
          <h2 class="rule"><  ルール・マナー  ></h2>
          <div class="rule1">
            <div class="col-xs-12 col-lg-5">
              <div class="row">
                <dt>ワンマンワンウェイブ</dt>
                <dd>一本の波には一人しか乗ってはいけません。<br>これはサーフィン中の接触事故を防ぐ為です。<br>また、例外として三角形に割れる波の場合は左側と右側とで一人ずつ乗っても大丈夫です！</dd>
              </div>
            </div>

            <div class="col-xs-12 col-lg-5">
              <div class="row">
                <dt>前乗り禁止!</dt>
                <dd>既に波に乗っている人がいる中、その人の進行方向のポジションでテイクオフ(乗ろうとすること)は禁止されています。<br>まだ乗っていないからと言ってテイクオフするのも禁止行為になるので注意しましょう。<br>混雑している場合はやむを得なく前乗り行為をしてしまう可能性がありますが、その時はしっかりと謝りましょう!</dd>
              </div>
            </div>

            <div class="col-xs-12 col-lg-5">
              <div class="row">
                <dt>ライディング中の邪魔をしない!</dt>
                <dd>サーフィンをしている人のライン上でのゲットアウトは事故の原因になるので絶対にしてはいけません。<br>ゲットアウトとはパドリング(漕ぐ行為)で沖に出ることの意味です。<br>万が一、どうしても通らなければならない時はなるべく早く通ること。<br>ゲット中に別の人が同じ並みに乗ってきたら、その人の進行方向と逆にパドルして回避するか、ダイブして邪魔にならないようにしましょう!</dd>
              </div>
            </div>

            <div class="col-xs-12 col-lg-5">
              <div class="row">
                <dt>集団で海に入ってはいけない!</dt>
                <dd>場所によっては狭く、小さいポイントもあります。<br>そんな場所に集団で海に入ってしまうのは禁止行為です。<br>集団で入ってしまうと波を独占してしまったりと他の人に大迷惑になります。</dd>
              </div>
            </div>

            <div class="col-xs-12 col-lg-5">
              <div class="row">
                <dt>ゴミなどを捨てない!</dt>
                <dd>海や砂浜にゴミを捨てたり、汚すは言語道断です。<br>自分で出したゴミは持ち帰るのは当然で、ゴミが落ちていたら掃除して帰りましょう。<br>サーファーとして大事な心がけです!</dd>
              </div>
            </div>
          </div>
          <h2 class="reference"><  参考  ></h2>
          <div class="col-xs-12 col-lg-12">
            <div class="row">
              <div class="reference1">
                <dt>SURFIN LIFE</dt>
                <dd>サーフィン用語集やテクニックなど初心者の為の基本が解説されています!<br>サーフィンに関するニュースなども載っているので是非チェックしてみましょう!</dd>
                <a href="https://surfinglife.jp/category/technic/" class="btn-flat-border" style="margin-top: 360px; margin-left: 265px;">Check</a>
              </div>
              <img src="{{ asset('/images/14_s.jpg')}}" width="600px">
            </div>
          </div>
          <div class="col-xs-12 col-lg-12">
            <div class="row">
              <img src="{{ asset('/images/15_s.jpg')}}" width="600px">
              <div class="reference2">
                <dt>ムラサキサポーツ</dt>
                <dd>サーフィンに必要なアイテムが豊富に揃っています!<br>必要な物を揃えてサーフィンに出掛けましょう!</dd>
                <a href="https://www.murasaki.jp/category/SURFING/" class="btn-flat-border" style="margin-top: 350px; margin-left: 250px;">Check</a>
              </div>
            </div>
          </div>
        </body>
      </div>
    </div>
  </div>
@endsection
