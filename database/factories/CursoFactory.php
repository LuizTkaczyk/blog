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

        $nome = $this->faker->sentence();
        return [
            //criando url's amigaveis com slug
            'nome' => $nome,
            'slug' => Str::slug($nome,'-'),
            'descricao' => $this->faker->paragraph(),
            'categoria' => $this->faker->randomElement(['Dev. web', 'Web design', 'Web design'])
        ];
    }
}
