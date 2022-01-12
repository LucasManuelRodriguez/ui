<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CursoControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_auth_user_can_see_an_instant_create_form()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
        ->get(route('cursos.create'));

        $response->assertStatus(200)
        ->assertViewIs('cursos.create');
    }

    public function test_auth_user_can_create_an_instant()
    {
        $user = User::factory()->create();
        $data = [
            'name' => 'Laravel PHP',
            'description' => 'El mejor framework de php',
            'category' => 'Desarrollo web'
        ];

        $this->actingAs($user)
        ->post(route('cursos.store'), $data);

        $this
        ->assertDatabaseCount('cursos',0);

    }

    public function test_auth_user_cant_create_an_instant()
    {
        $data = [
            'name' => 'Laravel PHP',
            'description' => 'El mejor framework de php',
            'category' => 'Desarrollo web'
        ];

        $this->post(route('cursos.store'), $data);
        $this->assertDatabaseCount('cursos',1);
    }
}
