<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\curso;
use App\Http\Controllers\CursoController;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        curso::factory(50)->create();
    }
}
