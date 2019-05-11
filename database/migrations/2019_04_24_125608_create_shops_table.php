<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    public $table = "cotizacion";
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::create 新しいデータベーステーブルを作成するためのメソッド
        Schema::create('shops', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ショップID');
            $table->string('name')->comment('名前');
            $table->string('address')->comment('住所');
            $table->text('hp')->comment('ホームページ');
            //created_at,update_atが作られる　※必ず記述する
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('shops');
    }
}
