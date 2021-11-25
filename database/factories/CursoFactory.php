<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Curso::class;

    public function definition()
    {

        $name = $this->faker->sentence();
        return [
            //criando url's amigaveis
            'nome' => $name,

            'slug' => Str::slug($name,'-'),

            'descricao' => $this->faker->paragraph(),
            'categoria' => $this->faker->randomElement(['Dev. web', 'Web design', 'Web design'])
        ];
    }
}
