<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //ASI SE CREAN REGISTROS EN LA BASE DE DATOS PERO NO ES RECOMENDABLE YA QUE SE RALIZAN DE 1 EN 1
        $curso = new Curso();

        $curso->name = 'Laravel';
        $curso->description = 'El mejor framework de PHP';
        $curso->category = 'Desarrollo web';

        $curso->save();   
    }
}
