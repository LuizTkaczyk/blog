<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [

            'nome' => $this->faker->sentence(),
            'descricao' => $this->faker->paragraph(),
            'categoria' => $this->faker->randomElement(['Dev. web', 'Web design', 'Web design'])
        ];
    }
}
