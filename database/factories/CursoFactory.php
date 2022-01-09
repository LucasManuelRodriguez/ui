<?php

namespace Database\Factories;

use App\Models\curso;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{




    

    protected $model = curso::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'name'=>$this->faker->sentence(),
                'description'=>$this->faker->paragraph(),
                'category'=>$this->faker->randomElement(['dev web','design web']),
                'user_id'=>User::all()->random()
        ];
    }
}
