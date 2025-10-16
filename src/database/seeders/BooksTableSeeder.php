<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'author_id' => '1',
            'title' => '海辺のなんとか'
        ];
        DB::table('books')->insert($param);
        $param = [
            'author_id' => '1',
            'title' => 'おやすみプンプン'
        ];
        DB::table('books')->insert($param);
        $param = [
            'author_id' => '1',
            'title' => 'ムジナ'
        ];
        DB::table('books')->insert($param);
        $param = [
            'author_id' => '2',
            'title' => 'ワンピース'
        ];
        DB::table('books')->insert($param);
    }
}
