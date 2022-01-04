<?php

namespace Database\Seeders;

use App\Models\curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = new curso();
        $curso->name = 'Laravel';
        $curso->description = 'El mejor framework de PHP';
        $curso->category = 'Desarrollo Web';

        $curso->save();

        $curso2 = new curso();
        $curso2->name = 'Laravel';
        $curso2->description = 'El mejor framework de PHP';
        $curso2->category = 'Desarrollo Web';

        $curso2->save();

        $curso3 = new curso();
        $curso3->name = 'Laravel';
        $curso3->description = 'El mejor framework de PHP';
        $curso3->category = 'Desarrollo Web';

        $curso3->save();
    }
}
