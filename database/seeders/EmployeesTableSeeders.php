<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB ;
use Illuminate\Support\Str ;

class EmployeesTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'name' => Str::random(10),
            'imag' => 'employee',
            'role' => Str::random(10),
            'linkdin' => Str::random(10),
            'city' => Str::random(10)
        ]);
    }
}
