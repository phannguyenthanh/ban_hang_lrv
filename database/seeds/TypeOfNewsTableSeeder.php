<?php

use Illuminate\Database\Seeder;

class TypeOfNewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typeofnews=[

        	['name'=>'HỘI TRỢ BONSAI','created_at' => new DateTime() ],
        	['name'=>'PHONG THỦY CÂY','created_at' => new DateTime() ],
        	['name'=>'TƯ VẤN CHỌN CÂY','created_at' => new DateTime() ],
        	['name'=>'CHĂM SÓC CÂY','created_at' => new DateTime() ],
        	['name'=>'NGHỆ THUẬT PHONG THỦY','created_at' => new DateTime() ]

        ];

        DB::table('type_of_news')->insert($typeofnews);

    }
}
