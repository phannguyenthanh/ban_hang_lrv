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
       	['name'=>'admin','last_name'=>'system','email'=>'admin@example.com','password'=>bcrypt('123456'),'birthday'=>'01-01-1995','sex'=>'1','phone'=>'0901234567','address'=>'Ha Noi', 'avatar'=>'0','admin'=>'1','created_at'=> new DateTime ],
       	['name'=>'user','last_name'=>'test','email'=>'user@example.com','password'=>bcrypt('123456'),'birthday'=>'15-05-1998','sex'=>'0','phone'=>'0987654321','address'=>'Da Nang', 'avatar'=>'0','admin'=>'0','created_at'=> new DateTime ]
       ];
       DB::table('users')->insert($user);
    }
}
