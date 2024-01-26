<?php

namespace Database\Factories;

use App\Models\Jarmu;
use App\Models\Kedvezmenyek;
use App\Models\NapiArak;
use App\Models\Parkolohely;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berles>
 */
class BerlesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rendszam' => Jarmu::all()->random()->rendszam,
            'foglalas_datuma' => fake()->dateTime(),
            'foglalas_kezdet' => fake()->date(),
            'foglalas_vege' => fake()->date(),
            'ar_id' => NapiArak::all()->random()->ar_id,
            'kedvezmeny_id' => Kedvezmenyek::all()->random()->kedvezmeny_id,
            'hely_id' => Parkolohely::all()->random()->hely_id,
            'generalt_kod' => Jarmu::all()->random()->rendszam,
            'fizetve' => fake()->boolean(),
        ];
    }
}
