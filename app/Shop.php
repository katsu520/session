<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    //作成日時
    const CREATED_AT = null;
    //更新日医
    const UPDATED_AT = null;
    //紐ずけするテーブル名を指定
    protected $table ='shops';

    //createメソッドを使用する場合はfillableかguardedを指定する必要がある
    protected $fillable = ['name', 'address', 'hp'];
    //fillable->ホワイトリスト的に、guarded->ブラックリスト的に

}
