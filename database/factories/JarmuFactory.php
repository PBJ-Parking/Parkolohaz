<?php

namespace Database\Factories;

use App\Models\Felhasznalo;
use App\Models\Tipus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jarmu>
 */
class JarmuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'felhasznalok_id' => Felhasznalo::all()->random()->id,
            'jarmu_tipus' => Tipus::all()->random()->id,
            'generalt_azon' => fake()->boolean()
        ];
    }
}
