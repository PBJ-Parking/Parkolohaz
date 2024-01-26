<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Felhasznalo>
 */
class FelhasznaloFactory extends Factory
{
    protected static ?string $jelszo;
    public function definition(): array
    {
        return [
            'nev'=>fake('hu_HU')->name(),
            'telefonszam'=>fake('hu_HU')->phoneNumber(),
            'cim'=>fake('hu_HU')->address(),
            'email'=>fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'jelszo'=> static::$jelszo ??= Hash::make('jelszo'),
            'remember_token' => Str::random(10),
            'megrendelo_tipus'=>fake()->randomElement(['M', 'C']),
            'adoszam'=>fake()->regexify('[0-9]{13}'),
            'admin-e'=>fake()->boolean(),
        ];
    }
}
