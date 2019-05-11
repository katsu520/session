@extends('layouts.shop')
@section('title', 'サーフィンショップ・スクール')

@section('content')

  <!--=================================================
  Form
  ==================================================-->
<div class="container">
  <div class="row">
    <div class="mx-auto">
      <body>
        <div class="search-head">
          <h1>サーフィンショップ・スクール</h1>
          <hr width="90%" noshade>
          <p>- 住んでいる都道府県で検索してみよう -</p>
        </div>
        <form action="{{ route('search.create') }}" method="get" role="form">
          {!! csrf_field() !!}
          <div class="form-group">
            <label for="number" class="control-label col-xs-12 col-lg-12"><住所></label>
            <div class="col-xs-10">
              <select name="pref" class="form-control select select-primary mbl" data-toggle="select">
                <option value="">全国</option>
                <optgroup label="北海道">
                  <option value="北海道" @if($pref=='北海道') selected @endif>北海道</option>
                </optgroup>
                <optgroup label="東北">
                  <option value="青森県" @if($pref=='青森県') selected @endif>青森県</option>
                  <option value="宮城県" @if($pref=='宮城県') selected @endif>宮城県</option>
                  <option value="秋田県" @if($pref=='秋田県') selected @endif>秋田県</option>
                  <option value="山形県" @if($pref=='山形県') selected @endif>山形県</option>
                  <option value="福島県" @if($pref=='福島県') selected @endif>福島県</option>
                  <option value="岩手県" @if($pref=='岩手県') selected @endif>岩手県</option>
                </optgroup>
                <optgroup label="関東">
                  <option value="茨城県" @if($pref=='茨城県') selected @endif>茨城県</option>
                  <option value="栃木県" @if($pref=='栃木県') selected @endif>栃木県</option>
                  <option value="群馬県" @if($pref=='群馬県') selected @endif>群馬県</option>
                  <option value="埼玉県" @if($pref=='埼玉県') selected @endif>埼玉県</option>
                  <option value="千葉県" @if($pref=='千葉県') selected @endif>千葉県</option>
                  <option value="東京都" @if($pref=='東京都') selected @endif>東京都</option>
                  <option value="神奈川県" @if($pref=='神奈川県') selected @endif>神奈川県</option>
                </optgroup>
                <optgroup label="甲信越">
                  <option value="新潟県" @if($pref=='新潟県') selected @endif>新潟県</option>
                  <option value="山梨県" @if($pref=='山梨県') selected @endif>山梨県</option>
                  <option value="長野県" @if($pref=='長野県') selected @endif>長野県</option>
                </optgroup>
                <optgroup label="北陸">
                  <option value="富山県" @if($pref=='富山県') selected @endif>富山県</option>
                  <option value="石川県" @if($pref=='石川県') selected @endif>石川県</option>
                  <option value="福井県" @if($pref=='福井県') selected @endif>福井県</option>
                </optgroup>
                <optgroup label="東海">
                  <option value="岐阜県" @if($pref=='岐阜県') selected @endif>岐阜県</option>
                  <option value="静岡県" @if($pref=='静岡県') selected @endif>静岡県</option>
                  <option value="愛知県" @if($pref=='愛知県') selected @endif>愛知県</option>
                  <option value="三重県" @if($pref=='三重県') selected @endif>三重県</option>
                </optgroup>
                <optgroup label="関西">
                  <option value="大阪府" @if($pref=='大阪府') selected @endif>大阪府</option>
                  <option value="京都府" @if($pref=='京都府') selected @endif>京都府</option>
                  <option value="兵庫県" @if($pref=='兵庫県') selected @endif>兵庫県</option>
                  <option value="滋賀県" @if($pref=='滋賀県') selected @endif>滋賀県</option>
                  <option value="奈良県" @if($pref=='奈良県') selected @endif>奈良県</option>
                  <option value="和歌山県" @if($pref=='和歌山県') selected @endif>和歌山県</option>
                </optgroup>
                <optgroup label="山陰・山陽">
                  <option value="鳥取県" @if($pref=='鳥取県') selected @endif>鳥取県</option>
                  <option value="島根県" @if($pref=='島根県') selected @endif>島根県</option>
                  <option value="岡山県" @if($pref=='岡山県') selected @endif>岡山県</option>
                  <option value="広島県" @if($pref=='広島県') selected @endif>広島県</option>
                  <option value="山口県" @if($pref=='山口県') selected @endif>山口県</option>
                </optgroup>
                <optgroup label="四国">
                  <option value="徳島県" @if($pref=='徳島県') selected @endif>徳島県</option>
                  <option value="香川県" @if($pref=='香川県') selected @endif>香川県</option>
                  <option value="愛媛県" @if($pref=='愛媛県') selected @endif>愛媛県</option>
                  <option value="高知県" @if($pref=='高知県') selected @endif>高知県</option>
                </optgroup>
                <optgroup label="九州">
                  <option value="福岡県" @if($pref=='福岡県') selected @endif>福岡県</option>
                  <option value="長崎県" @if($pref=='長崎県') selected @endif>長崎県</option>
                  <option value="熊本県" @if($pref=='兵庫県') selected @endif>兵庫県</option>
                  <option value="佐賀県" @if($pref=='佐賀県') selected @endif>佐賀県</option>
                  <option value="大分県" @if($pref=='奈良県') selected @endif>奈良県</option>
                  <option value="宮崎県" @if($pref=='宮崎県') selected @endif>宮崎県</option>
                  <option value="鹿児島県" @if($pref=='宮崎県') selected @endif>宮崎県</option>
                </optgroup>
                <optgroup label="沖縄">
                  <option value="沖縄県" @if($pref=='沖縄県') selected @endif>沖縄県</option>
                </optgroup>
              </select>
            </div>
          </div>

          <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10 text-center">
              <button type="submit" class="btn btn-default">検索</button>
            </div>
          </div>
        </form>

        @endsection

        @section('table')
        <table class="table table-striped">
          <tr>
            <th>名前</th>
            <th>住所</th>
            <th>ホームページ</th>
          </tr>
          <!-- loop -->
          @foreach($shops as $shop)
          <tr style="font-size: 5px; text-align: center;">
            <td>{{$shop->name}}</td>
            <td>{{$shop->address}}</td>
            <td>{{$shop->hp}}</td>
          </tr>
          @endforeach
        </table>

        <div class="paginate">
          {!!$shops->appends(['pref'=>$pref])->render()!!}
        </div>
      </body>
    </div>
  </div>
</div>
@endsection
