<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'name' => 'taro',
            'mail' => 'taro@yamada.jp',
            'age' => '20',
        ];
        DB::table('people')->insert($param);
        $param = [
            'name' => 'jiro',
            'mail' => 'jiro@yamada.jp',
            'age' => '20',
        ];
        DB::table('people')->insert($param);
        $param = [
            'name' => 'saburo',
            'mail' => 'saburo@yamada.jp',
            'age' => '20',
        ];
        DB::table('people')->insert($param);
    }
}
