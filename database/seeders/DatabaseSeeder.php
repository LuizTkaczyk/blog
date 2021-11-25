<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        //chamando a classe CursoSeeder criada para inserir os dados na tabela
        //$this->call(CursoSeeder::class);
        User::factory(10)->create();
        Curso::factory(20)->create();
      
    }
}
