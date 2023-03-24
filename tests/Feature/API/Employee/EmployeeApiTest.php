<?php

namespace Tests\Feature\API\Employee;

use App\Models\Course;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Position;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Config;
use JWTAuth;
use Tests\TestCase;
use Faker\Factory as Faker;

class EmployeeApiTest extends TestCase
{

    protected $email;
    protected $password;
    protected $baseUrl;
    protected $user;
    protected $token;
    protected $faker;
    protected $employee;
    protected $position;
    protected $department;

    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->email = Config::get('api.apiEmail');
        $this->password = Config::get('api.apiPassword');
        $this->baseUrl = Config::get('app.url') . '/api/v1';
        $this->user = User::where('email', Config::get('api.apiEmail'))->first();
        $this->token = JWTAuth::fromUser($this->user);
        $this->faker = Faker::create();
        $this->employee = Employee::take(1)->first();
        $this->position = Position::take(1)->first();
        $this->department = Department::take(1)->first();
    }


    public function test_success_employees_list_api(){
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('GET', $this->baseUrl . '/employees')
            ->assertStatus(200)
            ->assertJsonStructure([
                'current_page',
                'data' => [
                    '*' => [
                        'id',
                        'full_name',
                        'birth_date',
                        'is_active',
                        'position_id',
                        'department_id',
                        'address',
                        'age',
                        'phone_number',
                        'created_at',
                        'updated_at',
                        'position',
                        'department',
                        'courses',
                    ]],
                'first_page_url',
                'from',
                'last_page',
                'last_page_url',
                'links',
                'next_page_url',
                'path',
                'per_page',
                'prev_page_url',
                'to',
                'total'
            ]);
    }


    public function test_success_employee_by_id_api(){
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('GET', $this->baseUrl . '/employees/' .$this->employee->id)
            ->assertStatus(200)
            ->assertJsonStructure([
                'id',
                'full_name',
                'birth_date',
                'is_active',
                'position_id',
                'department_id',
                'address',
                'age',
                'phone_number',
                'created_at',
                'updated_at',
                'position',
                'department',
                'courses',
            ]);
    }

    public function test_validate_full_name_create_employee_api(){
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('POST', $this->baseUrl . '/employees/create')
            ->assertStatus(422)
            ->assertJson([
                'error' => 'The full name field is required.',
            ]);
    }


    public function test_validate_birth_date_create_employee_api(){
        $inputs = [
            'full_name' => $this->faker->company(),
        ];
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('POST', $this->baseUrl . '/employees/create', $inputs)
            ->assertStatus(422)
            ->assertJson([
                'error' => 'The birth date field is required.',
            ]);
    }


    public function test_validate_birth_date_format_create_employee_api(){
        $inputs = [
            'full_name' => $this->faker->company(),
            'birth_date' => Carbon::now()->subYears('16')->format('Y-m-d'),
        ];
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('POST', $this->baseUrl . '/employees/create', $inputs)
            ->assertStatus(422)
            ->assertJson([
                'error' => 'The birth date must be a date before -18 years.',
            ]);
    }

    public function test_validate_position_id_create_employee_api(){
        $inputs = [
            'full_name' => $this->faker->company(),
            'birth_date' => Carbon::now()->subYears('20')->format('Y-m-d'),
        ];
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('POST', $this->baseUrl . '/employees/create', $inputs)
            ->assertStatus(422)
            ->assertJson([
                'error' => 'The position id field is required.',
            ]);
    }


    public function test_validate_department_id_create_employee_api(){
        $inputs = [
            'full_name' => $this->faker->company(),
            'birth_date' => Carbon::now()->subYears('20')->format('Y-m-d'),
            'position_id' => $this->position->id,
        ];
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('POST', $this->baseUrl . '/employees/create', $inputs)
            ->assertStatus(422)
            ->assertJson([
                'error' => 'The department id field is required.',
            ]);
    }

    public function test_validate_address_create_employee_api(){
        $inputs = [
            'full_name' => $this->faker->company(),
            'birth_date' => Carbon::now()->subYears('20')->format('Y-m-d'),
            'position_id' => $this->position->id,
            'department_id' => $this->department->id,
        ];
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('POST', $this->baseUrl . '/employees/create', $inputs)
            ->assertStatus(422)
            ->assertJson([
                'error' => 'The address field is required.',
            ]);
    }

    public function test_validate_phone_number_create_employee_api(){
        $inputs = [
            'full_name' => $this->faker->company(),
            'birth_date' => Carbon::now()->subYears('20')->format('Y-m-d'),
            'position_id' => $this->position->id,
            'department_id' => $this->department->id,
            'address' => $this->faker->address(),
        ];
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('POST', $this->baseUrl . '/employees/create', $inputs)
            ->assertStatus(422)
            ->assertJson([
                'error' => 'The phone number field is required.',
            ]);
    }

    public function test_validate_phone_number_format_create_employee_api(){
        $inputs = [
            'full_name' => $this->faker->company(),
            'birth_date' => Carbon::now()->subYears('20')->format('Y-m-d'),
            'position_id' => $this->position->id,
            'department_id' => $this->department->id,
            'address' => $this->faker->address(),
            'phone_number' => $this->faker->e164PhoneNumber(),
        ];
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('POST', $this->baseUrl . '/employees/create', $inputs)
            ->assertStatus(422)
            ->assertJson([
                'error' => 'The phone number format is invalid.',
            ]);
    }

    public function test_success_create_employee_api(){
        $inputs = [
            'full_name' => $this->faker->company(),
            'birth_date' => Carbon::now()->subYears('20')->format('Y-m-d'),
            'position_id' => $this->position->id,
            'department_id' => $this->department->id,
            'address' => $this->faker->address(),
            'phone_number' => '+77' . $this->faker->numerify('#########'),
        ];
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('POST', $this->baseUrl . '/employees/create', $inputs)
            ->assertStatus(201)
            ->assertJsonStructure([
                'data' => [
                    'full_name',
                    'birth_date',
                    'position_id',
                    'department_id',
                    'address',
                    'phone_number',
                    'age',
                    'updated_at',
                    'created_at',
                    'id',
                ],
                'message',
            ]);
    }

    public function test_validate_full_name_update_employee_api(){
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('PUT', $this->baseUrl . '/employees/update/'. $this->employee->id)
            ->assertStatus(422)
            ->assertJson([
                'error' => 'The full name field is required.',
            ]);
    }


    public function test_validate_birth_date_update_employee_api(){
        $inputs = [
            'full_name' => $this->faker->company(),
        ];
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('PUT', $this->baseUrl . '/employees/update/'. $this->employee->id, $inputs)
            ->assertStatus(422)
            ->assertJson([
                'error' => 'The birth date field is required.',
            ]);
    }


    public function test_validate_birth_date_format_update_employee_api(){
        $inputs = [
            'full_name' => $this->faker->company(),
            'birth_date' => Carbon::now()->subYears('16')->format('Y-m-d'),
        ];
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('PUT', $this->baseUrl . '/employees/update/'. $this->employee->id, $inputs)
            ->assertStatus(422)
            ->assertJson([
                'error' => 'The birth date must be a date before -18 years.',
            ]);
    }

    public function test_validate_position_id_update_employee_api(){
        $inputs = [
            'full_name' => $this->faker->company(),
            'birth_date' => Carbon::now()->subYears('20')->format('Y-m-d'),
        ];
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('PUT', $this->baseUrl . '/employees/update/'. $this->employee->id, $inputs)
            ->assertStatus(422)
            ->assertJson([
                'error' => 'The position id field is required.',
            ]);
    }


    public function test_validate_department_id_update_employee_api(){
        $inputs = [
            'full_name' => $this->faker->company(),
            'birth_date' => Carbon::now()->subYears('20')->format('Y-m-d'),
            'position_id' => $this->position->id,
        ];
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('PUT', $this->baseUrl . '/employees/update/'. $this->employee->id, $inputs)
            ->assertStatus(422)
            ->assertJson([
                'error' => 'The department id field is required.',
            ]);
    }

    public function test_validate_address_update_employee_api(){
        $inputs = [
            'full_name' => $this->faker->company(),
            'birth_date' => Carbon::now()->subYears('20')->format('Y-m-d'),
            'position_id' => $this->position->id,
            'department_id' => $this->department->id,
        ];
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('PUT', $this->baseUrl . '/employees/update/'. $this->employee->id, $inputs)
            ->assertStatus(422)
            ->assertJson([
                'error' => 'The address field is required.',
            ]);
    }

    public function test_validate_phone_number_update_employee_api(){
        $inputs = [
            'full_name' => $this->faker->company(),
            'birth_date' => Carbon::now()->subYears('20')->format('Y-m-d'),
            'position_id' => $this->position->id,
            'department_id' => $this->department->id,
            'address' => $this->faker->address(),
        ];
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('PUT', $this->baseUrl . '/employees/update/'. $this->employee->id, $inputs)
            ->assertStatus(422)
            ->assertJson([
                'error' => 'The phone number field is required.',
            ]);
    }

    public function test_validate_phone_number_format_update_employee_api(){
        $inputs = [
            'full_name' => $this->faker->company(),
            'birth_date' => Carbon::now()->subYears('20')->format('Y-m-d'),
            'position_id' => $this->position->id,
            'department_id' => $this->department->id,
            'address' => $this->faker->address(),
            'phone_number' => $this->faker->e164PhoneNumber(),
        ];
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('PUT', $this->baseUrl . '/employees/update/'. $this->employee->id, $inputs)
            ->assertStatus(422)
            ->assertJson([
                'error' => 'The phone number format is invalid.',
            ]);
    }

    public function test_success_update_employee_api(){
        $inputs = [
            'full_name' => $this->faker->company(),
            'birth_date' => Carbon::now()->subYears('20')->format('Y-m-d'),
            'position_id' => $this->position->id,
            'department_id' => $this->department->id,
            'address' => $this->faker->address(),
            'phone_number' => '+77' . $this->faker->numerify('#########'),
        ];
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('PUT', $this->baseUrl . '/employees/update/'. $this->employee->id, $inputs)
            ->assertStatus(200)
            ->assertJsonStructure([
                'status',
                'message',
            ]);
    }

    public function test_validate_course_ids_attach_employee_api(){
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('PUT', $this->baseUrl . '/employees/'. $this->employee->id. '/courses/attach')
            ->assertStatus(422)
            ->assertJson([
                'error' => 'The course ids field is required.',
            ]);
    }

    public function test_success_attach_employee_api(){
        $course_ids = $inputs = Course::take(4)->pluck('id')->toArray();
        $inputs = [
            'course_ids' => $course_ids
        ];
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('PUT', $this->baseUrl . '/employees/'. $this->employee->id. '/courses/attach', $inputs)
            ->assertStatus(200)
            ->assertJsonStructure([
                'message',
                'status'
            ]);
    }

    public function test_success_detach_employee_api(){
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('DELETE', $this->baseUrl . '/employees/' . $this->employee->id. '/courses/detach')
            ->assertStatus(200)
            ->assertJsonStructure([
                'message',
                'status'
            ]);
    }


    public function test_success_destroy_employee_api(){
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('DELETE', $this->baseUrl . '/employees/destroy/' . $this->employee->id)
            ->assertStatus(200)
            ->assertJsonStructure([
                'message',
                'status'
            ]);
    }

}
