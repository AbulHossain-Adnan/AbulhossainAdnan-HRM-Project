<?php

use Illuminate\Database\Seeder;

class Leave_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('leave_types')->insert([
            'id'=>1,
            'leave_type'=>'sick',
            'leave_number'=>5,
        ]);
       DB::table('leave_types')->insert([
            'id'=>2,
            'leave_type'=>'others',
            'leave_number'=>5,
        ]);
       DB::table('leave_types')->insert([
            'id'=>3,
            'leave_type'=>'unpaid',
            'leave_number'=>5,
        ]);
       DB::table('leave_types')->insert([
            'id'=>4,
            'leave_type'=>'annual',
            'leave_number'=>5,
        ]);
       DB::table('leave_types')->insert([
            'id'=>5,
            'leave_type'=>'maternity',
            'leave_number'=>5,
        ]);
    }
}
