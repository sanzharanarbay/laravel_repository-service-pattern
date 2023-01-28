<?php

namespace Tests\Feature\API\Position;

use App\Models\Position;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Config;
use JWTAuth;
use Tests\TestCase;
use Faker\Factory as Faker;

class PositionApiTest extends TestCase
{

    protected $email;
    protected $password;
    protected $baseUrl;
    protected $user;
    protected $token;
    protected $faker;
    protected $position;

    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->email = Config::get('api.apiEmail');
        $this->password = Config::get('api.apiPassword');
        $this->baseUrl = Config::get('app.url') . '/api/v1';
        $this->user = User::where('email', Config::get('api.apiEmail'))->first();
        $this->token = JWTAuth::fromUser($this->user);
        $this->faker = Faker::create();
        $this->position = Position::take(1)->first();
    }

    public function test_success_positions_list_api(){
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('GET', $this->baseUrl . '/positions')
            ->assertStatus(200)
            ->assertJsonStructure([
                '*' => [
                    'id',
                    'label',
                    'slug',
                    'created_at',
                    'updated_at'
                ],
            ]);
    }

    public function test_success_position_by_id_api(){
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('GET', $this->baseUrl . '/positions/' .$this->position->id)
            ->assertStatus(200)
            ->assertJsonStructure([
                'id',
                'label',
                'slug',
                'created_at',
                'updated_at'
            ]);
    }

    public function test_validate_label_create_position_api(){
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('POST', $this->baseUrl . '/positions/create')
            ->assertStatus(422)
            ->assertJson([
                'error' => 'The label field is required.',
            ]);
    }

    public function test_validate_slug_create_position_api(){
        $inputs = [
            'label' => $this->faker->company(),
        ];
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('POST', $this->baseUrl . '/positions/create', $inputs)
            ->assertStatus(422)
            ->assertJson([
                'error' => 'The slug field is required.',
            ]);
    }

    public function test_success_create_position_api(){
        $inputs = [
            'label' => $this->faker->company(),
            'slug' => $this->faker->word(),
        ];
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('POST', $this->baseUrl . '/positions/create', $inputs)
            ->assertStatus(201)
            ->assertJsonStructure([
                'message',
                'data' => [
                    'label',
                    'slug',
                    'updated_at',
                    'created_at',
                    'id',
                ]
            ]);
    }

    public function  test_validate_label_update_position_api(){
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('PUT', $this->baseUrl . '/positions/update/' . $this->position->id)
            ->assertStatus(422)
            ->assertJson([
                'error' => 'The label field is required.',
            ]);
    }

    public function  test_validate_slug_update_position_api(){
        $inputs = [
            'label' => $this->faker->company(),
        ];
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('PUT', $this->baseUrl . '/positions/update/' . $this->position->id, $inputs)
            ->assertStatus(422)
            ->assertJson([
                'error' => 'The slug field is required.',
            ]);
    }

    public function test_success_update_position_api(){
        $inputs = [
            'label' => $this->faker->company(),
            'slug' => $this->faker->word(),
        ];
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('PUT', $this->baseUrl . '/positions/update/' . $this->position->id, $inputs)
            ->assertStatus(200)
            ->assertJsonStructure([
                'message',
                'status'
            ]);
    }

    public function test_success_destroy_position_api(){
        $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $this->token,
        ])->json('DELETE', $this->baseUrl . '/positions/destroy/' . $this->position->id)
            ->assertStatus(200)
            ->assertJsonStructure([
                'message',
                'status'
            ]);
    }

}
