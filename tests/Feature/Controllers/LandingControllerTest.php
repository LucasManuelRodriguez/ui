<?php

namespace Tests\Feature\Controllers;

use App\Models\curso;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LandingControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_see_a_landing_page()
    {
        $response = $this->get(route('cursos.index'));

        $response->assertStatus(200)
        ->assertViewIs('cursos.index');
    }

    public function test_can_see_all_users_instants_list()
    {
        User::factory()->create();
        $curso = curso::factory(2)->create();
        
        $response = $this->get(route('cursos.index'));

        $response->assertSee($curso[0]->name)
        ->assertSee($curso[1]->name);
    }
}
