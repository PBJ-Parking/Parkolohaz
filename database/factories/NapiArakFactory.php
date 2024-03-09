<?php

namespace Database\Factories;

use App\Models\Tipus;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

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
            'megnevezes' => fake('hu_HU')->realText(50),
            'ar' => rand(350, 1000),
            'mikortol' => '2024-10-10',
            'tipus' => Tipus::all()->random()->id
        ];
    }
}
