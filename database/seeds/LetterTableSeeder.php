<?php

use Illuminate\Database\Seeder;

class LetterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $letter = [

        	['users_id'=>1,'name'=>'ha','email'=>'ekehks@gmail.com','address'=>'ninh binih','content'=>'huhu','created_at'=> new DateTime(),'phone'=>'049483837'],
        	['users_id'=>0,'name'=>'ha','email'=>'ekedfsas@gmail.com','address'=>'quangr ninh','content'=>'huhi','created_at'=> new DateTime(),'phone'=>'0362537848' ]

        ];
        DB::table('letters')->insert($letter);
    }
}
