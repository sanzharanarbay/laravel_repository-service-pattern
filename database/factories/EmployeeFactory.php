<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Employee::class;

    public function definition()
    {
        return [
            'full_name' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'birth_date' =>$this->faker->dateTimeBetween('-60 years', '-20 years'),
            'position_id' => Position::inRandomOrder()->first()->id,
            'department_id' => Department::inRandomOrder()->first()->id,
            'address' => $this->faker->address(),
            'age' => $this->faker->numberBetween(20, 63),
            'phone_number' => $this->faker->e164PhoneNumber(),
        ];
    }
}
