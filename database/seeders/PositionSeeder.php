<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $positions = [
            [
                'label' => 'Software Engineer',
                'slug' => 'software-engineer'
            ],
            [
                'label' => 'Analytic',
                'slug' => 'analytic'
            ],
            [
                'label' => 'Backend Developer',
                'slug' => 'backend-developer'
            ],
            [
                'label' => 'Frontend Developer',
                'slug' => 'frontend-developer'
            ],
            [
                'label' => 'Lawyer',
                'slug' => 'lawyer'
            ],
        ];

        foreach ($positions as $position){
            Position::create($position);
        }
    }
}
