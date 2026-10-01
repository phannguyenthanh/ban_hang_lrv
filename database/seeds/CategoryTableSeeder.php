<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
        	['menu_id'=>1,'name'=>'BONSAI','created_at' => new DateTime()],
        	['menu_id'=>1,'name'=>'TIỂU CẢNH MINI','created_at' => new DateTime()],
        	['menu_id'=>1,'name'=>'BONSAI VIP','created_at' => new DateTime()],
        	['menu_id'=>1,'name'=>'CÂY VĂN PHÒNG','created_at' => new DateTime()],
        	['menu_id'=>1,'name'=>'CÂY CHƠI TẾT','created_at' => new DateTime()],
        	['menu_id'=>1,'name'=>'CÂY CÔNG TRÌNH','created_at' => new DateTime()],
        	['menu_id'=>2,'name'=>'DỤNG CỤ LÀM','created_at' => new DateTime()],
        	['menu_id'=>2,'name'=>'CHẬU TRỒNG CÂY','created_at' => new DateTime()]

        ];
        DB::table('category')->insert($category);
    }
}
