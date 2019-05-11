<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // ShopsTableSeederを大元のシーダーファイルから呼び出す
        $this->call(ShopsTableSeeder::class);
    }
}
