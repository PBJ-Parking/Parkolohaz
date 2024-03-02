<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kedvezmenyek>
 */
class KedvezmenyekFactory extends Factory
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
            'hatartol' => rand(400, 1000),
            'mikortol' => fake()->date(),
            'merteke' => rand(0,70),
        ];
    }
}
