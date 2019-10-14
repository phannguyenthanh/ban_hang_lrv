<?php

use Illuminate\Database\Seeder;

class CartDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cartdetail = [
        	'products_ID'=>1,
        	'customer_ID'=>1,
        	'name'=>'Thuy',
        	'phone'=>'09737337378',
        	'email'=>'theodh@gamil.com',
        	'address'=>'ha noi',
        	'quality'=>'2',
        	'price'=>'3200000',
        	'created_at'=> new DateTime()
        ];

        DB::table('cart_detail')->insert($cartdetail);
    }
}
