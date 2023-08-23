<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $curso = Curso::class;

    public function definition(): array
    {
        return [
            //
            'name' =>$this->faker->sentence(), // Quiero que se llene de una oracion
            'description' =>$this->faker->paragraph(), // Que se llene en forma de parrafo
            'categoria' =>$this->faker->randomElement(['Backend', 'Frontend']) // Que se llenusando alguna de las dos opciones
        ];
    }
}
