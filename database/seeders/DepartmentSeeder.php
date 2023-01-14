<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $depatments = [
            [
                'label' => 'IT',
                'code' => 'it'
            ],
            [
                'label' => 'PR',
                'code' => 'pr'
            ],
            [
                'label' => 'HR',
                'code' => 'hr'
            ],
            [
                'label' => 'Marketing',
                'code' => 'marketing'
            ],
            [
                'label' => 'Security',
                'code' => 'security'
            ],
        ];

        foreach ($depatments as $depatment){
            Department::create($depatment);
        }
    }
}
