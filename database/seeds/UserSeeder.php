<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id'=>1,
            'status'=>1,
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('password')
        ]);
        DB::table('users')->insert([
            'role_id'=>2,
            'status'=>1,
            'name'=>'employee',
            'email'=>'employee@gmail.com',
            'password'=>bcrypt('password')
        ]);
    }
}
