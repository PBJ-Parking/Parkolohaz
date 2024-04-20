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
        $hatartol =  rand(0, 100);
        $hatarig= rand($hatartol, 120);
        $mikortol = fake()->dateTimeBetween('-2 years', 'now');
        $meddig= fake()->dateTimeBetween($mikortol, '+1 years');
        return [
            'megnevezes' => fake('hu_HU')->text(50),
            'hatartol' =>  $hatartol,
            'hatarig' =>  $hatarig,
            'mikortol' =>  $mikortol,
            'meddig' => $meddig,
            'merteke' => rand(0,70), 
         
        ];
        
    }
}
