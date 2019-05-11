<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//Shop Modelにアクセス
use App\Shop;

class SearchController extends Controller
{
  public function add() {

    //created_at 新しい順に降順で表示
    $shops = Shop::orderBy('created_at', 'desc')->paginate(5);

    return view('admin.search.create',[
      'pref' => '全国', 'shops' => $shops,
      'pref' => '北海道', 'shops' => $shops,
      'pref' => '東北', 'shops' => $shops,
      'pref' => '関東', 'shops' => $shops,
      'pref' => '甲信越', 'shops' => $shops,
      'pref' => '北陸', 'shops' => $shops,
      'pref' => '東海', 'shops' => $shops,
      'pref' => '関西', 'shops' => $shops,
      'pref' => '山陰・山陽', 'shops' => $shops,
      'pref' => '四国', 'shops' => $shops,
      'pref' => '九州', 'shops' => $shops,
      'pref' => '沖縄', 'shops' => $shops,
      ]);
    }


    public function select(Request $req){

      //ユーザーが入力した値を持ってきている
      //$pref = valueで定義された値　例：value = "茨城県" -> $pref = 茨城県 -> 'pref' = "茨城県"(文字列)
      $pref = $req->input('pref');

      // 検索QUERY 定義
      // QUERY(クエリ)=検索するためのもの
      $query = Shop::query();

      // もし「都道府県」があれば
      // ! = not ,empty = 空っぽ
      if(!empty($pref)){
        //where = 特定のデータを取得　like = ~のような　%(ワイルドカード) = 一致 ->前に%なら後方一致、後ろに%なら前方一致
        $query->where('address','like','%'.$pref.'%');
      }

      // ページネーション
      // 1ページに5つずつ表示するための書き方
      $shops = $query->paginate(5);

      //with コントローラーかビューに値を渡す
      // return view('search.create')->with($shops); とも書ける
      return view('admin.search.create', ['shops_form' => $shops , 'pref' => $pref , 'shops' => $shops]);
    }
  }
