<?php

namespace Database\Factories;

use App\Models\User;
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
            'rendszam' => fake()->regexify('[A-Z]{4}\d{3}'),
            'felhasznalok_id' => User::all()->random()->id,
            'jarmu_tipus' => Tipus::all()->random()->id,
            'generalt_azon' => fake()->boolean()
        ];
    }
}
