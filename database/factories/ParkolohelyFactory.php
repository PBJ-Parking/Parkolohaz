<?php

namespace Database\Factories;
use App\Models\Tipus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Parkolohely>
 */
class ParkolohelyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hely_tipusa' => Tipus::all()->random()->id,
            'statusz' => fake()->randomElement(['s', 'f', 'n', 'b']) ,
           
        ];
    }
}
