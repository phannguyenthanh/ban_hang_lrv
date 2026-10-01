<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();
        for ($i=0; $i < 300; $i++) { 
        	$news = [
        		'news_type_id'=>$faker->randomElement($array = array (1,2,3,4,5)),
                
        		'brief'=> $faker->realText($maxNbChars = 100, $indexSize = 2),
        		'content'=>$faker->realText($maxNbChars = 1000, $indexSize = 5),
        		'imager'=> $faker->randomElement($array = array ('20170721100838_cay-hoa-cuc-canh-ngay-tet.jpg','20170721103959_cay-phat-tai-phat-loc.jpg','20170811085340_cay-ngoc-lan-trang-cay-canh-cong-trinh.jpg','3ewsdfghjkiuy.jpg')),
        		
        		'created_at'=> new DateTime() ,
                'name'=>$faker->name,

        	];
        	DB::table('news')->insert($news);
        }
    }
}
