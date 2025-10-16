<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'inio asano',
            'age' => 35,
            'nationality' => 'Japan'
        ];
        DB::table('authors')->insert($param);
        $param =[
            'name' => 'eiitiro oda',
            'age' => 20,
            'nationality' => 'Japan'
        ];
        DB::table('authors')->insert($param);
        $param =[
            'name' => 'sara',
            'age' => 45,
            'nationality' => 'Egyptian'
        ];
        DB::table('authors')->insert($param);
        $param =[
            'name' => 'saly',
            'age' => 31,
            'nationality' => 'Chinese'
        ];
        DB::table('authors')->insert($param);
    }
}
