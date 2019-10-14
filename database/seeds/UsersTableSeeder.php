<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = [
       	['name'=>'thanh','last_name'=>'phan','email'=>'sinhsongtu55@gmail.com','password'=>bcrypt('123456'),'birthday'=>'22-12-1999','sex'=>'1','phone'=>'0962949332','address'=>'ha nam', 'avatar'=>'0','admin'=>'1','created_at'=> new DateTime ],
       	['name'=>'linh','khanh'=>'thu','email'=>'linh@gmail.com','password'=>bcrypt('123456'),'birthday'=>'22-12-1999','sex'=>'0','phone'=>'0962949332','address'=>'ha nội', 'avatar'=>'0','admin'=>'0','created_at'=> new DateTime ]
       ];
       DB::table('users')->insert($user);
    }
}
