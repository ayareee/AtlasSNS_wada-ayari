<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //use宣言必須


class users_tableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['id' => '1',
            'username' =>'竈門炭治郎',
            'email' => 'tanjiro@softbank.ne.jp',
            'password' => 1111],
            ['id' => '2',
            'username' =>'竈門禰豆子',
            'email' => 'nezuko@softbank.ne.jp',
            'password' => 2222],
            ['id' => '3',
            'username' =>'我妻善逸',
            'email' => 'agazuma@softbank.ne.jp',
            'password' => 3333],
            ['id' => '4',
            'username' =>'伊之助',
            'email' => 'inosuke@softbank.ne.jp',
            'password' => 4444],
            ['id' => '5',
            'username' =>'富岡義勇',
            'email' => 'giyu@softbank.ne.jp',
            'password' => 5555]
        ]);
    }
}
