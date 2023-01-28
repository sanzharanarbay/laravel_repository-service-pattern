<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = Course::factory(15)->create();

        Employee::factory(30)->create()->each(function ($employee) use ($courses){
            $employee->courses()->attach($courses->random(3));
        });
    }
}
