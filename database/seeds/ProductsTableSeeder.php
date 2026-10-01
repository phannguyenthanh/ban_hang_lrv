<?php

use Illuminate\Database\Seeder;

// use faker\Factory;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();
    	for ($i=0; $i <100 ; $i++) { 

    		 $product = [
    		 	'category_id'=>$faker->randomElement($array = array (1,2,3,4,5,6,7,8)),
    		 	'name'=> $faker->name,
    		 	'imager'=>$faker->randomElement($array = array ('20170726161052_hoa-trang-nguyen.jpg','20170727091001_cay-hoa-hai-duong-choi-tet.jpg','20170810154452_cay-cong-trinh-do-thi-cay-bang-lang.jpg')),
    		 	'price'=>(rand(10,100))*1000000,
    		 	'old'=>rand(4,30),
    		 	'height'=>rand(100,3000),
    		 	'width'=>rand(10,1000),
    		 	'charac'=>$faker->realText($maxNbChars = 100, $indexSize = 2),
    		 	'general'=>$faker->realText($maxNbChars = 100, $indexSize = 2),
    		 	'content'=>$faker->realText($maxNbChars = 300, $indexSize = 5),
    		 	'quantity'=>rand(1,100),
    		 	'created_at'=> new DateTime() 

    		 ];
    		 DB::table('products')->insert($product);
    	}
       
    }
}
