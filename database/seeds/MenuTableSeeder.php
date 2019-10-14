<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = [
        	['name'=>'SẢN PHẨM','created_at'=> new DateTime() ],
        	['name'=>'VẬT TƯ NÔNG NGHIỆP','created_at'=> new DateTime() ]
        ];

        DB::table('menu')->insert($menu);
    }
}
