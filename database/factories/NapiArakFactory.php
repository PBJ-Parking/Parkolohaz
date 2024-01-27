<?php

namespace Database\Factories;

use App\Models\Tipus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NapiArak>
 */
class NapiArakFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'megnevezes' => fake('hu_HU')->sentence(),
            'ar' => rand(350,1000),
            'mikortol' => fake()->date(),
            'tipus' => Tipus::all()->random()->id
        ];
    }
}
