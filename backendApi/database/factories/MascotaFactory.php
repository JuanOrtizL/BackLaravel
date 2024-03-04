<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mascota>
 */
class MascotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->name(),
            'edad' => fake()->numberBetween(1,20),
            'historial' => fake()->sentence(),
            'imagen' => fake()->phoneNumber(),
            'user_id' => fake()->numberBetween(1,5),
            'tipo_id' => fake()->numberBetween(1,5),
            'actividad_id' => fake()->numberBetween(1,5),
            'raza_id' => fake()->numberBetween(1,5),
            'tamano_id' => fake()->numberBetween(1,5),

        ];
    }
}
