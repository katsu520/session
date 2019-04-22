<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    //
    protected $fillable = ['shop_id', 'keyword'];

    public function shop()
    {
      return $this->belongsTo(Shop::class);
    }
}
