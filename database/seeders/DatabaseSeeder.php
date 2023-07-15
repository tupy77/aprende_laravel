<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //ASI SE CREAN REGISTROS EN LA BASE DE DATOS PERO NO ES RECOMENDABLE YA QUE SE RALIZAN DE 1 EN 1
        $curso = new Curso();

        $curso->name = 'Laravel';
        $curso->description = 'El mejor framework de PHP';
        $curso->category = 'Desarrollo web';

        $curso->save();

        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    }
}
