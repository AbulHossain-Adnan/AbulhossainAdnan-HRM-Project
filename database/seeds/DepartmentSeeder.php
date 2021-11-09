<?php

use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('departmentts')->insert([
            'id'=>1,
            'department'=>'web designer',
        ]);
          DB::table('departmentts')->insert([
            'id'=>2,
            'department'=>'web developer',
        ]);
           DB::table('departmentts')->insert([
            'id'=>3,
            'department'=>'app developer',
        ]);
            DB::table('departmentts')->insert([
            'id'=>4,
            'department'=>'hr manager',
        ]);
            
    }
}
