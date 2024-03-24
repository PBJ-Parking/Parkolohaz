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
    
    public function definition(): array
    {
        $foglalas = fake()->dateTimeBetween('-3 hour', 'now');
        $kezdet = fake()->dateTimeBetween($foglalas, '+10 days');
        return [
            'jarmu_id' =>Jarmu::all()->random()->jarmu_id,
            'foglalas_datuma' => $foglalas,
            'foglalas_kezdet' => $kezdet,
            'foglalas_vege' => fake()->dateTimeBetween($kezdet, '+3 years'),
            'ar_id' => NapiArak::all()->random()->ar_id,
            'kedvezmeny_id' => Kedvezmenyek::all()->random()->kedvezmeny_id,
            'hely_id' => Parkolohely::all()->random()->hely_id,
            'fizetve' => fake()->boolean(),
        ];
    }
}
